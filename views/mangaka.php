<?php 
//recree des articles a partir du tableau datas 
if(isset($include['datas']['manga'])) { 
$mangas = $include["datas"]["manga"];
$html ='<section id="cadre">';
$i=1;
foreach($mangas as $manga) {
    $html.="<article class=\"card\" id=\"rec".$i . "><div class=\"text\"><h2>" . $manga->getNom() . "</h2><p>dans le style ". $manga->getGenre() ." sortie en ".$manga->getAnnee() ."</p><p>" .$manga->getCommentaire() ."</p></div></article>";
    $i++;
}
$html.="</section>";

echo $html;
}
?>