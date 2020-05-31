<?php


    $image1 = ["image"=>"CIMG0131.jpg"];
    $image2 = ["image"=>"sake.jpg"];
    $image3 = ["image"=>"gei.jpg"];
    $image4 = ["image"=>"statue.jpg"];
    $image5 = ["image"=>"tenu.jpg"];
   
    
    
$images = [$image1, $image2, $image3, $image4, $image5];

    $video1 = ["video"=>"https://www.youtube.com/embed/PzV8ozNtrtQ"];
    $video2 = ["video"=>"https://www.youtube.com/embed/negfD0Jn39s"];
    $video3 = ["video"=>"https://www.youtube.com/embed/oUA-IsO5b4k"];
    
    $videos = [$video1, $video2, $video3];
require "models/un.php";
require "carou.php";

$text='<div id="idtext"><h2>economie</h2><h3>secteur primaire</h3><p>l\'agriculture etait le secteur le plus puissant jusqu\'a l\'expension economique d\'apres guerre (le miracle economique japonais).
sa production principal est le riz et quelque fruits et legumes.concernant l\'elevage et la sylviculture , ils sont en baisse mais cela est aussi du a leur demographie et a la liberation de l\'importation.
concernant la peche une decroissance des prise de poissons les emmenent a pratiquer de plus en plus l\'aquaculture (le japon a reussi l\'elevage de l\'anguille et du thon a partir d\'un oeuf)</p>

<h3>le secteur secondaire</h3>
<p>le japon du present est futuriste la plupart des creation electronique viennent de labas qu\'elle soit pour l\'industrie ,le commerce ou le plaisir :

la technologie japonaise (le traitement de divers métaux, la construction navale, le génie civil, le génie mécanique, la technologie électrique et l’électronique) reste à la pointe de la technologie mondiale.
La « ceinture de l’océan Pacifique » est une zone industrielle le long de la côte.
Ces techniques japonaises sont utilisées pour le commerce extérieur, caractérisé par l’importation des matières premières et l’exportation des produits industriels.
L’industrie automobile tels que Toyota, Nissan et Honda est sans aucun doute populaire et est de renommée mondiale.
Le niveau technologique de l’industrie aérospatiale et de la chimie pharmaceutique n’étant pas suffisant,
le Japon commence à mettre l’effort sur la nanotechnologie, la robotique, la biotechnologie, l’ingénierie financière et l’informatique.</p>
<p>pour voir un peu de leur <a href="https://www.tresor.economie.gouv.fr/Ressources/15739_lindustrie-japonaise-du-futur-strategie-technologies-cles-et-moyens-daction"target="_blank">projet</a>
les japonais reussisse par leur travail acharne et leur volonte inflexible </p>

<h3>le secteur tertiere</h3>

<p>les japonais commence a s\'ouvrir depuis peu et ca leur reussi pour ma part je pense que la culture manga et jeux video y a beaucoup participe. 
justement en parlant de manga et de jeux video c\'est un enorme budget de vente et d\'exportation.<br/><br/>
une activite tres prise est le <a href="https://www.gaijinjapan.org/pachinko-au-japon/"target="_blank">pachinko</a> avec de grande salle remplie de ces machine<br/> qui font des music differente avec le bruit des billes qui tombent j\'y suis reste 5 min le bruit est reste 20 bonne minute dans mes oreilles 
les <a href="https://www.gaijinjapan.org/onsen-japon/"target="_blank">onsen</a> sont des bains naturelle de sources d\'eau chaude tres agreable et apaisant on pourrait meme dire que certain sont magique<br/> par contre attention ils ne sont pas tous a la meme temperature.
le <a href="https://dozodomo.com/bento/2010/08/06/karaoke/"target="_blank">karaoke</a> est tres apprecie celui que j\'ai visite etait tres grand cela ressemble plus a un hotel qu\'un karaoke comme nous les connaissons<br/>
avec plein de chambre mais au lieu de chambre de petit salon avec tout ce qu\'il faut pour chanter il est possible de commande glace boisson etc..
mais la seul chanson francaise sur la liste de chanson vraiment tres longue etaint un titre de france gall (poupee de cire pouppe de son)</p><br/><br/></div>';
echo $text;

 ?>


