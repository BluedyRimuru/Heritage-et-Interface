<?php

class SportRelais extends sport
{
    private $distance;

    /**
     * @param $distance
     */
    public function __construct(string $nomSport, int $nbJoueurs, int $distance)
    {
        parent::__construct($nomSport, $nbJoueurs);
        $this->distance = $distance;
    }


    /**
     * @return mixed
     */
    public function getDistance()
    {
        return $this->distance;
    }

    public function getDescription(): string
    {
        return '» Description → Nom du sport : ' . $this->getNomSport(). ' - Nombre de joueur : ' . $this->nbJoueurs. ' - Distance : '. $this->distance . '<br>';
    }

}