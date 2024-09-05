<?php
session_start();
require_once 'template/header.php';
require_once 'pdo.php';
require_once './fonction/readAlbum.php';
require_once './fonction/readEvenements.php';
require_once './fonction/readPiste.php';
require_once './fonction/readVideo.php';

$Pistes = getPistes($pdo);
$Albums = getAlbums($pdo);
$concerts = getConcerts($pdo);
$Videos = getVideo($pdo);
if (!isset($_SESSION['role'])) {
    header('location: http://www.google.fr');
    exit;
}
if (isset($_SESSION['role']) && $_SESSION['role'] === 'admin') {
?>

    <!-- ouverture de limitation de session -->

    <link rel="stylesheet" href="styles/style.css">





    <body>
        <?php
        require_once './template/menu_admin.php'
        ?>
        <main class="container mainBis ">
            <!-- Debut partie album -->
            <div class="text-center  Espace">
                <p class="text-secondary h2">Bonjour <span class="text-danger"> <?= $_SESSION['prenom'] ?></span>,</p>
                <p class="text-secondary h2"> Bienvenu dans ton espace d'administration</p>
                <h3 class="text-primary  mt-5 mb-5">Descriptif des Albums </h3>
            </div>



            <div>
                <a href="./createAlbum.php" class="btn btn-secondary mb-3">Creation nouvel Album</a>
            </div>


            <div class="row ">

                <?php
                foreach ($Albums as $cle => $Album) { ?>
                    <table class="table table-striped table-bordered backgroungarray text-center mb-5">
                        <thead class="text-primary">
                            <tr>
                                <th scope="col-4" class="m-2">Nom de l'album </th>
                                <th scope="col-8"><span class="text-danger h2"> <?= $Album['nom']; ?></span></th>

                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <th scope="row" class="text-secondary">Image</th>
                                <td><img src="<?= $Album['Photo']; ?>" alt="Illustration de la premiere page de l album" style=" width: 10%; border: 1px solid white "></td>
                            </tr>
                            <tr>
                                <th scope="row" class="text-secondary">Titre 1</th>
                                <td><?= $Album['Titre1']; ?></td>
                            </tr>
                            <tr>
                                <th scope="row" class="text-secondary">Titre 2</th>
                                <td> <?= $Album['Titre2']; ?></td>
                            </tr>
                            <tr>
                                <th scope="row" class="text-secondary">Titre 3</th>
                                <td><?= $Album['Titre3']; ?></td>
                            </tr>
                            <tr>
                                <th scope="row" class="text-secondary">Titre 4</th>
                                <td><?= $Album['Titre4']; ?></td>
                            </tr>

                            <?php
                            if (isset($Album['Titre5'])) { ?>
                                <tr>
                                    <th scope="row" class="text-secondary">Titre 5</th>
                                    <td><?= $Album['Titre5']; ?></td>
                                </tr>
                            <?php } ?>

                            <?php
                            if (isset($Album['Titre6'])) { ?>
                                <tr>
                                    <th scope="row" class="text-secondary">Titre 6</th>
                                    <td><?= $Album['Titre6']; ?></td>
                                </tr>
                            <?php } ?>

                            <?php
                            if (isset($Album['Titre7'])) { ?>
                                <tr>
                                    <th scope="row" class="text-secondary">Titre 7</th>
                                    <td><?= $Album['Titre7']; ?></td>
                                </tr>
                            <?php } ?>

                            <?php
                            if (isset($Album['Titre8'])) { ?>
                                <tr>
                                    <th scope="row" class="text-secondary">Titre 8</th>
                                    <td><?= $Album['Titre8']; ?></td>
                                </tr>
                            <?php } ?>

                            <?php
                            if (isset($Album['Titre9'])) { ?>
                                <tr>
                                    <th scope="row" class="text-secondary">Titre 9</th>
                                    <td><?= $Album['Titre9']; ?></td>
                                </tr>
                            <?php } ?>

                            <?php
                            if (isset($Album['Titre10'])) { ?>
                                <tr>
                                    <th scope="row" class="text-secondary">Titre 10</th>
                                    <td><?= $Album['Titre10']; ?></td>
                                </tr>
                            <?php } ?>

                            <?php
                            if (isset($Album['Titre11'])) { ?>
                                <tr>
                                    <th scope="row" class="text-secondary">Titre 11</th>
                                    <td><?= $Album['Titre11']; ?></td>
                                </tr>
                            <?php } ?>

                            <?php
                            if (isset($Album['Titre12'])) { ?>
                                <tr>
                                    <th scope="row" class="text-secondary">Titre 12</th>
                                    <td><?= $Album['Titre12']; ?></td>
                                </tr>
                            <?php } ?>
                            <?php
                            if (isset($Album['Titre13'])) { ?>
                                <tr>
                                    <th scope="row" class="text-secondary">Titre 13</th>
                                    <td><?= $Album['Titre13']; ?></td>
                                </tr>
                            <?php } ?>




                            <td class="text-center">
                                <form action="./fonction/deleteAlbum.php" method="get" onsubmit="return del()">
                                    <input type="hidden" name="id" value="<?= $Album['id']; ?>">
                                    <button class="btn btn-secondary" type="submit" >Supprimer</button>
                                </form>

                            </td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
            </div>
            <!-- fin partie album-->

            <!-- Partie Evenements -->
            <div class="row mt-1 justify-content-center align-item-center ">
                <h3 class="text-primary  mt-1 mb-5">Descriptif des Animations </h3>
            </div>

            <div>
                <a href="./createEvent.php" class="btn btn-secondary mb-3">Creation Manisfestation</a>
            </div>
            <div class="row">

                <?php
                foreach ($concerts as $cle => $concert) { ?>
                    <table class="table table-striped table-bordered backgroungarray text-center mb-5">
                        <thead class="text-primary">
                            <tr>
                                <th scope="col-4" class="m-2">Nom de l'Evenement </th>
                                <th scope="col-8"><span class="text-danger h2"> <?= $concert['event_nom']; ?></span></th>

                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <th scope="row" class="text-secondary">Affiche</th>
                                <td><img src="<?= $concert['illustration']; ?>" alt="Illustration de l affiche du festival" style=" width: 10%; border: 1px solid white "></td>
                            </tr>
                            <tr>
                                <th scope="row" class="text-secondary">Detail 1</th>
                                <td><?= $concert['Detail1']; ?></td>
                            </tr>
                            <tr>
                                <th scope="row" class="text-secondary">Detail 2</th>
                                <td> <?= $concert['Detail2']; ?></td>
                            </tr>
                            <tr>
                                <th scope="row" class="text-secondary">Detail 3</th>
                                <td><?= $concert['Detail3']; ?></td>
                            </tr>
                            <tr>
                                <th scope="row" class="text-secondary">Lieu</th>
                                <td><?= $concert['Lieu']; ?></td>
                            </tr>

                            <td class="text-center">
                                <form action="./fonction/deleteEvent.php" method="get" onsubmit="return del()">
                                    <input type="hidden" name="id" value="<?= $concert['id']; ?>">
                                    <button class="btn btn-secondary" type="submit" >Supprimer</button>
                                </form>

                            </td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
            </div>

            <!-- Fin Evenements -->
            <!-- Debut integration de gestion des pistes -->
            <div class="row mt-1 justify-content-center align-item-center ">
                <h3 class="text-primary  mt-1 mb-5">Ensemble des Pistes BandCamp </h3>
            </div>

            <div>
                <a href="./createPiste.php" class="btn btn-secondary mb-3">Creation d'une nouvelle Piste</a>
            </div>
            <div class="row">

                <?php
                foreach ($Pistes as $cle => $Piste) { ?>
                    <table class="table table-striped table-bordered backgroungarray text-center mb-5">
                        <thead class="text-primary">
                            <tr>
                                <th scope="col-4" class="m-2">Titre de la Piste </th>
                                <th scope="col-8"><span class="text-danger h2"> <?= $Piste['titre']; ?></span></th>

                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <th scope="row" class="text-secondary">Piste BandCamp</th>
                                <td><?= htmlspecialchars_decode($Piste['balise']); ?> </td>
                            </tr>

                            <td class="text-center">
                                <form action="./fonction/deletePiste.php" method="get" onsubmit="return del()">
                                    <input type="hidden" name="id" value="<?= $Piste['id_piste']; ?>">
                                    <button class="btn btn-secondary" type="submit">Supprimer</button>
                                </form>

                            </td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
            </div>



            <!-- fin de l integration des Pistes -->
            <!-- debut integration des videos -->
            <div class="row mt-1 justify-content-center align-item-center ">
                <h3 class="text-primary  mt-1 mb-5">Ensemble des Videos Youtube</h3>
            </div>
            <div>
                <a href="./createVideo.php" class="btn btn-secondary mb-3">Integration Video </a>
            </div>
            <div class="row">

                <?php
                foreach ($Videos as $cle => $Video) { ?>
                    <table class="table table-striped table-bordered backgroungarray text-center mb-5">
                        <thead class="text-primary">
                            <tr>
                                <th scope="col-4" class="m-2">Intitule </th>
                                <th scope="col-8"><span class="text-danger h2"> </span></th>

                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <th scope="row" class="text-secondary">Visuel Video</th>
                                <td><?php

                                    $balise = htmlspecialchars_decode($Video['balise_video']);
                                    $balise_class = str_replace('<iframe', '<iframe class="video', $balise);
                                    echo $balise_class;


                                    ?>
                                </td>
                            </tr>

                            <td class="text-center">
                                <form action="./fonction/deleteVideo.php" method="get" onsubmit="return del()">
                                    <input type="hidden" name="id" value="<?= $Video['id_video']; ?>">
                                    <button class="btn btn-secondary" type="submit" >Supprimer</button>
                                </form>

                            </td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
            </div>


            <!-- fin de l'integration des videos -->





        </main>
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KC7PB77R"
                height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
    </body>

<?php } ?>

<?php
require_once './template/js.php';
require_once './template/footer.php';
?>

</html>