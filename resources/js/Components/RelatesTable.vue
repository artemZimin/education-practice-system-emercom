<template>
    <v-data-table
        v-model="selected"
        :headers="headers"
        :items="props.relate.data"
        show-select
        item-value="id"
        class="elevation-1"
        :key="JSON.stringify(selected)"
    ></v-data-table>
</template>

<script setup>
import {defineProps, ref, watch} from "vue";
import resources from '../data/resources';
import { VDataTable } from 'vuetify/labs/VDataTable'

const selected = ref([])

const emit = defineEmits(['pickRelate'])

const props = defineProps({
    relate: Object,
})

const fields = resources[props.relate.resource].fields

const headers = [{ title: 'ID', key: 'id' }, ...fields.map(field => ({ title: field.title, key: field.name }))]

watch(selected, () => {
    if (selected.value.length > 1) {
        selected.value = [selected.value.pop()]
    }

    emit('pickRelate', { db: props.relate.db, value: selected.value[0], relateField: props.relate.relateField })
})

</script>

<style scoped>

</style>
