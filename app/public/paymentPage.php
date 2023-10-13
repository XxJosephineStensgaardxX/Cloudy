<!DOCTYPE html>
<html lang="en">
<?php require_once 'templates.php' ?>

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Sunny - Checkout</title>
	<link rel="stylesheet" href="./style/style.css" />
	<link rel="stylesheet" href="./style/style_checkout.css" />
</head>

<body class="wrapper">
	<?php echo header_template() ?>
	<main class="main">
		<section class="checkout">
			<div class="container">
				<div class="checkout__inner">
					<form class="checkout__form" action="" method="POST">
						<h1 class="checkout__title">CARD INFORMATION</h1>

						<div class="input__wrapper">
							<input type="text" class="input" placeholder="INSERT NAME" />
						</div>
						<div class="input__wrapper input__wrapper-spaced">
							<input type="text" class="input" placeholder="CARD NUMBER" />
						</div>
						<div class="input__wrapper input__wrapper-double">
							<input type="text" class="input" placeholder="EXPIRATION DATE" />
							<input type="text" class="input" placeholder="CVV" />
						</div>

						<div class="checkout__button-wrapper">
							<button class="checkout__button">
								<img src="./img/paypal button.png" alt="Paypal" />
							</button>
							<button class="checkout__button">
								<img src="./img/ideal.png" alt="Paypal" />
							</button>
							<button class="checkout__button">
								<img src="./img/VISA.png" alt="Paypal" />
							</button>
							<button class="checkout__button">
								<img src="./img/mastercard.png" alt="Paypal" />
							</button>
						</div>
					</form>
					<ul class="orders">
						<li class="order__item">
							<img src="./img/catalogus_sokken_stripes_red.png" alt="catalogus_sokken_stripes_red" class="order__image" />
							<div class="order__item-inner">
								<h2 class="order__title">RED STRIPED SOCKS</h2>
								<p class="order__text">PRICE: <span>20$</span></p>
								<p class="order__text">SIZE: <span>45-47</span></p>
								<p class="order__text">AMOUNT: <span>1</span></p>
							</div>
							<button class="order__button">REMOVE ITEM</button>
						</li>
						<li class="order__item">
							<img src="./img/catalogus_sokken_uni_blue.png" alt="catalogus_sokken_uni_blue" class="order__image" />
							<div class="order__item-inner">
								<h2 class="order__title">GREEN UNI SOCKS</h2>
								<p class="order__text">PRICE: <span>20$</span></p>
								<p class="order__text">SIZE: <span>36-40</span></p>
								<p class="order__text">AMOUNT: <span>1</span></p>
							</div>
							<button class="order__button">REMOVE ITEM</button>
						</li>
					</ul>
				</div>
				<div class="checkout__result">
					<a href="checkoutPage.php" class="checkout__link">NOT CORRECT? GO BACK</a>
					<p class="checkout__total">TOTAL: <span>50</span>$</p>
				</div>
			</div>
		</section>
	</main>
	<?php echo footer_temple() ?>
</body>

</html>