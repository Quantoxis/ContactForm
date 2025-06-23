<!DOCTYPE html>
<html lang="en-GB">

<head>
    <link rel="stylesheet" href="stylesheet.css" type="text/css" />
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
    <title>antispam</title>
</head>

<body>
    <h1>Send us a message!</h1>
    <form id="form" action="send_form.php" method="post">
        <label>Name:</label>
        <input type="text" name="name" required>

        <label>Email:</label>
        <input type="text" name="email" required>

        <label>Phone number:</label>
        <input type="text" name="phone" required>

        <label>Message:</label>
        <textarea name="message" required></textarea>

        <div class="checkbox-container">
            <label for="email_receipt">Send email confirmation:</label>
            <input type="checkbox" id="email_receipt" name="email_receipt">
        </div>

        <button type="submit" name="submit">Submit</button>
        <button type="submit" name="clear">Clear</button>
    </form>
</body>


</html>