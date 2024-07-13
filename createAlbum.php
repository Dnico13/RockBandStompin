<?php
session_start();
require_once 'template/header.php';
require_once 'pdo.php';
require_once './fonction/createNewAlbum.php';
createNewAlbum($pdo);
?>
<link rel="stylesheet" href="styles/style.css">

<body>
    <?php
    require_once './template/menu_admin.php'
    ?>
 <main class="mainBis Espace">
        <!-- integration du formulaire de creation de realisation du texte -->
        <div class="container d-flex flex-column justify-content-center">

            <div class="row">

                <form class="w-50 m-auto" action="./createAlbum.php" method="POST" enctype="multipart/form-data" target="_self">
                    <div class="mb-2">
                        <label for="nom" class="form-label">Nom de l'Album</label>
                        <input type="text" name="nom" class="form-control" id="Nom" required>
                    </div>
                    <div class="mb-2">
                        <label for="Titre1" class="form-label">Titre 1</label>
                        <input type="text" name="Titre1" class="form-control" id="Titre1" required>
                    </div>
                    <div class="mb-2">
                        <label for="Titre2" class="form-label">Titre 2</label>
                        <input type="text" name="Titre2" class="form-control" id="Titre2" required>

                    </div>
                    <div class="mb-2">
                        <label for="Titre3" class="form-label">Titre 3</label>
                        <input type="text" name="Titre3" class="form-control" id="Titre3" required>
                    </div>
                    <div class="mb-2">
                        <label for="Titre4" class="form-label">Titre 4</label>
                        <input type="text" name="Titre4" class="form-control" id="Titre4" required>
                    </div>
                    <div class="mb-2">
                        <label for="Titre5" class="form-label">Titre 5</label>
                        <input type="text" name="Titre5" class="form-control" id="Titre5">
                    </div>
                    <div class="mb-2">
                        <label for="Titre6" class="form-label">Titre 6</label>
                        <input type="text" name="Titre6" class="form-control" id="Titre6">
                    </div>
                    <div class="mb-2">
                        <label for="Titre7" class="form-label">Titre 7</label>
                        <input type="text" name="Titre7" class="form-control" id="Titre7">
                    </div>
                    <div class="mb-2">
                        <label for="Titre8" class="form-label">Titre 8</label>
                        <input type="text" name="Titre8" class="form-control" id="Titre8">
                    </div>
                    <div class="mb-2">
                        <label for="Titre9" class="form-label">Titre 9</label>
                        <input type="text" name="Titre9" class="form-control" id="Titre9">
                    </div>
                    <div class="mb-2">
                        <label for="Titre10" class="form-label">Titre 10</label>
                        <input type="text" name="Titre10" class="form-control" id="Titre10">
                    </div>
                    <div class="mb-2">
                        <label for="Titre11" class="form-label">Titre 11</label>
                        <input type="text" name="Titre11" class="form-control" id="Titre11">
                    </div>
                    <div class="mb-2">
                        <label for="Titre12" class="form-label">Titre 12</label>
                        <input type="text" name="Titre12" class="form-control" id="Titre12">
                    </div>
                    <div class="mb-2">
                        <label for="Titre13" class="form-label">Titre 13</label>
                        <input type="text" name="Titre13" class="form-control" id="Titre13">
                    </div>





                    <!-- fin du formulaire de creation de realisation  du texte -->

                    <!-- integration du formulaire de creation de realisation pour les images-->




                    <div class="mb-2">
                        <label for="photo" class="form-label">Photo</label>
                        <input type="File" name="photo" class="form-control" id="photo" required>
                    </div>

                    



                    <div class="text-end mt-2">
                        <button type="submit" class="btn btn-secondary" name="Submit">Validation du formulaire</button>
                        <a class="btn btn-secondary" href="espaceadmin.php">Annuler</a>
                    </div>
                </form>
            </div>
            <!-- fin du formulaire de creation de realisation  pour les images -->
    </main>






</body>


<?php
require_once './template/js.php';
require_once './template/footer.php';
?>
</html>