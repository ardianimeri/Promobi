<<<<<<< HEAD
=======
<?php
    require '../includes/dbconnect.php';

    session_start();
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        $mailTo = 'ardiani_m2003@hotmail.com';
        $headers = 'From: ' .$email;
        $txt = 'You have received an e-mail from ' .$name . '. \n\n' .$message;
        $info = '';

        mail($mailTo, $name, $txt, $headers);
        header('Location: contact.php?mailsend');
        $query = $pdo->prepare('INSERT INTO contact (name, surname, email, message) VALUES (:name, :surname,:email, :message)');
        $query->bindParam('name', $name);
        $query->bindParam('surname', $surname);
        $query->bindParam('email', $email);
        $query->bindParam('message', $message);

        if($query->execute()) {
            $info = "Successfully sent";
        } else {
            $info = "A problem occurred!";
        }
    }
?>

>>>>>>> d1b9e0873d62c83a0518ae5c004be43ecd84782b
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontakti</title>
<<<<<<< HEAD
    <link rel="stylesheet" href="/Promobi/src/assets/css/contact.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <script src="/Promobi/src/assets/js/nav.js"></script>
=======
    <link rel="stylesheet" href="../assets/css/contact.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <script src="../assets/js/nav.js"></script>
>>>>>>> d1b9e0873d62c83a0518ae5c004be43ecd84782b
</head>

<body>
    <div class="container">
        <div class="header">
            <div class="wrapper">
                <header>
<<<<<<< HEAD
                    <?php include '/xampp/htdocs/Promobi/public/includes/menuu.php'; ?>
=======
                    <img src="/public/logo.png" alt="Logo">
                    <nav>
                        <ul>
                            <li><a class="nav-link" href="Homepage.html">Ballina</a></li>
                            <li><a href="#">Produktet</a>
                                <div class="sub-menu">
                                    <ul>
                                        <li><a class="nav-link" href="/src/pages/Kitchen.html">Kuzhina</a></li>
                                        <li><a class="nav-link" href="/src/pages/LivingRoom.html">Salloni</a></li>
                                        <li><a class="nav-link" href="/src/pages/Bedroom.html">Dhoma</a></li>
                                        <li><a class="nav-link" href="/src/pages/Office.html">Zyre</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li><a class="nav-link" href="/src/pages/Aboutus.html">Rreth Nesh</a></li>
                            <li><a class="nav-link" href="/src/pages/Contact.html">Kontakti</a></li>
                        </ul>
                    </nav>
>>>>>>> d1b9e0873d62c83a0518ae5c004be43ecd84782b
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
<<<<<<< HEAD
                    <div class="contact-form">
=======
                    <div class="contact-form" action="contact.php" method="POST">
>>>>>>> d1b9e0873d62c83a0518ae5c004be43ecd84782b
                        <form>
                            <input type="text" name="name" id="name" placeholder="Name">
                            <input type="text" name="surname" id="surname" placeholder="Surname">
                            <input type="email" name="email" id="email" placeholder="Enter your email">
                            <textarea name="message" id="message" placeholder="Your message"></textarea>
<<<<<<< HEAD
                            <button type="submit" class="btn">Submit</button>
=======
                            <button type="submit" name="submit" class="btn">Submit</button>
>>>>>>> d1b9e0873d62c83a0518ae5c004be43ecd84782b
                        </form>
                    </div>
                </main>
            </div>
        </div>
        <div class="footer">
            <div class="wrapper">
                <footer>
<<<<<<< HEAD
                     <?php include '/xampp/htdocs/Promobi/public/includes/menu2.php'; ?>
=======
                    <img src="/public/logo.png" alt="logo-footer">
                    <div class="contact-container">
                        <div class="text-example">
                            <p><i class="fa fa-paper-plane"></i>Email</p>
                            <p><i class="fa fa-phone"></i>Phone</p>
                            <div class="social-icons">
                                <a href="https://www.facebook.com/mobileriapromobi/"><i class="fa-brands fa-facebook"></i></a>
                                <a href="https://www.instagram.com/promobi_mobileri/"><i class="fa-brands fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="location">
                            <p>FERIZAJ</p><p>Magjistralja Ferizaj - Prishtine,</p><p>Af??r Super Viva</p>
                        </div>
                    </div>
>>>>>>> d1b9e0873d62c83a0518ae5c004be43ecd84782b
                </footer>
            </div>
        </div>
    </div>
</body>

</html>