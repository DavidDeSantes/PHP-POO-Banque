<?php

class Compte
{
    private string $libel;
    private float $sold;
    private string $devise;
    private Titulaire $titulaire;

    // Construct
    public function __construct(string $libel, float $sold, string $devise, Titulaire $titulaire)
    {
        $this->libel = $libel;
        $this->sold = $sold;
        $this->devise = $devise;
        $this->titulaire = $titulaire;
        $this->titulaire->addCompte($this);
    }
    // Getter
    public function getLibel()
    {
        return $this->libel;
    }

    public function getSold()
    {
        return $this->sold;
    }

    public function getDevise()
    {
        return $this->devise;
    }

    public function getTitulaire()
    {
        return $this->titulaire;
    }
    // Function other
    public function credit(float $credMontant)
    {
        $this->sold += $credMontant;
        //  $this -> sold = $this -> sold + $credMontant; ( Les deux façon de faire)
    }

    public function debit(float $debMontant)
    {
        $this->sold -= $debMontant;
        //  $this -> sold = $this -> sold - $debMontant;  ( Les deux façon de faire)
    }

    public function virement(float $virMontant, Compte $compteCible)
    {
        $this->debit($virMontant);
        $compteCible->credit($virMontant);
    }

    public function __toString()
    {
        return "<strong>Compte bancaire de : </strong>".$this->titulaire->getName(). " " .$this->titulaire->getSurName()."<br><br>".
        "<strong>Information :</strong>"."<br>".
        $this->libel."<br>".
        $this->sold." ".$this->devise; 
    }
}
