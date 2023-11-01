<?php


function header_template($language, $lang)
{

    return '         
    <header class="header" id="desktop-header">
        <div class="container">
            <div class="header__inner">
                <a href="mainPage.php" class="socksLogo">
                    <img class="header__image-logo" src=".\img\sunny_logos_slogan_blue.png" alt="socksLogo">
                </a>
                <ul class="header__list">
                <li class="header__list-item">
                        <a href="catalogue.php">
                            ' .
        $language["Catalogue"][$lang]
        . '
                        </a>
                    </li>
                    <li class="header__list-item">
                        <a href="mainPage.php#aboutUs" onclick="closeBurger()">
                            ' .
        $language["About us"][$lang]
        . '
                        </a>
                    </li>
                    <li class="header__list-item">
                        <a href="contact_page.php">
                            ' .
        $language["Contact us"][$lang]
        . '
                        </a>
                    </li>
                    <li>
                        <form name="langForm" class="header__form" action="' . $_SERVER["PHP_SELF"] . '" method="GET">
                            <label for="submitButtonEN">
                                <img class="header__image header__image-flag" src=".\img\englishflag.png" alt="ENFlag">
                            </label>
                            <input class="header__submit-lang" type="submit" id="submitButtonEN"  name="submit" value="EN">


                            <label for="submitButtonNL">
                                <img class="header__image header__image-flag" src=".\img\vlag-nederland.png" alt="NLFlag">
                            </label>
                            <input class="header__submit-lang" type="submit" id="submitButtonNL" name="submit" value="NL">
                        </form>
                    <li>
                    <li class="header__list-item"><a href="checkoutPage.php"><img class="header__image" src="./img\shopping-cart.png" alt="ShopCard"></a></li>
                </ul>
                <button id="hamburger-bttn"> <img src=".\img\burger-menu-svgrepo-com.svg" alt="hamburger" style=""></button>
            </div>
        </div>
    </header>  ';
}

function footer_temple()
{
    return
        '<footer class="footer">
        <div class="container">
            <div class="footer__inner">
                <div class="footer__item">
                    <h3 class="footer__title">OUR PAYMENT METHODS</h3>
                    <ul class="footer__image-wrapper">
                        <li>
                            <img class="footer__image" src="img/VISA.png" alt="visa" />
                        </li>
                        <li>
                            <img class="footer__image" src="img/mastercard.png" alt="mastercard" />
                        </li>
                        <li>
                            <img class="footer__image" src="img/PAYPAL.png" alt="paypal" />
                        </li>
                        <li>
                            <img class="footer__image" src="img/ideal.png" alt="ideal" />
                        </li>
                    </ul>
                </div>
                <div class="footer__item">
                    <h3 class="footer__title">ABOUT US</h3>
                </div>
                <div class="footer__item">
                    <h3 class="footer__title">BRANDING</h3>
                </div>
                <div class="footer__item">
                    <ul class="footer__square-wrapper">
                        <li class="footer__square footer__square-pink">
                            <div>
                                <h3 class="footer__square-name">Jhon Smith</h3>
                                <p>Marketing</p>
                            </div>
                            <div class="footer__square-contacts">
                                <p>+ 31 6 12 34 56 78</p>
                                <p>Jhon@sunny.com</p>
                            </div>
                            <h3 class="footer__square-name">sunny.com</h3>
                        </li>
                        <li class="footer__square footer__square-green">
                            <div>
                                <h3 class="footer__square-name">Suzan Jong</h3>
                                <p>Sales</p>
                            </div>
                            <div class="footer__square-contacts">
                                <p>+ 31 6 12 12 12 12</p>
                                <p>Suzan@sunny.com</p>
                            </div>
                            <h3 class="footer__square-name">sunny.com</h3>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>';
}

function init()
{
    session_start();
    
    if (!isset($_SESSION["CART"])) {
        $_SESSION["CART"] = array();
    }
   


    if (!isset($_SESSION["LANG"])) {
        $_SESSION["LANG"] = "EN";
    }

    $lang = $_SESSION["LANG"];

    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $lang = filter_input(INPUT_GET, "submit");
        if (empty($lang)) {
            $lang = $_SESSION["LANG"];
        }

        $_SESSION["LANG"] = $lang;
    }

    return $lang;
}
