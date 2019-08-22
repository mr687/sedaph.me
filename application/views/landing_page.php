<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>seDaph - Lebih Dekat Lebih Baik</title>

	<link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="<?= ASSETS_DIR('css/semantic.min.css') ?>">
	<link rel="stylesheet" href="<?= ASSETS_DIR('css/style.css?v=1') ?>">
	<link rel="stylesheet" href="<?= ASSETS_DIR('fontawesome/css/all.min.css') ?>">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/3.2.1/css/font-awesome.min.css">

</head>
<body>

<!--Start Header-->
<header>
	<!--Start Container Div-->
	<div class="ui container">

		<!--Start nav-->
		<nav class="ui menu">
			<a href="<?= base_url() ?>" class="item" title="sedaph.me">seDaph.me</a>
			<div class="right menu">
				<a href="" class="item" title="Discover">Discover</a>
				<a href="" class="item" title="Contact">Contact</a>
				<a href="" class="item" title="About">About</a>
			</div>
		</nav>
		<!--End nav-->

		<div class="ui middle aligned sixteen column centered grid" style="height: 100%;">
			<di id="type_wrapper" class="column center aligned">
				<section>
					<h1 id="typing"></h1>
				</section>
			</div>
		</div>

		<section id="bottom_arrow" class="bounce">
			<a href="#whoami" title="Discover"><i class="fas fa-arrow-down fa-2x" style="color: #eee"></i></a>
		</section>


		<figure id="hero"></figure>

	</div>
	<!--End Container Div-->


</header>
<!--End Header-->

<!--Start Main-->
<main>
	<section id="whoami">
		<a name="whoami"></a>
		<div class="ui container">
			<div class="ui grid">
				<div class="eight wide column">
					<h1 class="ui header">Who am i ?</h1>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab adipisci aut cumque deserunt dolore error, facilis hic libero nisi officia porro quae quibusdam rerum. Autem dolores iure neque quidem voluptates?
					</p>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab adipisci aut cumque deserunt dolore error, facilis hic libero nisi officia porro quae quibusdam rerum. Autem dolores iure neque quidem voluptates?
					</p>
				</div>
				<div class="eight wide column">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est, fugiat quia. Aliquid culpa distinctio dolore eligendi fugit, illo obcaecati temporibus. Distinctio et illum itaque magnam molestiae pariatur placeat quod voluptatum.
				</div>
			</div>
		</div>
	</section>
</main>
<!--End Main-->

<!--Start Footer-->
<footer></footer>
<!--End Footer-->

<script
	src="https://code.jquery.com/jquery-3.4.1.min.js"
	integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
	crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/typeit@6/dist/typeit.min.js" />
<script src="<?= ASSETS_DIR('js/semantic.min.js') ?>"></script>
<script src="<?= ASSETS_DIR('js/own.js') ?>"></script>


</body>
</html>
