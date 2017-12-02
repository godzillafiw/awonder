<!-- Javascripts -->
<script src="<?php echo resource('front') ?>js/jquery-latest.min.js"></script>
<script src="<?php echo resource('front') ?>dist/wow.js"></script>
<script src="<?php echo resource('front') ?>js/slideto.js"></script>
<script src="<?php echo resource('front') ?>js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.2.3/jquery-confirm.min.js"></script>
<script>
  $(document).ready(function(){
    $(".nav-pills a").click(function(){
      $(this).tab('show');
    });
  });
</script>
<!--script-->
<?php if($this->uri->segment(1)=='gallery') {?> 
<script>
  function openModal() {
    document.getElementById('myModal').style.display = "block";
  }

  function closeModal() {
    document.getElementById('myModal').style.display = "none";
  }

  var slideIndex = 1;
  showSlides(slideIndex);

  function plusSlides(n) {
    showSlides(slideIndex += n);
  }

  function currentSlide(n) {
    showSlides(slideIndex = n);
  }

  function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("demo");
    var captionText = document.getElementById("caption");
    if (n > slides.length) {
      slideIndex = 1
    }
    if (n < 1) {
      slideIndex = slides.length
    }
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
    captionText.innerHTML = dots[slideIndex - 1].alt;
  }
</script> <?php } ?>

<?php if($this->uri->segment(1)=='contactus') {?>
<script>
 function initMap() {
  var uluru = {lat: <?=$this->config->item('local_latitude')?>, lng: <?=$this->config->item('local_longitude')?>};
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: <?=$this->config->item('map_zoom')?>,
    scrollwheel: <?=$this->config->item('scrollwheel')?>,
    scaleControl: false,
    center: uluru
  });
  var marker = new google.maps.Marker({
    position: uluru,
    map: map
  });
}
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA5zrzdhREGCzBw6khmoavj8HrsC9uWjp8&callback=initMap"></script>
<?php } ?>


