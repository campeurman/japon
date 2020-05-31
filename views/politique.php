<?php


    $image1 = ["image"=>"CIMG0131.jpg"];
    $image2 = ["image"=>"sake.jpg"];
    $image3 = ["image"=>"gei.jpg"];
   
    $images = [$image1, $image2, $image3];

    $video1 = ["video"=>"https://www.youtube.com/embed/JGgofFbBUEE"];
    $video2 = ["video"=>"https://www.youtube.com/embed/HgudKM1jooo"];
    $video3 = ["video"=>"https://www.youtube.com/embed/lEtDZ82Z_NA"];
    $video4 = ["video"=>"https://www.youtube.com/embed/MvZHEX7b1dU"];
    $video5 = ["video"=>"https://www.youtube.com/embed/Nbq7VBnHInU"];
   

$videos = [$video1, $video2, $video3, $video4, $video5];


require "models/un.php";
require "carou.php" ;
$text='<div id="idtext"><h2>politique</h2>

<p>Officiellement, le Japon est une monarchie constitutionnelle avec un parlement composé de deux chambres.
 L’Empereur étant toutefois exclu des décisions gouvernementales, il est plus juste de définir le système politique japonais comme une démocratie parlementaire
  avec un système bicaméral Depuis 1946 et son renoncement au pouvoir divin, l’Empereur nippon garde son titre symbolique mais reste tout de même celui qui nomme le Premier Ministre.
 Il est toujours hautement respecté par les habitants et 8 articles du premier chapitre de la Constitution japonaise sont dédiés à son rôle de symbole et de garant de l’intégrité du pays.
 Pour en savoir plus sur la famille <a href="https://www.nippon.com/fr/features/jg00108/"target="_blank">impériale</a> .
Le pouvoir législatif est représenté par la Diète (kokkai), qui est l’équivalent de notre Parlement. Elle se divise en deux chambres :
La chambre des représentants (sangi-in), appelée chambre basse. Elle est composée de 480 membres élus au suffrage universel. Malgré ce que pourrait laisser penser son nom, c’est bien la partie la plus importante de la Diète.
La chambre des conseillers (shūgi-in), appelée chambre haute. Elle est composée de 242 membres élus au suffrage universel.
  
Les projets ne sont présentés à la Diète que lorsque que la majorité du parti ou de l’alliance dont émane celui-ci le soutien. Le consensus est primordial et ce système empêche les partis minoritaires de contrecarrer un projet ou d’en proposer un.
Ensuite, il y a le Premier Ministre (Naikaku sōri daijin) qui est choisi par la Diète et confirmé par l’Empereur.
À la manière de ce qui se fait au Royaume Uni ou en Italie, c’est le représentant officiel du pays à l’international ainsi que le chef du gouvernement. En général, le premier ministre japonais est toujours issu du parti qui a la majorité à la chambre basse.</p><br/><br/><br/><br/><br/><br/>
</p></div>';
echo $text;

 ?>


