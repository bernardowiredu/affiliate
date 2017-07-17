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
     <link href="../public/css/bootstrap.css" rel="stylesheet">


    <!-- Custom styles for this template -->
     <link href="../public/css/navbar.css" rel="stylesheet">
     <link href="../public/css/sticky-footer-navbar.css" rel="stylesheet">
     <link href="../public/css/breakingNews.css" rel="stylesheet">
     <link href="../public/css/signin.css" rel="stylesheet">
    <link href="../public/css/waitMe.css" rel="stylesheet">
     <link href="../public/css/animations.css" rel="stylesheet">
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
  <div class="css3-shadow">

 
  <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
           <a class="navbar-brand" href="{{URL::to('/')}}"><!-- <i class="glyphicon glyphicon-phone yellow"></i> -->iunlock<span class="yellow">Gh</span></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
              <li><a href="#"><i class="glyphicon glyphicon-user small"></i> login</a></li>
            <li><a href="#"><i class="glyphicon glyphicon-user small"></i> Register</a></li>
          </ul>
        </div>
      </div>
    </nav>
   

    @yield('content')



    <br><br><br>

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
    <script src="../public/js/jQuery.js"></script>
    <script src="../public/js/bootstrap.min.js"></script> 
    <script src="../public/js/vendor/holder.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>  
    <script src="../public/js/jquery-1.8.2.min.js"></script>
    <script src="../public/js/jquery.breaking.js"></script>
    <script src="../public/js/bootstrap-tooltip.js"></script>
    <script src="../public/js/waitMe.js"></script>
    <script src="../public/js/css3-animate.js"></script>
     <script src="../public/js/jquery-2.1.3.min.js"></script>
     <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src='js/css3-animate-it.js'></script>

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


     $('#exampleInputEmail1').tooltip( 'please enter your username' );
     $('#email').tooltip( 'please enter a valid email address' );


    </script>


 
</body>
</html>