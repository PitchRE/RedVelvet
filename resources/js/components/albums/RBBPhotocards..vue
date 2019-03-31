<template>
    <div>

        <carousel-3d
            :inverse-scaling="1500"
            :space="600"
            autoplay
            :width="300"
            :height="480"
                      
            :controlsVisible="true"
            :clickable="true"
        >
            <slide :index="0">
             
                    <img style="cursor: pointer;" class="carouselImg" src="images/joyrbbcard1.jpg" />
           
                <p class="members">Joy</p>
            </slide>
            <slide :index="1">
         
                   <img style="cursor: pointer;" class="carouselImg" src="images/joyrbbcard2.jpg" />
                    
                <p class="members">Joy</p>
            </slide>
            <slide :index="2">
                <img class="carouselImg" src="images/irenerbbcard1.jpg" />
                <p class="members">Irene</p>
            </slide>
            <slide :index="3">
        
                <img style="cursor: pointer;" class="carouselImg" src="images/irenerbbcard2.jpg" />
              
                <p class="members">Irene</p>
                
            </slide>
            <slide :index="4">
                    
                    <img style="cursor: pointer;" class="carouselImg" src="images/seulgirbbcard1.jpg" />
          
                <p id="mdo" class="members">Seulgi</p>
                
            </slide>
                        <slide :index="5">
                    
                    <img style="cursor: pointer;" class="carouselImg" src="images/seulgirbbcard2.jpg" />
          
                <p id="mdo" class="members">Seulgi</p>
                
            </slide>
                       
                        <slide :index="6">
                    
                    <img style="cursor: pointer;" class="carouselImg" src="images/wendyrbbcard1.jpg" />
          
                <p id="mdo" class="members">Wendy</p>
                
            </slide>
                                 <slide :index="7">
                    
                    <img style="cursor: pointer;" class="carouselImg" src="images/wendyrbbcard2.jpg" />
          
                <p id="mdo" class="members">Wendy</p>
                
            </slide>
                                       <slide :index="8">
                    
                    <img style="cursor: pointer;" class="carouselImg" src="images/yerirbbcard1.jpg" />
          
                <p id="mdo" class="members">Yeri</p>
                
            </slide>
                                               <slide :index="9">
                    
                    <img style="cursor: pointer;" class="carouselImg" src="images/yerirbbcard2.jpg" />
          
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
