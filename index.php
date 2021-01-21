<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Hachi+Maru+Pop&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="stylesheet.css">
</head>

<body>

    <form class="contactForm" action="contact.php" method="post">
        <h1>Say Hello 🍵</h1>
        <div class="input" id="name">
            <label for="name" aria-hidden="Enter Name here"></label>
            <input type="text" name="name" placeholder="Enter Name here" required>
        </div>
        <div class="input" id="email">
            <label for="email" aria-hidden="Enter Name here"></label>
            <input type="text" name="email" placeholder="Enter Email here" required>
        </div>
        <div class="input" id="Subject">
            <label for="subject" aria-hidden="Enter Subject here"></label>
            <input type="text" name="subject" placeholder="Enter Subject here" required>
        </div>
        <div class="input" id="message">
            <label for="message" aria-hidden="Enter Message here" placeholder="Enter Message here"></label>
            <textarea name="message" id="message" cols="30" rows="10" placeholder="Enter Message here"
                required></textarea>
        </div>
        <div class="submit">
            <button type="submit" name="submit">Send</button>
        </div>
    </form>
</body>

</html>