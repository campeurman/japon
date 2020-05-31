<?php

$image1 = ["image"=>"CIMG0131.jpg"];
$image2 = ["image"=>"sake.jpg"];
$image3 = ["image"=>"gei.jpg"];
$image4 = ["image"=>"statue.jpg"];
$image5 = ["image"=>"tenu.jpg"];
/*["image6"=>"blabla6.jpg"]
["image7"=>"blabla7.jpg"];
["image8"=>"blabla8.jpg"];*/
$images = [$image1, $image2, $image3, $image4, $image5];

$video1 = ["video"=>"https://www.youtube.com/embed/y0w64iSUfZI"];
$video2 = ["video"=>"https://www.youtube.com/embed/KlAC8RMzxGw"];
$video3 = ["video"=>"https://www.youtube.com/embed/suURUXGLJRQ"];
$videos = [$video1, $video2, $video3];
require "models/un.php";
require "carou.php" ;
$recette1 = [
    "titre"=>"yakiudon1", 
    "page"=>"yakiudon.html",
    "image"=>"yakiudon.jpg",
    "description"=>"Fraîche, très parfumée, savoureuse au mille saveurs tout autant que simple, telle est la salade niçoise. A consommer sans modération en été, pour profiter des bons produits frais.",
    "personnes"=>4,
    "temps"=>28,
    "difficulte"=>0,
    "cout"=>1,
    "ingredients"=>"4 tomates rondes assez fermes///4 oeufs///2 oignons cébettes (ou petits oignons)///8 févettes (petites fèves)///1 poivron vert///200 g de thon au naturel///4 filets d'anchois au sel///Olives noires de Nice (si possible)///feuille de basilic///8 radis///Vinaigre de vin rouge///Huile d'olive///Poivre///Sel",
    "etapes"=>"Pour réaliser la salade niçoise, il suffit de rassembler tous les ingrédients, puis de procéder de la manière suivante...///Faire durcir les oeufs (6 à 8 minutes après ébullition de l'eau), puis les faire bien refroidir à l'eau froide.///Hacher les cébettes et les disposer au fond du plat.///Ajouter les févettes, le poivron vert finement coupé, les radis coupés en rondelles et le thon bien égouté et émietté. Mélanger grossièrement tous ces ingrédients avec du sel et du poivre.///Couper les tomates en fines rondelles et les ajouter. Couper les oeufs durs en quartiers et les disposer sur le dessus et ajouter les filets d'anchois, les olives noires et le basilic finement ciselé.///Enfin, saupoudrer de sel et de poivre, puis arroser d'huile d'olive et de vinaigre de vin.///Mettre au frais 1 heure et bien mélanger la salade juste avant de la servir."
    ];
$recette2 = [
    "titre"=>"yakiudon2", 
    "page"=>"yakiudon.html",
    "image"=>"yakiudon.jpg",
    "description"=>"Fraîche, très parfumée, savoureuse au mille saveurs tout autant que simple, telle est la salade niçoise. A consommer sans modération en été, pour profiter des bons produits frais.",
    "personnes"=>4,
    "temps"=>28,
    "difficulte"=>0,
    "cout"=>1,
    "ingredients"=>"4 tomates rondes assez fermes///4 oeufs///2 oignons cébettes (ou petits oignons)///8 févettes (petites fèves)///1 poivron vert///200 g de thon au naturel///4 filets d'anchois au sel///Olives noires de Nice (si possible)///feuille de basilic///8 radis///Vinaigre de vin rouge///Huile d'olive///Poivre///Sel",
    "etapes"=>"Pour réaliser la salade niçoise, il suffit de rassembler tous les ingrédients, puis de procéder de la manière suivante...///Faire durcir les oeufs (6 à 8 minutes après ébullition de l'eau), puis les faire bien refroidir à l'eau froide.///Hacher les cébettes et les disposer au fond du plat.///Ajouter les févettes, le poivron vert finement coupé, les radis coupés en rondelles et le thon bien égouté et émietté. Mélanger grossièrement tous ces ingrédients avec du sel et du poivre.///Couper les tomates en fines rondelles et les ajouter. Couper les oeufs durs en quartiers et les disposer sur le dessus et ajouter les filets d'anchois, les olives noires et le basilic finement ciselé.///Enfin, saupoudrer de sel et de poivre, puis arroser d'huile d'olive et de vinaigre de vin.///Mettre au frais 1 heure et bien mélanger la salade juste avant de la servir."
];
$recette3 = [
    "titre"=>"yakiudon3", 
    "page"=>"yakiudon.html",
    "image"=>"yakiudon.jpg",
    "description"=>"Fraîche, très parfumée, savoureuse au mille saveurs tout autant que simple, telle est la salade niçoise. A consommer sans modération en été, pour profiter des bons produits frais.",
    "personnes"=>4,
    "temps"=>28,
    "difficulte"=>0,
    "cout"=>1,
    "ingredients"=>"4 tomates rondes assez fermes///4 oeufs///2 oignons cébettes (ou petits oignons)///8 févettes (petites fèves)///1 poivron vert///200 g de thon au naturel///4 filets d'anchois au sel///Olives noires de Nice (si possible)///feuille de basilic///8 radis///Vinaigre de vin rouge///Huile d'olive///Poivre///Sel",
    "etapes"=>"Pour réaliser la salade niçoise, il suffit de rassembler tous les ingrédients, puis de procéder de la manière suivante...///Faire durcir les oeufs (6 à 8 minutes après ébullition de l'eau), puis les faire bien refroidir à l'eau froide.///Hacher les cébettes et les disposer au fond du plat.///Ajouter les févettes, le poivron vert finement coupé, les radis coupés en rondelles et le thon bien égouté et émietté. Mélanger grossièrement tous ces ingrédients avec du sel et du poivre.///Couper les tomates en fines rondelles et les ajouter. Couper les oeufs durs en quartiers et les disposer sur le dessus et ajouter les filets d'anchois, les olives noires et le basilic finement ciselé.///Enfin, saupoudrer de sel et de poivre, puis arroser d'huile d'olive et de vinaigre de vin.///Mettre au frais 1 heure et bien mélanger la salade juste avant de la servir."
];
$recette4 = [
"titre"=>"yakiudon4", 
"page"=>"yakiudon.html",
"image"=>"yakiudon.jpg",
"description"=>"Fraîche, très parfumée, savoureuse au mille saveurs tout autant que simple, telle est la salade niçoise. A consommer sans modération en été, pour profiter des bons produits frais.",
"personnes"=>4,
"temps"=>28,
"difficulte"=>0,
"cout"=>1,
"ingredients"=>"4 tomates rondes assez fermes///4 oeufs///2 oignons cébettes (ou petits oignons)///8 févettes (petites fèves)///1 poivron vert///200 g de thon au naturel///4 filets d'anchois au sel///Olives noires de Nice (si possible)///feuille de basilic///8 radis///Vinaigre de vin rouge///Huile d'olive///Poivre///Sel",
"etapes"=>"Pour réaliser la salade niçoise, il suffit de rassembler tous les ingrédients, puis de procéder de la manière suivante...///Faire durcir les oeufs (6 à 8 minutes après ébullition de l'eau), puis les faire bien refroidir à l'eau froide.///Hacher les cébettes et les disposer au fond du plat.///Ajouter les févettes, le poivron vert finement coupé, les radis coupés en rondelles et le thon bien égouté et émietté. Mélanger grossièrement tous ces ingrédients avec du sel et du poivre.///Couper les tomates en fines rondelles et les ajouter. Couper les oeufs durs en quartiers et les disposer sur le dessus et ajouter les filets d'anchois, les olives noires et le basilic finement ciselé.///Enfin, saupoudrer de sel et de poivre, puis arroser d'huile d'olive et de vinaigre de vin.///Mettre au frais 1 heure et bien mélanger la salade juste avant de la servir."
];
$recette5 = [
    "titre"=>"yakiudon", 
    "page"=>"yakiudon.html",
    "image"=>"yakiudon.jpg",
    "description"=>"Fraîche, très parfumée, savoureuse au mille saveurs tout autant que simple, telle est la salade niçoise. A consommer sans modération en été, pour profiter des bons produits frais.",
    "personnes"=>4,
    "temps"=>28,
    "difficulte"=>0,
    "cout"=>1,
    "ingredients"=>"4 tomates rondes assez fermes///4 oeufs///2 oignons cébettes (ou petits oignons)///8 févettes (petites fèves)///1 poivron vert///200 g de thon au naturel///4 filets d'anchois au sel///Olives noires de Nice (si possible)///feuille de basilic///8 radis///Vinaigre de vin rouge///Huile d'olive///Poivre///Sel",
    "etapes"=>"Pour réaliser la salade niçoise, il suffit de rassembler tous les ingrédients, puis de procéder de la manière suivante...///Faire durcir les oeufs (6 à 8 minutes après ébullition de l'eau), puis les faire bien refroidir à l'eau froide.///Hacher les cébettes et les disposer au fond du plat.///Ajouter les févettes, le poivron vert finement coupé, les radis coupés en rondelles et le thon bien égouté et émietté. Mélanger grossièrement tous ces ingrédients avec du sel et du poivre.///Couper les tomates en fines rondelles et les ajouter. Couper les oeufs durs en quartiers et les disposer sur le dessus et ajouter les filets d'anchois, les olives noires et le basilic finement ciselé.///Enfin, saupoudrer de sel et de poivre, puis arroser d'huile d'olive et de vinaigre de vin.///Mettre au frais 1 heure et bien mélanger la salade juste avant de la servir."
    ];
$recette6 = [
    "titre"=>"yakiudon", 
    "page"=>"yakiudon.html",
    "image"=>"yakiudon.jpg",
    "description"=>"Fraîche, très parfumée, savoureuse au mille saveurs tout autant que simple, telle est la salade niçoise. A consommer sans modération en été, pour profiter des bons produits frais.",
    "personnes"=>4,
    "temps"=>28,
    "difficulte"=>0,
    "cout"=>1,
    "ingredients"=>"4 tomates rondes assez fermes///4 oeufs///2 oignons cébettes (ou petits oignons)///8 févettes (petites fèves)///1 poivron vert///200 g de thon au naturel///4 filets d'anchois au sel///Olives noires de Nice (si possible)///feuille de basilic///8 radis///Vinaigre de vin rouge///Huile d'olive///Poivre///Sel",
    "etapes"=>"Pour réaliser la salade niçoise, il suffit de rassembler tous les ingrédients, puis de procéder de la manière suivante...///Faire durcir les oeufs (6 à 8 minutes après ébullition de l'eau), puis les faire bien refroidir à l'eau froide.///Hacher les cébettes et les disposer au fond du plat.///Ajouter les févettes, le poivron vert finement coupé, les radis coupés en rondelles et le thon bien égouté et émietté. Mélanger grossièrement tous ces ingrédients avec du sel et du poivre.///Couper les tomates en fines rondelles et les ajouter. Couper les oeufs durs en quartiers et les disposer sur le dessus et ajouter les filets d'anchois, les olives noires et le basilic finement ciselé.///Enfin, saupoudrer de sel et de poivre, puis arroser d'huile d'olive et de vinaigre de vin.///Mettre au frais 1 heure et bien mélanger la salade juste avant de la servir."
];
$recette7 = [
    "titre"=>"yakiudon", 
    "page"=>"yakiudon.html",
    "image"=>"yakiudon.jpg",
    "description"=>"Fraîche, très parfumée, savoureuse au mille saveurs tout autant que simple, telle est la salade niçoise. A consommer sans modération en été, pour profiter des bons produits frais.",
    "personnes"=>4,
    "temps"=>28,
    "difficulte"=>0,
    "cout"=>1,
    "ingredients"=>"4 tomates rondes assez fermes///4 oeufs///2 oignons cébettes (ou petits oignons)///8 févettes (petites fèves)///1 poivron vert///200 g de thon au naturel///4 filets d'anchois au sel///Olives noires de Nice (si possible)///feuille de basilic///8 radis///Vinaigre de vin rouge///Huile d'olive///Poivre///Sel",
    "etapes"=>"Pour réaliser la salade niçoise, il suffit de rassembler tous les ingrédients, puis de procéder de la manière suivante...///Faire durcir les oeufs (6 à 8 minutes après ébullition de l'eau), puis les faire bien refroidir à l'eau froide.///Hacher les cébettes et les disposer au fond du plat.///Ajouter les févettes, le poivron vert finement coupé, les radis coupés en rondelles et le thon bien égouté et émietté. Mélanger grossièrement tous ces ingrédients avec du sel et du poivre.///Couper les tomates en fines rondelles et les ajouter. Couper les oeufs durs en quartiers et les disposer sur le dessus et ajouter les filets d'anchois, les olives noires et le basilic finement ciselé.///Enfin, saupoudrer de sel et de poivre, puis arroser d'huile d'olive et de vinaigre de vin.///Mettre au frais 1 heure et bien mélanger la salade juste avant de la servir."
];
$recette8 = [
"titre"=>"yakiudon", 
"page"=>"yakiudon.html",
"image"=>"yakiudon.jpg",
"description"=>"Fraîche, très parfumée, savoureuse au mille saveurs tout autant que simple, telle est la salade niçoise. A consommer sans modération en été, pour profiter des bons produits frais.",
"personnes"=>4,
"temps"=>28,
"difficulte"=>0,
"cout"=>1,
"ingredients"=>"4 tomates rondes assez fermes///4 oeufs///2 oignons cébettes (ou petits oignons)///8 févettes (petites fèves)///1 poivron vert///200 g de thon au naturel///4 filets d'anchois au sel///Olives noires de Nice (si possible)///feuille de basilic///8 radis///Vinaigre de vin rouge///Huile d'olive///Poivre///Sel",
"etapes"=>"Pour réaliser la salade niçoise, il suffit de rassembler tous les ingrédients, puis de procéder de la manière suivante...///Faire durcir les oeufs (6 à 8 minutes après ébullition de l'eau), puis les faire bien refroidir à l'eau froide.///Hacher les cébettes et les disposer au fond du plat.///Ajouter les févettes, le poivron vert finement coupé, les radis coupés en rondelles et le thon bien égouté et émietté. Mélanger grossièrement tous ces ingrédients avec du sel et du poivre.///Couper les tomates en fines rondelles et les ajouter. Couper les oeufs durs en quartiers et les disposer sur le dessus et ajouter les filets d'anchois, les olives noires et le basilic finement ciselé.///Enfin, saupoudrer de sel et de poivre, puis arroser d'huile d'olive et de vinaigre de vin.///Mettre au frais 1 heure et bien mélanger la salade juste avant de la servir."
];
$recettes=[$recette1, $recette2, $recette3, $recette4, $recette5, $recette6, $recette7, $recette8];
$html ='<section id="cadre">';

$i=1;
foreach($recettes as $recette) {
    $html.="<article class=\"card\" id=\"rec".$i . "\"><img src=\"" . $recette["image"] . "\"><div class=\"text\"><h2>" . $recette["titre"] . "</h2><p>" .$recette["description"] ."</p></div></article>";
    $i++;
}
$html.="</section>";
echo $html;