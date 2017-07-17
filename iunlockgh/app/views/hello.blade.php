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

    <title>Navbar Template for Bootstrap</title>

    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.0/animate.min.css">

    <!-- Bootstrap core CSS -->
     <link href="../public/css/bootstrap.css" rel="stylesheet">
     <link href="../public/css/popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
     <link href="../public/css/navbar.css" rel="stylesheet">
     <link href="../public/css/sticky-footer-navbar.css" rel="stylesheet">
      <link href="../public/css/carouseller.css" rel="stylesheet">
       <link href="../public/css/breakingNews.css" rel="stylesheet">
       <link href="../public/css/font-awesome.css" rel="stylesheet">
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

  <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

    <div class="container ">

      <!-- Static navbar -->
      <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
           <a class="navbar-brand" href="{{URL::to('/')}}"><!-- <i class="glyphicon glyphicon-phone yellow"> --></i>iunlock<span class="yellow">Gh</span></a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <!-- <li class=""><a href="#">Home</a></li> -->
              <li><a href="#">Imei Checker</a></li>
              <li><a href="#">Checkmend</a></li>
               <li><a href="#">Request Unlock</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Help <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">FAQs</a></li>
                  <li><a href="#">Check Order Status</a></li>
                  <li><a href="#">Unlocking Guide</a></li>
                  <li><a href="#">Blog</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Contact Us</a></li>
                  </ul>
              </li>

              <li><a href=""><input type="text" class="search-query" data-provide="typeahead"  name="keyword" autofocus placeholder="Click here to Search for your model eg. iPhone5"></a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
              <li class=""><a href="./">Balance: GH₵23 <span class="sr-only">(current)</span></a></li>
           <li><a href="../navbar-static-top/"><img src="../public/img/Ghana.png" width="40" height="25"></a></li>
            @if(!Auth::check())
              <li><a href="../navbar-fixed-top/"</a>Sign in | create account</li>
            @else
             <li><a href="{{URL::to('signout')}}"</a>Logged in as {{Auth::user()->username}}</li>
            </ul>
            @endif
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>

        <!--   *********widget********************************* -->
        <!-- Go to www.addthis.com/dashboard to customize your tools -->
       <!--  <div class="addthis_native_toolbox"></div> -->
       <br><br><p></p>
       <div id="call1" class="well well-sm me">
       <div class="row">
       <ul class="nav">
        <div class="col-sm-1 col-md-1">
        <li><a class="txt" href="{{URL::to('products/2')}}">Samsung</a></li>
        </div>
       <div class="col-sm-1 col-md-1 line2">
        <li><a class="txt" href="{{URL::to('products/3')}}"><i class="glyphicon glyphicon-phone red"></i> HTC</a></li>
        </div>
        <div class="col-sm-1 col-md-1 line2">
        <li><a class="txt" href="{{URL::to('products/1')}}"><i class="fa fa-apple yellow"></i> Apple</a></li>
        </div>
        <div class="col-sm-1 col-md-1 line2">
        <li><a class="txt" href="{{URL::to('products/4')}}">Blackberry</a></li>
        </div>
        <div class="col-sm-1 col-md-1 line2">
        <li><a class="txt" href="{{URL::to('products/7')}}"> <i class="glyphicon glyphicon-phone blue"></i> ZTE</a></li>
        </div>
        <div class="col-sm-1 col-md-1 line2">
        <li><a class="txt" href="{{URL::to('products/9')}}">Motorola</a></li>
        </div>
        <div class="col-sm-1 col-md-1 line2">
        <li><a class="txt" href="{{URL::to('products/10')}}"><i class="glyphicon glyphicon-phone green"></i> Huawei</a></li>
        </div>
          <div class="col-sm-1 col-md-1 line2">
        <li><a class="txt" href="{{URL::to('products/5')}}"><i class="glyphicon glyphicon-phone red"></i> Nokia</a></li>
        </div>
          <div class="col-sm-1 col-md-1 line2">
        <li><a class="txt" href="{{URL::to('products/6')}}"><i class="glyphicon glyphicon-phone blue"></i> LG</a></li>
        </div>
          <div class="col-sm-1 col-md-1 line2">
        <li>
         <li><a class="txt" href="{{URL::to('products/8')}}"><i class="glyphicon glyphicon-phone yellow"></i>Sony</a></li>
            <!-- Contact helpline on <i class="glyphicon glyphicon-earphone yellow"></i> 0244049419 -->
         </li>
        </div>
        <div class="col-sm-1 col-md-2">
        <li>
         <li>
            Contact <i class="glyphicon glyphicon-phone-alt blue"></i> 0244049419
         </li>
        </div>
        </ul>
        </div>
        </div>



      <!-- Main component for a primary marketing message or call to action -->
      <div class="well">
       <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		  <!-- Indicators -->
		  <ol class="carousel-indicators">
		    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
		    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
		    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
		  </ol>

		  <!-- Wrapper for slides -->
		  <div class="carousel-inner" role="listbox">
		    <div   class="item">
          <div class="col-xs-9 col-md-10">
          <img  id="demo5" src="../public/img/cut.png" alt="logo" width="500" height="415">
          <div class="contenthover">
           <h1 class="text-center"><b>Galaxy Note 4</b></h1>
           <h3 class="text-center"><b>FASTEST unlocking - 100% Guaranteed</b></h3></div>
          </div>
          <div class="col-xs-9 col-md-8 pull-right push-down">
           <div class="carousel-caption">
		        <div class="jumbotron">
            <div class="animatedParent">
             <!-- <img  class="animated bounceIn" src="../public/img/lock.png"> -->
            <img  class="animated bounceIn" src="../public/img/anyunlock.png" alt="logo" width="320" height="160">
            </div>
            <p></p>
            <a class="btn btn-primary btn-lg btn-block" href="#" role="button"><i class="fa fa-unlock"></i>  Free your iPhone's now!!! &raquo;</a>
               <!-- <h3>Unlock at the comfort of your home</h3> -->
        </div>
        
		      </div>
          </div>
         </div>
		    <div class="item active">
		      <img id="demo6" class="push-3x" src="../public/img/s6-Edge.png" alt="pic">
		      <div class="col-xs-11 col-md-10 pull-right push-down">
           <div class="carousel-caption">
            <div class="jumbotron">
          <!--   <img  id="demo6" src="../public/img/lock.png" alt="logo"> -->
               <h1 id="selector2">Locked Phone?</h1>
                  <div class="animatedParent">
                 Well say goodbye to restrictions and start using any network! 
                  <p>Unlock your phone at the comfort of your home</p>
                </div>
           <a class="btn btn-primary btn-lg btn-block blue" href="#" role="button"><i class="fa fa-unlock"></i> Free all your samsung devices now!!!</a>
        </div>
          </div>
          </div>
		    </div>
		    <div class="item mf">
        <img src="../public/img/hands.png" alt="pic"  width="400" height="400" >
         <div class="col-xs-11 col-md-10 pull-right push-down-sm">
		      <div class="carousel-caption">

		      <div class="col-xs-3 col-md-4">
          <img src="../public/brands/nokia-logo.png" width="150" height="100">
          </div>
           <div class="col-xs-3 col-md-4">
          <img src="../public/brands/2l8u.png" width="150" height="100">
          </div>
           <div class="col-xs-3 col-md-4">
            <img src="../public/brands/motorola-logo.png" width="150" height="100">
          </div>
          <p></p>
          <div class="col-xs-3 col-md-4">
          <img src="../public/brands/blackberry.png" width="125" height="100">
          </div>
           <div class="col-xs-3 col-md-4">
          <img src="../public/brands/huawei.png" width="120" height="100">
          </div>
           <div class="col-xs-3 col-md-4">
            <img src="../public/brands/Logo-1900x700_c.png" width="120" height="100">
          </div>
          <p></p>
          <div class="col-xs-3 col-md-4">
          <img src="../public/brands/Sony_Corporation-logo.png" width="150" height="100">
          </div>
           <div class="col-xs-3 col-md-4">
          <img src="../public/brands/Apple-Logo-rainbow.png" width="150" height="100">
          </div>
           <div class="col-xs-3 col-md-4">
            <img src="../public/brands/zte-logo.png" width="130" height="100">
          </div>
          <div class="animatedParent" data-sequence="500">
           <h4 class="animated bounceIn" data-id="1">Unlock all these phone brands at the comfort of your home!!!</h4>
           </div>
		      </div>
		    </div>
		    <!-- <div class="item">
		      <img src="../public/img/bb.png" alt="pic" width="300" height="300">
		      <div class="carousel-caption">
		        ...
		      </div>
		    </div> -->
		   
		  </div>
      </div>
		  <!-- Controls -->
		  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
		    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
		    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>

    </div> <!-- /container -->

  <div class="well well-sm  mb hidden-xs"><h4 class="yellow"><div class="feed-2"></div></h4></div>
   
   <div class="row">
    <div class="col-sm-6 col-md-3">
    <div class="thumbnail">
      <img class="pull-right" src="img/iphone-66.jpg" alt="product" width="140" height="160">
        <div class="caption">
        <h4><strong>iPhone 6 plus unlock</strong></h4>
        <p>Alerts don't have default classes, only base and modifier classes. A default gray alert doesn't make too much sense</p>
       <p class="">Supported devices: <span class="yellow"><b>iPhone 4/4S/5/5C/5S/6/6+</b></span></p>
         <p class="">Delivery Time: <span class="yellow"><b>1-7days</b></span></p>
        <p><a href="#" class="btn btn-success" role="button"><i class="fa fa-unlock"></i> <b>Unlock Phone at GH₵ 150.00</b></a></p>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-3">
    <div class="thumbnail">

      <img class="pull-right" src="img/iphone-64.jpg" alt="product" width="140" height="160">
      <div class="caption">
        <h4><strong>iPhone 6 plus unlock</strong></h4>
        <p>Alerts don't have default classes, only base and modifier classes. A default gray alert doesn't make too much sense</p>
        <p class="">Supported devices: <span class="yellow"><b>iPhone 4/4S/5/5C/5S/6/6+</b></span></p>
         <p class="">Delivery Time: <span class="yellow"><b>1-7days</b></span></p>
        <p><a href="#" class="btn btn-success" role="button"><i class="fa fa-unlock"></i> <b>Unlock Phone at GH₵ 50.00</b></a></p>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-3">
    <div class="thumbnail">
      <img class="pull-right" src="img/iphone-72.jpg" alt="product" width="140" height="160">
      <div class="caption">
        <h4><strong>iPhone 6 plus unlock</strong></h4>
        <p>Alerts don't have default classes, only base and modifier classes. A default gray alert doesn't make too much sense</p>
         <p class="">Supported devices: <span class="yellow"><b>iPhone 4/4S/5/5C/5S/6/6+</b></span></p>
         <p class="">Delivery Time: <span class="yellow"><b>1-7days</b></span></p>
        <p><a href="#" class="btn btn-success" role="button"><i class="fa fa-unlock"></i> <b>Unlock Phone at GH₵ 110.00</b></a></p>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-3">
    <div class="thumbnail">
      <img class="pull-right" src="img/iphone-56.jpg" alt="product" width="140" height="160">
      <div class="caption">
       <h4><strong>iPhone 6 plus unlock</strong></h4>
        <p>Alerts don't have default classes, only base and modifier classes. A default gray alert doesn't make too much sense</p>
         <p class="">Supported devices: <span class="yellow"><b>iPhone 4/4S/5/5C/5S/6/6+</b></span></p>
         <p class="">Delivery Time: <span class="yellow"><b>1-7days</b></span></p>
        <p><a href="#" class="btn btn-success" role="button"><i class="fa fa-unlock"></i> <b>Unlock Phone at GH₵ 230.00</b></a></p>
      </div>
    </div>
  </div>
</div>
<br><br>
<div class="well well-sm mb"><h4 class="yellow"><i class="glyphicon glyphicon-thumbs-up"></i> <i>Our services</i> </h4></div>
<div class="nav"><!-- blk -->
  <div class="col-sm-6 col-md-9">
    <!-- <img src="../public/img/home.png"> -->

  <h4 class="yellow txt-shadow"><img src="../public/img/phone1.png" class="hidden-xs" alt="pic" width="70" height="70" > <b><i>Free your phone from your network with our Unlock Codes and use any GSM Sim Card!</i></b></h4>
  <p class="push">Planning on traveling and need to put a local SIM card into your Phone? Want to change carriers but keep your phone? 
   You may need to unlock your phone in order to use a different SIM card. You've certainly come to the right place!</p>

    <h4 class="yellow txt-shadow"><img src="../public/img/time_machine.png"  class="hidden-xs" alt="pic" width="70" height="70" ><b><i> Phone Unlock Code Processed & Emailed - 24 hrs a day - 7 days a week</i></b></h4>
   <p class="push">Our automated website will process your order and send your phone unlocking code via email, 
   guarantying Faster Results and 100% Customer Services Satisfaction.</p>

    <h4 class="yellow txt-shadow"><img src="../public/img/earth.png"  class="hidden-xs" alt="pic" width="65" height="65" ><b><i> We can Unlock 99% of the GSM Networks</i></b></h4>
   <p class="push">At iunlockGh we can unlock most of the GSM Networks around the world. If you are trying to unlock a phone in Europe, America, Asia, Australia and over 190 Countries in the World, give us the challenge and you won't regret. We count with the largest database of unique Unlock Codes and Unlocking solutions in Earth.
    We can even unlock the phones which Service Providers claim cannot be unlocked</p>

     <h4 class="yellow txt-shadow"><img src="../public/img/unlock.png"  class="hidden-xs" alt="pic" width="70" height="70" ><b><i>We offer the LOWEST COST & QUICKEST TURNAROUND on every order.</i></b></h4>
    <p class="push">We provide your personal unlock codes and easy to follow instructions. Still wondering about how to unlock your mobile? Chillax! Our World Class Customer Support Team is available to guide you through the process via Chat, 
    Skype or E-mail from Mon to Fri 10.00 to 20.00 hrs GMT.</p>

     <h4 class="yellow txt-shadow"><img src="../public/img/microphone.png"  class="hidden-xs" alt="pic" width="70" height="70" ><b><i>Do you provide unlocking services and you need lots of codes?</i></b></h4>
    <p class="push">We are here to help you! We can offer you wholesale pricing and the best delivery time. We are on your side and we understand that having the best price is this business is essential, 
    so please get in touch with us and let us know your needs.</p>

    <br>
    <div class="well well-sm mb">
    <h4 class="yellow"><i class="glyphicon glyphicon-thumbs-up"></i><i> This Week Most Popular Unlocked Brands</i></h4>
    </div>
    <div class="carouseller row-fluid for-car">
      <div class="carousel-wrapper">
        <div class="carousel-items">
          <div class="span3 carousel-block">
              <h2 class="nrml">iPhone 5s</h2>
              <img id="demo" src="img/iph.png" alt="product" width="180" height="180">
               <div class="contenthover">
                 45 Phones unlocked
                </div>
              <p class="smll">This is a message holder template for our complete site</p>
               <center><img src="../public/img/5stars.png"></center>
              <button class="btn btn-success"><i class="fa fa-unlock"></i> <b>Unlock Phone</b></button>
          </div>

        <div class="span3 carousel-block">
          <h2 class="nrml">blackberry</h2>
          <img id="demo1" src="img/bb.png" alt="product" width="170" height="180">
           <div class="contenthover">
             14 Phones Unlocked
            </div>
           <p class="smll">This is a message holder template for our complete site</p>
            <center><img src="../public/img/5stars.png"></center>
              <button class="btn btn-success"><i class="fa fa-unlock"></i> <b>Unlock Phone</b></button>
        </div>

        <div class="span3 carousel-block">
        <h2 class="nrml">Samsung</h2>
         <img id="demo2" src="img/sa2.png" alt="product" width="170" height="180">
          <div class="contenthover">
            14 Phones unlocked
            </div>
          <p class="smll">This is a message holder template for our complete site</p>
           <center><img src="../public/img/5stars.png"></center>
              <button class="btn btn-success"><i class="fa fa-unlock"></i> <b>Unlock Phone</b></button>
        </div>

        <div class="span3 carousel-block">
          <h2 class="nrml">HTC</h2>
           <img id="demo3" src="img/htc.png" alt="product" width="180" height="180">
           <div class="contenthover">
             14 Phones unlocked
            </div>
            <p class="smll">This is a message holder template for our complete site</p>
             <center><img src="../public/img/5stars.png"></center>
              <button class="btn btn-success"><i class="fa fa-unlock"></i> <b>Unlock Phone</b></button>
        </div>

        <div class="span3 carousel-block">
        <h2 class="nrml">5 item</h2>
         <img id="demo4" src="img/iphonecase4.png" alt="product" width="180" height="180">
         <div class="contenthover">
           14 Phones unlocked
          </div>
          <p class="smll">This is a message holder template for our complete site</p>
          <center><img src="../public/img/5stars.png"></center>
          <button class="btn btn-success"><i class="fa fa-unlock"></i> <b>Unlock Phone</b></button>
        </div>

        <div class="span3 carousel-block">
          <h2>6 item</h2>

        </div>

        <div class="span3 carousel-block">
          <h2>7 item</h2>
        </div>

      </div>

    </div>

    <div class="carousel-control-block">

      <div class="carousel-button-left shadow"><a href="javascript:void(0)">‹</a></div>

      <div class="carousel-button-right shadow"><a href="javascript:void(0)">›</a></div>

    </div>

  </div>
   </div>  
   <div class="col-sm-6 col-md-3 cover">
   <h4 class="yellow"><b><i>Start unlocking here</i></b></h4>
   <select class="form-control" name="manufacturer">
   <option>Acatel</option>
   <option>Apple</option>
   <option>Azumi</option>
   <option>Blackberry</option>
   <option>Dell</option>
   <option>Doro</option>
   <option>Emporia</option>
   <option>Huawei</option>
   <option>HTC</option>
   <option>LG</option>
   <option>Microsoft</option>
   <option>Motorola</option>
   <option>Nokia</option>
   <option>Sony</option>
   <option>ZTE</option>
   </select>
   <p></p>
   <p>
      <label>Phone model<i class="text-danger"> **</i></label></label>
     <input type="text" class="form-control" placeholder="Enter Phone model">
   </p>
   <p>
    <label>Network Phone is locked to<i class="text-danger"> **</i></label></label>
     <input type="text" class="form-control" placeholder="Enter network phone is currently locked to">
   </p>
   <p>
    <label>IMEI number<i class="text-danger"> **</i></label>
     <input type="text" class="form-control" placeholder="Enter your IMEI number">
   </p>
   <p>
    <label>Phone number<i class="text-danger"> **</i></label></label>
     <input type="text" class="form-control" placeholder="Enter Phone number">
   </p>
   <p>
     <button class="btn btn-success"> Click to continue unlocking</button>
   </p>
   <br>
   <img src="img/mb2.png">
   <p>We ensure 100% money back guarantee for unlocking failure from our network or system</p>
   <br>
   <img src="img/iphone_check.png" width="220">
   <p><a class="yellow" href="">Click here to check phone status >></a></p>
   
    <img src="img/imeichecker.png" width="220">
   <p><a class="yellow" href="">Click here to check phone status >></a></p>
   <br>
   <p>
    <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-width="220" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>
   </p>
</div>
</div>  

<br><br>
<div class="well well-sm mb"><h4 class="yellow"><i class="glyphicon glyphicon-comment"></i><i> Testmonials</i>:- <i>what our customers say about us</i> <span class="pull-right hidden-xs" data-toggle="modal" data-target="#exampleModal"> <font family="Arial"><i>write a testimonal</i></font> <i class="glyphicon glyphicon-pencil mouse"></i></span></div></h4>


    <!-- ******************************************MODAL POPUP FOR REVIEWS OR COMMENTS********************************* -->

        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="exampleModalLabel">Write your testimonal@iunlockgh</h4>
            </div>
            <div class="modal-body">
              <form>
                <div class="form-group">
                  <label for="message-text" class="control-label">Message:</label>
                  <textarea class="form-control" cols="3" rows="6" id="message-text"></textarea>
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-success">Post Comments</button>
            </div>
          </div>
        </div>
      </div>


<!-- ******************************************************************************************************************* -->


    
     <div class="nav">
    <div class="panel panel-default">
    <div class="col-xs-6 col-md-3">
    <div class="panel-body">
      <i class="fa fa-quote-left blue"></i> Alerts don't have default classes, only base and modifier classes. A default gray alert doesn't make too much sense, so you're required to specify a type via contextual class. Choose from success, info, warning, or danger.
    </div>
    <div class="panel-footer yellow">Panel footer</div>
    </div>
    <div class="col-xs-6 col-md-3">
    <div class="panel-body">
     <i class="fa fa-quote-left blue"></i> Alerts don't have default classes, only base and modifier classes. A default gray alert doesn't make too much sense, so you're required to specify a type via contextual class. Choose from success, info, warning, or danger.
    </div>
    <div class="panel-footer yellow">Panel footer</div>
    </div>
    <div class="col-xs-6 col-md-3">
    <div class="panel-body">
      <i class="fa fa-quote-left blue"></i> Alerts don't have default classes, only base and modifier classes. A default gray alert doesn't make too much sense, so you're required to specify a type via contextual class. Choose from success, info, warning, or danger.
    </div>
    <div class="panel-footer  yellow">Panel footer</div>
    </div>
    <div class="col-xs-6 col-md-3">
    <div class="panel-body">
      <i class="fa fa-quote-left blue"></i> Alerts don't have default classes, only base and modifier classes. A default gray alert doesn't make too much sense, so you're required to specify a type via contextual class. Choose from success, info, warning, or danger.
    </div>
    <div class="panel-footer yellow">Panel footer</div>
    <br>
    </div>
    </div>
    
</div>
   
<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-54aa72200f04f9db" async="async"></script>

    
   <div class="nav">
    <div class="well well-sm ">
      <h4 class="yellow"><b><i>Popular Networks Unlocked</i></b></h4>
     </div>
    <div class="well well-sm mf ">
    <center><img src="../public/img/network.png" class="img-responsive" border="0"></center>
  </div>
  </div>

   

  <div class="nav">
  <div class="well well-md text-center">
  <h3><i class="glyphicon glyphicon-phone-alt blue"></i> For mobile helplines please contact <a class="yellow" href="#">0503214360</a> OR <a class="yellow" href="#">0244072639</a> OR <a class="yellow" href="#">0501366148</a>.<br> You can also email us at <a class="yellow" href="mailto:info.iulockgh@shop.com">info.iunlockgh.com</a></h3><br>
  </div>
  </div>

  <!-- <div class="na v">
    <div class="well  well-sm mb">
      <h4 class="yellow"><b><i>For PAYPAL AND BITCOIN Payments</i></b></h4>
    </div>
    <div class="well well-sm ">
      <div class="col-xs-3 col-md-3">
    <center><img src="../public/img/pypal.png" class="img-responsive" border="0" width="105" height="90"></center>
  </div>
    <div class="col-xs-3 col-md-3">
    <h4>send to kayappiah@gmail.com</h4>
    </div>
    <div class="col-xs-3 col-md-3">

    <center><img src="../public/img/bit3.png" class="img-responsive" border="0"></center>
  </div>
    <div class="col-xs-2 col-md-3">
    <h4>send to kayappiah@gmail.com</h4>
    </div>
  </div>
  </div> -->

  <div class="nav">
  <div class="well well-lg bgn">
      <div class="inline">
        <ul class="nav">
        <div class="col-xs-6 col-md-3">
        <li><a href=""><h4 class="yellow">About Us</h4></a></li>
          <ul class="nav">
            <li><i class="fa fa-home"></i> Home</li>
            <li> <i class="fa fa-user"></i> About Us</li>
          </ul>
         </div>
         <div class="col-xs-6 col-md-3">
        <li><a href=""><h4 class="yellow">Get support</h4></a></li>
          <ul class="nav">
            <li>FAQ</li>
            <li>Our Blog </li>
            <li>Contact Us</li>
            <li>How to make payment</li>
          </ul>
         </div>
         <div class="col-xs-6 col-md-3">
         <li><a href=""><h4 class="yellow">Follow us</h4></a></li>
          <ul class="nav">
              <!-- fa fa-facebook
              fa fa-google-plus
              fa fa-linkedin
              fa fa-twitter -->
            <li><i class="fa fa-facebook-square dark-blue"></i> Facebook</i></li> 
             <li><i class="fa fa-twitter-square blue"></i>  Twitter</li>
             <li><i class="fa fa-google-plus-square red"></i>  Google+</li>
            </ul>    
         </div>
         <div class="col-xs-6 col-md-3">
       <li><a href=""><h4 class="yellow">Supported payment methods</h4></a></li>
        <ul class="nav">
          <li><img class="img-reponsive" src="img/mtn.jpg" width="50" height="30"> Mtn mobile money</li><p></p>
          <li><img class="img-reponsive" src="img/airtel.jpg" width="50" height="40"> Airtel money</li><p></p>
          <li><img class="img-reponsive" src="img/Tigo-Cash-logo.jpg" width="50" height="40"> Tigo cash</li>
        </ul>
         </div>
         </ul>


      </div>
     
  </div>
  </div>

  <!-- <footer class="footer">
   <p class="text-muted">Copyright &copy; 2015 Cardsrex <a  data-toggle="modal" data-target=".bootstrapmodal" class="termsModal">Terms and conditions</a> 
  </footer>
 -->

 
   

    <div class="nav">
  <footer class="">
      <div class="inline">
        <p>Copyright &copy; 2013-2015 iunlockgh.com All rights reserved. <a  data-toggle="modal" data-target=".bootstrapmodal" class="termsModal">Terms and conditions</a>
        <i class="text-off"> | </i>
        <a href=""> How to buy</a>
        <ul class="nav">
       <a class="btn btn-sn btn-success pull-right" id="show-message"><i class=" glyphicon glyphicon-info-sign"></i> Payment Notice</a>
        </ul>
        </p>
      </div>
      </div>
    </footer>
    </div>

   
    <div class="hidden-xs" id="my-welcome-message">
    <h1>Payment Notice</h1>
    <p>Kindly check the various mobile accounts before making payment.</p>
    <p>Current MTN money number is 

      <h3 class="red"><b><img src="../public/img/mtn.png" class="responsive" width="80" height="40"> 0240479419</b></h3> and TIGO cash number is <h3 class="red"><b><img src="../public/img/Tigo-Cash-logo.jpg" class="responsive" width="80" height="40">0272439030</b></h3></p>
    <p>You can make payment into your iunlockgh Account for the purchase of any product and if paying directly without your account for any order make sure you make mobile transfer payment before confirming your order. 
    In making mobile transfer use your account Username as Reference ID.</p>

    <hr class="text-inverse">
    <p class="red">For payment in Paypal or Bitcoin email us directly: info.iunlockgh@gmail.com</p>
    </div>
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

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script> 
    <script src="../public/js/jquery-1.8.2.min.js"></script>
    <script src="../public/js/janimate.js"></script>
     <script src="../public/js/jSequence.js"></script>
    <script src="../public/js/css3-animate.js"></script>
    <script src="../public/js/jquery.contenthover.js"></script>
    <script src="../public/js/carouseller.min.js"></script>
     <script src="../public/js/jquery.firstVisitPopup.js"></script>  
    <script src="../public/js/jquery.breaking.js"></script>
  
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
    <script type="text/javascript">
    $(function () {
        $('#my-welcome-message').firstVisitPopup({
          cookieName : 'homepage',
          showAgainSelector: '#show-message'
        });
      });
      </script>

       <script type="text/javascript">
        carouseller = new carousel('.carouseller');
      </script>

      <script>
      $('#demo').contenthover({
      overlay_background:'#000',
      overlay_opacity:0.8
      });

      $('#demo1').contenthover({
      overlay_background:'#000',
      overlay_opacity:0.8
      });

      $('#demo2').contenthover({
      overlay_background:'#000',
      overlay_opacity:0.8
      });

      $('#demo2').contenthover({
      overlay_background:'#000',
      overlay_opacity:0.8
      });

      $('#demo3').contenthover({
      overlay_background:'#000',
      overlay_opacity:0.8
      });

      $('#demo4').contenthover({
      overlay_background:'#000',
      overlay_opacity:0.8
      });

      $('#demo5').contenthover({
      overlay_background:'#000',
      overlay_opacity:0.8,
      overlay_width:470,
      overlay_height:180,
      effect:'slide',
      slide_direction:'left',
      overlay_x_position:'left',
      overlay_y_position:'center'
     
     });


      $('#demo6').contenthover({
      overlay_background:'#000',
      overlay_opacity:0.8,
      overlay_width:470,
      overlay_height:180,
      effect:'slide',
      slide_direction:'left',
      overlay_x_position:'left',
      overlay_y_position:'center'
     
     });

     
      </script>
      <script type="text/javascript">
       
               // Animate elements with effect and call callback when finish.
        $('#selector').jAnimate(effect, callback);

        // Animate elements with effect and remove classes when finish, also call callback.
        $('#selector').jAnimateOnce(effect, callback);

        // Execute a sequence of animations passed in arrayOfEffects and call callback when finish all.
        $('#selector4').jAnimateSequence(['bounce', 'tada', 'wobble']);


      </script>

  </body>
</html>
