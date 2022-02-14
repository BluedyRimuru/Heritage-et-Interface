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
    echo '<a href="result.php?id='.$vClub->getIdClub().'">'.$vClub->getNomClub().'</a><br>';
}

if ($_GET["id"]) {
    echo "<br>Club" . $club[$_GET["id"]]->getNomClub() . "<br>";
    foreach ($club[$_GET["id"]]->getLesSports() as $keySport => $valueSport) {
        echo $valueSport->getNomSport() . "<br>";
    }
}
echo "
            <br>
            Formulaire ID CLUB
            </br>
            <form method='post' name='formIdClub' action='result.php'>
                <label for='pet-select'>Choose a pet: </label>

                <select name='pets' id='pet-select'>
                    <option value=''>--Choisir un club--</option>";

foreach ($club as $kFormClub => $vFormClub)
{
    echo "<option value='".$vFormClub->getIdClub()."'>".$vFormClub->getNomClub()."</option>";
}
echo"</select>

                <button type='submit'>Envoie</button>
            </form>";
