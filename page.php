<?php require("connect.php"); ?>

	



<!DOCTYPE html>
<html>
<head>
	<title>tester</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap.min.css">
  <script src="jquery.min.js"></script>
<script src="bootstrap.min.js"></script>
<style type="text/css">
	

body{
	height: ;
}

	.navbar{
		background-color:   #999900;
		padding:0px;
		margin:0px;
		border-color: transparent;

}
.navbar li a, .navbar  .navbar-brand{
	color:#fff !important;
}

.navbar li a:hover, .navbar:hover {
	color: #cccc00 !important;
}



	
.dropdown-menu{
	background-color: #999900;


}
	
 body {
      font: 400 15px Lato, sans-serif;
      line-height: 1.8;
      color: #818181;
  }
  h2 {
      font-size: 24px;
      text-transform: uppercase;
      color: #303030;
      font-weight: 600;
      margin-bottom: 30px;
  }
  h4 {
      font-size: 19px;
      line-height: 1.375em;
      color: #303030;
      font-weight: 400;
      margin-bottom: 30px;
  }  
  .jumbotron {
      background-color:   #999900;
      color: #fff;
      padding: 100px 25px;
      font-family: Montserrat, sans-serif;
  }
  .container-fluid {
      padding: 60px 50px;
  }
  .bg-grey {
      background-color: #f6f6f6;
  }
  .logo-small {
      color: #cccc00 !important;
      font-size: 50px;
  }
  .logo {
    color: #cccc00 !important;;
      font-size: 200px;
  }
  .thumbnail {
      padding: 0 0 15px 0;
      border: none;
      border-radius: 0;
  }
  .thumbnail img {
      width: 100%;
      height: 100%;
      margin-bottom: 10px;
  }
  .carousel-control.right, .carousel-control.left {
      background-image: none;
      color: #f4511e;
  }
  .carousel-indicators li {
      border-color: #f4511e;
  }
  .carousel-indicators li.active {
      background-color: #f4511e;
  }
  .item h4 {
      font-size: 19px;
      line-height: 1.375em;
      font-weight: 400;
      font-style: italic;
      margin: 70px 0;
  }
  .item span {
      font-style: normal;
  }
  .panel {
      border: 1px solid #f4511e; 
      border-radius:0 !important;
      transition: box-shadow 0.5s;
  }
  .panel:hover {
      box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  .panel-footer .btn:hover {
      border: 1px solid #f4511e;
      background-color: #fff !important;
      color: #f4511e;
  }
  .panel-heading {
      color: #fff !important;
      background-color: #f4511e !important;
      padding: 25px;
      border-bottom: 1px solid transparent;
      border-top-left-radius: 0px;
      border-top-right-radius: 0px;
      border-bottom-left-radius: 0px;
      border-bottom-right-radius: 0px;
  }
  .panel-footer {
      background-color: white !important;
  }
  .panel-footer h3 {
      font-size: 32px;
  }
  .panel-footer h4 {
      color: #aaa;
      font-size: 14px;
  }
  .panel-footer .btn {
      margin: 15px 0;
      background-color: #f4511e;
      color: #fff;
  }


.btn-danger{
	background-color: #cccc00 !important;
	border-color: transparent;

}

 .btn-info{
	cursor:pointer;
	background-color:#fff;
	color:#000;
	border:none;
	text-transform:uppercase;
	font-size:18px;
	text-align:center;
	padding:12px 18px;

	
}

 .btn-info:hover{
	background-color: #cccc00 !important;;
	color:white;
	border-radius:90px;
	border:none;
	transition:ease-in all 0.5s;

}

.modal-header,  .close {
      background-color: #333;
      color: #fff !important;
      text-align: center;
      font-size: 30px;
  }
  .modal-header, .modal-body {
      padding: 40px 50px;
  }
  .nav-tabs li a {
      color: #777;
  }

  .form-control {
      border-radius: 0;
      

  }

  input[type=text], input[type=email], .text:focus {
  	color:;

  }

  input[type=text]:focus, input[type=email]:focus, .text:focus {
    background-color:lightblue;
}
  textarea {
      resize: none;
  }

  .title{
  	color:red;
  }


/*.animationload11 {
  position: fixed;
  top:0;
  left:0;
  right:0;
  bottom:0;
  background-color:#fff;  change if the mask should have another color then white 
  z-index:999999;
}*/
.imgloader {
    width:200px;
    height:200px;
    font-size: 24px;
    text-align: center;
    position:absolute;
    left:50%; 
    top:50%; 
    background-image:url(images/preloader.gif); 
    background-repeat:no-repeat;
    background-position:center;
    margin:-100px 0 0 -100px; 
}


.loader{
	position: fixed;
	z-index:9999;
	top:0;
	left:0;
	width:100%;
	height:100%;
	background-color:#fff;
	display: flex;
	justify-content: center;
	align-items: center;

}


/*.loader >img {
	width: 100px;
	}*/


	.loader.hid{
		animation:fadeout 5s;
		animation-fill-mode: forwards;
	}

@keyframes fadeout {

	100% {
		opacity:0;
		visibility:hidden;
	}
}


/* scroll to up  */

.scroll_to_top{
  background-color: #4caf50;
  padding:6px  8px !important;
  border: none;
  outline: none;
  border-radius: 6px;
  position: fixed;
  right: 30px;
  bottom: 50px;
  display: none;

}

.scroll_to_top span{
  color: #ffffff ;

}

html{

  scroll-behavior: smooth;
}

</style>

</head>

	<body >


		
<div class="loader hid">
    <div class="imgloader">
        Please Wait....
    </div>
  </div> 
  








 
                <?php 
 if(isset($_SESSION['message'])):	?>

<div style="z-index: +9999;"  class=" navbar-fixed-top alert alert-dismissible fade in alert-<?=$_SESSION['msg_type']?>">
    <a style="float:right;" href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>

<?php echo $_SESSION['message'];
unset( $_SESSION['message']);?>

 </div>



<?php endif ?>

 

 





<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a href="#" class="navbar-brand">Wiki</a>
		</div>
		<div class="navbar-collapse collapse" id="myNavbar">
			<ul class="nav navbar-nav">
				<li><a href="#">Home</a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Field <span class="caret"></span></a>
				<ul class="dropdown-menu">
            <li><a href="#">DSS</a></li>
            <li><a href="#">SSS</a></li>
            <li><a href="#">SS</a></li>
          </ul>
        </li>
        <li><a href="#">Page 2</a></li>
        <li><a href="#">Page 3</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>



<div class="jumbotron text-center">
  <h1>Company</h1> 
  <p>We specialize in difference type of products</p>
  <p style="letter-spacing: 3px;"> and render best of services around world</p> 
  
  	<!--<form action="mail.php" method="POST" >-->
  	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <div class="input-group">
      <input type="email" class="form-control" name="email" value="<?php echo $email;  ?>" placeholder="Email" type="email"  pattern='[a-zA-Z0-9._%+-]+@[a-z0-9.-]+\.[a-zA-Z]{2,5}$' title="ENTER EMAIL" required>
      <div class="input-group-btn">
        <button type="button" name="subscribe" class="btn btn-danger">Subscribe</button>
      </div>
    </div>
  </form>
</div>

<!-- Container (About Section) -->
<div id="about" class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
      <h2>About Company Page</h2><br>
      <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h4><br>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      <br><button class="btn btn-default btn-lg">Get in Touch</button>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-signal logo"></span>
    </div>
  </div>
</div>

<div class="container-fluid bg-grey">
  <div class="row">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-globe logo slideanim"></span>
    </div>
    <div class="col-sm-8">
      <h2>Our Values</h2><br>
      <h4><strong>MISSION:</strong> Our mission lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h4><br>
      <p><strong>VISION:</strong> Our vision Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
  </div>
</div>


<!-- Container (TOUR Section) -->
<div id="tour" class="bg-1">
  <div class="container">
    <h3 class="text-center">TOUR DATES</h3>
    <p class="text-center">Lorem ipsum we'll play you some music.<br> Remember to book your tickets!</p>
    <ul class="list-group">
      <li class="list-group-item">September <span class="label label-danger">Sold Out!</span></li>
      <li class="list-group-item">October <span class="label label-danger">Sold Out!</span></li> 
      <li class="list-group-item">November <span class="badge">3</span></li> 
    </ul>
    
    <div class="row text-center">
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="images/lighty.jpg" alt="Paris" width="400" height="300">
          <p><strong>Paris</strong></p>
          <p>Friday 27 November 2015</p>
          <button class="btn btn-info" data-toggle="modal" data-target="#myModal">Buy Tickets</button>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="images/man.png" alt="New York" width="400" height="300">
          <p><strong>New York</strong></p>
          <p>Saturday 28 November 2015</p>
          <button class="btn btn-info" data-toggle="modal" data-target="#myModal">Buy Tickets</button>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="images/lighthouse.jpg" alt="San Francisco" width="400" height="300">
          <p><strong>San Francisco</strong></p>
          <p>Sunday 29 November 2015</p>
          <button class="btn btn-info" data-toggle="modal" data-target="#myModal">Buy Tickets</button>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Tickets</h4>
        </div>
        <div class="modal-body">
          <form role="form">
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-shopping-cart"></span> Tickets, $23 per person</label>
              <input type="number" class="form-control" id="psw" placeholder="How many?">
            </div>
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Send To</label>
              <input type="text" class="form-control" id="usrname" placeholder="Enter email">
            </div>
              <button type="submit" class="btn btn-block btn-info">Pay 
                <span class="glyphicon glyphicon-ok"></span>
              </button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
            <span class="glyphicon glyphicon-remove"></span> Cancel
          </button>
          <p>Need <a href="#">help?</a></p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Container (Contact Section) -->
<div id="contact" class="container">
  <h3 class="text-center">Contact</h3>
  <p class="text-center"><em>We love our fans!</em></p>


  <div class="row">
    <div class="col-md-4">
      <p>Fan? Drop a note.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span>Chicago, US</p>
      <p><span class="glyphicon glyphicon-phone"></span>Phone: +00 1515151515</p>
      <p><span class="glyphicon glyphicon-envelope"></span>Email: mail@mail.com</p>
    </div>

    <div class="col-md-8">
      <div class="row">

      	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
      		<!--<form action="connect.php" method="POST" >-->

      	
        <div class="col-sm-6 form-group">
          <input class="form-control"  name="name" value="<?php echo $name;  ?>" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control"  name="email" value="<?php echo $email;  ?>" placeholder="Email" type="email"  pattern='[a-zA-Z0-9._%+-]+@[a-z0-9.-]+\.[a-zA-Z]{2,5}$'  title ="EMAIL INPUT " required>
        </div>
      </div>
      <textarea class="text form-control"  name="comment" value="<?php echo $comment;  ?>" placeholder="Comment" rows="5" title="YOUR COMMENT IS NEEDED "  required></textarea>
      <br>
      <div class="row">
        <div class="col-md-12 form-group">
          <button class="btn pull-right btn-info" name="save" type="submit">Send</button>
        </div>
      </div>
    </div>
  </div>
</form>


  <br>
  <h3 class="text-center">From The Blog</h3>  
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Mike</a></li>
    <li><a data-toggle="tab" href="#menu1">Chandler</a></li>
    <li><a data-toggle="tab" href="#menu2">Peter</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h2>Mike Ross, Manager</h2>
      <p>Man, we've been on the road for some time now. Looking forward to lorem ipsum.</p>
    </div>
    <div id="menu1" class="tab-pane fade">
      <h2>Chandler Bing, Guitarist</h2>
      <p>Always a pleasure people! Hope you enjoyed it as much as I did. Could I BE.. any more pleased?</p>
    </div>
    <div id="menu2" class="tab-pane fade">
      <h2>Peter Griffin, Bass player</h2>
      <p>I mean, sometimes I enjoy the show, but other times I enjoy other things.</p>
    </div>
  </div>
</div>



<button class="scroll_to_top" onclick="scrolltop()"><span class="jam jam-arrow-up"></span></button>

<footer style="background-color:  #999900;color: #fff;text-align: center;font-size: 20px;letter-spacing: 2px;">copyright and &copy; 2022 all right reserved.
moses tech</footer>
</body>





<!-- for loader part-->

<script type="text/javascript">

      window.addEventListener("load", function(){


const loader = document.querySelector(".loader");

loader.className += " hid";//class "loader hidden"


      });
      
</script>

<script type="text/javascript">

  /*$document.scroll(function(event){

 /*act on the event
 if($(document).scrollTop() > 500
){

$.('.scroll_to_top').fadein(300);

 }

else if($(document).scrollTop() < 500
){

 $.('.scroll_to_top').fadeout(300);


}

  });
   scroll back to top  button 

  $('.scroll_to_top').click(function(event){
$(document).scrollTop(0);


  });

*/

var scrollBtn = document.getElementsByClassName('scroll_to_top')[0];

window.addEventListener('scroll'  function(){

  if ( document.documentElement.scrollTop >  500) {

   scrollBtn.style.display = 'block';

  }


  else if ( document.documentElement.scrollTop < 500) {

   scrollBtn.style.display = 'none';

  }

})
function scrolltop(){
 
  document.documentElement.scrollTop=0;

}



</script>






</html>



