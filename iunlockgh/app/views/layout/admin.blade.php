<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title></title>

    <!-- Bootstrap core CSS -->
     <link href="../css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
     <link href="../css/navbar.css" rel="stylesheet">
     <link href="../css/sticky-footer-navbar.css" rel="stylesheet">
     <link href="../css/breakingNews.css" rel="stylesheet">
     <link href="../css/dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
  <div class="container">


  <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
           <a class="navbar-brand" href="{{URL::to('/')}}"><!-- <i class="glyphicon glyphicon-phone yellow"></i> -->Admin iunlock<span class="yellow">Gh</span></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
           <li><a href="#">You logged in as User1006</a></li>
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Settings</a></li>
           <li><a href="../navbar-static-top/"><img src="../public/img/Ghana.png" width="40" height="25"></a></li>
            <li><a href="#">Help</a></li>
          </ul>
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>
        </div>
      </div>
    </nav>

      <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
          <br>
            <li class="active"><a href="{{URL::to('admin/dashboard')}}"><i class="glyphicon glyphicon-dashboard yellow"></i> Dashboard <span class="sr-only">(current)</span></a></li>
            <li><a href="{{URL::to('admin/users')}}"><i class="glyphicon glyphicon-user yellow"></i> Registered users</a></li>
            <li><a href="{{URL::to('admin/messages')}}"><i class="glyphicon glyphicon-comment yellow"></i> Send Messages</a></li>
            <li><a href="{{URL::to('admin/order')}}"><i class="glyphicon glyphicon-folder-open yellow"></i> Order history</a></li>
            <li><a href="{{URL::to('admin/payments')}}"><i class="glyphicon glyphicon-credit-card yellow"></i> Payments</a></li>
            <li><a href="{{URL::to('admin/unlock')}}"><i class="glyphicon glyphicon-phone yellow"></i> Unlock request</a></li>
            <li><a href="{{URL::to('categorys')}}"><i class=" glyphicon glyphicon-search yellow"></i> Add products</a></li>
            <li><a href="{{URL::to('report')}}"><i class=" glyphicon glyphicon-send yellow"></i> Inbox</a></li>
            <li><a href="{{URL::to('FAQs')}}"><i class="glyphicon glyphicon-question-sign yellow"></i> FAQs</a></li>
          </ul>
          <br>
          </div>
        <div class="col-sm-9  col-md-10 main">
          <h2 class="page-header yellow">
          
          @yield('header')

          </h2>

          @yield('content')

        </div>
      </div>
      <br>
    </div>
  </div>
  
  <div class="container">
  <div class="well well-lg ">
  mobile rss feed form mobile.com
  </div>
  </div>
  <div class="container">
  <div class="well well-lg mb">
      <div class="inline">
        <ul class="nav">
        <div class="col-xs-6 col-md-3">
        <li><a href=""><h4>About Us</h4></a></li>
          <ul class="nav">
            <li>Home</li>
            <li>Free Unlock Code</li>
            <li>About Us</li>
          </ul>
         </div>
         <div class="col-xs-6 col-md-3">
        <li><a href=""><h4>Get support</h4></a></li>
          <ul class="nav">
            <li>FAQ</li>
            <li>Our Blog</li>
            <li>Call us on Skype</li>
            <li>Contact Us</li>
          </ul>
         </div>
         <div class="col-xs-6 col-md-3">
         <li><a href=""><h4>Follow us</h4></a></li>
          <ul class="nav">
            <li>Facebook</li> 
             <li>Twitter</li>
             <li>Google+</li>
            </ul>    
         </div>
         <div class="col-xs-6 col-md-3">
       <li><a href=""><h4>Supported payment methods</h4></a></li>
        <ul class="nav">
          <li><img class="img-reponsive" src="../img/mtn.jpg" width="50" height="30"> Mtn mobile money</li><p></p>
          <li><img class="img-reponsive" src="../img/airtel.jpg" width="50" height="40"> Airtel money</li><p></p>
          <li><img class="img-reponsive" src="../img/Tigo-Cash-logo.jpg" width="50" height="40"> Tigo cash</li>
        </ul>
         </div>
         </ul>


      </div>
     
  </div>
  </div>

  <div class="container">
     <footer class="footer">
      <div class="inline">
        <p>Copyright &copy; 2013-2015 iunlockgh.com <a  data-toggle="modal" data-target=".bootstrapmodal" class="termsModal">Terms and conditions</a>
        <i class="text-off"> | </i>
        <a href=""> How to buy</a>
        <ul class="nav">
        </ul>
        </p>
      </div>
      </div>
    </footer>
    </div>


<script type="text/javascript">
  var $_Tawk_API={},$_Tawk_LoadStart=new Date();
  (function(){
      var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
      s1.async=true;
      s1.src='https://embed.tawk.to/54b86851289aef4754422f80/default';
      s1.charset='UTF-8';
      s1.setAttribute('crossorigin','*');
      s0.parentNode.insertBefore(s1,s0);
  })();
</script>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Go to www.addthis.com/dashboard to customize your tools -->
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-54bfd49f46970d36" async="async"></script>

    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="../js/jQuery.js"></script>
    <script src="../js/bootstrap.min.js"></script> 
    <script src="../js/vendor/holder.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>  
    <script src="../js/jquery-1.8.2.min.js"></script>
    <script src="../js/jquery.breaking.js"></script>
  
    <script type="text/javascript">
     $('.feed-2').breakingNews({
        url: 'http://feeds.feedburner.com/mobileburn/news?format=xml',
        feedSize: {
            height: '30px',
            width: '900px'
        },
        numberToShow: 10,
        refresh: 2000,
        effect: 'tricker',
        effectDuration: 50,
        onComplete: function() {
            $(this).prepend('<div class="feed-title-2" />');
            $('.feed-title-2').html(arguments[0].responseData.feed.title);
        }
    });

    </script>


 
</body>
</html>