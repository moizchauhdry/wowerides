<script setup>
defineProps({
    type: {
        type: String,
        default: 'gray',
    },
});
</script>

<template>
    <a :class="'inline-flex items-center px-4 py-2 bg-' + type + '-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-' + type + '-700 focus:bg-' + type + '-700 active:bg-' + type + '-900 focus:outline-none focus:ring-2 focus:ring-' + type + '-500 focus:ring-offset-2 transition ease-in-out duration-150'">
        <slot />
    </a>
</template>


