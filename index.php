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
            <a href="/">
                <button id="button-formule">Voir les formules</button>
            </a>
        </div>
    </section>
    <section id="second-part">
        <h3>Développeur web FullStack <br> sur Rouen depuis 2022</h3>
        <h4>Création de site web, site vitrine, site e-commerce <br> et site sur-mesure</h4>
    </section>
    <section id="third-part">
        <div class="container-card">
            <div class="card">
                <h3>Qui suis-je?</h3>
                <p>Je m’appelle Alexis Mouchon, développeur web en freelance sur Rouen.</p>
                <br>
                <p>Je met à disposition mes compétences pour développer vos projets:</p>
                <p>- sites vitrine</p>
                <p>- e-commerce</p>
                <p>- site sur mesure en fonction de vos besoins.</p>
                <br>
                <p>Vrai passionné par tout ce qui touche au développement web, c’est avec plaisir que je met à
                    disposition mes talents pour vous.</p>
            </div>
            <div class="card">
                <h3>Pourquoi faire appel à mes services?</h3>
                <p>J’ai actuellement 2 ans d’expériences dans le développement web. Je continue tout les jours à me
                    former pour être à jour des dernières technologies.</p>
                <br>
                <p>Je réalise vos projets web avec soin et professionnalisme pour assurer un service de qualité.</p>
                <br>
                <p>Je suis toujours à la recherche de nouveaux projets. N’hésiitez pas à me contacter pour avoir plus
                    d’information.</p>
            </div>
        </div>
    </section>


    <section id="fourth-part">
        <div class="bandeau-competences-1">
            <span class="styled-anime1 general-txt"> &nbsp;HTML - CSS - JS - PHP - MYSQL - NEXT JS - REACT JS - MONGO DB - GRAPH QL - WORDPRESS - TypeScript - Angular - Symfony - HTML - CSS - JS - PHP - MYSQL - NEXT JS - REACT JS - MONGO DB - GRAPH QL - WORDPRESS - TypeScript - Angular - Symfony - &nbsp;HTML - CSS - JS - PHP - MYSQL - NEXT JS - REACT JS - MONGO DB - GRAPH QL - WORDPRESS - TypeScript - Angular - Symfony - HTML - CSS - JS - PHP - MYSQL - NEXT JS - REACT JS - MONGO DB - GRAPH QL - WORDPRESS - TypeScript - Angular - Symfony - &nbsp;HTML - CSS - JS - PHP - MYSQL - NEXT JS - REACT JS - MONGO DB - GRAPH QL - WORDPRESS - TypeScript - Angular - Symfony - HTML - CSS - JS - PHP - MYSQL - NEXT JS - REACT JS - MONGO DB - GRAPH QL - WORDPRESS - TypeScript - Angular - Symfony - &nbsp;HTML - CSS - JS - PHP - MYSQL - NEXT JS - REACT JS - MONGO DB - GRAPH QL - WORDPRESS - TypeScript - Angular - Symfony - HTML - CSS - JS - PHP - MYSQL - NEXT JS - REACT JS - MONGO DB - GRAPH QL - WORDPRESS - TypeScript - Angular - Symfony - </span>
            <span class="styled-anime3 general-txt"> &nbsp;HTML - CSS - JS - PHP - MYSQL - NEXT JS - REACT JS - MONGO DB - GRAPH QL - WORDPRESS - TypeScript - Angular - Symfony - HTML - CSS - JS - PHP - MYSQL - NEXT JS - REACT JS - MONGO DB - GRAPH QL - WORDPRESS - TypeScript - Angular - Symfony - &nbsp;HTML - CSS - JS - PHP - MYSQL - NEXT JS - REACT JS - MONGO DB - GRAPH QL - WORDPRESS - TypeScript - Angular - Symfony - HTML - CSS - JS - PHP - MYSQL - NEXT JS - REACT JS - MONGO DB - GRAPH QL - WORDPRESS - TypeScript - Angular - Symfony - &nbsp;HTML - CSS - JS - PHP - MYSQL - NEXT JS - REACT JS - MONGO DB - GRAPH QL - WORDPRESS - TypeScript - Angular - Symfony - HTML - CSS - JS - PHP - MYSQL - NEXT JS - REACT JS - MONGO DB - GRAPH QL - WORDPRESS - TypeScript - Angular - Symfony - &nbsp;HTML - CSS - JS - PHP - MYSQL - NEXT JS - REACT JS - MONGO DB - GRAPH QL - WORDPRESS - TypeScript - Angular - Symfony - HTML - CSS - JS - PHP - MYSQL - NEXT JS - REACT JS - MONGO DB - GRAPH QL - WORDPRESS - TypeScript - Angular - Symfony - </span>
        </div>
    </section>
</main>
<?php include_once "./inc/footer.php" ?>
</body>
</html>