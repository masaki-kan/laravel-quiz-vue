<template>
  <div>
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
  computed: {
    countAdd: function () {
      return setTimeout(this.count++, 1000);
    },
  },
};
</script>
