<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Page</title>
    <link rel="stylesheet" href="./style/style.css">
    <link rel="stylesheet" href="./style/productPage.css">
</head>
<header>
    <h1>INSERT NAV BAR</h1>
</header>

<body>
    <div class="maincontainer-flex container">
        <div>
            <div>
                <img class="chosenPicture" src="./img/socksPhotos/Sunny_socks_uni_red.jpg" alt="classic orange sock">
            </div>
            <hr class="horizontal-line">
            <div class="othersocks-flex">
                <div>
                    <img class="othersock-item" src="./img/socksPhotos/Sunny_socks_uni_blue.jpg"
                        alt="Classic blue sock">
                </div>
                <div>
                    <img class="othersock-item" src="./img/socksPhotos/Sunny_socks_uni_pink.jpg"
                        alt="Classic pink sock">
                </div>
                <div>
                    <img class="othersock-item" src="./img/socksPhotos/Sunny_socks_uni_green.jpg"
                        alt="Classic Green sock">
                </div>
                <div>
                    <img class="othersock-item" src="./img/socksPhotos/Sunny_socks_uni_yellow.jpg"
                        alt="Classic Yellow sock">
                </div>
            </div>
        </div>
        <div class="information-container-flex">
            <h3 class="font-bold product-name-header"><b>CLASSIC UNI SOCK - ORANGE</b></h3>
            <div>
                <ul class="container-sizes-flex">
                    <li>25-31</li>
                    <li>32-36</li>
                    <li>36-40</li>
                    <li>40-45</li>
                    <li>45-47</li>
                    <li>47+</li>
                </ul>
            </div>
            <hr class="horizontal-line">
            <div class="color-picker-flex">
                <div class="color-picker" id="green-button"></div>
                <div class="color-picker" id="blue-button"></div>
                <div class="color-picker" id="yellow-button"></div>
                <div class="color-picker" id="pink-button"></div>
                <div class="color-picker" id="orange-button"></div>
            </div>
            <hr class="horizontal-line">
            <div>
                <p>Made from 100% organic cotton <br> Produced in Portugal</p>
            </div>
            <hr class="horizontal-line">
            <div>PUT IN CART - BUTTON</div>
        </div>
    </div>
</body>
<footer>
    <?php footer() ?>
</footer>

</html>