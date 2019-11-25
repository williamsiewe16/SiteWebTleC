<?php
session_start();
if(isset($_SESSION['pseudo']) && !isset($_SESSION['adresse'])){
?>
<!doctype html>
<html>
    <head>
	   <title>FC barcelone in Champions League 2016-2017</title>
       <meta charset="utf-8">
       <link rel="shortcut icon" type="image/png" href="images/messi1606.ico"/>
      <link rel="stylesheet" href="a.css"/>
    </head>
    <body class="bod" style="background-image:url(images/quizz.jpeg) no repeat;">
     <header></header>
    <nav class="menu">
      <ul>
	<li class="PG"><a href="PG.php">Phases de groupe</a></li>
	<li class="huitiemes"><a href="huitiemes.php">1/8 de finale</a></li>
	<li class="quarts"><a href="quarts.php">1/4 de finale</a></li>
	<li class="accueil"><a href="sublime.php">Accueil</a></li>
	<li class="questionnaire"><a href="questionnaire.php">Questionnaire</a></li>
	<li class="calculatrice"><a href="calculatrice.php">Calculatrice</a> </li>

</ul>
</nav>

<section class="section">
	<?php 
	echo "<br/><b style='font-size:1.1em'>Bienvenue </b>";
	echo "<b style='color:aqua'>"; echo  $_SESSION['pseudo']; echo "</b>"; 
	echo "<br/><a style='border:1px solid  white;background-color:lime;border-radius: 20px;color:white;padding:10px;width:80px;text-align: center;position:relative;top:20px;' href='deconnexion.php'>se déconnecter</a>";
	?></section>

<div class="divaccueil">

<h1>Parcours du FC Barcelone en Ligue des champions 2016-2017</h1>

	<img src="images/barca.png" class="barca"/>

	<p class="contenu2">

		Cette saison les Blaugrana sont engagés dans 4 compétitions dont la ligue des champions qu'ils ont quitté prématurément l'année passée en quart de finale face à l'Atlético de Madrid.<br/>
		Le tirage au sort de la phase de groupes a lieu le 25 août 2016 au Forum grimaldi de Monaco. Barcelone hérite d'un groupe constitué de Manchester City, le Celtic Glasgow et du Borussia Mönchengladbach. Cette année encore, il ne devrait pas avoir de difficultés pour rejoindre la phase finale.<br/>
		C'est donc au Camp Nou que les hommes de Luis Enrique débuteront cette campagne de ligue des champions le 13 septembre face au Celtic puis, le même mois, ils iront défier le Borussia Mönchengladbach pour le compte de la 2ème journée. S'en suit une double confrontation face à aux Citizens dont l'effectif a été fortement remanié depuis l'arrivée de Pep Guardiola. Le match retour face au Celtic aura lieu le 23 novembre puis les catalans termineront en décembre par un match face aux allemands.<br/>
		<img src="images/tirage.jpg" class="tirage" />

	</p>

</div>

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
	echo 'not set';
    header ('location: connexion.php');
}

?>

