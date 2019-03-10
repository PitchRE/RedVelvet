<template>
  <div class="Joy">
    <b-container fluid class="p-5">
<div>
  <b-alert show dismissible variant="warning">
    Warning. Work In Progress Section.
  </b-alert>
</div>

      <b-row>
        <b-col xl="4">
          <b-img thumbnail class="JoyImg" src="images/joy.jpg" fluid-grow alt="Responsive image" />
          <div >
            <b-card class="JoyTableData" no-body>
              <b-tabs  card>
                <b-tab title="General Information" class="JoyTableDataTab" active><b-table class="JoyTableData" stacked :items="generalData" /></b-tab>
                <b-tab  title="Career"><b-table class="JoyTableData" stacked :items="CareerData" /></b-tab>
              <b-tab title="Other">   <achivDataModal></achivDataModal></b-tab>
              </b-tabs>
              
            </b-card>
          
          </div>
          
        </b-col>
        <b-col class="ex2 bioTextColl p-5 border" xl="8">
          <p class="bioText">
Park Soo-young (born September 3, 1996), known by the stage name Joy, is a South Korean singer and actress. 
She is a member of the South Korean girl group Red Velvet. Aside from group activities, Joy has also starred in various television dramas such as The Liar and His Lover (2017) and Tempted (2018).
<br>
<br>
</p>
<h4 style="color:white; text-align:center;">Early life</h4>
<p class="bioText">
Park Soo-young was born in Jeju Island, South Korea. Her family then moved to Dobong District, Seoul after just one month.
 Her family consists of her parents and two younger sisters, Park Ji-yeong and Park Min-ji. As a child, Joy was interested in modern trot music.[6] In grade school, she was influenced to become a singer after receiving praise for her rendition of Korean rock band Cherry Filter's song Flying Duck. Joy auditioned and was cast by SM Entertainment at the S.M. Global Audition in Seoul in 2012.
 She trained under the agency for two years, during which time a vocal coach gave her the stage name "Joy".
<br>
</p>
<h5 style="color:white; text-align:center;">1996–2014: Early life and career beginnings</h5>
<p class="bioText">
Joy was introduced as the fourth member of Red Velvet on July 29, 2014.[9][10] She is the only member of the group who was not introduced as a part of SM Rookies before the group's debut. The group made their music debut with the digital single "Happiness" on August 1, 2014.[11] Since 2014, the group has released six EPs and two studio albums.
</p>
<h4 style="color:white; text-align:center;">1996–2014: Early life and career beginnings</h4>
<p class="bioText">

In 2015, Joy joined the fourth season of reality show We Got Married, where she appeared opposite BtoB member Yook Sung-jae.
 She received significant recognition for her participation in the popular TV program and featured in her first solo pictorial in Korean fashion magazine CéCi, concurrent to modeling for Etude House cosmetics.
  On December 29, 2015, Joy shared a win with Yook for the Best Couple Award and separately won the New Star Award at the 2015 MBC Entertainment Awards.
  <br>
  <br>
  Following group promotions for Red Velvet's second mini album The Velvet, Joy released a duet with Yook on April 16, 2016 entitled "Young Love" and received official songwriting credit for contributing to its lyrical composition.
   The song entered the top 12 of the Instiz iChart real-time rankings upon its release and peaked at #52 on the Gaon Singles Chart.
    Departing from We Got Married on May 7, 2016 they became known as one of the longest-running and most popular couples in the show's history.
   Over the course of We Got Married airing, their videos together on YouTube accumulated over 21.3 million views and have since gone on to accumulate over 200 million views in total.


</p>
         
        </b-col>
      </b-row>

      <b-row>
        <b-col cols="3">

        </b-col>
      </b-row>
<b-row>
<b-col  xl-12 class="actingCareer">
</b-col>

</b-row>
      <b-row class="m-2" >
        <b-col xs=12 sm=12  xl="4" offset-xl="2">
          <div class="card" style="width: 18rem;">
  <img v-b-popover.hover="'Also known as Tempted'" class="card-img-top" src="images/tempted.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">The Great Seducer</h5>
    <p class="card-text">as Eun Tae-hee</p>
    <a href="#" class="btn btn-success disabled">Watch</a>
  </div>
</div>
        </b-col>
        <b-col xs=12 sm=12  xl="4" offset-xl="2">
                <div class="card" style="width: 18rem;">
                  <img class="card-img-top" src="images/theliarandhislover.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">The Liar and His Lover</h5>
                    <p class="card-text">Yoon So-rim</p>
                    <a href="#" class="btn btn-success disabled">Watch</a>
                  </div>
                </div>
        </b-col>
     
      </b-row>
      <b-row>
        <b-col>


<joyTimeline></joyTimeline>




         
   

     
              </b-col>
              </b-row>



    </b-container>
    
  </div>
</template>
<script>
  import joyTimeline from './joyTimeline.vue'
  import achivDataModal from './JoyAchivData.vue'
    export default {
        components: {
            joyTimeline,
            achivDataModal

            },
      data() {
        return {
                 CareerData: [
            {Occupation:"Singer, Actress", Agency: 'S.M. Entertainment', YearsActive: '2014–present', AssociatedActs: 'Red Velvet' }
          ],
          generalData: [
            { Birth_Name: 'Park Soo-young (박수영)', BirthDate: 'September 3, 1996', BirthPlace: 'Jeju Province, South Korea', Nicknames: 'kkyeopjoy (Cute joy)' }
          ],
        }
      }
    }

</script>
<style>
  .ex {
    background-color: rgba(199, 45, 204, 0.541);
  }

  .ex2 {
    background-color: rgba(102, 12, 143, 0.671);
    
  }

  .ex3 {
    background-color: rgb(1, 241, 101);
  }



  .bioTextColl {
    background-color: #2581E8;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    font-size: 18px;
      text-indent: 50px;
  text-align: justify;
  letter-spacing: 0.5px;
  text-shadow: 2px 1px black;
  
  }

  .bioText {
    color: white;
  }

  .text-divider{margin: 2em 0; line-height: 0; text-align: center;}
.text-divider span{background-color: #f5f5f5; padding: 1em;}
.text-divider:before{ content: " "; display: block; border-top: 1px solid #e3e3e3; border-bottom: 1px solid #f7f7f7;}

.actingCareer{
    background-color: rgba(214, 193, 72, 0.74);
  text-indent: 50px;
  text-align: justify;
  letter-spacing: 3px;
  
}
.JoyTableData{
  background-color: rgba(255, 255, 255, 0.603);
}

</style>