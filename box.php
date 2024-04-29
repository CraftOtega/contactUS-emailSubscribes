

 


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
</style>
</head>
<body>
	                <?php 
 if(isset($_SESSION['message'])):	?>

<div style="z-index: +9999;"  class=" navbar-fixed-top alert alert-dismissible fade in alert-<?=$_SESSION['msg_type']?>">
    <a style="float:right;" href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>

<?php echo $_SESSION['message'];
unset( $_SESSION['message']);?>

 </div>



<?php endif ?>

	



<div class="jumbotron text-center">
  <h1>Company</h1> 
  <p>We specialize in difference type of products</p>
  <p style="letter-spacing: 3px;"> and render best of services around world</p> 
  
  	<!--<form action="mail.php" method="POST" >
  	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">-->
    <div class="input-group">
      <input type="text" class="form-control" name="email" value="<?php echo $email;  ?>" placeholder="Email" type="email"  pattern='[a-zA-Z0-9._%+-]+@[a-z0-9.-]+\.[a-zA-Z]{2,5}$' title=" EMAIL" required>
      <div class="input-group-btn">
        <button type="button" name="subscribe" class="btn btn-danger">Subscribe</button>
      </div>
    </div>
  </form>
</div>









</body>
	</html>