<template>
    <div>
        <carousel-3d
            :inverse-scaling="1000"
            :space="800"
            :width="540"
            :height="160"
            autoplay
            id="cos"
            :disable3d="true"
            :controlsVisible="true"
      
        >
            <slide :index="0">
                <p class="facts">She was born in Seongbuk-dong, Seoul, South Korea.</p>
            </slide>
                        <slide :index="1">
                <p class="facts">Family: Parents, an older sister (Son Seung-hee)</p>
            </slide>
                        <slide :index="2">
                <p class="facts">Her nicknames are: Olaf, Wan-ah</p>
            </slide>
                                    <slide :index="3">
                <p class="facts">Her designated color is blue.</p>
            </slide>
                                    <slide :index="4">
                <p class="facts"> Her representative animal: Deer (Happiness to #Cookie Jar), Squirrel (Summer Magic onwards)</p>
            </slide>
                                    <slide :index="5">
                <p class="facts">Her representative fruit: Blue-flesh Orange</p>
            </slide>
                                              <slide :index="6">
                <p class="facts">Her representative weapon: Scissors</p>
            </slide>
                                              <slide :index="7">
                <p class="facts"> Her representative drink: Blue Crush (Ingredients: Blue-flesh Orange, Blue Cassette Tape, Blue Leaf-Tree)</p>
            </slide>
                                              <slide :index="8">
                <p class="facts"> Specialties: Music Instruments (piano, guitar, flute and saxophone)</p>
            </slide>
                                              <slide :index="9">
                <p class="facts">Education: Shattuck-Saint Mary’s School; Richmond Hill High School</p>
            </slide>
                                              <slide :index="10">
                <p class="facts">She lived until her fifth year of elementary school in Korea, then she moved to Canada with her older sister, to study abroad.</p>
            </slide>
                                              <slide :index="11">
                <p class="facts">She left Korea when she was in the 5th grade.</p>
            </slide>
                                              <slide :index="12">
                <p class="facts">She used to make YouTube videos, but she deleted her account</p>
            </slide>
                                              <slide :index="13">
                <p class="facts">She tried out for Cube Entertainment before SM Entertainment</p>
            </slide>
                                               <slide :index="14">
                <p class="facts">She was a part of the predebut team SM Rookies</p>
            </slide>
                                               <slide :index="15">
                <p class="facts">Wendy is known for her rich expressions and reactions.</p>
            </slide>
                                               <slide :index="16">
                <p class="facts">She can speak English and Korean.</p>
            </slide>
                                               <slide :index="17">
                <p class="facts">She can play the piano, guitar, flute, saxophone.</p>
            </slide>
                                               <slide :index="18">
                <p class="facts">Her hobbies are: finding rare songs, cooking, walking by cafes, singing.</p>
            </slide>
                                               <slide :index="19">
                <p class="facts">Wendy has also collaborated with rapper Yuk Ji-dam for the song “Return”, one of the OSTs of KBS2’s drama Who Are You: School 2015. 
                    The song was released on June 8, 2015 and debuted at #31 on the Gaon Singles Chart. </p>
            </slide>
                                   <slide :index="20">
                <p class="facts"> She released another song “Let You Know” for the soundtrack of the JTBC drama D-Day on October. </p>
            </slide>
                                   <slide :index="21">
                <p class="facts"> On January 9, 2016, she became a panelist on We Got Married </p>
            </slide>
                                   <slide :index="22">
                <p class="facts">On King of Mask Singer (episode 43 aired on January 24, 2016), she participated as a contestant with the stage name “Space Beauty Maetel” </p>
            </slide>
                                   <slide :index="23">
                <p class="facts"> Wendy released a collaboration single with with Ricky Martin called “Vente Pa’ Ca”.</p>
            </slide>
                                   <slide :index="24">
                <p class="facts">Wendy released a collaboration single with Eric Nam titled “Spring Love” on March 4, 2016, as part of S.M. Entertainment’s SM Station project </p>
            </slide>
                    <slide :index="25">
                <p class="facts">She says she loves music because both of her parents were music lovers. </p>
            </slide>
                    <slide :index="26">
                <p class="facts">She knows she wanted to become a singer since she was 5. </p>
            </slide>
                    <slide :index="27">
                <p class="facts">She likes all genres of music. </p>
            </slide>
                    <slide :index="28">
                <p class="facts">Her favorite movies are ” Begin Again ” and ” The Fault in our Stars ” </p>
            </slide>
                    <slide :index="29">
                <p class="facts">Her favorite type of clothes are casual attires and something plain and simple. </p>
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
        background-color: rgba(252, 252, 252, 0.39);
    }
</style>

<style>
    .facts {
        color: #000;
        font-size: 20px;
        font-weight: 500;
        text-align: center;
    }
</style>
