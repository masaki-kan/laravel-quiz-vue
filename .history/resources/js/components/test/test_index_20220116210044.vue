<template>
  <form>
    <input type="text" v-model="information" />
    <button @click="submit()">挿入</button>
  </form>
</template>

<script>
export default {
  data() {
    return {
      information: "",
    };
  },
  methods: {
    submit: () => {},
  },
};
</script>

