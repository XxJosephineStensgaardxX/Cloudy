<!DOCTYPE html>
<html lang="en">
<?php require_once 'templates.php' ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sunny socks Main page</title>
    <link rel="stylesheet" href="./style/style.css">
    <link rel="stylesheet" href="./style/style_mainpage.css">

    <!--
        Timofei:  I linked css for silder. There is a chance that it might affect our page just because it uses some css tags.
        if you notice any problems with our code remove this part of code. 
    -->
    <link rel="stylesheet" href="./style/slider.css">

    <script src="./js/slider.js"></script>
</head>

<body>
    <main>
        <section id="slider">
            <input type="radio" name="slider" id="s1" data-slide="1">
            <input type="radio" name="slider" id="s2" data-slide="2"checked>
            <input type="radio" name="slider" id="s3" data-slide="3">
            <label for="s1" id="slide1">
                <div class="zoom-container" data-slide="1">
                    <img src="./img/socksPhotos/Sunny_socks_green.jpg" alt="Image 1">
                </div>
            </label>
            <label for="s2" id="slide2">
                <div class="zoom-container" data-slide="2">
                    <img src="./img/socksPhotos/Sunny_socks_yellow.jpg" alt="Image 2">
                </div>
            </label>
            <label for="s3" id="slide3">
                <div class="zoom-container" data-slide="3">
                    <img src="./img/socksPhotos/Sunny_socks_red.jpg" alt="Image 3">
                </div>
            </label>

        </section>
        <section class="Map">
            <div class="container">
                <div class="map__row map__row1">
                    <h1>NEWS</h1>
                </div>
                <div class="map__row map__row2">
                    <h3>WE ARE NOW INTERNATIONAL</h3>
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
                        <h1 class="choose__size"> CHOOSE YOUR STYLE</h1>
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
                        <button type="button"> BUY</button>
                    </div>
                    <div class="choose__row choose__row5-2">
                        <button type="button"> BUY</button>
                    </div>
                </div>
            </div>
        </section>
        <!--Timofei: This is my version of Choose style socks-->
        <section class="main__choose-style">
            <h1 style="font-size: 50px;">CHOOSE YOUR STYLE</h1>
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
                <h1 style="font-size: 50px;">ABOUT US</h1>
                <p>
                    We like win-win situations. When we produce and sell our socks it is beneficial for everyone
                    involved.
                    The sells person has a nice job. The raw materials are gained in such a way it does not harm the
                    earth. The production is done with the
                    enivironment in mind and with an honest waige for the people working in the factories. The shops
                    that sell our sock make a fair provit. And last but not least: the costumer gets high quality socks
                    for a fair price.
                </p>

            </div>
            <div class="main__our-vision">
                <u>
                    <h3>OUR VISION</h3>
                </u>
                <p>Positivity is part of our DNA. Sunny likes to look on the bright side. Every problem is an
                    oppurtunity to come up with a solution.</p>
            </div>
        </section>
    </main>
    <?php footer() ?>
</body>

</html>