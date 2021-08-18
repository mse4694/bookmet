<template>
    <Layout> 
        <!-- <div class="text-3xl font-bold">จองห้องประชุม</div> -->
        <div class="flex flex-col flex-shrink-0 w-full h-full px-2 py-2 bg-gray-100">
            <div class="text-3xl font-bold border-double border-b-2 border-opacity-25 border-blue-500">จองห้องประชุม</div>
            <!-- <div class="grid grid-rows-11 grid-flow-col mt-10 mx-5">
                <div class="col-span-2"><label for="startDateTime" class="text-lg pr-4">เริ่มจองวันที่ ตั้งแต่เวลา :</label></div>
                <div class="col-span-2"><Calendar class="w-full md:w-6/12" id="startDateTime" v-model="startDateTime" :monthNavigator="true" :yearNavigator="true" yearRange="2000:2030" :showIcon="true" :showButtonBar="true" :showTime="true" hourFormat="24" /></div>
            </div> -->

            <div class="grid grid-cols-1 mt-4 mx-5">
                <div><label for="startDateTime" class="col-span-1 text-md pr-4">เริ่มจองวันที่ ตั้งแต่เวลา :</label></div>
                <div class="col-span-1 w-full">
                    <Calendar class="w-full" id="startDateTime" v-model="startDateTime" :monthNavigator="true" :yearNavigator="true" yearRange="2000:2030" :showIcon="true" :showButtonBar="true" :showTime="true" hourFormat="24" />
                </div>
            </div>
            <div class="grid grid-cols-1 mt-4 mx-5">
                <div><label for="endDateTime" class="text-md pr-4">จองถึงวันที่ สิ้นสุดเวลา :</label></div>
                <div>
                    <Calendar class="w-full" id="endDateTime" v-model="endDateTime" :monthNavigator="true" :yearNavigator="true" yearRange="2000:2030" :showIcon="true" :showButtonBar="true" :showTime="true" hourFormat="24" />
                </div>
            </div>
            <div class="grid grid-cols-1 mt-4 mx-5">
                <div><label for="selectObjective" class="text-md pr-4">วัตถุประสงค์การจองห้อง :</label></div>
                <div>
                    <Dropdown class="w-full" id="selectObjective" v-model="selectObjective" :options="objectives" optionLabel="name" placeholder="เลือกวัตถุประสงค์" />
                </div>
            </div>
            <div class="grid grid-cols-1 mt-4 mx-5">
                <div><label for="numberPersonal" class="text-md pr-4">จำนวนผู้เข้าร่วม :</label></div>
                <div>
                    <InputNumber class="w-full" id="numberPersonal" v-model="numberPersonal" showButtons mode="decimal" :min="2" :max="500"/>
                </div>
            </div>
            <div class="grid grid-cols-1 mt-4 mx-5">
                <div><label for="selectMeetingRoom" class="text-md pr-4">เลือกห้องที่ต้องการ :</label></div>
                <div>
                    <Dropdown @change="changeRoom" class="w-full" id="selectMeetingRoom" v-model="selectMeetingRoom" :options="meetingrooms" optionLabel="room_label" placeholder="เลือกห้องประชุม" />
                </div>
            </div>

            <div class="flex flex-col flex-1" :class="{ hidden: roomPictureIsHidden }"><img class="object-fill object-center bg-yellow-300 mt-4 mx-5" src="/storage/meeting_room.jpg"></div>
            
            <!-- แสดงข้อมูลหลังจากห้องที่เลือกตามวันเวลานั้นสามารถทำการจองได้ -->
            <div :class="{ hidden: notBookingRoom }">
                <div class="grid grid-cols-1 mt-4 mx-5">
                    <div><label for="topicConference" class="text-md pr-4">ชื่อกิจกรรม/หัวข้อการประชุม :</label></div>
                    <div>
                        <InputText class="w-full" id="topicConference" type="text" v-model="topicConference" />
                    </div>
                </div>

                <div class="grid grid-cols-1 mt-4 mx-5">
                    <div><label for="moreDetails" class="text-md pr-4">รายละเอียดเพิ่มเติม :</label></div>
                    <div>
                        <InputText class="w-full" id="moreDetails" type="text" v-model="moreDetails" />
                    </div>
                </div>

                <div class="grid grid-cols-1 mt-4 mx-5">
                    <div><label for="bookerName" class="text-md pr-4">ชื่อผู้รับผิดชอบ :</label></div>
                    <div>
                        <InputText class="w-full" id="bookerName" type="text" v-model="bookerName" />
                    </div>
                </div>

                <div class="grid grid-cols-1 mt-4 mx-5">
                    <div><label for="coordinateName" class="text-md pr-4">ชื่อผู้ประสานงาน :</label></div>
                    <div>
                        <InputText class="w-full" id="coordinateName" type="text" v-model="coordinateName" />
                    </div>
                </div>

                <div class="grid grid-cols-1 mt-4 mx-5">
                    <div><label for="phone" class="text-md pr-4">เบอร์โทรติดต่อกลับ :</label></div>
                    <div>
                        <InputText class="w-full" id="phone" type="text" v-model="phone" />
                    </div>
                </div>

                <div class="grid grid-cols-1 mt-4 mx-5">
                    <div><label for="accessoriesRequire" class="text-md pr-4">อุปกรณ์ที่ต้องการใช้งาน :</label></div>
                    <div>
                        <MultiSelect class="w-full" id="accessoriesRequire" v-model="accessoriesRequire" :options="accessories" optionLabel="name" placeholder="เลือกอุปกรณ์เพิ่มเติม" display="chip" />
                    </div>
                </div>

                <div class="grid grid-cols-1 mt-4 mx-5">
                    <div><label for="foodAndDrink" class="text-md pr-4">อาหารและเครื่องดื่ม :</label></div>
                    <div>
                        <MultiSelect class="w-full" id="foodAndDrink" v-model="foodAndDrinkRequire" :options="foodAndDrink" optionLabel="name" placeholder="เลือก" display="chip" />
                    </div>
                </div>

                <div class="grid grid-cols-1 mt-4 mx-5  mb-20">
                    <div><Button label="ตรวจสอบ" class="w-full p-button-outlined"/></div>
                </div>
            </div>
        </div>
    </Layout>
</template>

<script>


//import Header from '../../Components/Layouts/Header';
import { ref, onMounted } from 'vue';
import Layout from '@/Components/Layouts/Layout';
import Calendar from 'primevue/calendar';
import Dropdown from 'primevue/dropdown';
import InputNumber from 'primevue/inputnumber';
import InputText from 'primevue/inputtext';
import MultiSelect from 'primevue/multiselect';
import Button from 'primevue/button';

import MeetingRoomService from '@/Services/MeetingRoomService';

export default {
    components: {
        Layout, Calendar, Dropdown, InputNumber, InputText, Button, MultiSelect,
    },
    
    setup() {
        onMounted(() => {
            meetingRoomService.value.getAllRoom().then(data => meetingrooms.value = data);
        })

        const startDateTime = ref();
        const endDateTime = ref();
        const selectObjective = ref();
        const objectives = ref([
            {name: 'ประชุม', code: 'CON'},
            {name: 'นั่งเล่น', code: 'PLY'},
            {name: 'ประชุมลับ', code: 'SEC'},
            {name: 'การเรียนการสอน', code: 'LER'},
            {name: 'สันทนาการ', code: 'ACT'}
        ]);
        const selectMeetingRoom = ref();
        const meetingrooms = ref([]);
        const meetingRoomService = ref(new MeetingRoomService());
        // const meetingrooms = ref([
        //     {label: 'PK1', value: 'PK1'},
        //     {label: 'PK2', value: 'PK2'},
        //     {label: 'PK3', value: 'PK3'},
        //     {label: 'PK4', value: 'PK4'},
        //     {label: 'นวมิทรบพิตร 26 ห้อง 1', value: 'NV1'}
        // ]);
        const numberPersonal = ref(2);
        const topicConference = ref();
        const moreDetails = ref();
        const bookerName = ref();
        const coordinateName = ref();
        const phone = ref();
        const accessoriesRequire = ref();
        const accessories = ref([
            {name: 'คอมพิวเตอร์', code: 'COM'},
            {name: 'LCD Projector', code: 'LCD'},
            {name: 'Visualizer', code: 'VIS'},
            {name: 'ระบบเสียง', code: 'SOU'},
            {name: 'อื่นๆ', code: 'OTH'}
        ]);
        const foodAndDrinkRequire = ref();
        const foodAndDrink = ref([
            {name: 'อาหารกลางวัน', code: 'LUN'},
            {name: 'อาหารว่าง', code: 'SNA'},
            {name: 'เครื่องดื่ม', code: 'DRI'},
        ]);

        const roomPictureIsHidden = ref(true);
        const notBookingRoom = ref(true);

        function changeRoom() {
            console.log(selectMeetingRoom.value.room_value);
            if(selectMeetingRoom.value.value !== "") {
                roomPictureIsHidden.value = false;
            }

            notBookingRoom.value = false;
        }

        return {
            startDateTime, endDateTime, selectObjective, objectives, numberPersonal, 
            selectMeetingRoom, meetingrooms, topicConference, moreDetails, bookerName, 
            coordinateName, phone, accessoriesRequire, accessories, foodAndDrinkRequire, foodAndDrink,
            roomPictureIsHidden, notBookingRoom, changeRoom 
        }
    },
}
</script>