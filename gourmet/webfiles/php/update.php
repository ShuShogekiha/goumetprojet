<?php
$dbh = new PDO("mysql:host=localhost;dbname=gourmet", "root", "");

if (!empty($dbh)) {

    $nomArt = $_POST["plat"];
    $prixArt = $_POST['price'];
    $ulrArt = $_POST['link'];

    $idArt = $_POST["id"];

    $requete = "UPDATE article
    SET designation='$nomArt', img='$ulrArt', prix=$prixArt
    WHERE id=$idArt";
    $exec = $dbh->query($requete);
    $test = $exec->fetchAll(PDO::FETCH_ASSOC); 

   header("location: ../../index.php");
}
else{
    echo "connexion echoué";
}?>