<?php

    if ($_POST) {
        $lang = $_POST['lang'];
    }

    else {
        $lang = $_COOKIE['lang'] ?? 'fr';
    }

    setcookie('lang', $lang);

    function _read($data, $lang) {
        $content = file_get_contents('lang/' . $lang . '.json');
        $json = json_decode($content, true);

        echo $json[$data];
    }
?>

<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Germinator Blog</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="images/favicon.png" rel="icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="css/aos.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-icons.css" rel="stylesheet">
    <link href="css/boxicons.min.css" rel="stylesheet">
    <link href="css/glightbox.min.css" rel="stylesheet">
    <link href="css/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>

    <!-- ======= Mobile nav toggle button ======= -->
    <i class="bx bx-menu mobile-nav-toggle d-xl-none"></i>
    <!-- ======= Header ======= -->
    <header id="header" class="d-flex flex-column justify-content-center">

        <div style="position: fixed; top: 10px; right: 10px;">
            <form method="POST" action="">
                <label for="lang"></label>
                <select id="lang" name="lang" class="custom-select" style="border-color: darkgrey; border-radius: 5px;" onchange="this.form.submit()">
                    <option value="fr" <?php if($lang == 'fr') echo 'selected'; ?> id="FR"></option>
                    <option value="en" <?php if($lang == 'en') echo 'selected'; ?> id="EN"></option>
                </select>
            </form>
        </div>

        <nav id="navbar" class="navbar nav-menu">
            <ul>
                <li><a href="#hero" class="nav-link scrollto"><i class="bx bx-home"></i> <span><?php _read('home', $lang); ?></span></a></li>
                <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span><?php _read('about', $lang); ?></span></a></li>
                <li><a href="#skills" class="nav-link scrollto"><i class="bx bx-briefcase-alt-2"></i>
                        <span><?php _read('skills', $lang); ?></span></a></li>
                <li><a href="#resume" class="nav-link scrollto"><i class="bx bx-file"></i> <span><?php _read('cv', $lang); ?></span></a></li>
                <li><a href="#portfolio" class="nav-link scrollto"><i class="bx bx-wallet"></i> <span><?php _read('projects', $lang); ?></span></a>
                </li>
                <li><a href="#services" class="nav-link scrollto"><i class="bx bxs-graduation"></i>
                        <span><?php _read('honors', $lang); ?></span></a></li>
                <!-- <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li> -->
            </ul>
        </nav>
        <!-- .nav-menu -->

    </header>
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex flex-column justify-content-center">
        <div class="container" data-aos="zoom-in" data-aos-delay="100">
            <h1>Agbetogor Germain</h1>
            <h1 class="mt-4" style="color: #0563bb">Germinator</h1>
            <p><?php _read('me', $lang); ?> <span class="typed"
                    data-typed-items="<?php _read('dev', $lang); ?> Web, <?php _read('dev', $lang); ?> API, <?php _read('dev', $lang); ?> Mobile"></span></p>
            <div class="social-links">
                <a href="#" class="twitter" target="_blank"><i class="bx bxl-twitter"></i></a>
                <!-- <a href="#" class="facebook" target="_blank"><i class="bx bxl-facebook"></i></a> -->
                <!-- <a href="#" class="instagram" target="_blank"><i class="bx bxl-instagram"></i></a> -->
                <a href="#" class="google-plus" target="_blank"><i class="bx bxl-skype"></i></a>
                <a href="https://www.linkedin.com/in/germain-agbetogor" class="linkedin" target="_blank"><i
                        class="bx bxl-linkedin"></i></a>
            </div>
        </div>
    </section>
    <!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2><?php _read('about-m', $lang); ?></h2>
                </div>

                <div class="row">
                    <div class="col-lg-4">
                        <img src="images/profile.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-8 pt-4 pt-lg-0 content">
                        <h3><?php _read('dev', $lang); ?> FullStack Web &amp; Mobile.</h3>
                        <div class="row mt-5">
                            <div class="col-lg-6">
                                <ul>
                                    <li><i class="bx bx-chevron-right"></i> <strong><?php _read('birthday', $lang); ?> :</strong>
                                        <span>28 Mai 1997</span></li>
                                    <li><i class="bx bx-chevron-right"></i> <strong><?php _read('phone', $lang); ?> :</strong>
                                        <span>+225 07 49 01 29 66</span></li>
                                    <li><i class="bx bx-chevron-right"></i> <strong><?php _read('address', $lang); ?> :</strong> <span>Abidjan,
                                            Côte-d'Ivoire</span></li>
                                    <li><i class="bx bx-chevron-right"></i> <strong>Employeur :</strong>
                                        <span>CinetPay</span></li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul>
                                    <li><i class="bx bx-chevron-right"></i> <strong><?php _read('age', $lang); ?> :</strong> <span>24 <?php _read('old', $lang); ?></span>
                                    </li>
                                    <li><i class="bx bx-chevron-right"></i> <strong><?php _read('level', $lang); ?> :</strong> <span><?php _read('software', $lang); ?></span></li>
                                    <li><i class="bx bx-chevron-right"></i> <strong><?php _read('email', $lang); ?> :</strong>
                                        <span>agbegermain@gmail.com</span></li>
                                    <li><i class="bx bx-chevron-right"></i> <strong>Freelance :</strong> <span>Sinka
                                            Codes</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- End About Section -->

        <!-- ======= Skills Section ======= -->
        <section id="skills" class="skills section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2><?php _read('skills', $lang); ?></h2>
                </div>

                <div class="row skills-content">

                    <div class="col-lg-6">

                        <div class="progress">
                            <span class="skill">HTML <i class="val">80%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill">CSS <i class="val">80%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill">JavaScript <i class="val">60%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill">SQL <i class="val">80%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill">UML <i class="val">50%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-6">

                        <div class="progress">
                            <span class="skill">JAVA <i class="val">40%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill">PHP <i class="val">70%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill">Laravel <i class="val">60%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill">Flutter <i class="val">50%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill">Git <i class="val">70%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </section>
        <!-- End Skills Section -->

        <!-- ======= Resume Section ======= -->
        <section id="resume" class="resume">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2><?php _read('cv-m', $lang); ?></h2>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <h3 class="resume-title"><?php _read('formation-s', $lang); ?></h3>
                        <div class="resume-item">
                            <h4><?php _read('engineer', $lang); ?></h4>
                            <h5>2016 - 2019</h5>
                            <p><em><?php _read('engineer-c', $lang); ?></em></p>
                            <p><?php _read('engineer-m', $lang); ?>
                            </p>
                        </div>
                        <div class="resume-item">
                            <h4><?php _read('bachelor', $lang); ?></h4>
                            <h5>2010 - 2014</h5>
                            <p><em>Lycée Municipal de Port-Bouet, Abidjan, Côte-d'Ivoire</em></p>
                            <p><?php _read('bachelor-m', $lang); ?></p>
                        </div>

                        <h3 class="resume-title"><?php _read('projects-s', $lang); ?></h3>
                        <div class="resume-item">
                            <h4><?php _read('dev-m', $lang); ?> &amp; Designs</h4>
                            <h5>2016 - 2019</h5>
                            <ul>
                                <li><?php _read('school-1', $lang); ?></li>
                                <li><?php _read('school-2', $lang); ?></li>
                                <li><?php _read('school-3', $lang); ?></li>
                                <li><?php _read('school-4', $lang); ?></li>
                                <li><?php _read('school-5', $lang); ?></li>
                                <li>Etc ...</li>
                            </ul>
                        </div>

                        <h3 class="resume-title"><?php _read('others', $lang); ?></h3>
                        <div class="resume-item">
                            <h4>Divers </h4>
                            <p>Écoute Active, Bonne Communication, Motivation, Curiosité, Bonne Capacité de Rédaction de
                                Documents, Ingéniosité</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h3 class="resume-title"><?php _read('experience', $lang); ?></h3>
                        <div class="resume-item">
                            <h4><?php _read('studies', $lang); ?> &amp; Développements</h4>
                            <h5>2020 - <?php _read('today', $lang); ?></h5>
                            <p><em>CinetPay, Abidjan, Côte-d'Ivoire </em></p>
                            <ul>
                                <li><?php _read('cp-1', $lang); ?></li>
                                <li><?php _read('cp-2', $lang); ?></li>
                                <li><?php _read('cp-3', $lang); ?></li>
                                <li><?php _read('cp-4', $lang); ?></li>
                                <li><?php _read('dev-m', $lang); ?> Web (Front-Office & back-Office)</li>
                                <li><?php _read('dev-m', $lang); ?> API</li>
                                <li><?php _read('dev-m', $lang); ?> Mobile</li>
                            </ul>
                        </div>
                        <div class="resume-item">
                            <h4><?php _read('studies', $lang); ?></h4>
                            <h5>2019 - 2020</h5>
                            <p><em>Orange IN (Intelligent Network), Abidjan, Côte-d'Ivoire</em></p>
                            <ul>
                                <li><?php _read('orange-1', $lang); ?></li>
                                <li><?php _read('orange-2', $lang); ?></li>
                                <li><?php _read('orange-3', $lang); ?> (Share data, Transfer data, Ask data &
                                    Convert my data)</li>
                                <li><?php _read('orange-4', $lang); ?></li>
                            </ul>
                        </div>

                        <h3 class="resume-title"><?php _read('others', $lang); ?></h3>
                        <div class="resume-item">
                            <h4><?php _read('lang', $lang); ?></h4>
                            <ul>
                                <li><?php _read('lang-en', $lang); ?></li>
                                <li><?php _read('lang-fr', $lang); ?></li>
                            </ul>
                        </div>
                        <div class="resume-item">
                            <h4>Loisirs </h4>
                            <p>Football, Volleyball, Tennis, Basketball, Musique, Programmation</p>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- End Resume Section -->

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2><?php _read('projects', $lang); ?></h2>
                </div>

                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                    <div class="col-lg-4 col-md-6 portfolio-item">
                        <div class="portfolio-wrap">
                            <img src="images/assurance.jpeg" class="img-fluid" alt="Mon Assurance (ASA-CI)">
                            <div class="portfolio-info">
                                <h4>Mon Assurance (ASA-CI)</h4>
                                <p><?php _read('platform', $lang); ?> Web</p>
                                <div class="portfolio-links">
                                    <a href="pages/asa-ci.html" class="portfolio-details-lightbox"
                                        data-glightbox="type: external" title="Mon Assurance (ASA-CI)"><i
                                            class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item">
                        <div class="portfolio-wrap">
                            <img src="images/olam.jpeg" class="img-fluid" alt="OLAM">
                            <div class="portfolio-info">
                                <h4>OLAM</h4>
                                <p><?php _read('platform', $lang); ?> Web</p>
                                <div class="portfolio-links">
                                    <a href="pages/olam.html" class="portfolio-details-lightbox"
                                        data-glightbox="type: external" title="OLAM"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- <div class="col-lg-4 col-md-6 portfolio-item">
                        <div class="portfolio-wrap">
                            <img src="images/digster.jpeg" class="img-fluid" alt="Digster">
                            <div class="portfolio-info">
                                <h4>Digster</h4>
                                <p>Application Web</p>
                                <div class="portfolio-links">
                                    <a href="pages/portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Digster"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div> -->

                    <div class="col-lg-4 col-md-6 portfolio-item">
                        <div class="portfolio-wrap">
                            <img src="images/oneci.jpeg" class="img-fluid" alt="ONECI">
                            <div class="portfolio-info">
                                <h4>ONECI</h4>
                                <p>API</p>
                                <div class="portfolio-links">
                                    <a href="pages/oneci.html" class="portfolio-details-lightbox"
                                        data-glightbox="type: external" title="ONECI"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item">
                        <div class="portfolio-wrap">
                            <img src="images/monitoring.jpeg" class="img-fluid" alt="Monitoring">
                            <div class="portfolio-info">
                                <h4>CinetPay Monitoring</h4>
                                <p>Application Web</p>
                                <div class="portfolio-links">
                                    <a href="pages/monitoring.html" class="portfolio-details-lightbox"
                                        data-glightbox="type: external" title="Monitoring"><i
                                            class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item">
                        <div class="portfolio-wrap">
                            <img src="images/fraud.jpeg" class="img-fluid" alt="<?php _read('frauds', $lang); ?>">
                            <div class="portfolio-info">
                                <h4>CinetPay <?php _read('frauds', $lang); ?></h4>
                                <p>API</p>
                                <div class="portfolio-links">
                                    <a href="pages/fraud.html" class="portfolio-details-lightbox"
                                        data-glightbox="type: external" title="<?php _read('frauds', $lang); ?>"><i
                                            class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item">
                        <div class="portfolio-wrap">
                            <img src="images/8aDix.png" class="img-fluid" alt="8aDix">
                            <div class="portfolio-info">
                                <h4>8aDix</h4>
                                <p>Application Mobile</p>
                                <div class="portfolio-links">
                                    <a href="pages/8aDix.html" class="portfolio-details-lightbox"
                                        data-glightbox="type: external" title="8aDix"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item">
                        <div class="portfolio-wrap">
                            <img src="images/trombinoscope.png" class="img-fluid" alt="Trombinoscope">
                            <div class="portfolio-info">
                                <h4>CinetPay Trombinoscope</h4>
                                <p><?php _read('platform', $lang); ?> Web</p>
                                <div class="portfolio-links">
                                    <a href="pages/trombinoscope.html" class="portfolio-details-lightbox"
                                        data-glightbox="type: external" title="Trombinoscope"><i
                                            class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item">
                        <div class="portfolio-wrap">
                            <img src="images/flutter.png" class="img-fluid" alt="Trombinoscope">
                            <div class="portfolio-info">
                                <h4>CinetPay Flutter</h4>
                                <p>Package</p>
                                <div class="portfolio-links">
                                    <a href="pages/flutter.html" class="portfolio-details-lightbox"
                                        data-glightbox="type: external" title="CinetPay Flutter"><i
                                            class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item">
                        <div class="portfolio-wrap">
                            <img src="https://engineering.fb.com/wp-content/uploads/2012/12/javascript-illustration.png"
                                class="img-fluid" alt="Trombinoscope">
                            <div class="portfolio-info">
                                <h4>CinetPay Seamless</h4>
                                <p>SDK</p>
                                <div class="portfolio-links">
                                    <a href="pages/seamless.html" class="portfolio-details-lightbox"
                                        data-glightbox="type: external" title="CinetPay Seamless"><i
                                            class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- <div class="col-lg-4 col-md-6 portfolio-item">
                        <div class="portfolio-wrap">
                            <img src="images/sococe.jpeg" class="img-fluid" alt="Trombinoscope">
                            <div class="portfolio-info">
                                <h4>SOCOCE</h4>
                                <p>Pateforme Web & Mobile</p>
                                <div class="portfolio-links">
                                    <a href="pages/sococe.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="SOCOCE"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div> -->

                    <div class="col-lg-4 col-md-6 portfolio-item">
                        <div class="portfolio-wrap">
                            <img src="https://mae.cinetpay.africa/assets/img/banner1.jpg" class="img-fluid" alt="MAE">
                            <div class="portfolio-info">
                                <h4>MAE</h4>
                                <p><?php _read('platform', $lang); ?> Web</p>
                                <div class="portfolio-links">
                                    <a href="pages/mae.html" class="portfolio-details-lightbox"
                                        data-glightbox="type: external" title="MAE"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item">
                        <div class="portfolio-wrap">
                            <img src="https://www.maersk.com/~/media_sc9/maersk/solutions/transportation-services/images/transportation-services_illustration.svg?w=1000&hash=F68E778D455E2B30243A7458F0C2445C"
                                class="img-fluid" alt="MAERSK">
                            <div class="portfolio-info">
                                <h4>MAERSK</h4>
                                <p><?php _read('platform', $lang); ?> Web</p>
                                <div class="portfolio-links">
                                    <a href="pages/maersk.html" class="portfolio-details-lightbox"
                                        data-glightbox="type: external" title="MAERSK"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- End Portfolio Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2><?php _read('honors', $lang); ?> &amp; Prix</h2>
                </div>

                <div class="row">

                    <div class="col-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box iconbox-blue">
                            <div class="icon">
                                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke="none" stroke-width="0" fill="#f5f5f5"
                                        d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174">
                                    </path>
                                </svg>
                                <i class="bx bxl-dribbble"></i>
                            </div>
                            <h4><a href="">Lorem Ipsum</a></h4>
                            <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
                        </div>
                    </div>

                    <div class="col-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="300">
                        <div class="icon-box iconbox-teal">
                            <div class="icon">
                                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke="none" stroke-width="0" fill="#f5f5f5"
                                        d="M300,566.797414625762C385.7384707136149,576.1784315230908,478.7894351017131,552.8928747891023,531.9192734346935,484.94944893311C584.6109503024035,417.5663521118492,582.489472248146,322.67544863468447,553.9536738515405,242.03673114598146C529.1557734026468,171.96086150256528,465.24506316201064,127.66468636344209,395.9583748389544,100.7403814666027C334.2173773831606,76.7482773500951,269.4350130405921,84.62216499799875,207.1952322260088,107.2889140133804C132.92018162631612,134.33871894543012,41.79353780512637,160.00259165414826,22.644507872594943,236.69541883565114C3.319112789854554,314.0945973066697,72.72355303640163,379.243833228382,124.04198916343866,440.3218312028393C172.9286146004772,498.5055451809895,224.45579914871206,558.5317968840102,300,566.797414625762">
                                    </path>
                                </svg>
                                <i class="bx bx-arch"></i>
                            </div>
                            <h4><a href="">Divera Don</a></h4>
                            <p>Modi nostrum vel laborum. Porro fugit error sit minus sapiente sit aspernatur</p>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- End Services Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Contact</h2>
                </div>

                <div class="row mt-1">

                    <div class="col-lg-4">
                        <div class="info">
                            <div class="address">
                                <i class='bx bx-current-location'></i>
                                <h4><?php _read('address', $lang); ?> :</h4>
                                <p>Angré Cocody, Abidjan, Côte-d'Ivoire</p>
                            </div>

                            <div class="email">
                                <i class='bx bxs-envelope'></i>
                                <h4><?php _read('email', $lang); ?> :</h4>
                                <p>agbegermain@gmail.com</p>
                            </div>

                            <div class="phone">
                                <i class='bx bxs-mobile-vibration'></i>
                                <h4><?php _read('phone', $lang); ?> :</h4>
                                <p>+225 07 49 01 29 66</p>
                            </div>

                        </div>

                    </div>

                    <div class="col-lg-8 mt-5 mt-lg-0">

                        <form action="contact.php" method="post" role="form" class="php-email-form">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label for="name"></label>
                                    <input type="text" name="name" class="form-control" id="name"
                                                                     placeholder="<?php _read('name', $lang); ?>" required>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <label for="email"></label>
                                    <input type="email" class="form-control" name="email" id="email"
                                                                      placeholder="<?php _read('email-m', $lang); ?>" required>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <label for="subject"></label>
                                <input type="text" class="form-control" name="subject" id="subject"
                                                                    placeholder="<?php _read('subject', $lang); ?>" required>
                            </div>
                            <div class="form-group mt-3">
                                <label for="message"></label>
                                <textarea class="form-control" name="message" id="message" rows="5" placeholder="<?php _read('message', $lang); ?>"
                                    required></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center"><button type="submit"><?php _read('send', $lang); ?></button></div>
                        </form>

                    </div>

                </div>

            </div>
        </section>
        <!-- End Contact Section -->

    </main>
    <!-- End #main -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class='bx bx-up-arrow-alt'></i></a>

    <!-- Vendor JS Files -->
    <script src="js/aos.js"></script>
    <script src="js/email-decode.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/glightbox.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/validate.js"></script>
    <script src="js/purecounter.js"></script>
    <script src="js/swiper-bundle.min.js"></script>
    <script src="js/typed.min.js"></script>
    <script src="js/noframework.waypoints.js"></script>

    <!-- Template Main JS File -->
    <script src="js/main.js"></script>

    <script>
        function getFlagEmoji(countryCode) {
            const codePoints = countryCode
                .toUpperCase()
                .split('')
                .map(char => 127397 + char.charCodeAt(0));
            return String.fromCodePoint(...codePoints);
        }

        document.getElementById('FR').innerHTML = getFlagEmoji('FR');
        document.getElementById('EN').innerHTML = getFlagEmoji('US');
    </script>

</body>

</html>