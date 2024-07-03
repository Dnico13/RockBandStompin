<?php
require_once 'fonction/url.php';
?>

<!-- Header -->
<header class="header">
    <div class="header_content d-flex flex-row align-items-center justify-content-center">
        <div class="logo">
            <a href="index.php">
                <img src="images/logo.jpg" class="logo" alt="Logo des Stompin'Bones" title="Logo des Stompin'Bones">
            </a>
        </div>
        <div class="log_reg">
            <ul class="d-flex flex-row align-items-start justify-content-start">
                <li><a href="#" title="Login">Login</a></li>
                <!--<li><a href="#">Register</a></li>-->
            </ul>
        </div>
        <nav class="main_nav">
            <ul class="d-flex flex-row align-items-start justify-content-start">
                <li class="<?php if ($url_base === "index.php"){echo "active";}?>"><a href="index.php" title="Accueil">Accueil</a></li>
                <li class="<?php if ($url_base === "discographie.php"){echo "active";}?>"><a href="discographie.php" title="Discographie">Discographie</a></li>
                <li class="<?php if ($url_base === "evenements.php"){echo "active";}?>"><a href="evenements.php" title="Nos Evénements">Nos Evénements</a></li>
                <li class="<?php if ($url_base === "video.php"){echo "active";}?>"><a href="video.php" title="Nos Vidéos">Nos Vidéos</a></li>
                <li class="<?php if ($url_base === "contact.php"){echo "active";}?>"><a href="contact.php" title="Contact">Contact</a></li>
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
                    <li><a href="#">Login</a></li>
                    <!--<li><a href="#">Register</a></li>-->
                </ul>
            </div>
            <nav class="menu_nav">
                <ul class="d-flex flex-column align-items-start justify-content-start">
                    <li><a href="index.php">Accueil</a></li>
                    <li><a href="discographie.php">Discographie</a></li>
                    <li><a href="about.php">Nos Evenements</a></li>
                    <li><a href="video.php">Nos Vidéos</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>

</header>