import Vue from 'vue'
import router from './router.js'
import VueSocialSharing from 'vue-social-sharing'
import VueCompositionAPI from '@vue/composition-api'
import axios from 'axios'

import 'bootstrap';

import MainPage from './components/page/MainPage'

Vue.use(VueSocialSharing)
Vue.use(VueCompositionAPI)
Vue.prototype.$http = axios;

new Vue({
  el: '#app',
  components: {
    app: MainPage
  },
  router: router, // routerにはrouter.jsファイルを設定します
 }).$mount('#app') // routerを適用する要素を設定(マウント)します
