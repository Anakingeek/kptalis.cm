<?php
$author = "Leio NDONGO";
require 'vendor/autoload.php';
/*

//Tableaux des jours et des mois traduits en français
$month_fr = ["", "Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre"];
// on extrait la date du jour

$extract = explode('/', date("d/n/Y"));
$day = $extract[0];
$month = $month_fr[$extract[1]];
$year = $extract[2];

$date = $day.' '.$month.' '.$year;

setlocale(LC_TIME, 'fr');
$today = strftime('%d/%m/%Y');

/**
 * Mise en place du routeur
 */

$pageView = '';
$url = '';

if(!isset($_GET['url'])){
    $url = "home";
    $path = $url;
}
else{
    $url = explode('/', $_GET['url']);
       
    if(!preg_match_all("#^[a-z\-]+$#", $url[0])){
        $url[0] ="error";
    }else{
        $url[0] = str_replace("-", "", $url[0]);    
    }
    $path = $url[0];

        // if(isset($url[1]) && preg_match_all("#^[a-z\-\w]+$#", $url[1])){
        //     $slug = $url[1]; dump($slug);
        // }


}
if(!file_exists ("contents/{$path}.php")){
    $url = "error";
    $path = $url;

}

ob_start();
require "contents/{$path}.php";
$pageView = ob_get_clean();
require_once "layout.php";

// //if(!file_exists("content/".$url[0].".php")){$url[0]="pagenotfound";}
// ob_start();
// include "content/".$url[0].".php";
// $content = ob_get_contents();
// ob_end_clean();

// include "frame.php";
?>
