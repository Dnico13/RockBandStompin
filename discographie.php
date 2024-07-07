<?php
require_once 'template/header.php';
require_once 'pdo.php';
require_once './fonction/readAlbum.php';
$Albums = getAlbums($pdo);
?>
<link rel="stylesheet" href="styles/style.css">


<body>
    <!-- Header -->
    <?php
    require_once 'template/menu.php';
    ?>
    <main class="mainBis">
        <?php

        foreach ($Albums as $key => $album) { ?>




            <div class="container col-xxl-8 px-4 py-5">
                <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                    <div class="col-10 col-sm-8 col-lg-6">
                        <img src="<?= $album['Photo']; ?>" class="d-block mx-lg-auto img-fluid" alt="Illustration de page de couverture de l album <?= $album['nom']; ?>" width="600" height="400" loading="lazy" title="Page de couverture de l'album <?= $album['nom']; ?>">
                    </div>
                    <div class="col-lg-6">
                        <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3 text-danger text-left h2"><?= $album['nom']; ?></h1>
                        <p class="lead">
                            Titre des morceaux:
                        <ul class="text-left text-secondary h4">
                            <li><?= $album['Titre1']; ?></li>
                            <li><?= $album['Titre2']; ?></li>
                            <li><?= $album['Titre3']; ?></li>
                            <li><?= $album['Titre4']; ?></li>
                            <?php if (isset($album['Titre5'])) { ?>
                                <li><?= $album['Titre5']; ?></li>
                            <?php } ?>
                            <?php if (isset($album['Titre6'])) { ?>
                                <li><?= $album['Titre6']; ?></li>
                            <?php } ?>
                            <?php if (isset($album['Titre7'])) { ?>
                                <li><?= $album['Titre7']; ?></li>
                            <?php } ?>
                            <?php if (isset($album['Titre8'])) { ?>
                                <li><?= $album['Titre8']; ?></li>
                            <?php } ?>
                            <?php if (isset($album['Titre9'])) { ?>
                                <li><?= $album['Titre9']; ?></li>
                            <?php } ?>
                            <?php if (isset($album['Titre10'])) { ?>
                                <li><?= $album['Titre10']; ?></li>
                            <?php } ?>
                            <?php if (isset($album['Titre11'])) { ?>
                                <li><?= $album['Titre11']; ?></li>
                            <?php } ?>
                            <?php if (isset($album['Titre12'])) { ?>
                                <li><?= $album['Titre12']; ?></li>
                            <?php } ?>
                            <?php if (isset($album['Titre13'])) { ?>
                                <li><?= $album['Titre13']; ?></li>
                            <?php } ?>

                        </ul>


                        </p>

                    </div>
                </div>
            </div>
        <?php
        } ?>


    </main>




    <?php
    require_once 'template/footer.php';
    ?>
    <?php
    require_once 'template/js.php';
    ?>

</body>

</html>