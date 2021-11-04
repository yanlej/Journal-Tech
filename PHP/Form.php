<?php

class Form{

public $html;
public $element;
public $texte;
public $erreurValidation;
public $textArea;
public $image;
public $preview;
public $divRadioDebut;
public $radio;
public $divRadioFin;
public $date;
public $submit;


public function __construct($action, $titre, $method = "POST"){

    $this->element="<form action =\"$action\" method = \"$method\" class =\"needs-validation\" novalidate>";
    $this->element.="<fieldset> <legend>$titre</legend>";
}

public function setText($nom, $label, $value, $method = "POST"){

    $this->texte .= "$label<br><input type =\"text\" name = \"$nom\" class =\"inputPublier form-control\" value = '$value' required><br>";

}

public function setErreurValidation(){

$this->erreurValidation .= "<div class =\"invalid-feedback\">Veuillez remplir correctement ce champs svp !</div>";

}

public function setTextArea($label, $nom, $value, $method= "POST"){

    $this->textArea .= "$label<br><textarea name = \"$nom\" class =\"inputPublier textAreaPublier form-control\" value = '$value' required></textarea><br>";
}

public function setImage($label, $nom, $value, $method = "POST"){

    $this->image .= "$label<br><input type = \"url\" name=\"$nom\" class =\"inputPublier form-control\" size=\"50\" id =\"preview\" value = '$value' required><br>";
}

public function setPreview(){

    $this->preview .="<img src =\"\" class = \"imgPreview\" id =\"ImgPreview\"><br>";
}

public function setDate($nom, $label, $value, $method = "POST"){

    $this->date .= "$label<br> <input type = \"date\" name = \"$nom\" class =\"inputPublier\" value = '$value' required><br>";

}

public function setDivRadioDebut(){

    $this->divRadioDebut .= "<div class =\"form-check\">";
}

public function setCategorie($label, $nom, $value){

    $this->radio .= "$label<input type=\"radio\" name=\"$nom\" value=\"$value\" class =\"inputRadio form-check-input\"><br>";
}

public function setDivRadioFin(){

    $this->divRadioFin .= "</div>";
}

public function setSubmit($nom = "Publie", $envoi = "Publiez"){

    $this->submit = "<input type=\"submit\" name = \"$nom\" value = \"$envoi\"><br>";   

}

public function getForm(){

    $this->html = "";
    $this->html .= $this->element;
    $this->html .= $this->texte;
    $this->html .= $this->erreurValidation;
    $this->html .= $this->textArea;
    $this->html .= $this->date;
    $this->html .= $this->image;
    $this->html .= $this->preview;
    $this->html .= $this->divRadioDebut;
    $this->html .= $this->radio;
    $this->html .= $this->divRadioFin;
    $this->html .= $this->submit;
    $this->html .= "</fieldset></form>";

    echo $this->html;
}
}

?>