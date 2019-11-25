<?php
session_start();
if(isset($_SESSION['pseudo']) && !isset($_SESSION['adresse'])){
?>

<!doctype html>

<html>

    <head>

	   <title> Questionnaire</title>
       <meta charset="utf-8">
       <link rel="shortcut icon" type="image/ico" href="images/messi1606.ico"/>
       <link rel="stylesheet" href="a.css"/>

    </head>
   
    <body style="background:  url(images/quizz.jpeg)  repeat;">

     <header id="HD"></header>

     <nav class="menu">

      <ul>
  <li class="PG" id="PG"><a href="PG.php">Phases de groupe</a></li>
  <li class="huitiemes"><a href="huitiemes.php">1/8 de finale</a></li>
  <li class="quarts"><a href="quarts.php">1/4 de finale</a></li>
  <li class="accueil"><a href="sublime.php">Accueil</a></li>
  <li class="questionnaire"><a href="questionnaire.php">Questionnaire</a></li>
  <li class="calculatrice"><a href="calculatrice.php">Calculatrice</a> </li>
      </ul> 

    </nav>

     <section class="sectionquestio">
<?php 
  echo "<br/><b style='font-size:1.1em'>Bienvenue </b>";
  echo "<b style='color:aqua'>"; echo  $_SESSION['pseudo']; echo "</b>"; 
  echo "<br/><a style='border:1px solid  white;background-color:lime;border-radius: 20px;color:white;padding:10px;width:80px;text-align: center;position:relative;top:20px;' href='deconnexion.php'>se déconnecter</a>";
  ?>
      <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
       <b><u style="font-size:1.2em;">Barème</u></b>  <br/><br/>
       Bonne réponse: 1pt <br/>
       Mauvaise réponse: -0.25pt <br/>
       Pas de réponses: -0.25pt <br/>
     </section>


    <div class="divque" style="font-size:22px;">

    <textarea class="rep" id="rep"></textarea>

<textarea id="reps" class="reps"></textarea>
<textarea id="repso" class="repso">Votre score vous sera communiqué ici</textarea>

      <br/>
   <h1 style=" color:silver; border:solid red 1px; background-color:red; font-size:80px; width:800px; border-radius:30px; position:absolute; left:300px;" >QUESTIONNAIRE</h1><br/><br/>

   <form style="color:silver;" class="formques" method="post" border="1px">



    1. <span style="font-weight:bold;">En quelle année a été crée le FC Barcelone?</span><br/><br/>

    <input type="button" name="1" id="11" onclick="document.getElementById('11').value='✓'; document.getElementById('1').value='';document.getElementById('111').value='';"> 1902<br/>

     <input type="button" name="1" id="1" onclick="document.getElementById('1').value='✓'; document.getElementById('11').value='';document.getElementById('111').value='';"> 1899<br/>

      <input type="button" name="1" id="111" onclick="document.getElementById('111').value='✓'; document.getElementById('11').value='';document.getElementById('1').value='';"> 1900<br/>
     <br/><br/>

       2. <span style="font-weight:bold;">Qui a marqué le 1er but pour le FC Barcelone de cette edition de ligue des champions 2016-2017?</span><br/><br/>

    <input type="button" name="2" id="2" onclick="document.getElementById('2').value='✓'; document.getElementById('22').value='';document.getElementById('222').value='';"> Lionel Messi<br/>

     <input type="button" name="2" id="22" onclick="document.getElementById('22').value='✓'; document.getElementById('2').value='';document.getElementById('222').value='';"> Luis Suarez<br/>

      <input type="button" name="2" id="222" onclick="document.getElementById('222').value='✓'; document.getElementById('22').value='';document.getElementById('2').value='';"> Andrès Iniesta<br/>
      <br/><br/>

      3. <span style="font-weight:bold;">Qui a inscrit le 6e but du FC Barcelone lors de la remontada?</span><br/><br/>

    <input type="button" name="3"  id="3" onclick="document.getElementById('3').value='✓'; document.getElementById('33').value='';document.getElementById('333').value='';"> Sergi Roberto<br/>

     <input type="button" name="3" id="33" onclick="document.getElementById('33').value='✓'; document.getElementById('3').value='';document.getElementById('333').value='';"> Jordi Alba<br/>

      <input type="button" name="3" id="333" onclick="document.getElementById('333').value='✓'; document.getElementById('33').value='';document.getElementById('3').value='';"> Neymar<br/>
      <br/><br/>
     
      4.<span style="font-weight:bold;"> A la quantième minute léo messi ouvre-t-il le score contre Manchester city?</span><br/><br/>

    <input type="button" name="4" id="44" onclick="document.getElementById('44').value='✓'; document.getElementById('4').value='';document.getElementById('444').value='';"> 13e<br/>

     <input type="button" name="4" id="4" id="1" onclick="document.getElementById('4').value='✓'; document.getElementById('44').value='';document.getElementById('444').value='';"> 21e<br/>

      <input type="button" name="4" id="444" onclick="document.getElementById('444').value='✓'; document.getElementById('4').value='';document.getElementById('44').value='';"> 20e<br/>
      <br/><br/>
    
     5. <span style="font-weight:bold;"> Combien de buts a inscrit Neymar lors de cette campagne de ldc?</span><br/><br/>

    <input type="button" name="5"  id="5" onclick="document.getElementById('5').value='✓'; document.getElementById('55').value='';document.getElementById('555').value='';"> 4<br/>

     <input type="button" name="5" id="55" onclick="document.getElementById('55').value='✓'; document.getElementById('5').value='';document.getElementById('555').value='';"> 6<br/>

      <input type="button" name="5" id="555" onclick="document.getElementById('555').value='✓'; document.getElementById('55').value='';document.getElementById('5').value='';"> 5<br/>
      <br/><br/>

     6. <span style="font-weight:bold;">Messi établit cette saison son record de buts inscrits en phase de poules. Combien de buts marque-t-il?</span><br/><br/>

    <input type="button" name="6" id="66" onclick="document.getElementById('66').value='✓'; document.getElementById('6').value='';document.getElementById('666').value='';"> 11<br/>

     <input type="button" name="6" id="6" onclick="document.getElementById('6').value='✓'; document.getElementById('666').value='';document.getElementById('66').value='';"> 10<br/>

      <input type="button" name="6" id="666" onclick="document.getElementById('666').value='✓'; document.getElementById('66').value='';document.getElementById('6').value='';"> 9<br/>
      <br/><br/>
   
      
    7.<span style="font-weight:bold;"> Combien de buts Ter Stegen a encaissé en ligue des champions 2016-2017?</span><br/><br/>

    <input type="button" name="7"  id="7" onclick="document.getElementById('7').value='✓'; document.getElementById('77').value='';document.getElementById('777').value='';"> 12<br/>

     <input type="button" name="7" id="77" onclick="document.getElementById('77').value='✓'; document.getElementById('7').value='';document.getElementById('777').value='';"> 14<br/>

      <input type="button" name="7" id="777" onclick="document.getElementById('777').value='✓'; document.getElementById('77').value='';document.getElementById('7').value='';"> 10<br/>
      <br/><br/>
    
    8.<span style="font-weight:bold;"> Combien de défaites a concédé le barça cette saison 2016-2017 en ldc?</span><br/><br/>

    <input type="button" name="8" id="888" onclick="document.getElementById('888').value='✓'; document.getElementById('88').value='';document.getElementById('8').value='';"> 2<br/>

     <input type="button" name="8" id="88" onclick="document.getElementById('88').value='✓'; document.getElementById('888').value='';document.getElementById('8').value='';"> 4<br/>

      <input type="button" name="8" id="8" onclick="document.getElementById('8').value='✓'; document.getElementById('888').value='';document.getElementById('88').value='';"> 3<br/>
      <br/><br/>

    9. <span style="font-weight:bold;">Combien de pénaltys ont été sifflé contre Barcelone?</span><br/><br/>

    <input type="button" name="9" id="99" onclick="document.getElementById('99').value='✓'; document.getElementById('9').value='';document.getElementById('999').value='';"> 1<br/>

     <input type="button" name="9" id="9" onclick="document.getElementById('9').value='✓'; document.getElementById('99').value='';document.getElementById('999').value='';"> aucun<br/>

      <input type="button" name="9" id="999" onclick="document.getElementById('999').value='✓'; document.getElementById('99').value='';document.getElementById('9').value='';"> 3<br/>
      <br/><br/>

    10. <span style="font-weight:bold;"> Qui est sorti vainqueur de cette édition de ligue des champions?</span><br/><br/>

    <input type="button" name="10" id="000" onclick="document.getElementById('000').value='✓';document.getElementById('0').value='';document.getElementById('00').value='';"> Paris Saint Germain<br/>

     <input type="button" name="10" id="00" onclick="document.getElementById('00').value='✓'; document.getElementById('000').value='';document.getElementById('0').value='';"> FC Barcelone<br/>

      <input type="button" name="10" id="0" onclick="document.getElementById('0').value='✓'; document.getElementById('00').value='';document.getElementById('000').value='';"> Real Madrid<br/>
      <br/><br/>

<a href="#" style="width:100px; font-size:20px; position:absolute; left:220px; top:2100px;" class="sub" id="sub" onclick="resultat();">valider</a>
<input type="reset" style="width:130px; font-size:20px; position:absolute; left:400px;" value="réinitialiser" id="res" class="res" onclick="reini();"/> 






   </form>

    </div>


    <script language="javascript">

        function resultat(){
          var b=document.getElementById('rep').value;
 if(document.getElementById('1').style.backgroundColor=="lime"){
  document.getElementById('sub').href="#res";
  alert('veuillez cliquez sur réinitialiser');
  
 }
 else{
          var a=0;
       for(var i=0;i<=9;i++){
         if(document.getElementById(i).value=="✓"){
            a=a+1;
           }
           else{
            a=a-0.25;
           }
          }
         if(a<0){
          document.getElementById('rep').style="border:1px solid aqua; background-color:aqua; text-shadow:3px 3px 3px aqua; border-radius:10px; color:lime;";
          document.getElementById('repso').style=" background-color:aqua; text-shadow:3px 3px 3px aqua;color:lime; border:1px solid aqua;";
          document.getElementById('reps').style="background-color:aqua; text-shadow:3px 3px 3px aqua; color:red; border:1px solid aqua;";
          document.getElementById('reps').value="Beaucoup d'efforts à fournir"
        document.getElementById('repso').value="Vous avez obtenu une note de 00/10                                                                                                                                                                            VOUS POUVEZ CONSULTER LES RÉPONSES AU QUESTIONNAIRE DES MAINTENANT";
        
       }
       else if(a>0 && a<3){
       document.getElementById('rep').style="border:1px solid aqua; background-color:aqua; text-shadow:3px 3px 3px aqua; border-radius:10px; color:lime;";
          document.getElementById('repso').style=" background-color:aqua; text-shadow:3px 3px 3px aqua;color:lime; border:1px solid aqua;";
          document.getElementById('reps').style="background-color:aqua; text-shadow:3px 3px 3px aqua; color:red; border:1px solid aqua;";
          document.getElementById('reps').value="Beaucoup d'efforts à fournir"
        document.getElementById('repso').value="Vous avez obtenu une note  de "+a+"/10                                                                                                                                                                            VOUS POUVEZ CONSULTER LES RÉPONSES AU QUESTIONNAIRE DES MAINTENANT";
       }
       else if(a>=3 && a<=4.75){
        document.getElementById('rep').style="border:1px solid aqua; background-color:aqua; text-shadow:3px 3px 3px aqua; border-radius:10px; color:lime;";
          document.getElementById('repso').style=" background-color:aqua; text-shadow:3px 3px 3px aqua;color:lime; border:1px solid aqua;";
          document.getElementById('reps').style="background-color:aqua; text-shadow:3px 3px 3px aqua; color:red; border:1px solid aqua;";
          document.getElementById('reps').value="vous etes proche de la moyenne"
        document.getElementById('repso').value="Vous avez obtenu une note de "+a+"/10                                                                                                                                                                            VOUS POUVEZ CONSULTER LES RÉPONSES AU QUESTIONNAIRE DES MAINTENANT";
       }
       else if(a>=5 && a<=6.5){
        document.getElementById('rep').style="border:1px solid aqua; background-color:aqua; text-shadow:3px 3px 3px aqua; border-radius:10px; color:lime;";
          document.getElementById('repso').style=" background-color:aqua; text-shadow:3px 3px 3px aqua;color:lime; border:1px solid aqua;";
          document.getElementById('reps').style="background-color:aqua; color:blue; border:1px solid aqua;";
          document.getElementById('reps').value="Score Moyen"
        document.getElementById('repso').value="Vous avez obtenu une note de "+a+"/10                                                                                                                                                                            VOUS POUVEZ CONSULTER LES RÉPONSES AU QUESTIONNAIRE DES MAINTENANT";
       }
         else if(a>=6.75 && a<=7.75){
        document.getElementById('rep').style="border:1px solid aqua; background-color:aqua; text-shadow:3px 3px 3px aqua; border-radius:10px; color:lime;";
          document.getElementById('repso').style=" background-color:aqua; text-shadow:3px 3px 3px aqua;color:lime; border:1px solid aqua;";
          document.getElementById('reps').style="background-color:aqua; color:blue; border:1px solid aqua;";
          document.getElementById('reps').value="Bon score"
        document.getElementById('repso').value="Vous avez obtenu une note de "+a+"/10                                                                                                                                                                            VOUS POUVEZ CONSULTER LES RÉPONSES AU QUESTIONNAIRE DES MAINTENANT";
       }
         else if(a>=8 && a<=9.75){
        document.getElementById('rep').style="border:1px solid aqua; background-color:aqua; text-shadow:3px 3px 3px aqua; border-radius:10px; color:lime;";
          document.getElementById('repso').style=" background-color:aqua; text-shadow:3px 3px 3px aqua;color:lime; border:1px solid aqua;";
          document.getElementById('reps').style="background-color:aqua; color:rgb(114,27,160); border:1px solid aqua;";
          document.getElementById('reps').value="Bravo. Vous etes un as du Barça"
        document.getElementById('repso').value="Vous avez obtenu une note de "+a+"/10                                                                                                                                                                            VOUS POUVEZ CONSULTER LES RÉPONSES AU QUESTIONNAIRE DES MAINTENANT";
       }
         else if(a==10){
        document.getElementById('rep').style="border:1px solid aqua; background-color:aqua; text-shadow:3px 3px 3px aqua; border-radius:10px; color:lime;";
          document.getElementById('repso').style=" background-color:aqua; text-shadow:3px 3px 3px aqua;color:lime; border:1px solid aqua;";
          document.getElementById('reps').style="background-color:aqua; color:yellow; border:1px solid aqua;";
          document.getElementById('reps').value="Excellent. Vous etes un pur catalan"
        document.getElementById('repso').value="Vous avez obtenu une note de "+a+"/10                                                                                                                                                                            VOUS POUVEZ CONSULTER LES RÉPONSES AU QUESTIONNAIRE DES MAINTENANT";
       }
       


document.getElementById('1').value="";
document.getElementById('11').value="";
document.getElementById('111').value="";
document.getElementById('2').value="";
document.getElementById('22').value="";
document.getElementById('222').value="";
document.getElementById('3').value="";
document.getElementById('33').value="";
document.getElementById('333').value="";
document.getElementById('4').value="";
document.getElementById('44').value="";
document.getElementById('444').value="";
document.getElementById('5').value="";
document.getElementById('55').value="";
document.getElementById('555').value="";
document.getElementById('6').value="";
document.getElementById('66').value="";
document.getElementById('666').value="";
document.getElementById('7').value="";
document.getElementById('77').value="";
document.getElementById('777').value="";
document.getElementById('8').value="";
document.getElementById('88').value="";
document.getElementById('888').value="";
document.getElementById('9').value="";
document.getElementById('99').value="";
document.getElementById('999').value="";
document.getElementById('0').value="";
document.getElementById('00').value="";
document.getElementById('000').value="";



       for(var i=0;i<=9;i++){
       document.getElementById(i).style="background-color:lime;";
       document.getElementById(i).value="✓";
       }
       document.getElementById('sub').href="#";
            }

    }





      function reini(){
        document.getElementById('1').value="";
document.getElementById('11').value="";
document.getElementById('111').value="";
document.getElementById('2').value="";
document.getElementById('22').value="";
document.getElementById('222').value="";
document.getElementById('3').value="";
document.getElementById('33').value="";
document.getElementById('333').value="";
document.getElementById('4').value="";
document.getElementById('44').value="";
document.getElementById('444').value="";
document.getElementById('5').value="";
document.getElementById('55').value="";
document.getElementById('555').value="";
document.getElementById('6').value="";
document.getElementById('66').value="";
document.getElementById('666').value="";
document.getElementById('7').value="";
document.getElementById('77').value="";
document.getElementById('777').value="";
document.getElementById('8').value="";
document.getElementById('88').value="";
document.getElementById('888').value="";
document.getElementById('9').value="";
document.getElementById('99').value="";
document.getElementById('999').value="";
document.getElementById('0').value="";
document.getElementById('000').value="";
document.getElementById('00').value="";


        document.getElementById('1').style="background-color:white;";
document.getElementById('11').style="background-color:white;";
document.getElementById('111').style="background-color:white;";
document.getElementById('2').style="background-color:white;";
document.getElementById('22').style="background-color:white;";
document.getElementById('222').style="background-color:white;";
document.getElementById('3').style="background-color:white;";
document.getElementById('33').style="background-color:white;";
document.getElementById('333').style="background-color:white;";
document.getElementById('4').style="background-color:white;";
document.getElementById('44').style="background-color:white;";
document.getElementById('444').style="background-color:white;";
document.getElementById('5').style="background-color:white;";
document.getElementById('55').style="background-color:white;";
document.getElementById('555').style="background-color:white;";
document.getElementById('6').style="background-color:white;";
 document.getElementById('66').style="background-color:white;";
document.getElementById('666').style="background-color:white;";
document.getElementById('7').style="background-color:white;";
document.getElementById('77').style="background-color:white;";
document.getElementById('777').style="background-color:white;";
document.getElementById('8').style="background-color:white;";
document.getElementById('88').style="background-color:white;";
document.getElementById('888').style="background-color:white;";
document.getElementById('9').style="background-color:white;";
document.getElementById('99').style="background-color:white;";
document.getElementById('999').style="background-color:white;";
document.getElementById('0').style="background-color:white;";
document.getElementById('000').style="background-color:white;";
document.getElementById('00').style="background-color:white;";
   
    document.getElementById('repso').value="Votre score vous sera communiqué ici"
        document.getElementById('repso').style="border:1px white; background-color:white; text-shadow:3px 3px 3px aqua; border-radius:10px; color:red;";
        document.getElementById('reps').value="";
        document.getElementById('reps').style="border:1px white; background-color:white; border-radius:10px;";
        document.getElementById('rep').style="border:1px white; background-color:white; border-radius:10px;";

      }
    
       
      
       
        
        
      
     /*Vous avez obtenu une note de 7/10
VOUS POUVEZ CONSULTER LES REPONSES AU QUESTIONNAIRE DES MAINTENANT*/
      </script>



<footer>
  
  <br/>FC Barcelona<br/>
              © Copyright FC barcelone en Champions League 2016-2017<br/>

              Notice Légale  Contactez le FC Barcelone  FCB Archive

                <br/><br/><br/>
              <div style="color:black;">Site Web réalisé par <span style="color:lime;">Siewe Loïc</span> et <span style="color:lime;">Ngon Nkoue Myriam</span></div>
        

</footer>

      </body>

</html>

<?php
}

else{
  //echo 'not set';
    header ('location: ../connexion.php');
}

?>