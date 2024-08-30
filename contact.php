<?php
require_once 'template/header.php';
require_once 'fonction/sendContact.php';
?>

<link rel="stylesheet" href="styles/contact.css">
<link rel="stylesheet" href="styles/contact_responsive.css">




<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KC7PB77R"
            height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <?php
    require_once 'template/menu.php';
    ?>

    <div class="super_container">

        <!-- Home -->

        <div class="home">
            <div class="home_inner">
                <!-- Image artist: https://unsplash.com/@yoannboyer -->
                <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/contact.webp" data-speed="0.8"></div>
                <div class="home_container">
                    <div class="home_content text-center">
                        <div class="home_subtitle">Pour nous</div>
                        <div class="home_title">Contacter</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact -->

        <main class="contact">
            <div class="container">
                <div class="row">

                    <!-- Contact Form -->
                    <div class="col-lg-6">
                        <div class="contact_form_container">
                            <div class="contact_title">Laissez nous un message...</div>
                            <form action="" method="post" class="contact_form" id="contact_form">

                                <input type="text" class="contact_input" placeholder="Nom" required="required" name="nom">
                                <input type="text" class="contact_input" placeholder="Prenom" required="required" name="prenom">
                                <input type="email" class="contact_input" placeholder="E-mail" required="required" name="email">
                                <input type="tel" class="contact_input" placeholder="Numéro de téléphone" required="required" name="phone" pattern="[0-9]{10}" >
                                <input type="text" class="contact_input" placeholder="Objet" required="required" name="detail">
                                <input type="hidden" name="objet" value="contact@stompin-bones.fr">
                                <textarea class="contact_input contact_textarea" placeholder="Votre Message" required="required" name="message"></textarea>
                                <button class="contact_button" type="submit" name="submit">Envoyer</button>

                            </form>
                        </div>
                    </div>
                    <?php sendContact() ?>
                    <!-- Contact Info -->


                    <div class="col-lg-6 contact_col">
                        <div class="contact_info">
                            <div class="contact_title">Ou contactez nous...</div>
                            <!--<div class="contact_text">
                                <p>In vitae nisi aliquam, scelerisque leo a, volutpat sem. Vivamus rutrum dui fermentum eros hendrerit, id lobortis leo volutpat. Maecenas sollicitudin est in libero pretium interdum. Nullam volutpat dui sem, ac congue purus luctus nec. Curabitur luctus luctus erat, sit amet facilisis quam congue quis. Quisque ornare luctus erat id dignissim. Nullam ac nunc quis ex porttitor luctus.</p>
                            </div>-->
                            <div class="contact_info_list ">
                                <ul>
                                    <li class="d-flex flex-row   align-items-start justify-content-start">
                                        <div>
                                            <div>Adresse</div>
                                        </div>
                                        <div class="text-secondary">
                                            Association Rockin out<br>
                                            11 rue Berlioz<br>
                                            64000 PAU
                                        </div>
                                    </li>
                                    <li class="d-flex flex-row align-items-start justify-content-start">
                                        <div>
                                            <div>Téléphone</div>
                                        </div>
                                        <div>
                                            <a href="telto: +33628494386" title=" Apeller le +33 628 494 386" class="text-secondary">+33 628 494 386</a>
                                        </div>
                                    </li>
                                    <li class="d-flex flex-row align-items-start justify-content-start">
                                        <div>
                                            <div>E-mail</div>
                                        </div>
                                        <div>
                                            <a href="mailto: contact@stompin-bones.fr" title=" Envoyer un Email à contact@stompin-bones.fr " class="text-secondary">contact@stompin-bones.fr</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="social">
                                <ul class="d-flex flex-row align-items-start justify-content-start">
                                    <!--<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>-->
                                    <li><a href="https://www.facebook.com/people/Stompinbones/100066665325532" target="_blank" title="Lien Facebook"><i class="fa fa-facebook" aria-hidden="true" style="font-size: 3rem;"></i></a></li>
                                    <li><a href="https://www.youtube.com/channel/UCXsiOpECrgq7XfnORE-qXzw" target="_blank" title="Lien YouTube"><i class="fa fa-youtube" aria-hidden="true" style="font-size: 3rem;" title="lien YouTube"></i></a></li>
                                    <!--<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>-->
                                    <!--<li><a href="#"><i class="fa fa-dribbble" aria-hiden="true"></i></a></li>-->
                                    <!--<li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>-->
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <footer>
            <?php
            require_once 'template/footer.php';
            ?>
        </footer>
        <?php
        require_once 'template/js.php';
        ?>
</body>

</html>