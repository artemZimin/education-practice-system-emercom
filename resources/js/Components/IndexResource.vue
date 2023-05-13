<template>
    <head>
        <title>{{ title }}</title>
    </head>
    <main-layout>
        <h2 class="text-h4 mt-5">
            {{ title }}
            <Link as="span" :href="route(`${resource}.create`)">
                <v-tooltip text="Добавить">
                    <template v-slot:activator="{ props }">
                        <v-btn icon v-bind="props" variant="text">
                            <v-icon size="large" icon="mdi-plus"></v-icon>
                        </v-btn>
                    </template>
                </v-tooltip>
            </Link>
            <v-btn v-if="checkedFields.length" color="red" variant="text" @click="removeItems">Удалить выбранные</v-btn>
        </h2>
        <v-row class="mt-3">
            <v-col cols="6"><v-text-field label="Поиск" @keyup.enter="search" v-model="searchText" variant="outlined" class="mt-0"></v-text-field></v-col>
            <v-col cols="4">
                <v-select
                    label="Искать по"
                    variant="filled"
                    :items="searchItems"
                    v-model="searchItem"
                ></v-select>
            </v-col>
            <v-col cols="2" class="d-flex">
                <v-btn class="w-100" color="primary" @click="search">
                    Найти
                </v-btn>
            </v-col>
        </v-row>
        <v-table>
            <thead>
            <tr>
                <th></th>
                <th v-for="field of fields" :key="field.name" class="text-left">
                    {{ field.title }}
                </th>
                <th class="text-center">Действия</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="dataItem of data.data">
                <td>
                    <v-checkbox :value="dataItem.id" v-model="checkedFields" class="d-flex align-center"></v-checkbox>
                </td>
                <td v-for="field of fields">{{ dataItem[field.name] }}</td>
                <td>
                    <div class="d-flex justify-center align-center w-100 h-100">
                        <Link :href="route(`${resource}.show`, dataItem.id)" as="div">
                            <v-tooltip text="Просмотр">
                                <template v-slot:activator="{ props }">
                                    <v-btn icon v-bind="props" variant="text" color="primary">
                                        <v-icon icon="mdi-eye-outline"></v-icon>
                                    </v-btn>
                                </template>
                            </v-tooltip>
                        </Link>
                        <Link :href="route(`${resource}.edit`, dataItem.id)" as="div">
                            <v-tooltip text="Редактировать">
                                <template v-slot:activator="{ props }">
                                    <v-btn icon v-bind="props" variant="text" color="primary">
                                        <v-icon icon="mdi-file-edit"></v-icon>
                                    </v-btn>
                                </template>
                            </v-tooltip>
                        </Link>
                        <Link :href="route(`${resource}.destroy`, dataItem.id)" as="div" method="delete">
                            <v-tooltip text="Удалить">
                                <template v-slot:activator="{ props }">
                                    <v-btn icon v-bind="props" variant="text" color="red-darken-2">
                                        <v-icon icon="mdi-delete"></v-icon>
                                    </v-btn>
                                </template>
                            </v-tooltip>
                        </Link>
                    </div>
                </td>
            </tr>
            </tbody>
        </v-table>
        <template v-if="data.links.length > 3">
            <div v-for="link of data.links" class="mx-1 d-inline-block">
                <Link v-if="link.url" :href="link.url" as="button">
                    <v-btn :color="link.active ? 'primary' : 'white'" >{{ link.label }}</v-btn>
                </Link>
                <v-btn v-else :disabled="!link.url" :color="link.active ? 'primary' : 'white'" >{{ link.label }}</v-btn>
            </div>
        </template>

    </main-layout>
</template>

<script setup>
import {defineProps, ref} from 'vue'
import { Link } from "@inertiajs/inertia-vue3";
import { Inertia } from '@inertiajs/inertia'
import { useStore } from 'vuex';
import route from "ziggy-js";

const store = useStore()

const props = defineProps({
    title: String,
    resource: String,
    fields: Array,
    data: Array,
})

const searchItems = props.fields.map(field => field.title)

const queryString = window.location.search;
const params = new URLSearchParams(queryString);
const searchObject = params.get('search') ? JSON.parse(decodeURIComponent(params.get('search'))) : params.get('search');

console.log(searchObject)

const searchItem = ref(searchObject ? props.fields.find(field => field.name == searchObject.field).title : searchItems[0])
const searchText = ref(searchObject ? searchObject.value : '')

const checkedFields = ref([])

const removeItems = async () => {
    try {
        store.commit('setLoading', true)

        for (let i = 0; i < checkedFields.value.length; i++) {
            await axios.delete(route(`${props.resource}.destroy`, checkedFields.value[i]))
        }

        Inertia.reload()
    } finally {
        store.commit('setLoading', false)
    }
}

const search = () => {
    const field = props.fields.find(field => field.title == searchItem.value).name
    const value = searchText.value
    console.log(field, value)
    // console.log(route(`${props.resource}.index`, { search: JSON.stringify({ field, value }) }))
    Inertia.get(route(`${props.resource}.index`, { search: JSON.stringify({ field, value }) }))
}

</script>

<style scoped>

</style>
