<?php

$ligne=array();
$link=mysqli_connect('localhost','root','bonsoir');
mysqli_query($link,'use dev_dev;');
$query=mysqli_query($link,"select * from eleves;");
$ligne=mysqli_fetch_assoc($query);
$a=0;

while($ligne)
{   

 if($ligne['pseudo']==$_POST['pseudo'] && $ligne['password']==$_POST['password'])
    {
      $a=1;
    }

   $ligne=mysqli_fetch_assoc($query);
}


  
if($a==1)
{
  #echo $a;
 session_start();

 $_SESSION['pseudo']=$_POST['pseudo'];
  
  sleep(2);
  header ('location: ./sublime.php');
}

else
{
  echo '<b style="color:red;">Login ou mot de passe inconnu</b>';
}




?>