<template>
    <main-layout>
        <index-resource
            :fields="fields"
            :title="resourceData.title"
            :data="data"
            :resource="resource"
        />
    </main-layout>
</template>

<script setup>
import MainLayout from '../../Layouts/MainLayout.vue'
import IndexResource from '../../Components/IndexResource.vue'
import { defineProps } from 'vue'
import resources from '../../data/resources.js';

const props = defineProps({
    data: Object,
    resource: String,
})

const resourceData = resources[props.resource].index
const fields = resources[props.resource].fields

</script>

<style scoped>

</style>
