<?php require_once("./page/header.php") ?>
<main>


    <?php

    require_once("./webfiles/php/connexion.php");


    if ($dbh) {
        $requete = "SELECT * FROM dishes";
        $exec = $dbh->query($requete);

        if ($exec != false) {

            $test = $exec->fetchAll(PDO::FETCH_ASSOC);

    ?>
            <section class="cardContainer">

                <?php
                foreach ($test as $tuple) {
                    var_dump($tuple);
                ?>

                    <div class="card">
                        <form action="./webfiles/php/delete.php" method="POST">
                            <input type="hidden" value="<?php echo $tuple["id"] ?>" name="id">
                            <input type="button" value="X">
                        </form>
                        <img src="<?= $tuple["img"] ?> " alt="illustration de <?= $tuple["plat"] ?>">
                        <div class="info">
                            <p><?= $tuple["plat"] ?> - <?= $tuple["prix"] ?></p>
                            <p>
                                <?= $tuple["description"] ?>

                            </p>
                            <p>
                                Au restaurant : <?= $tuple["restaurant"] ?>

                            </p>
                        </div>
                    </div>
                <?php
                }
                ?>
            </section>
        <?php
        } else {
        ?>
            <h1>Une erreur est survenue</h1>
        <?php
        }
    } else {
        ?>
        <h1>Une erreur est survenue</h1>
    <?php
    }
    ?>

</main>
<?php require_once("./page/footer.php") ?>