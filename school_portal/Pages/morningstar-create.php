<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" text="text/css" href="morningstar-create.css">
    <title>Document</title>
</head>
<body>
    <div class="header-box">
        <img src="../Assets/BArrow.png" alt="Back-Arrow" class="Back-Arrow">
        <img src="../Assets/Group L.png" alt="Left-Curl" class="Left-Curl">
        <img src="../Assets/Group 1.png" alt="Logo" class="Logo">
        <img src="../Assets/Group R.png" alt="Right-Curl" class="Right-Curl">
        <img src="../Assets/FArrow.png" alt="Front-Arrow" class="Front-Arrow">
    </div>
    <div class="bodybody">
        <img src="../Assets/PhotoL.png" alt="photo-left" class="left-photo">
    <div class="medium">
        <section class="form-box">
        <form class="contact-form" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
            <div class="name-surname">
                <input type="text" name="first_name" placeholder="First Name" required>
                <input type="text" name="last_name" placeholder="Surname" required>
            </div>
            <div class="emaill">
                <input type="email" name="email" placeholder="Email address" required>
            </div>
            <div class="passwords">
                <input type="password" name="password" placeholder="Password" required>
                <input type="password" name="confirm_password" placeholder="Confirm Password" required>
            </div>
            <button type="submit" class="create-account">Create Account</button>
        </form>
        </section>
    </div>
        <img src="../Assets/PhotoR.png" alt="photo-right" class="right-photo">
    </div>
    <div class="footer-box">
        <div class="Contact">
            <ul class="contacts">
                <li class="contact1">
                    <a class="contact-link" href="https://maps.app.goo.gl/vc1R5YwyindMkw618" target="_blank">Location: Schaikweg 94, 7811 KL Emmen</a>
                </li>
                <li class="contact2">
                    <a class="contact-link" href="https://outlook.office.com/">Contact: themorningstar@outlook.com</a>
                </li>
                <li class="contact3">
                    <a class="contact-link" href="https://elgoog.im/">Phone: +31 (0)516 273 849</a>
                </li>
            </ul>
        </div>
        <img src="../Assets/Group Foot.png" alt="Center-Curl" class="Center-Curl">
        <img src="../Assets/Copyright.png" alt="Copyright" class="Copyright">
    </div>
</body>
</html>