<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/style.css">
    <title>DreamRide</title>
</head>
<body>
    <header>
        <a href="accueil">
            <h1>
                DreamRide
                <div>
                    <img src="public/img/logo-removebg-preview.png" alt="">
                    <img src="public/img/logo_short.png" alt="">
                </div>
            </h1>
        </a>
        <figure>
            <img class="imgbanniere" src="public/img/bannière.png" alt="">
        </figure>
        <button id="openBurger">
            <div></div>
            <div></div>
            <div></div>
        </button>
    </header>
    <aside class="fermeburger" id="menu">
        <button id="closeBurger">
            <div></div>
            <div></div>
        </button>
        <?php if (!isset($_SESSION["compte"])) :?>
            <a href="connexion">Connexion</a>
            <a href="inscription">Inscription</a>
        <?php else : ?>
            <a href="deconnexion">Deconnexion</a>
            <a href="vehicules">Véhicules</a>
            <a href="agences">Agences</a>
        <?php endif ?>
    </aside>
    <div class="footer_push">
        <?= $content ?>
    </div>
    <footer>
        <p>© Succi Bastien</p>
    </footer>
    <script src="../public/script.js"></script>
</body>
</html>