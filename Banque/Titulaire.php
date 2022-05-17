<?php

class Titulaire
{
    private string $name;
    private string $surName;
    private DateTime $bDay;
    private string $city;
    private array $listCompte;

    // Construct
    public function __construct(string $name, string $surName, DateTime $bDay, string $city)
    {
        $this->name = $name;
        $this->surName = $surName;
        $this->bDay = $bDay;
        $this->city = $city;
        $this->listCompte = [];
    }
    // Getter
    public function getName()
    {
        return $this->name;
    }

    public function getSurName()
    {
        return $this->surName;
    }

    public function getBDay()
    {
        return $this->bDay;
    }

    public function getCity()
    {
        return $this->city;
    }
    // Setter
    public function setName($newName)
    {
        $this->name = $newName;
    }

    public function setSurName($newSurName)
    {
        $this->surName = $newSurName;
    }

    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }
    public function getAge()
    {
        return $this->getBDay()->diff(new DateTime())->format("%y");
    }
    // Function other
    public function addCompte(Compte $compte)
    {
        $this->listCompte[] = $compte;
    }
    
    public function displayCompte()
    {
        foreach ($this->listCompte as $compte) {
            echo $compte->getLibel()." ";
        }
    }
    
    public function __toString()
    {
        return "<strong>Titulaire : Mme/M :</strong>"." ". $this->name." " .$this->surName."<br><br>".
            "<strong>Information :</strong>"."<br>".
            $this->getAge()." ans"."<br>".
            $this->city."<br>";
    }
}
