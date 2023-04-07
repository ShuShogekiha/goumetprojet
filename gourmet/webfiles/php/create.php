<?php 

$dbh = new PDO("mysql:host=localhost;dbname=gourmet", "root", "");

if (!empty($dbh)) {

    $nomAdd = $_POST["plat"];
    $prixAdd = $_POST['price'];
    $ulrAdd = $_POST['link'];
    $restoAdd = $_POST['restaurant'];

    $requete = "INSERT INTO dishes (plat, img, prix, restaurant, description)
    VALUES ('$nomAdd', '$ulrAdd', $prixAdd, '$restoAdd', 'lorem ispum infinie');";
    $exec = $dbh->query($requete);
    if($exec != false){
        echo "sa marche je crois";
    }
    $test = $exec->fetchAll(PDO::FETCH_ASSOC);

   header("location: ../../index.php");
}
else{
    echo "connexion echoué";
}

?>