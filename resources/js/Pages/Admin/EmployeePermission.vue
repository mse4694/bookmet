<template>
    <Layout>
    <div>
        <div class="text-3xl border-double border-b-2 border-opacity-25 border-blue-500 mt-4 mb-4 ml-2">สิทธิ์ผู้ใช้งาน</div>
        <div class="ml-4 mr-4">
            <div class="flex flex-col md:flex-row">
                <div class="flex flex-col m-2 w-full">
                    <span>เลือกหน่วยงาน :</span>
                    <Dropdown class="w-full" v-model="selectedDepartment" :options="uniqueDepartment" optionLabel="nat" placeholder="เลือกหน่วยงาน" />
                </div>
                <div class="flex flex-col m-2 w-full">
                    <span>หาตามรายชื่อ :</span>
                    <InputText class="w-full" type="text" v-model="employeeName" />
                </div>   
            </div>
            <div class="mb-2">
                <Button label="ค้นหา" class="p-button-raised p-button-rounded w-full" @click="getUniqueDepartment"/>
            </div>
            <Toolbar>
                <template #left>
                    <!-- <div class="px-2"><Button label="เพิ่ม" icon="pi pi-plus" class="p-button-success"/></div> -->
                    <div><Button label="แก้ไข" icon="pi pi-user-edit" class="p-button-warn" :disabled="!selectedEmployees || !selectedEmployees.length" /></div>
                </template>
            </Toolbar>
            <div class="mb-20" style="height: calc(100vh - 200px)">
            <DataTable ref="dt" :value="allEmployee" v-model:selection="selectedEmployees" dataKey="id" 
                :paginator="true" :rows="10" :filters="filters" :scrollable="true" scrollHeight="flex" stripedRows class="p-datatable-sm"
                paginatorTemplate="FirstPageLink PrevPageLink PageLinks NextPageLink LastPageLink CurrentPageReport RowsPerPageDropdown" :rowsPerPageOptions="[5,10,25]"
                currentPageReportTemplate="แสดง {first} ถึง {last} จากทั้งหมด {totalRecords}" responsiveLayout="scroll">
                <template #header>
                    <div class="flex flex-col md:flex-row items-center justify-between">
						<h5 class="mb-2">จัดการสิทธิ์ผู้ใช้งาน</h5>
						<span class="p-input-icon-left">
                            <i class="pi pi-search" />
                            <InputText v-model="filters['global'].value" placeholder="Search..." />
                        </span>
					</div>
                </template>

                <Column selectionMode="multiple" style="max-width:3rem" :exportable="false"></Column>

                <Column field="picture" header="ภาพถ่าย" :sortable="true" style="max-width:5rem"> 
                    <template #body="slotProps">
                        <img :src="slotProps.data.picture.medium" :alt="slotProps.data.picture.medium" width="48"/>
                    </template>
                </Column>

                <Column field="id" header="รหัสประจำตัว" :sortable="true" style="max-width:10rem"> 
                    <template #body="slotProps">
                        {{ slotProps.data.id.value }}
                    </template>
                </Column>

                <Column field="name" header="ชื่อ - สกุล" :sortable="true" style="min-width:20rem"> 
                    <template #body="slotProps">
                        {{ `${slotProps.data.name.title} ${slotProps.data.name.first} ${slotProps.data.name.last}` }}
                    </template>
                </Column>

                <Column field="nat" header="หน่วยงาน" :sortable="true" style="max-width:10rem" />

                

                <Column :exportable="false" style="max-width:6rem">
                    <template #body="slotProps">
                        <div class="mr-2"><Button icon="pi pi-pencil" class="p-button-sm p-button-rounded p-button-success" @click="editProduct(slotProps.data)"/></div>
                        <!-- <div><Button icon="pi pi-trash" class="p-button-sm p-button-rounded p-button-warning" /></div> -->
                    </template>
                </Column>

            </DataTable>
            <!-- <img
                v-for="user in allEmployee"
                :key="user.login.uuid"
                :src="user.picture.large"
            > -->
            </div>
        </div>
	</div>

    <Toast position="top-right" />
    </Layout>
</template>

<script>
import { ref, onMounted, computed } from 'vue';
import { FilterMatchMode } from 'primevue/api';
import { useToast } from "primevue/usetoast";
import EmployeeService from '@/Services/EmployeeService';

export default {

    setup() {
        onMounted(() => {
            employeeService.value.getAllEmp().then(data => allEmployee.value = data);
            //getUniqueDepartment();
        })

        const filters = ref({
            'global': {value: null, matchMode: FilterMatchMode.CONTAINS},
        });
        const toast = useToast();
        const dt = ref();
        const employee = ref({});
        const allEmployee = ref();
        const employeeService = ref(new EmployeeService());
        const selectedEmployees = ref();
        const submitted = ref(false);
        const department = ref();
        const selectedDepartment = ref();
        const employeeName = ref();
        const uniqueDepartment = ref([]);

        // const uniqueDepartment = computed(() => {
        //     let uniqArr = [];
        //     allEmployee.value.forEach(function(item) {
        //         let i = uniqArr.findIndex(x => x.nat == item.nat);
        //         if(i <= -1){
        //             uniqArr.push({nat: item.nat});
        //         }
        //     });
        //     return uniqArr;
        // });

        const getUniqueDepartment = () => {
            
            allEmployee.value.forEach(function(item) {
                let i = uniqueDepartment.value.findIndex(x => x.nat == item.nat);
                if(i <= -1){
                    uniqueDepartment.value.push({nat: item.nat});
                }
            });
            console.log(uniqueDepartment.value);
        };

        return { 
            dt, toast,
            employee, allEmployee,
            filters, submitted,
            selectedEmployees,
            selectedDepartment,
            employeeName,
            department,
            uniqueDepartment,
            getUniqueDepartment
        }
    }
}
</script>