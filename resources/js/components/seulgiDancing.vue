<template>
      <div>
        <carousel-3d
            :inverse-scaling="1000"
            :space="800"
            :width="640"
            :height="360"
            id="cos"
            :disable3d="true"
            :controlsVisible="true"
            :clickable="false"
        >
            <slide :index="0">
          <div>
  <b-embed
    type="iframe"
    aspect="16by9"
    src="https://www.youtube.com/embed/Mk2UazWU41w?autoplay=0&showinfo=0&controls=0"
    allowfullscreen
  />
</div>
            </slide>
                        <slide :index="1">
          <div>
  <b-embed
    type="iframe"
    aspect="16by9"
    src="https://www.youtube.com/embed/RJDkUdWTaIQ?autoplay=0&showinfo=0&controls=0"
    allowfullscreen
  />
</div>

            </slide>
                        </slide>
                        <slide :index="2">
          <div>
  <b-embed
    type="iframe"
    aspect="16by9"
    src="https://www.youtube.com/embed/2SO-qLst3po?autoplay=0&showinfo=0&controls=0"
    allowfullscreen
  />
</div>

            </slide>
                        </slide>
                        <slide :index="3">
          <div>
  <b-embed
    type="iframe"
    aspect="16by9"
    src="https://www.youtube.com/embed/kUduifm4x98?autoplay=0&showinfo=0&controls=0"
    allowfullscreen
  />
</div>

            </slide>
        </carousel-3d>
    </div>
</template>

<script>
export default {
    
}
</script>
