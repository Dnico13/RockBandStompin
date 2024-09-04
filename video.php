<?php
require_once 'pdo.php';
require_once 'template/header.php';
require_once './fonction/readVideo.php';
$Videos = getVideo($pdo);

require_once 'template/menu.php';
?>
<link rel="stylesheet" href="styles/style.css">
</head>

<body>

	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KC7PB77R"
			height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	<main class="mainvideo mainBis ">

		<div class="container w-100 w-md-50 Espace1 text-justify text-md-center presentation">
			<p class="h5">Plongez dans notre univers visuel avec notre collection de vidéos YouTube. Découvrez nos performances live, nos clips musicaux et des moments exclusifs en coulisses.<br></p>
			<p class="h5">
				Abonnez-vous et ne manquez aucune de nos nouvelles vidéos pour rester connecté avec notre aventure musicale.
			</p>
		</div>

		<div class="container containerVideo mt-5">
			<div class="row">
				<?php
				foreach ($Videos as $key => $video) { ?>

					<div class="col">
						<?php
						$balise = htmlspecialchars_decode($video['balise_video']);
						$balise_class = str_replace('<iframe', '<iframe class="video', $balise);
						echo $balise_class;

						?>
					</div>
				<?php } ?>
			</div>
		</div>


	</main>

	<?php

	require_once 'template/footer.php';
	require_once 'template/js.php';

	?>

</body>

</html>