<!DOCTYPE html>
<html lang="en">
<?php require_once 'templates.php' ?>
<?php require_once 'language.php' ?>

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Sunny - Checkout</title>
	<link rel="stylesheet" href="./style/style.css" />
	<link rel="stylesheet" href="./style/style_checkout.css" />
</head>

<body class="wrapper">
	<?php echo header_template($language, $lang) ?>
	<main class="main">
		<section class="checkout">
			<div class="container">
				<div class="checkout__inner">
					<form class="checkout__form" action="" method="POST">
						<h1 class="checkout__title">INFORMATION</h1>

						<div class="input__wrapper">
							<input type="text" class="input" placeholder="INSERT NAME" />
						</div>
						<div class="input__wrapper">
							<input type="text" class="input" placeholder="INSERT SURNAME" />
						</div>
						<div class="input__wrapper input__wrapper-double input__wrapper-spaced">
							<input type="text" class="input" placeholder="STREET NAME" />
							<input type="text" class="input" placeholder="POSTAL CODE" />
						</div>
						<div class="input__wrapper">
							<input type="email" class="input" placeholder="E-MAIL" />
						</div>
						<div class="input__wrapper">
							<input type="tel" class="input" placeholder="PHONE-NUMBER" />
						</div>
						<div class="input__wrapper">
							<input type="text" class="input" placeholder="COUNTRY" />
						</div>

						<button type="submit" class="checkout__button button">
							CHECK OUT
						</button>
					</form>
					<ul class="orders">
						<li class="order__item">
							<img src="./img/catalogus_sokken_stripes_red.png" alt="catalogus_sokken_stripes_red" class="order__image" />
							<div class="order__item-inner">
								<h2 class="order__title">RED STRIPED SOCKS</h2>
								<p class="order__text">PRICE: <span>20</span>$</p>
								<p class="order__text">SIZE: <span>45-47</span></p>
								<p class="order__text">AMOUNT: <span>1</span></p>
							</div>
							<button class="order__button">REMOVE ITEM</button>
						</li>
						<li class="order__item">
							<img src="./img/catalogus_sokken_uni_blue.png" alt="catalogus_sokken_uni_blue" class="order__image" />
							<div class="order__item-inner">
								<h2 class="order__title">GREEN UNI SOCKS</h2>
								<p class="order__text">PRICE: <span>20</span>$</p>
								<p class="order__text">SIZE: <span>36-40</span></p>
								<p class="order__text">AMOUNT: <span>1</span></p>
							</div>
							<button class="order__button">REMOVE ITEM</button>
						</li>
					</ul>
				</div>
			</div>
		</section>
	</main>
	<?php echo footer_temple() ?>
</body>

</html>