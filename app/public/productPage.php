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
    <title>Product Page</title>
    <link rel="stylesheet" href="./style/style.css">
    <link rel="stylesheet" href="./style/style_lang.css">
    <link rel="stylesheet" href="./style/productPage.css">
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
    <main>
        <form id="form" method="post" action="#">
            <div class="maincontainer-flex container">
                <div class="container-layout">
                    <div>
                        <img class="chosenPicture" <?php isset($_POST['selected_image']) ? $selected_image = $_POST['selected_image'] : $selected_image = './img/socksPhotos/Sunny_socks_uni_red.jpg'; ?>
                            src="<?php echo $selected_image; ?>" alt="Selected Image">
                    </div>
                    <div class="othersocks-flex">

                        <?php
                        $images = array(
                            "./img/socksPhotos/Sunny_socks_uni_pink.jpg",
                            "./img/socksPhotos/Sunny_socks_uni_yellow.jpg",
                            "./img/socksPhotos/Sunny_socks_uni_green.jpg",
                            "./img/socksPhotos/Sunny_socks_uni_blue.jpg",
                        );

                        if ($index = array_search($selected_image, $images)) {
                            $images[$index] = './img/socksPhotos/Sunny_socks_uni_red.jpg';
                        }

                        foreach ($images as $image) {
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
                            echo $language["CLASSIC UNI SOCK - ORANGE"][$lang];
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

                        // $selected_color = isset($_POST['colors']) ? $_POST['colors'] : "#fecd3e"; // Default color
                        // if ($indexColor = array_search($selected_color, $colors)) {
                        //     $colors[$indexColor] = './img/socksPhotos/Sunny_socks_uni_red.jpg';
                        // }
                        // $selected_color = $colors['indexColor'];
                        
                        // var_dump($selected_color);
                        
                        // if ($selected_color === "#fecd3e") {
                        //     $colors[$indexColorPicker] = './img/socksPhotos/Sunny_socks_uni_red.jpg';
                        // } elseif ($selected_color === "#1e407a") {
                        //     $selected_image = "./img/socksPhotos/Sunny_socks_uni_pink.jpg";
                        // } elseif ($selected_color === "#51b2a2") {
                        //     $selected_image = "./img/socksPhotos/Sunny_socks_uni_yellow.jpg";
                        // } elseif ($selected_color === "#e990b9") {
                        //     $chosenImageURL = "./img/socksPhotos/Sunny_socks_uni_green.jpg";
                        // } elseif ($selected_color === "#f15b39") {
                        //     $selected_image = "./img/socksPhotos/Sunny_socks_uni_blue.jpg";
                        // }
                        
                        foreach ($colors as $color) {
                            echo "
                              <input type='radio' name='color' id='$color'>
                              <label for='$color' class='button-design' style='background-color: $color;' onClick='this.form.submit()'><span></span></label>";
                        }
                        ?>
                    </div>

                    <div class="color-text-menu-for-phone border-container">
                        <select name="colors-in-text" id="colors-in-text" class="color-dropdown-menu">
                            <option value="" disabled selected>Choose a color</option>
                            <option value="Green">Green</option>
                            <option value="Blue">Blue</option>
                            <option value="Pink">Pink</option>
                            <option value="orange">Orange</option>
                            <option value="Yellow">Yellow</option>
                        </select>
                    </div>
                    <div class="border-container">
                        <input type="number" name="amount-picker" id="amount-picker" max="20" class="amount-picker"
                            placeholder="Amount">
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