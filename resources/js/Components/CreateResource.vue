<template>
    <head>
        <title>{{ title }}</title>
    </head>
    <h2 class="text-h4 mt-5">{{ title }}</h2>
    <form class="mt-5" @submit.prevent="submitHandler">
        <div v-for="field of fields" :key="field.name" class="mb-3">
            <v-file-input v-if="field.type === 'file'" :label="field.title" v-model="dataFields.find(el => field.name == el.name).value"></v-file-input>
            <v-text-field v-else :error="errors[field.name]" :error-messages="errors[field.name] ?? false" :label="field.title" v-model="dataFields.find(el => field.name == el.name).value" variant="outlined"></v-text-field>
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
        <v-btn color="primary" size="large" :disabled="disableSubmit" type="submit">Создать</v-btn>
    </form>
</template>

<script setup>
import {computed, defineProps, ref} from "vue";
import { Inertia } from '@inertiajs/inertia'
import RelatesTable from '../Components/RelatesTable.vue';

const props = defineProps({
    title: String,
    fields: Array,
    relates: Array,
    resource: String,
    errors: Object
})

const convertFileToBinaryString = file => {
    return new Promise((resolve, reject) => {
        const reader = new FileReader();

        reader.readAsBinaryString(file);

        reader.onload = function(event) {
            const binaryString = event.target.result;
            resolve(binaryString);
        };

        reader.onerror = function(event) {
            reject(event.target.error);
        };
    });
}

const dataFields = ref(props.fields.map(field => ({ name: field.name, value: '' })))

const relatesData = ref(props.relates.map(el => ({db: el.db, value: null})))

const disableSubmit = computed(() => !relatesData.value.every(relate => relate.value))

const panels = ref([])

const pickRelateHandle = event => {
    relatesData.value = relatesData.value.map(el => event.db === el.db ? event : el)
    panels.value = []
}

const submitHandler = async () => {
    const data = Object.fromEntries(dataFields.value.map(el => [el.name, el.value]))
    const result = {}

    for (let key in data) {
        if (props.fields.find(e => e.name === key).type === 'file') {
            const binary = await convertFileToBinaryString(data[key][0])
            result[key] = await new Blob([binary]).text()
        } else {
            result[key] = data[key]
        }
    }

    Inertia.post(route(`${props.resource}.store`), {data: result, relates: relatesData.value})
}
</script>

<style scoped>

</style>
