<?php
require __DIR__ . "/../acm/FilesAutoLoader.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="icon" href="images/icon.png" type="image/gif" sizes="16x16">
    <title>About Us - <?PHP echo PRIMARY_INFO['NAME']; ?> - <?php echo PRIMARY_INFO['TAGLINE']; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo PRIMARY_INFO['SHORT_DESC']; ?>">
    <meta name="keywords" content="<?php echo PRIMARY_INFO['KEYWORDS']; ?>">
    <meta name="author" content="<?php echo PRIMARY_INFO['AUTHOR']; ?>">

    <?php include __DIR__ . "/../include/HeaderFilesAndStyleSheets.php"; ?>
</head>

<body class="page-about">

    <div id="wrapper">
        <?php include __DIR__ . "/../include/MainHeader.php"; ?>

        <!-- subheader -->
        <section id="subheader" style="background-image: url('<?php echo STORAGE_URL; ?>/background/subheader-5.jpg');" data-speed="8" data-type="background">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>About Us</h1>
                        <ul class="crumb">
                            <li><a href="<?php echo DOMAIN; ?>">Home</a></li>
                            <li class="sep">/</li>
                            <li>About Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- subheader close -->

        <!-- content begin -->
        <div id="content" class="no-top no-bottom">
            <section id="section-about-us-2" class="side-bg no-padding">
                <div class="image-container col-md-5 pull-left" style="background-image:url(<?php echo STORAGE_URL; ?>/background/bg-side-1.jpg);" data-delay="0">
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 offset-md-6 " data-animation="fadeInRight" data-delay="200">
                            <div class="inner-padding">
                                <h2>Award Winning Interior Design</h2>

                                <p class="intro">
                                <p>Welcome to ECOTECH Homes by ecotech group inc, a premier destination for exquisite interior designs, headquartered in the vibrant city of Gurgaon. With two decades of unparalleled experience in the industry, our founder Jagbeer Singh has spearheaded a team of passionate designers and craftsmen dedicated to elevating living spaces to new heights of sophistication and sustainability.</p>

                                <p>At ECOTECH Homes, we believe in merging luxury with environmental responsibility. Our commitment to sustainable practices is evident in every project we undertake, as we strive to minimize our ecological footprint while maximizing the beauty and functionality of your space.</p>

                                <p>Led by Jagbeer Singh's visionary leadership, our team approaches each project with meticulous attention to detail, ensuring that every aspect of the design reflects your unique style and preferences. From conceptualization to execution, we work closely with you to bring your vision to life, creating spaces that inspire and delight.</p>

                                <p>Our Gurgaon headquarters serves as the hub of creativity and innovation, where ideas flourish and dreams take shape. Here, our team harnesses their expertise and creativity to craft bespoke designs that surpass expectations and stand the test of time.</p>

                                <p>Experience the ECOTECH Homes difference – where luxury meets sustainability, and imagination knows no bounds. Join us on a journey of transformation and discover the true potential of your living space with ECOTECH Homes.</p>

                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="section-about-us-2" class="side-bg">
                <div class='container'>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="p-1">
                                <h2>Founder @ <?php echo PRIMARY_INFO['NAME']; ?></h2>
                                <h5>What <?php echo PRIMARY_INFO['NAME']; ?> says</h5>
                                <p>Jagbeer Singh stands as the illustrious founder of Ecotech Homes by ecotech group inc, backed by a wealth of experience spanning over two decades in the realm of interior design. His journey is a testament to his unwavering commitment to sustainability and innovation, where each project reflects his vision of harmonizing human living spaces with the natural world. With a keen eye for detail and a deep understanding of eco-friendly practices, Jagbeer's designs transcend mere aesthetics, embodying a holistic approach that resonates with both inhabitants and the environment alike.
                                </p>
                                <p class="mb-0">

                                    Under Jagbeer's guidance, Ecotech Homes has become synonymous with cutting-edge design that prioritizes sustainability without compromising on style. His leadership fosters a culture of creativity and environmental responsibility, ensuring that every home crafted by Ecotech is not just a dwelling but a sanctuary where modern living coexists harmoniously with nature.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="founder p-1">
                                <img src="<?php echo STORAGE_URL; ?>/team/ecotech-homes-founder-jagbeer-singh.jpg" class="img-fluid rounded-circle" alt="Founder @ <?php echo PRIMARY_INFO['NAME']; ?>" title="Founder @ <?php echo PRIMARY_INFO['NAME']; ?>">
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <section id="section-testimonial" class="text-light">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 offset-md-3 text-center wow fadeInUp">
                            <h1>Customer Says</h1>
                            <div class="separator"><span><i class="fa fa-circle"></i></span></div>
                            <div class="spacer-single"></div>
                        </div>
                    </div>
                    <div id="testimonial-carousel" class="owl-carousel owl-theme de_carousel wow fadeInUp" data-wow-delay=".3s">

                        <div class="item">
                            <div class="de_testi">
                                <blockquote>
                                    <p>I'm always impressed with the services. Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                                        ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                                    <div class="de_testi_by">
                                        John, Customer
                                    </div>
                                </blockquote>

                            </div>
                        </div>

                        <div class="item">
                            <div class="de_testi">
                                <blockquote>
                                    <p>I have very much enjoyed with your services. Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                                    <div class="de_testi_by">
                                        Michael, Customer
                                    </div>
                                </blockquote>
                            </div>
                        </div>

                        <div class="item">
                            <div class="de_testi">
                                <blockquote>
                                    <p>I totally recommend your services. Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                                        ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                                    <div class="de_testi_by">
                                        Patrick, Customer
                                    </div>
                                </blockquote>
                            </div>
                        </div>

                        <div class="item">
                            <div class="de_testi">
                                <blockquote>
                                    <p>I have very much enjoyed with your services. Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                                    <div class="de_testi_by">
                                        James, Customer
                                    </div>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- section begin -->
            <section id="view-all-projects" class="call-to-action bg-color dark text-center" data-speed="5" data-type="background" aria-label="view-all-projects">
                <a href="contact.html" class="btn btn-line black btn-big">Talk With Us</a>
            </section>
            <!-- logo carousel section close -->



        </div>

        <?php include __DIR__ . "/../include/MainFooter.php"; ?>

    </div>
    <?php include __DIR__ . "/../include/FooterFilesAndScripts.php"; ?>




</body>



</html>