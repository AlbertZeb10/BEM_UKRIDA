<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BEM UKRIDA</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap">
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link rel="stylesheet" href="css/contact.css">
</head>
<body>
    <section id="section-wrapper">
        <div class="box-wrapper">
            <div class="info-wrap">
                <h2 class="info-title">Contact Information</h2>
                <h3 class="info-sub-title">Fill up the form and our Team will get back to you within 24 hours</h3>
                <ul class="info-details">
                    <li>
                        <i class="fas fa-phone-alt"></i>
                        <span>Phone:</span> <a href="https://wa.me/6287891053821">+62 878-9105-3821</a>
                    </li>
                    <li>
                        <i class="fas fa-paper-plane"></i>
                        <span>Email:</span> <a href="mailto:bem-u@ukrida.ac.id">bem-u@ukrida.ac.id</a>
                    </li>
                </ul>
                <div class="main">
                    <a href="home.php" class="btn">Back To Home</a>
                </div>
            </div>
            <div class="form-wrap">
                <form action="#" method="POST">
                    <h2 class="form-title">Send Us A Message</h2>
                    <div class="form-fields">
                        <div class="form-group">
                            <input type="text" class="fname" placeholder="First Name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="lname" placeholder="Last Name">
                        </div>
                        <div class="form-group">
                            <input type="email" class="email" placeholder="Mail">
                        </div>
                        <div class="form-group">
                            <input type="number" class="phone" placeholder="Phone">
                        </div>
                        <div class="form-group">
                            <textarea name="message" id="" placeholder="Write your message"></textarea>
                        </div>
                    </div>
                    <input type="submit" value="Send Message" class="submit-button">
                </form>
            </div>
        </div>
    </section>
</body>
<?php
(include 'footer.php')
?>
</html>