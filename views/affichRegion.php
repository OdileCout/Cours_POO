<?php
//J'inclus le fichier du traitement de ma page
    include_once("../controllers/regionCtrl.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Page région</title>
</head>
<body>
<h1>Programmation Orientée Objet</h1>
    <div class="show">
        <?php foreach($les_regions as $cle => $region){ ?>
            <div class="card">
                <p>Code région : <span><?= $region["code"]; ?></span></p>
                <p><span><?= $region["name"]; ?></span></p>
                <p>Slug : <span><?= $region["slug"]; ?></span></p>
            </div>
        <?php } ?>
    </div>
</body>
</html>