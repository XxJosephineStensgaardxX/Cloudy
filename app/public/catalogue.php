<?php
    session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<?php require_once 'templates.php' ?>
<?php require_once 'language.php' ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalogue</title>
    <link rel="stylesheet" href="style/style.css">
	<link rel="stylesheet" href="./style/style_lang.css">
    <link rel="stylesheet" href="style/style_catalogue.css">
    <?php
    $lang = $_SESSION["LANG"];
 
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $lang = filter_input(INPUT_GET, "submit");
        if (empty($lang)) {
            $lang =  $_SESSION["LANG"];
        }
        
        $_SESSION["LANG"] = $lang;
    }
    ?>   
</head>

<body>
    <?php echo desktop_header_template($language, $lang) ?>
    <?php echo mobile_header_template($language, $lang) ?>
    <section class="space">
        <div class="container">
            <div class="striped_socks">
                <div class="striped_box">
                    <img src="img/catalogus_sokken_stripes_pink.png" alt="striped_pink_socks">
                    <img src="img/catalogus_sokken_stripes_red.png" alt="striped_red_socks">
                    <img src="img/catalogus_sokken_stripes_green.png" alt="striped_green_socks">
                    <img src="img/catalogus_sokken_stripes_yellow.png" alt="striped_yellow_socks">
                    <img src="img/catalogus_sokken_stripes_blue.png" alt="striped_blue_socks">
                </div>
                <button>                            
                    <?php
                        echo $language["BUY"][$lang]
                    ?>
                </button>
            </div>
            <div class="uni_socks">
                <div class="uni_box">
                    <img src="img/catalogus_sokken_uni_pink.png" alt="uni_pink_socks">
                    <img src="img/catalogus_sokken_uni_yellow.png" alt="uni_yellow_socks">
                    <img src="img/catalogus_sokken_uni_red.png" alt="uni_red_socks">
                    <img src="img/catalogus_sokken_uni_green.png" alt="uni_green_socks">
                    <img src="img/catalogus_sokken_uni_blue.png" alt="uni_blue_socks">
                </div>
                <button>                            
                    <?php
                        echo $language["BUY"][$lang]
                    ?>
                </button>
            </div>
        </div>
    </section>
    <?php echo footer_temple() ?>
</body>

</html>