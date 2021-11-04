<?php 

Class Article{

    public $html;
    public $element;
    public $image;
    public $div1;
    public $titre;
    public $texte;
    public $div2;
    public $logo;
    public $auteur;
    public $date;
    public $button;

    public function __construct(){
        
        $this->element = "<article class=\"col bordureArticle\">";

    }

    public function setImage($src, $alt){

        $this->image = "<img src=\"$src\" class=\"card-img-top imgArticle\" alt=\"$alt\">";
    }

    public function setDiv1(){

        $this->div1 = "<div class=\"card-body\">";
    }

    public function setTitre($contenuTitre){

        $this->titre = "<h3 class=\"card-title fw-bold h3index\">$contenuTitre</h3>";
    }

    public function setTexte($contenuText){

        $this->texte = "<p class=\"card-text\">$contenuText</p>";
    }

    public function setDiv2(){

        $this->div2 = "<div class=\"logo col\">";
    }

    public function setLogo($ref, $src, $alt){

        $this->logo = "<a href=\"$ref\"><img class=\"float-lg-start\" src=\"$src\" alt=\"$alt\"></a>";
    }

    public function setAuteur($nomAuteur){

        $this->auteur = "<h5 class = \"h5Article\">$nomAuteur</h5>";
    }

    public function setDate($date){

        $this->date = "<h5 class = \"h5Article\">$date</h5>";
    }

    public function setButton($num_art){

        $this->button = "<a href='formEdit.php?$num_art'><button class = 'btn' type = 'button'>Modifier</button></a><a href='delete.php?$num_art'><button class = 'btn' type = 'button'>Supprimer</button></a>"; 
    }
    

    public function getArticle(){

        $this->html = "";
        $this->html .= $this->element;
        $this->html .= $this->image;
        $this->html .= $this->div1;
        $this->html .= $this->titre;
        $this->html .= $this->texte;
        $this->html .= $this->div2;
        $this->html .= $this->logo;
        $this->html .= $this->auteur;
        $this->html .= $this->date;
        $this->html .= $this->button;
        $this->html .= "</div></div></article>";

        echo $this->html;
    }

}

?>