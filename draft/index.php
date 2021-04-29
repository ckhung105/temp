<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>contact form tut</title>
</head>
<body>
    <main>
        <p>Send E-mail</p>
        <form class="contact-form" action="contactform.php" method="post">
            <input type="text" name="name" placeholder="Full name">
            <input type="text" name="mail" placeholder="Your Email">
            <input type="text" name="subject" placeholder="Subject">
            <textarea name="message" placeholder="Message"></textarea>
            <button type="submit" name="submit">Send Mail</button>
        </form>
    </main>
</body>
</html>