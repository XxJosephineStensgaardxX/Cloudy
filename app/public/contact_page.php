<!DOCTYPE html>
<html lang="en">
<?php require_once 'templates.php' ?>
<?php require_once 'language.php' ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Page</title>
    <link rel="stylesheet" href="style/style.css">
	<link rel="stylesheet" href="./style/style_lang.css">
    <link rel="stylesheet" href="style/style_checkout.css">
    <link rel="stylesheet" href="style/style_contact_page.css">
    <?php
        $lang = "EN";

        if($_SERVER["REQUEST_METHOD"] == "GET"){
            $lang = filter_input(INPUT_GET, "submit");
            if($lang == ""){
                $lang = "EN";
            }
        }   
    ?>   

</head>

<body>
<?php echo header_template($language, $lang) ?>
    <main class="main">
        <section class="content">
            <div class="container">

                <h1>
                    <?php
                        echo $language["CONTACT US"][$lang]
                    ?>
                </h1>
                <form action="submit.php" method="GET">
                    <!--Change GET to Post later-->
                    <div class="input__wrapper">
							<input type="text" class="input" placeholder="<?php echo $language["INSERT NAME"][$lang]?>" id="Fname"/>
						</div>
						<div class="input__wrapper">
							<input type="text" class="input" placeholder="<?php echo $language["INSERT SURNAME"][$lang]?>" id="Lname"/>
						</div>
						<div class="input__wrapper input__wrapper-double input__wrapper">
							<input type="text" class="input" placeholder="<?php echo $language["STREET NAME"][$lang]?>" id="street"/>
							<input type="text" class="input" placeholder="<?php echo $language["POST CODE"][$lang]?>" id="postcode"/>
						</div>
						<div class="input__wrapper">
							<input type="email" class="input" placeholder="E-MAIL" id="email"/>
						</div>
						<div class="input__wrapper input__wrapper-double input__wrapper">
							<input type="tel" class="input" placeholder="<?php echo $language["PHONE-NUMBER"][$lang]?>" id="phone"/>
                            <input type="text" class="input" placeholder="<?php echo $language["COUNTRY"][$lang]?>" id="country"/>
						</div>
                        <div class="input_wrapper">
                            <textarea name="comment" id="comment" cols="40" rows="15" placeholder="<?php echo $language["INSERT TEXT"][$lang]?>" name="comment" class="input"></textarea>
                        </div>
						<button type="submit" class="contact__button button">
                            <?php
                                echo $language["SUBMIT"][$lang]
                            ?>
						</button>
					</form>
                </div>
        </section>
    </main>
    <?php echo footer_temple() ?>
</body>

</html>