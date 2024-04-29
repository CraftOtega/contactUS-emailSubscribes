

<?php 

session_start();







$name ='';
$email ='';
$comment ='';





/*  $mysqli  = new  mysqli('') is use to connect to the database
    using appropriate host, username, password, database*/
 $mysqli = new  mysqli('localhost', 'connect', 'tega247', 'krib') or die (mysql_error($mysqli));





if  (isset($_POST['save'])){

	$name = $_POST['name'];
	$email = $_POST['email'];
	$comment = $_POST['comment'];

	htmlspecialchars($name, ENT_QUOTES, 'UTF-8') . ' ' .
	htmlspecialchars($email, ENT_QUOTES, 'UTF-8') . ' ' .
    htmlspecialchars($comment, ENT_QUOTES, 'UTF-8') . '!';
	


	/*  $mysqli->query is use to insert a record into database*/
  if ($mysqli->query("INSERT INTO connect (Name, Email, Comment) VALUES('$name', '$email', '$comment' )"))  {

    $_SESSION['message']= 'Your  message has been sent!';
$_SESSION['msg_type'] = 'info';


}


else{
    die(mysqli_error($mysqli));
    

  $_SESSION['message']= 'Your message could not be sent!';
 $_SESSION['msg_type'] = 'danger';
 
}




}

?>
 

