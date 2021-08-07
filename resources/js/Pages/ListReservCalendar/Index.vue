<template>
    <Layout>
        <div class="w-full h-full px-2 bg-white">
            <FullCalendar :options="calendarOptions" />
        </div>
    </Layout>
</template>

<script>
import Layout from '@/Components/Layouts/Layout';
import '@fullcalendar/core/vdom' // solves problem with Vite
import FullCalendar from '@fullcalendar/vue3'
import dayGridPlugin from '@fullcalendar/daygrid'
import interactionPlugin from '@fullcalendar/interaction'

export default {
    components: {
        Layout, FullCalendar,
    },
    data() {
        return {
            calendarOptions: {
                plugins: [ dayGridPlugin, interactionPlugin ],
                initialView: 'dayGridMonth'
            }
        }
    }
}
</script>