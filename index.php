<?php
    include 'Comparable.php';
    include 'ISport.php';
    include 'sport.php';
    include 'SportBallon.php';
    include 'sportRelais.php';
    include 'Club.php';
    include 'data.php';


    echo 'Projet Heritage et Interface :';

    echo "<br>"."<br>"."<br>";


//var_dump((int) $_GET["id"]);

// Liste des clubs

foreach ($club as $kClub => $vClub) {
    echo '<a href="index.php?id='.$vClub->getIdClub().'">'.$vClub->getNomClub().'</a><br>';
}

if (isset($_GET["id"])) {
    echo "<br>→ Nom du Club : " . $club[$_GET["id"]]->getNomClub()."<br>";
    foreach ($club[$_GET["id"]]->getLesSports() as $kSport => $vSport) {
        echo "» ".$vSport->getNomSport()."<br>";
    }
}

/*
foreach ($club[2]->getLesSports() as $kSport => $vSport) {
    echo $vSport->getNomSport().'<br>';
}
*/
    /**
     foreach ($listSport as $keyListSport => $valueListSport)
    {
        echo $valueListSport->getDescription()."<br>";
    }**/
    /**
    foreach ($listClub as $value) {
        echo $value->getNomClub()."<br>";
    }**/
    echo "<br>"."Vous vous trouvez actuellement dans dans l'ID de Club n°" . $_GET['id'] . "<br>" . "<br>";



    echo "<br>"."<br>"."<br>"."<br>"."<br>";
    echo "𝑃𝑜𝑢𝑟 𝑚𝑜𝑛 𝑐ℎ𝑒𝑟 𝑎𝑚𝑖 𝐸𝑣𝑟𝑎𝑟𝑑";