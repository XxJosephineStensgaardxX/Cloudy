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
        <section> <!--Timofei: This is slider we decided that we will work on it later-->

        </section>
        <section>
            <!--Timofei: This is your part of main page.-->

        </section>
        <section class="main__choose-style">
            <h1 style="font-size: 50px;">CHOOSE YOUR STYLE</h1>
            <div class="main__sock-types-display">
                <div class="main__sock-display">
                    <h3>UNI</h3>
                    <img class="main__sock-photo" src=".\img\socksPhotos\Sunny_socks_uni_blue.jpg"  alt="Blue unicolor socks">
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
                    <img class="main__sock-photo" src=".\img\socksPhotos\Sunny_socks_blue.jpg"  alt="Blue unicolor socks">
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
                            <input class="form__buy-button"  type="submit" value="BUY">
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
                    We like win-win situations. When we produce and sell our socks it is beneficial for everyone involved.
                    The sells person has a nice job. The raw materials are gained in such a way it does not harm the earth. The production is done with the
                    enivironment in mind and with an honest waige for the people working in the factories. The shops that sell our sock make a fair provit. And last but not least: the costumer gets high quality socks for a fair price.
                </p>

            </div>
            <div class="main__our-vision">
                <u>
                    <h3>OUR VISION</h3>
                </u>
                <p>Positivity is part of our DNA. Sunny likes to look on the bright side. Every problem is an oppurtunity to come up with a solution.</p>
            </div>
        </section>
    </main>
    <?php footer() ?>
</body>

</html>