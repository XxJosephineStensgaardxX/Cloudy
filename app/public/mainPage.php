<!DOCTYPE html>
<html lang="en">
<?php require_once 'templates.php' ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sunny socks Main page</title>
    <link rel="stylesheet" href="./style/style.css">
    <link rel="stylesheet" href="./style/style_mainpage.css">
</head>

<body>

    <head>

    </head>
    <main>
        <!--Timofei: This is coments if you want to write important information please write it here(just if you dont know about this).-->
        <!--
            Message for Victor: Right now I(Timofei) am just trying to recreate my part of the desing 
            and I am not working on the outline of the design specifically for that reason.
            I know that it might couse some problems in the future, but we need to work on overall outline in team.  
        -->
        <section>
            <!--Timofei: This is slider we decided that we will work on it later-->

        </section>
        <section>
            <!-- This part is gonna be the map part of the main page-->
        </section>
        <section class="choose">
            <div class="container">

                <!--Deri: This is my piece of code. It's not totally done yet.-->
                <div class="choose__wrapper">
                    <div class="choose__row choose__row1">
                        <h1 class="choose__size"> CHOOSE YOUR STYLE</h1>
                    </div>
                    <div class="choose__row choose__row2-1">UNI</div>
                    <div class="choose__row choose__row2-2">STRIPED </div>
                    <div class="choose__row choose__row3-1">
                        <img src=".\img\socksPhotos\Sunny_socks_uni_blue.jpg" alt="Unicolor socks"
                            class="main__unicolor-socks">
                    </div>
                    <div class="choose__row choose__row3-2">
                        <img src=".\img\socksPhotos\Sunny_socks_blue.jpg" alt="stripped socks"
                            class="main__stripped-socks">
                    </div>
                    <div class="choose__row choose__row4-1">
                         
                    </div>
                    <div class="choose__row choose__row4-2">Item 7</div>
                    <div class="choose__row choose__row5-1">Item 8</div>
                    <div class="choose__row choose__row5-2">Item 9 </div>
                </div>
            </div>
        </section>
        <!--Timofei: This is my version of Choose style socks-->
        <section class="main__choose-style">
            <h1 style="font-size: 50px;">CHOOSE YOUR STYLE</h1>
            <div class="main__sock-types-display">
                <div class="main__sock-display">
                    <h3>UNI</h3>
                    <img class="main__sock-photo" src=".\img\socksPhotos\Sunny_socks_uni_blue.jpg"
                        alt="Blue unicolor socks">
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
                <div class="main__sock-display">
                    <h3>STRIPED</h3>
                    <img class="main__sock-photo" src=".\img\socksPhotos\Sunny_socks_blue.jpg"
                        alt="Blue unicolor socks">
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