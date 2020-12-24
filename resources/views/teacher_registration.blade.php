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
            <a href="{{URL::to('/')}}" style="text-decoration: none"><h1  style="color: #009900" >দেশগড়ী</h1></a>
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
          <a class="dropdown-item" href="#">Dhanmondi</a>
          <a class="dropdown-item" href="#">Panthpath</a>
          <a class="dropdown-item" href="#">Rayerbazer</a>
          <a class="dropdown-item" href="#">Mogbazer</a>
          <a class="dropdown-item" href="#">Mirpur</a>
          <a class="dropdown-item" href="#">Mohammadpur</a>
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
	
</div>



    <div class="site-section">
      <div class="container">
          <br/>
    <br/>
    <br/>
    
    <section style="background-color: gray; color: yellow;">
    <div class="container-fluid" >
        <h3>
	<?php

$message= Session::get('message');
if(isset($message))
{
    echo $message;
    Session::put('message','');
}

?>
            </h3>
</div>
</section>  
    
    
    <br/>
    <br/>
          <h3>Teacher Registration</h3>
          <hr/>
          <form action="{{URL::to('register-teacher')}}" method="post">
          <table>
              <tr>
                  <td>Full Name</td>
                  <td>
                      <input type="text" name='full_name'>
                      <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                  </td>
              </tr>
              <tr>
                  <td>Email Address</td>
                  <td>
                      <input type="email" name='email_address'>
                  </td>
              </tr>
              <tr>
                  <td>Password</td>
                  <td>
                      <input type='password' name='password'>
                  </td>
              </tr>
              <tr>
                  <td>Mobile Number</td>
                  <td>
                      <input type="text" name='mobile_number'>
                  </td>
              </tr>
              <tr>
                  <td>Address</td>
                  <td>
                      <textarea name='address' rows='6' cols="30"></textarea>
                  </td>
              </tr>
              <tr>
                  <td>City</td>
                  <td>
                      <input type="text" name='city'>
                  </td>
              </tr>
              <tr>
                  <td>Country</td>
                  <td>
                      <select name='country'>
                          <option>Select Country</option>
                          <option value="BD">Bangladesh</option>
                          <option value="IN">India</option>
                          <option value="BH">Bhutan</option>
                          <option value="NP">Nepal</option>
                          
                      </select>
                  </td>
              </tr>
              <tr>
                  <td>Zip Code</td>
                  <td>
                      <input type="text" name='zip_code'>
                  </td>
              </tr>
              <tr>
                  <td></td>
                  <td>
                      <input type="submit" name='btn' value="Register">
                  </td>
              </tr>
          </table>
          </form>
      </div>
    </div>
    <hr/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <div class="container-fluid" style="background-color: #040505;color:white">
	@Deshgori.com All writs Reserve
</div>
</section>





<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js">
  </script>
  

</body>
</html>
