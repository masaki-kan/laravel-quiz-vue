import Vue from 'vue'
import testHeader from './components/test/test_header'
import testSide from './components/test/test_side'

new Vue({
  el: '#test',
  components: {
    app :testHeader,
    side : testSide
  }
})
