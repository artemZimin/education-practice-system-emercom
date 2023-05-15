<template>
    <main-layout>
        <create-resource :title="resourceData.title" :fields="fields" :resource="resource" :relates="relates" :errors="errors" />
    </main-layout>
</template>

<script setup>
import MainLayout from '../../Layouts/MainLayout.vue'
import CreateResource from '../../Components/CreateResource.vue'
import { defineProps } from 'vue'
import resources from '../../data/resources.js';

const props = defineProps({
    resource: String,
    relates: Array,
    errors: Object,
})

const resourceData = resources[props.resource].create
const fields = resources[props.resource].fields
</script>

<style scoped>

</style>
