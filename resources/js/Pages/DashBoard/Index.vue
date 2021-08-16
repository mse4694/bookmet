<template>
    <Layout>
        <div class="flex flex-col w-full h-full px-2 py-2  mb-10 bg-gray-100">
            <div class="text-3xl font-bold border-double border-b-2 border-opacity-25 border-blue-500 mb-4">ภาพรวมหน้าหลัก</div>
            <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
                <MyCard Status="การจองห้อง ทั้งหมด" Count=" 1024">
                    <div class="p-3 mr-4 text-blue-500 bg-blue-100 rounded-full">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z">
                            </path>
                        </svg>
				    </div>
                </MyCard>      
                <MyCard Status="อนุมัติ ทั้งหมด" Count="900">
                    <div class="p-3 mr-4 text-green-500 bg-green-100 rounded-full">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z">
                            </path>
                        </svg>
                    </div>
                </MyCard>
                <MyCard Status="รออนุมัติ ทั้งหมด" Count="24">
                    <div class="p-3 mr-4 text-red-500 bg-red-100 rounded-full">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z">
                            </path>
                        </svg>
                    </div>
                </MyCard>
                <MyCard Status="ไม่อนุมัติ ทั้งหมด" Count="100">
                    <div class="p-3 mr-4 text-yellow-500 bg-yellow-100 rounded-full">
                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="8" r="7"></circle>
                            <polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"></polyline>
                        </svg>
                    </div>
                </MyCard>
		    </div>

            <!-- <div class="grid md:grid-cols-3 lg:grid-cols-6"> -->
                <!-- <Card style="width: 17em">
                    <template #subtitle>
                        <b>ห้อง PK1 xxxxxxxx</b>
                    </template>
                    <template #content>
                        <Button type="button" label="รออนุมัติ" icon="pi pi-users" class="p-button-info"  badge="8" badgeClass="p-badge-warning" />
                        <Button icon="pi pi-times" label="Cancel" class="p-button-secondary" style="margin-left: .5em" />
                    </template>
                </Card> -->
            <!-- </div> -->
        </div>
    </Layout>
</template>

<script>
import { ref, onMounted } from 'vue';
import Layout from '@/Components/Layouts/Layout';
import Card from 'primevue/card';
import Button from 'primevue/button';
import Badge from 'primevue/badge';
import Avatar from 'primevue/avatar';
import AvatarGroup from 'primevue/avatargroup';

//My Utilities
import MyCard from '@/Components/Utilities/Card';

//My Service
import MeetingRoomService from '@/Services/MeetingRoomService';

export default {
    components: {
        Layout, Card, Button, Badge, Avatar, AvatarGroup, MyCard 
    },
    
    setup() {
        onMounted(() => {
            meetingRoomService.value.getAllRoom().then(data => meetingrooms.value = data);
        })

        const meetingrooms = ref([]);
        const meetingRoomService = ref(new MeetingRoomService());

        return {
            meetingrooms 
        }
    }
}
</script>