<?php

include "./connexion.php";
include "./Affichage.php";
include "./Form.php";

$affichageArticle = $db->prepare("SELECT * FROM articles");
$affichageArticle->execute();

$result = $db->query("SELECT * FROM articles");

$formEdit = new Form("edit.php", "Modifier Article");

$formEdit->setText("titre", "Entrez votre titre : ", $article[1]);
$formEdit->setTextArea("Entrez le contenu de votre article  : ", "contenu", $article[5]);
$formEdit->setText("nomAuteur", "Entrée le nom de l'auteur : ", $article[4]);
$formEdit->setDate("dateDeCrea", "Date de création : ", $article[3]);
$formEdit->setImage("Url de votre image ", "urlImage", $article[2]);
$formEdit->setPreview();
$formEdit->setDivRadioDebut();
$formEdit->setCategorie("CSS", "choixCategorie", "CSS");
$formEdit->setCategorie("JS", "choixCategorie", "JS");
$formEdit->setCategorie("PHP", "choixCategorie", "PHP");
$formEdit->setDivRadioFin();
$formEdit->setSubmit();
$formEdit->getForm();

?>