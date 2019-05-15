<template>
  <div class="container">
    <b-row>
      <b-col
        style="margin: 25px; border: solid blacl 3px; border-radius: 15px;"
        lg="4"
        v-for="Post in Posts"
        v-bind:key="Post.id"
      >
        <Tweet :id="Post.twitter_id"></Tweet>
      </b-col>
    </b-row>
  </div>
</template>


<script>
import { Tweet, Moment, Timeline } from "vue-tweet-embed";
export default {
  components: {
    Tweet
  },
  data: function() {
    return {
      Posts: [],
      item: null
    };
  },
  methods: {
    lastTwitterUpdates() {
      axios
        .get("https://redvelvet.pro/api/twitter/return")
        .then(response => {
          // handle success
          this.Posts = JSON.parse(response.data);
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

