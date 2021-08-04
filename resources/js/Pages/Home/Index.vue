<template>
    <Header />
    <div class="container flex flex-row">
        <div> 
            <NavSideBar />
            <Head title="Welcome" />
        </div>

        <div class="w-screen h-screen items-start justify-left bg-green-100 px-1 py-1">
            <!-- <div class="w-screen px-2 py-2 bg-white"> -->
            <div class="flex flex-col w-full h-full px-2 py-2 bg-white">
                <div class="text-3xl font-bold border-double border-b-2 border-opacity-25 border-blue-500">จองห้องประชุม</div>
                <div class="grid grid-cols-1 py-7">
                    <span class="p-float-label mx-5">
                        <Calendar class="w-full" id="calendar" v-model="startDate" :monthNavigator="true" :yearNavigator="true" yearRange="2000:2030" :showIcon="true" :showButtonBar="true" selectionMode="range" />
                        <label for="calendar" class="text-xl">เริ่มจองวันที่ ถึง วันที่</label>
                    </span>
                    <!-- <span class="p-float-label mx-5 ">
                        <Calendar id="calendar" v-model="endDate" :showIcon="true" :showButtonBar="true" :numberOfMonths="2" />
                        <label for="calendar">จองถึงวันที่</label>
                    </span> -->
                </div>
            </div>
        </div>          
    </div>
</template>

<script>


//import Header from '../../Components/Layouts/Header';
import Header from '@/Components/Layouts/Header';
import {Head} from '@inertiajs/inertia-vue3';
import NavSideBar from '@/Components/Layouts/NavSideBar';
import Calendar from 'primevue/calendar';

export default {
    components: {
        Head, Header, NavSideBar, Calendar,
    },
    // created() {
    //     let today = new Date();
    //     let month = today.getMonth();
    //     let year = today.getFullYear();
    //     let prevMonth = (month === 0) ? 11 : month -1;
    //     let prevYear = (prevMonth === 11) ? year - 1 : year;
    //     let nextMonth = (month === 11) ? 0 : month + 1;
    //     let nextYear = (nextMonth === 0) ? year + 1 : year;
    //     this.minDate = new Date();
    //     this.minDate.setMonth(prevMonth);
    //     this.minDate.setFullYear(prevYear);
    //     this.maxDate = new Date();
    //     this.maxDate.setMonth(nextMonth);
    //     this.maxDate.setFullYear(nextYear);

    //     let invalidDate = new Date();
    //     invalidDate.setDate(today.getDate() - 1);
    //     this.invalidDates = [today,invalidDate];
    // },
    data() {
        return {
            startDate: null,
            endDate: null,
        }
    }
}
</script>