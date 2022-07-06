<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>MainPage</title>
    <body>
   
   
  
   <section class="header">
   
      <h1><a href="tutor" class="logo"> 𝕄𝕐 𝕋𝕌𝕋𝕆ℝ</a></h1>
   
      <a class="w3-bar-item w3-button w3-right" href="{{ url('tutor') }}"> 
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
  
   
        @media screen and (max-width: 768px) {
            .w3-container {
                width: 100%;
            }
        }
        @media screen and (min-width: 768px) {
            .w3-container {
                width: 700px;
                margin: 0 auto;
            }
        }
    </style>

    <style>
        @media screen and (max-width: 768px) {
            .w3-container {
                width: 100%;
            }
        }
        @media screen and (min-width: 768px) {
            .w3-container {
                width: 700px;
                margin: 0 auto;
            }
        }
    </style>

</head>

<body>
    @if (session('save'))
    <script>
        alert("Success");
    </script>
    @endif
    @if (session('error'))
    <script>
        alert("Failed");
    </script>
    @endif

    <header class="w3-center w3-padding-large w3-grey">
       <b> <h2>𝒮𝒰𝐵𝒥𝐸𝒞𝒯 𝑅𝐸𝒢𝐼𝒮𝒯𝑅𝒜𝒯𝐼𝒪𝒩 𝐹𝒪𝑅𝑀</h2></b>
    </header>
    <div>
        <button class="w3-button w3-circle w3-right w3-grey w3-margin " onclick="document.getElementById('newitem').style.display= 'block';return false;">New Subject</button>
    </div>

    <div class="w3-padding" style='max-width:900px;margin:auto'>
        <table class="w3-table w3-striped w3-bordered w3-panel w3-border">
            <thead>
                <th>Subject ID</th>
                <th>Title </th>
                <th>Description</th>
                <th>Price</th>
                <th>Total Learning Hours</th>
                <th>Operations</th>
            </thead>
            @foreach ($listProducts as $listItem)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $listItem->subject_id}}</td>
                <td>{{ $listItem->tutor_title}}</td>
                <td>{{ $listItem->tutor_description}}</td>
                <td>{{ $listItem->tutor_price}}</td>
                <td>{{ $listItem->tutor_total}}</td>
              
                <td>
                    <div class="w3-cell">
                        <form method="post" action="{{route('markDelete',$listItem->id)}}" accept-charset="UTF-8" onsubmit="return confirm('Delete?');">
                            {{csrf_field()}}
                            <button class="w3-button w3-round w3-block" type="submit">
                                <i class="fa fa-trash"> </i></button>
                        </form>
                    </div>
                    <div class="w3-cell">
                        <button class="w3-button w3-round w3-block" onclick="document.getElementById('{{$loop->iteration}}').style.display='block';return false;"><i class="fa fa-pencil-square-o"> </i>
                        </button>
                    </div>
                    <div id="{{$loop->iteration}}" class="w3-modal w3-animate-opacity">
                        <div class="w3-modal-content w3-round" style="width:500px">
                            <header class="w3-row w3-blue"> <span onclick="document.getElementById('{{$loop->iteration}}').style.display='none'" class="w3-button w3-display-topright w3-small">&times;</span>
                                <h4 class="w3-margin-left">UPDATE SUBJECT FORM</h4>
                            </header>
                            <div class="w3-padding">
                                <form method="post" action="{{route('markUpdate',$listItem->id)}}">
                                    {{csrf_field()}}
                                    <p><input class="w3-input w3-round w3-border" type="text" name="ttitle" placeholder="Title" value ="{{ $listItem->tutor_title}}"></p>
                                    <p><input class="w3-input w3-round w3-border" type="text" name="tdescription" placeholder="Description" value ="{{ $listItem->tutor_description}}"></p>
                                    <p><input class="w3-input w3-round w3-border" type="number" name="tprice" placeholder="Price" step="any" value ="{{ $listItem->tutor_price}}"></p>
                                    <p><input class="w3-input w3-round w3-border" type="number" name="ttotal" placeholder="Total" value ="{{ $listItem->tutor_total}}"></p>
                                    </textarea></p>
                                    <button class="w3-button w3-blue w3-round" type="submit">Update</button>
                                </form>
                            </div>
                        </div>
                    </div>

                </td>
            </tr>
            @endforeach


        </table>
    </div>
   

    <div id="newitem" class="w3-modal w3-animate-opacity">
        <div class="w3-modal-content w3-round" style="width:500px">
            <header class="w3-row w3-grey"> <span onclick="document.getElementById
     ('newitem').style.display='none'" class="w3-button w3-display-topright w3-small">&times;</span>
                <h4 class="w3-margin-left">NEW SUBJECT FORM</h4>
            </header>
            <div class="w3-padding">
                <form method="post" action="{{route('saveSubject')}}">
                    {{csrf_field()}}
                    <p><input class="w3-input w3-round w3-border" type="text" name="ttitle" placeholder="Title"></p>
                    <p><input class="w3-input w3-round w3-border" type="text" name="tdescription" placeholder="Description"></p>
                    <p><input class="w3-input w3-round w3-border" type="number" name="tprice" placeholder="Price" step="any"></p>
                    <p><input class="w3-input w3-round w3-border" type="number" name="ttotal" placeholder="Total"></p>
                    </textarea></p>
                    <button class="w3-button w3-black w3-round" type="submit">Insert</button>
                </form>
            </div>
        </div>
    </div>
    
</body>
<br>
<br>
<br>
<br>
<br>






<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<section class="footer">

   

<center><div class="credit"> Copyright &copy:2022 NUR MURSYIDA</span> | all rights reserved! </div></center>

</section>
</html>