<!DOCTYPE html>
<html lang="en">
<?php require_once 'templates.php' ?>
<?php require_once 'language.php' ?>

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Sunny - Checkout</title>
	<link rel="stylesheet" href="./style/style.css" />
	<link rel="stylesheet" href="./style/style_lang.css">
	<link rel="stylesheet" href="./style/style_checkout.css" />
	<?php
        $lang = "EN";
        
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $lang = filter_input(INPUT_POST, "submit");
        }   
    ?>   
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
							<input type="text" class="input" placeholder="<?php echo $language["INSERT NAME"][$lang]?>"/>
						</div>
						<div class="input__wrapper">
							<input type="text" class="input" placeholder="<?php echo $language["INSERT SURNAME"][$lang]?>" />
						</div>
						<div class="input__wrapper input__wrapper-double input__wrapper-spaced">
							<input type="text" class="input" placeholder="<?php echo $language["STREET NAME"][$lang]?>" />
							<input type="text" class="input" placeholder="<?php echo $language["POST CODE"][$lang]?>" />
						</div>
						<div class="input__wrapper">
							<input type="email" class="input" placeholder="E-MAIL" />
						</div>
						<div class="input__wrapper">
							<input type="tel" class="input" placeholder="<?php echo $language["PHONE-NUMBER"][$lang]?>" />
						</div>
						<div class="input__wrapper">
							<input type="text" class="input" placeholder="<?php echo $language["COUNTRY"][$lang]?>" />
						</div>

						<button type="submit" class="checkout__button button"  value="EN" >
							<?php
                                echo $language["CHECK OUT"][$lang]
                            ?>
						</button>
					</form>
					<ul class="orders">
						<li class="order__item">
							<img src="./img/catalogus_sokken_stripes_red.png" alt="catalogus_sokken_stripes_red" class="order__image" />
							<div class="order__item-inner">
								<h2 class="order__title">
									<?php
										echo $language["RED STRIPED SOCKS"][$lang]
									?>
								</h2>
								<p class="order__text">
									<?php
										echo $language["PRICE:"][$lang]
									?>
									<span>20</span>
									$
								</p>
								<p class="order__text">
									<?php
										echo $language["SIZE:"][$lang]
									?>
									<span>45-47</span>
								</p>
								<p class="order__text">
									<?php
										echo $language["AMOUNT:"][$lang]
									?>
									<span>1</span>
								</p>
							</div>
							<button class="order__button">
								<?php
									echo $language["REMOVE ITEM"][$lang]
								?>
							</button>
						</li>
						<li class="order__item">
							<img src="./img/catalogus_sokken_uni_blue.png" alt="catalogus_sokken_uni_blue" class="order__image" />
							<div class="order__item-inner">
								<h2 class="order__title">
									<?php
										echo $language["GREEN UNI SOCKS"][$lang]
									?>
								</h2>
								<p class="order__text">
									<?php
										echo $language["PRICE:"][$lang]
									?>
									<span>20</span>
									$
								</p>
								<p class="order__text">
									<?php
										echo $language["SIZE:"][$lang]
									?>
									<span>36-40</span>
								</p>
								<p class="order__text">
									<?php
										echo $language["AMOUNT:"][$lang]
									?>
									<span>1</span>
								</p>
							</div>
							<button class="order__button">
								<?php
									echo $language["REMOVE ITEM"][$lang]
								?>
							</button>
						</li>
					</ul>
				</div>
			</div>
		</section>
	</main>
	<?php echo footer_temple() ?>
</body>

</html>