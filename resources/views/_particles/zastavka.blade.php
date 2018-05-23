{{-- <div id="trailer" class="is_overlay">
  <video id="video" width="100%" height="auto" autoplay="autoplay" loop="loop" preload="auto">
    <source src=></source>

  </video>
</div> --}}
    {{-- <source src="book.webm" type="video/webm"></source> --}}


<div class="row">
  <div class="col-md-6">
    <video width="768" height=auto autoplay loop preload="auto">
      <source src="/site_assets/img/house.mp4" type="video/mp4">
    </video>
  </div>
  <div class="col-md-6">
    <img id="image" src="/site_assets/img/zastav2.jpg" style="width:768px">
  </div>

</div>

{{-- <img id="image" src="/site_assets/img/zastav2.jpg">
<p></p> --}}

<script>

var imageSources = ["/site_assets/img/zastav1.jpg", "/site_assets/img/zastav2.jpg", "/site_assets/img/zastav3.jpg"]

var index = 0;
setInterval (function(){
  if (index === imageSources.length) {
    index = 0;
  }
  document.getElementById("image").src = imageSources[index];
  index++;
} , 5000);

</script>
