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
    <link rel="stylesheet" href="style/submit.css">
    <link rel="stylesheet" href="style/style_checkout.css">
    <link rel="stylesheet" href="style/style_contact_page.css">

    <script src="./js/index.js" defer></script>
    
</head>

<body class="wrapper">
    <?php echo header_template($language, $lang) ?>
    <main class="main">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $fname = filter_input(INPUT_POST, "Fname");
            $lname = filter_input(INPUT_POST, "Lname");
            $street = filter_input(INPUT_POST, "street");
            $email = filter_input(INPUT_POST, "email");
            $postcode = filter_input(INPUT_POST, "postcode");
            $phone = filter_input(INPUT_POST, "phone");

            $errorFlag = false;
            $errors = array();

            if (empty($fname)) {
                $errorFlag = true;
                array_push($errors, "Invalid first name");
            };
            if (empty($lname)) {
                $errorFlag = true;
                array_push($errors, "Invalid last name");
            };
            if (empty($street)) {
                $errorFlag = true;
                array_push($errors, "Invalid street");
            };
            if (empty($email)) {
                $errorFlag = true;
                array_push($errors, "Invalid email");
            };
            if (empty($postcode)) {
                $errorFlag = true;
                array_push($errors, "Invalid postcode");
            };
            if (empty($phone)) {
                $errorFlag = true;
                array_push($errors, "Invalid phone");
            };


            if ($errorFlag == true) {
                echo '<div class="error_div">';
                foreach ($errors as $error) {
                    echo "<p>" . $error . "</p>";
                }
                echo '<button class="error_button"><a href="contact_page.php" style="color:#1e407a">BACK</a></button>';
                echo '</div>';
            } else {
                echo '
                        <div class="success">
                            <h1>                    
                                YOUR MESSAGE IS SUCCEFULY SEND
                            </h1>
                        </div>
                        ';
            }
        }
        else{
        ?>
            <section class="content">
                <div class="container">

                    <h1 class="center_text">
                        <?php
                        echo $language["CONTACT US"][$lang]
                        ?>
                    </h1>
                    <form action="contact_page.php" method="POST">
                        <!--Change GET to Post later-->
                        <div class="input__wrapper">
                            <input type="text" class="input" placeholder="<?php echo $language["INSERT NAME"][$lang] ?>" id="Fname" name="Fname" />
                        </div>
                        <div class="input__wrapper">
                            <input type="text" class="input" placeholder="<?php echo $language["INSERT SURNAME"][$lang] ?>" id="Lname" name="Lname" />
                        </div>
                        <div class="input__wrapper input__wrapper-double input__wrapper">
                            <input type="text" class="input" placeholder="<?php echo $language["STREET NAME"][$lang] ?>" id="street" name="street" />
                            <input type="text" class="input" placeholder="<?php echo $language["POST CODE"][$lang] ?>" id="postcode" name="postcode" />
                        </div>
                        <div class="input__wrapper">
                            <input type="email" class="input" placeholder="E-MAIL" id="email" name="email" />
                        </div>
                        <div class="input__wrapper input__wrapper-double input__wrapper">
                            <input type="tel" class="input" placeholder="<?php echo $language["PHONE-NUMBER"][$lang] ?>" id="phone" name="phone" />
                            <input type="text" class="input" placeholder="<?php echo $language["COUNTRY"][$lang] ?>" id="country" name="country">
                        </div>
                        <div class="input_wrapper">
                            <textarea name="comment" id="comment" cols="40" rows="6" placeholder="<?php echo $language["INSERT TEXT"][$lang] ?>" name="comment" class="input"></textarea>
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
        ?>
    </main>
    <?php echo footer_temple($language, $lang) ?>
</body>

</html>