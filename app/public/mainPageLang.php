<!DOCTYPE html>
<html lang="en">
<?php require_once 'templates.php' ?>
<?php require_once 'language.php' ?>



<!--This is a test example of change language -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sunny socks Main page</title>
    <link rel="stylesheet" href="./style/styleLang.css">
    <link rel="stylesheet" href="./style/style_mainpage.css">
    <link rel="stylesheet" href="./style/slider.css">

    <script src="./js/slider.js"></script>
    <?php
        $lang = "EN";
        
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $lang = filter_input(INPUT_POST, "submit");
            echo "Language: ".$lang;
        }   
    ?>   
</head>

<body>
    <header class="header">
        <div class="container">
            <div class="header__inner">
                <a href="mainPage.php" class="socksLogo">
                    <img class="header__image-logo" src="./img\Sunny\Logo's\png\sunny_logos_slogan_blue.png" alt="socksLogo">
                </a>
                <ul class="header__list">
                    <li class="header__list-item">
                        <a href="catalogue.php">
                            <?php
                                echo $language["Catalogue"][$lang]
                            ?>
                        </a>
                    </li>
                    <li class="header__list-item">
                        <a href="">
                            <?php
                                echo $language["About us"][$lang]
                            ?>
                        </a>
                    </li>
                    <li class="header__list-item">
                        <a href="contact_page.php">
                            <?php
                                echo $language["Contact us"][$lang]
                            ?>
                        </a>
                    </li>
                    <form class="header__form" action="mainPageLang.php" method="POST">
                        <label for="submitButtonEN">
                            <img class="header__image header__image-flag" src=".\img\englishflag.png" alt="ENFlag">
                        </label>
                        <input class="header__submit-lang" type="submit" id="submitButtonEN"  name="submit" value="EN">


                        <label for="submitButtonNL">
                            <img class="header__image header__image-flag" src=".\img\vlag-nederland.png" alt="NLFlag">
                        </label>
                        <input class="header__submit-lang" type="submit" id="submitButtonNL" name="submit" value="NL">
                    </form>

                    <li class="header__list-item">
                        <a href="checkoutPage.php"><img class="header__image" src="./img\Shopcart.jpg" alt="ShopCard"></a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </header> 
    <main>
        <section id="slider">
                
            <input type="radio" name="slider" id="s1" data-slide="1" checked>
            <input type="radio" name="slider" id="s2" data-slide="2">
            <input type="radio" name="slider" id="s3" data-slide="3">
            <label for="s1" id="slide1">
                <div class="zoom-container" data-slide="1">
                    <img class="main__slider-image"  src=".\img\socksPhotos\Sunny_socks_green.jpg" alt="Image 1">
                </div>
            </label>
            <label for="s2" id="slide2">
                <div class="zoom-container" data-slide="2">
                    <img class="main__slider-image" src=".\img\Soocks shoes.png" alt="Image 2">
                </div>
            </label>
            <label for="s3" id="slide3">
                <div class="zoom-container" data-slide="3">
                    <img class="main__slider-image"  src=".\img\socksPhotos\Sunny_socks_red.jpg" alt="Image 3">
                </div>
            </label>

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
        <section class="choose">
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
                        <button type="button"> 
                            <?php
                                echo $language["BUY"][$lang]
                            ?>
                        </button>
                    </div>
                    <div class="choose__row choose__row5-2">
                        <button type="button">                             
                            <?php
                                echo $language["BUY"][$lang]
                            ?></button>
                    </div>
                </div>
            </div>
        </section>
        <!--Timofei: This is my version of Choose style socks-->
        <section class="main__choose-style">
            <h1 style="font-size: 50px;">
                <?php
                    echo $language["CHOOSE YOUR STYLE"][$lang]
                ?>
            </h1>
            <div class="main__sock-types-display">
                <div class="main__sock-display">
                    <h3>UNI</h3>
                    <img class="main__sock-photo" src=".\img\socksPhotos\Sunny_socks_uni_blue.jpg" alt="Blue unicolor socks">
                    <form action="productPage.php">
                        <div class="form__container">
                            <div class="form__colors">
                                <!--Timofei: It is supposed to be input radio but I don't know how to change the color of radio bubble -->
                                <div class="form__colors-size form__color-blue"></div>
                                <div class="form__colors-size form__color-green"></div>
                                <div class="form__colors-size form__color-pink"></div>
                                <div class="form__colors-size form__color-red"></div>
                                <div class="form__colors-size form__color-yellow"></div>
                            </div>
                            <input class="form__buy-button" type="submit" value="BUY">
                        </div>
                    </form>
                </div>
                <div class="main__sock-display">
                    <h3>STRIPED</h3>
                    <img class="main__sock-photo" src=".\img\socksPhotos\Sunny_socks_blue.jpg" alt="Blue unicolor socks">
                    <form action="productPage.html">
                        <div class="form__container">
                            <div class="form__colors">
                                <!--Timofei: It is supposed to be input radio but I don't know how to change the color of radio bubble -->
                                <div class="form__colors-size form__color-blue"></div>
                                <div class="form__colors-size form__color-green"></div>
                                <div class="form__colors-size form__color-pink"></div>
                                <div class="form__colors-size form__color-red"></div>
                                <div class="form__colors-size form__color-yellow"></div>
                            </div>
                            <input class="form__buy-button" type="submit" value="BUY">
                        </div>
                    </form>
                </div>

            </div>
        </section>
        <section class="main__about-us">
            <!--Timofei: This is my part of main page. this is "about us" page that will talk about the company-->
            <div class="main__about-us-info">
                <h1 style="font-size: 50px;">
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