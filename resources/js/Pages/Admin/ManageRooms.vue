<template>
    <Layout>
    <div>
        <div class="text-3xl font-bold border-double border-b-2 border-opacity-25 border-blue-500 mt-4 mb-4">ข้อมูลห้องประชุม</div>
        <div class="card">
            <Toolbar>
                <template #left>
                    <div class="px-2"><Button label="เพิ่ม" icon="pi pi-plus" class="p-button-success"/></div>
                    <div><Button label="ลบ" icon="pi pi-trash" class="p-button-danger" @click="confirmDeleteSelected" :disabled="!selectedMeetingRooms || !selectedMeetingRooms.length" /></div>
                </template>
            </Toolbar>
            <div class="mb-20">
            <DataTable ref="dt" :value="meetingRooms" v-model:selection="selectedMeetingRooms" dataKey="id" 
                :paginator="true" :rows="10" :filters="filters" stripedRows class="p-datatable-sm"
                paginatorTemplate="FirstPageLink PrevPageLink PageLinks NextPageLink LastPageLink CurrentPageReport RowsPerPageDropdown" :rowsPerPageOptions="[5,10,25]"
                currentPageReportTemplate="แสดง {first} ถึง {last} จากทั้งหมด {totalRecords}" responsiveLayout="scroll">
                <template #header>
                    <div class="flex flex-col md:flex-row items-center justify-between">
						<h5 class="mb-2">จัดการห้องประชุม</h5>
						<span class="p-input-icon-left">
                            <i class="pi pi-search" />
                            <InputText v-model="filters['global'].value" placeholder="Search..." />
                        </span>
					</div>
                </template>

                <Column selectionMode="multiple" style="width: 3rem" :exportable="false"></Column>

                <Column field="id" header="#" :sortable="true" style="min-width:5rem"></Column>

                <Column header="รูปห้อง">
                     <template #body="slotProps">
                        <img src="/storage/meeting_room.jpg" :alt="slotProps.data.image" class="meeting_room-image" />
                    </template>
                </Column>

                <Column field="room_label" header="ชื่อเต็ม" :sortable="true" style="min-width:15rem"></Column>
                
                <Column field="room_value" header="ชื่อย่อ" :sortable="true" style="min-width:10rem">

                </Column>

                <Column field="building" header="สถานที่" :sortable="true" style="min-width:10rem">></Column>

                <Column field="status" header="สถานะ" :sortable="true" style="min-width:5rem">>
                    <!-- <template #body="slotProps">
                        <span :class="'product-badge status-' + (slotProps.data.inventoryStatus ? slotProps.data.inventoryStatus.toLowerCase() : '')">{{slotProps.data.inventoryStatus}}</span>
                    </template> -->
                    <template #body="slotProps">
                        <span :class="'rounded-md py-1 px-2 border-opacity-50 shadow-lg font-semibold status-' + (slotProps.data.status ? slotProps.data.status.toLowerCase() : '')">{{slotProps.data.status}}</span>
                    </template>
                </Column>

                <Column :exportable="false">
                    <template #body>
                        <div class="mr-2"><Button icon="pi pi-pencil" class="p-button-sm p-button-rounded p-button-success"/></div>
                        <div><Button icon="pi pi-trash" class="p-button-sm p-button-rounded p-button-warning" /></div>
                    </template>
                </Column>

            </DataTable>
            </div>
        </div>

        <Dialog v-model:visible="deleteMeetingRoomsDialog" :style="{width: '450px'}" header="ยืนยัน" :modal="true">
            <div class="flex items-center justify-center">
                <i class="pi pi-exclamation-triangle mr-3" style="font-size: 2rem" />
                <span v-if="meetingRooms">คุณต้องการลบห้องประชุม ทั้งหมด ที่เลือกไว้ ?</span>
            </div>
            <template #footer>
                <Button label="ไม่ใช่" icon="pi pi-times" class="" @click="deleteMeetingRoomsDialog = false"/>
                <Button label="ใช่" icon="pi pi-check" class="p-button-raised p-button-text p-button-danger" @click="deleteSelectedMeetingRooms" />
            </template>
        </Dialog>
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
import MeetingRoomService from '@/Services/MeetingRoomService';

export default {
    components: {
        Toolbar, InputText, DataTable, Column, Dialog, useToast, Toast,  
    },

    setup() {
        onMounted(() => {
            meetingRoomService.value.getAllRoom().then(data => meetingRooms.value = data);
        })

        const toast = useToast();
        const dt = ref();
        const meetingRooms = ref();
        //const meetingRoom = ref({});
        const meetingRoomService = ref(new MeetingRoomService());
        const selectedMeetingRooms = ref();
        const submitted = ref(false);
        const filters = ref({
            'global': {value: null, matchMode: FilterMatchMode.CONTAINS},
        });
        const deleteMeetingRoomsDialog = ref(false);

        const confirmDeleteSelected = () => {
            deleteMeetingRoomsDialog.value = true;
        };

        const deleteSelectedMeetingRooms = () => {
            meetingRooms.value = meetingRooms.value.filter(val => !selectedMeetingRooms.value.includes(val));
            deleteMeetingRoomsDialog.value = false;
            selectedMeetingRooms.value = null;
            toast.add({severity:'success', summary: 'สำเร็จ', detail: 'ห้องประชุมที่เลือก ถูกลบแล้ว', life: 3000});
        };

        return { 
            dt, meetingRooms,  
            selectedMeetingRooms, filters, submitted,
            deleteMeetingRoomsDialog, deleteSelectedMeetingRooms,
            confirmDeleteSelected  
        }
    }
}
</script>

<style scoped>

.meeting_room-image {
    width: 100px;
    box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
}

.status-ready {
    background-color: aquamarine;
}

.status-unready {
    background-color:coral;
}
</style>