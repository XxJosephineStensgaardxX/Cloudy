<?php require_once 'templates.php' ?>
<?php require_once 'language.php' ?>
<?php
init();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sunny socks Main page</title>
    <link rel="stylesheet" href="./style/style.css">
    <link rel="stylesheet" href="./style/style_mainpage.css">
    <link rel="stylesheet" href="./style/slider.css">

    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" defer></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js" defer></script>

    <script src="./js/index.js" defer></script>
</head>

<body>
    <?php echo header_template($language, $lang) ?>
    <main class="main">
        <section class="slider">
            <div class="container">
                <div class="slider__inner">
                    <div class="slider__item">
                        <img class="slider__item-image" src=".\img\socksPhotos\Sunny_socks_green.jpg" alt="Image 1">
                    </div>
                    <div class="slider__item">
                        <img class="slider__item-image" src=".\img\Soocks shoes.png" alt="Image 2">
                    </div>
                    <div class="slider__item">
                        <img class="slider__item-image" src=".\img\socksPhotos\Sunny_socks_red.jpg" alt="Image 3">
                    </div>
                </div>
            </div>
        </section>
        <section class="navigator">
            <div class="container">
                <div class="navigator__inner">
                    <a href="#choose"><img src="./img/arrow_down.svg" alt="GO!!"></a>
                </div>
            </div>
        </section>
        <!-- Deri: This piece of code belongs to me. -->
        <section class="main__international-concept">

            <h1 class=" main__news">
                <?php
                echo $language["NEWS"][$lang]
                    ?>
            </h1>

            <h3 class=" main__international-now">
                <?php
                echo $language["WE ARE NOW INTERNATIONAL"][$lang]
                    ?>
            </h3>
            </div>

            <img src=".\img\worldSVG.svg" alt="The world" class="main__world-map">
        </section>
        <!--Timofei: This is my version of Choose style socks-->
        <section id="choose" class="main__choose-style">
            <h1 class="main__head-text">
                <?php
                echo $language["CHOOSE YOUR STYLE"][$lang]
                    ?>
            </h1>
            <div class="main__sock-types-display">
                <div class="main__sock-display">
                    <h3>UNI</h3>
                    <img class="main__sock-photo" id="sockImageUni" src=".\img\socksPhotos\Sunny_socks_uni_blue.jpg"
                        alt="unicolor socks">
                    <form action="productPage.php" method="POST">
                        <div class="form__container">
                            <div class="form__colors">
                                <!--Timofei: It is supposed to be input radio but I don't know how to change the color of radio bubble -->
                                <label for="color-blue"
                                    class="form__colores-uni form__colors-size form__color-blue active__choose-style"
                                    onclick="changeImage('sockImageUni', './img/socksPhotos/Sunny_socks_uni_blue.jpg', '.form__colores-uni', this)"></label>
                                <input type="radio" name="colors" id="color-blue" value="blue"
                                    class="form__remove-radio-button" checked>

                                <label for="color-green" class="form__colores-uni form__colors-size form__color-green"
                                    onclick="changeImage('sockImageUni', './img/socksPhotos/Sunny_socks_uni_green.jpg', '.form__colores-uni', this)"></label>
                                <input type="radio" name="colors" id="color-green" value="green"
                                    class="form__remove-radio-button">

                                <label for="color-pink" class="form__colores-uni form__colors-size form__color-pink"
                                    onclick="changeImage('sockImageUni', './img/socksPhotos/Sunny_socks_uni_pink.jpg', '.form__colores-uni', this)"></label>
                                <input type="radio" name="colors" id="color-pink" value="pink"
                                    class="form__remove-radio-button">

                                <label for="color-red" class="form__colores-uni form__colors-size form__color-red"
                                    onclick="changeImage('sockImageUni', './img/socksPhotos/Sunny_socks_uni_red.jpg', '.form__colores-uni', this)"></label>
                                <input type="radio" name="colors" id="color-red" value="red"
                                    class="form__remove-radio-button">

                                <label for="color-yellow" class="form__colores-uni form__colors-size form__color-yellow"
                                    onclick="changeImage('sockImageUni', './img/socksPhotos/Sunny_socks_uni_yellow.jpg', '.form__colores-uni', this)"></label>
                                <input type="radio" name="colors" id="color-yellow" value="yellow"
                                    class="form__remove-radio-button">

                            </div>
                            <input class="form__buy-button" type="submit" value="<?php echo $language["BUY"][$lang] ?>">
                        </div>
                    </form>
                </div>
                <div class="main__sock-display" method="POST">
                    <h3>STRIPED</h3>
                    <img class="main__sock-photo" id="sockImageStr" src=".\img\socksPhotos\Sunny_socks_blue.jpg"
                        alt="unicolor socks">
                    <form action="productPage.php">
                        <div class="form__container">
                            <div class="form__colors">
                                <!--Timofei: It is supposed to be input radio but I don't know how to change the color of radio bubble -->
                                <label for="color-blue"
                                    class="form__colores-striped form__colors-size form__color-blue active__choose-style"
                                    onclick="changeImage('sockImageStr', './img/socksPhotos/Sunny_socks_blue.jpg', '.form__colores-striped', this)"></label>
                                <input type="radio" name="colors" id="color-blue" value="blue"
                                    class="form__remove-radio-button">


                                <label for="color-green"
                                    class="form__colores-striped form__colors-size form__color-green"
                                    onclick="changeImage('sockImageStr', './img/socksPhotos/Sunny_socks_green.jpg', '.form__colores-striped', this)"></label>
                                <input type="radio" name="colors" id="color-green" value="green"
                                    class="form__remove-radio-button">

                                <label for="color-pink" class="form__colores-striped form__colors-size form__color-pink"
                                    onclick="changeImage('sockImageStr', './img/socksPhotos/Sunny_socks_pink_01.jpg', '.form__colores-striped', this)"></label>
                                <input type="radio" name="colors" id="color-pink" value="pink"
                                    class="form__remove-radio-button">

                                <label for="color-red" class="form__colores-striped form__colors-size form__color-red"
                                    onclick="changeImage('sockImageStr', './img/socksPhotos/Sunny_socks_red.jpg', '.form__colores-striped', this)"></label>
                                <input type="radio" name="colors" id="color-red" value="red"
                                    class="form__remove-radio-button">

                                <label for="color-yellow"
                                    class="form__colores-striped form__colors-size form__color-yellow"
                                    onclick="changeImage('sockImageStr', './img/socksPhotos/Sunny_socks_yellow.jpg', '.form__colores-striped', this)"></label>
                                <input type="radio" name="colors" id="color-yellow" value="yellow"
                                    class="form__remove-radio-button">

                            </div>
                            <input class="form__buy-button" type="submit" value="<?php echo $language["BUY"][$lang] ?>">
                        </div>
                    </form>
                </div>

            </div>
        </section>
        <section class="main__about-us" id="aboutUs">
            <!--Timofei: This is my part of main page. this is "about us" page that will talk about the company-->
            <div class="main__about-us-info">
                <h1 class="main__head-text">
                    <?php
                    echo $language["ABOUT US"][$lang]
                        ?>
                </h1>
                <p>
                    <?php
                    echo $language["We like..."][$lang]
                        ?>
                </p>

            </div>
            <div class="main__our-vision">
                <u>
                    <h3>
                        <?php
                        echo $language["OUR VISION"][$lang]
                            ?>
                    </h3>
                </u>
                <p>
                    <?php
                    echo $language["Positivity is..."][$lang]
                        ?>
                </p>
            </div>
        </section>
        <section>
            <div class="textCenterGoBack">
                <p><button class="goBackLink" onclick="window.scrollTo(0,0)">GO BACK</button>
            </div>
        </section>
    </main>
    <?php echo footer_temple() ?>
</body>

</html>