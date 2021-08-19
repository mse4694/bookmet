<template>
<div class="flex flex-col h-full">
	<div class="flex py-2 content-center justify-center bg-blue-300">
		<div>
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
	</div>
	<div class="h-full p-2 bg-blue-100">
		<ul>
			<li class="my-4">
				<span class="flex font-medium text-xl text-gray-400 px-4 my-4 uppercase">ส่วนผู้ใช้งาน</span>
			</li>
			<li class="my-4">
				<Link href="/"
					class="flex flex-row items-center px-4 rounded-lg text-gray-600 hover:bg-gray-100">
					<span class="flex items-center justify-center text-lg text-gray-400">
						<!-- <svg fill="none"
								stroke-linecap="round"
								stroke-linejoin="round"
								stroke-width="2"
								viewBox="0 0 24 24"
								stroke="currentColor"
								class="h-6 w-6">
							<path d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
						</svg> -->
						<i class="pi pi-home"></i>
					</span>
					<span class="ml-3">หน้าหลัก</span>
					<span class="flex items-center justify-center text-sm text-gray-500 font-semibold bg-gray-200 px-2 rounded-full ml-auto">3</span>
				</Link>
			</li>
			<li class="my-4">
				<Link href="/booking_room"
					class="flex flex-row items-center px-4 rounded-lg text-gray-600 hover:bg-gray-100">
					<span class="flex items-center justify-center text-lg text-gray-400">
						<!-- <svg fill="none"
								stroke-linecap="round"
								stroke-linejoin="round"
								stroke-width="2"
								viewBox="0 0 24 24"
								stroke="currentColor"
								class="h-6 w-6">
							<path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
						</svg> -->
						<i class="pi pi-search-plus"></i>		
					</span>
					<span class="ml-3">จองห้องประชุม</span>
				</Link>
			</li>
			<li class="my-4 mx-4">
				<Link href="/booking_monitor"
					class="flex flex-row items-center px-4 rounded-lg text-gray-600 hover:bg-gray-100">
					<span class="flex items-center justify-center text-lg text-gray-400">
						<!-- <svg fill="none"
								stroke-linecap="round"
								stroke-linejoin="round"
								stroke-width="2"
								viewBox="0 0 24 24"
								stroke="currentColor"
								class="h-5 w-5">
							<path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
						</svg> -->
						<i class="pi pi-tag"></i>
					</span>
					<span class="ml-3">ติดตามผลการจอง</span>
				</Link>
			</li>
			<li class="my-4">
				<Link href="/calendar"
					class="flex flex-row items-center px-4 rounded-lg text-gray-600 hover:bg-gray-100">
					<span class="flex items-center justify-center text-lg text-gray-400">
						<i class="pi pi-calendar-plus"></i>
					</span>
					<span class="ml-3">ปฎิทิน</span>
				</Link>
			</li>
			<!-- <li class="my-4">
				<span class="flex font-medium text-sm text-gray-400 px-4 my-4 uppercase">Primevue</span>
			</li>
			<li class="my-4">
				<Link href="/primevue"
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
					<span class="ml-3">Button</span>
				</Link>
			</li>
			<li class="my-4">
				<Link href="/primevue/inputgroup"
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
					<span class="ml-3">Input Group</span>
				</Link>
			</li>
			<li class="my-4">
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
							<path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
						</svg>
					</span>
					<span class="ml-3">Tasks</span>
				</a>
			</li>
			<li class="my-4">
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
							<path d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
						</svg>
					</span>
					<span class="ml-3">Clients</span>
					<span class="flex items-center justify-center text-sm text-gray-500 font-semibold bg-gray-200 h-6 px-2 rounded-full ml-auto">1k</span>
				</a>
			</li>
			<li class="my-4">
				<a href="#"
					class="flex flex-row items-center h-12 px-4 rounded-lg text-gray-600 hover:bg-gray-100">
					<span class="flex items-center justify-center text-lg text-green-400">
						<svg fill="none"
								stroke-linecap="round"
								stroke-linejoin="round"
								stroke-width="2"
								viewBox="0 0 24 24"
								stroke="currentColor"
								class="h-6 w-6">
							<path d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
						</svg>
					</span>
					<span class="ml-3">Add new</span>
				</a>
			</li>
			<li class="my-4">
				<span class="flex font-medium text-sm text-gray-400 px-4 my-4 uppercase">Account</span>
			</li>
			<li class="my-4">
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
							<path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
						</svg>
					</span>
					<span class="ml-3">Profile</span>
				</a>
			</li> -->
			<!-- <li class="my-4">
				<a href="#"
					class="flex flex-row items-center px-4 rounded-lg text-gray-600 hover:bg-gray-100">
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
			</li> -->
			<!-- <li class="my-4">
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
							<path d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
							<path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
						</svg>
					</span>
					<span class="ml-3">Settings</span>
				</a>
			</li> -->
			<li class="my-4">
				<span class="flex font-medium text-xl text-gray-400 px-4 my-4 uppercase">ส่วนผู้ควบคุม</span>
			</li>
			<li class="my-4">
				<!-- <Toolbar>
					<template #left>
						<SplitButton label="การจัดการข้อมูล" icon="pi pi-check" :model="manageDataItems" class="p-button-warning"></SplitButton>
					</template>
				</Toolbar> -->
				<div class="justify-center">
				<Button type="button" label="จัดการข้อมูล" @click="toggle_manage_menu" aria-haspopup="true" aria-controls="overlay_tmenu" 
				        icon="pi pi-search" iconPos="left" :badge="numberOfMenu" badgeClass="p-badge-info"
						class="p-button-text p-button-plain"
				/>
        		<TieredMenu id="overlay_tmenu" ref="menu" :model="manageDataItems" :popup="true" />
				</div>

				<!-- <Link href="/admin"
					class="flex flex-row items-center px-4 rounded-lg text-gray-600 hover:bg-gray-100">
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
				</Link> -->
			</li>
			<li class="my-4">
				<a href="#"
					class="flex flex-row items-center px-4 rounded-lg text-gray-600 hover:bg-gray-100">
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
</div>
</template>

<script>
import { Link } from '@inertiajs/inertia-vue3';
import { ref } from 'vue';
import Toolbar from 'primevue/toolbar';
import SplitButton from 'primevue/splitbutton';
import TieredMenu from 'primevue/tieredmenu';

export default {
  components: {
    Link, Toolbar, SplitButton, TieredMenu
  },

  	setup() {
		const menu = ref();
		const numberOfMenu = ref('0');
		
		const manageDataItems = ref([
			{
				label: 'ข้อมูลห้องประชุม',
				icon: 'pi pi-refresh'
			},
			{
				label: 'วัตถุประสงค์การใช้ห้อง',
				icon: 'pi pi-times'
			},
			{
				label: 'สิทธิ์ผู้ใช้งาน',
				icon: 'pi pi-external-link',
				command: () => {
					window.location.href = 'https://vuejs.org/'
				}
			},
			{   label: 'ข้อมูลหน่วยงาน',
				icon: 'pi pi-upload',
				command: () => {
					window.location.hash = "/fileupload"
				}
			}
		]);

		numberOfMenu.value = String(manageDataItems.value.length);

		const toggle_manage_menu = (event) => {
            menu.value.toggle(event);
        }

		

        return { menu, manageDataItems, numberOfMenu, toggle_manage_menu}
    }
}
</script>
