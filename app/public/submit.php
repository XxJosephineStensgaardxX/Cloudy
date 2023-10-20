<!DOCTYPE html>
<html lang="en">
<?php require_once 'templates.php' ?>
<?php require_once 'language.php' ?>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/submit.css">
    <link rel="stylesheet" href="style/style.css">
	<link rel="stylesheet" href="./style/style_lang.css">
    <?php
        $lang = "EN";

        if($_SERVER["REQUEST_METHOD"] == "GET"){
            $lang = filter_input(INPUT_GET, "submit");
            if($lang == ""){
                $lang = "EN";
            }
        }   
    ?>   
</head>

<body>
    <?php echo header_template($language, $lang) ?>
    <main class="main">
        <div class="success">
            <h1>                    
                <?php
                    echo $language["Your message is..."][$lang]
                ?>
            </h1>
        </div>
    </main>
    <?php echo footer_temple() ?>
</body>

</html>