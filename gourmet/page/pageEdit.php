<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <title>Le Gourmet: Modification</title>

</head>

<body>
    <?php include_once("./header.php");
    $dbh = new PDO("mysql:host=localhost;dbname=amazoone", "root", "");

    if (!empty($dbh)) {
        $id = $_POST["id"];
    }?>

    <form action="../webfiles/php/update.php" method="POST">
        <input type="text" name="plat" placeholder="nom du plat">
        <input type="text" name="price" placeholder="prix du plat">
        <input type="url" name="link" placeholder="lien d'image du plat">
        <input type="text">
        <input type="search" name="restaurant" placeholder="ou trouver?">
        <input type="hidden" name="id" value="<?php echo $id ?>">
        <input type="submit">
    </form>


    <?php include_once("./footer.php"); ?>

</body>

</html>