<template>
<div class="flex flex-col flex-grow h-full">
	<div class="flex w-52 py-2 content-center justify-center bg-blue-300">
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
	<div class="flex flex-col w-full h-full py-2 bg-blue-100">
		<div>
			<span class="flex font-medium text-xl text-gray-400 px-4 my-4 uppercase">ส่วนผู้ใช้งาน</span>
		</div>
		<div class="hover:bg-gray-100">
			<Link href="/booking_room">
			<button
				:class="textMenuColor"
				class="background-transparent uppercase px-4 py-2 text-md outline-none focus:outline-none mr-3 mb-1 ease-linear transition-all duration-150"
				type="button">
				<i class="pi pi-star-o px-1"></i> จองห้องประชุม
			</button>
			</Link>
			<!-- <Link href="/booking_room"><Button type="button" label="จองห้องประชุม" icon="pi pi-star-o" iconPos="left" class="w-full p-button-text p-button-plain" /></Link> -->
		</div>
		<div class="hover:bg-gray-100">
			<Link href="/booking_monitor">
			<button
				:class="textMenuColor"
				class="background-transparent uppercase px-4 py-2 text-md outline-none focus:outline-none mr-3 mb-1 ease-linear transition-all duration-150"
				type="button">
				<i class="pi pi-search px-1"></i> ติดตามผลการจอง
			</button>
			</Link>
		</div>
		<div class="hover:bg-gray-100">
			<Link href="/calendar">
			<button
				:class="textMenuColor"
				class="background-transparent uppercase px-4 py-2 text-md outline-none focus:outline-none mr-3 mb-1 ease-linear transition-all duration-150"
				type="button">
				<i class="pi pi-calendar px-1"></i> ปฎิทิน
			</button>
			</Link>
		</div>

		<div>
			<span class="flex font-medium text-xl text-gray-400 px-4 my-4 uppercase">ส่วนผู้ควบคุม</span>
		</div>
		<div class="hover:bg-gray-100">
			<Button type="button" label="จัดการข้อมูล" @click="toggle_manage_menu" aria-haspopup="true" aria-controls="overlay_tmenu" 
					icon="pi pi-list" iconPos="left" :badge="numberOfMenu" badgeClass="p-badge-info"
					class="p-button-text p-button-help"
			/>
			<TieredMenu id="overlay_tmenu" ref="menu" :model="manageDataItems" :popup="true" />
		</div>

		<div class="hover:bg-gray-100">
			<Link href="#">
			<button
				class="background-transparent text-red-500 uppercase px-4 py-2 text-md outline-none focus:outline-none mr-3 mb-1 ease-linear transition-all duration-150"
				type="button">
				<i class="pi pi-sign-out px-1"></i> ออกจากระบบ
			</button>
			</Link>
		</div>
		<!-- <ul>
			<li class="my-4">
				<span class="flex font-medium text-xl text-gray-400 px-4 my-4 uppercase">ส่วนผู้ใช้งาน</span>
			</li>
			<li class="my-4">
				<Link href="/"
					class="flex flex-row items-center px-4 rounded-lg text-gray-600 hover:bg-gray-100">
					<span class="flex items-center justify-center text-lg text-gray-400">
						<i class="pi pi-home"></i>
					</span>
					<span class="ml-3">หน้าหลัก</span>
					<span class="flex items-center justify-center text-sm text-gray-500 font-semibold bg-gray-200 px-2 rounded-full ml-auto">3</span>
				</Link>
			</li>
			<li class="my-4">
				<Button type="button" label="จองห้องประชุม" 
						icon="pi pi-star-o" iconPos="left"
						class="p-button-text p-button-plain"
				/>
			</li>
			<li class="my-4">
				<Link href="/booking_monitor"
					class="flex flex-row items-center px-4 rounded-lg text-gray-600 hover:bg-gray-100">
					<span class="flex items-center justify-center text-lg text-gray-400">
						<i class="pi pi-tag"></i>
					</span>
					<span class="ml-2">ติดตามผลการจอง</span>
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
			<li class="my-4">
				<span class="flex font-medium text-xl text-gray-400 px-4 my-4 uppercase">ส่วนผู้ควบคุม</span>
			</li>
			<li class="my-4">
				<div class="justify-center">
				<Button type="button" label="จัดการข้อมูล" @click="toggle_manage_menu" aria-haspopup="true" aria-controls="overlay_tmenu" 
				        icon="pi pi-search" iconPos="left" :badge="numberOfMenu" badgeClass="p-badge-info"
						class="p-button-text p-button-plain"
				/>
        		<TieredMenu id="overlay_tmenu" ref="menu" :model="manageDataItems" :popup="true" />
				</div>
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
		</ul> -->
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
		const textMenuColor = ref('text-gray-600');
		
		const manageDataItems = ref([
			{
				label: 'ข้อมูลห้องประชุม',
				icon: 'pi pi-book',
				url: 'http://localhost:8000/admin-manage-room'
			},
			{
				label: 'วัตถุประสงค์การใช้ห้อง',
				icon: 'pi pi-send',
				url: 'http://localhost:8000/objective-manage'
			},
			{
				label: 'สิทธิ์ผู้ใช้งาน',
				icon: 'pi pi-user',
				command: () => {
					window.location.href = 'https://vuejs.org/'
				}
			},
			{   label: 'ข้อมูลหน่วยงาน',
				icon: 'pi pi-globe',
				command: () => {
					window.location.hash = "/fileupload"
				}
			}
		]);

		numberOfMenu.value = String(manageDataItems.value.length);

		const toggle_manage_menu = (event) => {
            menu.value.toggle(event);
        }

		

        return { menu, manageDataItems, numberOfMenu, textMenuColor, toggle_manage_menu}
    }
}
</script>

<style>

</style>
