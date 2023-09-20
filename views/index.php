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
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque ipsam et molestias eligendi architecto rerum libero quisquam. Distinctio asperiores itaque quis blanditiis laborum, labore, aliquid illo quo minus cum id.</p>
    <div class="show">
        <?php foreach ($users as $cles => $values) { ?>
            <div class="card">
                <h4><?= $values["pseudo"] ?></h4>
                <h5><?= $values["email"] ?></h5>
                <h5><?= $values["name"] ?></h5>
            </div>
        <?php } ?>
    </div>
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Provident vero numquam in ipsum delectus similique impedit nam vitae ducimus labore dolor veritatis tempora, sint dolore reiciendis maxime, dicta quod non?</p>
    <ul>
        <li>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Impedit, voluptates repellat quibusdam aspernatur asperiores unde tempora ea fugiat ullam reiciendis inventore voluptatibus quis voluptatum amet explicabo accusamus tempore ad nulla?</li>
    </ul>
</body>

</html>