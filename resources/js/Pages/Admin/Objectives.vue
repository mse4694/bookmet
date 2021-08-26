<template>
    <Layout>
    <div>
        <div class="text-3xl border-double border-b-2 border-opacity-25 border-blue-500 mt-4 mb-4 ml-2">วัตถุประสงค์การใช้ห้อง</div>
        <div class="ml-4 mr-4">
            <Toolbar>
                <template #left>
                    <div class="px-2"><Button label="เพิ่ม" icon="pi pi-plus" class="p-button-success"/></div>
                    <div><Button label="ลบ" icon="pi pi-trash" class="p-button-danger" :disabled="!selectedObjectives || !selectedObjectives.length" /></div>
                </template>
            </Toolbar>
            <div class="mb-20" style="height: calc(100vh - 200px)">
            <DataTable ref="dt" :value="objectives" v-model:selection="selectedObjectives" dataKey="id" 
                :paginator="true" :rows="10" :filters="filters" :scrollable="true" scrollHeight="flex" stripedRows class="p-datatable-sm"
                paginatorTemplate="FirstPageLink PrevPageLink PageLinks NextPageLink LastPageLink CurrentPageReport RowsPerPageDropdown" :rowsPerPageOptions="[5,10,25]"
                currentPageReportTemplate="แสดง {first} ถึง {last} จากทั้งหมด {totalRecords}" responsiveLayout="scroll">
                <template #header>
                    <div class="flex flex-col md:flex-row items-center justify-between">
						<h5 class="mb-2">จัดการวัตถุปะสงค์การใช้ห้อง</h5>
						<span class="p-input-icon-left">
                            <i class="pi pi-search" />
                            <InputText v-model="filters['global'].value" placeholder="Search..." />
                        </span>
					</div>
                </template>

                <Column selectionMode="multiple" style="max-width:3rem" :exportable="false"></Column>

                <Column field="obj" header="วัตถุประสงค์" :sortable="true" style="min-width:20rem" />

                <Column :exportable="false" style="max-width:6rem">
                    <template #body="slotProps">
                        <div class="mr-2"><Button icon="pi pi-pencil" class="p-button-sm p-button-rounded p-button-success" @click="editProduct(slotProps.data)"/></div>
                        <div><Button icon="pi pi-trash" class="p-button-sm p-button-rounded p-button-warning" /></div>
                    </template>
                </Column>

            </DataTable>
            </div>
        </div>
	</div>

    <Toast position="top-right" />
    </Layout>
</template>

<script>
import { ref, onMounted } from 'vue';
import { FilterMatchMode } from 'primevue/api';
import { useToast } from "primevue/usetoast";
import Toast from 'primevue/toast';
import Toolbar from 'primevue/toolbar';
import InputText from 'primevue/inputtext';
import DataTable from 'primevue/datatable';
import Column from 'primevue/column';
import Dialog from 'primevue/dialog';
import Textarea from 'primevue/textarea';
import Dropdown from 'primevue/dropdown';
import RadioButton from 'primevue/radiobutton';
import InputNumber from 'primevue/inputnumber';
import ObjectiveService from '@/Services/ObjectiveService';

export default {
    components: {
        Toolbar, InputText, DataTable, Column, Dialog, useToast, Toast, Textarea, Dropdown, RadioButton, InputNumber  
    },

    setup() {
        onMounted(() => {
            objectiveService.value.getAllObj().then(data => objectives.value = data);
        })

        const toast = useToast();
        const dt = ref();
        const meetingRoom = ref({});
        const objectives = ref();
        const objectiveService = ref(new ObjectiveService());
        const selectedObjectives = ref();
        const meetingRoomDialog = ref(false);
        const submitted = ref(false);
        const filters = ref({
            'global': {value: null, matchMode: FilterMatchMode.CONTAINS},
        });
        const deleteMeetingRoomsDialog = ref(false);

        const confirmDeleteSelected = () => {
            deleteMeetingRoomsDialog.value = true;
        };

        const deleteSelectedMeetingRooms = () => {
            objectives.value = objectives.value.filter(val => !selectedObjectives.value.includes(val));
            deleteMeetingRoomsDialog.value = false;
            selectedObjectives.value = null;
            toast.add({severity:'success', summary: 'สำเร็จ', detail: 'ห้องประชุมที่เลือก ถูกลบแล้ว', life: 3000});
        };

        const openNew = () => {
            meetingRoom.value = {};
            submitted.value = false;
            meetingRoomDialog.value = true;
        };

        const hideDialog = () => {
            meetingRoomDialog.value = false;
            submitted.value = false;
        };

        const saveMeetingRoom = () => {
            submitted.value = true;
            
            // ใช้ตรวจสอบตัวแปร ว่ามีข้อมูลกรอกเข้ามาหรือไม่ ซึ่งถ้าไม่มีข้อมูล จะขึ้นเป็น undefine
            if(!(meetingRoom.value.room_full_name && meetingRoom.value.room_short_name 
                && meetingRoom.value.building_id && meetingRoom.value.room_size && meetingRoom.value.status
               )) {
                console.log('meetingRoom Object is missing some value');
            } else {
                if(meetingRoom.value.id) {
                    meetingRoom.value.status = meetingRoom.value.status.value ? meetingRoom.value.status.value : meetingRoom.value.status;
                    meetingRoom.value.building_id = meetingRoom.value.building_id.building_id ? meetingRoom.value.building_id.building_id : meetingRoom.value.building_id;
                    console.log("Edit Data");
                    meetingRooms.value[findIndexById(meetingRoom.value.id)] = meetingRoom.value;
                    toast.add({severity:'success', summary: 'Successful', detail: 'แก้ไขข้อมูลห้องประชุมเรียบร้อย', life: 3000});
                    console.log(meetingRooms.value);
                } else {
                    if(typeof meetingRoom.value.building_id === "object") {
                        //console.log("Add New Data");
                        meetingRoom.value.building_id = meetingRoom.value.building_id.building_id;
                        meetingRooms.value.push(meetingRoom.value);
                        toast.add({severity:'success', summary: 'Successful', detail: 'เพิ่มข้อมูลห้องประชุมใหม่เรียบร้อย', life: 3000});
                    }
                }
                meetingRoomDialog.value = false;
                meetingRoom.value = {};
            }
        };

        const editProduct = (mRoom) => {
            meetingRoom.value = {...mRoom};
            console.log(meetingRoom.value)
            meetingRoomDialog.value = true;
        };

        const findIndexById = (id) => {
            let index = -1;
            for (let i = 0; i < meetingRooms.value.length; i++) {
                if (meetingRooms.value[i].id === id) {
                    index = i;
                    break;
                }
            }

            return index;
        };

        return { 
            dt, objectives, 
            filters, submitted,
            deleteMeetingRoomsDialog, selectedObjectives,
            meetingRoomDialog, 
            openNew, hideDialog, confirmDeleteSelected, deleteSelectedMeetingRooms,    //Method
            saveMeetingRoom, editProduct, findIndexById  //Method
        }
    }
}
</script>