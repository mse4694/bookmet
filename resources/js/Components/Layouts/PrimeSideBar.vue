<template>
    <Sidebar v-model:visible="visibleLeft" :baseZIndex="1000">
            <div class="flex h-full max-w-sm p-2 bg-blue-100">
			<ul class="flex flex-col w-full">
				<li class="my-px">
					<Link href="/"
					   class="flex flex-row items-center h-12 px-4 rounded-lg text-gray-600 hover:bg-gray-100">
						<span class="flex items-center justify-center text-lg text-gray-400">
							<i class="pi pi-home"></i>
						</span>
						<span class="ml-3">หน้าหลัก</span>
						<span class="flex items-center justify-center text-sm text-gray-500 font-semibold bg-gray-200 h-6 px-2 rounded-full ml-auto">3</span>
					</Link>
				</li>
                <li class="my-px">
					<Link href="/booking_room"
					   class="flex flex-row items-center h-12 px-4 rounded-lg text-gray-600 hover:bg-gray-100">
						<span class="flex items-center justify-center text-lg text-gray-400">
							<i class="pi pi-search-plus"></i>		
						</span>
						<span class="ml-3">จองห้องประชุม</span>
					</Link>
				</li>
				<li class="my-px">
					<Link href="/booking_monitor"
					   class="flex flex-row items-center h-12 px-4 rounded-lg text-gray-600 hover:bg-gray-100">
						<span class="flex items-center justify-center text-lg text-gray-400">
							<i class="pi pi-tag"></i>
						</span>
						<span class="ml-3">ติดตามผลการจอง</span>
					</Link>
				</li>
				<li class="my-px">
					<Link href="/calendar"
					   class="flex flex-row items-center h-12 px-4 rounded-lg text-gray-600 hover:bg-gray-100">
						<span class="flex items-center justify-center text-lg text-gray-400">
							<i class="pi pi-calendar-plus"></i>
						</span>
						<span class="ml-3">ปฎิทิน</span>
					</Link>
				</li>
				
				<li class="my-px">
					<a href="#"
					   class="flex flex-row items-center h-12 px-4 rounded-lg text-gray-600 hover:bg-gray-100">
						<span class="flex items-center justify-center text-lg text-gray-400">
							<svg fill="none"
								 stroke-linecap="round"
								 stroke-linejoin="round"
								 stroke-width="2"
								 viewBox="0 0 24 24"
								 stroke="currentColor"
								 class="h-6 w-6">
								<path d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
							</svg>
						</span>
						<span class="ml-3">Notifications</span>
						<span class="flex items-center justify-center text-sm text-gray-500 font-semibold bg-gray-200 h-6 px-2 rounded-full ml-auto">10</span>
					</a>
				</li>
				
				<li class="my-px">
					<span class="flex font-medium text-xl text-gray-400 px-4 my-4 uppercase">ส่วนผู้ควบคุม</span>
				</li>
                <li class="my-px">
					<Link href="/admin"
					   class="flex flex-row items-center h-12 px-4 rounded-lg text-gray-600 hover:bg-gray-100">
						<span class="flex items-center justify-center text-lg text-gray-400">
							<svg fill="none"
								 stroke-linecap="round"
								 stroke-linejoin="round"
								 stroke-width="2"
								 viewBox="0 0 24 24"
								 stroke="currentColor"
								 class="h-6 w-6">
								<path d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4"></path>
							</svg>
						</span>
						<span class="ml-3">จัดการข้อมูล</span>
					</Link>
				</li>
				<li class="my-px">
					<a href="#"
					   class="flex flex-row items-center h-12 px-4 rounded-lg text-gray-600 hover:bg-gray-100">
						<span class="flex items-center justify-center text-lg text-red-400">
							<svg fill="none"
								 stroke-linecap="round"
								 stroke-linejoin="round"
								 stroke-width="2"
								 viewBox="0 0 24 24"
								 stroke="currentColor"
								 class="h-6 w-6">
								<path d="M8 11V7a4 4 0 118 0m-4 8v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2z"></path>
							</svg>
						</span>
						<span class="ml-3">Logout</span>
					</a>
				</li>
			</ul>
		</div>
    </Sidebar>
</template>

<script>

import { ref } from 'vue';
import { Link } from '@inertiajs/inertia-vue3';
import Sidebar from 'primevue/sidebar';

export default {
    components: {
        Link, Sidebar
    },

    setup() {
        const visibleLeft = ref(true);

        return { visibleLeft }
    }
}
</script>