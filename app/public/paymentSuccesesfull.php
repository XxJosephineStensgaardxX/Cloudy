<!DOCTYPE html>
<html lang="en">
	<?php require_once 'templates.php' ?>

	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Sunny - Checkout</title>
		<link rel="stylesheet" href="./style/style.css" />
		<link rel="stylesheet" href="./style/style_success.css" />
	</head>

	<body class="wrapper">
		<?php header_template() ?>
		<main class="main">
			<section class="success">
				<div class="container">
					<div class="success__inner">
						<h1 class="success__title">PAYMENT IS SUCCESFUL</h1>
						<a href="mainPage.php" class="success__link">SHOP MORE</a>
					</div>
				</div>
			</section>
		</main>
		<?php footer() ?>
	</body>
</html>
