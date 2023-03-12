<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontakti</title>
    <link rel="stylesheet" href="/Promobi/src/assets/css/contact.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <script src="/Promobi/src/assets/js/nav.js"></script>
</head>

<body>
    <div class="container">
        <div class="header">
            <div class="wrapper">
                <header>
                    <?php include '/xampp/htdocs/Promobi/public/includes/menuu.php'; ?>
                </header>
            </div>
        </div>
        <div class="main">
            <div class="wrapper">
                <main>
                    <div class="iframe">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d53274.004632127864!2d21.128115239212377!3d42.42735291060949!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x13547f11eb8090ab%3A0xb521ee9e8edef579!2sMobileria%20PROMOBI%2C%20Ferizaj!3m2!1d42.3822733!2d21.1679513!5e0!3m2!1sen!2s!4v1673191609010!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                    <div class="contact-form">
                        <form>
                            <input type="text" name="name" id="name" placeholder="Name">
                            <input type="text" name="surname" id="surname" placeholder="Surname">
                            <input type="email" name="email" id="email" placeholder="Enter your email">
                            <textarea name="message" id="message" placeholder="Your message"></textarea>
                            <button type="submit" class="btn">Submit</button>
                        </form>
                    </div>
                </main>
            </div>
        </div>
        <div class="footer">
            <div class="wrapper">
                <footer>
                     <?php include '/xampp/htdocs/Promobi/public/includes/menu2.php'; ?>
                </footer>
            </div>
        </div>
    </div>
</body>

</html>