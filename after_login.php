 <?php ob_start(); session_start(); ?>
<?php $con=mysqli_connect("localhost","root","","doc_appoint");?>
<?php $a = mysqli_query($con, "SELECT * FROM  `login` WHERE  `patient_id` LIKE  '".$_SESSION['patient_id']."'") ;
 $b = mysqli_fetch_array($a); ?>
<?php 
if(!$b['patient_id']){ header( 'location:signin.php' ); exit(); }
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>AFTER_LOGIN</title>
	<link rel="stylesheet " type="text/css" href="design2.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
</head>
<body>
	<header id="home">
		<nav id="nav_wrap">
				<ul class="head_data">
					<li>
						<a href ="index2.htm" >HOME </a>
						</li>
						<li>
						<a href="#book" data-section="book" >BOOK AN APPOINTMENT</a>
						</li>
						<li>
						<a href="#blog" data-section="blog">SEARCH BY SPECIALTY</a>
						</li>
						<li>
						<a href="http://localhost/doctor_appoinment/form.html">MEDICAL HISTORY </a>
					</li>
					<li>
						<a href="#review">REVIEWS </a>
          </li>
          <li>
            <a href="logout.php">LOGOUT </a>
          </li>
						<li id="user">
						<i class="fa fa-user" aria-hidden="true"></i>
					Hello  
                     <?php echo ($b['username']); ?>

          
          </li>
					
				</ul>
		</nav>

	</header>
	<section id="book" >
			<p class="texloc"> Start With Choosing A Location</p>
		<div class="wrap">
				
   <div class="search">
   		<form name="myform" method="post" action="doctor_html.php" >




      <!-- <input type="text" class="searchTerm" name="location" placeholder="SEARCH REGION"> -->
      <!-- <input type="text" class="searchTerm" name="speciality" placeholder="SEARCH SPECIALITY"> -->
       <select class="searchTerm" name="location">
               <option value = "Noida Sector 62">Noida Sector 62</option>
               <option value = "Noida City Centre" >Noida City Center</option>
               <!--<option value = "noida">Noida Sector 15</option>-->
              <!--<option value = "jaipur">Noida Electronic City</option>-->
             </select>
             	<br><br>

         <select class="searchTerm" name="speciality">
               <option value = "Dentist">Dentist</option>
               <option value = "Neurologist">Neurologist</option>
               <option value = "Dermatologist">Dermatologist</option>
               <option value = "General Physician">Pediatrician</option>
                <option value = "Ayurveda">Ayurveda</option>
                 <option value = "Gynecologist">Gynecologist</option>
             </select>

             <br><br>
      <input type="submit" name="submit" value="submit" class="searchButton">
        <i class="fa fa-search"></i>
     </button>
 </form>
   </div>
</div>

	</section>
	<!-- <section id="blog">
		<div class="box">
			 <a href="" target="_blank"> -->
				<!-- <img src="imagess/shiny-hair.jpg" alt="b1" /> -->
			<!-- </a> -->
				<!-- <div class="text">
            <h1>Flying Kites</h1>
        </div> -->
			<!-- <div id="blog-R-info-da">09 February 2018 
			</div>
			<div id="blog-R-info-t">
				<a href="" target="_blank">Winter Hair Care : Tips for Hair Care during Winters</a>
			</div>
			<div id="blog-R-info-au">by Dini Jain
			</div> -->
		<!-- </div>

		<div id="blog-R-info">
			<a href="" target="_blank">
				<img src="imagess/fatigue.jpg" alt="b2" />
			</a>
			<div id="blog-R-info-da">12 January 2019 
			</div>
			<div id="blog-R-info-t">
				<a href="" target="_blank">Chronic Fatigue Syndrome: Symptoms,Causes and Risks</a>
			</div>
			<div id="blog-R-info-au">by Sahil Rastogi
			</div>
		</div>

		<div id="blog-R-info">
			<a href="" target="_blank">
				<img src="imagess/childhood trauma.jpg" alt="b3" />
			</a>
			<div id="blog-R-info-da">14 July 2018 
			</div>
			<div id="blog-R-info-t">
				<a href="" target="_blank">Definition of Childhood Trauma: Have a Look on its Major Symptoms</a>
			</div>
			<div id="blog-R-info-au">by Meenakshi Bharadwaj
			</div>
		</div>
		<div id="blog-R-info">
			<a href="" target="_blank">
				<img src="imagess/medicine.jpg" alt="b4" />
			</a>
			<div id="blog-R-info-da">25 December 2018 
			</div>
			<div id="blog-R-info-t">
				<a href="" target="_blank">6 Side Effecs of Pain Medicines, That Should Not be Overlooked</a>
			</div>
			<div id="blog-R-info-au">by Shilpy Rana
			</div>
		</div>
	</section>  -->
	<section id="blog">
<div class="icons">
	<div class="column">
  <div class="shadow">
    <a href="" target="_blank"><img src="imagess/gynec_new.jpg" alt="h" /></a>
    <!-- <div class="text"> -->
            <!-- <div>Flying Kites</div> -->
            <div class="text">
             <a style="text-decoration:none" href="" target="_blank"><h1>Gynecologist</h1></a>
        </div>
  </div>  
</div>

<div class="column">
  <div class="shadow">
    <!-- <img src="imagess/shiny-hair.jpg"> -->
    <a href="http://localhost/doctor_appoinment/blackpractise3.html" target="_blank"><img src="imagess/dentist.jpg" alt="h" /></a>
    
            <div class="text">
             <a style="text-decoration:none" href="http://localhost/doctor_appoinment/blackpractise3.html" target="_blank"><h1>Dentist</h1></a>
        </div>
  </div>
</div>

<div class="column">
  <div class="shadow">
    <!-- <img src="imagess/shiny-hair.jpg"> -->
     <a href="" target="_blank"><img src="imagess/derma.jpg" alt="h" /></a>
    
            <div class="text">
             <a style="text-decoration:none" href="" target="_blank"><h1>Dermatologist</h1></a>
        </div>
  </div>
</div>

<div class="column">
  <div class="shadow">
    <!-- <img src="imagess/shiny-hair.jpg"> -->
     <a href="" target="_blank"><img src="imagess/pedia.jpg" alt="h" /></a>
    
            <div class="text">
             <a style="text-decoration:none" href="" target="_blank"><h1>Pediatrician</h1></a>
        </div>
  </div>
</div>
<div class="column">
  <div class="shadow">
    <!-- <img src="imagess/shiny-hair.jpg"> -->
     <a href="" target="_blank"><img src="imagess/ayur1.jpg" alt="h" /></a>
    
            <div class="text">
             <a style="text-decoration:none" href="" target="_blank"><h1>Ayurveda</h1></a>
        </div>
  </div>
</div>
<div class="column">
  <div class="shadow">
    <!-- <img src="imagess/shiny-hair.jpg"> -->
     <a href="" target="_blank"><img src="imagess/neuro.jpg" alt="h" /></a>
    
            <div class="text">
             <a style="text-decoration:none" href="" target="_blank"><h1>Neurologist</h1></a>
        </div>
  </div>
</div>
</div>
</section>

<hr width="100%" >
<section id="review">
    <div class="slideshow-container">
<p id="review_head">What Our Users Have To Say</p>
<div class="mySlides">
  <!-- <q1>What our users have to say<q1><br> -->
  <q>Very easy to book,maintain history. Hassle free from older versions of booking appointment via telephone.. Thanks MrDoc for making it simple.</q>
  <p class="author">- Dini Jain</p>
</div>

<div class="mySlides">
  <q>Very good app. Well thought out about booking an appointment. Also, Doctor's details mechanism is good and describes all the basics in a good way</q>
  <p class="author">- Meenakshi Bharadwaj</p>
</div>

<div class="mySlides">
  <q>  Allows quick and easy search with speedy booking. Even maintains history of doctors visited.</q>
  <p class="author">- Sahil Rastogi</p>
</div>
<div class="mySlides">
  <q>   Well thought out about booking an appointment.Allows quick and easy search with speedy booking.</q>
  <p class="author">- Shilpy Rana</p>
</div>


<a class="prev" onclick="plusSlides(-1)">❮</a>
<a class="next" onclick="plusSlides(1)">❯</a>

</div>

<div class="dot-container">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
  <span class="dot" onclick="currentSlide(4)"></span>
</div>
</section>
<section id="last"></section>


<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  // showSlides(slideIndex += n);
  clearInterval(myTimer);
  if (n < 0){
    showSlides(slideIndex -= 1);
  } else {
   showSlides(slideIndex += 1); 
  }
  if (n === -1){
    myTimer = setInterval(function(){plusSlides(n + 2)}, 3000);
  } else {
    myTimer = setInterval(function(){plusSlides(n + 1)}, 3000);
  }
}

function currentSlide(n) {
  // showSlides(slideIndex = n);
  clearInterval(myTimer);
  myTimer = setInterval(function(){plusSlides(n + 1)}, 3000);
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}


window.addEventListener("load",function() {
    showSlides(slideIndex);
    myTimer = setInterval(function(){plusSlides(1)}, 4000);

var slideshowContainer = document.getElementsByClassName('slideshow-container')[0];
slideshowContainer.addEventListener('mouseenter', pause)
slideshowContainer.addEventListener('mouseleave', resume)
})

pause = () => {
   clearInterval(myTimer);
}
resume = () =>{
   clearInterval(myTimer);
   myTimer = setInterval(function(){plusSlides(slideIndex)}, 4000);
}

</script>

</body>
</html>









<!-- </div>
                <div id="c2-R">
                <div id="h2"><span class="main-letter">T</span>estimonials</div>
                <div id="c2-R-info"><div class="wrapper">
        <div class="gallery">
        	<div class="gallery__img-block  ">
                <span class="">
                    Varun Khare
                </span>
                <img src="IMAGES/testimonial2.jpg" thumb-url="IMAGES/testimonial2.jpg" class="">
            </div>
            <div class="gallery__img-block  ">
                <span class="">
                    Zaki Rayeen
                </span>
                <img src="IMAGES/testimonial 1.jpg" thumb-url="IMAGES/testimonial 1.jpg" class="">
            </div>
            
             
             
            <div class="gallery__controls">

            </div>
        </div>
    </div>
    </div>