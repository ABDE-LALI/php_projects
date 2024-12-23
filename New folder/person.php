<?php
class personne {
    public $nom;
    public $prenom;
    public $date_naissance;
    public function __construct($nom, $prenom, $date_naissance)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->date_naissance = $date_naissance;
    }
    public function presenter(){
        return "je m'appelle :$this->prenom $this->nom <br>";
    }
    public function age(){
       echo "age :".date_diff(date_create($this->date_naissance), date_create('today'))->y."<br>";
    }
}
$ana =new  personne("ana", "anaana", "2001-08-15");
$houwa =new  personne("houwa", "houwahouwa", "2001-05-01");
echo $ana->presenter();
echo $ana->age();
echo $houwa->presenter();
echo $houwa->age();
?>