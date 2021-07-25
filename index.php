<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubiquity</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/helpers.css">
    <link rel="stylesheet" href="css/swiper-bundle.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
<!-- version Emmet : header.site-header>.logo>img^nav.main-nav>ul.menu>li.menu-item*5>a.menu-link[href="#"]>lorem1 -->
<?php include 'header.html';?>
<!-- { : option (ou alt) + ( // [ : option (ou alt) + maj + (
    multi-curseur : option (ou alt) + clic -->

<main>
    <section class="hero" id="about">
        <div class="container-extended">
            <div class="welcome">
                <h1>Bienvenue sur le site de la promotion DWWM2021-3</h1>
                <a href="students.php" class="btn btn-secondary">Rencontrez nos étudiants</a>
            </div>
        </div>
    </section>

    <section class="actualities">
        <div class="container">
            <h2 class="section-title">Les dernières actualités</h2>
            <ul class="actualities-list" role="list">
                <li class="actualities-item">
                    <figure class="actualities-fig">
                        <img src="img/Photo1.png" alt="Une sacoche" class="actualities-img">
                    </figure>
                    <div class="date">
                        <img src="img/Icone_date.svg" alt="Un agenda" class="actualities-img">
                        <p>27/07/2021</p>
                    </div>
                    <h3 class="actualities-title">Lorem ipsum dolor sit amet, consetetur sadipscing elitr</h3>
                    <p class="actualities-desc">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, …</p>
                    <a href="presentation_simple.php" class="btn btn-secondary">Lire la suite<img src="img/Icon feather-arrow-right-circle.svg" alt="Icône de flèche" class="arrow"></a>
                </li>
                <li class="actualities-item">
                    <figure class="actualities-fig">
                        <img src="img/Photo2.png" alt="Un agenda" class="actualities-img">
                    </figure>
                    <div class="date">
                        <img src="img/Icone_date.svg" alt="Un agenda" class="actualities-img">
                        <p>27/07/2021</p>
                    </div>
                    <h3 class="actualities-title">Lorem ipsum dolor sit amet, consetetur sadipscing elitr</h3>
                    <p class="actualities-desc">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, …</p>
                    <a href="presentation_simple.php" class="btn btn-secondary">Lire la suite<img src="img/Icon feather-arrow-right-circle.svg" alt="Icône de flèche" class="arrow"></a>
                </li>
                <li class="actualities-item">
                    <figure class="actualities-fig">
                        <img src="img/Photo3.png" alt="Une étoile" class="actualities-img">
                    </figure>
                    <div class="date">
                        <img src="img/Icone_date.svg" alt="Un agenda" class="actualities-img">
                        <p>27/07/2021</p>
                    </div>
                    <h3 class="actualities-title">Lorem ipsum dolor sit amet, consetetur sadipscing elitr</h3>
                    <p class="actualities-desc">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, …</p>
                    <a href="presentation_simple.php" class="btn btn-secondary">Lire la suite<img src="img/Icon feather-arrow-right-circle.svg" alt="Icône de flèche" class="arrow"></a>
                </li>
            </ul>
        </div>
    </section>

    <section class="students">
        <div class="container">
            <h2 class="section-title">Rencontrez les étudiants</h2>
            <ul class="students-list">
                <li class="students-item">
                    <figure class="students-fig">
                        <img src="img/Francine_Auhi.png" alt="Photo de Francine Auhi" class="students-img">
                    </figure>
                    <h4>Francine Auhi</h4>
                    <a href="presentation.php">En savoir plus</a>
                </li>
                <li class="students-item">
                    <figure class="students-fig">
                        <img src="img/Ali_Korn.png" alt="Photo de Ali Korn" class="students-img">
                    </figure>
                    <h4>Ali Korn</h4>
                    <a href="presentation.php">En savoir plus</a>
                </li>
                <li class="students-item">
                    <figure class="students-fig">
                        <img src="img/Jean_Vascrit.png" alt="Photo de Jean Vascrit" class="students-img">
                    </figure>
                    <h4>Jean Vascrit</h4>
                    <a href="presentation.html">En savoir plus</a>
                </li>
                <li class="students-item">
                    <figure class="students-fig">
                        <img src="img/Lara_Velle.png" alt="Photo de Lara Velle" class="students-img">
                    </figure>
                    <h4>Lara Velle</h4>
                    <a href="presentation.php">En savoir plus</a>
                </li>
            </ul>   
        </div>
    </section>

    <section class="moduls">
        <div class="container">
            <h2 class="section-title">Les modules de la formation</h2>
            <ul class="moduls-list" role="list">
                <li class="moduls-item">
                    <figure class="moduls-fig">
                        <img src="img/Photo4.png" alt="Une sacoche" class="actualities-img">
                    </figure>
                    <h3 class="moduls-title">Module HTML/CSS</h3>
                    <p class="moduls-desc">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, …</p>
                    <a href="module_formation.php" class="btn btn-secondary">Lire la suite<img src="img/Icon feather-arrow-right-circle.svg" alt="Icône de flèche" class="arrow"></a>
                </li>
                <li class="moduls-item">
                    <figure class="moduls-fig">
                        <img src="img/Photo5.png" alt="Un agenda" class="actualities-img">
                    </figure>
                    <h3 class="moduls-title">Module Javascript</h3>
                    <p class="moduls-desc">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, …</p>
                    <a href="module_formation.php" class="btn btn-secondary">Lire la suite<img src="img/Icon feather-arrow-right-circle.svg" alt="Icône de flèche" class="arrow"></a>
                </li>
            </ul>
    </section>

<?php include 'footer.html';?>

<script src="js/burger-menu.js"></script>

</body>
</html>