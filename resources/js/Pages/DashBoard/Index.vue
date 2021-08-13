<template>
    <Layout>
        <div class="flex flex-col w-full h-full px-2 py-2 bg-gray-100">
            <div class="text-3xl font-bold border-double border-b-2 border-opacity-25 border-blue-500 mb-4">ภาพรวมหน้าหลัก</div>
            <div class="flex-row ">
                <Card style="width: 17em">
                    <!-- <template #header>
                        <img src="/storage/meeting_room.jpg" style="height: 8rem" />
                    </template> -->
                    <!-- <template #title>
                        ห้อง PK1 xxxxxxxx
                    </template> -->
                    <template #subtitle>
                        <b>ห้อง PK1 xxxxxxxx</b>
                    </template>
                    <template #content>
                        <Button type="button" label="รออนุมัติ" icon="pi pi-users" class="p-button-info"  badge="8" badgeClass="p-badge-warning" />
                        <!-- <Button icon="pi pi-times" label="Cancel" class="p-button-secondary" style="margin-left: .5em" /> -->
                    </template>
                    <!-- <template #footer>
                        <Button icon="pi pi-check" label="Save" />
                        <Button icon="pi pi-times" label="Cancel" class="p-button-secondary" style="margin-left: .5em" />
                    </template> -->
                </Card>
            </div>
        </div>
    </Layout>
</template>

<script>
import { ref, onMounted } from 'vue';
import Layout from '@/Components/Layouts/Layout';
import Card from 'primevue/card';
import Button from 'primevue/button';
import Badge from 'primevue/badge';

//My Service
import MeetingRoomService from '@/Services/MeetingRoomService';

export default {
    components: {
        Layout, Card, Button, Badge,
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