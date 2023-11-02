<?php require_once 'templates.php' ?>
<?php require_once 'language.php' ?>
<?php
$lang = init();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Sunny - Checkout</title>
	<link rel="stylesheet" href="./style/style.css" />
	<link rel="stylesheet" href="./style/style_lang.css">
	<link rel="stylesheet" href="./style/style_checkout.css" />

	<script src="./js/index.js" defer></script>
</head>

<body class="wrapper">
	<?php echo header_template($language, $lang) ?>
	<main class="main">
		<section class="checkout">
			<div class="container">
				<div class="checkout__inner">
					<form class="checkout__form" action="" method="POST">
						<h1 class="checkout__title">
							<?php
							echo $language["CARD INFORMATION"][$lang]
							?>
						</h1>

						<div class="input__wrapper">
							<input type="text" class="input" placeholder="<?php echo $language["INSERT NAME"][$lang] ?>" />
						</div>
						<div class="input__wrapper input__wrapper-spaced">
							<input type="text" class="input" placeholder="<?php echo $language["CARD NUMBER"][$lang] ?>" />
						</div>
						<div class="input__wrapper input__wrapper-double">
							<input type="text" class="input" placeholder="<?php echo $language["EXPIRATION DATE"][$lang] ?>" />
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
						<!-- <button type="submit" class="checkout__button button">
							<?php
							// echo $language["PAY"][$lang]
							?>
						</button> -->
						<a href="paymentSuccesesfull.php" class="checkout__button button">
							<?php
							echo $language["PAY"][$lang]
							?>
						</a>
					</form><?php
									$images = array(
										"BLUE" => "./img/catalogus_sokken_uni_blue.png",
										"GREEN" => "./img/catalogus_sokken_uni_green.png",
										"PINK" => "./img/catalogus_sokken_uni_pink.png",
										"RED" => "./img/catalogus_sokken_uni_red.png",
										"YELLOW" => "./img/catalogus_sokken_uni_yellow.png",
									);

									$cart = $_SESSION["CART"];
									if (count($cart) !== 0) : ?>
						<ul class="orders">
							<?php
										foreach ($cart as $cart_item) :
							?>
								<li class="order__item">
									<img src="<?php echo $images[$cart_item['color']] ?>" alt="<?php echo $images[$cart_item['color']] ?>" class="order__image" />
									<h2 class="order__title">
										<?php echo $cart_item['color'] . " STRIPED SOCKS" ?>
									</h2>
									<div class="order__item-inner">
										<p class="order__text">
											<?php
											echo $language["PRICE:"][$lang]
											?>
											<span><?php echo $cart_item["price"]?></span>
											$
										</p>
										<p class="order__text">
											<?php
											echo $language["SIZE:"][$lang]
											?>
											<span><?php echo $cart_item['size'] ?></span>
										</p>
										<p class="order__text">
											<?php
											echo $language["AMOUNT:"][$lang]
											?>
											<span><?php echo $cart_item['amount'] ?></span>
										</p>
									</div>
									<button class="order__button">
										<?php
											echo $language["REMOVE ITEM"][$lang]
										?>
									</button>
								</li>
							<?php endforeach ?>
						</ul>
					<?php else : ?>
						<p>Your card is empty</p>
					<?php endif ?>
					<div class="checkout__result">
						<a href="checkoutPage.php" class="checkout__link">
							<?php
							echo $language["NOT CORRECT? GO BACK"][$lang]
							?>
						</a>
						<p class="checkout__total">
							<?php
							echo $language["TOTAL:"][$lang]
							?>
							<span><?php $sum = 0;
										if (count($cart) !== 0) {
											foreach ($cart as $cart_item) {
												$sum += $cart_item["price"] * $cart_item["amount"];
											}
										} 
										echo $sum;
										?></span>
							$
						</p>
					</div>
				</div>
			</div>
		</section>
	</main>
	<?php echo footer_temple($language, $lang) ?>
</body>

</html>