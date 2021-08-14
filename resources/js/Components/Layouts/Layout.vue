<template>
    <!-- <Header /> -->
    <!-- <NavHeader /> -->
    <MyNavHeader />
    <div class="container flex flex-row">
        <div> 
            <NavSideBar class="hidden md:block"/>
        </div>

        <div class="flex-grow items-start justify-left bg-green-100 px-1 py-1">
            <slot></slot>    
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