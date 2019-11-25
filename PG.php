<?php
session_start();
if(isset($_SESSION['pseudo']) && !isset($_SESSION['adresse'])){
?>

<!doctype html>
<html>
      <head>
	     <title>Barcelone en phases de groupes</title>
	     <link rel="shortcut icon" type="image/ico" href="images/messi1606.ico"/>
	     <link rel="stylesheet" href="a.css"/> 
      </head>
        <body class="bod">
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

        <section class="sectionPG">
        	<?php 
	echo "<br/><b style='font-size:1.1em'>Bienvenue </b>";
	echo "<b style='color:aqua'>"; echo  $_SESSION['pseudo']; echo "</b>"; 
	echo "<br/><a style='border:1px solid  white;background-color:lime;border-radius: 20px;color:white;padding:10px;width:80px;text-align: center;position:relative;top:20px;' href='deconnexion.php'>se déconnecter</a>";
	?>
	<ul>
	      <li><a class="BP" href="#barcaVSceltic">Barca-Celtic</a></li>	
	      <li><a class="BP" href="#mönchengladbachVSbarca">Gladbach-Barca</a></li>
	      <li><a class="BP" href="#barcaVScity">Barca-City</a></li>
	      <li><a class="BP" href="#cityVSbarca">City-Barca</a></li>
	      <li><a class="BP" href="#celticVSbarca">Celtic-Barca</a></li>
	      <li><a class="BP" href="#barcaVSmönchengladbach">Barca-Gladbach</a></li>
	</ul>
</section>


<div class="divPG">

<h1 style="font-style:italic; text-decoration:underline;">Phases de groupe</h1>

<p class="barcaVSceltic" id="barcaVSceltic">
Barcelone écrase le Celtic sur le score de 7 buts à 0 pour le compte de la 1ère journée grâce notamment à un Lionel Messi auteur d'un triplé. Neymar c'est aussi illustré dans ce match avec 4 passes décisives et un magnifiques coup-franc. Les autres buteurs sont suarez (doublé) et Iniesta sur une reprise de volée.<br/>
<img src="images/Barcelone.jpg" style="position:absolute; left:230px; top:700px;"/>
<img src="images/celtic.png" style="position:absolute; right:40px; top:700px;" />
<img src="images/barcaceltic.jpg" class="barcaceltic" title="La joie des blaugrana après le triplé de Messi"/>
</p>

<p class="mönchengladbachVSbarca" id="mönchengladbachVSbarca">
Pour la seconde journée, les blaugrana se déplaçaient au Borussia Park sans Messi blessé pour y affronter le borussia Mönchengladbach. Ce sont les allemands qui frappent les premiers par l'intermédiaire de thorgan Hazard (1-0). Mais Barcelone va faire la différence en 2ème période d'abord grâce à Arda Turan et ensuite par Gérard Piqué (2-1). 
<img src="images/borussiamonchen.png" style="position:absolute; left:0px; top:50px;"/>
<img src="images/barcelone.jpg" style="position:absolute; right:30px; top:50px;" />
<img src="images/gladbachbarca.jpg" title="piqué célebrant son but victorieux" class="gladbachbarca"/>
</p>

<p class="barcaVScity" id="barcaVScity"> 
C'est le match que tout le monde attendait dans ce groupe. FC Barcelone face à manchester city. L'occasion pour Pep Guardiola de retourner dans le stade où il a connu ses plus belles heures. Et comme en 2015, Lionel Messi a une nouvelle fois été flamboyant face à son ancien coach et inscrit même un nouveau triplé qui porte son total de buts à 6 dans la compétition. Neymar quant à lui y va de son propre but en fin de match.  Barcelone s'impose sêchement 4-0 et s'installe confortablement en tête de son groupe avec 5 points d'avance sur les citizens.
<img src="images/barcelone.jpg" style="position:absolute; left:0px; top:70px;"/>
<img src="images/mancity.jpg" style="position:absolute; right:30px; top:70px;" />
<img src="images/barcacity.jpg" title="Messi double la mise face à Man.City" class="barcacity"/>
</p>

<p class="cityVSbarca" id="cityVSbarca">
	les retrouvailles avec les citizens ont lieu 3 semaines plus tard. C'est un match à enjeu autant pour les catalans qui en cas de victoire assureraient leur qualification, que pour les citizens qui conserveraient eux l'espoir d'accrocher la 1ère place. Lionel messi encore lui ouvre le score à la 21ème minute (1-0). Mais ils s'inclineront finalement par le score de 3 buts à 1 notamment grâce au coup franc splendide de Kevin de Bruyne.
	<img src="images/mancity.jpg" style="position:absolute; left:0px; top:60px;"/>
<img src="images/barcelone.jpg" style="position:absolute; right:30px; top:60px;" />
	<img src="images/citybarca.jpg" title="Messi célèbrant son but contre city" class="citybarca"/>
</p>

<p class="celticVSbarca" id=celticVSbarca>
Pour le retour au Celtic Park, Barcelone domine facilement son sujet comme à l'aller. Les catalans l'emportent 2 à 0 et se qualifient pour les huitièmes de finale. Messi inscrit un doublé dans ce match. ses 8e et 9e buts. Il bat ainsi son record personnel du plus grand nombre de buts inscrits en phases de poule dans une édition établit lors de la saison 2014-2015 (8 buts). 
<img src="images/celtic.png" style="position:absolute; left:0px; top:50px;"/>
<img src="images/barcelone.jpg" style="position:absolute; right:35px; top:50px;" />
<img src="images/celticbarca.jpg" title="messi fait le break face au celtic" class="celticbarca"/>
</p>

<p class="barcaVSmönchengladbach" id="barcaVSmönchengladbach">	La dernière journée a lieu au Camp Nou. Barcelone déjà qualifié affronte Mönchengladbach qui joue la 3ème place face au Celtic. Messi incontournable cette saison en ligue des champions ouvre la marque dès la 16ème minute. le score est de 1-0 à la mi-temps. Au retour des vestiaires Arda Turan inscrit un triplé en 18 minutes et Barcelone l"emporte 4 buts à rien.
<img src="images/barcelone.jpg" style="position:absolute; left:0px; top:50px;"/>
<img src="images/borussiamonchen.png" style="position:absolute; right:40px; top:50px;" />
<img src="images/barcagladbach.jpg" title="Arda turan marque un triplé" class="barcagladbach"/>
</p>


	
</div>
	
        <footer class="footerPG">

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
