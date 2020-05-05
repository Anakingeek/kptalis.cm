<?php
//require_once $_SERVER['DOCUMENT_ROOT'].'/kptalis.cm/webroot.config.php';

define("WEBROOT","/kptalis.cm/");
/*
$author = "Leio NDONGO";

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

if(isset($_GET['url'])){$url = explode('/', $_GET['url']);}
if($_GET['url'][0] == 'kptalis.cm'){
    $_GET['url'][0] = '';
    $_GET['url'][1] = "dashboard";
}
*/


if(!isset($_GET["url"])){$_GET["url"]="home";}
$url = explode('/', $_GET['url']);
if($url[0] == '' || $url[0] == 'kptalis.cm/'){
    $url[0] = 'home';
    $url[1] = '';
}

//if(!file_exists("content/".$url[0].".php")){$url[0]="pagenotfound";}
ob_start();
include "content/".$url[0].".php";
$content = ob_get_contents();
ob_end_clean();

include "frame.php";
?>
