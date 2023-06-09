<!DOCTYPE html>
<html lang="en">
<head>
<title>Bet, Win, Earn Live e-Sports Contests | Bettel India</title>
<link rel="icon" type="image/x-icon" href="./assets/img/favicon.ico">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="./assets/css/style.css">
  <!-- <link rel="stylesheet" href="./assets/css/fontawesome.min.css"/> -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel = "stylesheet" href = "./assets/css/glightbox.min.css">
  <script>
    window.onscroll = function() {
      growShrinkLogo()
    };

    function growShrinkLogo() {
      var Logo = document.getElementById("Logo")
      if (document.body.scrollTop > 5 || document.documentElement.scrollTop > 5) {
        Logo.style.width = '100px';
      } else {
        Logo.style.width = '150px';
      }
    }   
  </script>
  
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"   crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js" integrity="sha512-A7AYk1fGKX6S2SsHywmPkrnzTZHrgiVT7GcQkLGDe2ev0aWb8zejytzS8wjo7PGEXKqJOrjQ4oORtnimIRZBtw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js" integrity="sha512-CEiA+78TpP9KAIPzqBvxUv8hy41jyI3f2uHi7DGp/Y/Ka973qgSdybNegWFciqh6GrN2UePx2KkflnQUbUhNIA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="./assets/js/jquery.waypoints.min.js"></script>
  <script src="./assets/js/glightbox.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.js"></script>
  <script src="./assets/anime/anime.min.js"></script>

  <style>
    
    @font-face {
      font-family: worker;
      src: url(./assets/fonts/worker.otf);
    }

    .nav-list-item{
      text-decoration: none;
      color: #fff;
    }
    .nav-list-item:hover{
      color:#B7298A
    }
    .nav-list-item:active{
      color: #4F2AA6;
    }
    .hero-btn{
      
      margin-right: 5px;
    }
    .hero-btn:hover{
      transform: scale(1.125);
      border:100px;
      border-color: #fff;
      opacity: 60%;
    }
    .nav-btn{
      
      margin-right: 10px;
      margin-left: 5px;

    }
    .nav-btn:hover{
      transform: scale(1.125);
      border:100px;
      border-color: #fff;
      opacity: 60%;
    }
    
    .point{
      display: none;
    }

    .point1{
      position: absolute; top: 300px !important; left: -20px;
    }

    .point2{
      position: absolute; top: 510px !important;left: 320px;
    }

    .point3{
      position: absolute; top: 280px !important;left: 580px;
    }

    .point4{
      position: absolute; top: 590px !important;left: 750px !important;
    }

    .point5{
      position: absolute; top:775px !important;left: 1000px !important;
    }

    .point6{
      position: absolute; top: 350px !important;left: 1170px !important;
    }

    .step{
      display: block;
      max-width: 250px;
      margin-top: 10px;
      padding: 10px 15px;
      margin-right: 10px;
      z-index: 2;
      position: relative;
    }

    .step h1{
      font-size: 25px;
      color: #fff;
    }

    .step p {
      color: #fff;
      font-size: 15px;
    }

    /* .point:hover > .step {
      display: block;
      transition: 5s;
    } */

    .step1{
      margin-top: -150px;
    }

    .step2{
      margin-left: -50px;
    }

    .step3{
      margin-top: -200px !important;
      margin-left: -80px;
    }

    .step4{
      margin-left: 50px !important;
      margin-top: -80px;
    }

    .step6 {
      margin-left: -250px !important;
      margin-top: -100px;
    }

    @media only screen and (max-width: 1400px) {

    .point1{
      top: 300px !important;
    }

    .point2{
      top: 475px !important;
      left: 258px !important;
    }

    .point3{
      top: 280px !important;
      left: 500px !important;
    }

    .point4{
      top: 485px !important;
      left: 650px !important;
    }


    .point5{
      top: 720px !important;
      left: 800px !important;
    }

    .point6{
      top: 350px !important;
      left: 990px !important;
    }

    .step1{
      margin-top: -180px;
    }

    .step3{
      margin-left: -50px !important;
      margin-top: -180px;
    }

    .step6{
      margin-left: -150px !important;
      margin-top: -200px !important;
    }

    .step p{
      max-width: 200px;
    }

    .step h1{
      font-size: 30px;
    }

    .step p {
      font-size: 15px;
    }

    }

    @media only screen and (max-width: 1200px) {

    .point1{
      top: 440px;
    }

    .point2{
      top: 450px !important;
      left: 220px !important;
    }

    .point3{
      top: 330px;
      left: 400px !important;
    }

    .point4{
      top: 450px;
      left: 535px !important;
    }

    .point5{
      top: 645px !important;
      left: 670px !important;
    }

    .point6{
      top: 310px;
      left: 820px !important;
    }

    .step6{
      margin-left: -150px;
      margin-top: -140px;
    }

    }

    @media only screen and (max-width: 991px) {

    .controller{
      display: none;
    }

    .bwe, .bwe1{
      width: 80%;
      font-size: 40px;
    }

    .bwep{
      width: 80%;
    }

    .point1{
      top: 300px !important;
    }

    .point2{
      top: 400px !important;
      left: 150px !important;
    }

    .point3{
      top: 280px !important;
      left: 300px !important;
    }

    .point4{
      top: 400px !important;
      left: 400px !important;
    }

    .point5{
      top: 550px !important;
      left: 490px !important;
    }

    .point6{
      top: 310px !important;
      left: 620px !important;
    }

    .step3{
      margin-left: -120px !important;
      margin-top: -150px !important;
    }

    .step6{
      margin-left: -160px !important;
      margin-top: -140px !important;
    }

    .step h1{
      font-size: 18px;
    }

    .step p{
      font-size: 12px;
      max-width: 200px !important;
    }

    /* .numberCircle{
      width: 46px;
      height: 46px;
      font-size: 15px;
    } */

    }


    .tp {
      border-top: 2px dashed;
      border-color: #fff !important;
      margin:0; padding: 30px;
      counter-increment: section;
      position: relative;
      }
      
      
      
    .tp:nth-child(even):before {
      content: counter(section);
      right: 100%; 
      margin-right: -20px;
      position: absolute;
      border-radius: 50%;
      padding: 10px;
      height: 50px;
      width: 50px;
      background-color: #B7298A;
      text-align:center;
      color: #fff;
      font-size: 110%;
      }
      
    .tp:nth-child(odd):before {
      content: counter(section);
      left: 100%; 
      margin-left: -20px;
      position: absolute;
      border-radius: 50%;
      padding: 10px;
      height: 50px;
      width: 50px;
      background-color: #B7298A;
      text-align:center;
      color: white;
      font-size: 110%;
      }
      
      
      
    .tp:nth-child(even) {
      border-left: 2px dashed;
      border-top-left-radius: 30px;
      border-bottom-left-radius: 30px;
      margin-right: 28px;
      text-align: left;
      padding-right: 0;
      }
      
    .tp:nth-child(odd) {
      border-right: 2px dashed;
      border-top-right-radius: 30px;
      border-bottom-right-radius: 30px;
      text-align: right;
      margin-left: 28px; 
      padding-left: 0;
      }
      
    .tp:first-child {
      border-top: 0;
      border-top-right-radius:0;
      border-top-left-radius:0;
      }
      
    .tp:last-child {
      border-bottom-right-radius:0;
      border-bottom-left-radius:0;
      }


        .bg-img1{
          width: 500px;
          height: auto;
          position: absolute;
          top:-200px;
          right: -100px;
        }

        .bg-img2{
          width: 350px;
          height: auto;
          position: absolute;
          top:50px;
          right: 300px;
        }

        .bg-img3{
          width: 350px;
          height: auto;
          position: absolute;
          top: 180px;
          right: -50px;
        }

        .bg-img4{
          width: 220px;
          height: auto;
          position: absolute;
          display: none;
          top: -190px;
          left: -70px;
        }

        .front-img
        {
          position:absolute;
          z-index: 2;
        }
        .back-img
        {
          position:absolute;
          z-index: 1;
        }

        .object1 {
          animation: MoveUpDown 2s linear infinite;
        }
        .object2 {
          animation: MoveUpDown2 2s linear infinite;
        }
        .object3 {
          animation: MoveUpDown3 5s linear infinite;
        }

    .object:hover{
      -webkit-filter: drop-shadow(5px 5px 0 black) 
                      drop-shadow(-5px -5px 0 white);
        filter:drop-shadow(5px 5px 0 black) 
              drop-shadow(-5px -5px 0 white);
    }

    .object1:hover{
      width: 520px;
    }
    .object2:hover{
      width: 380px;
    }
    .object3:hover{
      width: 370px;
    }

    @keyframes MoveUpDown {
      0% {
        top: -180px;
      }

      50% {
        top: -175px;
      }

      100% {
        top: -180px;
      }
    }

    @keyframes MoveUpDown2 {
      0% {
        top: 80px;
      }

      50% {
        top: 75px;
      }

      100% {
        top: 80px;
      }
    }

    @keyframes MoveUpDown3 {
      0% {
        top: 200px;
      }

      50% {
        top: 180px;
      }

      100% {
        top: 200px;
      }
    }

    @media only screen and (max-width: 991px) {

      .object1:hover{
      width: 320px;
      }
      .object2:hover{
        width: 230px;
      }
      .object3:hover{
        width: 250px;
      }

      .point{
        display: none !important;
      }

      .bg-img1{
        width: 300px;
        top: -40% !important;

        right: -100px;
      }

      .bg-img2{
        width: 200px;
        top: 20% !important;

        right: 120px;
      }

      .bg-img3{
        width: 220px;
        top: 65% !important;

        right: 0px;
      }

      .bg-img4{
        display: none;
      }

    }

    @media only screen and (max-width: 767px) {

      .object1:hover{
      width: 280px;
      }

      .bg-img1{
        width: 250px;
        top: 10% !important;

        right: -120px;
      }

      .bg-img2{
        display: none;
      }

      .bg-img3{
        display: none;
      }

      .bg-img4{
        display: block;
      }
    }

    .updown{
      width: 100px;
      height: auto;
      animation: zoom-in-zoom-out 3s ease infinite;
    }

    @keyframes zoom-in-zoom-out {
      0% {
        transform: scale(1, 1);
      }
      50% {
        transform: scale(1.1, 1.1);
      }
      100% {
        transform: scale(1, 1);
      }
    }

    .car {
      position: absolute;
      top: 195px;
      left: -30px;
      width: 100px;
      height: auto;
      transform: rotate(70deg)
    }

    #loading {
      display: block;
      position: absolute;
      top: 0;
      left: 0;
      z-index: 100;
      width: 100vw;
      height: 100vh;
      background-color: rgba(0,0,0, 0.8);
      background-image: url("./assets/img/logo.png");
      background-repeat: no-repeat;
      background-position: center;
    }

  </style>

    <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-F6C8Z6HCFJ"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-F6C8Z6HCFJ');
  </script>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-F6C8Z6HCFJ"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-F6C8Z6HCFJ');
  </script>
</head>
<body>
  
  <?php
    $host = "localhost";
    $databasebUser= "root";
    $databasePwd="";
    $dataBaseName= "bettel";
    $connect=mysqli_connect($host,$databasebUser,$databasePwd,$dataBaseName);

    if(isset($_POST['submit'])){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $contact = $_POST['contact'];
      $message = $_POST['message'];
      $myQuery = "INSERT INTO entries VALUES('$name', '$email', '$contact', '$message')";
      $runQuery= mysqli_query($connect, $myQuery);
      echo "
        <script> alert('Your Details have been Submitted Successfully. Our Team will contact you shortly'); </script>
      ";
    }

    if(isset($_POST['enter'])){
      $email = $_POST['emaill'];
      $name = $_POST['namee'];
      $phone = $_POST['contact'];
      $choice = $_POST['choice'];
      $myQuery = "INSERT INTO entries VALUES('$name', '$email', '$phone', '$choice')";
      $runQuery= mysqli_query($connect, $myQuery);
      echo "
        <script> alert('Registered Successfully'); </script>
      ";
    }
    // if($connect==true){
    //     echo "connected";
    // }else{
    //    echo" not connected";
    // };

    $query = "SELECT COUNT(*) AS count FROM entries";
    $query_result = mysqli_query($connect, $query);
    while($row = mysqli_fetch_assoc($query_result)){
      $output = $row['count'];
    }

  ?>

  <div class = "main">
  <!-- <section class = "navigation" id=bettelnav>
    <nav class="navbar navbar-expand-lg fixed-top" aria-label="Eighth navbar example">
      <div class="container">
        <a class="navbar-brand" href="#herobanner"><img src = "./assets/img/logo.png" style = "width: 150px; height: auto; transition: width 1s, height 3s;" id="Logo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item active">
            <a class="nav-link nav-list-item" href="#bet">Bet</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link nav-list-item" href="#waypoint">Working</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link nav-list-item" href="#salient-features">Features</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link nav-list-item" href="#HowTo">FAQs</a>
          </li>
        </ul>
        <div class="">
          <button class = "btn btn-round nav-btn" data-toggle="modal" data-target="#aboutus" style = "background: #B7298A; color: #fff; font-weight: 500; border-radius: 20px;">About Us</button>
        </div>
        <div class="">
          <button class = "btn btn-round nav-btn" data-toggle="modal" data-target="#form" style = "background: #B7298A; color: #fff; font-weight: 500; border-radius: 20px;">Contact Us</button>
        </div>
      </div>
    </nav>
  </section> -->
  <section class = "navigation" id=bettelnav>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark shadow-5-strong">
      <div class="container">
      <a class="navbar-brand" href="#herobanner"><img src = "./assets/img/logo.png" style = "width: 150px; height: auto; transition: width 1s, height 3s;" id="Logo"></a>
          <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button> -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-item nav-link active" href="#bet">Bet</a>
            <a class="nav-item nav-link active" href="#waypoint">Working</a>
            <a class="nav-item nav-link active" href="#salient-features">Features</a>
            <a class="nav-item nav-link active" href="#HowTo">FAQs</a>
          </div>
          <div class="">
            <button class = "btn btn-round nav-btn" data-toggle="modal" data-target="#aboutus" style = "background: #B7298A; color: #fff; font-weight: 500; border-radius: 20px; margin: 15px;">About Us</button>
          </div>
          <div class="">
            <button class = "btn btn-round nav-btn" data-toggle="modal" data-target="#form" style = "background: #B7298A; color: #fff; font-weight: 500; border-radius: 20px; margin: 15px;">Contact Us</button>
          </div>
        </div>
      </div>
    </nav>
  </section>
  


  <section id="herobanner"class = "hero" style = "padding: 250px 0;overflow: hidden">
    <div style = "position: relative">
      <div class = "container">
          <!-- <div class="alert alert-success" id="passwordsNoMatchRegister" role="alert">Message of the Alert</div> -->
        <div class = "row">
          <div class = "col-lg-6 col-md-8">
            <div class = "container">
              <div class = "heading text-white">
                <h1 class = "bwe" data-aos="fade-up" data-aos-delay="300" data-aos-duration = "800">BET, WIN, EARN</h1>
                <h1 class = "bwe1" data-aos="fade-up" data-aos-delay="500" data-aos-duration = "800">LIVE E-SPORTS CONTESTS</h1>
                <p class = "bwep" data-aos="fade-up" data-aos-delay="700" data-aos-duration = "1000" class = "int-p" style = "z-index: 2;position: relative">Register with your mail</p>
              </div>
              <div class = "d-flex">
                  <div>
                    <button class = "btn hero-btn" style = "width: 200px;background: #B7298A;border-radius: 30px;color: #fff;font-weight: 600;" data-toggle="modal" data-target="#form1">Register</button>
                  </div>
                  <div class = "px-3 hero-btn">
                    <a href = "./assets/splash.mp4" class = "glightbox "><i class = "fa fa-play-circle" style = "font-size: 40px;color: #fff;"></i></a>
                  </div>
              </div>
            </div>
          </div>
        </div> 
      </div>
      <div class = "mainBg-contents">
        <img src="./assets/img/Keyboard.png" class = "bg-img1 object object1">
        <img src="./assets/img/Joystick.png" class = "bg-img2 object object2">
        <img src="./assets/img/Mouse.png" class = "bg-img3 object object3">
        <img src="./assets/img/controller-right.png" class = "bg-img4">
      </div>
    </div>
  </section>

  <div id="loading"></div>

  <section id=bet>
    <div class = "container">
      <div class="row" style = "display: flex; justify-content: center;margin-top: -70px;">
          <div class="col-lg-12 col-md-12" style = "display: flex; justify-content: center;padding: 10px 0">
            
            <div class = "row" style = "display: flex; justify-content: center;background: #202020; width: 90%;padding: 20px 0">
               <div class="col-lg-4 col-md-4" style = "display: flex; justify-content: center;" data-aos="fade-up" data-aos-delay="500" data-aos-duration = "1000">
                <div class = "place my-3">
                  <div class = "d-flex">
                    <div class = "d-flex align-items-center justify-content-center">
                      <!-- <img src = "assets/img//Ellipse 8.png" style = "width: 100px; height: auto;"> -->
                      <lottie-player src="https://assets4.lottiefiles.com/packages/lf20_vttg4obf.json"  background="transparent"  speed="1"  style="width: 100px; height: 100px;"  loop autoplay></lottie-player>
                      <img src = "assets/img//Ellipse 8.png" class = "back-img" style = "width: 100px; height: auto;z-index:-1">
                    </div>
                    <div class = "d-flex align-items-center justify-content-center p-3">
                      <div>
                        <!-- <h1 class = "text-white">$86,290</h1> -->
                        <p style = "color: #fff; font-weight: 600;font-size: 25px;">Earn through<br /> betting</p>
                      </div>
                    </div>
                  </div>
              </div>
              </div>
              <div class="col-lg-4 col-md-4" style = "display: flex; justify-content: center;" data-aos="fade-up" data-aos-delay="800" data-aos-duration = "1000">
                  <div class = "place my-3">
                      <div class = "d-flex">
                        <div class = "d-flex align-items-center justify-content-center">
                          <!-- <img src = "assets/img//Ellipse 12.png" style = "width: 100px; height: auto;"> -->
                          <lottie-player src="https://assets8.lottiefiles.com/packages/lf20_a0ec8k0d.json"  background="transparent"  speed="1"  style="width: 100px; height: 100px;"  loop autoplay></lottie-player>
                          <img src = "assets/img//Ellipse 12.png" class = "back-img" style = "width: 100px; height: auto;z-index: -1">
                        </div>
                        <div class = "d-flex align-items-center justify-content-center p-3">
                          <div>
                            <!-- <h1 class = "text-white">2,344</h1> -->
                            <p style = "color: #fff; font-weight: 600;font-size: 25px;">Turn your<br /> cash into coupons</p>
                          </div>
                        </div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-4 col-md-4" style = "display: flex; justify-content: center;" data-aos="fade-up" data-aos-delay="1000" data-aos-duration = "1000">
                <div class = "place my-3">
                  <div class = "d-flex">
                    <div class = "d-flex align-items-center justify-content-center">
                      <img src = "assets/img//Ellipse 11.png" style = "width: 100px; height: auto;">
                      <img src = "assets/img//comm.png" class = "front-img updown">
                      <img src = "assets/img//Ellipse 11.png" class = "back-img" style = "width: 100px; height: auto;">
                    </div>
                    <div class = "d-flex align-items-center justify-content-center p-3">
                      <div>
                          <!-- <h1 class = "text-white"><?php echo $output; ?></h1> -->
                        <h1 class = "text-white">1000+</h1>
                        <p style = "color: #fff; font-weight: 600;font-size: 22px;">Registered Users</p>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
            </div>
          </div>    
        </div>
  </div>
  </section>

  <section class = "revolution" id="working">
    <div class = "container text-center">
      <p class = "p" data-aos="fade-up" data-aos-delay="500" data-aos-duration = "1000"></p>
      <h3 class = "h3 fonth" data-aos="fade-up" data-aos-delay="800" data-aos-duration = "1000">A REVOLUTION IN ONLINE GAMING</h3>

      <div class="services-section mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="500" data-aos-duration = "1000">
                    <div class="service-item ">
                        <div class = "d-flex justify-content-center">
                            <lottie-player src="https://assets9.lottiefiles.com/packages/lf20_d0qjgsyh.json" class = ""  background="transparent"  speed="1"  style="width: 120px; height: auto;margin-top: 20px;"  loop autoplay></lottie-player>
                        </div>
                        <h4>Peer-to-Peer</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="800" data-aos-duration = "1000">
                    <div class="service-item">
                    <div class = "d-flex justify-content-center">
                     <lottie-player src="https://assets3.lottiefiles.com/packages/lf20_4tg3fb79.json"  background="transparent"  speed="1"  style="width: 100px; height: auto;margin-top: -30px;"  loop autoplay></lottie-player>
                    </div>
                        <h4>No Limits</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="1000" data-aos-duration = "1000">
                    <div class="service-item">
                       <div class = "d-flex justify-content-center">
                       <lottie-player src="https://assets4.lottiefiles.com/packages/lf20_kndsasgl.json"  background="transparent"  speed="1"  style="width: 100px; height: auto;"  loop autoplay></lottie-player>
                       </div>
                        <h4>Decentralised</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="1200" data-aos-duration = "1000">
                  <div class="service-item">
                      <div class = "d-flex justify-content-center">
                          <lottie-player src="https://assets3.lottiefiles.com/packages/lf20_i9arxzcg.json"  background="transparent"  speed="1"  style="width: 150px; height: auto;"  loop autoplay></lottie-player>
                      </div>
                      <h4>Community Powered</h4>
                  </div>
              </div>
            </div>
        </div>
      </div>
    </div>
  </section>

  
  <section style = "padding: 50px 0;background: #4F2AA6;">
    <div class = "container" id = "waypoint" style = "position: relative;">
    <p class = "text-center text-white" data-aos="fade-up" data-aos-delay="500" data-aos-duration = "1000"></p>
    <h3 class = "text-center text-white fonth" data-aos="fade-up" data-aos-delay="800" data-aos-duration = "1000">HOW BETTING WORKS</h3>
    <!-- <p class = "text-center text-white" data-aos="fade-up" data-aos-delay="1000" data-aos-duration = "1000">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum exercitationem ducimus reiciendis similique officiis fugit, repudiandae quo nobis vero qui quod tenetur magnam, nostrum minus ex laudantium autem harum fuga!</p> -->
    <!-- <svg width="190" height="160" xmlns="http://www.w3.org/2000/svg">
      <path d="M 10 80 C 40 10, 65 10, 95 80, 120 150, 190 200" stroke="black" fill="transparent"/>
    </svg> -->
    
   <div class = "svg" style = "position: relative">
   <img src = "./assets/img/car1.png" class = "car" id = "target" />
   <svg style = "width: 100%;margin: 220px 0 150px 0" id = "demo-svg" viewBox="0 0 922 365" fill="none" xmlns="http://www.w3.org/2000/svg">
    <!-- <path d="M1.5 23.4998C5.16667 38.9998 16 58.4998 49.5 83.9998C76.8015 104.782 127 107.5 149.5 126C172 144.5 233.676 193.097 297 159C368.5 120.5 331.5 15.0094 398 3.49985C476 -10.0001 536.5 64.4998 546 126C555.5 187.5 524.5 251 539.5 299C554.5 347 659.5 373.5 704 360C748.5 346.5 824.5 292.093 824.5 250.5C824.5 200 805.5 134.5 818 88.4998C828 51.6998 897.167 25.1665 921 9.99982" stroke="white" stroke-width="3" stroke-dasharray="6 6"/> -->
    
    <path d="M1.5 23.4998C5.16667 38.9998 16 58.4998 49.5 83.9998C76.8015 104.782 127 107.5 149.5 126C172 144.5 233.676 193.097 297 159C368.5 120.5 331.5 15.0094 398 3.49985C476 -10.0001 536.5 64.4998 546 126C555.5 187.5 524.5 251 539.5 299C554.5 347 659.5 373.5 704 360C748.5 346.5 824.5 292.093 824.5 250.5C824.5 200 805.5 134.5 818 88.4998C828 51.6998 897.167 25.1665 921 9.99982" stroke="white" stroke-width="3" stroke-dasharray="6 6"/>
  
    </svg>
    </div>
      <div class = "point point1" id = "point1">
          <div class="numberCircle">1</div>
            <div class = "step step1">
                <h1>Step 1</h1>
                <p>Register with your email and name</p>
              </div>
          </div>
      <div class = "point point2" id = "point2">
          <div class="numberCircle">2</div>
            <div class = "step step2">
                <h1>Step 2</h1>
                <p>You will get notified about the launch of app and many more things related to app through mail</p>
              </div>
          </div>
      <div class = "point point3" id = "point3">
          <div class="numberCircle">3</div>
            <div class = "step step3">
                <h1>Step 3</h1>
                <p>Download the app and log in with your number and setup your profile</p>
              </div>
          </div>
      <div class = "point point4" id = "point4">
          <div class="numberCircle">4</div>
            <div class = "step step4">
                <h1>Step 4</h1>
                <p>Select a game and choose a stream to bet on</p>
              </div>
          </div>
      <div class = "point point5" id = "point5">
          <div class="numberCircle">5</div>
            <div class = "step step5">
                <h1>Step 5</h1>
                <p>Win from various streams using your gaming knowledge and skill</p>
              </div>
          </div>
      <div class = "point point6" id = "point6">
          <div class="numberCircle">6</div>
            <div class = "step step6">
                <h1>Step 6</h1>
                <p>Transfer the winning amount directly to your bank or convert them into coupons</p>
              </div>
          </div>
    </div>
    <div class = "timeline mt-5" data-aos="fade-up" data-aos-delay="500" data-aos-duration = "1000">
    <p class = "tp">Register with your email and name</p>
    <p class = "tp">You will get notified about the launch of app and many more things related to app through mail</p>
    <p class = "tp">Download the app and log in with your number and setup your profile</p>
    <p class = "tp">Select a game and choose a stream to bet on</p>
    <p class = "tp">Win from various streams using your gaming knowledge and skill </p>
    <p class = "tp">Transfer the winning amount directly to your bank or convert them into coupons</p>
      
    </div>

  </section>

  

  <section id="salient-features" style = "padding: 50px 0;">
    <div class = "row">
      <div class = "col-lg-6 col-md-12">
        <img src="./assets/img/controller-right.png" class = "img-fluid controller" data-aos="zoom-in" data-aos-delay="500" data-aos-duration = "200">
      </div>
      <div class = "col-lg-6 col-md-12 text-white">
        <div class = "container">
          <p data-aos="fade-up" data-aos-delay="500" data-aos-duration = "1000">  </p>
        <h1 class = "fonth" data-aos="fade-up" data-aos-delay="800" data-aos-duration = "1000">How BettelApp  Works</h1>
        <p data-aos="fade-up" data-aos-delay="1000" data-aos-duration = "1000">Betting is an activity of predicting sports results and placing a wager on the outcome</p>
        <div class="mt-5">
          <div class="d-flex align-items-center justify-content-center">
              <div class="row">
                  <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="1100" data-aos-duration = "1000">
                      <div class="service-item">
                        <div class = "d-flex justify-content-center">
                        <lottie-player src="https://assets1.lottiefiles.com/private_files/lf30_3anincg1.json"  background="transparent"  speed="1"  style="width: 100px; height: auto;"  loop autoplay></lottie-player>
                        </div>
                          <h4>Safety</h4>
                      </div>
                  </div>
                  <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="1200" data-aos-duration = "1000">
                      <div class="service-item">
                          <div class = "d-flex justify-content-center">
                          <lottie-player src="https://assets5.lottiefiles.com/packages/lf20_rwakowdk.json"  background="transparent"  speed="1"  style="width: 100px; height: auto;"  loop autoplay></lottie-player>
                          </div>
                          <h4>Transparency</h4>
                      </div>
                  </div>
                  <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="1000" data-aos-duration = "1000">
                      <div class="service-item">
                         <div class = "d-flex justify-content-center">
                         <lottie-player src="https://assets7.lottiefiles.com/packages/lf20_bei3yaim.json"  background="transparent"  speed="1"  style="width: 100px; height: auto;"  loop autoplay></lottie-player>
                         </div>
                         <h4>Player is the King</h4>
                      </div>
                  </div>
                  <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="1200" data-aos-duration = "1000">
                    <div class="service-item">
                        <div class = "d-flex justify-content-center">
                        <lottie-player src="https://assets8.lottiefiles.com/packages/lf20_nzkqggog.json"  background="transparent"  speed="1"  style="width: 100px; height: auto;"  loop autoplay></lottie-player>
                        </div>
                        <h4>Low Commisions</h4>
                    </div>
                </div>
              </div>
          </div>
        </div>
        </div>
      </div>
    </div> 
  </section>

  <section id="HowTo" style = "background: #282828; padding: 50px 0">
    <div class = "container">
      <h3 class = "text-white text-center fonth" data-aos="fade-up" data-aos-delay="500" data-aos-duration = "1000">FAQ<sub>s<sub></h3>
      <p class = "text-white text-center fonth" data-aos="fade-up" data-aos-delay="800" data-aos-duration = "1000">IF YOU HAVE QUESTIONS. WE HAVE ANSWERS</p>
      <!-- <p class = "text-white text-center" data-aos="fade-up" data-aos-delay="1000" data-aos-duration = "1000">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni ipsum distinctio dolores laudantium cumque impedit, eveniet beatae eaque ad aspernatur totam reiciendis nesciunt doloribus vero id, commodi amet tenetur deleniti.</p> -->
      <div class="accordion" id="accordionExample">
        <div class="card my-2 mt-5" data-aos="fade-up" data-aos-delay="500" data-aos-duration = "1000">
          <div class="card-header" id="headingOne">
            <h2 class="mb-0">
              <button class="btn accordion-button collapsed bg-transparent" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style = "font-weight: 700">
                   How to play on BettelApp ?
              </button>
            </h2>
          </div>

          <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
            <div class="card-body">
                <b>    
                 Log in with your mobile number to register on BettelApp , follow the instruction as you set up your profile and then start participating in various streams. Select a game which you are interested and select a stream , now use your skill , knowledge and bet on the streamers and earn. 
                </b>
            </div>
          </div>
        </div>
        <div class="card my-2" data-aos="fade-up" data-aos-delay="500" data-aos-duration = "1000">
          <div class="card-header" id="headingTwo">
            <h2 class="mb-0">
              <button class="btn accordion-button collapsed bg-transparent" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style = "font-weight: 700">
              Can I actually win on BettelApp ?
              </button>
            </h2>
          </div>
          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
            <div class="card-body">
                <b>
            Absolutely !! you can definately win on BettelApp by showing your gaming knowledge , we host different kind of cash contests, each with its own entry fee and prize money 
                </b>
            </div>
          </div>
        </div>
        <div class="card my-2" data-aos="fade-up" data-aos-delay="500" data-aos-duration = "1000">
          <div class="card-header" id="headingThree">
            <h2 class="mb-0">
              <button class="btn accordion-button collapsed bg-transparent" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style = "font-weight: 700">
              Is it safe to add money to BettelApp ?
              </button>
            </h2>
          </div>
          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
            <div class="card-body">
                <b>
                Adding money to your bettel account is both simple and safe . we have many different payments methods on BettelApp to make sure that money transfer is simple to the users. we also work hard to keep your data and personal details safe with us . and the best part is you can transfer your winning money directly into your account or can convert them into various coupons.
                </b>
            </div>
          </div>
        </div>
        <div class="card my-2" data-aos="fade-up" data-aos-delay="500" data-aos-duration = "1000">
          <div class="card-header" id="headingFour">
            <h2 class="mb-0">
              <button class="btn accordion-button collapsed bg-transparent" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour" style = "font-weight: 700">
              Can BettelApp be played outside of india ?
              </button>
            </h2>
          </div>
          <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
            <div class="card-body">
                <b>
            As per now we have restricted our game services to india , but we promise to expand our services outside of India as well.
                </b>
            </div>
          </div>
        </div>
        <div class="card my-2" data-aos="fade-up" data-aos-delay="500" data-aos-duration = "1000">
          <div class="card-header" id="headingFive">
            <h2 class="mb-0">
              <button class="btn accordion-button collapsed bg-transparent" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive" style = "font-weight: 700">
              When will the app launch ?
              </button>
            </h2>
          </div>
          <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
            <div class="card-body">
                <b>
            The BettelApp will be launched soon and users will be notified on the mail.
                </b>
            </div>
          </div>
        </div>
        <div class="card my-2" data-aos="fade-up" data-aos-delay="500" data-aos-duration = "1000">
          <div class="card-header" id="headingSix">
            <h2 class="mb-0">
              <button class="btn accordion-button collapsed bg-transparent" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix" style = "font-weight: 700">
              Is it safe to add money to BettelApp ?
              </button>
            </h2>
          </div>
          <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
            <div class="card-body">
                <b>
                Adding money to your bettel account is both simple and safe . we have many different payments methods on BettelApp to make sure that money transfer is simple to the users. we also work hard to keep your data and personal details safe with us . and the best part is you can transfer your winning money directly into your account or can convert them into various coupons.
                </b>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="form" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header border-bottom-0">
            <h5 class="modal-title text-center" id="exampleModalLabel">Contact Us</h5>
            <button type="button" class="close btn-dark" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form method = "POST">
            <div class="modal-body">
              <div class="form-group my-2">
                <label for="name" class = "mb-1">Name</label>
                <input type="text" name = "name" class="form-control" id="name" aria-describedby="name" placeholder="Enter Name" required>
              </div>
              <div class="form-group my-2">
                <label for="email" class = "mb-1">Email</label>
                <input type="email" name = "email" class="form-control" id="email" placeholder="Email" required>
              </div>
              <div class="form-group my-2">
                <label for="phone" class = "mb-1">Contact Number</label>
                <input type="tel" name = "contact" class="form-control" id="phone" placeholder="Enter Phone number" required>
              </div>
              <div class="form-group my-2">
                <label for="message" class = "mb-1">Message</label>
                <textarea name="message" class = "form-control" id="message" required></textarea>
              </div>
            </div>
            <div class="modal-footer border-top-0">
              <button type="submit" name = "submit" class="btn btn-dark w-100">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <div class="modal fade" id="aboutus" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header border-bottom-0">
            <h5 class="modal-title text-center" id="exampleModalLabel">About Us</h5>
            <button type="button" class="close btn-dark" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="container">
            <p>
            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem 
            aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
            Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores 
            eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, 
            consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam 
            quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, 
            nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse 
            quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="form1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content bg-dark">
          <div class="modal-header border-bottom-0">
            <h5 class="modal-title text-center text-white" id="exampleModalLabel">Register</h5>
            <button type="button" class="close btn-dark text-white" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form method = "POST">
            <div class="modal-body">
              <div class="form-group my-2">
                <label for="name" class = "mb-1 text-white">Name</label>
                <input type="text" name = "namee" class="form-control bg-dark" id="name" aria-describedby="name" placeholder="Enter Name" style = "color: #fff" required>
              </div>
              <div class="form-group my-2">
                <label for="email" class = "mb-1 text-white">Email</label>
                <input type="email" name = "emaill" class="form-control bg-dark" id="email" placeholder="Email" style = "color: #fff" required>
              </div>
              <div class="form-group my-2">
                <label for="phone" class = "mb-1 text-white">Contact Number</label>
                <input type="tel" name = "contactt" class="form-control bg-dark" id="phone" placeholder="Enter Phone number" style = "color: #fff" required>
              </div>
              <div class="form-group my-2">
                <label for="message" class = "mb-1 text-white">Your Favourite E-Sports Game</label>
                <select name = "choice" class = "form-control bg-dark"  style = "color: #fff" required>
                  <option value="" class = "text-capitalize">click to select</option>
                  <option value="pubg" class = "text-capitalize">Pubg</option>
                  <option value="gareena free fire" class = "text-capitalize">gareena free fire</option>
                  <option value="valorant" class = "text-capitalize">valorant</option>
                  <option value="clash of clans" class = "text-capitalize">clash of clans</option>
                  <option value="clash royale" class = "text-capitalize">clash royale</option>
                  <option value="apex legends" class = "text-capitalize">Apex legends</option>
                  <option value="counter strike" class = "text-capitalize">counter strike</option>
                  <option value="fortnite" class = "text-capitalize">fortnite</option>
                  <option value="pubg pc" class = "text-capitalize">pubg pc</option>
                  <option value="dota" class = "text-capitalize">DotA</option>
                  <option value="call of duty" class = "text-capitalize">call of duty</option>
                </select>
              </div>
            </div>
            <div class="modal-footer border-top-0">
              <button type="submit" name = "enter" class="btn w-100" style = "background: #B7298A;border-radius: 30px;color: #fff; font-weight: 500">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    
  </section>

  <footer style = "padding: 100px 0;">
    <div class = "container">
      <div class = "row">
        <div class = "col-lg-8 col-md-8">
          <h1 style = "color: #Fff" data-aos="fade-up" data-aos-delay="500" data-aos-duration = "1000"><img src = "./assets/img/logo.png" style = "width: 200px; height: auto;"></h1>
          <div data-aos="fade-right" data-aos-delay="800" data-aos-duration = "400">
            <p class = "text-white">Call us on <a href="tel:9630982128" style = "color: purple; text-decoration: none">9630982128</a></p>
            <p class = "text-white">Mail us on <a href="mailto:support@bettel.in" style = "color: purple; text-decoration: none">support@bettel.in</a></p>
            <p class="text-white">View our <a href="" style="color: purple; text-decoration: none;">T&C</a></p>
          </div>
        </div>
        <div class = "col-lg-4 col-md-4">
          <div class = "d-flex">
            
          <p class = "text-white nav-list-item" data-aos="fade-right" data-aos-delay="800" data-aos-duration = "1000" style="margin-left: 6px;">Follow Us</p>
          
          </div>
          <div class = "d-flex">
          <div class = "social mx-1" style = "background: #fff; border-radius: 50%;padding: 10px 12px 10px 12px" data-aos="fade-right" data-aos-delay="950" data-aos-duration = "400">
            <a href = "https://instagram.com/bettelapp?igshid=YmMyMTA2M2Y=" target = "_blank" style = "color: #000;"><i class = "fa fa-instagram"></i></a>
          </div>
            <div class = "social mx-1" style = "background: #fff; border-radius: 50%;padding: 10px 12px 10px 12px" data-aos="fade-right" data-aos-delay="1000" data-aos-duration = "400">
              <a href = "https://www.linkedin.com/company/bettelapp/" target = "_blank" style = "color: #000;"><i class = "fa fa-linkedin"></i></a>
            </div>
            <div class = "social mx-1" style = "background: #fff; border-radius: 50%;padding: 10px 12px 10px 12px" data-aos="fade-right" data-aos-delay="900" data-aos-duration = "400">
              <a href = "https://twitter.com/BettelApp?t=oLv2XLcPuPOPjtgbRho2rg&s=08" target = "_blank" style = "color: #000;"><i class = "fa fa-twitter"></i></a>
            </div>
              <div class = "social mx-1" style = "background: #fff; border-radius: 50%;padding: 10px 12px 10px 12px" data-aos="fade-right" data-aos-delay="850" data-aos-duration = "400">
                <a href = "https://www.facebook.com/search/top?q=bettelapp" target = "_blank" style = "color: #000;">
                    <i class="fa fa-facebook"></i>
                    <!--<img src = "./assets/img/telegram.png" style = "width:22px; height: auto" />-->
                    
                    </a>
              </div>
          </div>
        </div>
        
      </div>
    </div>
  </footer>
</div>


<script>
    $('#myModal').on('shown.bs.modal', function () {
      $('#myInput').trigger('focus')
    })
    AOS.init();
  </script>
  <script>
      let path = anime.path('#demo-svg path');
    </script>
    <script src="./assets/js/main.js"></script>
    <script>
          if ( window.history.replaceState ) {
            window.history.replaceState( null, null, window.location.href );
          }
</script>
<script>
 const glightbox = GLightbox({
    selector: '.glightbox'
  });

  function onReady(callback) {
    var intervalId = window.setInterval(function() {
      if (document.getElementsByTagName('body')[0] !== undefined) {
        window.clearInterval(intervalId);
        callback.call(this);
      }
    }, 1000);
  }

  function setVisible(selector, visible) {
    document.querySelector(selector).style.display = visible ? 'block' : 'none';
  }

  onReady(function() {
    setVisible('.main', true);
    setVisible('#loading', false);
  });

  $(window).scroll(function () {
    if ($(window).scrollTop() >= 50) {
    $('.navbar').css('background','#121212');
    } else {
    $('.navbar').css('background','transparent');
    }
  });
</script>
</body>
</html>