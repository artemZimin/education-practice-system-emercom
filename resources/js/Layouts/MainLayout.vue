<template>
    <v-app :theme="theme">
        <app-header/>
        <v-container fluid class="mt-16">
            <v-row>
                <v-col :cols="2" v-show="menuOpen">
                    <v-card
                        class="mx-auto h-100"
                    >
                        <v-list v-model:opened="open">
                            <nav-menu-item v-for="menu of menus" :key="menu.title" :title="menu.title" :resource="menu.resource" />
                        </v-list>
                    </v-card>
                </v-col>
                <v-col style="overflow-x: scroll;">
                    <slot/>
                </v-col>
            </v-row>
        </v-container>
        <loading v-if="loading" />
    </v-app>
</template>

<script setup>
import AppHeader from "../Components/Header.vue";
import NavMenuItem from '../Components/NavMenuItem.vue'
import Loading from '../Components/Loading.vue'
import { ref, computed } from 'vue'
import { useStore } from 'vuex'
import resources from '../data/resources.js'

const menuOpen = ref(true)

const store = useStore()

const theme = computed(() => store.getters.theme)
const loading = computed(() => store.getters.loading)

const menus = Object.entries(resources).map(resource => ({ title: resource[1].index.title, resource: resource[0] }))
const open = ref([])

</script>

<style scoped>

</style>
