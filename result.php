<?php
include 'Comparable.php';
include 'ISport.php';
include 'sport.php';
include 'SportBallon.php';
include 'sportRelais.php';
include 'Club.php';
include 'data.php';

if (isset($_GET["id"]) || isset($_POST["club"])) {
    if (isset($_GET["id"])) {
        $id = $_GET["id"];
    } else {
        $id = $_POST['id'];
    }

    echo "<br>→ Nom du Club : " . $club[$_GET["id"]]->getNomClub()."<br>"."<br>";
    foreach ($club[$_GET["id"]]->getLesSports() as $kSport => $vSport) {
        echo "» ".$vSport->getNomSport()."<br>";
    }
}

var_dump($_POST);
echo "<br> <a href='index.php'>↩ Retour</a><br>";