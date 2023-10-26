<!DOCTYPE html>
<html lang="en">
<?php require_once 'templates.php' ?>
<?php require_once 'language.php' ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sunny socks Main page</title>
    <link rel="stylesheet" href="./style/style.css">
    <link rel="stylesheet" href="./style/style_mainpage.css">
    <?php
    $lang = "EN";

    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $lang = filter_input(INPUT_GET, "submit");
        if ($lang == "") {
            $lang = "EN";
        }
    }
    ?>
    <!--
        Timofei:  I linked css for silder. There is a chance that it might affect our page just because it uses some css tags.
        if you notice any problems with our code remove this part of code. 
    -->
    <link rel="stylesheet" href="./style/slider.css">

    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer" defer></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js" defer></script>
    <script src="./js/slider.js" defer></script>
    <script src="./js/changeImage.js" defer></script>

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
        <section class="Map">
            <div class="container">
                <div class="map__row map__row1">
                    <h1>
                        <?php
                        echo $language["NEWS"][$lang]
                        ?>
                    </h1>
                </div>
                <div class="map__row map__row2">
                    <h3>
                        <?php
                        echo $language["WE ARE NOW INTERNATIONAL"][$lang]
                        ?>
                    </h3>
                </div>
                <div class="map__row map__row3">
                    <img src=".\img\worldSVG.svg" alt="The world" class="world-map">
                </div>
            </div>
        </section>
        <section id="choose" class="choose">
            <div class="container">

                <!--Deri: This is my piece of code. I only need to work on very detailed items if there are some comments on it.-->
                <div class="choose__wrapper">
                    <div class="choose__row choose__row1">
                        <h1 class="choose__size">
                            <?php
                            echo $language["CHOOSE YOUR STYLE"][$lang]
                            ?>
                        </h1>
                    </div>
                    <div class="choose__row choose__row2-1">UNI</div>
                    <div class="choose__row choose__row2-2">STRIPED </div>
                    <div class="choose__row choose__row3-1">
                        <img src=".\img\socksPhotos\Sunny_socks_uni_blue.jpg" alt="Unicolor socks" class="main__unicolor-socks">
                    </div>
                    <div class="choose__row choose__row3-2">
                        <img src=".\img\socksPhotos\Sunny_socks_blue.jpg" alt="stripped socks" class="main__stripped-socks">
                    </div>
                    <div class="choose__row choose__row4-1">
                        <?php
                        $colors = array("#1e407a", "#51b2a2", "#e990b9", "#f15b39", "#fecd3e");
                        foreach ($colors as $color) {
                            echo '<div class="circle" style="background-color: ' . $color . ';"></div>';
                        }
                        ?>
                    </div>
                    <div class="choose__row choose__row4-2">
                        <?php
                        $colors = array("#1e407a", "#51b2a2", "#e990b9", "#f15b39", "#fecd3e");
                        foreach ($colors as $color) {
                            echo '<div class="circle" style="background-color: ' . $color . ';"></div>';
                        }
                        ?>
                    </div>
                    <div class="choose__row choose__row5-1">
                        <button type="button"> <?php echo $language["BUY"][$lang] ?></button>
                    </div>
                    <div class="choose__row choose__row5-2">
                        <button type="button"> <?php echo $language["BUY"][$lang] ?> </button>
                    </div>
                </div>
            </div>
        </section>
        <!--Timofei: This is my version of Choose style socks-->
        <section class="main__choose-style">
            <h1 class="main__head-text">
                <?php
                echo $language["CHOOSE YOUR STYLE"][$lang]
                ?>
            </h1>
            <div class="main__sock-types-display">
                <div class="main__sock-display">
                    <h3>UNI</h3>
                    <img class="main__sock-photo" id="sockImageUni" src=".\img\socksPhotos\Sunny_socks_uni_blue.jpg" alt="unicolor socks">
                    <form action="productPage.php">
                        <div class="form__container">
                            <div class="form__colors">
                                <!--Timofei: It is supposed to be input radio but I don't know how to change the color of radio bubble -->
                                <div class="form__colores-uni form__colors-size form__color-blue active__choose-style" onclick="changeImage('sockImageUni', './img/socksPhotos/Sunny_socks_uni_blue.jpg', '.form__colores-uni', this)"></div>
                                <div class="form__colores-uni form__colors-size form__color-green" onclick="changeImage('sockImageUni', './img/socksPhotos/Sunny_socks_uni_green.jpg', '.form__colores-uni', this)"></div>
                                <div class="form__colores-uni form__colors-size form__color-pink" onclick="changeImage('sockImageUni', './img/socksPhotos/Sunny_socks_uni_pink.jpg', '.form__colores-uni', this)"></div>
                                <div class="form__colores-uni form__colors-size form__color-red" onclick="changeImage('sockImageUni', './img/socksPhotos/Sunny_socks_uni_red.jpg', '.form__colores-uni', this)"></div>
                                <div class="form__colores-uni form__colors-size form__color-yellow" onclick="changeImage('sockImageUni', './img/socksPhotos/Sunny_socks_uni_yellow.jpg', '.form__colores-uni', this)"></div>
                            </div>
                            <input class="form__buy-button" type="submit" value="<?php echo $language["BUY"][$lang] ?>">
                        </div>
                    </form>
                </div>
                <div class="main__sock-display">
                    <h3>STRIPED</h3>
                    <img class="main__sock-photo" id="sockImageStr" src=".\img\socksPhotos\Sunny_socks_blue.jpg" alt="unicolor socks">
                    <form action="productPage.php">
                        <div class="form__container">
                            <div class="form__colors">
                                <!--Timofei: It is supposed to be input radio but I don't know how to change the color of radio bubble -->
                                <div class="form__colores-striped form__colors-size form__color-blue active__choose-style" onclick="changeImage('sockImageStr', './img/socksPhotos/Sunny_socks_blue.jpg', '.form__colores-striped', this)"></div>
                                <div class="form__colores-striped form__colors-size form__color-green" onclick="changeImage('sockImageStr', './img/socksPhotos/Sunny_socks_green.jpg', '.form__colores-striped', this)"></div>
                                <div class="form__colores-striped form__colors-size form__color-pink" onclick="changeImage('sockImageStr', './img/socksPhotos/Sunny_socks_pink_01.jpg', '.form__colores-striped', this)"></div>
                                <div class="form__colores-striped form__colors-size form__color-red" onclick="changeImage('sockImageStr', './img/socksPhotos/Sunny_socks_red.jpg', '.form__colores-striped', this)"></div>
                                <div class="form__colores-striped form__colors-size form__color-yellow" onclick="changeImage('sockImageStr', './img/socksPhotos/Sunny_socks_yellow.jpg', '.form__colores-striped', this)"></div>
                            </div>
                            <input class="form__buy-button" type="submit" value="<?php echo $language["BUY"][$lang] ?>">
                        </div>
                    </form>
                </div>

            </div>
        </section>
        <section class="main__about-us">
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
    </main>
    <?php echo footer_temple() ?>
</body>

</html>