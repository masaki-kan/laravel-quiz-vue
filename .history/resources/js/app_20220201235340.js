import Vue from 'vue'
import router from './router.js'
import VueSocialSharing from 'vue-social-sharing'
import VueCompositionAPI from '@vue/composition-api'
import axios from 'axios'
Vue.use(VueSocialSharing)
Vue.use(VueCompositionAPI)
Vue.prototype.$http = axios;



 import Vue from 'vue'
 import router from './router.js'
 import VueSocialSharing from 'vue-social-sharing';
 import VueCompositionAPI from '@vue/composition-api'
 import axios from 'axios'
 
 // ここから追加
 import 'bootstrap';
 // ここまで追加
 
 Vue.prototype.$http = axios;
 
 Vue.use(VueCompositionAPI);
 Vue.use(VueSocialSharing);
 
 new Vue({
  el: '#app',
  router: router, // routerにはrouter.jsファイルを設定します
 }).$mount('#app') // routerを適用する要素を設定(マウント)します
 
 