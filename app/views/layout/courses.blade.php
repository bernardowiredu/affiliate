<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>StudyMalayisa-home</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link href="../public/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="../public/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
  

  <nav class="white" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="{{URL::to('/')}}" class="brand-logo bold"><img class="responsive-img" src="../public/images/ogo_1.png" width="300" height="40"></a>
      <ul class="right hide-on-med-and-down">
         <li><a href="{{URL::to('masters')}}">Masters</a></li>
        <li><a href="{{URL::to('undergraduate')}}">Undergraduates</a></li>
        <li><a href="{{URL::to('diploma')}}">Diploma</a></li>
        <li><a href="{{URL::to('contact_us')}}">Contact Us</a></li>
         <li><a href="{{URL::to('apply')}}">How to Apply </a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav z-depth-3">
        <li><a href="{{URL::to('masters')}}">Masters</a></li>
        <li><a href="{{URL::to('undergraduate')}}">Undergraduates</a></li>
        <li><a href="{{URL::to('diploma')}}">Diploma</a></li>
        <li><a href="{{URL::to('contact_us')}}">Contact Us</a></li>
         <li><a href="{{URL::to('apply')}}">How to Apply </a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>
  <nav class="blue darken-1" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="#" class="brand-logo light center"> @yield('name')</a>
      <ul id="nav-mobile" class="side-nav">
        <li><a href="#">Navbar Link</a></li>
      </ul>
    </div>
  </nav>


  
   <div class="container ">
    <div class="section">


             @yield('header')
   

    <div class="divider"></div>
    <br>
      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m6">
          <div class="icon-block">
              
              @yield('content')
            
          </div>
        </div>
         <div class="col s12 m6">
          <div class="icon-block">
            
                 @yield('information')
            
          </div>
        </div>
      </div>

    </div>
  </div>

  

  <footer class="page-footer blue darken-14">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">GraduateMalaysia</h5>
          <p class="grey-text text-lighten-4"> We are a group Alumni of APU but currently residing in malaysia seeking to help people all around the globe to get entry to this amazing univeristy of ours without stress</p>

        </div>

        <div class="col l3 s12">
          <h5 class="white-text">Contacts</h5>
          <ul>
            <li><a class="white-text" href="#!"> <i class="tiny material-icons"> call </i> +601153371272</a></li>
            <li><a class="white-text" href="#!">  <i class="tiny material-icons"> email </i>  graduatemalaysia@gmail.com</a></li>
            <li><a class="white-text" href="#!">  <i class="tiny material-icons"> videocam </i>  graduate@malaysia</a></li>
            <li><a class="white-text" href="#!">  <i class="tiny material-icons"> face </i>  graduateMalaysia</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Address</h5>
          <ul>
            <li><a class="white-text" href="#!"> South City Plaza, Seri Kembangan 43300, Selangor, Kuala Lumpur, Malaysia</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Made by <a class="brown-text text-lighten-3" href="#"> GraduateMalaysia @ Copyright 2017 </a>
      </div>
    </div>
  </footer>

  <!-- Tawk online chat plugin -->

    <script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/54b86296eebdcbe3571ef146/default';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
    
<!--End of Tawk.to Script-->

  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="../public/js/materialize.js"></script>
  <script src="../public/js/init.js"></script>
  <script>
    
     $(document).ready(function(){
      $('.scrollspy').scrollSpy();
      });

  </script>
   <script>
    $('.tap-target').tapTarget('open');
  </script>
  <script>
    
    $(document).ready(function(){
    $('.collapsible').collapsible();
  });
      
  </script>
  <script> 
  $('.carousel.carousel-slider').carousel({
    fullWidth: true
  });
  </script>
    
  </body>
  </html>