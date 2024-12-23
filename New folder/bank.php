<?php
class Compte {
    private $montant;
    private $interet;

    public function __construct($montant, $interet) {
        $this->montant = $montant;
        $this->interet = $interet;
    }

    public function getMontant() {
        return $this->montant;
    }

    public function unAn() {
        $this->montant += $this->montant * ($this->interet / 100);
    }
}

$compte1 = new Compte(200, 20); 
$compte2 = new Compte(1000, 2); 

for ($i = 0; $i < 10; $i++) {
    $compte1->unAn();
    $compte2->unAn();
}

echo "Montant du compte 1 après 10 ans: " . $compte1->getMontant() . " dirhams\n"."<br>";
echo "Montant du compte 2 après 10 ans: " . $compte2->getMontant() . " dirhams\n";
?>
