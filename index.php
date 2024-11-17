<?php
require __DIR__ . "/acm/FilesAutoLoader.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="icon" href="images/icon.png" type="image/gif" sizes="16x16">
    <title><?PHP echo PRIMARY_INFO['NAME']; ?> - <?php echo PRIMARY_INFO['TAGLINE']; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo PRIMARY_INFO['SHORT_DESC']; ?>">
    <meta name="keywords" content="<?php echo PRIMARY_INFO['KEYWORDS']; ?>">
    <meta name="author" content="<?php echo PRIMARY_INFO['AUTHOR']; ?>">

    <?php include __DIR__ . "/include/HeaderFilesAndStyleSheets.php"; ?>
</head>

<body id="homepage">

    <?php if (isset($_GET['msg'])) {
        if ($_GET['msg'] == "true") { ?>
            <div class="pop-up-box">
                <div class="pop-up-box-content">
                    <div class="icon">
                        <i class="fa fa-check-circle text-success"></i>
                    </div>
                    <div class="pop-up-box-title">
                        <h2>Thank You!</h2>
                    </div>
                    <div class="pop-up-box-text">
                        <p>Your message has been sent successfully.</p>
                    </div>
                    <div class="pop-up-box-button">
                        <a href="index.php" class="btn btn-primary">Back to Home</a>
                    </div>
                </div>
            </div>
        <?php } else if ($_GET['msg'] == "false") { ?>
            <div class="pop-up-box">
                <div class="pop-up-box-content">
                    <div class="icon">
                        <i class="fa fa-warning text-danger"></i>
                    </div>
                    <div class="pop-up-box-title">
                        <h2>Sorry!</h2>
                    </div>
                    <div class="pop-up-box-text">
                        <p>Your message has not been sent successfully.</p>
                    </div>
                    <div class="pop-up-box-button">
                        <a href="index.php" class="btn btn-primary">Back to Home</a>
                    </div>
                </div>
            </div>
        <?php } else { ?>
    <?php  }
    } ?>

    <div id="wrapper">

        <?php include __DIR__ . "/include/MainHeader.php"; ?>

        <!-- content begin -->
        <div id="content" class="no-bottom no-top">

            <!-- revolution slider begin -->
            <section id="section-slider" class="fullwidthbanner-container" aria-label="section-slider">
                <div id="revolution-slider">
                    <ul>
                        <li data-transition="fade" data-slotamount="10" data-masterspeed="200" data-thumb="">
                            <!--  BACKGROUND IMAGE -->
                            <img src="<?php echo STORAGE_URL; ?>/slider/wide1.jpg" alt="" />
                            <div class="tp-caption big-white sft" data-x="0" data-y="150" data-speed="800" data-start="400" data-easing="easeInOutExpo" data-endspeed="450">
                                Our Expertise For
                            </div>

                            <div class="tp-caption ultra-big-white customin customout start" data-x="0" data-y="center" data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:2;scaleY:2;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.85;scaleY:0.85;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="800" data-start="400" data-easing="easeInOutExpo" data-endspeed="400">
                                Interior Design
                            </div>

                            <div class="tp-caption sfb" data-x="0" data-y="335" data-speed="400" data-start="800" data-easing="easeInOutExpo">
                                <a href="#" class="btn-slider">Our Portfolio
                                </a>
                            </div>
                        </li>

                        <li data-transition="fade" data-slotamount="10" data-masterspeed="200" data-thumb="">
                            <!--  BACKGROUND IMAGE -->
                            <img src="<?php echo STORAGE_URL; ?>/slider/wide2.jpg" alt="" />
                            <div class="tp-caption big-white sft" data-x="0" data-y="160" data-speed="800" data-start="400" data-easing="easeInOutExpo" data-endspeed="450">
                                Featured Project
                            </div>

                            <div class="tp-caption ultra-big-white customin customout start" data-x="0" data-y="center" data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:2;scaleY:2;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.85;scaleY:0.85;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="800" data-start="400" data-easing="easeInOutExpo" data-endspeed="400">
                                Green Interior
                            </div>

                            <div class="tp-caption sfb" data-x="0" data-y="335" data-speed="400" data-start="800" data-easing="easeInOutExpo">
                                <a href="#" class="btn-slider">Our Portfolio
                                </a>
                            </div>
                        </li>

                        <li data-transition="fade" data-slotamount="10" data-masterspeed="200" data-thumb="">
                            <!--  BACKGROUND IMAGE -->
                            <img src="<?php echo STORAGE_URL; ?>/slider/wide3.jpg" alt="" />
                            <div class="tp-caption big-white sft" data-x="0" data-y="160" data-speed="800" data-start="400" data-easing="easeInOutExpo" data-endspeed="450">
                                Interior Remodeling To Makes
                            </div>

                            <div class="tp-caption ultra-big-white customin customout start" data-x="0" data-y="center" data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:2;scaleY:2;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.85;scaleY:0.85;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="800" data-start="400" data-easing="easeInOutExpo" data-endspeed="400">
                                Your Life Easier
                            </div>

                            <div class="tp-caption sfb" data-x="0" data-y="335" data-speed="400" data-start="800" data-easing="easeInOutExpo">
                                <a href="#" class="btn-slider">Our Portfolio
                                </a>
                            </div>
                        </li>

                    </ul>
                </div>
            </section>
            <!-- revolution slider close -->

            <!-- section begin -->
            <section id="section-about">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 offset-md-3 text-center wow fadeInUp">
                            <h1>What We Do</h1>
                            <div class="separator"><span><i class="fa fa-circle"></i></span></div>
                            <div class="spacer-single"></div>
                        </div>

                        <div class="col-md-4 wow fadeInLeft">
                            <h3><span class="id-color">Residential</span> Design</h3>
                            Elevate your home with ECOTECH Homes' sustainable residential designs. Our expert team seamlessly integrates eco-friendly materials and innovative solutions, creating spaces that exude luxury while minimizing environmental impact. Experience the perfect harmony of style and sustainability.<div class="spacer-single"></div>
                            <a class="image-popup-no-margins" href="<?php echo STORAGE_URL; ?>/misc/pic_1.jpg">
                                <img src="<?php echo STORAGE_URL; ?>/misc/pic_1.jpg" class="img-responsive" alt="">
                            </a>
                        </div>

                        <div class="col-md-4 wow fadeInUp" data-wow-delay=".2s">
                            <h3><span class="id-color">Office</span> Design</h3>
                            Enhance your office environment with ECOTECH Homes' innovative designs, combining sustainability and functionality seamlessly. Our expert team crafts workspaces that inspire productivity while minimizing environmental impact. Experience the perfect blend of style and sustainability in your office with ECOTECH Homes.<div class="spacer-single"></div>
                            <a class="image-popup-no-margins" href="<?php echo STORAGE_URL; ?>/misc/pic_2.jpg">
                                <img src="<?php echo STORAGE_URL; ?>/misc/pic_2.jpg" class="img-responsive" alt="">
                            </a>
                        </div>

                        <div class="col-md-4 wow fadeInRight">
                            <h3><span class="id-color">Commercial</span> Design</h3>
                            Elevate your commercial space with ECOTECH Homes' innovative designs, tailored to enhance functionality and sustainability. Our expert team creates environments that inspire creativity while minimizing environmental impact. Experience the perfect synergy of style and sustainability in your commercial project with ECOTECH Homes.<div class="spacer-single"></div>
                            <a class="image-popup-no-margins" href="<?php echo STORAGE_URL; ?>/misc/pic_3.jpg">
                                <img src="<?php echo STORAGE_URL; ?>/misc/pic_3.jpg" class="img-responsive" alt="">
                            </a>
                        </div>

                    </div>
                </div>
            </section>
            <!-- section close -->


            <!-- section begin -->
            <section id="section-steps" class="jarallax text-light">
                <img src="<?php echo STORAGE_URL; ?>/background/bg-2.jpg" class="jarallax-img" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 offset-md-3 text-center wow fadeInUp">
                            <h1>Our Process</h1>
                            <div class="separator"><span><i class="fa fa-circle"></i></span></div>
                            <div class="spacer-single"></div>
                        </div>

                        <div class="col-md-12">
                            <div class="de_tab tab_steps">
                                <ul class="de_nav">
                                    <li class="active wow fadeIn" data-wow-delay="0s"><span>Meet &amp; Agree</span>
                                        <div class="v-border"></div>
                                    </li>
                                    <li class="wow fadeIn" data-wow-delay=".4s"><span>Idea &amp; Concept</span>
                                        <div class="v-border"></div>
                                    </li>
                                    <li class="wow fadeIn" data-wow-delay=".8s"><span>Design &amp; Create</span>
                                        <div class="v-border"></div>
                                    </li>
                                    <li class="wow fadeIn" data-wow-delay="1.2s"><span>Build &amp; Install</span>
                                        <div class="v-border"></div>
                                    </li>
                                </ul>

                                <div class="de_tab_content">

                                    <div id="tab1">
                                        We begin by engaging with you to understand your vision and requirements thoroughly. Through open dialogue and attentive listening, we ensure that we are aligned with your goals and expectations. Once we've established mutual agreement, our team of expert interior designers in Gurgaon embarks on the journey of idea generation and conceptualization.
                                    </div>

                                    <div id="tab2">
                                        With creativity at the forefront, we explore innovative design possibilities that not only meet your aesthetic preferences but also prioritize functionality and sustainability. Throughout this phase, we engage in constant communication, presenting initial sketches and mood boards to capture the essence of your desired space.
                                    </div>

                                    <div id="tab3">
                                        Leveraging cutting-edge technology and our wealth of experience, we translate conceptual designs into tangible, comprehensive plans. Every aspect of the project is meticulously considered, from layout and materials to lighting and furnishings.
                                    </div>

                                    <div id="tab4">
                                        Once the design is finalized, our skilled craftsmen and builders take over to bring the vision to life. With precision and attention to detail, we execute the plans, ensuring quality craftsmanship at every step of the construction process. Our dedicated project managers oversee the project, ensuring that timelines are met and standards are upheld throughout. As the project nears completion, we coordinate the installation of fixtures, furnishings, and finishing touches, culminating in the unveiling of your transformed space. At ECOTECH Homes, our holistic approach to interior design ensures that every step of the process is executed with excellence, resulting in spaces that seamlessly blend luxury, functionality, and sustainability. With our unwavering commitment to quality and customer satisfaction, we strive to exceed expectations and create environments that inspire and delight for years to come.
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- section close -->


            <!-- section begin -->
            <section id="section-portfolio" class="no-top no-bottom" aria-label="section-portfolio">
                <div class="container">

                    <div class="spacer-single"></div>

                    <!-- portfolio filter begin -->
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <div class="col-md-6 offset-md-3 text-center wow fadeInUp">
                                <h1>Our Projects</h1>
                                <p>Project completed by <?php echo PRIMARY_INFO['NAME']; ?></p>
                                <div class="separator"><span><i class="fa fa-circle"></i></span></div>
                                <div class="spacer-single"></div>
                            </div>
                        </div>
                    </div>
                    <!-- portfolio filter close -->

                </div>

                <div class="container mb-5" style="display: contents;">
                    <div class="row">
                        <?php
                        $PossibleDirectories = [
                            "bedrooms-designs", "furniture-designs", "living-room-designs", "modular-kitchens",
                            "wardrobe-designs", "washroom-designs"
                        ];

                        foreach ($PossibleDirectories as $Projects) {
                            if ($handle = opendir(__DIR__ . "/storage/projects/$Projects/")) {

                                while (false !== ($entry = readdir($handle))) {
                                    if ($entry != "." && $entry != "..") {
                                        if (!str_contains($entry, "map")) {
                        ?>
                                            <div class="col-md-3 col-sm-6 col-6">
                                                <a href="<?php echo STORAGE_URL; ?>/projects/<?php echo $Projects; ?>/<?php echo $entry; ?>" target="_blank">
                                                    <div class="p-2 project-images2">
                                                        <img src="<?php echo STORAGE_URL; ?>/projects/<?php echo $Projects; ?>/<?php echo $entry; ?>" class="img-fluid ratio-1x1">
                                                    </div>
                                                </a>
                                            </div>
                        <?php
                                        }
                                    }
                                }
                                closedir($handle);
                            }
                        }

                        ?>
                    </div>
                </div>

                <br>

                <div id="loader-area">
                    <div class="project-load"></div>
                </div>
            </section>
            <!-- section close -->

            <!-- section begin -->
            <section id="view-all-projects" class="call-to-action bg-color text-center" data-speed="5" data-type="background" aria-label="view-all-projects">
                <a href="<?php echo DOMAIN; ?>/projects" class="btn btn-line black btn-big">View All Projects</a>
            </section>
            <!-- logo carousel section close -->


            <!-- section begin -->
            <section id="section-testimonial" class="jarallax text-light">
                <img src="<?php echo STORAGE_URL; ?>/background/bg-3.jpg" class="jarallax-img" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 offset-md-3 text-center wow fadeInUp">
                            <h1>Customer Says</h1>
                            <div class="separator"><span><i class="fa fa-circle"></i></span></div>
                            <div class="spacer-single"></div>
                        </div>
                    </div>
                    <div id="testimonial-carousel" class="owl-carousel owl-theme de_carousel wow fadeInUp" data-wow-delay=".3s">

                        <div class="col-md-3 col-sm-6 col-12 item">
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

                        <div class="col-md-3 col-sm-6 col-12 item">
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

                        <div class="col-md-3 col-sm-6 col-12 item">
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

                        <div class="col-md-3 col-sm-6 col-12 item">
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

            <?php include __DIR__ . "/include/MainFooter.php"; ?>

        </div>
    </div>

    <?php include __DIR__ . "/include/FooterFilesAndScripts.php"; ?>


</body>

</html>