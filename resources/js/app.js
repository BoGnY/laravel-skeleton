
require('./bootstrap');

require('moment');

import Vue from 'vue';
import VueMeta from 'vue-meta';

import { InertiaApp } from '@inertiajs/inertia-vue';
import { InertiaProgress } from '@inertiajs/progress';
import { InertiaForm } from 'laravel-jetstream';
import PortalVue from 'portal-vue';
import VueTailwind from 'vue-tailwind';

Vue.mixin({ methods: { route } });
Vue.use(InertiaApp);
Vue.use(InertiaForm);
Vue.use(PortalVue);
Vue.use(VueMeta);
Vue.use(VueTailwind);

InertiaProgress.init({
    // The delay after which the progress bar will appear during navigation, in milliseconds.
    delay: 250,
    // The color of the progress bar.
    color: '#29d',
    // Whether to include the default NProgress styles.
    includeCSS: true,
    // Whether the NProgress spinner will be shown.
    showSpinner: false,
});

const app = document.getElementById('app');

new Vue({
    metaInfo: {
        titleTemplate: (title) => title ? `${title} - ${process.env.MIX_APP_NAME}` : process.env.MIX_APP_NAME
    },
    render: (h) => h(InertiaApp, {
        props: {
            initialPage: JSON.parse(app.dataset.page),
            resolveComponent: (name) => require(`./Pages/${name}`).default,
        },
    }),
}).$mount(app);
