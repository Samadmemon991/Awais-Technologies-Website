<?php
require_once 'dbcon.php';

function getStudents($class, $conn)
{
    $sql = "SELECT COUNT(`StudentId`) FROM `student` WHERE class=" . $class;
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    echo $row["COUNT(`StudentId`)"];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Awais Schools</title>

    <link rel="stylesheet" href="css/indexStyle.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- <link href="https://fonts.googleapis.com/css2?family=Karla:wght@400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Asap:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Asap&family=Karla:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400&display=swap" rel="stylesheet"> -->

    <link href="https://fonts.googleapis.com/css2?family=Asap:wght@400;700&family=Karla:wght@300&family=Rubik:wght@400;800&display=swap" rel="stylesheet">

    <script>
        $(document).ready(function() {
            $("#menuTrigger").click(function() {

                $("#navMenu").toggle("slide ");
            });
        });
    </script>




</head>

<body>

    <header>
        <img src="media/logo.png" width="130px">
        <div>
            <a href="login.php">
                <p> <i class="fas fa-user"></i> Member Login</p>
            </a>
        </div>
    </header>

    <div id="blue">

        <nav class="navbar">
            <div>
                <p>MENU</p>
                <button id="menuTrigger">
                    <i class="fas fa-bars"></i>
                </button>
            </div>

            <div id="navMenu">
                <ul class="navLinksList">
                    <li><a href="#">About</a></li>
                    <li><a href="#">Calendars</a></li>
                    <li><a href="#">Academics</a></li>
                    <li><a href="#">Media</a></li>
                    <li><a href="#">Admissions</a></li>
                    <li><a href="#">Resources</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>

        </nav>

        <div>

            <h2 style="font-weight:lighter;">Awais Schools</h2>
            <h1 style="font-weight: bolder; margin: -10px auto;">Transforming Lives Since 2018</h1>
            <h2 style="font-weight:lighter;">A Journey To Excellence</h2>

            <button>LEARN MORE</button>

        </div>

    </div>

    <div id="dont-miss">
        <span>
            <h1>DON’T MISS</h1>
            <h1>THE CHANCE</h1>
        </span>
        <h3>Your new career starts with us</h3>
        <!-- <span>
            <div>

                <h4 style="color: #0080cf;">. com</h4>
                <p>$10.99</p>
            </div>
            <div>

                <h4 style="color: #60238c;">. net</h4>
                <p>$13.99</p>
            </div>
            <div>

                <h4>. org</h4>
                <p>$12.49</p>
            </div>
        </span> -->
        <!-- <div>
            <form action="#">

                <input type="text" placeholder="We help find the best domain">
                <button>Search</button>
                <span>

                    <label>
                        <input type="radio" name="check" value="always" />Recommendation
                    </label>
                    <label>
                        <input type="radio" name="check" value="never" />is Registered?
                    </label>
                    <label>
                        <input type="radio" name="check" value="costChange" />Check Whois
                    </label>
                </span>
            </form>
        </div> -->


    </div>
    <div id="t1" class="center-large">
        <h3 style="display: inline;"> A MODERN, GLOBAL SCHOOL FOR A MODERN</h3>
        <h3 style="color: #103dbe; display: inline">GLOBAL ACADEMIC EXPERIENCE.</h3>
        <p style="color: #666; display: block;font-weight: lighter;font-size: large;"> Education is a commitment to excellence in Teaching and Learning..</p>
    </div>

    <div class="cards">
        <!-- grade 1 -->
        <div>
            <img src="media/1.png">
            <h4>Grade 1</h4>
            <span>
                <p>Enrolled Students:</p>
                <p>
                    <?php getStudents(1, $conn); ?>
                </p>
            </span>
            <span>
                <p>Total subjects:</p>
                <p>5</p>
            </span>
            <span>
                <p>Class teacher:</p>
                <p>John Doe</p>
            </span>
            <p>Only</p>
            <span>
                <p style="color: #666666;font-size: 24px;">Rs.</p>
                <h2> 500</h2>
            </span>
            <p> PER MONTH</p>

            <form  action="ViewStudents.php" method="get">
            <button style="padding: 15px 30px; margin-bottom: 15px;" name="grade1" type="submit">Manage Class</button>
            <button id="yellow-btn">Generate challan</button>
            </form>

        </div>

        <!-- grade 2 -->
        <div>
            <img src="media/2.png">
            <h4>Grade 2</h4>
            <span>
                <p>Enrolled Students:</p>
                <p>
                    <?php getStudents(2, $conn); ?>
                </p>
            </span>
            <span>
                <p>Total subjects:</p>
                <p>5</p>
            </span>
            <span>
                <p>Class teacher:</p>
                <p>John Doe</p>
            </span>
            <p>Only</p>
            <span>
                <p style="color: #666666;font-size: 24px;">Rs.</p>
                <h2> 500</h2>
            </span>
            <p> PER MONTH</p>
            <form  action="ViewStudents.php" method="get">
            <button style="padding: 15px 30px; margin-bottom: 15px;" name="grade2" type="submit">Manage Class</button>
            <button id="yellow-btn">Generate challan</button>
            </form>

        </div>

        <!-- grade 3 -->
        <div>
            <img src="media/3.png">
            <h4>Grade 3</h4>
            <span>
                <p>Enrolled Students:</p>
                <p>
                    <?php getStudents(3, $conn); ?>
                </p>
            </span>
            <span>
                <p>Total subjects:</p>
                <p>5</p>
            </span>
            <span>
                <p>Class teacher:</p>
                <p>John Doe</p>
            </span>
            <p>Only</p>
            <span>
                <p style="color: #666666;font-size: 24px;">Rs.</p>
                <h2> 500</h2>
            </span>
            <p> PER MONTH</p>
            <form  action="ViewStudents.php" method="get">
            <button style="padding: 15px 30px; margin-bottom: 15px;" name="grade3" type="submit">Manage Class</button>
            <button id="yellow-btn">Generate challan</button>
            </form>

        </div>

        <!-- grade 4 -->
        <div>
            <img src="media/4.png">
            <h4>Grade 4</h4>
            <span>
                <p>Enrolled Students:</p>
                <p>
                    <?php getStudents(4, $conn); ?>
                </p>
            </span>
            <span>
                <p>Total subjects:</p>
                <p>5</p>
            </span>
            <span>
                <p>Class teacher:</p>
                <p>John Doe</p>
            </span>
            <p>Only</p>
            <span>
                <p style="color: #666666;font-size: 24px;">Rs.</p>
                <h2> 500</h2>
            </span>
            <p> PER MONTH</p>
            <form  action="ViewStudents.php" method="get">
            <button style="padding: 15px 30px; margin-bottom: 15px;" name="grade4" type="submit">Manage Class</button>
            <button id="yellow-btn">Generate challan</button>
            </form>

        </div>

        <!-- grade 5 -->
        <div>
            <img src="media/5.png">
            <h4>Grade 5</h4>
            <span>
                <p>Enrolled Students:</p>
                <p>
                    <?php getStudents(5, $conn); ?>
                </p>
            </span>
            <span>
                <p>Total subjects:</p>
                <p>5</p>
            </span>
            <span>
                <p>Class teacher:</p>
                <p>John Doe</p>
            </span>
            <p>Only</p>
            <span>
                <p style="color: #666666;font-size: 24px;">Rs.</p>
                <h2> 600</h2>
            </span>
            <p> PER MONTH</p>
            <form  action="ViewStudents.php" method="get">
            <button style="padding: 15px 30px; margin-bottom: 15px;" name="grade5" type="submit">Manage Class</button>
            <button id="yellow-btn">Generate challan</button>
            </form>

        </div>

        <!-- grade 6 -->
        <div>
            <img src="media/6.png">
            <h4>Grade 6</h4>
            <span>
                <p>Enrolled Students:</p>
                <p>
                    <?php getStudents(6, $conn); ?>
                </p>
            </span>
            <span>
                <p>Total subjects:</p>
                <p>5</p>
            </span>
            <span>
                <p>Class teacher:</p>
                <p>John Doe</p>
            </span>
            <p>Only</p>
            <span>
                <p style="color: #666666;font-size: 24px;">Rs.</p>
                <h2> 600</h2>
            </span>
            <p> PER MONTH</p>
            <form  action="ViewStudents.php" method="get">
            <button style="padding: 15px 30px; margin-bottom: 15px;" name="grade6" type="submit">Manage Class</button>
            <button id="yellow-btn">Generate challan</button>
            </form>

        </div>

        <!-- grade 7 -->
        <div>
            <img src="media/7.png">
            <h4>Grade 7</h4>
            <span>
                <p>Enrolled Students:</p>
                <p>
                    <?php getStudents(7, $conn); ?>
                </p>
            </span>
            <span>
                <p>Total subjects:</p>
                <p>5</p>
            </span>
            <span>
                <p>Class teacher:</p>
                <p>John Doe</p>
            </span>
            <p>Only</p>
            <span>
                <p style="color: #666666;font-size: 24px;">Rs.</p>
                <h2> 800</h2>
            </span>
            <p> PER MONTH</p>
            <form  action="ViewStudents.php" method="get">
            <button style="padding: 15px 30px; margin-bottom: 15px;" name="grade7" type="submit">Manage Class</button>
            <button id="yellow-btn">Generate challan</button>
            </form>

        </div>

        <!-- grade 8 -->
        <div>
            <img src="media/8.png">
            <h4>Grade 8</h4>
            <span>
                <p>Enrolled Students:</p>
                <p>
                    <?php getStudents(8, $conn); ?>
                </p>
            </span>
            <span>
                <p>Total subjects:</p>
                <p>5</p>
            </span>
            <span>
                <p>Class teacher:</p>
                <p>John Doe</p>
            </span>
            <p>Only</p>
            <span>
                <p style="color: #666666;font-size: 24px;">Rs.</p>
                <h2> 800</h2>
            </span>
            <p> PER MONTH</p>
            <form  action="ViewStudents.php" method="get">
            <button style="padding: 15px 30px; margin-bottom: 15px;" name="grade8" type="submit">Manage Class</button>
            <button id="yellow-btn">Generate challan</button>
            </form>

        </div>


    </div>


    <!-- <div class="center-large" id="t2">
        <h3 style="display: inline;"> WHY CHOOSE</h3>
        <h3 style="color: #103dbe; display: inline"> SERVERSEA</h3>
        <h3 style="display: inline;"> AS YOUR</h3>
        <h3 style="color: #103dbe; display: inline"> WEB HOSTING</h3>
        <h3 style="display: inline;"> PROVIDER?</h3>
        <p style="color: #666; display: block;font-weight: lighter;font-size: large; margin-top: 10px;">We provide the
            best web hosting services from small business to entrepreneurs.</p>
    </div> -->


    <!-- <div class="why-cards">
        <div class="cirle-img left-img">
            <img src="https://www.serversea.com/images/home/webhost-icon.png">
        </div>
        <div class="left-text">
            <h4>WORLD'S FASTEST GROWING WEB HOSTING COMPANY</h4>
            <p>ServerSea is the fastest-growing web hosting company across the globe. Since 2003 ServerSea has
                successfully
                managed to establish its brand name in the world of web hosting. ServerSea offers reliable and cheap web
                hosting, domain name registration, VPS, dedicated servers, reseller hosting and SSL certificates.</p>
        </div>
    </div>


    <div class="why-cards">
        <div class="right-text">
            <h4>OFFERING 30 DAYS TRIAL HOSTING</h4>
            <p>At ServerSea, we understand that sometimes you can’t evaluate the quality of service until you try it.
                This is why, we offer our customers complete flexibility to cancel the plan within 30 days and get a
                full refund. Shoot us a quick message on our help desk and let us help you get things rolling.</p>
        </div>
        <div class="cirle-img right-img">
            <img src="https://www.serversea.com/images/home/days-icon.png">
        </div>
    </div>


    <div class="why-cards">
        <div class="cirle-img left-img">
            <img src="https://www.serversea.com/images/home/free-domain-icon.png">
        </div>
        <div class="left-text">
            <h4>WE ARE OFFERING FREE DOMAIN FOR LIFE</h4>
            <p>We offer FREE domain registration on all our selected shared hosting plans. With ServerSea, you can enjoy
                hosting and a free domain registration with a TLD of (.COM, .NET or .ORG). Book our domain registration
                services today and experience super-fast website speed and top-notch service.</p>
        </div>
    </div>


    <div class="why-cards">
        <div class="right-text">
            <h4>FREE DOMAIN TRANSFER</h4>
            <p>At ServerSea, apart from focusing on site speed, security and support we also offer 100% FREE domain
                transfer services. If you have an existing domain and would like to transfer it to our servers, we will
                do it for you absolutely free. Need more clarity around how it’s done? Get in touch with our team today!
            </p>
        </div>
        <div class="cirle-img right-img">
            <img src="https://www.serversea.com/images/home/transfer-icon.png">
        </div>
    </div>


    <div class="why-cards">
        <div class="cirle-img left-img">
            <img src="https://www.serversea.com/images/home/website-icon.png">
        </div>
        <div class="left-text">
            <h4>FREE WEBSITE MIGRATION</h4>
            <p>Our Platinum Plan now allows you to move your website to ServerSea without any additional costs. By
                keeping everything centralized in a single place, our Platinum Plan saves you from all the hassles. Our
                experts are available 24/7 to ensure you have a great experience while moving your website on our
                servers.</p>
        </div>

    </div> -->

    <div class="grey-clouds">
        <h1>WHAT WE GUARANTEE ?</h1>
        <div class="gurantee-box">
            <div>
                <img style="width: 150px;" src="media/target.png">
                <h2>Our Mission</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
            </div>
            <div>
                <img style="width: 150px;" src="media/vision.png">
                <h2>Our Vision</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
            </div>
        </div>
    </div>


    <div id="t1" style="text-align: center; font-family: 'rubik';font-weight: bolder;">
        <!-- <h1 style="display: inline;">OUR</h1>
        <h1 style="display: inline; color: #103dbe;">BEST SERVICE</h1> -->
    </div>

    <!-- <div class="services">

        <div>
            <img src="https://www.serversea.com/images/home/hosting-btm-icon.png">
            <h2>Web Hosting</h2>
            <p>Now you can host your small to medium websites with our budget-friendly web hosting plans. Enjoy a
                30-day, risk free trial along with top-class support and secure hosting solutions in both Linux and
                Windows.</p>
        </div>

        <div>
            <img src="https://www.serversea.com/images/home/domain-btm-icon.png">
            <h2>Domain Registration</h2>
            <p>We are here to help you acquire a domain name before someone else grab it. From generic domain TLD’s to
                country specific TLD’s, you can register your domain name with us at the most economical prices.</p>
        </div>

        <div>
            <img src="https://www.serversea.com/images/home/vps-btm-icon.png">
            <h2>VPS Hosting</h2>
            <p>Our managed VPS Hosting plans from static to cloud are available in varied sizes built on robust
                infrastructure and with different technical components to meet your web requirements.</p>
        </div>


        <div>
            <img src="https://www.serversea.com/images/home/reseller-btm-icon.png">
            <h2>Reseller Hosting</h2>
            <p>Start and build your own web hosting business. Become ServerSea reseller by selling our web hosting
                services to your customers. Operate under your own brand name and enjoy complete control..</p>
        </div>

        <div>
            <img src="https://www.serversea.com/images/home/reseller-btm-icon.png">
            <h2>Dedicated Servers</h2>
            <p>Want complete control of your web hosting server? With our robust and reliable infrastructure for
                dedicated servers, you can enjoy uninterrupted access to your server and its resources.</p>
        </div>

        <div>
            <img src="https://www.serversea.com/images/home/reseller-btm-icon.png">
            <h2>SSL Certificates</h2>
            <p>We know how much important it is for you to keep your site secure. Now you can purchase professional and
                trusted SSL Certificates from ServerSea and secure your site within a few minutes.</p>
        </div>


    </div> -->

    <!-- <div id="footer-search">
        <div>
            <h1 style="font-size: 3.7em;">SIGNUP</h1>
            <h3 style="font-size: 1.5em;">FOR NEWSLETTER</h3>

        </div>

        <form action="#">
            <input type="text" placeholder="Type your email address">
            <button style="display: none;">SUBSCRIBE!</button>
        </form>
    </div> -->

    <div id="footer">
        <div>
            <img src="media/logo.png">
        </div>

        <div class="footer-links">
            <ul>
                <li><a href="#">About us</a></li>
                <li><a href="#">Messages</a></li>
                <li><a href="#">Admissions</a></li>
                <li><a href="#">Calendars</a></li>
                <li><a href="#">Health and Support</a></li>
                <li><a href="#">Media</a></li>
                <li><a href="#">Why Awais Technologies</a></li>
            </ul>
        </div>

        <div class="footer-links">
            <ul>
                <li><a href="#">FAQ</a></li>
                <li><a href="#">Legal</a></li>
                <li><a href="#">Terms of Services</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Downloads</a></li>
                <li><a href="#">Blog</a></li>
            </ul>
        </div>


        <div id="footer-buttons">
            <a href="#"> <img src="https://www.serversea.com/images/home/fb-btn.png"></a>
            <a href="#"> <img src="https://www.serversea.com/images/home/ttr-btn.png"></a>
        </div>

    </div>

    <div id="footer-cr">
        <p>© Copyright 2003-2021 Awais Schools. All rights reserved</p>

        <a href="">
            <p>Design & Developed by USS</p>
        </a>
    </div>





</body>

</html>