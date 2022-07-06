<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>MY TUTOR</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="styyle.css?v=<?php echo time () ; ?>">
   <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

</head>
<body>
   
<!-- header section starts  -->

<section class="header">

   <h1><a href="tutor" class="logo"> 𝕄𝕐 𝕋𝕌𝕋𝕆ℝ</a></h1>

   <a class="w3-bar-item w3-button w3-right" href="{{ url('tutor.blade.php') }}"> 
   <nav class="navbar">
   <a href="registration">𝕽𝖊𝖌𝖎𝖘𝖙𝖊𝖗</a>
   <a href="login">𝕷𝖔𝖌𝖎𝖓</a>
   <a href="tutor">𝕳𝖔𝖒𝖊</a>
   <a href="mainpage">𝕸𝖆𝖎𝖓 𝕻𝖆𝖌𝖊</a>
    
   </nav>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>



<body>
<style>
    :root{
    --main-color:#8e44ad;
    --black:#222;
    --white:#fff;
    --light-black:#777;
    --light-white:#fff9;
    --dark-bg:rgba(0,0,0,.7);
    --light-bg:#eee;
    --border:.1rem solid var(--black);
    --box-shadow:0 .5rem 1rem rgba(0,0,0,.1);
    --text-shadow:0 1.5rem 3rem rgba(0,0,0,.3);
 }
 

*{
    font-family: 'Poppins', sans-serif;
    margin:0; padding:0;
    box-sizing: border-box;
    outline: none; border:none;
    text-decoration: none;
    text-transform: capitalize;
 }
 
 html{
    font-size: 62.5%;
    overflow-x: hidden;
 }
 
 html::-webkit-scrollbar{
    width: 1rem;
 }
 
 html::-webkit-scrollbar-track{
    background-color: white;
 }
 
 html::-webkit-scrollbar-thumb{
    background-color: var(--main-color);
 }
 
 section{
    padding:5rem 10%;
 }
 
 @keyframes fadeIn {
    0%{
       transform: scale(0);
       opacity: 0;
    }
 }
 
 .heading{
    background-size: cover !important;
    background-position: center !important;
    padding-top: 10rem;
    padding-bottom:15rem;
    display: flex;
    align-items: center;
    justify-content: center;
 }
 
 .heading h1{
    font-size: 10rem;
    text-transform: uppercase;
    color:var(--white);
    text-shadow: var(--text-shadow);
 }
 
 .btn{
    display: inline-block;
    background:lightcoral;
    margin-top: 1rem;
    color:black;
    font-size: 1.7rem;
    padding:1rem 3rem;
    cursor: pointer;
 }
 
 .btn:hover{
    background: var(--main-color);
 }
 
 .heading-title{
    text-align: center;
    margin-bottom: 3rem;
    font-size: 6rem;
    text-transform: uppercase;
    color:var(--black);
 }
 
 .header{
    position: sticky;
    top:0; left:0; right:0;
    z-index: 1000;
    background-color: var(--white);
    display: flex;
    padding-top: 2rem;
    padding-bottom: 2rem;
    box-shadow: var(--box-shadow);
    align-items: center;
    justify-content: space-between;
 }
 
 .header .logo{
    font-size: 2.5rem;
    color:var(--black);
 }
 
 .header .navbar a{
    font-size: 2rem;
    margin-left: 2rem;
    color:grey;
 }
 
 .header .navbar a:hover{
    color:var(--main-color);
 }
 
 #menu-btn{
    font-size: 2.5rem;
    cursor: pointer;
    color:grey;
    display: none;
 }
 
 .home{
    padding:0;
 }
 
 .home .slide{
    text-align: center;
    padding:2rem;
    display: flex;
    align-items: center;
    justify-content: center;
    background-size: cover !important;
    background-position: center !important;
    min-height: 60rem;
 }
 
 .home .slide .content{
    width: 85rem;
    display: none;
 }
 
 .home .swiper-slide-active .content{
    display: inline-block;
 }
 
 .home .slide .content span{
    display: block;
    font-size: 2.2rem;
    color: var(--light-white);
    padding-bottom: 1rem;
    animation:fadeIn .2s linear backwards .2s;
 }
 
 .home .slide .content h3{
    font-size: 10vw;
    color:black;
    text-transform: uppercase;
    line-height: 1;
    text-shadow: var(--text-shadow);
    padding:1rem 0;
    animation:fadeIn .2s linear backwards .4s;
 }
 
 .home .slide .content .btn{
    animation:fadeIn .2s linear backwards .6s;
 }
 
 .home .swiper-button-next,
 .home .swiper-button-prev{
    top:inherit;
    left: inherit;
    bottom: 0;
    right: 0;
    height: 20rem;
    width: 20rem;
    background: var(--white);
    color:var(--black);
 }
 
 .home .swiper-button-next:hover,
 .home .swiper-button-prev:hover{
    background: var(--main-color);
    color:var(--white);
 }
 
 .home .swiper-button-next::after,
 .home .swiper-button-prev::after{
    font-size: 2rem;
 }
 
 .home .swiper-button-prev{
    right: 60rem;
 }
 
 .services .box-container{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(16rem, 1fr));
    gap: 1.5rem;
 }
 
 .services .box-container .box{
    padding:3rem 2rem;
    text-align: center;
    background: var(--main-color);
    cursor: pointer;
 }
 
 .services .box-container .box:hover{
    background: gold;
 }
 
 .services .box-container .box img{
    height: 7rem;
 }
 
 .services .box-container .box h3{
    color:wheat;
    font-size: 1.7rem;
    padding-top: 1rem;
 }
 
 .home-about{
    display: flex;
    align-items: center;
    flex-wrap: wrap;
 }
 
 .home-about .image{
    flex:1 1 41rem;
 }
 
 .home-about .image img{
    width: 100%;
 }
 
 .home-about .content{
    flex:1 1 41rem;
    padding:3rem;
    background: var(--light-bg);
 }
 
 .home-about .content h3{
    font-size: 3rem;
    color:var(--black);
 }
 
 .home-about .content p{
    font-size: 1.5rem;
    padding:1rem 0;
    line-height: 2;
    color:black;
 }
 
 .home-packages{
    background: var(--light-bg);
 }
 
 .home-packages .box-container{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(10rem, 1fr));
    gap: 2rem;
 }
 
 .home-packages .box-container .box{
    border:var(--border);
    box-shadow: var(--box-shadow);
    background: white;
 }
 
 .home-packages .box-container .box:hover .image img{
    transform: scale(1.1);
 }
 
 .home-packages .box-container .box .image{
    height: 25rem;
    overflow: hidden;
 }
 
 .home-packages .box-container .box .image img{
    height: 100%;
    width: 100%;
    object-fit: cover;
    transition: .2s linear;
 }
 
 .home-packages .box-container .box .content{
    padding:2rem;
    text-align: center;
 }
 
 .home-packages .box-container .box .content h3{
    font-size: 2.5rem;
    color:black;
 }
 
 .home-packages .box-container .box .content p{
    font-size: 1.5rem;
    color:black;
    line-height: 2;
    padding:1rem 0;
 }
 
 .home-packages .load-more{
    text-align: center;
    margin-top: 2rem;
 }
 
 .home-offer{
    text-align: center;
 }
 
 .home-offer .content{
    max-width:70rem;
    margin:0 auto;
 }
 
 .home-offer .content h3{
    font-size: 3.5rem;
    text-transform: uppercase;
    color:black;
 }
 
 .home-offer .content p{
    font-size: 1.5rem;
    color:var(--light-black);
    line-height: 2;
    padding:1rem 0;
 }
 
 .about{
    display: flex;
    align-items: center;
    flex-wrap: wrap;
    gap:3rem;
 }
 
 .about .image{
    flex:1 1 41rem;
 }
 
 .about .image img{
    width: 100%;
 }
 
 .about .content{
    flex:1 1 41rem;
    text-align: center;
 }
 
 .about .content h3{
    font-size: 3rem;
    color:black;
 }
 
 .about .content p{
    font-size: 1.5rem;
    color:var(--light-black);
    line-height: 2;
    padding:1rem 0;
 }
 
 .about .content .icons-container{
    margin-top: 2rem;
    display: flex;
    flex-wrap: wrap;
    gap:1.5rem;
    align-items: flex-end;
 }
 
 .about .content .icons-container .icons{
    background: wheat;
    padding:2rem;
    flex:1 1 16rem;
 }
 
 .about .content .icons-container .icons i{
    font-size: 4rem;
    margin-bottom: 2rem;
    color:var(--main-color);
 }
 
 .about .content .icons-container .icons span{
    font-size: 1.5rem;
    color:aqua;
    display:block;
 }
 
 .reviews{
    background: var(--light-bg);
 }
 
 .reviews .slide{
    padding:2rem;
    border:var(--border);
    background: sienna;
    text-align: center;
    box-shadow: var(--box-shadow);
    user-select: none;
 }
 
 .reviews .slide .stars{
    padding-bottom: .5rem;
 }
 
 .reviews .slide .stars i{
    font-size: 1.7rem;
    color:var(--main-color);
 }
 
 .reviews .slide p{
    font-size: 1.5rem;
    color:burlywood;
    line-height: 2;
    padding:1rem 0;
 }
 
 .reviews .slide h3{
    font-size: 2rem;
    color:var(--black);
 }
 
 .reviews .slide span{
    font-size: 1.5rem;
    color:var(--main-color);
    display: block;
 }
 
 .reviews .slide img{
    height: 7rem;
    width: 7rem;
    border-radius: 50%;
    margin-top: 1rem;
 }
 
 .tutors .box-container{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(30rem, 1fr));
    gap: 2rem;
 }
 
 .tutors .box-container .box{
    border:var(--border);
    box-shadow: var(--box-shadow);
    background:white;
    display: none;
 }
 
 .tutors   .box-container .box:nth-child(1),
 .tutors   .box-container .box:nth-child(2),
 .tutors   .box-container .box:nth-child(3),
 .tutors  .box-container .box:nth-child(4),
 .tutors  .box-container .box:nth-child(5),
 .tutors  .box-container .box:nth-child(6),
 .tutors  .box-container .box:nth-child(7),
 .tutors  .box-container .box:nth-child(8),
 .tutors .box-container .box:nth-child(9),
 .tutors  .box-container .box:nth-child(10),
 .tutors  .box-container .box:nth-child(11),
 .tutors  .box-container .box:nth-child(12),
 .tutors .box-container .box:nth-child(13),
 .tutors  .box-container .box:nth-child(14),
 .tutors  .box-container .box:nth-child(15)
 {
    display: inline-block;
 }
 
 .tutors  .box-container .box:hover .image img{
    transform: scale(1.1);
 }
 
 .tutors .box-container .box .image{
    height: 25rem;
    overflow: hidden;
 }
 
 .tutors  .box-container .box .image img{
    height: 100%;
    width: 100%;
    object-fit: cover;
    transition: .2s linear;
 }
 
 .tutors  .box-container .box .content{
    padding:2rem;
    text-align: center;
 }
 
 .tutors  .box-container .box .content h3{
    font-size: 2.5rem;
    color:black;
 }
 
 .tutors  .box-container .box .content p{
    font-size: 1.5rem;
    color:black;
    line-height: 2;
    padding:1rem 0;
 }
 
 .tutors  .load-more{
    text-align: center;
    margin-top: 2rem;
 }
 
 .tutors .book-form{
    padding:2rem;
    background: green;
 }
 
 .booking .book-form .flex{
    display: flex;
    flex-wrap: wrap;
    gap:2rem;
 }
 
 .booking .book-form .flex .inputBox{
    flex:1 1 41rem;
 }
 
 .booking .book-form .flex .inputBox input{
    width: 100%;
    padding:1.2rem 1.4rem;
    font-size: 1.6rem;
    color:slateblue;
    text-transform: none;
    margin-top: 1.5rem;
    border:var(--border);
 }
 
 .booking .book-form .flex .inputBox input:focus{
    background:lightskyblue;
    color:white;
 }
 
 .booking .book-form .flex .inputBox input:focus::placeholder{
    color:slateblue;
 }
 
 .booking .book-form .flex .inputBox span{
    font-size: 1.5rem;
    color:black;
 }
 
 .booking .book-form .btn{
    margin-top: 2rem;
 }
 
 
 
 .footer{
    background: url(https://mobaco.com/wp-content/uploads/2016/08/grey.jpg) no-repeat;
    background-size: cover;
    background-position: center;
 }
 
 .footer .box-container{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(25rem, 1fr));
    gap: 3rem;
 }
 
 .footer .box-container .box h3{
    color : grey;
    font-size: 2.5rem;
    padding-bottom: 2rem;
 }
 
 .footer .box-container .box a{
    color:white;
    font-size: 1.5rem;
    padding-bottom: 1.5rem;
    display: block;
 }
 
 .footer .box-container .box a i{
    color:var(--main-color);
    padding-right: .5rem;
    transition: .2s linear;
 }
 
 .footer .box-container .box a:hover i{
    padding-right: 2rem;
 }
 
 .footer .credit{
    text-align: center;
    padding-top: 3rem;
    margin-top: 3rem;
    border-top: .1rem solid var(--light-white);
    font-size: 2rem;
    color:var(--black);
 }
 
 .footer .credit span{
    color:var(--main-color);
 }
 
 
 
 

 
 
 
 /* media queries  */
 
 @media (max-width:1200px){
 
    section{
       padding:3rem 5%;
    }
 
 }
 
 @media (max-width:991px){
 
    html{
       font-size: 55%;
    }
 
    section{
       padding:3rem 2rem;
    }
 
    .home .slide .content h3{
       font-size: 10vw;
    }
 
 }
 
 @media (max-width:768px){
 
    .heading h1{
       font-size: 4rem;
    }
 
    #menu-btn{
       display: inline-block;
       transition: .2s linear;
    }
 
    #menu-btn.fa-times{
       transform: rotate(180deg);
    }
 
    .header .navbar{
       position: absolute;
       top:99%; left:0; right:0;
       background-color: var(--white);
       border-top: var(--border);
       padding:2rem;
       transition: .2s linear;
       clip-path: polygon(0 0, 100% 0, 100% 0, 0 0);
    }
 
    .header .navbar.active{
       clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%);
    }
 
    .header .navbar a{
       display: block;
       margin:2rem;
       text-align: center;
    }
 
 }
 
 @media (max-width:450px){
 
    html{
       font-size: 50%;
    }
 
    .heading-title{
       font-size: 3.5rem;
    }
 
 }
* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
 width: 900px;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: black;
}

/* Caption text */
.text {
  color: black;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 20px;
  width: 20px;
  margin: 0 2px;
  background-color:grey;
  border-radius: 100%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: black;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 800px) {
  .prev, .next,.text {font-size: 11px}
}
</style>
</head>

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="https://www.academyofmine.com/wp-content/uploads/2019/05/bookateacher_online_tutoring.jpg" style="width: 100%">
  
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="https://static.wixstatic.com/media/11062b_09290f151e1a422f88f8e95780feeeb9~mv2.jpg/v1/fill/w_510,h_340,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/Online%20Classes.jpg" style="width: 100%">
  
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="https://fordhaminstitute.org/sites/default/files/styles/single_main_image/public/2020-07/ub-7-30-20.jpg?itok=3oEOpKU0" style="width: 100%">

</div>

<a class="prev" onclick="plusSlides(-1)"></a>
<a class="next" onclick="plusSlides(1)"></a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>

<script>
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
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
</script>

</body>



<section class="home-about">


   <div class="content">
      <h1><center><h3>ABOUT </h3></center></h1>
     <h1> <center><p>"MyTutor is an organisation that provides online tutoring in a range of subjects. These online tuition sessions can be accessed through any laptop, PC or tablet device. Tuition sessions can take place in school or at home and timings are flexible to fit to need."</p></center></h1>
     
   </div>

</section>



<!-- home packages section starts  -->

<section class="home-packages">

   <h1 class="heading-title"> TOP SUBJECT </h1>

   <div class="box-container">

      <div class="box">
         <div class="image">
            <img src="https://edsurge.imgix.net/uploads/post/image/12176/coding-1556754232.jpg?auto=compress%2Cformat&fit=crop&h=486&w=1200" alt="">
         </div>
         <div class="content">
            <h3>PROGRAMMING 101</h3>
            <p>Basic programming for new student with no background in programming</p>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="https://imageio.forbes.com/blogs-images/forbestechcouncil/files/2019/01/canva-photo-editor-8-7.png?format=png&width=1200" alt="">
         </div>
         <div class="content">
            <h3>PROGRAMMING 201 </h3>
            <p>Intermediate programming course that aim for those who has basic programming knowledge</p>
         
         </div>
      </div>
      
      <div class="box">
         <div class="image">
            <img src="https://assets.entrepreneur.com/content/3x2/2000/20160628101609-Coding.jpeg" alt="">
         </div>
         <div class="content">
            <h3>INTRODUCTION TO WEB PROGRAMMING</h3>
            <p>Basic introduction to HTML, CSS, JavaScript, PHP and MySQL.</p>
           
         </div>
      </div>

   </div>

   
</section>



<section class="home-offer">
   <div class="content">
      <h3>JOIN US !</h3>
      <p>Get The Best Home Tutor for Your Child Today </p>
      <a href="" class="btn">REGISTER NOW !</a>
   </div>
</section>
<section class="footer">

   

   <div class="credit"> Copyright &copy:2022 NUR MURSYIDA</span> | all rights reserved! </div>

</section>

<!-- home offer section ends -->














