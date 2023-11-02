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
        "./img/socksPhotos/Sunny_Socks_uni_blue.jpg" => "BLUE",
        "./img/socksPhotos/Sunny_socks_uni_green.jpg" => "GREEN",
        "./img/socksPhotos/Sunny_socks_uni_pink.jpg" => "PINK",
        "./img/socksPhotos/Sunny_socks_uni_red.jpg" => "RED",
        "./img/socksPhotos/Sunny_socks_uni_yellow.jpg" => "YELLOW",
    );
    $errorFlag = FALSE;
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $size = filter_input(INPUT_POST, "size");

        if (empty($size)) {
            $size = filter_input(INPUT_POST, "sizes-in-dropdown");

        }
        $image = filter_input(INPUT_POST, "selected_image");
        $amount = filter_input(INPUT_POST, "amount-picker");

        //$sockColor = filter_input(INPUT_POST, "colors-in-text");
    

        // $errorArray = array();
        // if (empty($size)) {
        //     array_push($errorArray, "<p>Please choose size</p>");
        //     $errorFlag = TRUE;
        // }
    
        if (empty($image)) {
            $errorFlag = TRUE;
        }

        if (empty($amount)) {
            $errorFlag = TRUE;
        }

        if ($amount < 0) {
            $amount = 0;
        }


        if (!$errorFlag) {
            $color = $images[$image];
            $newOrder = array(
                "size" => $size,
                "amount" => $amount,
                "color" => $color,
            );
            var_dump($size);

            $orderExist = FALSE;
            for ($i = 0; $i < count($_SESSION["CART"]); $i++) {

                if ($_SESSION["CART"][$i]["size"] == $newOrder["size"] && $_SESSION["CART"][$i]["color"] == $newOrder["color"]) {

                    echo $newOrder["amount"];
                    $_SESSION["CART"][$i]["amount"] += $newOrder["amount"];
                    $orderExist = TRUE;
                    break;
                }
            }

            if (!$orderExist) {
                array_push($_SESSION["CART"], $newOrder);
            }

            // var_dump($_SESSION["CART"]);
    
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
                    <img class="chosenPicture" src="./img/socksPhotos/Sunny_Socks_uni_blue.jpg" alt="Selected Image">
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
                        echo "UNI SOCK - BLUE";
                        ?>

                    </h3>
                    <?php
                    // if ($errorFlag) {
                    //     foreach ($errorArray as $errors) {
                    //         echo $errors;
                    //     }
                    // }
                    ?>
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

                        foreach ($sizes as $sizeRadioMobile) {
                            $errorClass = $sizeError ? 'error-border' : '';
                            echo "
                        <input type='radio' name='size' id='$sizeRadioMobile' value='$sizeRadioMobile' >
                        <label for='$sizeRadioMobile' class='checked-size $errorClass'><span>$sizeRadioMobile</span></label>
                        ";
                        }
                        ?>

                    </div>
                    <div class="sizes-for-sizes-for-phone border-container">
                        <select name="sizes-in-dropdown" id="sizes-in-dropdown" class="sizes-in-dropdown <?php if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($size)) {
                            echo 'error-text';
                        }
                        ?>">
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


                        foreach ($colors as $i => $color) {
                            echo "
                              <input type='radio' name='selected_image' id='$color' value='" . array_keys($images)[$i] . "' onclick=\"changeImageProductPage(this, '" . (array_values($images)[$i]) . "')\">
                              <label for='$color' class='button-design' style='background-color: $color;'><span></span></label>";
                        }

                        ?>
                    </div>

                    <div class="color-text-menu-for-phone border-container">
                        <select name="selected_image" id="colors-in-text" class="color-dropdown-menu <?php if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($sockColor)) {
                            echo 'error-text';
                        } ?>" onclick="changeImageProductPage(this, '<?php array_values($images)[$i] ?>')">
                            <option value="" disabled selected>Choose a color</option>
                            <option value="./img/socksPhotos/Sunny_socks_uni_green.jpg">Green</option>
                            <option value="./img/socksPhotos/Sunny_socks_uni_blue.jpg">Blue</option>
                            <option value="./img/socksPhotos/Sunny_socks_uni_pink.jpg">Pink</option>
                            <option value="./img/socksPhotos/Sunny_socks_uni_red.jpg">Orange</option>
                            <option value="./img/socksPhotos/Sunny_socks_uni_yellow.jpg">Yellow</option>
                        </select>
                    </div>
                    <div class="border-container">
                        <?php
                        //VALIDATION FOR AMOUNT//
                        $amount = isset($_POST['amount-picker']) ? filter_input(INPUT_POST, "amount-picker") : 1;
                        if ($amount <= 0) {
                            echo '<input type="number" name="amount-picker" id="amount-picker" max="20" class="amount-picker" placeholder="Amount" style="border: 1px solid red;" min="0">'
                            ;
                        } else {
                            echo '<input type="number" name="amount-picker" id="amount-picker" max="20" class="amount-picker" placeholder="Amount" min="0">'
                            ;
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
                        <input id="cart-button" type="submit" value="Put in cart" onClick="#"></input>
                    </div>
                </div>
            </div>
        </form>
    </main>
    <?php echo footer_temple() ?>
</body>

</html>