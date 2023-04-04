<?php
    session_start();
    error_reporting(E_ERROR | E_PARSE);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Ihor Bobulych, Artem Fedorchenko, Oleksandr Portnov">
    <meta name="description" content="Vidclick - is a project, created by Ukrainians in order to help people gather money for military and humanitarian purposes">
    <meta name="keywords" content="fund, fundraising, help people, war, war in Ukraine, humanitarian, military, Ukraine, vidclick, how to help Ukrainians">
    <meta property="og:title" content="Vidclick">
    <meta property="og:url" content="#">
    <meta property="og:image" content="https://i.ibb.co/C8Ddx45/vidclick-logo.png">
    <meta property="og:description" content="Vidclick - is a project, created by Ukrainians in order to help people gather money for military and humanitarian purposes">
    <link rel="stylesheet" href="./styles/nav.css">
    <link rel="stylesheet" href="./styles/footer.css">
    <link rel="stylesheet" href="./fa/all.css">
    <link rel="stylesheet" href="./styles/sign-up.css">
    <link rel="stylesheet" href="./styles/log-in.css">
    <script src="./libs/gsap.min.js" defer></script>
    <script src="./libs/ScrollSmoother.min.js" defer></script>
    <script src="./libs/ScrollTrigger.min.js" defer></script>
    <script src="./actions/gsapScroll.js" defer></script>
    <link rel="shortcut icon" href="./favicon/favicon.ico" type="image/x-icon">
    <title>Log In to Vidclick</title>
</head>
<body>
        <div class="gsap-wrapper">
            <div class="gsap-content">
                <main>
                    <div class="already-have">
                        <div class="home-direct">
                            <p><a href="./index.html">Home</a></p>
                        </div>
                        <div class="account-have-content">
                            <p>Dont have an account? <a href="./sign-up.php">Sign up!</a></p>
                        </div>
                    </div>
                    <div class="main-sign-container">
                        <div class="sign-wrapper">
                            <h1>Welcome Back</h1>
                            <p id="get-start">Login into your account</p>
                            <div class="button-container">
                                <button type="button">
                                    <div class="icon-content first">
                                        <img src="./icons/google.svg" alt="">
                                        <p>Google</p>
                                    </div>
                                </button>
                                <button type="button">
                                    <div class="icon-content">
                                        <img src="./icons/facebook.png" alt="">
                                        <p>Facebook</p>
                                    </div>
                                </button>
                            </div>
                            <p id="continue">Or continue with</p>
                            <form action="./php/login.php" method="POST">
                                <div class="form-container">
                                    <?php
                                            if($_SESSION['message']){
                                                echo '<div class="msg__err"><i class="fa-solid fa-circle-info"></i>' . $_SESSION['message'] . '</div>';
                                            }
                                            unset($_SESSION['message'])
                                    ?>
                                    <input type="email" name="email" placeholder="Enter email" required>
                                    <input type="password" name="password" placeholder="Enter password" required>
                                    <button type="submit" id="form-button">Log In</button>
                                    <div class="remember-container">
                                        <div class="remember-me">
                                            <p><i class="fa-solid fa-toggle-off"></i>Remember me</p>
                                        </div>
                                        <div class="recover">
                                            <a href="#">Recover password</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                    
                        </div>
                    </div>
                        </main>
                        <footer>
                    
                        </footer>
                        <footer>
                    <div class="main-footer-container">
                        <img src="./image/vidclick-logo-2.png" alt="logo">
                        <p>Become a member of our family!</p>
                        <div class="menu-items--wrapper">
                            <div class="menu-items-container">
                                <div class="menu-item 1">
                                    <div class="menu-title">Offers</div>
                                    <ul>
                                        <li><a href="#">Create</a></li>
                                        <li><a href="#">Current Proposals</a></li>
                                        <li><a href="#">Results</a></li>
                                        <li><a href="#">Humanitarian</a></li>
                                        <li><a href="#">Military</a></li>
                                    </ul>
                                </div>
                                <div class="menu-item 2">
                                    <div class="menu-title">Partners</div>
                                    <ul>
                                        <li><a href="#">Monobank</a></li>
                                        <li><a href="#">Diia</a></li>
                                        <li><a href="#">UNITED24</a></li>
                                        <li><a href="#">Повернись Живим</a></li>
                                        <li><a href="#">Leleka Foundation</a></li>
                                        <li><a href="#">GoFundMe</a></li>
                                    </ul>
                                </div>
                                <div class="menu-item 3">
                                    <div class="menu-title">Learn More</div>
                                    <ul>
                                        <li><a href="#">How Vidclick Works</a></li>
                                        <li><a href="#">How You Can Help</a></li>
                                        <li><a href="#">Join Our Family</a></li>
                                        <li><a href="#">Purpose of Vidclick</a></li>
                                        <li><a href="#">Our Achievements</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="social-icons-container">
                                <div class="icon-wrapper">
                                    <i class="fa-brands fa-telegram"></i>
                                    <i class="fa-brands fa-facebook"></i>
                                    <i class="fa-brands fa-tiktok"></i>
                                    <i class="fa-brands fa-instagram"></i>
                                    <i class="fa-brands fa-youtube"></i>
                                </div>
                                <div class="copyright-content">
                                    Copyright © 2023 Vidclick
                                </div>
                            </div>
                        </div>
                    </div>
                        </footer>
                </main>
            </div>
        </div>
</body>
