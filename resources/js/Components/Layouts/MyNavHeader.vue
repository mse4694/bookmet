<!-- This example requires Tailwind CSS v2.0+ -->
<template>
  <Disclosure as="nav" class="bg-gray-800 container" v-slot="{ open }">
    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
        <div class="relative flex items-center justify-between h-16">
            <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                <!-- Mobile menu button-->
                <DisclosureButton class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white">
                    <span class="sr-only">Open main menu</span>
                    <MenuIcon v-if="!open" class="block h-6 w-6" aria-hidden="true" />
                    <XIcon v-else class="block h-6 w-6" aria-hidden="true" />
                </DisclosureButton>
                </div>
                <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
                    <div class="flex-shrink-0 flex items-center">
                        <div class="hidden md:inline-block h-8 w-auto">
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
                            <span class="md:inline-block text-xl text-white ml-2">จองห้องประชุม Online</span>
                        </div>
                        <div class="block md:hidden h-8 w-auto">
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                    class="w-10 h-10" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
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
                        <!-- <img class="block lg:hidden h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-mark-indigo-500.svg" alt="Workflow" />
                        <img class="hidden lg:block h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-logo-indigo-500-mark-white-text.svg" alt="Workflow" /> -->
                    </div>
                    <div class="hidden sm:block sm:ml-6">
                        <div class="flex space-x-4">
                        <a v-for="item in navigation" :key="item.name" :href="item.href" :class="[item.current ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white', 'px-3 py-2 rounded-md text-sm font-medium']" :aria-current="item.current ? 'page' : undefined">{{ item.name }}</a>
                        </div>
                    </div>
                </div>
                <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                <button class="bg-gray-800 p-1 rounded-full text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white">
                    <span class="sr-only">View notifications</span>
                    <BellIcon class="h-6 w-6" aria-hidden="true" />
                </button>

                <!-- Profile dropdown -->
                <Menu as="div" class="ml-3 relative">
                    <div>
                    <MenuButton class="bg-gray-800 flex text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white">
                        <span class="sr-only">Open user menu</span>
                        <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" />
                    </MenuButton>
                    </div>
                    <transition enter-active-class="transition ease-out duration-100" enter-from-class="transform opacity-0 scale-95" enter-to-class="transform opacity-100 scale-100" leave-active-class="transition ease-in duration-75" leave-from-class="transform opacity-100 scale-100" leave-to-class="transform opacity-0 scale-95">
                    <MenuItems class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none">
                        <MenuItem v-slot="{ active }">
                        <Link href="#" :class="[active ? 'bg-gray-100' : '', 'block px-4 py-2 text-sm text-gray-700']">Your Profile</Link>
                        </MenuItem>
                        <MenuItem v-slot="{ active }">
                        <Link href="#" :class="[active ? 'bg-gray-100' : '', 'block px-4 py-2 text-sm text-gray-700']">Settings</Link>
                        </MenuItem>
                        <MenuItem v-slot="{ active }">
                        <a href="#" :class="[active ? 'bg-gray-100' : '', 'block px-4 py-2 text-sm text-gray-700']">Sign out</a>
                        </MenuItem>
                    </MenuItems>
                    </transition>
                </Menu>
            </div>
        </div>
    </div>

    <DisclosurePanel class="sm:hidden">
      <div class="px-2 pt-2 pb-3 space-y-1">
        <a v-for="item in navigation" :key="item.name" :href="item.href" :class="[item.current ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white', 'block px-3 py-2 rounded-md text-base font-medium']" :aria-current="item.current ? 'page' : undefined">{{ item.name }}</a>
      </div>
    </DisclosurePanel>
  </Disclosure>
</template>

<script>
import { Link } from '@inertiajs/inertia-vue3';
import { Disclosure, DisclosureButton, DisclosurePanel, Menu, MenuButton, MenuItem, MenuItems } from '@headlessui/vue'
import { BellIcon, MenuIcon, XIcon } from '@heroicons/vue/outline'

const navigation = [
  { name: 'Dashboard', href: '/', current: true },
  { name: 'Team', href: '/booking_room', current: false },
  { name: 'Projects', href: '#', current: false },
  { name: 'Calendar', href: '#', current: false },
]

export default {
  components: {
    Disclosure,
    DisclosureButton,
    DisclosurePanel,
    Menu,
    MenuButton,
    MenuItem,
    MenuItems,
    Link,
    BellIcon,
    MenuIcon,
    XIcon,
  },
  setup() {
    return {
      navigation,
    }
  },
}
</script>