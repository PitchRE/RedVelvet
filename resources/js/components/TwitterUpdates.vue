<template>
  <div class="container">
    <b-row>
      <b-col lg="4" v-for="post in Posts" v-bind:key="post.id" v-html="post.html"></b-col>
    </b-row>
  </div>
</template>


<script>
export default {
  data: function() {
    return {
      Posts: []
    };
  },
  methods: {
    lastTwitterUpdates() {
      axios
        .get("localhost:8000/api/twitter/return")
        .then(response => {
          // handle success
          this.Posts = JSON.parse(response.data);
          console.log("test");
        })
        .catch(function(error) {
          // handle error
          console.log("test");
          console.log(error);
          console.log("test");
        })
        .finally(function() {
          // always executed
        });
    }
  },
  created: function() {
    this.lastTwitterUpdates();
  }
};
</script>
