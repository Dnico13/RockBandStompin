<?php
require_once 'fonction/url.php';
?>

<!-- Header -->
<header class="header">
    <div class="header_content d-flex flex-row align-items-center justify-content-center">
        <div class="logo">
            <a href="index.php">
                <img src="images/logo.webp" class="logo" alt="Logo des Stompin'Bones" title="Logo des Stompin'Bones">
            </a>
        </div>
        <div class="log_reg">
            <ul class="d-flex flex-row align-items-start justify-content-start">
                <li>
                    <a href="admin.php" title="Login">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0z" />
                            <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z" />
                        </svg>
                    </a>
                </li>
                <!--<li><a href="#">Register</a></li>-->
            </ul>
        </div>
        <nav class="main_nav">
            <ul class="d-flex flex-row align-items-start justify-content-start">
                <li class="<?php if ($url_base === "index.php") {
                                echo "active";
                            } ?>">

                    <a href="index.php" title="Accueil">Accueil</a>
                </li>
                <li class="<?php if ($url_base === "discographie.php") {
                                echo "active";
                            } ?>">

                    <a href="discographie.php" title="Discographie">Discographie</a>
                </li>
                <li class="<?php if ($url_base === "evenements.php") {
                                echo "active";
                            } ?>">

                    <a href="evenements.php" title="Nos Evénements">Nos Evénements</a>
                </li>
                <li class="<?php if ($url_base === "video.php") {
                                echo "active";
                            } ?>">

                    <a href="video.php" title="Nos Vidéos">Nos Vidéos</a>
                </li>
                <li class="<?php if ($url_base === "contact.php") {
                                echo "active";
                            } ?>">

                    <a href="contact.php" title="Contact">Contact</a>
                </li>
            </ul>
        </nav>
        <div class="hamburger ml-auto">
            <div class="d-flex flex-column align-items-end justify-content-between">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>

    <!-- Menu -->

    <div class="menu">
        <div>
            <div class="menu_overlay"></div>
            <div class="menu_container d-flex flex-column align-items-start justify-content-center">
                <div class="menu_log_reg">
                    <ul class="d-flex flex-row align-items-start justify-content-start">
                        <li>
                            <a href="admin.php">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0z" />
                                    <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z" />
                                </svg>
                            </a>
                        </li>
                        <!--<li><a href="#">Register</a></li>-->
                    </ul>
                </div>
                <nav class="menu_nav">
                    <ul class="d-flex flex-column align-items-start justify-content-start">
                        <li><a href="index.php">Accueil</a></li>
                        <li><a href="discographie.php">Discographie</a></li>
                        <li><a href="evenements.php">Nos Evenements</a></li>
                        <li><a href="video.php">Nos Vidéos</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

</header>