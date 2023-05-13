<template>
    <head>
        <title>{{ title }}</title>
    </head>
    <main-layout>
        <h1 class="text-h4 my-5">
            {{ title }}
            <Link :href="route(`${resource}.edit`, data.id)" as="span">
                <v-tooltip text="Редактировать">
                    <template v-slot:activator="{ props }">
                        <v-btn icon v-bind="props" variant="text" color="primary">
                            <v-icon icon="mdi-file-edit"></v-icon>
                        </v-btn>
                    </template>
                </v-tooltip>
            </Link>
            <Link :href="route(`${resource}.destroy`, data.id)" as="span" method="delete">
                <v-tooltip text="Удалить">
                    <template v-slot:activator="{ props }">
                        <v-btn icon v-bind="props" variant="text" color="red-darken-2">
                            <v-icon icon="mdi-delete"></v-icon>
                        </v-btn>
                    </template>
                </v-tooltip>
            </Link>
        </h1>
        <v-table>
            <thead>
            <tr>
                <th class="text-left">
                    Название
                </th>
                <th class="text-left">
                    Значение
                </th>
            </tr>
            </thead>
            <tbody>
            <tr
                v-for="item in fields"
                :key="item"
            >
                <td class="font-weight-bold">{{ item.title }}</td>
                <td>{{ data[item.name] }}</td>
            </tr>
            </tbody>
        </v-table>
        <template v-if="relates.length">
            <h2 class="text-h4 mt-5">Связанные элементы:</h2>
            <template v-for="relate of relates" :key="relate.title">
                <h3 class="text-h5 mt-5">
                    {{ relate.title }}
                    <Link :href="route(`${relate.resource}.show`, relate.data.id)" as="span">
                        <v-tooltip text="Просмотр">
                            <template v-slot:activator="{ props }">
                                <v-btn icon v-bind="props" variant="text" color="primary">
                                    <v-icon icon="mdi-eye-outline"></v-icon>
                                </v-btn>
                            </template>
                        </v-tooltip>
                    </Link>
                    <Link :href="route(`${relate.resource}.edit`, relate.data.id)" as="span">
                        <v-tooltip text="Редактировать">
                            <template v-slot:activator="{ props }">
                                <v-btn icon v-bind="props" variant="text" color="primary">
                                    <v-icon icon="mdi-file-edit"></v-icon>
                                </v-btn>
                            </template>
                        </v-tooltip>
                    </Link>
                </h3>
                <v-table>
                    <thead>
                    <tr>
                        <th class="text-left">
                            Название
                        </th>
                        <th class="text-left">
                            Значение
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr
                        v-for="field of resources[relate.resource].fields"
                        :key="field.name"
                    >
                        <td class="font-weight-bold">{{ field.title }}</td>
                        <td>{{ relate.data[field.name] }}</td>
                    </tr>
                    </tbody>
                </v-table>
            </template>
        </template>
    </main-layout>
</template>

<script setup>
import MainLayout from '../Layouts/MainLayout.vue'
import { defineProps } from 'vue'
import resources from '../data/resources.js'
import { Link } from '@inertiajs/inertia-vue3';

const props = defineProps({
    title: String,
    resource: String,
    fields: Array,
    data: Object,
    relates: Array
})

</script>

<style scoped>

</style>
