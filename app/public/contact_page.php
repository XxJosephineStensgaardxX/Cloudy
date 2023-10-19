<!DOCTYPE html>
<html lang="en">
<?php require_once 'templates.php' ?>
<?php require_once 'language.php' ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Page</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/style_checkout.css">
    <link rel="stylesheet" href="style/style_contact_page.css">

</head>

<body>
<?php echo header_template($language, $lang) ?>
    <main class="main">
        <section class="content">
            <div class="container">

                <h1>CONTACT US</h1>
                <form action="submit.php" method="POST">
                    <div class="input__wrapper">
							<input type="text" class="input" placeholder="INSERT NAME" id="Fname"/>
						</div>
						<div class="input__wrapper">
							<input type="text" class="input" placeholder="INSERT SURNAME" id="Lname"/>
						</div>
						<div class="input__wrapper input__wrapper-double input__wrapper">
							<input type="text" class="input" placeholder="STREET NAME" id="street"/>
							<input type="text" class="input" placeholder="POSTAL CODE" id="postcode"/>
						</div>
						<div class="input__wrapper">
							<input type="email" class="input" placeholder="E-MAIL" id="email"/>
						</div>
						<div class="input__wrapper input__wrapper-double input__wrapper">
							<input type="tel" class="input" placeholder="PHONE-NUMBER" id="phone"/>
                            <input type="text" class="input" placeholder="COUNTRY" id="country"/>
						</div>
                        <div class="input_wrapper">
                            <textarea name="comment" id="comment" cols="40" rows="15" placeholder="INSERT TEXT" name="comment" class="input"></textarea>
                        </div>
						<button type="submit" class="contact__button button">
							SUBMIT
						</button>
					</form>
                </div>
        </section>
    </main>
    <?php echo footer_temple() ?>
</body>

</html>