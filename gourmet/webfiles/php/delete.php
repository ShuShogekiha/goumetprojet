<?php
$dbh = new PDO("mysql:host=localhost;dbname=gourmet", "root", "");

if (!empty($dbh)) {

    $id = $_POST["id"];


    $requete = "DELETE FROM dishes WHERE id=$id";
    $exec = $dbh->query($requete);
    if($exec != false){
        echo "sa marche";
    }
    $test = $exec->fetchAll(PDO::FETCH_ASSOC);

   header("location: ../../index.php");
}
?>