<template>
    <div>
        <MyNavHeader />
        <div class="w-full h-full flex flex-row">
            <aside>
                <NavSideBar class="hidden md:block"/>
            </aside>

            <div class="h-screen flex-grow items-start justify-left overscroll-y-auto overflow-y-auto">
                <slot></slot>    
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

export default {
    components: {
        Head, Header, NavHeader, NavSideBar, MyNavHeader,
    },
}
</script>