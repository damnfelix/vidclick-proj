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
    <link rel="stylesheet" href="./styles/account.css">
    <link rel="stylesheet" href="./fa/all.css">
    <?php if(isset($_SESSION['username'])){
                        echo '<link rel="stylesheet" href="./styles/authorized.css">';
                        echo '<script src="./actions/addLogOut.js" defer></script>';
                        }?>
    <script src="./libs/gsap.min.js" defer></script>
    <script src="./libs/ScrollSmoother.min.js" defer></script>
    <script src="./libs/ScrollTrigger.min.js" defer></script>
    <script src="./actions/gsapScroll.js" defer></script>
    <link rel="shortcut icon" href="./favicon/favicon.ico" type="image/x-icon">
    <title>Vidclick, Ukrainian fundraising organization</title>
</head>
<body>
    <div class="gsap-wrapper">
        <div class="gsap-content">
            <header>
                <nav>
                    <ul class="nav-container">
                        <li>
                            <a href="./index.html">Home</a>
                        </li>
                        <li>
                            <a href="./offers.html">Offers</a>
                        </li>
                        <li>
                            <a href="./about.html">About Us</a>
                        </li>
                        <li>
                            <a href="./account.php">Account</a>
                        </li>
                    </ul>
                    <div class="nav-logo">
                        <img src="./image/vidclick-logo-2.png" alt="vidclick-logo">
                    </div>
                    <div class="sign-in-wrapper">
                        <div class="start-vidclick">
                            <a class="start-vidclick-href" href="./sign-up.php">Start with Vidclick</a>
                            <i class="fa fa-sign-in" aria-hidden="true"></i>
                        </div>
                        <button type="button" id="btn-sign-in" class="btn-sign-up">Sign In</button>
                    </div>
                </nav>
            </header>
            <main>
                <div class="info-proposals-divider">
                    <div class="personal-info-container">
                        <h1 class="heading">Personal information</h1>
                        <div class="img-name-wrapper">
                            <img src="<?php echo $_SESSION['image'];?>" alt="person">
                            <div class="name-content">
                                <div class="span-button">
                                    <h1><?php echo $_SESSION['username'];?></h1>
                                    <button type="button" id="edit-btn">Edit</button>
                                </div>
                                <p><i class="fa-solid fa-globe"></i><b>Nationality:</b> <?php echo $_SESSION['nationality'];?></p>
                                <p><i class="fa-solid fa-phone"></i><b>Telephone number:</b> <?php echo $_SESSION['phone'];?></p>
                                <p id="fundraiser-since">Fundraiser since march 2023</p>
                            </div>
                        </div>
                        <div class="center-personal-info">
                            <h2>Your e-pocket</h2>
                            <div id="hz-line"></div>
                            <div class="span-button">
                                <p><b>Balance: </b>0&euro;</p>
                                <button type="button" id="edit-btn">Add Funds</button>
                            </div>
                            <p><b>Supporting organization: </b><?php echo $_SESSION['org'];?></p>
                            <p><b>IBAN:</b> <?php echo $_SESSION['iban'];?></p>
                            <h2>Additional information</h2>
                            <div id="hz-line"></div>
                            <p><b>Existing proposals:</b> 0</p>
                            <p><b>Lifetime behavior score: </b>100%</p>
                        </div>
                    </div>
                    <div class="current-proposals-container">
                        <h1 class="heading proposal">Your current fundraisings</h1>
                        <div class="proposal-card-info">
                            <div class="image-with-title">
                                <img src="./image/bayraktar-card.jpg" alt="bayraktar" class="card-image">
                                <div class="content-align-columm">
                                    <div class="title-amount">
                                        <h2 class="card-title">A decent set of Turkish Bayraktars</h2>
                                        <p class="amount-end">500 000&euro;</p>
                                    </div>
                                    <div class="add-info">
                                        <div class="subcat-placeholder">
                                            <div class="categories">
                                                <p>Weapon &#x2022; Turkey &#x2022; Bayraktar</p>
                                            </div>
                                            <div class="place">
                                                <p><i class="fa-solid fa-location-dot"></i>Sevastopol, Ukraine</p>
                                            </div>
                                            <div class="deadline">
                                                <p><i class="fa-regular fa-calendar-days"></i>25.05.2022-27.08.2022</p>
                                            </div>
                                        </div>
                                        <div class="views-placeholder">
                                            <div class="views-fav">
                                                <p><i class="fa-solid fa-eye"></i>154</p>
                                                <p><i class="fa-solid fa-heart"></i>2</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hz-line-proposals"></div>
                                    <div class="edit-btn-container">
                                        <button type="button" class="change-btn">Change</button>
                                        <button type="button" class="delete-btn">Delete</button>
                                    </div>
                                </div>
                            </div>
            
                        </div>
                        <div class="proposal-card-info">
                            <div class="image-with-title">
                                <img src="./image/army-of-navy-drones.webp" alt="army-of-navy-drones" class="card-image">
                                <div class="content-align-columm">
                                    <div class="title-amount">
                                        <h2 class="card-title">Army of Navy Drones</h2>
                                        <p class="amount-end">1 000 000&euro;</p>
                                    </div>
                                    <div class="add-info">
                                        <div class="subcat-placeholder">
                                            <div class="categories">
                                                <p>Weapon &#x2022; Any &#x2022; Drones</p>
                                            </div>
                                            <div class="place">
                                                <p><i class="fa-solid fa-location-dot"></i>Odesa, Ukraine</p>
                                            </div>
                                            <div class="deadline">
                                                <p><i class="fa-regular fa-calendar-days"></i>30.02.2022-29.10.2022</p>
                                            </div>
                                        </div>
                                        <div class="views-placeholder">
                                            <div class="views-fav">
                                                <p><i class="fa-solid fa-eye"></i>204</p>
                                                <p><i class="fa-solid fa-heart"></i>14</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hz-line-proposals"></div>
                                    <div class="edit-btn-container">
                                        <button type="button" class="change-btn">Change</button>
                                        <button type="button" class="delete-btn">Delete</button>
                                    </div>
                                </div>
                            </div>
            
                        </div>
                        <div class="proposal-card-info">
                            <div class="image-with-title">
                                <img src="./image/body-armor.jpg" alt="body-armor" class="card-image">
                                <div class="content-align-columm">
                                    <div class="title-amount">
                                        <h2 class="card-title">A vast amount of body armor</h2>
                                        <p class="amount-end">Unlimited</p>
                                    </div>
                                    <div class="add-info">
                                        <div class="subcat-placeholder">
                                            <div class="categories">
                                                <p>Armor &#x2022; Any &#x2022; Body Armor</p>
                                            </div>
                                            <div class="place">
                                                <p><i class="fa-solid fa-location-dot"></i>Lviv, Ukraine</p>
                                            </div>
                                            <div class="deadline">
                                                <p><i class="fa-regular fa-calendar-days"></i>25.05.2023-...</p>
                                            </div>
                                        </div>
                                        <div class="views-placeholder">
                                            <div class="views-fav">
                                                <p><i class="fa-solid fa-eye"></i>10</p>
                                                <p><i class="fa-solid fa-heart"></i>0</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hz-line-proposals"></div>
                                    <div class="edit-btn-container">
                                        <button type="button" class="change-btn">Change</button>
                                        <button type="button" class="delete-btn">Delete</button>
                                    </div>
                                </div>
                            </div>
            
                        </div>
                    </div>
                </div>
            </main>
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
        </div>
    </div>
    <script>
        document.getElementById("btn-sign-in").onclick = () => location.href = "./log-in.php";
    </script>
</body>
</html>
