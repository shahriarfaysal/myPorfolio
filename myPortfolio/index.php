<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<style>

</style>
<body>
    <section class="top-banner flexiable-container">
        <div class="half-width">
            <h1>Welcome To</h1>
            <h1><span class="red-color">Shahriar's</span> World!</h1>
            <h3>Build Climber and Train Stopper</h3>
            <p>You might saw me jumping, climbing buildings, and stopping trains. But nobody pays me a dime for that
                work. That's why I am learning and mastering web development. I will not stop until I become the Web
                Development Hero.</p>
            <a class="link-button" target="_blank"
                href="http://www.linkedin.com/in/shahriar-faysal-kaumol-4974a9216/">Hire Me</a>
        </div>
        <div class="half-width">
            <img src="images/p.jpg" alt="">
        </div>
    </section>
    <section class="dream-big flexiable-container">
        <div class="half-width">
            <img src="images/y.jpg" alt="">
        </div>
        <div class="half-width">
            <h2>Dream Big</h2>
            <h3>Become a web developer</h3>
            <p>I already learned the basic HTML and CSS. I can build any simple website. I can even teach my grandma how
                to make simple website. My goal is to build 3 websites and learn advanced topics.</p>
            <a class="link-button" target="_blank" href="https://drive.google.com/file/d/16zM9HBqvPQRKAuwGsqaxq6DBiqPnIHYO/view?usp=sharing">Download Resume</a>
        </div>
    </section>
    <section class="experience">
        <div class="flexiable-container">
            <div id="web" class="experience-item">
                <h2>Full Stack Web Developer</h2>
                <h3 class="red-color">2024-Present | Pro Level Developer</h3>
                <p>I am the master of HTML, CSS and PHP. I know everything needed to make a website function,
                    efficient. I didn't stop with the web. I went beyond with most popular PHP framework called
                Laravel. I even know the deployment, server and security. I will give you 100% web solution.</p>
            </div>
            <div id="web-dev" class="experience-item">
                <h2>Baby Web Developer</h2>
                <h3 class="red-color">2023-24 | Programming Hero Learner</h3>
                <p>They didn't offer me a job. But I made myself as a remote web developer. I made their website and
                    showed it to them. They liked it. And uploaded the content. It was fun working at Programming Hero.
                </p>
            </div>
        </div>
    </section>
    <section>

        <div class="contact-form-container">
            <h1 style="align-items: center">Contact Us</h1>
            <form action="database.php" name="message_form" method="POST">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" placeholder="Your Name" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Your Email" required>

                <label for="subject">Subject:</label>
                <input type="text" id="subject" name="subject" placeholder="Subject" required>

                <label for="message">Message:</label>
                <textarea id="message" name="message" placeholder="Your Message" rows="5" required></textarea>

                <button type="submit" class="link-button">Submit</button>
            </form>
        </div>

    </section>
    <footer>
        <p>© Shahriar Faysal 2024, Personal Portfolio.</p>
    </footer>
</body>
<?php
if(isset($_GET['msg'])){
    echo "<script>alert('".$_GET['msg']."')</script>";
}
?>
</html>
