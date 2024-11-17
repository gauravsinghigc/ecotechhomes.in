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
        <div id="content" class="no-top">
            <section id="de-map" aria-label="map-container">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="map-container map-fullwidth">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14029.049028354664!2d77.0509379!3d28.4716476!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d19c901c5452d%3A0x17accd71955807e8!2sEcotech%20Homes!5e0!3m2!1sen!2sin!4v1712564731657!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <div class="container">
                <div class="row">

                    <div class="col-md-8">
                        <form name="contactForm" action="<?php echo DOMAIN; ?>/handler/ContactHandler.php" id='contact_form' method="post">
                            <div class="row">
                                <div class="col-md-12 mb10">
                                    <h3>Send Us Message</h3>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <input type='text' name='FULL_NAME' class="form-control" placeholder="Your Name" required>
                                    </div>
                                    <div class="mb-3">
                                        <input type='email' name='EMAIL_ID' class="form-control" placeholder="Your Email" required>
                                    </div>
                                    <div class="mb-3">
                                        <input type='text' name='PHONE_NUMBER' class="form-control" placeholder="Your Phone" required>
                                    </div>
                                </div>
                                <div class="col-md-6 mt-1">
                                    <div>
                                        <textarea rows="5" name='MESSAGE' class="form-control" placeholder="Your Message" required></textarea>
                                    </div>
                                </div>

                                <div class="col-md-12 mt-3">
                                    <button type="submit" name='SEND_CONTACT_FORM' class="btn btn-line btn-md p-3">SUBMIT DETAILS</button>
                                </div>
                            </div>
                        </form>

                        <div id="success_message" class='success'>
                            Your message has been sent successfully. Refresh this page if you want to send more messages.
                        </div>
                        <div id="error_message" class='error'>
                            Sorry there was an error sending your form.
                        </div>

                    </div>

                    <div id="sidebar" class="col-md-4">

                        <div class="widget widget_text">
                            <h3>Contact Info</h3>
                            <address>
                                <span><strong>Address:</strong><?php echo ADDRESS['HEAD_OFFICE']; ?></span>
                                <span><strong>Phone:</strong>+91-<?php echo PHONE_NUMBERS['PRIMARY']; ?></span>
                                <span><strong>Email:</strong><a href="mailto:<?php echo EMAILS_IDS['PRIMARY']; ?>"><?php echo EMAILS_IDS['PRIMARY']; ?></a></span>
                                <span><strong>Web:</strong><a href="<?php echo HOST; ?>"><?php echo HOST; ?></a></span>
                                <span><strong>Working Days:</strong>Monday to Saturday : 10:00 AM TO 6:00 PM</span>
                            </address>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <?php include __DIR__ . "/../include/MainFooter.php"; ?>

    </div>
    <?php include __DIR__ . "/../include/FooterFilesAndScripts.php"; ?>




</body>



</html>