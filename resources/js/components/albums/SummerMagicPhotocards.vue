<template>
    <div>

        <carousel-3d
            :inverse-scaling="1500"
            :space="600"
            autoplay
            :width="300"
            :height="480"
                        :disable3d="true"
            :controlsVisible="true"
            :clickable="false"
        >
            <slide :index="0">
             
                    <img style="cursor: pointer;" class="carouselImg" src="images/JoyPhotocardSummerMagic.webp" />
           
                <p class="members">Joy</p>
            </slide>
            <slide :index="1">
         
                   <img style="cursor: pointer;" class="carouselImg" src="images/SeulgiPhotocardSummerMagic.webp" />
                    
                <p class="members">Seulgi</p>
            </slide>
            <slide :index="2">
                <img class="carouselImg" src="images/IrenePhotocardSummerMagic.webp" />
                <p class="members">Irene</p>
            </slide>
            <slide :index="3">
        
                <img style="cursor: pointer;" class="carouselImg" src="images/WendyPhotocardSummerMagic.webp" />
              
                <p class="members">Wendy</p>
                
            </slide>
            <slide :index="4">
                    
                    <img style="cursor: pointer;" class="carouselImg" src="images/YeriPhotocardSummerMagic.webp" />
          
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

<style scoped lang="scss">
    .carousel-3d-container .carousel-3d-slide {
        padding: 20px;
        background-color: rgba(249, 249, 250, 0.623);
        border: none;
       
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
