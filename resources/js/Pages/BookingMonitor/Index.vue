<template>
    <Layout> 
        
        <!-- <div class="text-3xl font-bold border-double border-b-2 border-opacity-25 border-blue-500">ติดตามผลการจอง</div> -->
        <div class="flex flex-col w-full h-full py-2 mb-10 bg-gray-200 overscroll-y-auto overflow-y-auto">
            <div class="text-3xl font-bold border-double border-b-2 border-opacity-25 border-blue-500 mb-4 px-2">ติดตามผลการจอง</div>
            <div class="flex flex-col lg:flex-row w-full">
                <div class="block lg:inline-flex mt-4 mx-5 flex-grow">
                    <label for="startDate" class="flex-none self-end text-md pr-4">ตั้งแต่วันที่ :</label>
                    <div class="flex-grow">
                    <Calendar class="w-full" id="startDate" v-model="startDate" :monthNavigator="true" :yearNavigator="true" yearRange="2000:2030" :showIcon="true" :showButtonBar="true" hourFormat="24" />
                    </div>
                </div>
                <div class="block lg:inline-flex mt-4 mx-5 flex-grow">
                    <label for="endDate" class="flex-none self-end text-md pr-4">ถึงวันที่ :</label>
                    <div class="flex-grow">
                        <Calendar class="w-full" id="endDate" v-model="endDate" :monthNavigator="true" :yearNavigator="true" yearRange="2000:2030" :showIcon="true" :showButtonBar="true" hourFormat="24" />
                    </div>
                </div>
                
                <div class="flex-shrink-0 mt-4 mx-5">
                    <Button label="ตรวจสอบ" class="p-button-outlined w-full"/>
                </div>
            </div>

            <div class="text-3xl font-bold border-double border-b-2 border-opacity-25 border-blue-500 mt-10 mb-4 self-center">รายการจองห้องประชุม</div>
            <!-- Datatable -->
            <div>
                <!-- <DataTable :value="bookingHistory" responsiveLayout="stack" breakpoint="1024px"> -->
                <DataTable  :value="bookingHistory" :resizableColumns="true" columnResizeMode="fit" 
                            :paginator="true" :rows="5"
                            paginatorTemplate="CurrentPageReport FirstPageLink PrevPageLink PageLinks NextPageLink LastPageLink RowsPerPageDropdown"
                            :rowsPerPageOptions="[5,10,20,50]"
                            responsiveLayout="scroll" class="px-5 py-5"
                            currentPageReportTemplate="แสดง {first} ถึง {last} จากทั้งหมด {totalRecords}">
                    <Column v-for="col of columns" :field="col.field" :header="col.header" :key="col.field"></Column>
                </DataTable>
            </div>
        </div>
        
    </Layout>
</template>

<script>

import { ref, onMounted } from 'vue';
import Layout from '@/Components/Layouts/Layout';
// import Calendar from 'primevue/calendar';
// import DataTable from 'primevue/datatable';
// import Column from 'primevue/column';
// import Button from 'primevue/button';
import BookingHistoryService from '@/Services/BookingHistoryService';

export default {
    components: {
        Layout,
    },
    
    setup() {
        
        onMounted(() => {
            bookingHistoryService.value.getBookingHistory().then(data => bookingHistory.value = data);
        })

        const startDate = ref();
        const endDate = ref();
        const columns = ref([
            {field: 'id', header: '#'},
            {field: 'date', header: 'วันที่'},
            {field: 'time', header: 'เวลา'},
            {field: 'room', header: 'ห้อง'},
            {field: 'topicConference', header: 'หัวข้อการประชุม'},
            {field: 'bookerName', header: 'ผู้จอง'},
            {field: 'status', header: 'สถานะ'},
            {field: 'reason', header: 'สาเหตุ'},
            // {field: 'drink', header: 'เครื่องดื่ม'},
            // {field: 'snack', header: 'อาหารว่าง'},
            // {field: 'food', header: 'อาหารกลางวัน'}
        ]);
        const bookingHistory = ref();
        const bookingHistoryService = ref(new BookingHistoryService());

        return {
                    startDate, endDate, columns, bookingHistory,
                }
    },
}
</script>