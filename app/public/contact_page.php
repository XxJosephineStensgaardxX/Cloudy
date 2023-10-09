<!DOCTYPE html>
<html lang="en">
<?php require_once 'templates.php' ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Page</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/style_contact_page.css">

</head>
<?php
    footer();
?>
<body>
    <div>
        <div class="content">
            <h1>CONTACT US</h1>
            <form action="submit.php" method="POST">
                <label for="Fname"></label>
                <input type="text" id="Fname" placeholder="INSERT NAME" name="Fname">
                <br>

                <label for="Lname"></label>
                <input type="text" id="Lname" placeholder="INSERT SURNAME" name="Lname">
                <br>

                <label for="street"></label>
                <input type="text" id="street" placeholder="STREET NAME" name="street">

                <label for="postcode"></label>
                <input type="text" id="postcode" placeholder="Postal code" name="postcode">
                <br>
                <label for="email"></label>
                <input type="email" id="email" placeholder="E-MAIL" name="email">
                <br>

                <label for="phone"></label>
                <input type="tel" id="phone" placeholder="Phone-number" name="phone">

                <label for="country"></label>
                <input type="text" id="country" placeholder="Country" name="country">
                <br>

                <label for="comment"></label>
                <textarea name="comment" id="comment" cols="40" rows="15" placeholder="Insert text" name="comment"></textarea>
                <br>

                <input type="submit" id="submit">
            </form>
        </div>
    </div>
    <?php
    footer();
    ?>
</body>
</html>