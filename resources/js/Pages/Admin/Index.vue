<template>
    <Layout>
        <div class="flex flex-col w-full h-full px-2 py-2  mb-10 bg-gray-100">
            <div class="text-3xl font-bold border-double border-b-2 border-opacity-25 border-blue-500 mt-10 mb-4">ส่วนผู้ควบคุม</div>

            <TabView class="tabview-custom" ref="tabview4">
                <TabPanel>
                    <template #header>
                        <i class="pi pi-calendar"></i>
                        <span>สิทธิ์ผู้ใช้งาน</span>
                    </template>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                        ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </TabPanel>
                <TabPanel>
                    <template #header>
                        <span>ข้อมูลห้องประชุม</span>
                        <i class="pi pi-user"></i>
                    </template>
                    <ManageRooms />
                </TabPanel>
                <TabPanel>
                    <template #header>
                        <i class="pi pi-search"></i>
                        <span>วัตถุประสงค์การใช้ห้อง</span>
                    </template>
                   <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati
                        cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.
                        Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus.</p>
                </TabPanel>
                <TabPanel>
                    <template #header>
                        <i class="pi pi-search"></i>
                        <span>ข้อมูลหน่วยงาน</span>
                        <i class="pi pi-cog"></i>
                    </template>
                   <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati
                        cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.
                        Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus.</p>
                </TabPanel>
            </TabView>
        </div>
    </Layout>
</template>

<script>
import { ref } from 'vue';
import Layout from '@/Components/Layouts/Layout';
import TabView from 'primevue/tabview';
import TabPanel from 'primevue/tabpanel';

import ManageRooms from '@/Pages/Admin/ManageRooms';

export default {
    components: {
        Layout, TabView, TabPanel, ManageRooms,
    },
    setup() {

        const active = ref(0);
        return { active };
    },
}
</script>

<style scoped>

</style>