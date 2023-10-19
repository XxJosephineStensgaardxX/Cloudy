<!DOCTYPE html>
<html lang="en">

<?php require_once 'templates.php' ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Page</title>
    <link rel="stylesheet" href="./style/style.css">
    <link rel="stylesheet" href="./style/productPage.css">
</head>

<body>
    <?php echo header_template() ?>
    <main>
        <form>
            <!-- $_POST['$value']; Not working yet -->
            <div class="maincontainer-flex container">
                <div class="container-layout">
                    <div>
                        <img class="chosenPicture" src="./img/socksPhotos/Sunny_socks_uni_red.jpg"
                            alt="classic orange sock">
                    </div>
                    <div class="othersocks-flex">

                        <?php
                        $images = [
                            "./img/socksPhotos/Sunny_socks_uni_pink.jpg",
                            "./img/socksPhotos/Sunny_socks_uni_yellow.jpg",
                            "./img/socksPhotos/Sunny_socks_uni_green.jpg",
                            "./img/socksPhotos/Sunny_socks_uni_blue.jpg",
                        ];
                        foreach ($images as $image) {
                            echo "<div>
                    <img class='othersock-item' src='$image'
                        alt='Classic pink sock'>  
                    </div>";
                        }
                        ?>
                    </div>
                </div>
                <div class="information-container-flex">
                    <h3 class="font-bold product-name-header"><b>CLASSIC UNI SOCK - ORANGE</b></h3>
                    <div class="container-sizes-flex">

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

                    <div class="color-picker-flex border-container">
                        <?php
                        $colors = [
                            "#1e407a",
                            "#51b2a2",
                            "#e990b9",
                            "#f15b39",
                            "#fecd3e",
                        ];
                        foreach ($colors as $color) {
                            echo "
                              <input type='radio' name='color' id='$color'>
                              <label for='$color' class='button-design' style='background-color: $color;'><span></span></label>";
                        }
                        ?>
                    </div>
                    <div class="border-container">
                        <p>Made from 100% organic cotton <br> Produced in Portugal</p>
                    </div>
                    <div class="border-container">
                        <input id="cart-button" type="submit" value="Put in cart" onclick="#"></input>
                        <!-- <button id="cart-button" type="submit" value="Put in cart" onclick="#"></button> -->
                    </div>
                </div>
            </div>
        </form>
    </main>
    <?php echo footer_temple() ?>
</body>

</html>