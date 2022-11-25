<?php
include_once "./inc/function.php";

$age = calculAge("2001-04-08"); // permet de calculer mon age
require_once "./inc/constant/main.php"; // permet de récupérer les constantes
$css = [
    "https://cdn.jsdelivr.net/npm/remixicon@2.2.0/fonts/remixicon.css",
    "./assets/css/reset.css",
    "./assets/css/style.css",
];

$js = [
    "./assets/js/main.js",
];
$name_page = $constant["ROUTE"]["home"]["name"] ?? "404"; // permet de récupérer le nom de la page
$meta_description = "Bienvenue sur le site d'Alexis Mouchon, développeur web en freelance. Je suis un développeur web de 21 ans, je suis passionné par le développement web et le développement mobile."
?>


<!doctype html>
<html lang="fr">
<?php include_once "./inc/head.php" ?>
<body>
<?php include_once "./inc/header.php" ?>
<main>
    <section id="first-part">
        <div id="container-welcome">
            <h1 id="title">Besoin d'aide pour développer <br> votre activité sur le web?</h1>
            <h2 id="subtitle">Vous êtes au bon endroit.</h2>
            <a href="./">
                <button id="button-formule">Voir les formules</button>
            </a>
        </div>
    </section>
    <section id="second-part">
        <h3>Développeur web FullStack <br> sur Rouen depuis 2022</h3>
        <h4>Création de site web, site vitrine, site e-commerce <br> et site sur-mesure</h4>
    </section>
</main>
<?php include_once "./inc/footer.php" ?>
</body>
</html>