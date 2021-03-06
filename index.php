<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    $subject = "Order SVCC Medan Products";

    $mail_header = "From:" . $name . "<" . $email . ">" . "<" . $phone . ">\r\n";

    $recipient = "tamaskywalker2@gmail.com";

    mail($recipient, $subject, $message, $mail_header)
        or die("Error!");

    echo "Mail sent! Thank you, $name! We will reply your mail ASAP!";
}
?>

<!DOCTYPE html>
<html>

<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
    <link rel="stylesheet" href="css/style.css">

    <!-- font -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Red+Hat+Display:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- icon -->
    <link rel="apple-touch-icon" sizes="180x180" href="icon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="icon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="icon/favicon-16x16.png">
    <link rel="manifest" href="icon/site.webmanifest">
    <link rel="mask-icon" href="icon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SVCC Medan</title>
</head>

<body id="home" class="scrollspy">
    <!-- Navbar -->
    <div class="navbar-fixed">
        <ul id="dropdown1" class="dropdown-content">
            <li><a href="#!" style="color:#37474f;">Coming Soon</a></li>
            <li><a href="#!" style="color:#37474f;">Coming Soon</a></li>
            <li class="divider"></li>
            <li><a href="#!" style="color:#37474f;">Coming Soon</a></li>
        </ul>
        <nav class="#37474f blue-grey darken-3">
            <div class="container">
                <div class="nav-wrapper">
                    <a href="#home" class="brand-logo"><img src="img/ss/12.png" class="responsive-img" alt=""></a>
                    <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">dehaze</i></a>
                    <ul class="right hide-on-med-and-down">
                        <li><a href="#about" style="font-family: 'Red Hat Display', sans-serif; font-weight: bold;">About Us</a></li>
                        <li><a href="#clients" style="font-family: 'Red Hat Display', sans-serif; font-weight: bold;">Clients</a></li>
                        <li><a href="#services" style="font-family: 'Red Hat Display', sans-serif; font-weight: bold;">Services</a></li>
                        <li><a href="#portfolio" style="font-family: 'Red Hat Display', sans-serif; font-weight: bold;">Portfolio</a></li>
                        <li><a href="#contact" style="font-family: 'Red Hat Display', sans-serif; font-weight: bold;">Contact Us</a></li>
                        <li><a class="dropdown-trigger" href="#!" data-target="dropdown1" style="font-family: 'Red Hat Display', sans-serif; font-weight: bold;">Coming Soon<i class="material-icons right">arrow_drop_down</i></a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <!-- Side Nav -->
    <ul class="sidenav" id="mobile-nav">
        <li><a href="#about" style="font-family: 'Red Hat Display', sans-serif; ">About Us</a></li>
        <li><a href="#clients" style="font-family: 'Red Hat Display', sans-serif;">Clients</a></li>
        <li><a href="#services" style="font-family: 'Red Hat Display', sans-serif;">Services</a></li>
        <li><a href="#portfolio" style="font-family: 'Red Hat Display', sans-serif;">Portfolio</a></li>
        <li><a href="#contact" style="font-family: 'Red Hat Display', sans-serif;">Contact Us</a></li>
    </ul>

    <!-- Slider -->
    <div class="slider">
        <ul class="slides">
            <li>
                <img src="img/ss/10.jpg" style="filter: grayscale(1); opacity: 0.8 !important;">
                <div class="light-blue-text caption right-align">
                    <h3 style="font-family: 'Red Hat Display', sans-serif; font-weight: bold;">SVCC Medan</h3>
                    <h5 class="red-text" style="font-family: 'Nunito', sans-serif;">A Game-Changer for Your Virtual Event</h5>
                    <h6 class="white-text" style="font-family: 'Nunito', sans-serif;">Wujudkan pengalaman imersif dengan teknologi virtual pada event Anda</h6>
                </div>
            </li>
            <li>
                <img src="img/ss/6.jpg" style="filter: grayscale(1); opacity: 0.8 !important;">
                <div class="light-blue-text caption bottom-align">
                    <h3 style="font-family: 'Red Hat Display', sans-serif; font-weight: bold;">SVCC Medan</h3>
                    <h5 class="red-text" style="font-family: 'Nunito', sans-serif;">A Game-Changer for Your Virtual Event</h5>
                    <h6 class="white-text" style="font-family: 'Nunito', sans-serif;">Wujudkan pengalaman imersif dengan teknologi virtual <br> pada event Anda</h6>
                </div>
            </li>
            <li>
                <img src="img/ss/11.jpg" style="filter: grayscale(1); opacity: 0.8 !important;">
                <div class="light-blue-text caption center-align">
                    <h3 style="font-family: 'Red Hat Display', sans-serif; font-weight: bold;">SVCC Medan</h3>
                    <h5 class="red-text" style="font-family: 'Nunito', sans-serif;">A Game-Changer for Your Virtual Event</h5>
                    <h6 class="white-text" style="font-family: 'Nunito', sans-serif;">Wujudkan pengalaman imersif dengan teknologi virtual pada event Anda</h6>
                </div>
            </li>
        </ul>
    </div>

    <!-- About -->
    <div id="about" class="about scrollspy">
        <div class="container">
            <div class="row">
                <h3 class="center grey-text text-darken-3" style="font-family: 'Red Hat Display', sans-serif; font-weight: bold;">About Us</h3>
                <div class="col m6 s12">
                    <h5 style="font-family: 'Red Hat Display', sans-serif; font-weight: bold;">We Are Professionals</h5>
                    <p class="light justify" style="font-family: 'Nunito', sans-serif;">SVCC adalah platform manajemen event secara virtual mulai dari konferensi, webinar hingga pameran virtual. Melalui kolaborasi, kami ingin menjadi jembatan bagi para perusahaan hingga institusi untuk membuat acara virtual lebih cerdas dan efisien.
                    </p>
                </div>
                <div class="col m6 s12 light">
                    <p style="font-family: 'Nunito', sans-serif; font-weight: bold;">Virtual Event Organizing</p>
                    <div class="progress">
                        <div class="determinate" style="width: 90%"></div>
                    </div>
                    <p style="font-family: 'Nunito', sans-serif; font-weight: bold;">Virtual Event Design</p>
                    <div class="progress">
                        <div class="determinate" style="width: 87%"></div>
                    </div>
                    <p style="font-family: 'Nunito', sans-serif; font-weight: bold;">Webinar Organizing</p>
                    <div class="progress">
                        <div class="determinate" style="width: 85%"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Clients -->
    <div id="clients" class="parallax-container scrollspy">
        <div class="parallax"><img src="img/ss/8.jpg"></div>

        <div class="container clients">
            <h3 class="teksC center light-blue-text" style="font-family: 'Red Hat Display', sans-serif; font-weight: bold;">Our Clients</h3>
            <br>
            <div class="row">
                <div class="col m4 s12 center">
                    <img src="img/clients/athon-official.png" alt="1" style="margin-top:15px;">
                </div>
                <div class="col m4 s12 center">
                    <img src="img/clients/fina-official.png" alt="1" style="margin-top:15px;">
                </div>
                <div class="col m4 s12 center">
                    <img src="img/clients/itdri.png" alt="1">
                </div>
            </div>
            <div class="row">
                <div class="col m3 s12 center">
                </div>
                <div class="col m3 s12 center">
                    <img src="img/clients/bri.png" alt="1" style="margin-top:25px;">
                </div>
                <div class="col m3 s12 center">
                    <img src="img/clients/itb.png" alt="1">
                </div>
                <div class="col m3 s12 center">
                </div>
            </div>
        </div>
    </div>

    <!-- Services -->
    <section id="services" class="services grey lighten-3 scrollspy">
        <div class="container">
            <h3 class="center grey-text text-darken-3" style="font-family: 'Red Hat Display', sans-serif; font-weight: bold;">Our Services</h3>
            <div class="row">
                <div class="col m6 s12">
                    <div class="card-panel center">
                        <i class="fa-solid fa-tv medium"></i>
                        <h5 style="font-family: 'Red Hat Display', sans-serif; font-weight: bold;">Webinar</h5>
                        <p style="font-family: 'Nunito', sans-serif;">Hadirkan Webinar dengan jangkauan lebih dari 6000+ pengunjung yang dilengkapi berbagai fitur interaktif dan gamifikasi.</p>
                    </div>
                </div>
                <div class="col m6 s12">
                    <div class="card-panel center">
                        <i class="fa-solid fa-vr-cardboard medium"></i>
                        <h5 style="font-family: 'Red Hat Display', sans-serif; font-weight: bold;">Virtual Expo</h5>
                        <p style="font-family: 'Nunito', sans-serif;">Berikan pengalaman imersif pada pengunjung acara dengan desain 3D beresolusi hingga 4K, latar musik dan terintegrasi dengan media sosial.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio -->
    <section id="portfolio" class="portfolio scrollspy">
        <div class="container">
            <h3 class="center grey-text text-darken-3" style="font-family: 'Red Hat Display', sans-serif; font-weight: bold;">Portfolio</h3>
            <div class="row">
                <div class="col m4 s12">
                    <img class="materialboxed responsive-img" src="img/portfolio/7lil.png" alt="1.jpg">
                    <p class="center"><a href="https://fcc-itdri.id/" target="_blink" style="font-family: 'Nunito', sans-serif;">Fisheries Cyber Center (FCC)</a></p>
                </div>
                <div class="col m4 s12">
                    <img class="materialboxed responsive-img" src="img/portfolio/8lil.png" alt="2.jpg">
                    <p class="center"><a href="https://fcc-itdri.id/webinar/video" target="_blink" style="font-family: 'Nunito', sans-serif;">SBM ITB Demo Day</a></p>
                </div>
                <div class="col m4 s12">
                    <img class="materialboxed responsive-img" src="img/portfolio/9lil.png" alt="3.jpg">
                    <p class="center"><a href="https://fcc-itdri.id/amazing-race" target="_blink" style="font-family: 'Nunito', sans-serif;">ITDRI Fest</a></p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Us -->
    <section id="contact" class="contact grey lighten-3 scrollspy">
        <div class="container">
            <h3 class="center grey-text text-darken-3" style="font-family: 'Red Hat Display', sans-serif; font-weight: bold;">Contact Us</h3>
            <div class="row">
                <div class="col m5 s12">
                    <div class="card-panel blue-grey darken-3 center white-text">
                        <i class="medium material-icons">call</i>
                        <h5 style="font-family: 'Red Hat Display', sans-serif;">Contact</h5>
                        <p>You can contact us on <a href="https://wa.wizard.id/7e411b" target="_blink" style="font-family: 'Nunito', sans-serif;">WhatsApp</a></p>
                    </div>
                    <ul class="collection with-header">
                        <li class="collection-header">
                            <h4 style="font-family: 'Nunito', sans-serif; font-weight: bold;">Our Office</h4>
                        </li>
                        <li class="collection-item" style="font-family: 'Nunito', sans-serif;">SVCC Medan</li>
                        <li class="collection-item"><a href="https://goo.gl/maps/hqndzRQx48HYoJ5P6" target="_blink" style="font-family: 'Nunito', sans-serif;">Jl. Prof. HM. Yamin Sh No.2, Kesawan, Kec. Medan Bar., Kota Medan, Sumatera Utara 20236</a></li>
                        <li class="collection-item" style="font-family: 'Nunito', sans-serif;">North Sumatera, Indonesia</li>
                        <li class="collection-item">
                            <a href="https://www.instagram.com/svcc.id/" target="_blink"><i class="fa-brands fa-instagram" style="font-size:40px; color:#37474f"></i></a>
                            <a href="https://www.youtube.com/channel/UCLmiW7rqeyxKAmo_TSCQbZg" target="_blink"><i class="fa-brands fa-youtube" style="font-size:40px; color:#37474f; margin-left: 10px;"></i></a>
                            <a href="https://www.linkedin.com/company/smarteye-id/" target="_blink"><i class="fa-brands fa-linkedin" style="font-size:40px; color:#37474f; margin-left: 10px;"></i></a>
                            <i class="fa-brands fa-tiktok" style="font-size:35px; color:#37474f; margin-left: 10px;"></i>
                        </li>
                    </ul>
                </div>

                <div class="col m7 s12">
                    <form action="" method="post">
                        <div class="card-panel">
                            <h5 style="font-family: 'Nunito', sans-serif; font-weight: bold;">Please fill in this form!</h5>
                            <div class="input-field">
                                <input type="text" name="name" id="name" required class="validate">
                                <label for="name" style="font-family: 'Nunito', sans-serif;">Name</label>
                            </div>
                            <div class="input-field">
                                <input type="email" name="email" id="email" class="validate">
                                <label for="email" style="font-family: 'Nunito', sans-serif;">Email</label>
                            </div>
                            <div class="input-field">
                                <input type="text" name="phone" id="phone">
                                <label for="phone" style="font-family: 'Nunito', sans-serif;">Phone Number</label>
                            </div>
                            <div class="input-field">
                                <textarea name="message" id="message" class="materialize-textarea"></textarea>
                                <label for="message" style="font-family: 'Nunito', sans-serif;">Message</label>
                            </div>
                            <button type="submit" name="submit" value="submit" class="btn blue-grey darken-3">Send</button>
                        </div>
                </div>
                </form>
            </div>
        </div>
        </div>
        </div>
    </section>

    <footer>
        <div class="foot blue-grey darken-3 white-text center" style="font-family: 'Nunito', sans-serif;">Copyright&copy 2022 | SVCC Medan</div>
    </footer>

    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script src="https://kit.fontawesome.com/be2c06ee43.js" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
</body>

</html>