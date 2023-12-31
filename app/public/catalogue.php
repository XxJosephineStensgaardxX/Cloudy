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
    <title>Catalogue</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="./style/style_lang.css">
    <link rel="stylesheet" href="style/style_catalogue.css">

    <script src="./js/index.js" defer></script>
</head>

<body>
    <?php echo header_template($language, $lang) ?>
    <section class="space">
        <div class="container">
            <div class="striped_socks">
                <div class="striped_box">
                    <div class="striped_pink_sock">
                        <img src="img/catalogus_sokken_stripes_pink.png" alt="striped_pink_socks">
                    </div>
                    <div class="striped_red_sock">
                        <img src="img/catalogus_sokken_stripes_red.png" alt="striped_red_socks">
                    </div>
                    <div class="striped_green_sock">
                        <img src="img/catalogus_sokken_stripes_green.png" alt="striped_green_socks">
                    </div>
                    <div class="striped_yellow_sock">
                        <img src="img/catalogus_sokken_stripes_yellow.png" alt="striped_yellow_socks">
                    </div>
                    <div class="striped_blue_sock">
                        <img src="img/catalogus_sokken_stripes_blue.png" alt="striped_blue_socks">
                    </div>
                </div>
                <button class="button">
                    <a href="productPageStriped.php">
                        <?php
                        echo $language["BUY"][$lang]
                        ?>
                    </a>
                </button>
            </div>
            <div class="uni_socks">
                <div class="uni_box">
                    <div class="uni_pink_sock">
                        <img src="img/catalogus_sokken_uni_pink.png" alt="uni_pink_socks">
                    </div>
                    <div class="uni_yellow_sock">
                        <img src="img/catalogus_sokken_uni_yellow.png" alt="uni_yellow_socks">
                    </div>
                    <div class="uni_red_sock">
                        <img src="img/catalogus_sokken_uni_red.png" alt="uni_red_socks">
                    </div>
                    <div class="uni_green_sock">
                        <img src="img/catalogus_sokken_uni_green.png" alt="uni_green_socks">
                    </div>
                    <div class="uni_blue_sock">
                        <img src="img/catalogus_sokken_uni_blue.png" alt="uni_blue_socks">
                    </div>




                </div>
                <button class="button">
                    <a href="productPageUniColor.php">
                        <?php
                        echo $language["BUY"][$lang]
                        ?>
                    </a>
                </button>
            </div>
        </div>
    </section>
    <?php echo footer_temple($language, $lang) ?>
</body>

</html>