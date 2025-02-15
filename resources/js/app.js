import './bootstrap';

import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/vue3'

import AppLayout from './Layouts/AppLayout.vue';

// createInertiaApp({
//   resolve: name => {
//     const pages = import.meta.glob('./Pages/**/*.vue', { eager: true })
//     return pages[`./Pages/${name}.vue`]
//   },
//   setup({ el, App, props, plugin }) {
//     createApp({ render: () => h(App, props) })
//       .use(plugin)
//       .mount(el)
//   },
// })

createInertiaApp({
  resolve: name => {
    const pages = import.meta.glob('./Pages/**/*.vue', { eager: true })
    const page=pages[`./Pages/${name}.vue`].default;
    page.layout=AppLayout;
    return page ;
  },
  setup({ el, App, props, plugin }) {
    createApp({ render: () => h(App, props) })
      .use(plugin)
      .mount(el)
  },
})