<?php
require_once("general.php");

$contents = new \satranc\contents();
$contents->singleSelect($_GET["id"]);

//Görüntülenme sayısı
$contents->viewsUpdate($_GET["id"]);
?>
<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="<?php echo $contents->description; ?>">
    <meta name="author" content="<?php echo $contents->author; ?>">
    <meta name="owner" content="<?php echo $settings->owner; ?>">
    <meta name="google-site-verification" content="+nxGUDJ4QpAZ5l9Bsjdi102tLVC21AIh5d1Nl23908vVuFHs34=">
    <meta name="robots" content="noindex,nofollow">
    <title><?php echo $contents->title; ?></title>
    <?php require_once("header.php"); ?>

<main class="container">
    <div class="row">
        <div class="col-md-8">
            <section class="articles">
                <article style="margin-top: -20px ;" class="article an-article">
                    <h3><?php echo $contents->title; ?></h3>
                    <hr>
                    <p><?php echo $contents->content; ?></p>
                </article>
            </section>
        </div>
        <?php require_once("footer.php"); ?>