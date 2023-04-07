<?php
$dbh = new PDO("mysql:host=localhost;dbname=gourmet", "root", "");

if (!empty($dbh)) {

    $nomEdit = $_POST["plat"];
    $prixEdit = $_POST['price'];
    $ulrEdit = $_POST['link'];
    $restoEdit = $_POST['restaurant'];

    $idEdit = $_POST["id"];

    $requete = "UPDATE dishes
    SET plat='$nomEdit', img='$ulrEdit', prix=$prixEdit, restaurant='$restoEdit', description='lorem ipsum negatif'
    WHERE id=$idEdit";
    $exec = $dbh->query($requete);
    $test = $exec->fetchAll(PDO::FETCH_ASSOC); 

   header("location: ../../index.php");
}
else{
    echo "connexion echoué";
}?>