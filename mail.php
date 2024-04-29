<?php require("connect.php"); ?>

<?php






$email ='';
$time=date(" D M Y, \a\\t  h:i:sa", time());  

  







/*  $mysqli  = new  mysqli('') is use to connect to the database
    using appropriate host, username, password, database*/
 $mysqli = new  mysqli('localhost', 'mail', 'tega247', 'krib') or die (mysql_error($mysqli));









if (isset($_POST['subscribe'])){


	$email  = $_POST['email'];
htmlspecialchars($email, ENT_QUOTES, 'UTF-8') . '!';
	
if($mysqli->query( "INSERT INTO mail ( Email, time  VALUES('$email', $time)")){
    $_SESSION['message']= 'Your  have succesfully subscribed to our mail!';
$_SESSION['msg_type'] = 'info';
header("location: page.php");

}


else{
    die(mysqli_error($mysqli));
    

  $_SESSION['message']= 'Error in receiving your mail, kindly contact us!';
 $_SESSION['msg_type'] = 'danger';
 header("location: page.php");
}




}
?>



<?php

 $to =  $_POST['email'];
$subject = "You've Succesfully Subscribed to our Newsletter";
 $message = '<html><body>';
$message .= "Dear ". strip_tags($_POST['email']). ", thank you for joining our newsletter, you will now get timely updates on the latest technologies and how they can
take your business to the next level" ;
$message .= "</body></html>"; 

$headers = "From: craftotega@gmail.com" . "\r\n" ;
$headers  .= "MIME-Version: 1.0" . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 

mail($to,$subject,$message,$headers);


?> 






 