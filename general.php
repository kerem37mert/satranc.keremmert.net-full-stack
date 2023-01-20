<?php

//AYARLAR------
require_once("php/settings.php");
$settings = new \satranc\settings();
$settings->select();
//--------------

//Rating------
require_once("php/fideRatingBot.php");
$fideRatingBot = new \satranc\fideRatingBot();

?>