<?php
session_start();
if(isset($_SESSION['pseudo']) && !isset($_SESSION['adresse'])){
?>

<html>
   <head>
        <title>Calculatrice</title> 
        <link rel="stylesheet" href="sublime.css"/>
        <link rel="shortcut icon" type="image/ico" href="images/messi1606.ico"/>
        <meta charset="utf-8">
   </head>
   <body class="cal">
      <header></header>
         <nav class="menu">
         <ul>
    <li class="PG"><a href="PG.php">Phases de groupe</a></li>
	<li class="huitiemes"><a href="huitiemes.php">1/8 de finale</a></li>
	<li class="quarts"><a href="quarts.php">1/4 de finale</a></li>
	<li class="accueil"><a href="sublime.php">Accueil</a></li>
	<li class="questionnaire"><a href="questionnaire.php">Questionnaire</a></li>
	<li class="calculatrice"><a href="calculatrice.php">Calculatrice</a></li>

        </ul>
        </nav>

    <section class="secCal">
      <?php 
  echo "<br/><b style='font-size:1.1em'>Bienvenue </b>";
 echo "<b style='color:aqua'>"; echo  $_SESSION['pseudo']; echo "</b>"; 
  echo "<br/><a style='border:1px solid  white;background-color:lime;border-radius: 20px;color:white;padding:10px;width:80px;text-align: center;position:relative;top:20px;' href='deconnexion.php'>se déconnecter</a>";
  ?>
    </section>

<script language="javascript"> 
var n=0;
 π=3.1415926535897932384626433832795028841971693993751058209749445923078164;

 function ecrire(a){
  var r=document.getElementById('ecran').value;
    document.getElementById('ecran').value=document.getElementById('ecran').value+a;
    document.getElementById('secran').value="";
    }


function retirer(){
  if(document.getElementById('ecran').value=="Math Error"){
  document.getElementById('ecran').value=""
  }
  else{
 var a=document.getElementById('ecran').value;
 var tab=a.split("");
 tab.pop();
 a=tab.join("");
 document.getElementById('ecran').value=a;
}
}


function calcul(){
 r=document.getElementById('ecran').value;
r=eval(r);
document.getElementById('secran').value=r;
}
 


 function ln(){
if( document.getElementById('ecran').value==""){
   document.getElementById('ecran').value="";
 }
 else {
  var a=parseFloat (document.getElementById('ecran').value);
 document.getElementById('secran').value=Math.log(a);
 r=document.getElementById('secran').value;
 }
}

function expo(){
if( document.getElementById('ecran').value==""){
   document.getElementById('ecran').value="";
 }
 else {
  var a=parseFloat (document.getElementById('ecran').value);
 document.getElementById('secran').value=Math.exp(a);
 r=document.getElementById('secran').value;
 }
}

function log(){
if( document.getElementById('ecran').value==""){
   document.getElementById('ecran').value="";
 }
 else {
  var a=parseFloat (document.getElementById('ecran').value);
 document.getElementById('secran').value=Math.log10(a);
 r=document.getElementById('secran').value;
 }
}

 function cos(){
if( document.getElementById('ecran').value==""){
   document.getElementById('ecran').value="";
 }
 else {
  var a=parseFloat (document.getElementById('ecran').value);
 document.getElementById('secran').value=Math.cos(a*Math.PI/180);
 r=document.getElementById('secran').value;
 }
}


function sin(){
if( document.getElementById('ecran').value==""){
   document.getElementById('ecran').value="";
 }
 else {
  var a=parseFloat(eval(document.getElementById('ecran').value));
 document.getElementById('secran').value=Math.sin(a*Math.PI/180);
 r=document.getElementById('secran').value;
 }
}

function tan(){
if( document.getElementById('ecran').value==""){
   document.getElementById('ecran').value="";
 }
 else if( eval(document.getElementById('ecran').value)=="90"){
   document.getElementById('ecran').value="Math Error";
 }
 else {
  var a=parseFloat(eval (document.getElementById('ecran').value));
 document.getElementById('secran').value=Math.tan(a*Math.PI/180);
 r=document.getElementById('secran').value;
 }
}

function sqrt(){
if( document.getElementById('ecran').value==""){
   document.getElementById('ecran').value="";
 }
 else {
  var a= parseFloat(eval(document.getElementById('ecran').value));
 document.getElementById('secran').value=Math.sqrt(a);
 r=document.getElementById('secran').value;
 }
}

function pow(){
if( document.getElementById('ecran').value==""){
   document.getElementById('ecran').value="";
 }
 else {
  var a=parseFloat(eval(document.getElementById('ecran').value));
 document.getElementById('secran').value=Math.pow(a,2);
 r=document.getElementById('secran').value;
 }
}



function supprimer(){
 document.getElementById('ecran').value="";
 document.getElementById('secran').value="";
}

</script>




<p class="calc" name="calc">  

<textarea style="position:absolute; top:40px; left:25px; font-weight:bold; font-size:1.8em; background-color:aqua; height:85px; width:280px;border-radius:6px" id="ecran"></textarea>


<form  name="form" method="post">

<textarea style="height:30px; width:280px; background-color:aqua; font-weight:bold; font-size:1.6em; position:absolute; left:1px; top:53px; border:1px solid aqua; color:yellow;border-radius:6px" text align="right2" id="secran"></textarea><br/>
     
     <input class="casea1" type="button" value="e^x" style="background-color:blue;"  onclick="expo();"/><br/>

    <input class="casea" type="button" value="x²" style="background-color:blue;"  onclick="pow();"/><br/>

    <input class="case1" type="button" value="7"  onclick="ecrire('7');"/><br/>

    <input class="case2" type="button" value="4" onclick ="ecrire('4');"/><br/>
     
    <input class="case3" type="button" value="1" onclick ="ecrire('1');"/> <br/> 

    <input class="case4" type="button" value="0" onclick="ecrire('0');"/><br/> 

    <input class="casea2" type="button" value="ln" style="background-color:blue;"  onclick="ln();"/><br/>

    <input class="caseb" type="button" value="cos" style="background-color:blue;" onclick="cos();"/><br/> 

    <input class="case5" type="button" value="8" onclick="ecrire('8');"/><br/> 

    <input class="case6" type="button" value="5" onclick="ecrire('5');"/><br/> 

    <input class="case7" type="button" value="2" onclick="ecrire('2');"/><br/> 

    <input class="case8" type="button" value="." onclick="ecrire('.');"/><br/>

    <input class="casea3" type="button" value="log" style="background-color:blue;"  onclick="log();"/><br/>

    <input class="casec" type="button" value="sin" style="background-color:blue;" onclick="sin();"/><br/>

    <input class="case9" type="button" value="9" onclick="ecrire('9');"/><br/>  

    <input class="case10" type="button" value="6" onclick="ecrire('6');"/><br/> 

    <input class="case11" type="button" value="3" onclick="ecrire('3');"/><br/> 

    <input class="case12" type="button" value="x10" onclick="ecrire('*10');"/><br/> 
    
    <input class="casea4" type="button" value="(" onclick="ecrire('(');" style="background-color:blue;"/><br/>

    <input class="cased" type="button" value="tan" style="background-color:blue;" onclick="tan();"/><br/> 

    <input class="case13" type="button" value="DEL" onclick="retirer();"/><br/>  

    <input class="case14" type="button" value="x" onclick="ecrire('*');"/><br/> 

    <input class="case15" type="button" value="+" onclick="ecrire('+');"/><br/> 

    <input class="case16" type="button" value="Ans" onclick="ecrire(r);" /><br/> 
    
    <input class="casea5" type="button" value=")"  onclick="ecrire(')');" style="background-color:blue;"/><br/>

    <input class="casee" type="button" value="√" style="background-color:blue;" onclick="sqrt();"/><br/> 

    <input class="case17" type="button" value="AC" onclick="supprimer();"/><br/> 

    <input class="case18" type="button" value="/" onclick="ecrire('/');"/><br/> 

    <input class="case19" type="button" value="-" onclick="ecrire('-');"/><br/>

    <input class="case20" type="button" value="=" onclick="calcul();"/><br/>

</p>

</form>


<footer>
  
  <br/>FC Barcelona<br/>
              © Copyright FC barcelone en Champions League 2016-2017<br/>

              Notice Légale  Contactez le FC Barcelone  FCB Archive

                <br/><br/><br/>
              <div style="color:black;">Site Web réalisé par <span style="color:lime;">Siewe Loïc</span> et <span style="color:lime;">Ngon Nkoue Myriam</span></div>
        

</footer>

</html>

<?php
}

else{
  //echo 'not set';
    header ('location: ../connexion.php');
}

?>
