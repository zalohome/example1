<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 4 Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  
  <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"
/>

<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>


</head>

<body>
  <div class="container-fluid">

    <nav class="container ">
      <div class="header d-flex justify-content-between container " style="height: 4rem;">
        <a  class="navbar-brand text-dark my-auto " href="" id="text-logo">Start Bootstrap</a>
        <ul>
          <li><a href="/index">Home</a></li>
          <li><a href="/contact">Contact</a></li>
        </ul>
        <div class="my-auto "><button class="btn bg-primary" id="button-sign-up">Sign Up</button></div>
  
      </div>
    </nav>
	<script>

		
		$( document ).ready(function() {
		
			$('#button-sign-up').on('click', function(){
				//$( "#text-logo" ).load( "load.txt");
				// $.get( "load.txt", function( data ) {
				  // $( "#text-logo" ).html( data );
				// });
				$.ajax({
					method: "GET",
					url: "load.txt",
					data: {username: "abc", password: "xxx"}
				}).done(function(data){
					$( "#text-logo" ).html( data );
				});
			});
			
			

		});
	  </script>