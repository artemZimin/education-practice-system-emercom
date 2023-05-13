<template>
    <v-list-group :value="title">
        <template v-slot:activator="{ props }">
            <v-list-item
                variant="elevated"
                v-bind="props"
                :title="title"
            ></v-list-item>
        </template>

        <Link :href="route(`${resource}.create`)" as="div">
            <v-list-item
                variant="tonal"
                :value="add"
                :title="add"
            ></v-list-item>
        </Link>

        <Link :href="route(`${resource}.index`)" as="div">
            <v-list-item
                variant="tonal"
                :value="all"
                :title="all"
            ></v-list-item>
        </Link>
    </v-list-group>
</template>

<script setup>
import { defineProps } from 'vue'
import { Link } from '@inertiajs/inertia-vue3'

const props = defineProps({
    title: String,
    active: Boolean,
    resource: String,
    all: {
        type: String,
        default: 'Посмотреть все записи'
    },
    add: {
        type: String,
        default: 'Добавить запись'
    }
})

</script>

<style scoped>

</style>
