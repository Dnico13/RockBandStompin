<?php
session_start();
require_once 'template/header.php';
require_once 'pdo.php';
?>
<link rel="stylesheet" href="styles/style.css">


<body>

    <div class="container col-xl-10 col-xxl-8 px-4 py-5">


        <div class="row align-items-center g-lg-5 py-5">

            <div class="col-md-10 mx-auto col-lg-5">
                <h1 class="h3 fw-bold lh-1 text-body-emphasis mb-3  text-center">Merci de vous identifier</h1>
                <form class="p-4 p-md-5 border rounded-3 bg-body-tertiary" method="POST" action="log/login.php">
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email">
                        <label for="floatingInput">Adresse Mail</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
                        <label for="floatingPassword">Mot de passe</label>
                    </div>

                    <button class="w-100 btn btn-lg btn-secondary" type="submit" name="submit">Connexion</button>


                </form>
            </div>
        </div>
    </div>

    <?php
    require_once 'template/footer.php';
    ?>
    <?php
    require_once 'template/js.php';
    ?>



</body>

</html>