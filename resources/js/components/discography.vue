<template>
    <div>
        <carousel-3d
            :controls-visible="true"
            dir="ltr"
            startIndex="15"
            :inverse-scaling="1000"
            :space="500"
            autoplay
            :width="300"
            :height="360"
            id="cos"
            display="8"
        >
            <slide :index="0">
                    
                <img class="carouselImg" src="images/covers/Happiness.jpg" />
         
                <p class="members">Happines</p>
            </slide>
            <slide :index="1">
                <img class="carouselImg" src="images/covers/Be_Natural.jpg" />
                <p class="members">Be Natural</p>
            </slide>
            <slide :index="2">
                <img
                    class="carouselImg"
                    src="images/covers/Ice_Cream_Cake.jpg"
                />
                <p class="membersSmall">Ice Cream Cake</p>
            </slide>
            <slide :index="3">
                <img class="carouselImg" src="images/covers/The_Red.jpg" />
                <p class="members">The Red</p>
            </slide>
            <slide :index="4">
                <img
                    class="carouselImg"
                    src="images/covers/Winter_Garden.jpg"
                />
                <p class="membersSmall">Winter Garden</p>
            </slide>
            <slide :index="5">
                <img class="carouselImg" src="images/covers/The_Velvet.jpg" />
                <p class="members">The Velvet</p>
            </slide>
            <slide :index="6">
                <img
                    class="carouselImg"
                    src="images/covers/Russian_Roulette.jpg"
                />
                <p class="membersSmall">Russian Roulette</p>
            </slide>
            <slide :index="7">
                <img class="carouselImg" src="images/covers/Rookie.jpg" />
                <p class="members">Rookie</p>
            </slide>
            <slide :index="8">
                <img
                    class="carouselImg"
                    src="images/covers/SM STATION SEASON 2.jpg"
                />
                <p class="membersSmall">S.M. STATION SEASON 2</p>
            </slide>
            <slide :index="9">
                <img
                    class="carouselImg"
                    src="images/covers/The Red Summer.jpg"
                />
                <p class="membersSmall">The Red Summer</p>
            </slide>
            <slide :index="10">
                <img
                    class="carouselImg"
                    src="images/covers/Station Season 2.jpg"
                />
                <p class="membersSmall">Station Season 2</p>
            </slide>
            <slide :index="11">
                <img
                    class="carouselImg"
                    src="images/covers/Perfect_Velvet.jpg"
                />
                <p class="members">Perfect Velvet</p>
            </slide>
                        <slide :index="12">
                               <router-link to="/PerfectRedVelvet" tag="div">
                <img
                    class="carouselImg"
                    src="images/covers/The_Perfect_Red_Velvet.jpg"
                />           </router-link>
                <p class="membersSmall">The Perfect Red Velvet</p>
            </slide>
                                   <slide :index="13">
                <img
                    class="carouselImg"
                    src="images/covers/Cookie_Jar.jpg"
                />
                
                <p class="members">#Cookie Jar</p>
            </slide>
                                              <slide :index="14">
                                                     <router-link to="/SummerMagic" tag="div">
                <img
                style="cursor: pointer;"
                    class="carouselImg"
                    src="images/covers/Summer_Magic.jpg"
                />
                                                     </router-link>
                <p class="membersSmall">Summer Magic</p>
            </slide>
                                                        <slide :index="15">
                                                                    <router-link to="/RBB" tag="div">
                <img
                    class="carouselImg"
                    src="images/covers/RBB.jpg"
                />
                <p class="membersSmall">Really Bad Boy</p>
                    </router-link>
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
    .membersSmall {
        color: #fff;
        font-size: 30px;
        font-weight: 400;
        text-align: center;
    }
</style>
