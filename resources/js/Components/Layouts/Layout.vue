<template>
    <div>
        <!-- แบบ Mix ระหว่าง Tailwind กับ Primevue -->
        <!-- <MyNavHeader />
        <div class="w-full h-full flex flex-row">
            <aside>
                <NavSideBar class="hidden md:block"/>
            </aside>

            <div class="h-screen flex-grow items-start justify-left overscroll-y-auto overflow-y-auto">
                <slot></slot>    
            </div>          
        </div> -->

        <!-- แบบ Primevue ล้วน -->
        <div class="flex flex-row h-full overscroll-y-auto overflow-y-auto bg-gray-200">
            <div class="hidden md:block">
                <NavSideBar />
            </div>
 
            <div class="flex flex-col w-full">
                <div class="block md:hidden">
                    <PrimeNavHeader />
                </div>
                <div class="w-full ">
                    <div class="py-2 px-2 justify-items-center place-self-center text-4xl bg-blue-200">ระบบจองห้องประชุม</div>
                    <div class="overscroll-y-auto overflow-y-auto ">
                        <slot></slot>    
                    </div>
                </div>
                <!-- <div class="w-screen py-2 px-2 justify-items-center place-self-center text-4xl bg-blue-200">ระบบจองห้องประชุม</div>
                <div class="h-screen px-5 flex-grow-0 items-start justify-left overscroll-y-auto overflow-y-auto bg-purple-400">
                    <slot></slot>    
                </div>           -->
            </div>
            
        </div>

    </div>
</template>

<script>
import Header from '@/Components/Layouts/Header';
import NavHeader from '@/Components/Layouts/NavHeader';
import {Head} from '@inertiajs/inertia-vue3';
import NavSideBar from '@/Components/Layouts/NavSideBar';
import MyNavHeader from '@/Components/Layouts/MyNavHeader';
import PrimeNavHeader from '@/Components/Layouts/PrimeNavHeader';
import PrimeSideBar from '@/Components/Layouts/PrimeSideBar';

export default {
    components: {
        Head, Header, NavHeader, NavSideBar, MyNavHeader, PrimeNavHeader, PrimeSideBar
    },
}
</script>