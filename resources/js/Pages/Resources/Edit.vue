<template>
    <main-layout>
        content
    </main-layout>
</template>

<script setup>
import MainLayout from '../../Layouts/MainLayout.vue'
import { defineProps } from 'vue'

const props = defineProps({
    data: Object,
})

</script>

<style scoped>

</style>
