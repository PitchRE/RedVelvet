<template>
    <b-container>
<section>
    <!--for demo wrap-->
     <br>

    <h1>Red Velvet Achievements</h1>
    <br>
    <div class="tbl-header">
      <table cellpadding="0" cellspacing="0" border="0">
        <thead>
          <tr>
            <th>Year</th>
            <th>Award</th>
            <th>Category</th>
            <th>Nominated work</th>
            <th>Result</th>

          </tr>
        </thead>
      </table>
    </div>
    <div class="tbl-content">
      <table cellpadding="0" cellspacing="0" border="0">
        <tbody>
          <tr>
            <td>2014</td>
            <td>SBS MTV Best of the Best</td>
            <td>Best New Artist</td>
            <td>Red Velvet</td>
            <td class="resultnominated"><a>Nominated</a></td>
        
          </tr>
          <tr>
            <td>2014</td>
            <td>SBS Gayo Daejeon</td>
            <td>Best New Artist</td>
            <td>Red Velvet</td>
            <td  class="resultnominated"><a>Nominated</a></td>
          </tr>
          <tr>
            <td>2015</td>
            <td>Simply K-Pop Awards</td>
            <td>Best Performance Girl Group</td>
            <td>Red Velvet</td>
            <td  class="resultwin"><a>Won</a></td>
          </tr>
          <tr>
            <td>2015</td>
            <td>MBC Music Show Champion Awards</td>
            <td>Best Performance Girl Group</td>
            <td>"Dumb Dumb"</td>
            <td class="resultnominated">Nominated</td>
          </tr>
          <tr>
            <td>2017</td>
            <td>Social Welfare 2017</td>
            <td>Seoul Mayor's Award</td>
            <td>Red Velvet</td>
            <td class="resultwin">Win</td>
          </tr>
          <tr>
            <td>2017</td>
            <td>Sports DongA Awards</td>
            <td>Summer Queens Of The Year</td>
            <td>Red Velvet</td>
            <td class="resultwin">Won</td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>

 </b-container>
</template>


<script>
export default{

}

</script>

<style>
.Win {
    background-color: rgba(34, 209, 18, 0.404)
}
.Win:hover {
    background-color: rgb(30, 228, 13);
}
.Nominated {
    background-color: rgba(241, 63, 50, 0.521);
}
.Nominated:hover {
    background-color: rgb(243, 21, 6);
}
</style>