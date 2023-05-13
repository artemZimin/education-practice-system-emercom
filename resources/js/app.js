import './bootstrap';

import { createApp, h } from 'vue'
import {App, createInertiaApp, plugin} from '@inertiajs/inertia-vue3'
import { InertiaProgress } from '@inertiajs/progress'
import route from 'ziggy-js'
import 'vuetify/styles'
import { createVuetify } from 'vuetify'
import * as components from 'vuetify/components'
import * as directives from 'vuetify/directives'
import {resolvePageComponent} from "laravel-vite-plugin/inertia-helpers";
import { ZiggyVue } from '../../vendor/tightenco/ziggy/dist/vue.m';
import store from './store/index'

const vuetify = createVuetify({
    components,
    directives,
})

const el = document.getElementById('app')

// createApp({
//     render: () => h(App, {
//         initialPage: JSON.parse(el.dataset.page),
//         resolveComponent: name => import(`./Pages/${name}.vue`).then(module => module.default),
//     }),
// }).mixin({methods: {route}}).use(plugin).use(vuetify).mount(el)

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')),
    setup({ el, app, props, plugin }) {
        return createApp({ render: () => h(app, props) })
            .mixin({methods: {route}}).use(plugin).use(vuetify).use(store).mount(el)
    },
});

InertiaProgress.init({ color: 'rgb(98,0,238)', showSpinner: true })
