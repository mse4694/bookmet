<template>
    <div>
        <div class="card">
            <Toolbar>
                <template #left>
                    <div class="px-2"><Button label="เพิ่ม" icon="pi pi-plus" class="p-button-success"/></div>
                    <div><Button label="ลบ" icon="pi pi-trash" class="p-button-danger" :disabled="!selectedMeetingRooms || !selectedMeetingRooms.length" /></div>
                </template>
            </Toolbar>

            <DataTable ref="dt" :value="meetingRooms" v-model:selection="selectedMeetingRooms" dataKey="id" 
                :paginator="true" :rows="10" :filters="filters"
                paginatorTemplate="FirstPageLink PrevPageLink PageLinks NextPageLink LastPageLink CurrentPageReport RowsPerPageDropdown" :rowsPerPageOptions="[5,10,25]"
                currentPageReportTemplate="Showing {first} to {last} of {totalRecords} products" responsiveLayout="scroll">
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

                <Column header="Image">
                     <template #body="slotProps">
                        <img src="/storage/meeting_room.jpg" :alt="slotProps.data.image" class="product-image" />
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
                </Column>

                <Column :exportable="false">
                    <template #body>
                        <div class="mr-2"><Button icon="pi pi-pencil" class="p-button-rounded p-button-success"/></div>
                        <div><Button icon="pi pi-trash" class="p-button-rounded p-button-warning" /></div>
                    </template>
                </Column>

            </DataTable>
        </div>
	</div>
</template>

<script>
import { ref, onMounted } from 'vue';
import { FilterMatchMode } from 'primevue/api';
import Button from 'primevue/button';
import Toolbar from 'primevue/toolbar';
import InputText from 'primevue/inputtext';
import DataTable from 'primevue/datatable';
import Column from 'primevue/column';
// import { Menu, MenuButton, MenuItems, MenuItem } from "@headlessui/vue";
// import { ChevronDownIcon } from '@heroicons/vue/solid'
import MeetingRoomService from '@/Services/MeetingRoomService';

export default {
    components: {
        Button, Toolbar, InputText, DataTable, Column,
    },

    setup() {
        onMounted(() => {
            meetingRoomService.value.getAllRoom().then(data => meetingRooms.value = data);
        })

        //const toast = useToast();
        const dt = ref();
        const meetingRooms = ref();
        const meetingRoomService = ref(new MeetingRoomService());
        const selectedMeetingRooms = ref();
        const submitted = ref(false);
        const filters = ref({
            'global': {value: null, matchMode: FilterMatchMode.CONTAINS},
        });

        return { 
            dt, meetingRooms,  
            selectedMeetingRooms, filters, submitted, 
        }
    }
}
</script>

<style>

.product-image {
    width: 100px;
    box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
}
</style>