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
                    <img src="images/photoAlbum.jpg" class="d-block mx-lg-auto img-fluid" alt="photo de la premiere page de l'album" width="600" height="400" loading="lazy">
                </div>
                <div class="col-lg-6">
                    <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3 text-danger text-left h2">Bad covers and dirty songs</h1>
                    <p class="lead">
                        Titre des morceaux:
                        <ul class="text-left text-secondary h4">
                            <li>All I can do is cry</li>
                            <li>Gambling Barroom</li>
                            <li>Deep down in my soul</li>
                            <li>Hard Time</li>
                            <li>Lost Soul</li>
                            <li>Paddle Alone</li>
                            <li>Ride the Blind</li>
                            <li>Saint James Infirmery</li>
                            <li>Stomping Blues</li>
                            <li>Stomping Bones</li>
                            <li>Stranger Things</li>
                            <li>The Wolf</li>
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