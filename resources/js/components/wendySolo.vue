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
    src="https://www.youtube.com/embed/vm_PQyXzGHs?autoplay=0"
    allowfullscreen
  />
</div>
            </slide>
                        <slide :index="1">
          <div>
  <b-embed
    type="iframe"
    aspect="16by9"
    src="https://www.youtube.com/embed/ycxAl-botbY?autoplay=0"
    allowfullscreen
  />
</div>

            </slide>
                     
                        <slide :index="2">
          <div>
  <b-embed
    type="iframe"
    aspect="16by9"
    src="https://www.youtube.com/embed/SrzQk8moDaM?autoplay=0"
    allowfullscreen
  />
</div>

            </slide>
                   
                        <slide :index="3">
          <div>
  <b-embed
    type="iframe"
    aspect="16by9"
    src="https://www.youtube.com/embed/H4a-5BdZ5ck?autoplay=0"
    allowfullscreen
  />
</div>

            </slide>
                  
                   
                        <slide :index="4">
          <div>
  <b-embed
    type="iframe"
    aspect="16by9"
    src="https://www.youtube.com/embed/jNRU5NPNAhw?autoplay=0"
    allowfullscreen
  />
</div>

            </slide>
                            
                   
                        <slide :index="5">
          <div>
  <b-embed
    type="iframe"
    aspect="16by9"
    src="https://www.youtube.com/embed/xDMLANstgGI?autoplay=0"
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
