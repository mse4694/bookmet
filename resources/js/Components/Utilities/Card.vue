<template>
    <div class="flex items-center p-4 bg-white rounded-lg shadow-xs">
        <slot></slot>
        <div>
            <p class="mb-2 text-sm font-medium text-gray-600">
                {{Status}} ทั้งหมด
            </p>
            <p class="text-lg font-semibold text-gray-700">
                {{Count}}
            </p>
        </div>
    </div>
</template>

<script>
export default {
  name: 'MyCard',
  props: [
    'Status',
    'Count'
  ]
}
</script>