<?php

interface ISport
{
    /**
     * Renvoi du nom du sport
     * @return mixed
     */
    public function getNomSport();

    /**
     * Renvoi de la description du sport
     * @return mixed
     */
    public function getDescription();
}