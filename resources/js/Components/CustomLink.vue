<script setup>
defineProps({
    type: {
        type: String,
        default: 'blue',
    },
});

const linkClass = (type) => {
    if (type == "yellow") {
        return "inline-flex items-center px-2 py-1 bg-yellow-500 border border-transparent rounded-md font-semibold text-xs text-white tracking-widest hover:bg-yellow-500 focus:bg-yellow-500 active:bg-yellow-500 focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:ring-offset-2 transition ease-in-out duration-150";
    }

    if (type == "purple") {
        return "inline-flex items-center px-2 py-1 bg-purple-500 border border-transparent rounded-md font-semibold text-xs text-white tracking-widest hover:bg-purple-500 focus:bg-purple-500 active:bg-purple-500 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-2 transition ease-in-out duration-150";
    }
};

</script>

<template>
    <a :class="linkClass(type)">
        <slot />
    </a>
</template>


