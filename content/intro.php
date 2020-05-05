<?php
/**
 * Created by PhpStorm.
 * User: Anakeen
 * Date: 28/10/2019
 * Time: 15:26
 */
$page = "intro"; //__variable pour la classe "current" du menu

$url[0] = 'intro';
if(!isset($url[1])){
    $titre = "Présentation du Groupe KAPITALIS";

//__variables pour les balises méta
    $description = "Présentation de KAPITALIS Sarl";
    $keyword = "{real estate, immobilier, btp, bâtiment, conseil, cabinet}";
    $robotName = "";
    $robotContent = "";
    $author = "Leio Ndongo";
    $title = "KAPITALIS SARL";

    $head_items = "";

    require_once $_SERVER['DOCUMENT_ROOT'] . '/kptalis.cm/content/vues/intro/about.php';
}
else{
    if($url[1] == 'about'){

        $titre = "Présentation du Groupe KAPITALIS";

//__variables pour les balises méta
        $description = "Présentation de KAPITALIS Sarl";
        $keyword = "{real estate, immobilier, btp, bâtiment, conseil, cabinet}";
        $robotName = "";
        $robotContent = "";
        $author = "Leio Ndongo";
        $title = "KAPITALIS SARL";

        $head_items = "";

        require_once $_SERVER['DOCUMENT_ROOT'] . '/kptalis.cm/content/vues/intro/about.php';
    }
    elseif(($url[1] == 'welcome')){

        $titre = "Mot de bienvenue du CEO";

//__variables pour les balises méta
        $description = "Mot de bienvenue par le Chief Executive Officer";
        $keyword = "{real estate, immobilier, btp, bâtiment, conseil, cabinet}";
        $robotName = "";
        $robotContent = "";
        $author = "Leio Ndongo";
        $title = "Welcome to KAPITALIS Sarl";

        $head_items = "";

        require_once $_SERVER['DOCUMENT_ROOT'] . '/kptalis.cm/content/vues/intro/welcome.php';

    }
}



?>

