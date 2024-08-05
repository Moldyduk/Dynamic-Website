<?php
$connection=mysqli_connect('localhost','root');
mysqli_select_db($connection,"webdata");
$user=$_POST('user');
$email=$_POST('email');
$message=$_POST("message");
$query="INSER INTO  `userinfodata`(`user`,`email`,`message`) VALUES('$user','$email','$message')";

mysqli_query($connection,$query);
echo "MESSAGE IS SENT";
?>