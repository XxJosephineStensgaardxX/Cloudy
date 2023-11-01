<?php require_once 'templates.php' ?>
<?php require_once 'language.php' ?>
<?php
init();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Sunny - Checkout</title>
	<link rel="stylesheet" href="./style/style.css" />
	<link rel="stylesheet" href="./style/style_lang.css">
	<link rel="stylesheet" href="./style/style_success.css" />
	<?php
	$lang = $_SESSION["LANG"];

	if ($_SERVER["REQUEST_METHOD"] == "GET") {
		$lang = filter_input(INPUT_GET, "submit");
		if (empty($lang)) {
			$lang =  $_SESSION["LANG"];
		}

		$_SESSION["LANG"] = $lang;
	}
	?>
</head>

<body class="wrapper">
	<?php echo header_template($language, $lang) ?>
	<main class="main">
		<section class="success">
			<div class="container">
				<div class="success__inner">
					<h1 class="success__title">
						<?php
						echo $language["PAYMENT IS SUCCESFUL"][$lang]
						?>
					</h1>
					<a href="mainPage.php" class="success__link">
						<?php
						echo $language["SHOP MORE"][$lang]
						?>
					</a>
				</div>
			</div>
		</section>
	</main>
	<?php echo footer_temple() ?>
</body>

</html>