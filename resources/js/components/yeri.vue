

<template>
  <div>
    <div class="bgimg-4">
      <div class="caption">
        <span
          class="border"
          style="background-color:transparent;font-size:25px;color: #f7f7f7; text-decoration: underline;"
        >Yeri</span>
      </div>
    </div>

    <div
      style="color: #777;background-color:white;text-align:center;padding:50px 80px;text-align: justify;"
    >
      <h3 style="text-align:center;">Kim Ye-ri</h3>
      <p>Kim Ye-rim (Hangul: 김예림, born March 5, 1999), better known by her stage name, Yeri, is a South-Korean singer-songwriter, dancer, rapper and television personality. She is the sub vocalist, sub dancer and sub rapper of the South-Korean girl group Red Velvet and was introduced to the group as a new addition on March 11, 2015</p>
    </div>

    <div class="bgimg-2">
      <div class="caption">
        <span
          class="border"
          style="background-color:transparent;font-size:25px;color: black;"
        >Early life and Career Beginnings</span>
      </div>
    </div>

    <div style="position:relative;">
      <div
        style="color:#ddd;background-color:#282E34;text-align:center;padding:50px 80px;text-align: justify;"
      >
        <p>
          Kim Ye-rim was born in Seoul, South Korea. Her parent's names have not been released to the public, she has three younger sisters, Kim Yoo-rim, Ye-eun, and Chae-eun.
          She made a successful audition to SM Entertainment in 2011 and trained under the company for four years.
          Yeri attended Hanlim Multi Art High School, which she graduated from in 2018
        </p>
      </div>
    </div>

    <div class="bgimg-3">
      <div class="caption">
        <span
          class="border"
          style="background-color:transparent;font-size:25px;color: #f7f7f7;"
        >CAREER</span>
      </div>
    </div>

    <div style="position:relative;">
      <div
        style="color:#ddd;background-color:#282E34;text-align:center;padding:50px 80px;text-align: justify;"
      >
        <p></p>
        <h5>S.M. Rookies</h5>Yeri was part of S.M. Entertainment's pre-debut group, S.M. Rookies, along with groupmates Irene, Seulgi and Wendy.
        She also starred in Red Velvet's debut song Happiness before her debut as a member and was featured in a clip released by the company whereby the S.M. Rookies' members watching and singing along to the song.
        <br>
        <br>
        <br>
        <h5>Red Velvet</h5>On March 11, 2015, before the announcement of the release of mini-album Ice Cream Cake, Yeri was introduced as a new addition to the group. The mini-album marks as her first appearance.
        From May 9 to November 14, 2015, with labelmate Minho from SHINee and N from VIXX, she hosted MBC's music program, Show! Music Core
      </div>
    </div>

    <div class="bgimg-5">
      <div class="caption">
        <span
          class="border"
          style="background-color:transparent;font-size:25px;color: #f7f7f7;"
        >PROFILE</span>
      </div>
    </div>

    <div style="position:relative;">
      <div
        style="color:#ddd;background-color:#282E34;text-align:center;padding:50px 80px;text-align: justify;"
      >
        <ul style="align:center">
          <li>
            <b>Stage Name:</b> Yeri
          </li>

          <li>
            <b>Birth Name:</b> Kim Yerim
          </li>

          <li>
            <b>Nicknames:</b> Squirtle
          </li>

          <li>
            <b>Birthday:</b> March 5, 1999
          </li>

          <li>
            <b>Birthplace:</b> Seoul, South Korea
          </li>

          <li>
            <b>Blood Type:</b> O
          </li>

          <li>
            <b>Height:</b> 160cm
          </li>

          <li>
            <b>Weight:</b> 49kg
          </li>

          <li>
            <b>Position:</b> Sub Vocal, Sub Dancer, Sub Rapper,Maknae
          </li>
        </ul>
      </div>
    </div>

    <div class="bgimg-6">
      <div class="caption">
        <span
          class="border"
          style="background-color:transparent;font-size:25px;color: #f7f7f7;"
        >TV-Appearances</span>
      </div>
    </div>

    <div style="position:relative;">
      <div
        style="color:#ddd;background-color:#282E34;text-align:center;padding:50px 80px;text-align: justify;"
      >
      <iframe width="100%" height="500px" src="/Appearances/Joy"></iframe>
      
      </div>
    </div>
  </div>
</template>


<script>
import membersShowcase from "./membersShowcase";
import Parallax from "vue-parallaxy";
export default {};
</script>
<style>
ul {
  display: table;
  margin: 0 auto;
  font-size: 15px;
}
body,
html {
  height: 100%;
  margin: 0;
  font: 400 15px/1.8 "Lato", sans-serif;
  color: #777;
}

.bgimg-1,
.bgimg-2,
.bgimg-3,
.bgimg-4,
.bgimg-5,
.bgimg-6 {
  position: relative;
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.bgimg-1 {
  background-image: url("/images/yeri2.jpg");
  min-height: 100%;
}

.bgimg-2 {
  background-image: url("/images/yeriDiary2.jpg");
  min-height: 400px;
}

.bgimg-3 {
  background-image: url("/images/yeri4.jpg");
  min-height: 400px;
}
.bgimg-4 {
  min-height: 400px;
}

.bgimg-5 {
  background-image: url("/images/yeri2.jpg");
  min-height: 400px;
}

.bgimg-6 {
  background-image: url("/images/yeri7.jpg");
  min-height: 400px;
}

.caption {
  position: absolute;
  left: 0;
  top: 50%;
  width: 100%;
  text-align: center;
  color: #000;
}

.caption span.border {
  background-color: #111;
  color: #fff;
  padding: 18px;
  font-size: 25px;
  letter-spacing: 10px;
}

h3 {
  letter-spacing: 5px;
  text-transform: uppercase;
  font: 20px "Lato", sans-serif;
  color: #111;
}

/* Turn off parallax scrolling for tablets and phones */
@media only screen and (max-device-width: 1024px) {
  .bgimg-1,
  .bgimg-2,
  .bgimg-3 {
    background-attachment: scroll;
  }
}
</style>
