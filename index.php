<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SATYA OVERSEAS</title>
    <link rel="stylesheet" href="https://getbootstrap.com/docs/5.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" ></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="http://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons-.css">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" /> 
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
    </head>
    <body>
      
<section id="header">
        <nav class="navbar navbar-expand-lg">
          <div class="container">
            <a class=" logo" href="#"><img src="assets/logo123.jpg"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar2" aria-controls="offcanvasNavbar2" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end text-bg-white" tabindex="-1" id="offcanvasNavbar2" aria-labelledby="offcanvasNavbar2Label">
              <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbar2Label">Menu</h5>
                <button type="button" class="btn-close btn-close-black" data-bs-dismiss="offcanvas" aria-label="Close"></button>
              </div>
              <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-center flex-grow-1 pe-4 ml-auto">
                  <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                  </li>
                 
                  <li><a class="nav-link" href="#">About</a></li>
                  <li><a class="nav-link" href="#">Services</a></li>
                  <li><a class="nav-link" href="#">Principles</a></li>
                  <li><a class="nav-link" href="#">Careers</a></li>
                  <li><a class="nav-link" href="#">Contacts</a></li>
                 
                </ul>
                
              </div>
            </div>
            
          </div>
          
        </nav>
        <hr class="n1">



</section>
<!---------------------------intro section---------------------------------->

<section class="intro py-5">
<div class="container">
  <div class="row">
    
    <div class=" col-12 col-lg-6">
      
     
      <a class=" logo2" href="https://www.satyaoverseas.com/"><img src="assets/banner image.png"></a>
  </div>
    
  <div class=" col-12 col-lg-6">
    
       <div class="about-text">
      <p> WORLD LEADING </p>
      <h1>
        EDUCATIONAL 
        </br> CONSULTANTS
      </h1>
      <h6>USA, CANADA ,UK AND IRLAND.</h6>
       </div>
      <button class="button button1">APPLY NOW &nbsp &nbsp<a href="https://www.satyaoverseas.com/"><i class='bi bi-arrow-right'></a></i></button>
      
    </div>
    
     </div> 
  
  </div>

    <div class="col align-center">
    <div class="text text center">
    <p>we are world leading educational consultants,offering comprehensive service packages
       </br>designed to help the students to make their most important moves of their life</p>
   </div>
    </div>
  </div>
</div>
</section>
 <!---------------------------tab section---------------------------------->

 <section class="data">
       <div class="container">
        

<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'London')">WHY GUIDENCE</button>
  <button class="tablinks" onclick="openCity(event, 'Paris')">UK TIER 4 STUDENT VISA</button>
  <button class="tablinks" onclick="openCity(event, 'Tokyo')">STUDENT DEPENDENT VISA</button>
</div>
<hr class="new">

<div id="London" class="tabcontent">
  
  <div class="row">
    <div class="col-sm-6">
    <div class="f2">
    <div class="about-text1">
      <p>THE RIGHT </p>
      <h1>
        EDUCATIONAL SOLUTIONS
      </h1>
      <P>TO POWER TOUR GROWTH </P>
      <h6>
        Counselling and guidance have become an integral part of to-<br>day's educational system. With parents occupied in their own<br> world of carres and fast paced lifestyle,there is very little time<br> and inclination for them to keep tab of the various develop-<br>ments in the educational sector.
      </h6>
    <hr class="n2">
      <div class="pic">
    
        <img src="assets/OIP.jpg">
      
      <div class="small-text">
       <p style="font-size: smaller; color: black;">"possimus omnis voluptas assumenda est,<br>omnis dolor repellendus"</p>
      
  
          <h2>Siva kumar</h2>
          <h3>Microsoft</h3>
    
          
           
          </div>
      
    </div>
  </div>
  <button class="logo1">APPLY NOW <a href="https://www.satyaoverseas.com/"><i class='bi bi-arrow-right'></a></i></button>
</div>
 </div>

 <div class="col-sm-6">
  <a class=" logo3" href="#"><img src="assets/Screenshot 2024-01-06 115710.png"></a>
   </div>
   
   </div>
</div>
  
  
</div>

<div id="Paris" class="tabcontent">
  <h3>UK TIER 4 STUDENT VISA</h3>
  
</div>

<div id="VISA" class="tabcontent">
  <h3>STUDENT DEPENDENT VISA</h3>
  
</div>

<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>
   
    
      
     <!-----------------------------------
      <hr class="new">
    

       <div class="row">
        <div class="col-sm-6">
        <div class="f2">
        <div class="about-text1">
          <p>THE RIGHT </p>
          <h1>
            EDUCATIONAL SOLUTIONS
          </h1>
          <P>TO POWER TOUR GROWTH </P>
          <h6>
            Counselling and guidance have become an integral part of to-<br>day's educational system. With parents occupied in their own<br> world of carres and fast paced lifestyle,there is very little time<br> and inclination for them to keep tab of the various develop-<br>ments in the educational sector.
          </h6>
        <hr class="n2">
          <div class="pic">
        
            <img src="assets/OIP.jpg">
          
          <div class="small-text">
           <p style="font-size: smaller; color: black;">"possimus omnis voluptas assumenda est,<br>omnis dolor repellendus"</p>
          
      
              <h2>Siva kumar</h2>
              <h3>Microsoft</h3>
        
              
               
              </div>
          
        </div>
      </div>
      <button class="logo1">APPLY NOW <a href="https://www.satyaoverseas.com/"><i class='bi bi-arrow-right'></a></i></button>
    </div>
     </div>
    
     <div class="col-sm-6">
      <a class=" logo3" href="#"><img src="assets/Screenshot 2024-01-06 115710.png"></a>
       </div>
       
       </div>
</div>---->

</section>
 <!---------------------------flex section---------------------------------->

<section class="count">
<div class="container">
  <div class="rating ">


    <div class="rating-col">
      
  
    

    
      <h1>95+<h1>
        <p> Lorem, ipsum dolor<br> sit amet consectetur </p>
  
      
</div>
  <div class="rating-col">
    
    
    <h1>300+</h1> 
    <p>Lorem ipsum dolor<br> sit amet consectetur</p>
  
  </div>
<div class="rating-col">
  
  <h1>50+</h1> 
<p>Lorem ipsum dolor<br> sit amet consectetur</p>
  </div>
  </div>
</div>
</section>

   <!---------------------------flex section---------------------------------->
    

<section class="flex-box">
  <div class="container col-12-lg">
    <div class="box">
    <div class="hedding">
    <h1> FOR <span>STUDENTS</span> </h1>
    <h6>Cutting edge technologies meet world class solutions</h6>
  </div>
    
  <div class="flex-container">
   
    <div class="f1">
      <h1>COUNTRY<br> SELECTIN</h1>
    <p>Lorem ipsum dolor<br> sit amet,consectetur</p>
    </div>
    <div class="f1">
      <h1> COURSE <br>SELECTION</h1>
      <p>Loreum ipsum dolor<br> sit amet,consectetur
      </p>
    </div>
    <div class="f1">
      <h1>jOB<br> OPPORTUNITIES</h1>
      <p> Loreum ipsum dolor<br> sit amet,consectetur></p>
    </div>
    <div class="f1">
       <h1>CARRER<br> GUIDENCE</h1>
      <p>Loreum ipsum dolor<br> sit amet,consectetur</p></div>
  </div>

    <div class="flex-container">
  <div class="f1"><h1>COUNCEl</h1>
    <p>Loreum ipsum dolor<br> sit amet,consectetur</p>
  </div>
  <div class="f1"><h1>PERSONAL<br> INTERVIEW</h1>
    <p>  Loreum ipsum dolor<br> sit amet,consectetur</p>
  </div>
  <div class="f1"><h1>SPOT<br> ADMISIIONS</h1>
    <p>  Loreum ipsum dolor<br> sit amet,consectetur</p>
  </div>
  <div class="f1"><h1>Direction</h1>
    <p >   Loreum ipsum dolor<br> sit amet,consectetur</p>
  </div>
</div>
</div>
  </div>
</div>
</section>
<!---------------------------logos section---------------------------------->

<section class="logo section">
<div class="container-fluid p-0">
  
  <div class="row justify-content-between m-0"> 
    <div class="col-md-6 p-0">
<img src="assets/Screenshot 2024-01-08 165341.png" class="img-fluid w-100">
</div>
<div class="col-md-5 p-0">
<div class="text-right">
<h1> WE'LL FIND YOUR <span> PERFECT FIT </span></h1>
<P>Lorem, ipsum dolor sit amet consectetur adipisicing elit.sed do eiusmod tempor inci-<br>
didunt ut labore et dolor magna aliqua.Quis ipsum suspendisse ultrics gravida.<br>
risus commodo viverra maccenas accumsan lacus vel facilisis.</P>
</div>

<div class="logos">
<img src="assets/Brunel-logo.jpg">


<img src="assets/download logo.jpg">
<img src="assets/OIP (1) logo.jpg"><br></br>
<img src="assets/OIP (2) logo.jpg">

<img src="assets/OIP (3).logo.jpg">

<img src="assets/OIP (1).jpg">
</div>

</div>
</div>
</div>
</div>
</section>

<!---------------------------content section---------------------------------->

<div class="container-fluid p-0 m-0">
  <div class="row justify-content-start "> 
    <div class="col-lg-12 p-0 ">
  
  <img src="assets/back drop.jpg" alt="Image" class="image">
  <div class="text1 ">
    <h3> create the future of your dreams with an<u> Australian</u> PR visa</h3>
    <button><i class="bi bi-telephone-outbound-fill">SCHEDULE OF A CALL</i></button>
          </div>

  
  
  
<div class="flex-container5">

   
  <div class=f6>
    <h6>Why choose us</h6><h1>YOUR<br> PARTNER<br> IN SUCCESS</h1>
  <p>Lorem ipsum dolor sit amet</p>
<h5>MORE<a href="https://www.satyaoverseas.com/"><i class="bi bi-arrow-right"></a></i></div>

  <div  class=f7>
    <h6>About US</h6>
    <h1> ONWARDS&<br> UPWARDS</h1>
    <p>Loreum ipsum dolor sit amet<br><br>
    </p>
    <h5>MORE<a href="https://www.satyaoverseas.com/"><i class="bi bi-arrow-right"></i></a>


  </div>
    <div class=f8>
      <h6>Why choose us</h6><h1>YOUR<br> PARTNER<br> IN SUCCESS</h1>

  
    <p> Loreum ipsum dolor sit amet</p>
    <h5>MORE<a href="https://www.satyaoverseas.com/"><i class="bi bi-arrow-right"></a></i>

  </div>
  </div>
  </div>
  </div>
  </div>
</div>
</div>

<section class="footer" class="w-100 p-50px">
  <footer class="my-1 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; 2017–2024 BLUPACE.in.uk</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacy</a></li>
      <li class="list-inline-item"><a href="#">Terms</a></li>
      <li class="list-inline-item"><a href="#">Support</a></li>
    </ul>
  </footer>
  </section>       
  


</body>
</html>