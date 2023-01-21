<?php
require_once("general.php");
require_once("php/contents.php");

$contents = new \satranc\contents();
$contents->selectIndex();

?>
<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="<?php echo $settings->description; ?>">
    <meta name="author" content="<?php echo $settings->author; ?>">
    <meta name="owner" content="<?php echo $settings->owner; ?>">
    <meta name="google-site-verification" content="+nxGUDJ4QpAZ5l9Bsjdi102tLVC21AIh5d1Nl23908vVuFHs34=">
    <meta name="robots" content="noindex,nofollow">
    <title><?php echo $settings->title; ?></title>
   <?php require_once("header.php"); ?>

    <main class="container">
        <div class="row">
            <div class="col-md-8">
                <section class="one-cikan">
                    "Hafif Üstün Oyun Sonu Kazanılır"
                    <br>
                    <em class="author">Magnus Carlsen</em>
                </section>
                <section class="articles">
                    <?php foreach ($contents->data as $data): ?>
                    <article class="article">
                        <h3><a href="/blog/<?php echo $data["id"]; ?>"><?php echo $data["title"]; ?></a></h3>
                        <hr>
                        <p><?php echo $data["description"] ?></p>
                    </article>
                    <?php endforeach; ?>
                </section>
            </div>
            <?php require_once("footer.php"); ?>