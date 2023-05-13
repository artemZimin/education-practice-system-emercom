<template>
    <head>
        <title>{{ title }}</title>
    </head>
    <h2 class="text-h4 mt-5">{{ title }}</h2>
    <form class="mt-5" @submit.prevent="submitHandler">
        <div v-for="field of fields" :key="field.name">
            <v-text-field :label="field.title" v-model="dataFields.find(el => field.name == el.name).value" variant="outlined"></v-text-field>
        </div>
        <div class="my-5" v-if="relates.length">
            <h3 class="text-h4 mt-5">Связанные сущности</h3>
            <v-expansion-panels class="mt-3" v-model="panels">
                <v-expansion-panel
                    v-for="relate of relates"
                    :title="relate.title"
                >
                    <v-expansion-panel-text>
                        <relates-table :relate="relate" @pickRelate="pickRelateHandle" />
                    </v-expansion-panel-text>
                </v-expansion-panel>
            </v-expansion-panels>
        </div>
        <v-btn color="primary" size="large" type="submit">Создать</v-btn>
    </form>
</template>

<script setup>
import {defineProps, ref} from "vue";
import { Inertia } from '@inertiajs/inertia'
import RelatesTable from '../Components/RelatesTable.vue';

const props = defineProps({
    title: String,
    fields: Array,
    relates: Array,
    resource: String,
})

const dataFields = ref(props.fields.map(field => ({ name: field.name, value: '' })))

const relatesData = ref(props.relates.map(el => ({db: el.db, value: null})))

const panels = ref([])

const pickRelateHandle = event => {
    relatesData.value = relatesData.value.map(el => event.db === el.db ? event : el)
    panels.value = []
}

const submitHandler = () => {
    const data = Object.fromEntries(dataFields.value.map(el => [el.name, el.value]))

    Inertia.post(route(`${props.resource}.store`), {data, relates: relatesData.value})
}
</script>

<style scoped>

</style>
