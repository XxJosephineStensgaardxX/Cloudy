<?
session_start();

$name_err = $surname_err = $street_err = $postcode_err = $email_err = $phone_err = $country_err = "";
$name = $surname = $street = $postcode = $email = $phone = $country  = "";
$error_flag = FALSE;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (empty($_POST["name"])) {
		$name_err = "* name is required";
		$error_flag = TRUE;
	} else {
		$name = test_input($_POST["name"]);
	}

	if (empty($_POST["surname"])) {
		$surname_err = "* surname is required";
		$error_flag = TRUE;
	} else {
		$surname = test_input($_POST["surname"]);
	}

	if (empty($_POST["street"])) {
		$street_err = "* street is required";
		$error_flag = TRUE;
	} else {
		$street = test_input($_POST["street"]);
	}

	if (empty($_POST["postcode"])) {
		$postcode_err = "* postcode is required";
		$error_flag = TRUE;
	} else {
		$postcode = test_input($_POST["postcode"]);
	}

	if (empty($_POST["email"])) {
		$email_err = "* email is required";
		$error_flag = TRUE;
	} else {
		$email = test_input($_POST["email"]);
	}

	if (empty($_POST["phone"])) {
		$phone_err = "* phone is required";
		$error_flag = TRUE;
	} else {
		$phone = test_input($_POST["phone"]);
	}

	if (empty($_POST["country"])) {
		$country_err = "* country is required";
		$error_flag = TRUE;
	} else {
		$country = test_input($_POST["country"]);
	}
	if (!$error_flag) {
		header("Location: paymentPage.php");
		exit;
	}
}


function test_input($data)
{
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
?>

<?php include 'language.php' ?>
<?php include 'templates.php' ?>

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
					<form class="checkout__form" action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POST">
						<h1 class="checkout__title">
							<?php
							echo $language["INFORMATION"][$lang]
							?>
						</h1>

						<div class="input__wrapper">
							<input type="text" class="input" name="name" value="<?php echo $name ?>" placeholder="<?php echo $language["INSERT NAME"][$lang] ?>" />
							<span class="input__error"><?php echo $name_err; ?></span>
						</div>
						<div class="input__wrapper">
							<input type="text" class="input" name="surname" value="<?php echo $surname ?>" placeholder="<?php echo $language["INSERT SURNAME"][$lang] ?>" />
							<span class="input__error"><?php echo $surname_err; ?></span>
						</div>
						<div class="input__wrapper input__wrapper-double input__wrapper-spaced">
							<input type="text" class="input" name="street" value="<?php echo $street ?>" placeholder="<?php echo $language["STREET NAME"][$lang] ?>" />
							<span class="input__error"><?php echo $street_err; ?></span>
							<input type="text" class="input" name="postcode" value="<?php echo $postcode ?>" placeholder="<?php echo $language["POST CODE"][$lang] ?>" />
							<span class="input__error"><?php echo $postcode_err; ?></span>
						</div>
						<div class="input__wrapper">
							<input type="email" class="input" name="email" value="<?php echo $email ?>" placeholder="E-MAIL" />
							<span class="input__error"><?php echo $email_err; ?></span>
						</div>
						<div class="input__wrapper">
							<input type="tel" class="input" name="phone" value="<?php echo $phone ?>" placeholder="<?php echo $language["PHONE-NUMBER"][$lang] ?>" />
							<span class="input__error"><?php echo $phone_err; ?></span>
						</div>
						<div class="input__wrapper">
							<input type="text" class="input" name="country" value="<?php echo $country ?>" placeholder="<?php echo $language["COUNTRY"][$lang] ?>" />
							<span class="input__error"><?php echo $country_err; ?></span>
						</div>

						<button type="submit" class="checkout__button button">
							<?php
							echo $language["CHECK OUT"][$lang]
							?>
						</button>
					</form>
					<?php
					$cart = $_SESSION["CART"];
					if (count($cart) !== 0) : ?>
						<ul class="orders">
							<?php
							foreach ($cart as $cart_item) :

								$images = array(
									"BLUE" => "./img/catalogus_sokken_" . $cart_item["type"] . "_blue.png",
									"GREEN" => "./img/catalogus_sokken_" . $cart_item["type"] . "_green.png",
									"PINK" => "./img/catalogus_sokken_" . $cart_item["type"] . "_pink.png",
									"RED" => "./img/catalogus_sokken_" . $cart_item["type"] . "_red.png",
									"YELLOW" => "./img/catalogus_sokken_" . $cart_item["type"] . "_yellow.png",
								);
							?>
								<li class="order__item">
									<img src="<?php echo $images[$cart_item['color']] ?>" alt="<?php echo $images[$cart_item['color']] ?>" class="order__image" />
									<h2 class="order__title">
										<?php echo $language[$cart_item['color']][$lang] . " " . $language[strtoupper($cart_item["type"])][$lang] . " ", $language["SOCKS"][$lang] ?>
									</h2>
									<div class="order__item-inner">
										<p class="order__text">
											<?php
											echo $language["PRICE:"][$lang]
											?>
											<span><?php echo $cart_item['price'];  ?></span>
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
						<section class="checkout__empty">
							<h3>Your card is empty</h3>
						</section>
					<?php endif ?>
				</div>
			</div>
		</section>
	</main>
	<?php echo footer_temple($language, $lang); ?>
</body>

</html>