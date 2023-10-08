<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Page</title>
    <link rel="stylesheet" href="style/style_contact_page.css">
</head>
<body>
    <div>
        <div class="content">
            <h1>CONTACT US</h1>
            <form action="index.php">
                <label for="Fname"></label>
                <input type="text" id="Fname" placeholder="Insert name">
                <br>

                <label for="Lname"></label>
                <input type="text" id="Lname" placeholder="Insert surname">
                <br>

                <label for="street"></label>
                <input type="text" id="street" placeholder="Street name">

                <label for="postcode"></label>
                <input type="text" id="postcode" placeholder="Postal code">
                <br>
                <label for="email"></label>
                <input type="email" id="email" placeholder="E-MAIL">
                <br>

                <label for="phone"></label>
                <input type="tel" id="phone" placeholder="Phone-number">

                <label for="country"></label>
                <input type="text" id="country" placeholder="Country">
                <br>

                <label for="comment"></label>
                <textarea name="comment" id="" cols="40" rows="15" placeholder="Insert text"></textarea>
                <br>

                <input type="submit">
            </form>
        </div>
    </div>
</body>
</html>