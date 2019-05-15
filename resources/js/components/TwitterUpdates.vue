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
        .get("https://redvelvet.pro/api/twitter/return")
        .then(response => {
          // handle success
          console.log(response.data);
        })
        .catch(function(error) {
          // handle error
          console.log(error);
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
