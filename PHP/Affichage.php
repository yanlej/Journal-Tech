<?php

include "./Article.php";
include "./connexion.php";

$affichageArticle = $db->prepare("SELECT * FROM articles");
$affichageArticle->execute();

$result = $db->query("SELECT * FROM articles");
?>

<main>

<section class="container-fluid">

<div class="row">

<?php
foreach($result as $article){

    $article1 = new Article ();
    $article1->setImage($article[2], "logo");
    $article1->setDiv1();
    $article1->setTitre($article[1]);
    $article1->setTexte($article[5]);
    $article1->setDiv2();
    $article1->setLogo("#", $article[2], "logo");
    $article1->setAuteur($article[4]);
    $article1->setDate($article[3]);
    $article1->setButton($article[0]);
    $article1->getArticle();

}
?>
</div>
</section>

</main>