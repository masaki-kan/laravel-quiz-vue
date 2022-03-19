import Vue from 'vue'
import router from './router.js'
import VueSocialSharing from 'vue-social-sharing'
import VueCompositionAPI from '@vue/composition-api'
Vue.use(VueSocialSharing)
Vue.use(VueCompositionAPI)

import axios from 'axios'
Vue.prototype.$http = axios;

new Vue({
  el: '#app',
  router: router, // routerにはrouter.jsファイルを設定します
 }).$mount('#app') // routerを適用する要素を設定(マウント)します
