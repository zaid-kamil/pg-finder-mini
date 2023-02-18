<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About Us</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="favicon.ico" rel="icon" type="image/x-icon">
    <link rel="stylesheet" href="css/aboutUs.css">
    <script src="js/common.js"></script>
</head>
<body>
<nav>
    <div class="icon">
        <img src="img/Logo/png/logo-color.png" alt="icon" onclick="gotoLink('index.php')">
    </div>

    <div class="links">
        <div class="search-button">
            <form id="search-form" action="property_list.php" method="GET">
                <label for="search-city"></label><input class="form-control" type="text" name="city" id="search-city" placeholder="search">
            </form>
        </div>
        <div class="text-links">
            <a href="aboutUs.php"><strong>About Us</strong></a>
            |
            <a href="home.php">Homes</a>
        </div>
        <?php
        if (!isset($_SESSION['user_id'])) {
            ?>
            <div class="login-button">
                <button onclick="gotoLink('logup.php')">Login</button>
            </div>
            <?php
        } else {
            ?>

            <div class="login-button">
                <button onclick="gotoLink('logout.php')">Logout</button>
            </div>
            <?php
        }
        ?>
    </div>
</nav>

<div class="hr-under-nav">
    <hr>
</div>

<div class="top-panel">
    <div class="top-large-name">
        <h1>Team PG Finder</h1>
    </div>
    <div class="top-lower-container">
        <img src="img/Logo/png/logo-color.png" alt="face-icon" aria-label="face-icon">
        <div class="top-lower-text">
            <p>
                The website known as PG Finder is intended to be of assistance to students and working professionals
                located anywhere in India who are looking for an appropriate place to call home. This becomes an
                extremely important consideration when talking about housing possibilities in a new location for
                college students. Students will benefit from using this tool because it was built by members of Team
                PG Finder who have personal experience with the problem being addressed here.
            </p>
            <a>link to GitHub repo</a>
        </div>
    </div>
</div>

<div class="hr-under-nav">
    <hr>
</div>

<div class="tech-stack">
    <h2>Tech Stack</h2>
    <div class="tech-icons">
        <div class="each-tech-icon">
            <h3>HTML</h3>
            <img src="img/tech-stack/icons8-html-5-480.png" alt="HTML icon" onclick="gotoLink('')">
        </div>
        <div class="each-tech-icon">
            <h3>CSS</h3>
            <img src="img/tech-stack/icons8-css3-240.png" alt="CSS icon">
        </div>
        <div class="each-tech-icon">
            <h3>JavaScript</h3>
            <img src="img/tech-stack/icons8-javascript-480.png" alt="JS icon">
        </div>
        <div class="each-tech-icon">
            <h3>PHP</h3>
            <img src="img/tech-stack/icons8-php-logo-512.png" alt="PHP icon">
        </div>
        <div class="each-tech-icon">
            <h3>MySQL</h3>
            <img src="img/tech-stack/icons8-mysql-logo-480.png" alt="MySQL">
        </div>
    </div>
</div>

<div class="hr-under-nav">
    <hr>
</div>



<div class="hr-under-nav">
    <hr>
</div>


<footer>
    <div class="footer-up">
        <div class="footer-links">
            <a href="home.php">homes</a>
            <a href="logup.php">login</a>
            <a href="logup.php">signup</a>
        </div>

        <div class="other-info">
            <h3>PG Finder built for the <br>students & professionals <a href="home.php">looking for PGs</a><br> and homes throughout the country.</h3>
        </div>

        <div class="contact-us">
            <h3>Contact Us</h3>
            <div class="contact-form">
                <form>
                    <label for="email-contact"></label><input id="email-contact" type="email" name="email" value="email">
                    <label for="content"></label><input id="content" type="text" name="content" value="content">
                    <button type="submit">submit</button>
                </form>
            </div>
        </div>
    </div>
    <div class="footer-text">
        &#169; PG-Builder 2022 | Application Designed by Team PG-Finder.
    </div>
</footer>
</body>
</html>