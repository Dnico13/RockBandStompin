<!DOCTYPE html>
<html lang="fr">

<head>
	<?php
	require_once './fonction/arrayTitle.php';

	$url_end = $_SERVER['REQUEST_URI'];
	$url_final = basename($url_end);
	?>

	<title>Les Stompin'Bones:
		<?php if (isset($title[$url_final])) {
			echo $title[$url_final];
		} else {
			echo "Duo de Crazy Blues de la région de Pau.";
		} ?>
	</title>

	<meta charset="utf-8">

	<meta name="author" content="Nicolas Delannay : www.ndev2023.fr">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Website officiel des  Stompin'Bones: Duo de rockin'blue Pau.">
	<meta name="keyword" content="Duo de rock, Pau, Pyrénées,scéne musicales, concerts, contrebasse, guitare, Crazy Blues, Rockabilly, homemade sounds, ramblin'blues, rockin'blue, Psychobilly, sud-ouest, Bayonne, musiciens, musique, Ampli Billiére">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="icon" type="image/x-icon" href="logo2.ico">
	<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
	<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
	<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
	<link rel="stylesheet" type="text/css" href="styles/responsive.css">
	<link rel="stylesheet" href="styles/index.css" type="text/css">
	<link rel="stylesheet" href="styles/about1.css">

	<!--rajout -->
	<!--<link rel="stylesheet"  type="text/css" href="styles/elements.css">
<link rel="stylesheet"  type="text/css" href="styles/elements_responsive.css">

 fin rajout -->
	<!-- google analytic-->

	<!-- Google Tag Manager -->
	<script>
		(function(w, d, s, l, i) {
			w[l] = w[l] || [];
			w[l].push({
				'gtm.start': new Date().getTime(),
				event: 'gtm.js'
			});
			var f = d.getElementsByTagName(s)[0],
				j = d.createElement(s),
				dl = l != 'dataLayer' ? '&l=' + l : '';
			j.async = true;
			j.src =
				'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
			f.parentNode.insertBefore(j, f);
		})(window, document, 'script', 'dataLayer', 'GTM-KC7PB77R');
	</script>
	<!-- End Google Tag Manager -->
	<!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-DVJ9QH4ZKG"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'G-DVJ9QH4ZKG');
	</script>





</head>