<template>
    <v-app-bar :elevation="2">
        <v-container fluid>
            <div class="d-flex justify-space-between align-center">
                <div class="d-flex align-center">
                    <v-btn icon="mdi-menu" />
                    <Link :href="route('home')" as="button"><h2 class="text-h6 my-0">Зимин А.С.</h2></Link>
                </div>
                <v-btn @click="toggleTheme" density="comfortable" variant="elevated"
                       :icon="theme === 'light' ? 'mdi-brightness-4' : 'mdi-brightness-7'"></v-btn>
            </div>
        </v-container>
    </v-app-bar>
</template>

<script setup>
import {Link} from '@inertiajs/inertia-vue3'
import {useStore} from 'vuex'
import {computed} from 'vue'

const store = useStore()

const theme = computed(() => store.getters.theme)
const toggleTheme = () => store.dispatch('toggleTheme')

</script>

<style scoped>

</style>
