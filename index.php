<?php
    include 'Comparable.php';
    include 'ISport.php';
    include 'sport.php';
    include 'SportBallon.php';
    include 'sportRelais.php';
    include 'Club.php';


    echo 'Projet Heritage et Interface :';

    echo "<br>"."<br>"."<br>";

    $listClub[1] = new Club(1, "PSG",67);
    $listClub[2] = new Club(2, "Nantes",65);
    $listClub[3] = new Club(3, "Dijon",63);


    $listSport[] = new Sport("Football", 11);
    $listSport[] = new SportRelais("4x100", 1, 400);
    $listSport[] = new SportRelais("100", 1, 100);
    $listSport[] = new SportRelais("200", 1, 200);
    $listSport[] = new SportBallon("HandBall", 8, 40, 50);
    $listSport[] = new SportBallon("Basket", 8, 20, 30);
    $listSport[] = new Sport("Tenis", 2);
    $listSport[] = new Sport("VTT", 1);
    $listSport[] = new Sport("Climbing", 1);
    $listSport[] = new SportRelais("CarJaking", 1, 10000);
    $listSport[] = new Sport("e-sport", 1);

    foreach ($listSport as $keyListSport => $valueListSport)
    {
        echo $valueListSport->getDescription()."<br>";
    }

    foreach ($listClub as $value) {
        echo $value->getNomClub()."<br>";
    }

    echo "<br>"."<br>"."<br>";
    echo "𝑃𝑜𝑢𝑟 𝑚𝑜𝑛 𝑐ℎ𝑒𝑟 𝑎𝑚𝑖 𝐸𝑣𝑟𝑎𝑟𝑑";