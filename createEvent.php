<?php
session_start();
require_once 'template/header.php';
require_once 'pdo.php';
require_once './fonction/createNewEvent.php';
createNewEvent($pdo);
?>
<link rel="stylesheet" href="styles/style.css">

<body>
    <?php
    require_once './template/menu_admin.php'
    ?>
 <main class="mainBis Espace">
        <!-- integration du formulaire de creation d un evenement -->
        <div class="container d-flex flex-column justify-content-center">

            <div class="row">

                <form class="w-50 m-auto" action="./createEvent.php" method="POST" enctype="multipart/form-data" target="_self">
                    <div class="mb-2">
                        <label for="nom" class="form-label">Nom de l'Evenement</label>
                        <input type="text" name="nom" class="form-control" id="nom" required>
                    </div>
                    <div class="mb-2">
                        <label for="lieu" class="form-label">Lieu de l'Evenement</label>
                        <input type="text" name="lieu" class="form-control" id="lieu" required>
                    </div>
                    <div class="mb-2">
                        <label for="detail1" class="form-label">Detail 1</label>
                        <input type="text" name="detail1" class="form-control" id="detail1" required>
                    </div>
                    <div class="mb-2">
                        <label for="detail2" class="form-label">Detail 2</label>
                        <input type="text" name="detail2" class="form-control" id="detail2" required>

                    </div>
                    <div class="mb-2">
                        <label for="detail3" class="form-label">Detail 3</label>
                        <input type="text" name="detail3" class="form-control" id="detail3" required>
                    </div>
                    

                    <div class="mb-2">
                        <label for="affiche" class="form-label">Affiche</label>
                        <input type="File" name="affiche" class="form-control" id="affiche" required>
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