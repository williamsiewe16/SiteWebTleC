<?php
session_start();
if(isset($_SESSION['pseudo']) && !isset($_SESSION['adresse'])){
?>

<!doctype html>
<html>
<head>
	<title>Barcelone en huitiemes de finale</title>
	<link rel="shortcut icon" type="image/ico" href="images/messi1606.ico"/>
	<link rel="stylesheet" href="a.css"/>
</head>
<body>
<header></header>
<nav class="menu">
<ul type="disc">
	<li class="PG"><a href="PG.php">Phases de groupe</a></li>
	<li class="huitiemes"><a href="huitiemes.php">1/8 de finale</a></li>
	<li class="quarts"><a href="quarts.php">1/4 de finale</a></li>
	<li class="accueil"><a href="sublime.php">Accueil</a></li>
	<li class="questionnaire"><a href="questionnaire.php">Questionnaire</a></li>
	<li class="calculatrice"><a href="calculatrice.php">Calculatrice</a></li>


</ul>
</nav>

<section class="sectionhuitiemes">
	<?php 
	echo "<br/><b style='font-size:1.1em'>Bienvenue </b>";
	echo "<b style='color:aqua'>"; echo  $_SESSION['pseudo']; echo "</b>"; 
	echo "<br/><a style='border:1px solid  white;background-color:lime;border-radius: 20px;color:white;padding:10px;width:80px;text-align: center;position:relative;top:20px;' href='deconnexion.php'>se déconnecter</a>";
	?>
	<ul>
	<li><a class="BP" href="#ecrasada">Match aller</a></li>
	<li><a class="BP" href="#remontada">La remontada</a></li>
	<li><a class="BP" href="#vidéo1">Vidéo</a></li>
	</ul>
</section>

<div class="divhuitiemes" style="background-color:rgb(253,181,201); width:1362px; height:4912px;">
<br/>
<h1 id="ecrasada" style="text-decoration:underline;">Le match aller cauchemardesque <br/>face à paris</h1>

<img src="images/psg.png" style="position:absolute; left:250px; top:580px;"/>
<img src="images/barcelone.jpg" style="position:absolute; right:100px; top:580px;" />

<p class="huitieme-aller">
En huitièmes de finale Barcelone devra se défaire une nouvelle fois du Paris saint-germain qu'il connait bien pour l'avoir éliminé à deux reprises en quart de finale (2013 et 2015). Cette équipe parisienne a  bien changé depuis l'an dernier avec notamment les départs de Zlatan Ibrahimovic et de Laurent Blanc. Elle est désormais coachée par Unaï Emery, l'ancien entraineur du FC Séville recruté cet été. On note aussi les arrivées de Julian Draxler ou encore de Giovanni lo celso.<br/>
C'est donc le 14 février qu'à lieu ce choc au sommet des huitièmes de finale et il débute très mal pour les catalans qui sont menés dès la 18ème minute. Di maria marque sur coup franc et donne l'avantage aux parisiens. Avant la mi-temps, les catalans sont pris en contre et concèdent un 2ème but cette fois-ci par Julian Draxler. Paris réalise une première période de grande classe et Barcelone à l'image de Messi n'y est pas. Au retour des vestiaires Paris maintient le rythme et Di maria y va de son doublé après une belle feinte sur Jordi Alba. Le cauchemard des catalans n'est pas fini car Cavani, très en forme depuis quelques mois porte le score à 4 buts à 0. C'est sur ce score que le match se termine. Barcelone n'a pas existé dans ce match et voit ses chances de qualification considérablement réduites. Di maria est lui élu homme du match pour l'ensemble de son oeuvre.
<img  class="neymar" src="images/neymar.jpg" title="neymar contre Paris"/> <img class="dimaria" src="images/dimaria.jpg" title="Di maria célébrant son but"/> <img class="messi" src="images/messi.jpg" title="Messi impuissant face à Paris"/>

</p>


<div class="divd" style="background-color:rgb(239,244,128); height:2833px;">

<h1 class="remon" id="remontada" style="text-decoration:underline;">Match retour: La Remontada</h1><br/>

<img src="images/barcelone.jpg" style="position:absolute; left:30px; top:80px;"/>
<img src="images/psg.png" style="position:absolute; right:30px; top:80px;" />
<br/><br/>
Trois semaines après la déroute au parc des princes, Barcelone joue son match retour le 8 mars au Camp Nou devant ses supporters qui n'attendent qu'une seule chose: La Remontada. Barcelone doit remonter un score de 4-0 sous peine d'être éliminé dès les huitièmes.<br/>
Et les catalans commencent très fort puisque Luis Suarez ouvre le score dès la 3e minute de jeu. Juste avant la mi-temps iniesta pousse kurzawa à marquer contre son camp. 2-0 à la mi-temps, c'est le scénario rêvé pour les blaugrana. Les rôles se sont inversés dans ce match par rapport à l'aller. Paris est complètement absent tandis que Barcelone maîtrise totalement son sujet. Au retour des vestiaires les barcelonais poussent pour revenir à hauteur de Paris et vont être récompensé à la 49e minute. Neymar obtient un pénalty suite à une faute de Meunier. Messi le transforme en puissance (3-0). Barcelone n'est plus qu'à un but de l'exploit. ce troisième but a le mérite de reveiller les parisiens et Cavani heurte même le poteau suite à un joli numéro de Meunier. Et on retrouve Cavani à la 62e minute qui reprend en demi-volée un ballon mis en retrait. le ballon se loge sous la barre. Ter stegen est battu et ça fait 3-1. Barcelone doit à présent marquer 3 buts et il reste moins d'une demi heure. On entre maintenant dans les 5 dernières minutes du temps règlementaire. Les catalans tiennent le ballon et multiplient les offensives. Neymar obtient un coup franc à la 88e minute et bat Kevin Trapp de façon magnifique. ça fait 4-1, l'espoir renaît. Barcelone pousse tandis que Paris recule. Messi recupère le ballon dans le rond central et adresse une profondeur à Luis Suarez. Ce dernier s'écroule dans la surface suite à un contact avec Marquinhos. Penalty! Neymar s'en charge et prend Trapp à contre pied (5-1). Et ce n'est pas fini puisque sur une ultime offensive dans les ultimes minutes, Neymar trouve un Sergi Roberto laissé libre au marquage par Serge Aurier. L'espagnol reprend de volée et lobe Ter Stegen. Le Camp Nou exulte. Barcelone l'a fait. 6-1 . Paris est éliminé et peut avoir des regrets. Ce n'était jamais arrivé dans l'histoire de la compétition.


<img class="sergiR" src="images/sergiR.jpg" title="sergi roberto sur le 6ème but"/> 
<img class="messiR" src="images/messiR.jpg" title="La rage de Messi"/> 
<img class="mesneyR" src="images/mesneyR.jpg" title="Messi et Neymar"/>
<img class="barcaR" src="images/barcaR.jpg" title="la joie  après la remontada"/> 

<div class="diva1" id="vidéo1">
	Chers amis catalans, j'ai ici pour vous une vidéo que vous allez surement apprécier. Profitez-en.<br/>
	<video class="video1" controls src="vidéos/remontada.mp4"></video>

</div>
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