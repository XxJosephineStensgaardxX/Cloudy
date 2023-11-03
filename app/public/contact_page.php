<?php session_start(); ?>

<?php require_once 'templates.php' ?>
<?php require_once 'language.php' ?>
<?php
$lang = init();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Page</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="./style/style_lang.css">
    <link rel="stylesheet" href="style/style_success.css">
    <link rel="stylesheet" href="style/style_checkout.css">
    <link rel="stylesheet" href="style/style_contact_page.css">

    <script src="./js/index.js" defer></script>

</head>

<body class="wrapper">
    <?php echo header_template($language, $lang) ?>
    <main class="main">
        <?php

        $name_err = $surname_err = $street_err = $postcode_err = $email_err = $phone_err = $country_err = $comment_err = "";
        $name = $surname = $street = $postcode = $email = $phone = $country = $comment = "";
        $submitted = FALSE;
        $error_flag = FALSE;

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["name"])) {
                $name_err = "* " . $language["name is required"][$lang];
                $error_flag = TRUE;
            } else {
                $name = test_input($_POST["name"]);
            }

            if (empty($_POST["surname"])) {
                $surname_err = "* " . $language["surname is required"][$lang];
                $error_flag = TRUE;
            } else {
                $surname = test_input($_POST["surname"]);
            }

            if (empty($_POST["street"])) {
                $street_err = "* " . $language["street is required"][$lang];
                $error_flag = TRUE;
            } else {
                $street = test_input($_POST["street"]);
            }

            if (empty($_POST["postcode"])) {
                $postcode_err = "* " . $language["postcode is required"][$lang];
                $error_flag = TRUE;
            } else {
                $postcode = test_input($_POST["postcode"]);
            }

            if (empty($_POST["email"])) {
                $email_err = "* " . $language["email is required"][$lang];
                $error_flag = TRUE;
            } else {
                $email = test_input($_POST["email"]);
            }

            if (empty($_POST["phone"])) {
                $phone_err = "* " . $language["phone is required"][$lang];
                $error_flag = TRUE;
            } else {
                $phone = test_input($_POST["phone"]);
            }

            if (empty($_POST["country"])) {
                $country_err = "* " . $language["country is required"][$lang];
                $error_flag = TRUE;
            } else {
                $country = test_input($_POST["country"]);
            }

            if (empty($_POST["comment"])) {
                $comment_err = "* " . $language["comment is required"][$lang];
                $error_flag = TRUE;
            } else {
                $comment = test_input($_POST["comment"]);
            }

            if (!$error_flag) :
                $submitted = TRUE;
        ?>
                <div class="success">
                    <div class="container">
                        <div class="success__inner">
                            <h1 class="success__title"><?php echo $language["YOUR MESSAGE IS..."][$lang] ?></h1>
                        </div>
                    </div>
                </div>
            <?php
            endif;
        }

        if (!$submitted) {
            ?>
            <section class="content">
                <div class="container">
                    <h1 class="center_text">
                        <?php
                        echo $language["CONTACT US"][$lang]
                        ?>
                    </h1>
                    <form class="contact__form" action="contact_page.php" method="POST">
                        <!--Change GET to Post later-->
                        <div class="input__wrapper">
                            <input type="text" class="input" placeholder="<?php echo $language["INSERT NAME"][$lang] ?>" id="Fname" name="name" value="<?php echo $name ?>" />
                            <span class="input__error"><?php echo $name_err; ?></span>
                        </div>
                        <div class="input__wrapper">
                            <input type="text" class="input" placeholder="<?php echo $language["INSERT SURNAME"][$lang] ?>" id="Lname" name="surname" value="<?php echo $surname ?>" />
                            <span class="input__error"><?php echo $surname_err; ?></span>
                        </div>
                        <div class="input__wrapper input__wrapper-double input__wrapper">
                            <input type="text" class="input" placeholder="<?php echo $language["STREET NAME"][$lang] ?>" id="street" name="street" value="<?php echo $street ?>" />
                            <span class="input__error"><?php echo $street_err; ?></span>
                            <input type="text" class="input" placeholder="<?php echo $language["POST CODE"][$lang] ?>" id="postcode" name="postcode" value="<?php echo $postcode ?>" />
                            <span class="input__error"><?php echo $postcode_err; ?></span>
                        </div>
                        <div class="input__wrapper">
                            <input type="email" class="input" placeholder="E-MAIL" id="email" name="email" value="<?php echo $name ?>" />
                            <span class="input__error"><?php echo $email_err; ?></span>
                        </div>
                        <div class="input__wrapper input__wrapper-double input__wrapper">
                            <input type="tel" class="input" placeholder="<?php echo $language["PHONE-NUMBER"][$lang] ?>" id="phone" name="phone" value="<?php echo $phone ?>" />
                            <span class="input__error"><?php echo $phone_err; ?></span>
                            <input type="text" class="input" placeholder="<?php echo $language["COUNTRY"][$lang] ?>" id="country" name="country" value="<?php echo $country ?>" />
                            <span class="input__error"><?php echo $country_err; ?></span>
                        </div>
                        <div class="input__wrapper">
                            <textarea name="comment" id="comment" cols="40" rows="6" placeholder="<?php echo $language["INSERT TEXT"][$lang] ?>" name="comment" class="input" value="<?php echo $comment ?>"></textarea>
                            <span class="input__error"><?php echo $comment_err; ?></span>
                        </div>
                        <button type="submit" class="contact__button button">
                            <?php
                            echo $language["SUBMIT"][$lang]
                            ?>
                        </button>
                    </form>
                </div>
            </section>
        <?php
        }
        function test_input($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        ?>
    </main>
    <?php echo footer_temple($language, $lang) ?>
</body>

</html>