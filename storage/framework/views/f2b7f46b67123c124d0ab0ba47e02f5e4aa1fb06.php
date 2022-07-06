<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Document</title>
</head>
    <body>
   
   
  
   <section class="header">
   
      <h1><a href="tutor" class="logo"> 𝕄𝕐 𝕋𝕌𝕋𝕆ℝ</a></h1>
   
      <a class="w3-bar-item w3-button w3-right" href="<?php echo e(url('tutor')); ?>"> 
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
    
    @keyframes  fadeIn {
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
   
   @keyframes  fade {
     from {opacity: .4} 
     to {opacity: 1}
   }
   
   /* On smaller screens, decrease text size */
   @media  only screen and (max-width: 800px) {
     .prev, .next,.text {font-size: 11px}
   }
  
   
        @media  screen and (max-width: 768px) {
            .w3-container {
                width: 100%;
            }
        }
        @media  screen and (min-width: 768px) {
            .w3-container {
                width: 700px;
                margin: 0 auto;
            }
        }
    </style>

</head>
<body>
<div class="w3-container">
   <div class="w3-bar w3-grey ">
     
    </div>
   <header class="">
     <center> <h2>𝓜𝓨 𝓣𝓤𝓣𝓞𝓡</h2></center>
   </header>
   <div class="w3-padding">
      <div class="w3-card w3-round">
        <header class="w3-grey w3-padding">
          <center><b><h3> 𝑅𝐸𝒢𝐼𝒮𝒯𝑅𝒜𝒯𝐼𝒪𝒩</h3></b></center>
        </header>
       <div class="w3-padding ">
       <form action="<?php echo e(route('register.post')); ?>" method="post">
         <?php echo e(csrf_field()); ?>

           <label for="email">𝗙𝘂𝗹𝗹 𝗡𝗮𝗺𝗲</label>
           <p><input id="email" class="w3-input w3-round w3-border" type=
              "name" name="name" required></p>
           <?php if($errors->has('name')): ?>
             <span class="text-danger"><?php echo e($errors->first('name')); ?></span>
           <?php endif; ?>

           <label for="email">𝗘𝗺𝗮𝗶𝗹</label>
           <p><input id="email" class="w3-input w3-round w3-border" type=
             "email" name="email" required></p>
           <?php if($errors->has('email')): ?>
             <span class="text-danger"><?php echo e($errors->first('email')); ?></span>
           <?php endif; ?>
           
           <label for="email">𝗣𝗵𝗼𝗻𝗲 𝗡𝘂𝗺𝗯𝗲𝗿</label>
           <p><input id="email" class="w3-input w3-round w3-border" type=
             "phonenumber" name="phonenumber" required></p>
           <?php if($errors->has('phonenumber')): ?>
             <span class="text-danger"><?php echo e($errors->first('phonenumber')); ?></span>
           <?php endif; ?>

           <label for="email">𝗠𝗮𝗶𝗹𝗶𝗻𝗴 𝗔𝗱𝗱𝗿𝗲𝘀𝘀</label>
           <p><input id="email" class="w3-input w3-round w3-border" type=
             "mmaddress" name="mmaddress" required></p>
           <?php if($errors->has('maddress')): ?>
             <span class="text-danger"><?php echo e($errors->first('maddress')); ?></span>
           <?php endif; ?>

           <label for="email">𝗦𝘁𝗮𝘁𝗲</label>
           <p><input id="email" class="w3-input w3-round w3-border" type=
             "state" name="state" required></p>
           <?php if($errors->has('state')): ?>
             <span class="text-danger"><?php echo e($errors->first('state')); ?></span>
           <?php endif; ?>

           <label for="pass">𝗣𝗮𝘀𝘀𝘄𝗼𝗿𝗱</label>
           <p><input id="pass" class="w3-input w3-round w3-border" type=
              "password" name="password" required></p>
           <?php if($errors->has('password')): ?>
             <span class="text-danger"><?php echo e($errors->first('password')); ?></span>
           <?php endif; ?>
           <br>
           <br>
           <center> <button class="w3-button w3-black w3-round">Register</button></center>
         </form>
      </div>
    </div>
  </div>
 
</div>
<section class="footer">

   

   <div class="credit"> Copyright &copy:2022 NUR MURSYIDA</span> | all rights reserved! </div>

</section>
</body>
</html><?php /**PATH C:\xampp\htdocs\laravel\syidapage\resources\views/register.blade.php ENDPATH**/ ?>