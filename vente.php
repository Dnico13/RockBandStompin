<?php
require_once 'template/header.php';
require_once 'pdo.php';
require_once './fonction/readPistes.php';
$Pistes = getPistes($pdo);
?>
<link rel="stylesheet" href="styles/style.css">


<body>
    <!-- Header -->
    <?php
    require_once 'template/menu.php';
    ?>
    <main class="mainBis">
        <?php

        foreach ($Pistes as $key => $piste) { ?>




            <div class="container col-xxl-8 px-4 py-5">
            <?php
            echo $piste['balise']
            ?>

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
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KC7PB77R"
            height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
</body>

</html>