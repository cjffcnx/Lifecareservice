<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}


?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LCService-We care about you</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<style>
 .carousel-inner div img
 {
height: 600px;

 }

 .rounded
 {
    background-color: aqua;
 }
 #element
 {
    color: black;
    background: aliceblue;
    
    
    
 }
 .last{
            background-color: black;
            margin-top: 180px;
            height:70px;
            color:white;
            text-align: center;
            padding: 20px;
            position: relative;
            top:20px;
        }
        .typetext
        {
          padding-top: 15px;
            text-align: center;
            background: white;
            color: black;
            font-weight: bold;
            font-size: 50px;
            margin-top:20px;
        }
       .px-5
       {
        margin: 60px;
       }
       
        
</style>
<body>
  
    <nav class="navbar navbar-expand-lg bg-dark border-bottom border-body" data-bs-theme="dark" bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">LCService</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/boot/About.html">About</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button"  data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Services
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="mentalc.html">Mental Counselling</a></li>
                            <li><a class="dropdown-item" href="/boot/health.html">Health tips</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="/injury.html">Injury Management</a></li>
                            <li><a class="dropdown-item " href="/boot/hospital.html">Hospital contact info</a></li>
                            <li><a class="dropdown-item " href="/boot/emergency.html">Emergency Number</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/boot/Contact.html">Contact us</a>
                    </li>
                    
                    
                </ul>
               
            </div>
        </div>
    </nav>
    <div id="carouselExampleInterval" class="carousel slide"  data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="10000">
            
            <img src="https://images.unsplash.com/photo-1535966953907-e3a81e258148?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2021&q=80" class="d-block w-100" alt="...">
            
            

          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <img src="https://images.unsplash.com/photo-1470770841072-f978cf4d019e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" class="d-block w-100" alt="Error">
          </div>
          <div class="carousel-item" data-bs-interval="10000">
            <img src="https://images.unsplash.com/photo-1473654729523-203e25dfda10?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

      
      <section class="text-gray-600 body-font relative">
        <div class="absolute inset-0 bg-gray-300">
          <iframe width="100%" height="100%" frameborder="0" marginheight="0" marginwidth="0" title="map" scrolling="no" src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;q=Jorpati+(My%20Business%20Name)&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed" style="filter: grayscale(1) contrast(1.2) opacity(0.4);"></iframe>
        </div>
        <div class="container px-5 py-24 mx-auto flex">
          <div class="lg:w-1/3 md:w-1/2 bg-white rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0 relative z-10 shadow-md">
            <h2 class="text-gray-900 text-lg mb-1 font-medium title-font">Feedback</h2>
            <p class="leading-relaxed mb-5 text-gray-600"><strong>Our team will be looking forward to solve the issue as soon as possible</strong></p>
            <div class="relative mb-4">
              <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
              <input type="email" id="email" name="email" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
            <div class="relative mb-4">
              <label for="message" class="leading-7 text-sm text-gray-600">Message</label>
              <textarea id="message" name="message" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
            </div>
            <button class="text-black bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Submit</button>
            <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
            
            <!-- <p class="text-xs text-gray-500 mt-3">Thank you for your visit</p> -->
          </div>
        </div>
      </section>
      
      
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
        
        

  

  
  <div class="typetext">
<!-- Element to contain animated typing -->
<span id="element"></span>
<!-- Load library from the CDN -->
<script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
<!-- Setup and start animation! -->
    <script>
      var typed = new Typed('#element', {
        strings: ['Thank you for your visit.', '&;Visit us again.'],
        typeSpeed: 50,
        loop:true
        
        
      });
    </script>
  </div>
  <div class="last">
    44600 Jorpati, Gokarneshwor, Kathmandu, Nepal | Phone 015918337 | Email: service01@example.com
    <p>Copyright &copy; LCServices-We care about you</p>
</div>
<script>
  alert("Welcome we are a family now!");
</script>
</body>

</html>

