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
					<form class="checkout__form" action="" method="GET">
						<h1 class="checkout__title">
							<?php
							echo $language["INFORMATION"][$lang]
							?>
						</h1>

						<div class="input__wrapper">
							<input type="text" class="input" placeholder="<?php echo $language["INSERT NAME"][$lang] ?>" />
						</div>
						<div class="input__wrapper">
							<input type="text" class="input" placeholder="<?php echo $language["INSERT SURNAME"][$lang] ?>" />
						</div>
						<div class="input__wrapper input__wrapper-double input__wrapper-spaced">
							<input type="text" class="input" placeholder="<?php echo $language["STREET NAME"][$lang] ?>" />
							<input type="text" class="input" placeholder="<?php echo $language["POST CODE"][$lang] ?>" />
						</div>
						<div class="input__wrapper">
							<input type="email" class="input" placeholder="E-MAIL" />
						</div>
						<div class="input__wrapper">
							<input type="tel" class="input" placeholder="<?php echo $language["PHONE-NUMBER"][$lang] ?>" />
						</div>
						<div class="input__wrapper">
							<input type="text" class="input" placeholder="<?php echo $language["COUNTRY"][$lang] ?>" />
						</div>

						<!-- <button type="submit" class="checkout__button button">
							<?php
							// echo $language["CHECK OUT"][$lang]
							?>
						</button> -->
						<a href="paymentPage.php" class="checkout__button button">
							<?php
							echo $language["CHECK OUT"][$lang]
							?>
						</a>
					</form>
					<?php
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
											<span><?php echo $cart_item['price'] ?></span>
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
				</div>
			</div>
		</section>
	</main>
	<?php echo footer_temple($language, $lang) ?>
</body>

</html>