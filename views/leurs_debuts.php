<?php


    $image1 = ["image"=>"CIMG0131.jpg"];
    $image2 = ["image"=>"sake.jpg"];
    $image3 = ["image"=>"gei.jpg"];
    $image4 = ["image"=>"statue.jpg"];
    $image5 = ["image"=>"tenu.jpg"];
  
$images = [$image1, $image2, $image3, $image4, $image5];

    $video1 = ["video"=>"https://www.youtube.com/embed/jGxeIGVVUSQ"];
    $video2 = ["video"=>"https://www.youtube.com/embed/aeSFTnHstsA"];
    $video3 = ["video"=>"https://www.youtube.com/embed/Pk5iKr94WfU"];
    
    $videos = [$video1, $video2, $video3];

require "models/un.php";
require "carou.php" ;

    $bouton0 = [
        "titre"=>"1ere generation",
        "contenu"=>"trablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablab"
    ];
    $bouton1 = [
        "titre"=>"2eme generation",
        "contenu"=>"ecoblablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablab"
    ];
    $bouton2 = [
        "titre"=>"3eme generation",
        "contenu"=>"poliblablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablab"
    ];
   
$boutons = [$bouton0, $bouton1, $bouton2];
require "models/deux.php";
echo $bout;
 ?>




