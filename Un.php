<?php 

$html ="";
foreach($images as $image) {
    $html.='<img src="'.$image["image"].'" alt="">///';
};

if(sizeof($image)<8) { 
    foreach($videos as $video) {
        $html.='<iframe width="100%" height="100%" src="'.$video["video"].'"controls></iframe>///';
    }
}

$mediacar = explode("///", $html, 8);
