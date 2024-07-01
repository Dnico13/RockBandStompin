<?php
require_once 'template/header.php';
?>
<link rel="stylesheet" href="styles/style.css">


<body>
    <!-- Header -->
    <?php
    require_once 'template/menu.php';
    ?>
    <main class="mainBis">

        <div class="container col-xxl-8 px-4 py-5">
            <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                <div class="col-10 col-sm-8 col-lg-6">
                    <img src="images/festival.jpeg" class="d-block mx-lg-auto img-fluid" alt="Affiche de l'évenement" width="600" height="400" loading="lazy">
                </div>
                <div class="col-lg-6">
                    <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3 text-danger text-left h2">Nom de la soiree</h1>
                    <p class="lead">
                        Lieu:
                    <ul class="text-left text-secondary h4">
                        <li>Detail 1</li>
                        <p>Presentation evenement</p>
                        <li>Detail 2:</li>
                        <p>Presentation D2</p>
                        <li> Detail 3:</li>
                        <p>Presentation D3</p>
                    </ul>
                    </p>

                </div>
            </div>

        </div>

    </main>




    <?php
    require_once 'template/footer.php';
    ?>
    <?php
    require_once 'template/js.php';
    ?>

</body>

</html>