<?php
session_start();
require_once 'template/header.php';
require_once 'pdo.php';
require_once './fonction/readAlbum.php';
$Albums = getAlbums($pdo);
?>


<body>
    <?php
    require_once './template/menu.php'
    ?>
    <main class="container">

        <div class="row mt-1">
            <h3 class="text-center  text-primary  mt-1 mb-5">Descriptif des Albums </h3>
        </div>
        <div class="row">

            <?php
            foreach ($Albums as $cle => $Album) { ?>
                <table class="table table-striped table-bordered backgroungarray text-center">
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
                        <tr>
                            <th scope="row" class="text-secondary">Titre 5</th>
                            <td><?= $Album['Titre5']; ?></td>
                        </tr>
                        <tr>
                            <th scope="row" class="text-secondary">Titre 6</th>
                            <td><?= $Album['Titre6']; ?></td>
                        </tr>
                        <tr>
                            <th scope="row" class="text-secondary">Titre 7</th>
                            <td><?= $Album['Titre7']; ?> </td>
                        </tr>
                        <tr>
                            <th scope="row" class="text-secondary">Titre 8</th>
                            <td><?= $Album['Titre8']; ?></td>
                        </tr>
                        <tr>
                            <th scope="row" class="text-secondary">Titre 9</th>
                            <td><?= $Album['Titre9']; ?></td>
                        </tr>
                        <tr>
                            <th scope="row" class="text-secondary">Titre 10</th>
                            <td> <?= $Album['Titre10']; ?></td>
                        </tr>
                        <tr>
                            <th scope="row" class="text-secondary">Titre 11</th>
                            <td><?= $Album['Titre11']; ?></td>
                        </tr>
                        <tr>
                            <th scope="row" class="text-secondary">Titre 12</th>
                            <td><?= $Album['Titre12']; ?></td>
                        </tr>
                        <tr>
                            <th scope="row" class="text-secondary">Titre 13</th>
                            <td><?= $Album['Titre13']; ?></td>
                        </tr>


                        <td class="text-center">
                            <form action="" method="get">
                                <input type="hidden" name="Id" value="">
                                <button class="btn btn-secondary" type="submit" onclick="return del()">Supprimer</button>
                            </form>

                        </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
        </div>


    </main>
</body>


<?php
require_once './template/js.php';
require_once './template/footer.php';
?>