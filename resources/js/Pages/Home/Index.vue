<template>
    <Layout> 
        <div class="flex flex-col flex-shrink-0 w-full h-full px-2 py-2 bg-white">
            <div class="text-3xl font-bold border-double border-b-2 border-opacity-25 border-blue-500">จองห้องประชุม</div>
            <!-- <div class="grid grid-rows-11 grid-flow-col mt-10 mx-5">
                <div class="col-span-2"><label for="startDateTime" class="text-lg pr-4">เริ่มจองวันที่ ตั้งแต่เวลา :</label></div>
                <div class="col-span-2"><Calendar class="w-full md:w-6/12" id="startDateTime" v-model="startDateTime" :monthNavigator="true" :yearNavigator="true" yearRange="2000:2030" :showIcon="true" :showButtonBar="true" :showTime="true" hourFormat="24" /></div>
            </div> -->

            <div class="grid grid-cols-1 mt-10 mx-5">
                <div><label for="startDateTime" class="col-span-1 text-lg pr-4">เริ่มจองวันที่ ตั้งแต่เวลา :</label></div>
                <div class="col-span-1">
                    <Calendar class="w-full" id="startDateTime" v-model="startDateTime" :monthNavigator="true" :yearNavigator="true" yearRange="2000:2030" :showIcon="true" :showButtonBar="true" :showTime="true" hourFormat="24" />
                </div>
            </div>
            <div class="grid grid-cols-1 mt-4 mx-5">
                <div><label for="endDateTime" class="text-lg pr-4">จองถึงวันที่ สิ้นสุดเวลา :</label></div>
                <div>
                    <Calendar class="w-full" id="endDateTime" v-model="endDateTime" :monthNavigator="true" :yearNavigator="true" yearRange="2000:2030" :showIcon="true" :showButtonBar="true" :showTime="true" hourFormat="24" />
                </div>
            </div>
            <div class="grid grid-cols-1 mt-4 mx-5">
                <div><label for="selectObjective" class="text-lg pr-4">วัตถุประสงค์การจองห้อง :</label></div>
                <div>
                    <Dropdown class="w-full" id="selectObjective" v-model="selectObjective" :options="objectives" optionLabel="name" placeholder="เลือกวัตถุประสงค์" />
                </div>
            </div>
            <div class="grid grid-cols-1 mt-4 mx-5">
                <div><label for="numberPersonal" class="text-lg pr-4">จำนวนผู้เข้าร่วม :</label></div>
                <div>
                    <InputNumber class="w-full" id="numberPersonal" v-model="numberPersonal" showButtons mode="decimal" :min="2" :max="500"/>
                </div>
            </div>
            <div class="grid grid-cols-1 mt-4 mx-5">
                <div><label for="selectMeetingRoom" class="text-lg pr-4">เลือกห้องที่ต้องการ :</label></div>
                <div>
                    <Dropdown class="w-full" id="selectMeetingRoom" v-model="selectMeetingRoom" :options="meetingrooms" optionLabel="name" placeholder="เลือกห้องประชุม" />
                </div>
            </div>

            <div class="flex flex-col flex-1"><img class="object-fill object-center bg-yellow-300 mt-4 mx-5" src="/storage/meeting_room.jpg"></div>

            <div class="grid grid-cols-1 mt-4 mx-5">
                <div><Button label="ตรวจสอบ" class="w-full p-button-outlined"/></div>
            </div>
        </div>
    </Layout>
</template>

<script>


//import Header from '../../Components/Layouts/Header';
import { ref } from 'vue';
import Layout from '@/Components/Layouts/Layout';
import Calendar from 'primevue/calendar';
import Dropdown from 'primevue/dropdown';
import InputNumber from 'primevue/inputnumber';
import Button from 'primevue/button';

export default {
    components: {
        Layout, Calendar, Dropdown, InputNumber, Button,
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
    setup() {
        const startDateTime = ref();
        const endDateTime = ref();
        const selectObjective = ref();
        const objectives = ref([
            {name: 'ประชุม', code: 'NY'},
            {name: 'นั่งเล่น', code: 'RM'},
            {name: 'ประชุมลับ', code: 'LDN'},
            {name: 'การเรียนการสอน', code: 'IST'},
            {name: 'สันทนาการ', code: 'PRS'}
        ]);
        const selectMeetingRoom = ref();
        const meetingrooms = ref([
            {name: 'PK1', code: 'NY'},
            {name: 'PK2', code: 'RM'},
            {name: 'PK3', code: 'LDN'},
            {name: 'PK4', code: 'IST'},
            {name: 'นวมิทรบพิตร 26 ห้อง 1', code: 'PRS'}
        ]);
        const numberPersonal = ref(2);

        return {startDateTime, endDateTime, selectObjective, objectives, numberPersonal, selectMeetingRoom, meetingrooms}
    },
}
</script>