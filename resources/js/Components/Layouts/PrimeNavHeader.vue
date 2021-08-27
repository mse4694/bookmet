<template>
    <div>
        <Menubar :model="items">
            <template #start>  
            </template>

            <template #end>
                <!-- <InputText placeholder="Search" type="text" /> -->
                <div class="h-8 w-auto">
                    <span class="hidden md:inline-block text-xl text-black mr-2">จองห้องประชุม Online</span>
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                            class="w-10 h-10 md:inline-block" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                        <circle style="fill:#324A5E;" cx="256" cy="256" r="256"/>
                        <path style="fill:#2B3B4E;" d="M275.939,511.233c101.693-7.833,186.742-75.085,220.482-167.091L339.573,186.939l-44.197,43.501
                            l-80.748-80.748l-35.5,35.164L150.99,213.94l57.31,58.14L89.385,324.677L275.939,511.233z"/>
                        <circle style="fill:#FFD300;" cx="182.82" cy="181.7" r="45.304"/>
                        <path style="fill:#F4A200;" d="M182.813,136.406c-0.219,0-0.434,0.014-0.653,0.017v90.565c0.219,0.003,0.434,0.017,0.653,0.017
                            c25.017,0,45.299-20.282,45.299-45.299S207.831,136.406,182.813,136.406z"/>
                        <path style="fill:#FC6F58;" d="M89.385,324.679c0-51.6,41.829-93.429,93.429-93.429s93.429,41.829,93.429,93.429H89.385z"/>
                        <path style="fill:#F1543F;" d="M182.813,231.25c-0.219,0-0.434,0.016-0.653,0.017v93.412h94.082
                            C276.242,273.079,234.413,231.25,182.813,231.25z"/>
                        <circle style="fill:#FFD15D;" cx="304.787" cy="215.971" r="45.304"/>
                        <path style="fill:#F9B54C;" d="M304.793,170.667c-0.079,0-0.157,0.005-0.236,0.005v90.586c0.079,0,0.157,0.005,0.236,0.005
                            c25.017,0,45.299-20.282,45.299-45.299C350.092,190.948,329.812,170.667,304.793,170.667z"/>
                        <path style="fill:#31BAFD;" d="M211.365,358.94c0-51.6,41.829-93.429,93.429-93.429s93.429,41.831,93.429,93.429H211.365z"/>
                        <path style="fill:#2B9ED8;" d="M304.793,265.511c-0.079,0-0.157,0.005-0.236,0.005v93.424h93.665
                            C398.222,307.341,356.393,265.511,304.793,265.511z"/>
                    </svg>
                </div>
            </template>
        </Menubar>
    </div>
</template>

<script>

import { ref } from 'vue';
//import Menubar from 'primevue/menubar';

export default {
    // components: {
    //     Menubar
    // },

    setup() {
        const items = ref([
            {
                label:'ปฎิทิน',
                icon:'pi pi-fw pi-calendar-times',
                url: 'http://localhost:8000/calendar'
            },
            {      
                label:'ห้องประชุม',
                icon:'pi pi-fw pi-file',
                items:[
                        {
                            // label:'จองห้องประชุม',
                            // icon:'pi pi-fw pi-plus',
                            // items:[
                            //     {
                            //         label:'Bookmark',
                            //         icon:'pi pi-fw pi-bookmark'
                            //     },
                            //     {
                            //         label:'Video',
                            //         icon:'pi pi-fw pi-video'
                            //     },
                            // ]
                        },
                        {
                            label:'จองห้องประชุม',
                            icon:'pi pi-fw pi-bookmark',
                            // command: () => {

                            // },
                            url: 'http://localhost:8000/booking_room'
                        },
                        {
                            label:'ติดตามผลการจอง',
                            icon:'pi pi-fw pi-external-link',
                            url: 'http://localhost:8000/booking_monitor'
                        },
                        {
                            separator:true
                        },
                        
                ]
            },
            // {
            //    label:'Edit',
            //    icon:'pi pi-fw pi-pencil',
            //    items:[
            //         {
            //             label:'Left',
            //             icon:'pi pi-fw pi-align-left'
            //         },
            //         {
            //             label:'Right',
            //             icon:'pi pi-fw pi-align-right'
            //         },
            //         {
            //             label:'Center',
            //             icon:'pi pi-fw pi-align-center'
            //         },
            //         {
            //             label:'Justify',
            //             icon:'pi pi-fw pi-align-justify'
            //         },
            //    ]
            // },
            // {
            //    label:'Users',
            //    icon:'pi pi-fw pi-user',
            //    items:[
            //         {
            //             label:'New',
            //             icon:'pi pi-fw pi-user-plus',
            //         },
            //         {
            //             label:'Delete',
            //             icon:'pi pi-fw pi-user-minus',
            //         },
            //         {
            //             label:'Search',
            //             icon:'pi pi-fw pi-users',
            //             items:[
            //                 {
            //                     label:'Filter',
            //                     icon:'pi pi-fw pi-filter',
            //                     items:[
            //                         {
            //                             label:'Print',
            //                             icon:'pi pi-fw pi-print'
            //                         }
            //                     ]
            //                 },
            //                 {
            //                     icon:'pi pi-fw pi-bars',
            //                     label:'List'
            //                 }
            //             ]
            //         }
            //     ]
            // },
            // {
            //     label:'Events',
            //     icon:'pi pi-fw pi-calendar',
            //     items:[
            //         {
            //             label:'Edit',
            //             icon:'pi pi-fw pi-pencil',
            //             items:[
            //                 {
            //                     label:'Save',
            //                     icon:'pi pi-fw pi-calendar-plus'
            //                 },
            //                 {
            //                     label:'Delete',
            //                     icon:'pi pi-fw pi-calendar-minus'
            //                 },
            //             ]
            //         },
            //         {
            //             label:'Archieve',
            //             icon:'pi pi-fw pi-calendar-times',
            //             items:[
            //                 {
            //                     label:'Remove',
            //                     icon:'pi pi-fw pi-calendar-minus'
            //                 }
            //             ]
            //         }
            //    ]
            // },
            {
               label:'ออกจากระบบ',
               icon:'pi pi-fw pi-power-off'
            }
        ]);

        return { items }
    }
}

</script>