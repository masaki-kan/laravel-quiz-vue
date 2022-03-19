import Vue from 'vue'
import testHeader from './components/test/test_header'
import testSide from './components/test/test_side'
import testFooter from './components/test/test_footer'
import testIndex from './components/test/test_index'


new Vue({
  el: '#test',
  components: {
    app :testHeader,
    side : testSide,
    testfooter :testFooter,
    index : testIndex
  }
})
