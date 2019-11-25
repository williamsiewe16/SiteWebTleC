<?php
 session_start();

 $pseudo=$_SESSION['pseudo'];
$mail=$_SESSION['adresse'];
$password=$_SESSION['password'];
$DN=$_SESSION['date'];


 $link=mysqli_connect('localhost','root','bonsoir');
 mysqli_query($link,'use dev_dev;');
 mysqli_query($link,"insert into eleves (adresse,password,pseudo,date,creation) values ('$mail','$password','$pseudo','$DN',NOW());");

 session_destroy();
    session_start();

  $_SESSION['pseudo']=$pseudo;
    sleep(2);
    header ('location: ./sublime.php');

?>