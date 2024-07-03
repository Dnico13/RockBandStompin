<?php
require_once 'template/header.php';
?>


<body>

	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TSRL6SWD" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->






	<div class="super_container">

		<?php
		require_once 'template/menu.php';
		?>

		<!-- Home -->

		<div class="home">
			<div class="home_slider_container">

				<!-- Home Slider -->
				<div class="owl-carousel owl-theme home_slider">

					<!-- Slide -->
					<div class="owl-item">
						<div class="background_image" style="background-image:url(images/LesDeuxMusiciens1bis.jpg);background-size: auto 110%;"></div>
						<div class="home_container">
							<div class="home_container_inner d-flex flex-column align-items-center justify-content-center">
								<div class="home_content text-center">
									<!--<div class="home_subtitle">New single release</div>-->
									<div class="home_title">
										<h1 class="h1" title="The Stompin'Bones">The Stompin'Bones</h1>
									</div>
									<!--<div class="home_link"><a href="#">Listen on Soundcloud</a></div>-->
								</div>
							</div>
						</div>
					</div>

					<!-- Slide -->
					<div class="owl-item">
						<div class="background_image" style="background-image:url(images/LesDeuxMusiciens2.jpg);background-size: auto 110%;"></div>
						<div class="home_container">
							<div class="home_container_inner d-flex flex-column align-items-center justify-content-center">
								<div class="home_content text-center">
									<div class="home_subtitle"></div>
									<div class="home_title">
										<h1 class="h1" title="The Stompin'Bones">The Stompin'Bones</h1>
									</div>
									<!--<div class="home_link"><a href="#">Listen on Soundcloud</a></div>-->
								</div>
							</div>
						</div>
					</div>



				</div>
			</div>
		</div>

		<!-- Artist -->

		<div class="artist mt-5">
			<div class="container">
				<div class="row">

					<!-- Artist Image -->
					<div class="col-lg-4 artist_image_col">
						<div class="artist_image">
							<img src="images/photo-de-contact2.png" alt="Photo du groupe en duo">
						</div>
					</div>

					<!-- Artist Content -->
					<div class="col-lg-7 offset-lg-1">
						<div class="artist_content">
							<div class="section_title_container">
								<!--<div class="section_subtitle">Events</div>-->
								<div class="section_title">
									<h1>The Stompin'Bones</h1>
								</div>
							</div>
							<div class="artist_text">
								<p class="text-justify">
									The Stompin’ Bones est un projet musical de François Calavia et Hugo Duvignau,
									deux musiciens respectivement guitariste chanteur et contrebassiste.
								</p>
								<p class="text-justify">
									Leurs influences qui viennent du Blues, du Rockabilly et du Psychobilly leur
									permettent de s’immerger dans un Crazy Blues vitaminé et de distiller ainsi une
									musique métissée unique.

								</p>

								<p class="text-justify ">
									Dans la lignée des One Man Band à la Hasil Adkins, François chante, parle, crie,
									joue de la guitare et tape sur un cajon. Sans artifices l’ampli fait maison, les
									guitares bon marché ou bien faites de bric et de broc diffusent un son crunchy,
									plongeant l’auditeur dans les bas-fonds des Juke Joint lointains des Etats-Unis.
								</p>
								<p class="text-justify ">
									Si la contrebasse n’était qu’un soutien rythmique, ce combo perdrait toute son
									âme, mais les lignes de basses que Hugo instille, alternant pizzicato et slap,
									décuplent la musicalité des morceaux. Un vrai dialogue se crée alors, les notes
									défilent, et une conversation s’installe entre les deux musiciens, la place est
									faite pour avancer, inexorablement, vers une trans Vaudou.
								</p>
								<p class="text-justify ">
									Depuis l’entrée du groupe en résidence à la Route du Son Ampli à Billère en
									novembre 2021, ils ont signé en décembre 2023 une convention
									d’accompagnement avec l’association Ampli.
								</p>
								<p class="text-justify ">
									Scéniquement le duo réfléchit à de nouvelles formes de représentations mettant
									en scène des éléments de décor vintage, comme des caissons lumineux avec des
									photographies, de vieilles radio. Ils amènent également les spectateurs à prendre
									part au concert en les faisant s’installer avec eux sur scène le temps d’un
									morceau, et diffusent sur les plus grosses scènes des vidéo-projections, des
									bandes sons afin d’immerger le spectateur dans leur univers.
								</p>
								<p class="text-justify ">
									Le duo vient d’enregistrer en février un album 12 titres à sortir en septembre
									2024.
								</p>

							</div>
							<div class="artist_sig"><img src="images/sig.png" alt=""></div>
							<div class="single_player_container d-flex flex-column align-items-start justify-content-center">
								<div class="single_player">
									<div id="jplayer_2" class="jp-jplayer"></div>
									<div id="jp_container_2" class="jp-audio" role="application" aria-label="media player">
										<div class="jp-type-single">
											<div class="player_details d-flex flex-row align-items-center justify-content-start">
												<div class="jp-details">
													<div>playing</div>
													<div class="jp-title" aria-label="title">&nbsp;</div>
												</div>
												<div class="jp-controls-holder ml-auto">
													<button class="jp-play" tabindex="0"></button>
												</div>
											</div>
											<div class="player_controls">
												<div class="jp-gui jp-interface d-flex flex-row align-items-center justify-content-start">
													<div class="jp-controls-holder time_controls d-flex flex-row align-items-center justify-content-start">
														<div>
															<div class="jp-current-time" role="timer" aria-label="time">
																&nbsp;</div>
														</div>
														<div class="jp-progress">
															<div class="jp-seek-bar">
																<div class="jp-play-bar"></div>
															</div>
														</div>
														<div>
															<div class="jp-duration ml-auto" role="timer" aria-label="duration">&nbsp;</div>
														</div>
													</div>
													<div class="jp-volume-controls d-flex flex-row align-items-center justify-content-start ml-auto">
														<button class="jp-mute" tabindex="0"></button>
														<div class="jp-volume-bar">
															<div class="jp-volume-bar-value"></div>
														</div>
													</div>
												</div>
											</div>
											<div class="jp-no-solution">
												<span>Update Required</span>
												To play the media you will need to either update your browser to a
												recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash
													plugin</a>
											</div>
										</div>
									</div>

								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>





		<!-- Featured Album -->

		<div class="featured_album">
			<div class="background_image featured_background" style="background-image:url(images/featured.png)"></div>
			<div class="container">
				<div class="row">
					<div class="col-lg-6 offset-lg-6">
						<div class="section_title_container">
							<div class="section_subtitle">Events</div>
							<div class="section_title">
								<h1>Featured Album</h1>
								<h2 class="h3 text-danger">Bad covers and dirty songs</h2>
								<h2 class="h6 text-secondary">Découvrez les 30 premieres secondes de nos morceaux</h2>
							</div>
						</div>
					</div>
				</div>
				<div class="row featured_row row-lg-eq-height">

					<!-- Featured Album Image -->
					<div class="col-md-6">
						<div class="featured_album_image">
							<div class="image_overlay"></div>
							<div class="background_image" style="background-image:url(images/photoAlbum.jpg); background-size: 85% auto;"></div>
							<!-- <img src="images/featured_album.jpg" alt=""> -->
						</div>
					</div>

					<!-- Featured Album Player -->
					<div class="col-md-6 featured_album_col">
						<div class="featured_album_player_container d-flex flex-column align-items-start justify-content-center">
							<div class="featured_album_player">
								<div class="featured_album_title_bar d-flex flex-row align-items-center justify-content-start">
									<div class="featured_album_title_container">
										<div class="featured_album_artist">Stompin'Bones</div>
										<div class="featured_album_title">Paddle Alone</div>
									</div>
									<!--<div class="featured_album_link ml-auto"><a href="#">buy it on itunes</a></div>-->
								</div>
								<div id="jplayer_1" class="jp-jplayer"></div>
								<div id="jp_container_1" class="jp-audio" role="application" aria-label="media player">
									<div class="jp-type-playlist">
										<div class="jp-playlist">
											<ul>
												<li></li>
											</ul>
										</div>
										<div class="player_details d-flex flex-row align-items-center justify-content-start">
											<div class="jp-details">
												<div>playing</div>
												<div class="jp-title" aria-label="title">&nbsp;</div>
											</div>
											<div class="jp-controls-holder ml-auto">
												<button class="jp-play" tabindex="0"></button>
											</div>
										</div>
										<div class="player_controls">
											<div class="jp-gui jp-interface d-flex flex-row align-items-center justify-content-start">
												<div class="jp-controls-holder time_controls d-flex flex-row align-items-center justify-content-start">
													<div>
														<div class="jp-current-time" role="timer" aria-label="time">
															&nbsp;</div>
													</div>
													<div class="jp-progress">
														<div class="jp-seek-bar">
															<div class="jp-play-bar"></div>
														</div>
													</div>
													<div>
														<div class="jp-duration ml-auto" role="timer" aria-label="duration">&nbsp;</div>
													</div>
												</div>
												<div class="jp-volume-controls d-flex flex-row align-items-center justify-content-start ml-auto">
													<button class="jp-mute" tabindex="0"></button>
													<div class="jp-volume-bar">
														<div class="jp-volume-bar-value"></div>
													</div>
												</div>
											</div>
										</div>
										<div class="jp-no-solution">
											<span>Update Required</span>
											To play the media you will need to either update your browser to a recent
											version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>

				</div>
			</div>
		</div>

		
	

		<?php
		require_once 'template/footer.php';
		?>
	</div>
	<?php
	require_once 'template/js.php';
	?>

</body>

</html>