<?php

function header_template()
{
    
    return '     <header class="header">
    <div class="container">
        <div class="header__inner">
            <a href="mainPage.php" class="socksLogo">
                <img class="header__image-logo" src="./img\Sunny\Logo\'s\png\sunny_logos_slogan_blue.png" alt="socksLogo">
            </a>
            <ul class="header__list">
                <li class="header__list-item"><a href="catalogue.php">Catalogue</a></li>
                <li class="header__list-item"><a href="">About us</a></li>
                <li class="header__list-item"><a href="contact_page.php">Contact us</a></li>
                <li class="header__list-item"><a href=""><img class="header__image header__image-flag" src="./img\englishflag.png" alt="ENFlag"></a></li>
                <li class="header__list-item"><a href=""><img class="header__image header__image-flag" src="./img\vlag-nederland.png" alt="NLFlag"></a></li>
                <li class="header__list-item"><a href="checkoutPage.php"><img class="header__image" src="./img\Shopcart.jpg" alt="ShopCard"></a></li>
            </ul>
        </div>
    </div>
</header> ';
   
   
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
                            <img class="footer__image" src="img/mastercard.png" alt="visa" />
                        </li>
                        <li>
                            <img class="footer__image" src="img/mastercard.png" alt="mastercard" />
                        </li>
                        <li>
                            <img class="footer__image" src="img/mastercard.png" alt="paypal" />
                        </li>
                        <li>
                            <img class="footer__image" src="img/mastercard.png" alt="ideal" />
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
