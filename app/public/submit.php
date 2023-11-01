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

    <script src="./js/index.js" defer></script>
</head>

<body>
    <?php echo header_template($language, $lang) ?>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $fname = filter_input(INPUT_POST, "Fname");
        $lname = filter_input(INPUT_POST, "Lname");
        $street = filter_input(INPUT_POST, "street");
        $email = filter_input(INPUT_POST, "email");
        $postcode = filter_input(INPUT_POST, "postcode");
        $phone = filter_input(INPUT_POST, "phone");

        $errorFlag = false;
        $errors = array();

        if (empty($fname)) {
            $errorFlag = true;
            array_push($errors, "Invalid first name");
        };
        if (empty($lname)) {
            $errorFlag = true;
            array_push($errors, "Invalid last name");
        };
        if (empty($street)) {
            $errorFlag = true;
            array_push($errors, "Invalid street");
        };
        if (empty($email)) {
            $errorFlag = true;
            array_push($errors, "Invalid email");
        };
        if (empty($postcode)) {
            $errorFlag = true;
            array_push($errors, "Invalid postcode");
        };
        if (empty($phone)) {
            $errorFlag = true;
            array_push($errors, "Invalid phone");
        };


        if ($errorFlag == true) {
            echo '<main style="font-size:25px"> ';
            foreach ($errors as $error) {
                echo "" . $error . "<br>";
            }
            echo '</main>';
        } else {
            echo '
                    <main style="height:100%">
                        <div class="success">
                            <h1>                    
                                YOUR MESSAGE IS SUCCEFULY SEND
                            </h1>
                        </div>
                    </main>
                    ';
        }
    }
    ?>
    <?php echo footer_temple() ?>
</body>

</html>