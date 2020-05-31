<?php
$i = 0;
$text='<div id = idtext>';
$bout='<div id = idclic>';//<form action="choix" method="post">
foreach($boutons as $bouton) {
    $bout.='<button type = button value= '.$bouton["titre"].' class= bouton'.$i .'>'.$bouton["titre"].'</button>';
    $i++;
}
$text.="</div>";
$bout.="</div>";

    // if($_GET["choix"] == "0") {
    //     $template="views/enregistrer.php";
    // }elseif($_GET["choix"] == "modifier") {
    //     $template="views/modifier.php";
    // }elseif($_GET["choix"] == "supprimer") {
    //     $template="views/supprimer.php";
    // }else {
    //     $template = "views/lecture.php";
    // }
    // return ["template"=>$template];


