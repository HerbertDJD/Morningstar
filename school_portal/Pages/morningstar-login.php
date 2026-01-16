
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="morningstar.css">
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
        <div class="middle">
            <!--<div class="Title">
                <h1>Welcome to <span class="s1">The Morningstar</span><span class="s2"> Primary School.</span></h1>
                <p>Supporting bright futures...securely.</p>
            </div>-->
        <form class="account-form" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
            <div class="uusername">
                <input type="text" id="username" name="username" placeholder="Username" required>
            </div>
            <div class="ppasword">
                <input type="password" id="password" name="password" placeholder="Enter your password" required>
            </div>
            <button type="submit" class="llogin">Login</button>
        </form>
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