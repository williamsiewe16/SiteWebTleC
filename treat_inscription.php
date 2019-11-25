<?php
session_start();
//if(isset($_SESSION['pseudo']) && !isset($_SESSION['adresse'])){

function Vérification($mail,$DN,$password){

$i=0;

if(preg_match("#^[a-zA-Z0-9\._%+-]+@[a-zA-Z_-]+\.(com|fr|net)$#",$mail)){}

else{
   echo "<p style='color:red; size:1.2em;'>Adresse mail incorrecte</p>";
   $i++;
    }

if(strlen($password) >= 8){}
  else{
  	echo "<p style='color:red; size:1.2em;'>Mot de passe trop court. Au moins 8 caractères</p>";
  	$i++;
      }
                            

   $Date=array();
   $Date=explode('/', $DN);



   
   if( ($Date[2]>1900 && $Date[2]<2006) || ($Date[1]>0 && $Date[1]<13) )
   {
      if($Date[1]==2)
      {
      	if($Date[0]>0 && $Date[0]<29){}
      		else{echo "<p style='color:red; size:1.2em;'>Date incorrecte</p>";$i++;}
      }
      else
      {
      	if($Date[0]>0 && $Date[0]<32){}
      	else{echo "<p style='color:red; size:1.2em;'>Date incorrecte</p>";$i++;}	
      }
   }
   else
   {
   	echo "<p style='color:red; size:1.2em;'>Date incorrecte</p>";
   	$i++;
   }

return $i;
}





                                                               


if($_POST['pseudo']=="" || $_POST['mail']=="" || $_POST['password']=="" || $_POST['DN']=="")

{
#header ('location: ./text1.php');
echo "<p style='color:red; size:1.2em;'>Veuillez remplir tout le formulaire</p>";
}

else
{

$pseudo=$_POST['pseudo'];
$mail=$_POST['mail'];
$password=$_POST['password'];
$DN=$_POST['DN'];

$a=Vérification($mail,$DN,$password);

$password=sha1($_POST['password']);

if($a==0)
{

$link=mysqli_connect('localhost','root','bonsoir');
mysqli_query($link,'use dev_dev;');
$query=mysqli_query($link,"select * from eleves;");
$ligne=mysqli_fetch_assoc($query);
$b=0;

  while($ligne)
  {   

   if($ligne['pseudo']==$_POST['pseudo'] || $ligne['adresse']==$_POST['mail'])
    {
      $b=1;
      echo "<p style='color:red; size:1.2em;'>Pseudo ou adresse mail déjà utilisé</p>";
    }

   $ligne=mysqli_fetch_assoc($query);
  }

  if($b==0)
  {

$header="MIME-Version: 1.0\r\n";
$header.='From:"PrimFX.com">support@primfx.com>'."\n";
$header.='content-Type:text/html; charset="utf-8"'."\n";
$header.='content-Transfer-Encoding: 8bit';

$message="
<html>
   <body>
   <div align='center'> <span style='color:aqua; font-size:1.2em;'>".$pseudo."</span><br/> <br/> Cliques sur  <a href='http://192.168.43.47/treat_message.php'>ce lien</a> pour valider ton inscription </div>
   </body>
</html>";

$sujet="Confirmez votre inscription";
mail($mail, $sujet, $message, $header);

session_start();

$_SESSION['pseudo']=$_POST['pseudo'];
$_SESSION['adresse']=$_POST['mail'];
$_SESSION['password']=$_POST['password'];
$_SESSION['date']=$_POST['DN'];

echo '<b style="color:red; font-size:1.2em;">Un message a été envoyé dans votre boîte mail. Consultez-le et finalisez votre inscription</b>';


  }




}

}

//}

//else{
 // echo 'not set';
  //  header ('location: connexion.php');
//}

?>