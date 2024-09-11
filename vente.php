<?php
require_once 'template/header.php';
require_once 'pdo.php';
require_once './fonction/readPiste.php';
$Pistes = getPistes($pdo);
?>
<link rel="stylesheet" href="styles/style.css">


<body>
    <!-- Header -->
    <?php
    require_once 'template/menu.php';
    ?>
    <main class="mainBis ">

        <div class="container w-100 w-md-50  Espace1  text-justify text-md-center presentation mb-5">
            
			<p class="h5">Téléchargez nos morceaux et emportez notre musique partout avec vous. Profitez de nos créations en haute qualité et soutenez notre travail en ajoutant nos chansons à votre collection personnelle.<br></p>
			<p class="h5">
                <br>
            Cliquez sur les liens ci-dessous pour accéder à vos titres préférés.
			</p>
		</div>
            

        <div class="container w-100 d-flex justify-content-center align-items-center flex-wrap">
            <div class="row d-flex justify-content-center w-75">
                <?php

                foreach ($Pistes as $key => $piste) { ?>



                    <div class="col-12 mb-5 d-flex justify-content-center">


                        <?php
                        echo htmlspecialchars_decode($piste['balise'])
                        ?>

                    </div>



                <?php
                } ?>
            </div>
        </div>
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