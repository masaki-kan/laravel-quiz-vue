<template>
  <form>
    <input type="text" v-model="information" />
    <button @click="getinformation()">挿入</button>
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
    getinformation() {
      const data = {
        userid: "bonchan", //今回投げるuserid
      };
      var self = this;
      axios
        .post(process.env.MIX_HOST_URL + "information/store", data)
        .then((res) => {
          self.userid = res.data.userid;
        })
        .catch((error) => {
          console.log(error);
        });
    },
  },
  created() {
    //APIアクセスでgetProfiles()を呼び出す
    this.getProfiles();
  },
};
</script>

