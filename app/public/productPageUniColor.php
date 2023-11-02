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
    <title>Product Page</title>
    <link rel="stylesheet" href="./style/style.css">
    <link rel="stylesheet" href="./style/style_lang.css">
    <link rel="stylesheet" href="./style/productPage.css">
    <script src="./js/index.js" defer></script>

    <?php
    $images = array(
        "./img/socksPhotos/Sunny_socks_uni_blue.jpg" => "BLUE",
        "./img/socksPhotos/Sunny_socks_uni_green.jpg" => "GREEN",
        "./img/socksPhotos/Sunny_socks_uni_pink.jpg" => "PINK",
        "./img/socksPhotos/Sunny_socks_uni_red.jpg" => "RED",
        "./img/socksPhotos/Sunny_socks_uni_yellow.jpg" => "YELLOW",
    );

    $errorFlag = FALSE;
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $sizeSock = filter_input(INPUT_POST, "size");
        if (empty($sizeSock)) {
            $sizeSock = filter_input(INPUT_POST, "sizes-in-dropdown");
        }
    }

    $image = filter_input(INPUT_POST, "selected_image");
    $amount = filter_input(INPUT_POST, "amount-picker");
    $type = filter_input(INPUT_POST, "type");


    if (empty($image)) {
        $errorFlag = TRUE;
    }

    if (empty($amount)) {
        $errorFlag = TRUE;
    }

    if (empty($type)) {
        $errorFlag = TRUE;
    }

    if ($amount < 0) {
        $amount = 0;
    }


    if (!$errorFlag) {

        $color = $images[$image];
        $newOrder = array(
            "size" => $sizeSock,
            "amount" => $amount,
            "color" => $color,
            "type" => $type,
        );


        $orderExist = FALSE;
        for ($i = 0; $i < count($_SESSION["CART"]); $i++) {

            if ($_SESSION["CART"][$i]["size"] == $newOrder["size"] && $_SESSION["CART"][$i]["color"] == $newOrder["color"]) {

                $_SESSION["CART"][$i]["amount"] += $newOrder["amount"];
                $orderExist = TRUE;
                break;
            }
        }

        if (!$orderExist) {
            array_push($_SESSION["CART"], $newOrder);
        }

    }

    ?>
</head>

<body>
    <?php echo header_template($language, $lang) ?>

    <main>
        <form id="form" method="post" action="productPageUniColor.php">
            <div class="maincontainer-flex container">
                <div class="container-layout">
                    <img class="chosenPicture" src="./img/socksPhotos/Sunny_socks_uni_blue.jpg" alt="Selected Image">
                    <div class="othersocks-flex">
                        <?php


                        foreach (array_keys($images) as $i => $image) {
                            echo
                                "
                            <input type='radio' name='selected_image' value='$image' id='$image'  onclick=\"changeImageProductPage(this, '" . (array_values($images)[$i]) . "')\">
                            <label for='$image' style='display: " . ($i === 0 ? 'none' : 'block') . "'>
                                <img class='othersock-item' src='$image' alt='Classic sock'>
                            </label>
                            ";
                        }
                        ?>
                    </div>
                </div>
                <div class="information-container-flex">
                    <h3 class="font-bold product-name-header">

                        <?php
                        echo " CLASSIC UNI SOCK - BLUE";
                        ?>

                    </h3>
                    <div class="container-sizes-flex border-container">

                        <?php $sizes = [
                            "25-31",
                            "32-36",
                            "36-40",
                            "40-45",
                            "45-47",
                            "47+",
                        ];

                        //VALIDATION FOR SIZES//
                        $sizeError = false;
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            $sizeDesktop = filter_input(INPUT_POST, "size");
                            if (empty($sizeDesktop)) {
                                $sizeError = true;

                            }
                        }

                        foreach ($sizes as $sizeRadio) {
                            $errorClass = $sizeError ? 'error-border' : '';
                            echo "
                        <input type='radio' name='size' id='$sizeRadio' value='$sizeRadio' >
                        <label for='$sizeRadio' class='checked-size $errorClass'><span>$sizeRadio</span></label>
                        ";
                        }
                        ?>

                    </div>
                    <div class="sizes-for-sizes-for-phone border-container">
                        <select name="sizes-in-dropdown" id="sizes-in-dropdown" class="sizes-in-dropdown <?php if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($size)) {
                            echo 'error-text';
                        }
                        ?>"
                            onchange="this.value.length !== '' ? this.classList.remove('error-text') : this.classList.add('error-text')">
                            <option value="" disabled selected>Choose your size</option>
                            <option value="25-31">25-31</option>
                            <option value="32-36">32-36</option>
                            <option value="36-40">36-40</option>
                            <option value="40-45">40-45</option>
                            <option value="47+">47+</option>
                        </select>
                    </div>

                    <div class="color-picker-flex border-container">

                        <?php
                        $colors = [
                            "#1e407a",
                            "#51b2a2",
                            "#e990b9",
                            "#f15b39",
                            "#fecd3e",
                        ];


                        foreach ($colors as $i => $colorRadio) {
                            echo "
                              <input type='radio' name='selected_image' id='$colorRadio' value='" . array_keys($images)[$i] . "' onclick=\"changeImageProductPage(this, '" . (array_values($images)[$i]) . "')\">
                              <label for='$colorRadio' class='button-design $errorClass' style='background-color: $colorRadio;'><span></span></label>";
                        }
                        ?>
                    </div>

                    <div class="border-container">
                        <?php
                        //VALIDATION FOR AMOUNT//
                        $amount = isset($_POST['amount-picker']) ? filter_input(INPUT_POST, "amount-picker") : 1;
                        if ($amount <= 0) {
                            echo '<input type="number" name="amount-picker" id="amount-picker" max="20" class="amount-picker" placeholder="Amount" style="border: 1px solid red;" min="0">'
                            ;
                        } else {
                            echo '<input type="number" name="amount-picker" id="amount-picker" max="20" class="amount-picker" placeholder="Amount" min="0">';
                        }
                        ?>
                    </div>
                    <div class="border-container">
                        <p>
                            <?php
                            echo $language["Made from 100% organic cotton"][$lang];
                            ?>
                            <br>
                            <?php
                            echo $language["Produced in Portugal"][$lang];
                            ?>
                        </p>
                    </div>
                    <div class="border-container">
                        <button id="cart-button" name='type' type="submit" value="uni" onClick="#">Put in cart</button>
                    </div>
                </div>
            </div>
        </form>
    </main>
    <?php echo footer_temple($language, $lang) ?>
</body>

</html>