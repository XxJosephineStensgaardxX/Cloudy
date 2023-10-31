<?php
    session_start(); 
?>
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

<body>
    <?php echo desktop_header_template($language, $lang) ?>
    <?php echo mobile_header_template($language, $lang) ?>  
    <main class="main">
        <section class="content">
            <div class="container">

                <h1 class="center_text">
                    <?php
                        echo $language["CONTACT US"][$lang]
                    ?>
                </h1>
                <form action="submit.php" method="POST">
                    <!--Change GET to Post later-->
                        <div class="input__wrapper">
							<input type="text" class="input" placeholder="<?php echo $language["INSERT NAME"][$lang]?>" id="Fname" name="Fname"/>
						</div>
						<div class="input__wrapper">
							<input type="text" class="input" placeholder="<?php echo $language["INSERT SURNAME"][$lang]?>" id="Lname" name="Lname"/>
						</div>
						<div class="input__wrapper input__wrapper-double input__wrapper">
							<input type="text" class="input" placeholder="<?php echo $language["STREET NAME"][$lang]?>" id="street" name="street"/>
							<input type="text" class="input" placeholder="<?php echo $language["POST CODE"][$lang]?>" id="postcode" name="postcode"/>
						</div>
						<div class="input__wrapper">
							<input type="email" class="input" placeholder="E-MAIL" id="email" name="email"/>
						</div>
						<div class="input__wrapper input__wrapper-double input__wrapper">
							<input type="tel" class="input" placeholder="<?php echo $language["PHONE-NUMBER"][$lang]?>" id="phone" name="phone"/>
                            <input type="text" class="input" placeholder="<?php echo $language["COUNTRY"][$lang]?>" id="country" name="country">
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