<template>

<div>
  <b-button class="p-1" variant="success" v-b-modal.modal1>Achievements</b-button>

  <!-- Modal Component -->
  <b-modal id="modal1"  size="xl"  title="Achievements">
        <b-alert show dismissible variant="warning">
    Warning. Work In Progress Section.
  </b-alert>
      <iframe width="100%" height="500px" src="/Joy/Achievements"></iframe>
      <br>
  </b-modal>
<br>
  <b-button class="p-1" variant="success" v-b-modal.modal2>TV-Shows</b-button>
    <b-modal id="modal2"  size="xl"  title="TV-Shows">
        <b-alert show dismissible variant="warning">
    Warning. Work In Progress Section.
  </b-alert>
      <iframe width="100%" height="500px" src="/RedVelvet/Appearances"></iframe>
      <br>
  </b-modal>
</div>
</template>



<script>

export default{

}

</script>

<style>

#myFrame { width:100%; height:100%; }
</style>