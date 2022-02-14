<?php
    include 'Comparable.php';
    include 'ISport.php';
    include 'sport.php';
    include 'SportBallon.php';
    include 'sportRelais.php';
    include 'Club.php';


    echo 'Projet Heritage et Interface :';

    echo "<br>"."<br>"."<br>";

    $club = array();
    $club[1] = new Club(1, "Dijon",63);
    $club[2] = new Club(2, "PSG",67);
    $club[3] = new Club(3, "Nantes",65);


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


// Les sports de Dijon
    $listSport[1] = new SportBallon("Basketball", 5, 35, 45);

// Les sports de PSG
$sport1 = new Sport("Javelot", 1);
$sport2 = new Sport("Judo", 1);
$sportBallon1 = new SportBallon("Football", 11, 68, 105);
$sportBallon2 = new SportBallon("Handball", 7, 35, 65);
$sportRelais1 = new SportRelais("4 * 100", 400, 4);
$club[2]->AjouterSport($sport1);
$club[2]->AjouterSport($sport2);
$club[2]->AjouterSport($sportBallon1);
$club[2]->AjouterSport($sportBallon2);
$club[2]->AjouterSport($sportRelais1);

// Les sports Nantes
$sport3 = new Sport("Cyclisme", 1);
$sportBallon3 = new SportBallon("FootBall", 11, 68, 105);
$sportBallon4 = new SportBallon("Ruby", 15, 65, 115);
$sportRelais2 = new SportRelais("100m", 100, 1);
$club[3]->AjouterSport($sport3);
$club[3]->AjouterSport($sportBallon3);
$club[3]->AjouterSport($sportBallon4);
$club[3]->AjouterSport($sportRelais2);

    /*
     foreach ($listSport as $keyListSport => $valueListSport)
    {
        echo $valueListSport->getDescription()."<br>";
    }*/

    echo "<br>"."Liste des clubs : "."<br>"."<br>";
    /*
    foreach ($listClub as $value) {
        echo $value->getNomClub()."<br>";
    }*/
?>
<!DOCTYPE html>
<html>
<body>

<a href="/?id=1">Dijon, id : 1</a> <br>
<a href="/?id=2">PSG, id : 2</a> <br>
<a href="/?id=3">Nantes, id : 3</a> <br> <br> <br>

</body>
</html>

<?php

    echo "Salut les amis ! Club ID : " . $_GET['id'] . "<br>" . "<br>";

if ($_GET = 1) {
    foreach ($listSport as $keyListSport => $valueListSport)
    {
        echo $valueListSport->getDescription()."<br>";
    }
}

if ($_GET['/?id=1']) {
    echo "Bonsoir le monde";
}




    echo "<br>"."<br>"."<br>"."<br>"."<br>";
    echo "𝑃𝑜𝑢𝑟 𝑚𝑜𝑛 𝑐ℎ𝑒𝑟 𝑎𝑚𝑖 𝐸𝑣𝑟𝑎𝑟𝑑";