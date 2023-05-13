<template>
 <show-resource :title="resourceData.getTitle(data)" :data="data" :fields="fields" :relates="relates" :resource="resource" />
</template>

<script setup>
import ShowResource from '../../Components/ShowResource.vue'
import { defineProps } from 'vue'
import resources from '../../data/resources.js';

const props = defineProps({
    data: Object,
    resource: String,
    relates: Array
})

const resourceData = resources[props.resource].show
const fields = resources[props.resource].fields

</script>

<style scoped>

</style>
