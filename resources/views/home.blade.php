<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
<title>Welcome to my Project </title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="public/css/style.css">


<style>

	*{
		margin:0; padding: 0; font-family: 'Raleway', sans-serif;
	}
  /* Make the image fully responsive */
  .carousel-inner img {
    width: 100%;
    height: 100%;
    
  text-align: center;
  }
  </style>
  
</head>
<body>
<header>
	<nav class="navbar navbar-expand-lg navbar-light">
            <a href="{{URL::to('/')}}" style="text-decoration: none"><h1  style="color: #009900">দেশগড়ী</h1></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
       
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{URL::to('teacher-registration')}}">Registration for Teaching</a>
      </li>
      <li class="nav-item">
      
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Select Area
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{URL::to('/dhanmondi-area')}}">Dhanmondi</a>
          <a class="dropdown-item" href="{{URL::to('/dhanmondi-area')}}">Panthpath</a>
          <a class="dropdown-item" href="{{URL::to('/dhanmondi-area')}}">Rayerbazer</a>
          <a class="dropdown-item" href="{{URL::to('/dhanmondi-area')}}">Mogbazer</a>
          <a class="dropdown-item" href="{{URL::to('/dhanmondi-area')}}">Mirpur</a>
          <a class="dropdown-item" href="{{URL::to('/dhanmondi-area')}}">Mohammadpur</a>
          <div class="dropdown-divider"></div>
          
        </div>
      </li>

      
         
  </div>
</nav>
<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
        <img src="public/image/26815511_1236733239761046_773030247801959565_n.jpg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
          <h3 style="color: #009900">আসুন এক হই</h3><h3 style="color: #ff3333"> এবং দেশগড়ী</h3>
        
      </div>   
    </div>
    
    <div class="carousel-item">
        <img src="public/image/26815511_1236733239761046_773030247801959565_n.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
     <h3 style="color: #009900">আসুন এক হই</h3><h3 style="color: #ff3333"> এবং দেশগড়ী</h3>
    </div>   
    </div>

  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

</header>

<section>
<div class="container-fluid">
	<h1 class="text-center text-capitalize pt-5" style="color: #009900"> about us </h1>
	<hr class="w-25 mx-auto pb-5">

	<div class="row mb-5">
		<div class="col-lg-6 col-md-6 col-12">
                    <img src="public/image/29745051_1296193750481661_5307360784709318915_o.jpg" class="img-fluid">
		</div>

		<div class="col-lg-6 col-md-6 col-12">
			<h1 style="color: #ff3333">Who We Are?</h1>
			<hr>
			<p>আমরা বাংলাদেশি, বাংলাদেশকে শতভাগ শিক্ষিত করাই আমাদের মূল উদ্দেশ্য,তাই আমরা দরিদ্র পথ শিশুদের নিয়ে কাজ করি সুতরাং আসুন এক হই এবং দেশ গড়ি</p>
			<p>Our main objective is to make Bangladesh 100% educated,So we work with poor way children so let's unite and build the country.</p>
             
        </div>
    </div> 
</div>



    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="title-section text-center col-12">
            <h2 class="text-uppercase"  style="color: #009900">Our works</h2>
          </div>
        </div>

       <div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
        <img src="public/image/1.jpg" alt="Los Angeles" width="11000" height="500">
      <div class="carousel-caption">
         <h3 style="color: #009900">আসুন এক হই</h3><h3 style="color: #ff3333"> এবং দেশগড়ী</h3>
      </div>   
    </div>
    
    <div class="carousel-item">
        <img src="public/image/2.jpg" alt="New York" width="110000" height="500">
      <div class="carousel-caption">
        <h3 style="color: #009900">আসুন এক হই</h3><h3 style="color: #ff3333"> এবং দেশগড়ী</h3>
        
    </div>   
    </div>

  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
        
       





<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js">
  </script>
  

</body>
</html>
