<template>
  <div class="hello">

    <div class="ParallaxImage bg1">
      <div class="container">
        <h1>Red Velvet</h1>
      </div>
    </div>
    <div class="ParallaxContent">
      <div class="container">
        <div class="headlines">
        </div>
        <h3 style="text-align: left; color:white;">About</h3>
        <div id="vueApp">
        </div>
        <div style="text-align: left;">
          <p>Red Velvet (Hangul: 레드벨벳) is a South Korean girl group formed by SM Entertainment. The group debuted
            on August 1, 2014, with the digital single "Happiness" and four group members: Irene, Seulgi, Wendy and Joy.
            In March 2015, Yeri was added into the group.<br>
            <br><br>
            Since their debut, Red Velvet has released two studio albums, one reissue album, and seven extended plays in
            Korean, with eight of them topping South Korea's Gaon Album Chart. Their singles "Ice Cream Cake", "Dumb
            Dumb", "Russian Roulette", "Rookie", "Peek-a-Boo", "Bad Boy" have all charted in the top five of the Gaon
            Digital Chart, while their singles "Red Flavor" and "Power Up" topped the chart upon their release.
            Additionally, they made their Japanese debut in July 2018 with the extended play #Cookie Jar. They are
            regarded as one of the most popular K-pop groups worldwide by Time and Billboard and have received several
            awards for music, choreography, and popularity, including the Golden Disc New Artist Award and the Mnet
            Asian
            Music Award for Best Female Group in 2017. The director of the Korea Foundation for International Cultural
            Exchange while discussing the Korean Wave in 2018 cited Red Velvet as a major contributor and one of the
            country's most talented idol groups who have "largely promoted K-pop".
            <br><br>
          </p>
        </div>
      </div>
    </div>
    <h1 style="    font-weight: 500;
         font-size: 66px;
         text-align: center;
         text-transform: uppercase;
         color: #FFF;">Members</h1>
    <membersShowcase></membersShowcase>
    <div class="ParallaxContent">
      <div class="container">
        <div class="headlines">
        </div>
        <div id="vueApp">
        </div>
        <div style="text-align: left;">
          <p>Red Velvet is known for their 'dual concept' dubbed as their "red" and "velvet" sides which influences
            their styling and
            the music they release. The group's "red" half produces singles predominantly of the pop genre due to its
            bright and
            more youthful nature. Their singles "Ice Cream Cake", "Dumb Dumb" and "Red Flavor" are such examples. Their
            more mature
            "velvet" concept has spawned tracks primarily in the R&B genre. Their singles "Automatic" and "Bad Boy" are
            considered
            to be part of the 'velvet" concept. They often incorporate other genres for the two sides, mixing them with
            genres such
            as electronic pop, hip-hop and disco. This dual concept has earned the group international praise for their
            versatility
            and diverse music.
            <br><br>
          </p>
        </div>
      </div>
    </div>
    <h1 style="    font-weight: 400;
                 font-size: 56px;
                 text-align: center;
                 text-transform: uppercase;
                 color: #FFF;">Discography</h1>
    <discography></discography>

  </div>
</template>
<script>
  import videobg from "./video-bg"
  import membersShowcase from "./membersShowcase"
  import discography from "./discography.vue"
  export default {
    components: {
      videobg,
      membersShowcase,
      discography
    },
    data() {
      return {
        msg: 'Welcome to Your Vue.js App'
      }
    }
  }
</script>
<style scoped>
  h1,
  h2 {
    font-weight: normal;
  }

  ul {
    list-style-type: none;
    padding: 0;
  }

  li {
    display: inline-block;
    margin: 0 10px;
  }

  a {
    color: #42b983;
  }

  .ParallaxImage h1 {
    font-weight: 700;
    font-size: 76px;
    text-align: center;
    text-transform: uppercase;
    color: #FFF;
  }

  .ParallaxContent {
    background: none repeat scroll 0 0 #2581e8;
    padding: 42px 0;
    color: #FFF;
  }

  .ParallaxContent h2 {
    color: #FFF;
  }

  .ParallaxContentxD {
    font-weight: 700;
    font-size: 76px;
    color: #FFF;
  }

  .ParallaxContentxD h2 {
    color: #FFF;
  }
</style>

