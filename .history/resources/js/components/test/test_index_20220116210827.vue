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
        .post("https://Larabel側URL/profile", data)
        .then((res) => {
          self.userid = res.data.userid;
          self.name = res.data.name;
          self.profile = res.data.profile;
          self.sex = res.data.sex;
          self.birth = res.data.birth;
          self.pref = res.data.pref;
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

