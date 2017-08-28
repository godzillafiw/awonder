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

       <script type="text/javascript">
                $('#categories').change(function() {
                    $.ajax({
                        type: 'POST',
                        data: {categories: $(this).val()},
                        url: '<?php echo base_url()?>form/actions/selectCar',
                        success: function(data) {
                            $('#products').html(data);
                        }
                    });
                    return false;
                });

                    $("#form-life").on("submit",function(event){
                      event.preventDefault();
                      var data = $("#form-life").serialize();
                     $.ajax({
                        type: 'POST',
                        data: data,
                        dataType: 'json',
                        url: '<?php echo base_url()?>form/actions/insert',
                        success: function(data) {
                            if(data.status){
                             alertSuccess();
                             $('.form-group').removeClass('has-error').removeClass('has-success');
                             $('.text-danger').remove();
                             document.getElementById("form-life").reset();
                            } else{
                              $.each(data.messages, function(key, value) {
                                var element = $('#' + key);
                                console.log(element)
                                element.closest('div.form-group')
                                .removeClass('has-error')
                                .addClass(value.length > 0 ? 'has-error' : 'has-success')
                                .find('.text-danger')
                                .remove();
                                element.after(value);
                              });
                             alertFailed();
                            }
                            
                        }
                    });
                    });

                    function alertSuccess(){
                       $.alert({
                            title: 'Successfully',
                            content: 'บันทึกข้อมูลเรียบร้อย',
                            icon: 'fa fa-check',
                            animation: 'scale',
                            closeAnimation: 'scale',
                            buttons: {
                                okay: {
                                    text: 'Okay',
                                    btnClass: 'btn-green'
                                }
                            }
                        });
                    }

                    function alertFailed(){
                       $.alert({
                            title: 'Failed',
                            content: 'มีข้อผิดพลาด กรุณาลองใหม่อีกครั้ง',
                            icon: 'fa fa-times-circle',
                            animation: 'scale',
                            closeAnimation: 'scale',
                            buttons: {
                                okay: {
                                    text: 'Okay',
                                    btnClass: 'btn-red'
                                }
                            }
                        });
                    }
        </script>

