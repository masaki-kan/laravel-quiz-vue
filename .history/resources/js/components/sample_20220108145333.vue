<template>
  <div>
    <button v-on:click="countAdd()">プラス</button>
    <p>{{ count }}</p>
  </div>
</template>

<script>
export default {
  data() {
    return {
      count: 0,
    };
  },
  methods: {
    countAdd: function () {
      return setTimeout(this.count++, 1000);
    },
  },
};
</script>
