<?php
session_start();
require_once 'template/header.php';
require_once 'pdo.php';
require_once './fonction/readAlbum.php';
require_once './fonction/readEvenements.php';
$Albums = getAlbums($pdo);
$concerts = getConcerts($pdo);
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
    <main class="container mainBis">
        <!-- Debut partie album -->

        <div class="row mt-1">
            <h3 class="text-primary  mt-1 mb-5">Descriptif des Albums </h3>
        </div>
        <div>
            <a href="./createAlbum.php" class="btn btn-secondary mb-3">Creation nouvel Album</a>
        </div>


        <div class="row">

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
                            <form action="./fonction/deleteAlbum.php" method="get">
                                <input type="hidden" name="id" value="<?= $Album['id']; ?>">
                                <button class="btn btn-secondary" type="submit" onclick="return del()">Supprimer</button>
                            </form>

                        </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
        </div>
        <!-- fin partie album-->

        <!-- Partie Evenements -->
        <div class="row mt-1">
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
                            <form action="./fonction/deleteEvent.php" method="get">
                                <input type="hidden" name="id" value="<?= $concert['id']; ?>">
                                <button class="btn btn-secondary" type="submit" onclick="return del()">Supprimer</button>
                            </form>

                        </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
        </div>





        <!-- Fin Evenements -->



    </main>
</body>

<?php }?>

<?php
require_once './template/js.php';
require_once './template/footer.php';
?>

</html>