<template>
  <div class="Joy">
    <b-container fluid class="p-5">
<div>
  <b-alert show dismissible show variant="warning">
    Warning. Work In Progress Section. Feel free to contribute.
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
              </b-tabs>
            </b-card>
          </div>
          
        </b-col>
        <b-col class="ex2 bioTextColl p-5 border" xl="8">
          <p class="bioText">
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam hendrerit quis tortor id maximus. Mauris auctor tempus
dignissim. In sed auctor orci, et faucibus quam. Suspendisse nec fringilla urna. Etiam eget lacus id leo blandit semper
ac in dolor. Praesent ultrices sapien in congue blandit. Sed bibendum, tortor quis efficitur convallis, sem nisi
scelerisque erat, non convallis risus orci nec diam. Morbi nec ipsum magna. Morbi enim lorem, volutpat sit amet
fermentum vitae, sollicitudin non urna. Donec sagittis imperdiet maximus.
<br>
</p><p class="bioText">
Fusce porta lectus eu vulputate fermentum. Suspendisse potenti. Phasellus fringilla sem massa, eget iaculis mi porttitor
quis. Curabitur vitae mauris tincidunt, imperdiet neque sit amet, hendrerit neque. Cras eget ante in metus iaculis
sagittis. Pellentesque sit amet molestie ligula, vitae interdum dolor. Orci varius natoque penatibus et magnis dis
parturient montes, nascetur ridiculus mus. Vivamus sit amet aliquam turpis.
<br>
</p><p class="bioText">
Sed consectetur feugiat tempus. Suspendisse ultricies urna ac tellus aliquet, et commodo elit fermentum. Vestibulum
tincidunt ornare nunc, eu interdum risus iaculis convallis. Nunc sit amet lorem feugiat ipsum gravida efficitur. Cras
quis convallis nisl, ut mollis libero. Aliquam scelerisque tortor a leo posuere, eget lacinia erat elementum. Curabitur
arcu turpis, convallis non suscipit ac, feugiat et dui. Nam commodo iaculis bibendum. Morbi iaculis eu diam sit amet
hendrerit. Fusce at mattis magna. Nullam enim nunc, egestas ut scelerisque eu, malesuada non elit.
</p>
<p class="bioText">

Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam hendrerit quis tortor id maximus. Mauris auctor tempus
dignissim. In sed auctor orci, et faucibus quam. Suspendisse nec fringilla urna. Etiam eget lacus id leo blandit semper
ac in dolor. Praesent ultrices sapien in congue blandit. Sed bibendum, tortor quis efficitur convallis, sem nisi
scelerisque erat, non convallis risus orci nec diam. Morbi nec ipsum magna. Morbi enim lorem, volutpat sit amet
fermentum vitae, sollicitudin non urna. Donec sagittis imperdiet maximus.


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
      <b-row class="m-1">
        <b-col xl="4">
          <div class="card" style="width: 18rem;">
  <img v-b-popover.hover="'Also known as Tempted'" class="card-img-top" src="images/tempted.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">The Great Seducer</h5>
    <p class="card-text">as Eun Tae-hee</p>
    <a href="#" class="btn btn-success disabled">Watch</a>
  </div>
</div>
        </b-col>
        <b-col  xl="4">
                <div class="card" style="width: 18rem;">
                  <img class="card-img-top" src="images/tempted.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">The Great Seducer</h5>
                    <p class="card-text">as Eun Tae-hee</p>
                    <a href="#" class="btn btn-success disabled">Watch</a>
                  </div>
                </div>
        </b-col>
        <b-col  xl="4">
                  <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="images/tempted.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">The Great Seducer</h5>
                      <p class="card-text">as Eun Tae-hee</p>
                      <a href="#" class="btn btn-success disabled">Watch</a>
                    </div>
                  </div>
        </b-col>
      </b-row>
      <b-row>
        <b-col>

   
        <b-card-body<p class="card-text"><joyTimeline></joyTimeline></p>




         
   

     
              </b-col>
              </b-row>
    </b-container>
    
  </div>
</template>
<script>
  import joyTimeline from './joyTimeline.vue'
    export default {
        components: {
            joyTimeline,

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