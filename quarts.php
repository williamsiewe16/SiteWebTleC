<?php
session_start();
if(isset($_SESSION['pseudo']) && !isset($_SESSION['adresse'])){
?>

<!doctype html>
<html>
<head>
	<title>Barcelone en quarts de finale</title>
	<link rel="shortcut icon" type="image/ico" href="images/messi1606.ico"/>
	<link rel="stylesheet" href="a.css"/>
</head>
<body>
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

<section class="sectionquarts">
     <?php 
	echo "<br/><b style='font-size:1.1em'>Bienvenue </b>";
	echo "<b style='color:aqua'>"; echo  $_SESSION['pseudo']; echo "</b>"; 
	echo "<br/><a style='border:1px solid  white;background-color:lime;border-radius: 20px;color:white;padding:10px;width:80px;text-align: center;position:relative;top:20px;' href='deconnexion.php'>se déconnecter</a>";
	?>
     <ul>

	<li><a class="BP" href="#aller">Premiere manche</a></li>
	<li><a class="BP" href="#elimination">élimination</a></li>
	<li><a class="BP" href="#video2">Vidéo</a></li>
	
	</ul>

	</section>

<div class="divquarts" style="background-color:rgb(169,184,235); height:4525px; width:100%;">

<img src="images/juventus.jpg" style="position:absolute; left:250px; top:580px;"/>
<img src="images/barcelone.jpg" style="position:absolute; right:100px; top:580px;" />

<br/><br/><br/><h1 id="aller" style="text-decoration:underline;">Nouvelle desillusion à Turin</h1>

<p class="quart-aller">
	Barcelone qui s'est qualifié in extremis face au paris saint-germain devra cette fois-ci se défaire de la juventus de turin. Les italiens ont éliminé le FC porto en huitièmes de finale et présentent une défense de fer cette saison. seulement 2 buts encaissés en 8 matchs joués. Les turinois bien en jambes dans ce match ouvrent le score dès la 7e minute de jeu grâce à paulo Dybala. L'argentin va même doubler la mise à la 22e minute. Les catalans, bousculé, imprécis et totalement inefficaces offensivement sont menés 2-0 à la pause. En seconde période Barcelone revient avec de meilleures intentions mais ne trouve cependant pas la faille. Denfensivement c'est toujours aussi approximatif et les catalans concèderont un troisième but par l'intermédiaire de georgio Chiellini. 3-0 ici turin. Comme lors du fiasco au parc des princes, le Barça a déjoué, a manqué d'impact dans les duels et d'idées lors de ses offensives. Il faudra donc encore un immense exploit pour espérer atteindre le dernier carré de la compétition.
<img src="images/dybala-recap.jpg" title="le masque de Dybala" class="dybala-recap"/>
<img src="images/dybala.jpg" title="Dybala" class="dybala"/>
<img src="images/chiellini.jpg" title="chiellini célébrant sa tête victorieuse" class="chiellini"/>
</p>


<div class="divretour" style="background-color:rgb(250,168,143); height:2500px; width:1225px;">

<img src="images/barcelone.jpg" style="position:absolute; left:30px; top:80px;"/>
<img src="images/juventus.jpg" style="position:absolute; right:30px; top:80px;" />

<h1 class="elim" id="elimination" style="text-decoration:underline;">élimination et nouvel échec en quarts</h1><br/><br/><br/>

C'est un match décisif qui attend le FC Barcelone. Les catalans doivent gagner par 3 buts d'écart ou plus s'ils veulent continuer l'aventure. Tous croient en une nouvelle remontada mais savent que la tâche sera beaucoup plus compliquée.<br/>
La Juventus avait un plan et elle s'y est tenue à la lettre: défendre de manière organisée dans son propre camp, et espérer faire des dégâts en contre. Dans ce scénario, le Barça a confisqué le ballon: 61% de possession. Mais il a trouvé face à lui une défense infranchissable, bien regroupée et sûre de sa force. La première période a été un monologue des Barcelonais, venant s'enferrer sans relâche dans la nasse. Des huit tentatives catalanes, une seule a trouvé le cadre, une frappe de Messi repoussée par le gardien Gianluigi Buffon (31e). Le quintuple Ballon d'Or argentin est d'ailleurs resté bloqué à deux unités des 500 buts sous le maillot blaugrana, expédiant trop à droite une de ces frappes rasantes dont il a le secret (19e). Quand Messi a été victime d'une vive charge, l'arbitre n'a pas bronché. Neymar, hors de lui, a vengé son complice d'un tacle très appuyé (44e), récoltant un carton jaune qui lui vaudra une suspension pour son prochain match européen. L'ailier brésilien a été toutefois l'un des Barcelonais les plus dangereux, comme sur ce slalom échevelé (47e), mais rien n'y a fait: le ballon ne voulait pas rentrer, ni sur les tentatives de Messi (56e, 67e), ni sur le tir de Sergi Roberto face à la cage ouverte (67e). Luis Enrique avait prévenu mardi qu'il faudrait que "les astres s'alignent" pour l'emporter. Mais les Catalans ont trop raté et se sont exposés aux contres que Gonzalo Higuain aurait dû mieux exploiter, avec de gros ratés aux 4e, 13e et 38e minutes. Le coup de sifflet final retentit, Barcelone quitte donc la ligue des champions dès les quarts de finale pour la 3ème fois en 4 ans. C'est donc il semblerait un déclin pour ce FC Barcelone qui a tant dominé l'Europe au 21ème siècle. Luis Enrique qui va quitter le club en fin de saison  devra tout faire pour conserver au moins le titre de champion d'Espagne pour ne pas sortir par la petite porte.

<img src="images/mesdes.jpg" title="messi après l'élimination" class="mesdes" >     <img src="images/mesbuf.jpg" title="messi et buffon" class="mesbuf"/>
<img src="images/messiJUV.jpg" title="messi contre un défenseur" class="messiJUV"/>
</div>

<div class="diva2" id="video2" style="position:absolute; left:200px; top: 4250px;">
	Ne soyez pas trop tristes chers supporters, n'oubliez pas qu'il faut reculer pour mieux sauter. Allez on se dit à l'année prochaine. <b>FORCA BARCA</b> <br/>
	<video class="video2" controls src="vidéos/hymne.mp4"></video>

</div>
	
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
	//echo 'not set';
    header ('location: ../connexion.php');
}

?>
