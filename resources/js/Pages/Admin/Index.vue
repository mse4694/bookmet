<template>
    <Layout>
        <div class="flex flex-col w-full h-full px-2 py-2 bg-gray-100">
            <div class="text-3xl font-bold border-double border-b-2 border-opacity-25 border-blue-500 mt-4 mb-4">จัดการข้อมูล</div>

            <div>
            <Toolbar>
                <template #left>
                    <!-- <div class="mr-2"><Button label="New" icon="pi pi-plus" /></div>
                    <div class="mr-2"><Button label="Upload" icon="pi pi-upload" class="p-button-success" /></div>
                    <div class="mr-2"><i class="pi pi-bars p-toolbar-separator" /></div> -->
                    <div class="mr-2"><SplitButton label="จัดการห้องประชุม" icon="pi pi-plus" @click="save" :model="items"></SplitButton></div>
                    <div class="mr-2"><SplitButton label="จัดการผู้ใช้งาน" icon="pi pi-plus" class="p-button-success" :model="items"></SplitButton></div>
                    <!-- <Button type="button" label="Toggle" @click="toggle" aria-haspopup="true" aria-controls="overlay_menu"/>
                    <Menu id="overlay_menu" ref="menu" :model="items" :popup="true" /> -->
                    
                    
                </template>

                <template #right>
                    <div class="mr-2"><Button icon="pi pi-search" /></div>
                    <div class="mr-2"><Button icon="pi pi-calendar" class="p-button-success" /></div>
                    <div class="mr-2"><Button icon="pi pi-times" class="p-button-danger" /></div>
                </template>
            </Toolbar>
            </div>

            <!-- <TabView class="tabview-custom" ref="tabview4">
                <TabPanel>
                    <template #header>
                        <i class="pi pi-calendar"></i>
                        <span>ข้อมูลห้องประชุม</span>
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
                        <i class="pi pi-user"></i>
                        <span>สิทธิ์ผู้ใช้งาน</span>
                    </template>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                        ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </TabPanel>

                <TabPanel>
                    <template #header>
                        <i class="pi pi-cog"></i>
                        <span>ข้อมูลหน่วยงาน</span>
                    </template>
                   <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati
                        cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.
                        Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus.</p>
                </TabPanel>
                
            </TabView> -->
        </div>
    </Layout>
</template>

<script>
import { ref } from 'vue';
// import TabView from 'primevue/tabview';
// import TabPanel from 'primevue/tabpanel';
// import Toolbar from 'primevue/toolbar';
// import SplitButton from 'primevue/splitbutton';
// import Menu from 'primevue/menu';

import ManageRooms from '@/Pages/Admin/ManageRooms';

export default {
    components: {
        ManageRooms,
        // TabView, TabPanel, Toolbar, SplitButton, Menu,
    },
    setup() {

        const active = ref(0);
        const menu = ref();
        const items = ref([
            {
                label: 'Update',
                icon: 'pi pi-refresh',
                command: () => {
                    toast.add({severity:'success', summary:'Updated', detail:'Data Updated', life: 3000});
                }
            },
            {
                label: 'Delete',
                icon: 'pi pi-times',
                command: () => {
                    toast.add({ severity: 'warn', summary: 'Delete', detail: 'Data Deleted', life: 3000});
                }
            },
            {
                label: 'Vue Website',
                icon: 'pi pi-external-link',
                command: () => {
                    window.location.href = 'http://localhost:8000/booking_room'
                }
            },
            {   label: 'Upload',
                icon: 'pi pi-upload',
                command: () => {
                    window.location.href = "http://localhost:8000"
					//window.location.hash = "http://localhost:8000"
				}
            }
        ]);

        const toggle = (event) => {
            menu.value.toggle(event);
        };

        const save = () => {
            //toast.add({severity: 'success', summary: 'Success', detail: 'Data Saved', life: 3000});
            console.log("Hi split button");
        };

        return { active, items, menu, toggle, save };
    },
}
</script>

<style scoped>

</style>