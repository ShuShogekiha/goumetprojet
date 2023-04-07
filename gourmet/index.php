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
                ?>

                    <div class="card">
                        <form action="./webfiles/php/delete.php" method="POST">
                            <input type="hidden" value="<?php echo $tuple["id"] ?>" name="id">
                            <input type="button" value="X">
                        </form>
                        <img src="https://www.francebleu.fr/s3/cruiser-production/2019/08/71080297-32f4-49b3-8d2b-33ba080d1c30/1200x680_gettyimages-1146906219.jpg" alt="img">
                        <div class="info">
                            <p><?= $tuple["plat"] ?> - <?= $tuple["prix"] ?></p>
                            <p>
                                <?= $tuple["description"] ?>

                            </p>
                            <p>
                                <?= $tuple["restaurant"] ?>

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