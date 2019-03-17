<template>
    <div>
        <carousel-3d
            :inverse-scaling="1500"  
            :space="600"
            :width="350"
            :height="400"
            id="cos"
        >
            <slide :index="0">
                  <img class="carouselImg" src="audio/yeri/Those Days (without you).jpg" />
               <audio style="margin-top:10px" controls>
  <source src="audio/yeri/Those Days (without you).mp3" type="audio/mpeg">
</audio>

            </slide>
            <slide :index="1">
                  <img class="carouselImg" src="audio/yeri/Yeri- 깊이 아래로 (Down deeply).jpg" />
               <audio style="margin-top:10px" controls>
  <source src="audio/yeri/Yeri- 깊이 아래로 (Down deeply).mp3" type="audio/mpeg">
  </audio>
            </slide>
            <slide :index="2">
                  <img class="carouselImg" src="audio/yeri/Those Days (without you).jpg" />
               <audio style="margin-top:10px" controls>
  <source src="audio/yeri/Those Days (without you).mp3" type="audio/mpeg">
</audio>

            </slide>
            <slide :index="3">
                  <img class="carouselImg" src="audio/yeri/Those Days (without you).jpg" />
               <audio style="margin-top:10px" controls>
  <source src="audio/yeri/Those Days (without you).mp3" type="audio/mpeg">
</audio>

            </slide>
            <slide :index="4">
                  <img class="carouselImg" src="audio/yeri/Those Days (without you).jpg" />
               <audio style="margin-top:10px" controls>
  <source src="audio/yeri/Those Days (without you).mp3" type="audio/mpeg">
</audio>

            </slide>
        </carousel-3d>
    </div>
</template>

<script>
    export default {
        components: {}
    };
</script>

<style lang="scss" scoped>
.carouselImg{
    border: 3px solid white;
}
    .carousel-3d-container .carousel-3d-slide {
        padding: 20px;
        background-color: rgba(249, 249, 250, 0.048);
    }
</style>

<style>

</style>
