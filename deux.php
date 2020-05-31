<?php
$i = 0;
$bout="";
foreach($boutons as $bouton) {
    $bout.='<button class="bouton'.$i.'onclick="$dialog.showModal()">'.$bouton["titre"].'</button>';
    $i++;
};