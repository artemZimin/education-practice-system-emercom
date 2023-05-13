<template>
    <head>
        <title>{{ title }}</title>
    </head>
    <main-layout>edit faculty</main-layout>
</template>

<script setup>
import MainLayout from '../Layouts/MainLayout.vue'
const props = defineProps({
    title: String
})
</script>

<style scoped>

</style>
