<?php
session_start();
require_once 'template/header.php';
require_once 'pdo.php';
require_once './fonction/createNewPiste.php';
createNewPiste($pdo);
?>
<link rel="stylesheet" href="styles/style.css">

<body>
    <?php
    require_once './template/menu_admin.php'
    ?>
 <main class="mainBis Espace1 ">
        <!-- integration du formulaire de creation d un evenement -->
        <div class="container d-flex flex-column justify-content-center ">

            <div class="row">

                <form class="w-50 m-auto" action="./createPiste.php" method="POST" enctype="multipart/form-data" target="_self">
                    <div class="mb-2">
                        <label for="titre" class="form-label">Titre de la piste</label>
                        <input type="text" name="titre" class="form-control" id="titre" required>
                    </div>
                    <div class="mb-2">
                        <label for="balise" class="form-label">Balise Iframe</label>
                        <textarea  name="balise" class="form-control" id="balise" row="4" required></textarea>
                    </div>
                    
                    

                    
                    <div class="text-end mt-2">
                        <button type="submit" class="btn btn-secondary" name="Submit">Validation du formulaire</button>
                        <a class="btn btn-secondary" href="espaceadmin.php">Annuler</a>
                    </div>
                </form>
            </div>
            <!-- Fin de l integration d un evenement -->
    </main>






</body>


<?php
require_once './template/js.php';
require_once './template/footer.php';
?>
</html>