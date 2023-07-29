<?php
include "includes/connect_db.php";
include "includes/head.php";
?>


    <header class="header">
      <div class="container-fluid p-0">
        <div class=" row justify-content-center " style="background:url(bg-masthead.jpg) center; background-size: cover; min-height: 20rem;">
         
          <div class="col-ml-6 m-5">
           
              <h1 class=" mb-5 text-center animate__animated animate__bounce">Generate more leads with a professional landing page!</h1>
                <form class="form-subscribe" id="contactForm" data-sb-form-api-token="API_TOKEN" method="get">
                  <!-- Email address input-->
                  <div class="row">
                      <div class="col">
                          <input class="form-control form-control-lg" id="emailAddress" type="email" placeholder="Email Address" data-sb-validations="required,email" />
                          <div id="email_required_message" class="invalid-feedback text-white" data-sb-feedback="emailAddress:required">Email Address is required.</div>
                          <div class="invalid-feedback text-white" data-sb-feedback="emailAddress:email">Email Address Email is not valid.</div>
                      </div>
                      <div class="col-auto">
                        <button class="btn btn-primary btn-lg disabled" id="submitButton" type="submit">Submit</button>
                      </div>
                  </div>
                  
                  <div class="d-none" id="submitSuccessMessage">
                      <div class="text-center mb-3">
                          <div class="fw-bolder">Form submission successful!</div>
                          <p>To activate this form, sign up at</p>
                          <a class="text-white" href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                      </div>
                  </div>
                  
                  <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
              </form>
              <script>
                function test_f(){}
                $( document ).ready(function() {

                  $('.header #contactForm').addClass('test-form');
                  $('.footer #contactForm').addClass('test-form');

                  $('#contactForm').append('<p>Text append</p>');
				  

                  $('#contactForm').attr('action');
                  $('#contactForm').attr('action', '');
                  $('#contactForm').attr('method', 'get');

                  $('#contactForm').attr({action: '', method: 'get'});

                  $('#contactForm').on('submit', function(){
                    let email = $('#emailAddress').val().trim();
                    if (email == '') {
                      $('#email_required_message').show();
                      $('#emailAddress').focus();
                    }
                    
                    return false;
                  });


                  $('#emailAddress').on('keyup', function(){
                    let email = $('#emailAddress').val().trim();
                    if (email != '') {
                      $('#email_required_message').hide();
                    } else {
                      $('#email_required_message').show();
                    }
                  });

                  test_f();

                });
              </script>
            </div>
           
          </div>
        </div>
		
		<!-- Slider main container -->
		<div class="swiper">
		  <!-- Additional required wrapper -->
		  <div class="swiper-wrapper">
			<!-- Slides -->
			<div class="swiper-slide"><img src="https://trungtamjava.com/wp-content/uploads/2023/02/ChatGPT.jpg" class="w-100"></div>
			<div class="swiper-slide"><img src="https://trungtamjava.com/wp-content/uploads/2023/02/ChatGPT.jpg" class="w-100"></div>
			<div class="swiper-slide"><img src="https://trungtamjava.com/wp-content/uploads/2023/02/ChatGPT.jpg" class="w-100"></div>
		  </div>
		  <!-- If we need pagination -->
		  <div class="swiper-pagination"></div>

		  <!-- If we need navigation buttons -->
		  <div class="swiper-button-prev"></div>
		  <div class="swiper-button-next"></div>

		  <!-- If we need scrollbar -->
		  <div class="swiper-scrollbar"></div>
		</div>
		
		<style>
		.swiper {
  width: 600px;
  height: 300px;
}

		</style>

	<script>
		const swiper = new Swiper('.swiper', {
		  // Optional parameters
		  direction: 'vertical',
		  loop: true,

		  // If we need pagination
		  pagination: {
			el: '.swiper-pagination',
		  },

		  // Navigation arrows
		  navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		  },

		  // And if we need scrollbar
		  scrollbar: {
			el: '.swiper-scrollbar',
		  },
		});

	</script>
		
    </div>

    </header>

  <?php
  include "includes/feature.php";
  ?>

    <section class="intro-2">
      <div class="container-fluid">
        <div class="row">
        
            <div class="intro-2-img col-md-6 order-md-2" style=" background-image: url(bg-showcase-1.jpg);"></div>
            <div class=" col-md-6 order-md-1  my-auto px-5">
            <h2>Fully Responsive Design</h2>
            <p class="lead">When you use a theme created by Start Bootstrap, you know that the theme will look great on any device, whether it's a phone, tablet, or desktop the page will behave responsively!</p>
          </div>
          
        </div>
        <div class="row">
        
          <div class="intro-2-img col-md-6 " style=" background-image: url(bg-showcase-2.jpg);"></div>
          <div class=" col-md-6  my-auto px-5">
          <h2>Updated For Bootstrap 5</h2>
          <p class="lead">Newly improved, and full of great utility classes, Bootstrap 5 is leading the way in mobile responsive web development! All of the themes on Start Bootstrap are now using Bootstrap 5!</p>
        </div>
        
      </div>
      <div class="row mb-5">
        
        <div class="intro-2-img col-md-6 order-md-2" style=" background-image: url(bg-showcase-3.jpg);"></div>
        <div class=" col-md-6 order-md-1  my-auto px-5">
        <h2>Easy to Use & Customize</h2>
        <p class="lead">Landing Page is just HTML and CSS with a splash of SCSS for users who demand some deeper customization options. Out of the box, just add your content and images, and your new landing page will be ready to go!</p>
      </div>
      
    </div>
      </div>
    </section>

    <section class="saying">
      <div class="container">
        <div class="d-flex justify-content-center mt-5">
          <h2>What people are saying...</h2>
        </div>
      </div>

      <div id="clickme">
        Click here
      </div>

      <div class="row">
        <div class="col-md-4 text-center mb-5">
          
            <img src="testimonials-1.jpg" id="book" alt="" class="mr-3 mt-3 rounded-circle" style="width:10rem;">
            <h3>Fred S.</h3>
            <p>"This is fantastic! Thanks so much guys!"</p>
          </div>
          <div class="col-md-4 text-center mb-5">
          
            <img src="testimonials-2.jpg" alt="" class="mr-3 mt-3 rounded-circle" style="width:10rem;">
            <h3>Margaret E.</h3>
            <p>"Bootstrap is amazing. I've been using it to create lots of super nice landing pages."</p>
          
            
          </div>
          <div class="col-md-4 text-center mb-5">
            <img src="testimonials-3.jpg" alt="" class="mr-3 mt-3 rounded-circle" style="width:10rem;">
            <h3>Sarah W.</h3>
            <p>"Thanks so much for making these free resources available to us!"</p>
          </div>

        </div>
      </div>

      <script>
        $( document ).ready(function(){
          $( "#clickme" ).on( "click", function() {
            $( "#book" ).animate({
              opacity: 0.25,
              left: "+=50",
              height: "toggle"
            }, 5000, function() {
              // Animation complete.
              alert('done');
            });
          });   
        });
           
      </script>

    </section>

    <section class="ready img-fluid" style="background: url(bg-masthead.jpg)   ; min-height: 300px; background-size: cover; ">
      <div class="container-fluid">
         
         <h3 class="text-center text-white pb-5" style="padding-top: 80px;">Ready to get started? Sign up now!</h3>
        
         <div class="row justify-content-center">
          <div class="col-md-6">
            <form class="form-subscribe" id="contactForm" data-sb-form-api-token="API_TOKEN">
              <!-- Email address input-->
              <div class="row">
                  <div class="col">
                      <input class="form-control form-control-lg" id="emailAddress" type="email" placeholder="Email Address" data-sb-validations="required,email" />
                      <div class="invalid-feedback text-white" data-sb-feedback="emailAddress:required">Email Address is required.</div>
                      <div class="invalid-feedback text-white" data-sb-feedback="emailAddress:email">Email Address Email is not valid.</div>
                  </div>
                  <div class="col-auto"><button class="btn btn-primary btn-lg disabled" id="submitButton" type="submit">Submit</button></div>
              </div>
              
              <div class="d-none" id="submitSuccessMessage">
                  <div class="text-center mb-3">
                      <div class="fw-bolder">Form submission successful!</div>
                      <p>To activate this form, sign up at</p>
                      <a class="text-white" href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                  </div>
              </div>
              
              <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
          </form>
          </div>
         </div>


      </div>
    </section>
<?php
include "includes/footer.php";
?>