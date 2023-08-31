<?php
    include_once("../controllers/indexCtrl.php");
?>
<!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta name="description" content="Site de teste" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="css/style.css">
        <title>Programmation Orientée Objet</title>
    </head>
    <body>
        <h1>Programmation Orientée Objet</h1>
        <div class="show">
            <?php foreach($users as $cles => $values){ ?>
                <div class="card">
                    <h4><?= $values["pseudo"] ?></h4>
                    <h5><?= $values["email"] ?></h5>
                    <h5><?= $values["name"] ?></h5>
                </div>
            <?php } ?>
        </div>
    </body>
</html>