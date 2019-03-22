<template>
    <div>
        <carousel-3d
            :inverse-scaling="1500"
            :space="600"
            autoplay
            :width="300"
            :height="480"
            id="cos"
        >
            <slide :index="0">
                <router-link to="/Joy" tag="div">
                    <img style="cursor: pointer;" class="carouselImg" src="images/joy.jpg" />
                </router-link>
                <p class="members">Joy</p>
            </slide>
            <slide :index="1">
                 <router-link to="/Seulgi" tag="div">
                   <img style="cursor: pointer;" class="carouselImg" src="images/seulgi.jpg" />
                         </router-link>
                <p class="members">Seulgi</p>
            </slide>
            <slide :index="2">
                <img class="carouselImg" src="images/irene.jpg" />
                <p class="members">Irene</p>
            </slide>
            <slide :index="3">
                <img class="carouselImg" src="images/wendy.jpg" />
                <p class="members">Wendy</p>
            </slide>
            <slide :index="4">
                    <router-link to="/Yeri" tag="div">
                    <img style="cursor: pointer;" class="carouselImg" src="images/yeri.jpg" />
                   </router-link>
                <p id="mdo" class="members">Yeri</p>
                
            </slide>
        </carousel-3d>
    </div>
</template>

<script>
    export default {
        components: {}
    };
</script>

<style lang="scss">
    .carousel-3d-container .carousel-3d-slide {
        padding: 20px;
        background-color: rgba(249, 249, 250, 0.404);
    }
</style>

<style>
    .members {
        color: #fff;
        font-size: 40px;
        font-weight: 500;
        text-align: center;
    }
</style>
