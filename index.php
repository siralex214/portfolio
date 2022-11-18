<?php
include_once "./inc/function.php";

$age = calculAge("2001-04-08"); // permet de calculer mon age

$css = [
    "https://cdn.jsdelivr.net/npm/remixicon@2.2.0/fonts/remixicon.css",
    "./assets/css/reset.css",
    "./assets/css/style.css",
];

$js = [
    "./assets/js/main.js",
]
?>


<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Alexis Mouchon | Portfolio</title>
    <?php foreach ($css as $value): ?>
        <link rel="stylesheet" href="<?= $value ?>">
    <?php endforeach; ?>
    <?php foreach ($js as $value): ?>
        <script src="<?= $value ?>" defer></script>
    <?php endforeach; ?>
</head>
<body>
<header></header>
<main>
    <p>Work in progress!</p>
</main>
<footer></footer>
</body>
</html>