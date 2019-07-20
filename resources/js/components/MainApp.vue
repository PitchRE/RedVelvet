<template>
  <div id="main">
    <div class="content">
      <videobg></videobg>
      <router-view></router-view>
      <!-- 
        <aplayer autoplay fixed: true float="true" :music="{ title:
                                                    'secret base~君がくれたもの~', artist: 'Silent Siren', src:
                                                    'audio/faded.mp3', lrc: 'http://localhost:8000/lrc/test.lrc',
                                                    pic: 'https://moeplayer.b0.upaiyun.com/aplayer/secretbase.webp'
                                                    }" />
      -->
    </div>
  </div>
</template>

<script>
////  import Header from "./Header.vue";
import videobg from "./video-bg.vue";
import Aplayer from "vue-aplayer";
export default {
  name: "main-app",
  components: { videobg, Aplayer }
};
</script>
