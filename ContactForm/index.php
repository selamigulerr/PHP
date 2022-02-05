<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="style.css" rel="stylesheet" >
    <title>Document</title>
</head>
<body>
<section class="get-in-touch">
    <h1 class="title">Get in touch</h1>
    <form class="contact-form row" action="sender.php" method="POST">
        <div class="form-field col x-50">
            <input id="name" class="input-text js-input" type="text" name="FirstName" required>
            <label class="label" for="name">Name</label>
        </div>
        <div class="form-field col x-50">
            <input id="email" class="input-text js-input" type="email"   name="Email"required>
            <label class="label" for="email">E-mail</label>
        </div>
        <div class="form-field col x-100">
            <input id="message" class="input-text js-input" type="text"  name="Message" required>
            <label class="label" for="message">Message</label>
        </div>
        <div class="form-field col x-100 align-center">
            <input class="submit-btn" type="submit"  name="Sender" value="Submit">
        </div>
    </form>
</section>
<p class="note">Based on <a class="link" href="http://redcollar.digital/contacts/" target="blank">Red Collar Contact Form</a>.</p>
</body>
</html>

