<?php
@include('connection.php');
session_start();

if(!isset($_SESSION['email'])){
  header('Location: login.php');
  exit;
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>test</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="test1.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />

  </head>
  <body style="background-color: black;">

     <div class="navbar navbar-expand-lg navbar-dark bg-black text-light">
      <div class="container-fluid">
        <div class="navbar-brand text-danger fw-bold">
        <img style="width: 50px; height: 50px; border-radius: 50%;" src="images/“HELLGATO” AS SEEN IN RODDY RICCH’S “THE BOX” - DUB Magazine.jpeg" alt=""> Dodge
        </div>
        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#Navabr">
          <span class="navbar-toggler-icon"></span>
        </button>

      </div>

      
     <ul style="margin-right: 30px;" class="navbar-nav navbar-collapse collapse" id="Navabr">
      <li class="nav-item">
        <a href="" class="nav-link">HOME</a>
      </li>
    
      
      <li class="nav-item">
        <a href="#about" class="nav-link">About</a>
      </li>
      <li class="nav-item">
        <a href="#Previews" class="nav-link">Previews</a>
      </li>
      <li class="nav-item dropdown">
        <a href="" class="nav-link dropdown-toggle " data-bs-toggle="dropdown"><?php echo $_SESSION['username']?></a>
        <ul class="dropdown-menu bg-light text-white">
        <button style="padding-right:20px " class="btn btn-primary" data-bs-toggle="" data-bs-target=""><a style="text-decoration: none;color: black;" href="logout.php">logout</a></button>
       <div
       class="modal "
       id="log"
       role="dialog"
 
     >
        </ul>
      </li>
      <div class="accordion">
      
      </div>

       
     <div id="Container">
       
     

     
     </div>
      </div>
      
     </ul>
    </div>




<div class="container">

    <div style="background: black" class="">
   <div class="row">
      <div class="col-lg-6">
        <h1
          style="
            color: color-mix(
              in hsl shorter hue,
              rgb(230, 152, 9) 100%,
              black 10%
            );
          "
        >
        
          Origins and Background
        </h1>
        <p class="text-secondary animate__animated animate__fadeInLeft" >
          The Hellcat is a powerful American muscle car produced by Dodge under
          the Dodge Challenger and Dodge Charger models. The name "Hellcat"
          specifically refers to the high-performance versions of these cars,
          which are equipped with a supercharged 6.2-liter HEMI V8 engine. The
          Hellcat story is rooted in the modern resurgence of muscle cars and
          Dodge's commitment to blending nostalgic design with cutting-edge
          performance. <br><br>
          The Hellcat has become an icon in the automotive world, representing 
          the pinnacle of American muscle and the enduring appeal 
          of high-performance cars. Its legacy continues as Dodge continues 
          to push the boundaries of what their vehicles can achieve.
          
        </p>
      </div>
        <div class="col-lg-6">
          <img class="rev"  style="width: 500px;height: 300px; border-radius: 5%; object-fit: cover;padding: 41px;  " src="images/Rev Up Your Screens with High-Definition 4K Wallpapers Dodge Challenger - Best Wallpaper HD.jpeg" alt="" class="card-img-top">
        </div>
        <div class="col-lg-6">
          <div class="animate">

          </div>
        </div>
        <div style="background:black;" class="col-lg-6">
          <h3 style="color: rgb(240, 166, 6); align-content: center;margin-left: 100px;margin-top: 0px;" id="about">About us</h3>
          <p class="text-secondary text-secondary animate__animated animate__fadeInRight">The Dodge Hellcat represents a modern-day revival of the classic
             American muscle car, encapsulating the raw power, aggressive styling, and unrelenting 
             performance that enthusiasts crave. With its supercharged 6.2-liter HEMI V8 engine,
              the Hellcat roars to life with a thunderous 707 horsepower, capable of propelling the 
              car from 0 to 60 mph in just a few seconds, making it one of the most powerful production
               vehicles ever made.  <br> 
               <div class="row">
                <div class="col-lg-">
                <button class="btn btn-warning" data-bs-toggle="collapse" data-bs-target="#text">Read more</button>

               <p style="font-style: italic;" class="collapse text-light  animate__animated animate__fadeInRight" id="text">
                The Hellcat's design merges the past with the present, featuring a 
               wide, intimidating stance, a signature hood scoop, and aerodynamic enhancements that
                not only enhance its performance but also make it a visual standout on the road. Inside, 
                the Hellcat offers a driver-centric experience with performance seats, advanced infotainment 
                systems, and a cockpit designed to keep the driver engaged, whether on a racetrack or a city 
                street. The Hellcat's legacy is further solidified by its variants, such as the even more
                 powerful Hellcat Redeye and the track-focused Demon, which pushed the boundaries of what
                  a production car could achieve. Beyond its technical specifications, the Hellcat has 
                  become a cultural icon, embodying the spirit of rebellion and freedom that has long been 
                  associated with American muscle cars. It’s a car that not only pays homage to the golden
                   age of muscle cars but also sets new standards for modern performance, all while maintaining
                    the kind of visceral, unfiltered driving experience that has captivated car enthusiasts 
                    for generations.</p>
                    
                </div>
               
               </div>






          </p>
        </div>
        <div style="background:black;" class="col-lg-6">
          <h3 style="color: rgb(240, 166, 6); align-content: center;margin-left: 100px;"> <br> <br>The Muscle Car Era</h3>
          <p class="text-secondary text-secondary animate__animated animate__fadeInLeft">The 1960s and early 1970s are often referred to as the golden age of muscle cars in the United 
            States. Dodge was a significant player in this era, with iconic cars like the Dodge Challenger
             and Dodge Charger. However, the oil crisis, rising insurance costs, and stricter emissions regulations led to 
             the decline of muscle cars by the mid-1970s.In the early 2000s, there was a resurgence of interest in muscle cars, driven
             by nostalgia and advancements in automotive technology that allowed for higher performance while
              meeting modern regulations. Dodge capitalized on this with the reintroduction of the Dodge Challenger 
              in 2008 and the Charger in 2005, both inspired by their classic 1970s counterparts.The 1960s and early 1970s are often referred to as the golden age of muscle cars in the United 
              States. Dodge was a significant player in this era, with iconic cars like the Dodge Challenger
               and Dodge Charger. However, the oil crisis, rising insurance costs, and stricter emissions regulations led to 
               the decline of muscle cars by the mid-1970s.In the early 2000s, there was a resurgence of interest in muscle cars, driven
               by nostalgia and advancements in automotive technology that allowed for higher performance while
                meeting modern regulations. Dodge capitalized on this with the reintroduction of the Dodge Challenger 
                in 2008 and the Charger in 2005, both inspired by their classic 1970s counterparts.</p>
        </div>
        <div class="col-lg-6">
          <div class="row">
            <h1 style="margin-left: 100px;" class="text-warning " > <br>Welcome</h1>
            <div class="col-lg-12" id="cardi">
              <div style="background-color: rgb(0, 255, 170);" class="card "  id="card22">
                <div class="card-body">
                  <h1>Energy</h1>
                  <p class="text-black">Count on us for mechanical systems that are built to last and perform under the toughest conditions."
                    "Our commitment to excellence means you can trust us to deliver reliable, long-term solutions."</p>
                </div>
              </div>
            </div>
            <div class="col-lg-12" id="cardi1">
              <div  class="card " id="card22">
                <div class="card-body">
                  <h1>Motion</h1>

                  <p class="text-black">"Whether you're looking to streamline operations or tackle a complex mechanical issue, we have the expertise to deliver solutions that work."
                    "From troubleshooting and repair to complete system overhauls, we take pride in our ability to solve mechanical problems with innovative approaches."</p>
                </div>
              </div>
            </div>
            <div class="col-lg-12 " id="cardi">
              <div style="background-color: rgb(255, 51, 0);" class="card " id="card22">
                <div class="card-body">
                  <h1>Stability</h1>

                  <p class="text-black">From design and installation to maintenance and repair, we provide a full spectrum of mechanical services to keep your operations running smoothly."
                    "Whether it's HVAC systems, industrial machinery, or custom-built mechanical systems, we offer comprehensive solutions tailored to your industry.</p>
                </div>
              </div>
            </div>


          </div>

        </div>
       
        <div style="background: black;" class="col-lg-12">
          <h3 style="color: rgb(255, 174, 0); align-content: center;margin-left: 100px">Development</h3>
          <p class="text-secondary   animate__animated animate__fadeInUp">Concept and Design: The Hellcat was developed as a response to the 
            increasing demand for high-performance vehicles. Dodge wanted to create a car that not only 
            paid homage to the muscle cars of the past but also set new benchmarks in performance. The 
            goal was to build one of the most powerful production cars on the market. <br>

            Engineering the Engine: The heart of the Hellcat is its supercharged 6.2-liter HEMI V8 engine,
             which produces an astounding 707 horsepower and 650 lb-ft of torque in its original iteration.
              The engine was designed with a forged-steel crankshaft, high-strength pistons, and a specially
               designed supercharger to handle the immense power. <br>
            
            Manufacturing: The Hellcat engine is built at the Saltillo Engine Plant in Mexico, while the
             cars themselves are assembled at the Brampton Assembly Plant in Ontario, Canada. The development 
             process involved extensive testing to ensure that the Hellcat could handle the stresses of such
              high performance while maintaining reliability. <br>
            
            Introduction to the Market: The Dodge Challenger Hellcat was first introduced in 2015, and it 
            quickly became a sensation due to its incredible power and relatively affordable price compared 
            to other high-performance cars. The Charger Hellcat followed shortly after, bringing the Hellcat's
             performance to a four-door sedan.
            
            </p>
        </div>
        <div class="">
          <h2 style="margin-left: 100px;" class="text-warning" id="Previews">Previews</h2>
        <marquee behavior="infinite" direction="">
          <img style="width: 150px;height: 150px;"  src="images/daffced8-db4e-4548-b9e6-d4f1bb535c81.jpeg" alt="">
          <img style="width: 150px;height: 150px;" src="images/Free Dodge car wallpaper.jpeg" alt="">
          <img style="width: 150px;height: 150px;" src="images/Dodge Charger Hellcat_ Paint Palette Past.jpeg" alt="">
          <img style="width: 150px;height: 150px;" src="images/Dodge Charger SRT.jpeg" alt="">
          <img style="width: 150px;height: 150px;" src="images/Dodge Charger MODS.jpeg" alt="">
          <img style="width: 150px;height: 150px;" src="images/Dodge Hellcat Burning Rubber limitedstock - Etsy.jpeg" alt="">
          <img style="width: 150px;height: 150px;" src="images/“HELLGATO” AS SEEN IN RODDY RICCH’S “THE BOX” - DUB Magazine.jpeg" alt="">
          <img style="width: 150px;height: 150px;" src="images/Pin by Fadh Collection on Cars _ Dodge challenger srt hellcat, Luxury car photos, Challenger srt hellcat.jpeg" alt="">
        
        </div>
        </div>
      </marquee>
  </div>
</div>
</div>
</div>
<div class="col-lg-12" style="background-image: url(images/“HELLGATO”\ AS\ SEEN\ IN\ RODDY\ RICCH’S\ “THE\ BOX”\ -\ DUB\ Magazine.jpeg); padding: 5rem;
 background-repeat: no-repeat; background-size:cover; object-fit: cover; background-attachment: fixed;">
 <h1 class="text-dark">Enjoy our production company services</h1>
 <div class="row">
   <h4 style="color: rgb(37, 21, 21);;"><i style="color: rgb(1, 9, 15);margin-right: 50px;margin-bottom: 10px;" class="fa-solid fa-screwdriver-wrench"></i>Continuum</h4>
   <h4 style="color: rgb(54, 31, 31);;"><i style="color: rgb(12, 1, 1);margin-right: 50px;margin-bottom: 10px;" class="fa-solid fa-screwdriver-wrench"></i>Stastistical</h4>
  <h4 style="color: rgb(59, 34, 34);;"><i style="color: black;margin-right: 50px;margin-bottom: 10px;" class="fa-solid fa-screwdriver-wrench"></i>Kinematic</h4>
  <h4 style="color: rgb(51, 31, 31);;"><i style="color: black;margin-right: 50px;margin-bottom: 10px;" class="fa-solid fa-screwdriver-wrench"></i>Dynamic</h4>
  <h4 style="color: rgb(58, 31, 31);;"><i style="color: black;margin-right: 50px;margin-bottom: 10px;" class="fa-solid fa-screwdriver-wrench"></i>Static</h4>
 
 </div>

</div>

        <footer style="background: linear-gradient(270deg, rgba(65, 57, 34, 0.911) 40%, rgba(143, 127, 75, 0.873) 60%);" class="bg- text-white pt-5 pb-4">
          <div class="container p-4">
            <div class="row">
                <div class="col-md -3 mb- mb-md-0">
                    <h5 class="text-warning slanted">company</h5>
                    <p style="color: rgb(192, 195, 199);" class=" animate__animated animate__fadeInRight ">
                      The Hellcat redefined what a muscle car could be in 
                      the modern era. It was praised for its raw power, 
                      aggressive design, and the visceral driving experience
                       it offered.
                    </p>
                </div>

                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-warning">SRT</h5>
                    <ul class="list-unstyled mb-0  animate__animated animate__fadeInLeft">
                        <li><a style="text-decoration: none;" href="#!" class="text-white">standard</a></li>
                        <li><a style="text-decoration: none;" href="#!" class="text-white">widebody</a></li>
                        <li><a style="text-decoration: none;" href="#!" class="text-white">Redeye</a></li>
                        <li><a style="text-decoration: none;" href="#!" class="text-white">Super-stock</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-warning">Types</h5>
                    <ul class="list-unstyled mb-0  animate__animated animate__fadeInLeft">
                        <li><a style="text-decoration: none;"  href="#!" class="text-white">Challenger</a></li>
                        <li><a style="text-decoration: none;" href="#!" class="text-white">Charger</a></li>
                        <li><a style="text-decoration: none;" href="#!" class="text-white">Durango</a></li>
                        <li><a style="text-decoration: none;" href="#!" class="text-white">Cheroke</a></li>
                    </ul>
                </div>
               
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">

                <div class="tooltip-container">
                  <div class="button-content">
                    <span class="text">follow us</span>
                   
                  </div>
                  <div class="tooltip-content">
                    <div class="social-icons">
                      <a href="#" class="social-icon twitter">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 24 24"
                          width="24"
                          height="24"
                        >
                          <path
                            d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"
                          ></path>
                        </svg>
                      </a>
                      <a href="#" class="social-icon facebook">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 24 24"
                          width="24"
                          height="24"
                        >
                          <path
                            d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"
                          ></path>
                        </svg>
                      </a>
                      <a href="#" class="social-icon linkedin">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 24 24"
                          width="24"
                          height="24"
                        >
                          <path
                            d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"
                          ></path>
                        </svg>
                      </a>
                    </div>
                  </div>
                </div>
                </div>
                
            </div>
        </div>
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2024 Edward .K.N All rights reserved.
        </div>
        </footer>
        </div>
      </div>
    </div>
  </body>
</html>
