import Vue from 'vue'
import App from './App.vue'

import VueRouter from 'vue-router'

import ListOffers from '@/components/ListOffers';
import CreateOffers from '@/components/CreateOffers';
import DetailOffers from '@/components/DetailOffers';


Vue.config.productionTip = false

Vue.use(VueRouter);

const routes = [
  {
    path: '/',
    name: "home",
    component: ListOffers,
  },
  {
    path: '/list',
    name: "offers_list",
    component: ListOffers,
  },

  {
    path: '/detail/:id',
    name: "offers_detail",
    component: DetailOffers,
  },

  {
    path: '/create',
    name: "offers_create",
    component: CreateOffers,
  },
]

const router = new VueRouter({
  mode: "history",
  routes,
});

new Vue({
  render: h => h(App),
  router
}).$mount('#app')
