<?php include "./header.php"; ?>

<body>

<main>

<section class="container-fluid">

<div class="row">

<?php 

include "./Article.php";

                                            // Création de 6 nouveau objet "Article"
$article1 = new Article();
$article2 = new Article();
$article3 = new Article();
$article4 = new Article();
$article5 = new Article();
$article6 = new Article();

                                            // Création des attributs de chaques elements crées pour Article 1
$article1->setImage("../image/logo_css.png", "logo css");
$article1->setDiv1();
$article1->setTitre("Que signifie CSS et qu'elle est sa définition ?");
$article1->setTexte("CSS est l’acronyme de « Cascading Style Sheets » ce qui ...", "ArticleCss.php");
$article1->setDiv2();
$article1->setLogo("#", "../image/logo_css.png", "logo css");
$article1->setAuteur("Lejosne Yannick");
$article1->setDate("11/07/2021");
$article1->getArticle();

$article2->setImage("../image/logo_js.png", "logo js");
$article2->setDiv1();
$article2->setTitre("Javascript : définition simple");
$article2->setTexte("JavaScript désigne un langage de développement informatique, et plus...", "#");
$article2->setDiv2();
$article2->setLogo("#", "../image/logo_js.png", "logo js");
$article2->setAuteur("Adeline Trilles");
$article2->setDate("11/07/2021");
$article2->getArticle();

$article3->setImage("../image/logo_php.png", "logo php");
$article3->setDiv1();
$article3->setTitre("Qu'est ce que PHP?");
$article3->setTexte("PHP (officiellement, ce sigle est un acronyme récursif pour PHP Hypertext Preprocessor) est...", "#");
$article3->setDiv2();
$article3->setLogo("#", "../image/logo_php.png", "logo php");
$article3->setAuteur("Illiès Lalouis");
$article3->setDate("11/07/2021");
$article3->getArticle();

?>
</div>
</section>

<div class="articleb">
<section class="container-fluid">
<div class="row">

<?php

$article4->setImage("../image/logo_js.png", "logo js");
$article4->setDiv1();
$article4->setTitre("Frameworks JavaScript : quel est le meilleur d’après les développeurs ?");
$article4->setTexte("Nous avons vu la notoriété des développeurs ainsi que leur intérêt. Mais qu’en est-il de leur ...", "#");
$article4->setDiv2();
$article4->setLogo("#", "../image/logo_js.png", "logo js");
$article4->setAuteur("Yannick Lejosne");
$article4->setDate("11/07/2021");
$article4->getArticle();

$article5->setImage("../image/logo_php.png", "logo php");
$article5->setDiv1();
$article5->setTitre("Les frameworks PHP les plus populaires à utiliser en 2021");
$article5->setTexte("Contrairement à la croyance populaire, le PHP n’est pas mort. Il est encore largement utilisé par...", "#");
$article5->setDiv2();
$article5->setLogo("#", "../image/logo_php.png", "logo php");
$article5->setAuteur("Illiès Lalouis");
$article5->setDate("11/07/2021");
$article5->getArticle();

$article6->setImage("../image/logo_css.png", "logo css");
$article6->setDiv1();
$article6->setTitre("Les meilleurs frameworks css pour vos sites");
$article6->setTexte("Construire un site, c’est tout un apprentissage. Il faut qu’il soit...", "#");
$article6->setDiv2();
$article6->setLogo("#", "../image/logo_css.png", "logo css");
$article6->setAuteur("Adeline Trilles");
$article6->setDate("11/07/2021");
$article6->getArticle();

?>
</div>    
</section>
</div>

</main>

<?php include "./footer.php"; ?>