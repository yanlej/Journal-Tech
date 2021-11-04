<?php include "./header.php"; ?>

<main class="container-fluid">

<div class =" col-7 offset-2 text-center row">

<?php  


include "./Form.php";

$myForm = new Form("add.php", "Nouvel Article");

$myForm->setText("titre", "Entrez votre titre : ", "");
$myForm->setTextArea("Entrez le contenu de votre article  : ", "contenu", "");
$myForm->setText("nomAuteur", "Entrée le nom de l'auteur : ", "");
$myForm->setDate("dateDeCrea", "Date de création : ", "");
$myForm->setImage("Url de votre image ", "urlImage", "");
$myForm->setPreview();
$myForm->setDivRadioDebut();
$myForm->setCategorie("CSS", "choixCategorie", "CSS");
$myForm->setCategorie("JS", "choixCategorie", "JS");
$myForm->setCategorie("PHP", "choixCategorie", "PHP");
$myForm->setDivRadioFin();
$myForm->setSubmit();
$myForm->getForm();



?>

</div>
</main>

<?php include "./footer.php"; ?>