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
  computed : {
    return {
    countAdd = function(){
      this.count ++
    }
    }

  }
};
</script>
