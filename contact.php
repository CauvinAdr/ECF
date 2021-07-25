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
    <link rel="stylesheet" href="css/style5.css">
</head>

<body>
<!-- version Emmet : header.site-header>.logo>img^nav.main-nav>ul.menu>li.menu-item*5>a.menu-link[href="#"]>lorem1 -->
<?php include 'header.html';?>
<!-- { : option (ou alt) + ( // [ : option (ou alt) + maj + (
    multi-curseur : option (ou alt) + clic -->

<main>
    <section class="contact">
        <div class="container">
            <h2 class="section-title">Nous contacter</h2>
            <form action="">
                <div class="form-sub">
                    <div class="form-sub1">
                        <label for="name" class="form-label">Votre nom</label>
                        <input type="text" class="form-control" id="name" placeholder="Entrez votre nom" required>
                        <hr>
                    </div>
                    <div class="form-sub2">
                        <label for="email" class="form-label">Votre e-mail</label>
                        <input type="email" class="form-control" id="email" placeholder="Entrez votre adresse e-mail" required>
                        <hr>
                    </div>
                    <div class="form-sub3">
                        <label for="message" class="form-label">Votre message</label>
                        <textarea class="form-control" id="message" rows="5" placeholder="Tapez votre message" required></textarea>
                    </div>
                </div>
                <hr>
                <button type="submit" class="btn btn-secondary">Envoyer<img src="img/Icon feather-arrow-right-circle.svg" alt=""></button>
            </form>
        </div>
    </section>

<?php include 'footer.html';?>

<script src="js/burger-menu.js"></script>

</body>
</html>