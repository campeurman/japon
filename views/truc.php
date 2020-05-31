<?php // case "religion":
		// 	$include = "views/religion.php";
		// 	break;
		// case "histoire":
		// 	$include = "views/histoire.php";
		// 	break;
		// case"economie":
		// 	$include = "views/economie.php";
		// 	break;
		// case "politique";
		// 	$include = "views/politique.php";
		// 	break;
		// case "cinema":
		// 	$include = "views/cinema.php";
		// 	break;
		// case "manga":
		// 	$include = "views/manga.php";
		// 	break;
		// case "artraditionelle":
		// 	$include = "views/artraditionelle.php";
		// 	break;
		// case"musique":
		// 	$include = "views/musique.php";
		// 	break;
		// case "entree";
		// 	$include = "views/entree.php";
		// 	break;
		// case "riz":
		// 	$include = "views/riz.php";
		// 	break;
		// case "fondue":
		// 	$include = "views/fondue.php";
		// 	break;
		// case "viande":
		// 	$include = "views/viande.php";
		// 	break;
		// case"poisson":
		// 	$include = "views/poisson.php";
		// 	break;
		// case "sptraditionelle";
		// 	$include = "views/sptraditionelle.php";
		// 	break;
		// case "scolaire":
		// 	$include = "views/spscolaire.php";
		// 	break;
		// case "actuel":
		// 	$include = "views/spactuel.php";
		// 	break;
		// case "leurs_debuts":
		// 	$include = "views/leurs_debuts.php";
		// 	break;
		// case"leurs_democratisations":
		// 	$include = "views/leurs_democratisations.php";
		// 	break;
		// case "les_actuelles";
		// 	$include = "views/les_actuelles.php";
		// 	break; ?>

function choix() {
		var_dump($_POST["choix"]);
		if($_POST["choix"] == "enregistrer") {
            $template="views/enregistrer.php";
		}elseif($_POST["choix"] == "modifier") {
            $template="views/modifier.php";
		}elseif($_POST["choix"] == "supprimer") {
            $template="views/supprimer.php";
		}else {
            $template = "views/lecture.php";
		}
		return ["template"=>$template];
	}