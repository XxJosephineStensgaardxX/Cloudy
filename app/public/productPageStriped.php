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
</head>

<body>
    <?php echo header_template($language, $lang) ?>
    <?php
    $images = array(
        "./img/socksPhotos/Sunny_socks_blue.jpg" => "BLUE",
        "./img/socksPhotos/Sunny_socks_green.jpg" => "GREEN",
        "./img/socksPhotos/Sunny_socks_pink_01.jpg" => "PINK",
        "./img/socksPhotos/Sunny_socks_red.jpg" => "RED",
        "./img/socksPhotos/Sunny_socks_yellow.jpg" => "YELLOW",
    );
    ?>
    <main>
        <form id="form" method="post" action="#">
            <div class="maincontainer-flex container">
                <div class="container-layout">
                    <div>
                        <img class="chosenPicture" <?php
                        isset($_POST['selected_image']) ?
                            $selected_image = $_POST['selected_image'] :
                            $selected_image = './img/socksPhotos/Sunny_socks_red.jpg';
                        ?> src="<?php echo $selected_image; ?>" alt="Selected Image">
                    </div>
                    <div class="othersocks-flex">

                        <?php
                        $images_carousel = array(
                            "./img/socksPhotos/Sunny_socks_pink_01.jpg",
                            "./img/socksPhotos/Sunny_socks_yellow.jpg",
                            "./img/socksPhotos/Sunny_socks_green.jpg",
                            "./img/socksPhotos/Sunny_socks_blue.jpg",
                        );

                        if ($index = array_search($selected_image, $images_carousel)) {
                            $images_carousel[$index] = './img/socksPhotos/Sunny_socks_red.jpg';
                        }

                        foreach ($images_carousel as $image) {
                            echo "<div>
                                <input type='radio' name='selected_image' value='$image' id='$image' onclick='this.form.submit()'>
                                <label for='$image'>
                                    <img class='othersock-item' src='$image' alt='Classic sock'>
                                </label>
                            </div>";
                        }
                        ?>
                    </div>
                </div>
                <div class="information-container-flex">
                    <h3 class="font-bold product-name-header">
                        <b>
                            <?php
                            echo $language["STRIPED SOCK - "][$lang] . $images[$selected_image];
                            ?>
                        </b>
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

                        foreach ($sizes as $size) {
                            echo "
                        <input type='radio' name='size' id='$size'>
                        <label for='$size' class='checked-size'><span>$size</span></label>
                        ";
                        }
                        ?>
                    </div>
                    <div class="sizes-for-sizes-for-phone border-container">
                        <select name="sizes-in-dropdown" id="sizes-in-dropdown" class="sizes-in-dropdown">
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
                              <input type='radio' name='selected_image' id='$color' value='" . array_keys($images)[$i] . "' onclick='this.form.submit()'>
                              <label for='$color' class='button-design' style='background-color: $color;'><span></span></label>";
                        }
                        ?>
                    </div>

                    <div class="color-text-menu-for-phone border-container">
                        <select name="selected_image" id="colors-in-text" class="color-dropdown-menu"
                            onchange='this.form.submit()'>
                            <option value="" disabled selected>Choose a color</option>
                            <option value="./img/socksPhotos/Sunny_socks_green.jpg">Green</option>
                            <option value="./img/socksPhotos/Sunny_socks_blue.jpg">Blue</option>
                            <option value="./img/socksPhotos/Sunny_socks_pink_01.jpg">Pink</option>
                            <option value="./img/socksPhotos/Sunny_socks_red.jpg">Orange</option>
                            <option value="./img/socksPhotos/Sunny_socks_yellow.jpg">Yellow</option>
                        </select>
                    </div>
                    <div class="border-container">
                        <input type="number" name="amount-picker" id="amount-picker" max="20" min="0"
                            class="amount-picker" placeholder="Amount">
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