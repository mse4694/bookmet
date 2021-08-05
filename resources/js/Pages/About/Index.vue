<template>
    <Header />
    <div class="container flex flex-row">
        <div> 
            <NavSideBar /> 
            <Head title="About" />
        </div>

        <div class="w-full flex items-start justify-left bg-green-200 px-1 py-1">
            <div class="w-full h-full px-2 bg-white">
                <h1>About Us</h1>
            </div>
        </div>  
    </div>
</template>

<script>
//import {Link} from '@inertiajs/inertia-vue3';
import Header from '@/Components/Layouts/Header';
import {Head} from '@inertiajs/inertia-vue3';
import NavSideBar from '@/Components/Layouts/NavSideBar';

export default {
    components: {
        Header, Head, NavSideBar
    }
}
</script>