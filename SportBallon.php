<?php

class SportBallon extends sport
{
    private $largeur;
    private $longueur;

    public function __construct(string $nomSport, int $nbJoueurs, int $largeur, int $longueur)
    {
        parent::__construct($nomSport, $nbJoueurs);
        $this->largeur = $largeur;
        $this->longueur = $longueur;
    }

    /**
     * @return int
     */
    public function getLargeur()
    {
        return $this->largeur;
    }

    /**
     * @return int
     */
    public function getLongueur()
    {
        return $this->longueur;
    }

    public function getDescription(): string
    {
        return '» Description → Nom du sport : ' . $this->getNomSport(). ' - Nombre de joueur : ' . $this->nbJoueurs. ' - Longueur : '. $this->longueur . ' - Largeur : '. $this->largeur . '<br>';
    }
}