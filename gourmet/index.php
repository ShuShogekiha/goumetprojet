<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <title>Le Gourmet: Acceuil</title>
</head>

<body>

    <?php include_once("./page/header.php") ?>

    <main>
        <?php
        $dbh = new PDO("mysql:host=localhost;dbname=gourmet", "root", "");

        if (!empty($dbh)) {

            $requete = "SELECT * FROM dishes";
            $exec = $dbh->query($requete);
            $test = $exec->fetchAll(PDO::FETCH_ASSOC);

            foreach ($test as $tuple) {
                ?>
                <form action="./webfiles/php/delete.php" method="post">
                    <input type="hidden" value="<?php echo $tuple["id"] ?>" name="id">
                    <input type="submit" value="X">
                </form>
                <form action="./page/pageEdit.php" method="post">
                    <input type="hidden" value="<?php echo $tuple["id"]?>" name="id">
                    <input type="submit" value="modifier">
                </form>
                <?php
            }
        }
        ?>

    </main>

    <?php include_once("./page/footer.php") ?>

</body>

</html>