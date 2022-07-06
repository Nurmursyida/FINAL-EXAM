<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>MY TUTOR</title>

    <!-- Fonts -->
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

        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%
        }
        body {
            margin: 0
        }
        a {
            background-color: transparent
        }
        [hidden] {
            display: none
        }
        html {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            line-height: 1.5
        }
        *,
        :after,
        :before {
            box-sizing: border-box;
            border: 0 solid #e2e8f0
        }
        a {
            color: inherit;
            text-decoration: inherit
        }
        svg,
        video {
            display: block;
           
        }
        video {
            max-width: 100%;
            height: auto
        }
        .bg-white {
            --bg-opacity: 1;
            background-color: #fff;
            background-color: rgba(255, 255, 255, var(--bg-opacity))
        }
        .bg-gray-100 {
            --bg-opacity: 1;
            background-color: #f7fafc;
            background-color: rgba(247, 250, 252, var(--bg-opacity))
        }
        .border-gray-200 {
            --border-opacity: 1;
            border-color: #edf2f7;
            border-color: rgba(237, 242, 247, var(--border-opacity))
        }
        .border-t {
            border-top-width: 1px
        }
        .flex {
            display: flex
        }
        .grid {
            display: grid
        }
        .hidden {
            display: none
        }
        .items-center {
            align-items: center
        }
        .justify-center {
            justify-content: center
        }
        .font-semibold {
            font-weight: 600
        }
        .h-5 {
            height: 1.25rem
        }
        .h-8 {
            height: 2rem
        }
        .h-16 {
            height: 4rem
        }
        .text-sm {
            font-size: .875rem
        }
        .text-lg {
            font-size: 1.125rem
        }
        .leading-7 {
            line-height: 1.75rem
        }
        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }
        .ml-1 {
            margin-left: .25rem
        }
        .mt-2 {
            margin-top: .5rem
        }
        .mr-2 {
            margin-right: .5rem
        }
        .ml-2 {
            margin-left: .5rem
        }
        .mt-4 {
            margin-top: 1rem
        }
        .ml-4 {
            margin-left: 1rem
        }
        .mt-8 {
            margin-top: 2rem
        }
        .ml-12 {
            margin-left: 3rem
        }
        .-mt-px {
            margin-top: -1px
        }
        .max-w-6xl {
            max-width: 72rem
        }
        .min-h-screen {
            min-height: 100vh
        }
        .overflow-hidden {
            overflow: hidden
        }
        .p-6 {
            padding: 1.5rem
        }
        .py-4 {
            padding-top: 1rem;
            padding-bottom: 1rem
        }
        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }
        .pt-8 {
            padding-top: 2rem
        }
        .fixed {
            position: fixed
        }
        .relative {
            position: relative
        }
        .top-0 {
            top: 0
        }
        .right-0 {
            right: 0
        }
        .shadow {
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06)
        }
        .text-center {
            text-align: center
        }
        .text-gray-200 {
            --text-opacity: 1;
            color: #edf2f7;
            color: rgba(237, 242, 247, var(--text-opacity))
        }
        .text-gray-300 {
            --text-opacity: 1;
            color: #e2e8f0;
            color: rgba(226, 232, 240, var(--text-opacity))
        }
        .text-gray-400 {
            --text-opacity: 1;
            color: #cbd5e0;
            color: rgba(203, 213, 224, var(--text-opacity))
        }
        .text-gray-500 {
            --text-opacity: 1;
            color: #a0aec0;
            color: rgba(160, 174, 192, var(--text-opacity))
        }
        .text-gray-600 {
            --text-opacity: 1;
            color: #718096;
            color: rgba(113, 128, 150, var(--text-opacity))
        }
        .text-gray-700 {
            --text-opacity: 1;
            color: #4a5568;
            color: rgba(74, 85, 104, var(--text-opacity))
        }
        .text-gray-900 {
            --text-opacity: 1;
            color: #1a202c;
            color: rgba(26, 32, 44, var(--text-opacity))
        }
        .underline {
            text-decoration: underline
        }
        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }
        .w-5 {
            width: 1.25rem
        }
        .w-8 {
            width: 2rem
        }
        .w-auto {
            width: auto
        }
        .grid-cols-1 {
            grid-template-columns: repeat(1, minmax(0, 1fr))
        }
        @media (min-width:640px) {
            .sm\:rounded-lg {
                border-radius: .5rem
            }
            .sm\:block {
                display: block
            }
            .sm\:items-center {
                align-items: center
            }
            .sm\:justify-start {
                justify-content: flex-start
            }
            .sm\:justify-between {
                justify-content: space-between
            }
            .sm\:h-20 {
                height: 5rem
            }
            .sm\:ml-0 {
                margin-left: 0
            }
            .sm\:px-6 {
                padding-left: 1.5rem;
                padding-right: 1.5rem
            }
            .sm\:pt-0 {
                padding-top: 0
            }
            .sm\:text-left {
                text-align: left
            }
            .sm\:text-right {
                text-align: right
            }
        }
        @media (min-width:768px) {
            .md\:border-t-0 {
                border-top-width: 0
            }
            .md\:border-l {
                border-left-width: 1px
            }
            .md\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }
        }
        @media (min-width:1024px) {
            .lg\:px-8 {
                padding-left: 2rem;
                padding-right: 2rem
            }
        }
        @media (prefers-color-scheme:dark) {
            .dark\:bg-gray-800 {
                --bg-opacity: 1;
                background-color: #2d3748;
                background-color: rgba(45, 55, 72, var(--bg-opacity))
            }
            .dark\:bg-gray-900 {
                --bg-opacity: 1;
                background-color: #1a202c;
                background-color: rgba(26, 32, 44, var(--bg-opacity))
            }
            .dark\:border-gray-700 {
                --border-opacity: 1;
                border-color: #4a5568;
                border-color: rgba(74, 85, 104, var(--border-opacity))
            }
            .dark\:text-white {
                --text-opacity: 1;
                color: #fff;
                color: rgba(255, 255, 255, var(--text-opacity))
            }
            .dark\:text-gray-400 {
                --text-opacity: 1;
                color: #cbd5e0;
                color: rgba(203, 213, 224, var(--text-opacity))
            }
            .dark\:text-gray-500 {
                --tw-text-opacity: 1;
                color: #6b7280;
                color: rgba(107, 114, 128, var(--tw-text-opacity))
            }
        }
    </style>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
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

<body class="antialiased">
    <?php if(session('save')): ?>
    <script>
        alert("Success");
    </script>
    <?php endif; ?>
    <?php if(session('error')): ?>
    <script>
        alert("Failed");
    </script>
    <?php endif; ?>
    <br>
        <br>
    <div class="w3-container">
      
           
        
        <header class="">
           <center> <h2>𝓜𝓨 𝓣𝓤𝓣𝓞𝓡</h2></center>
        </header>
        <div class="w3-padding">
            <div class="w3-card w3-round">
                <header class="w3-grey w3-padding">
                    <center><h3>𝐿𝒪𝒢𝐼𝒩 𝐹𝒪𝑅𝑀</h3></center>
                </header>
                <div class="w3-padding ">
                    <form action="<?php echo e(route('login.post')); ?>" method="post" accept-charset="UTF-8">
                        <?php echo e(csrf_field()); ?>

                        <label for="email">𝗘𝗺𝗮𝗶𝗹</label>
                        <p><input id="email" class="w3-input w3-round w3-border" type="email" name="email" required></p>
                        <?php if($errors->has('email')): ?>
                        <span class="w3-red"><?php echo e($errors->first('email')); ?></span>
                        <?php endif; ?>
                        <label for="pass">𝗣𝗮𝘀𝘀𝘄𝗼𝗿𝗱</label>
                        <p><input id="pass" class="w3-input w3-round w3-border" type="password" name="password" required></p>
                        <?php if($errors->has('password')): ?>
                        <span class="w3-red"><?php echo e($errors->first('password')); ?></span>
                        <?php endif; ?>
                        <div class="w3-row">
                            <input type="checkbox" name="remember"> Remember Me
                            <br>
                            <center><button class="w3-button w3-black w3-round w3-right">Login</button></center>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        
        
    </div>


</body>
<section class="footer">

   

<div class="credit"> Copyright &copy:2022 NUR MURSYIDA</span> | all rights reserved! </div>

</section>

</html><?php /**PATH C:\xampp\htdocs\laravel\syidapage\resources\views/login.blade.php ENDPATH**/ ?>