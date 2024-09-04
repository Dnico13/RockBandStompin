<?php
require_once 'template/header.php';
require_once 'pdo.php';
require_once './fonction/readEvenements.php';
$Concerts = getConcerts($pdo);
?>
<link rel="stylesheet" href="styles/style.css">


<body>
    <!-- Header -->
    <?php
    require_once 'template/menu.php';
    ?>
    <main class="mainBis">

        <div class=" container w-100 w-md-50 Espace1 text-justify text-md-center presentation ">
            <p class="h5">Rejoignez-nous pour des moments inoubliables en live !</p>
            <br>
            <p class="h5"> Consultez notre calendrier de concerts pour découvrir où et quand nous jouerons près de chez vous.</p>
            <br>
            <p class="h5">
                Préparez-vous à vivre des expériences musicales uniques et à partager des souvenirs mémorables avec nous.
            </p>
        </div>

        <?php
        foreach ($Concerts as $key => $Concert) { ?>


            <div class="container col-xxl-8 px-4  py-auto">
                <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                    <div class="col-12  col-lg-6 py-auto">
                        <img src="<?= $Concert['illustration']; ?>" class="d-block mx-auto img-fluid contour" alt="Affiche de l'évenement <?= $Concert['event_nom']; ?>" width="400" height="auto" loading="lazy" title="Affiche de  <?= $Concert['event_nom']; ?>">
                    </div>
                    <div class=" col-12 col-lg-6 pt-5">
                        <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3 text-danger text-center text-lg-left  h2"><?= $Concert['event_nom']; ?></h1>
                        <p class="lead text-center text-lg-left">
                            Lieu :<?= $Concert['Lieu']; ?>
                        </p>
                        <ul class="text-center text-lg-left text-secondary h4">
                            <li><?= $Concert["Detail1"]; ?></li>
                            <br>

                            <?php
                            if (isset($Concert['Detail2'])) { ?>
                                <li><?= $Concert["Detail2"]; ?></li>
                            <?php } ?>
                            <br>

                            <?php
                            if (isset($Concert['Detail3'])) { ?>
                                <li><?= $Concert["Detail3"]; ?></li>
                            <?php } ?>


                        </ul>
                        
                    </div>
                </div>
                
            </div>
            
        <?php } ?>

    </main>




    <?php
    require_once 'template/footer.php';
    ?>
    <?php
    require_once 'template/js.php';
    ?>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KC7PB77R"
            height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
</body>

</html>