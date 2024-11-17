<!-- header begin -->
<header>
    <div class="info">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="column">Working Hours Monday - Saturday <span class="id-color"><strong>10:00 AM - 06:00 PM</strong></span></div>
                    <div class="column">Phone No: <span class="id-color"><strong><?php echo PHONE_NUMBERS['PRIMARY']; ?></strong></span></div>
                    <!-- social icons -->
                    <div class="column social">
                        <?php foreach (SOCIAL_MEDIA_ACCOUNTS as $Icon => $ProfileUrl) { ?>
                            <a href="<?php echo $ProfileUrl; ?>"><i class="fa fa-<?php echo $Icon; ?>"></i></a>
                        <?php  } ?>
                    </div>
                    <!-- social icons close -->
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="md-flex">
                    <!-- logo begin -->
                    <div id="logo">
                        <a href="<?php echo DOMAIN; ?>">
                            <img class="logo" src="<?php echo LOGOS['MAIN_LOGO']; ?>" alt="<?php echo LOGOS['LOGO_ALT']; ?>" title="<?php echo LOGOS['LOGO_ALT']; ?>">
                        </a>
                    </div>
                    <!-- logo close -->

                    <!-- small button begin -->
                    <span id="menu-btn"></span>
                    <!-- small button close -->

                    <!-- mainmenu begin -->
                    <div class="md-flex-col">
                        <nav class="md-flex">
                            <ul id="mainmenu">
                                <li><a href="<?php echo DOMAIN; ?>">Home<span></span></a></li>
                                <li><a href="<?php echo DOMAIN; ?>/about-us">About Us<span></span></a></li>
                                <li><a href="<?php echo DOMAIN; ?>/modular-kitchen">Modular Kitchen<span></span></a></li>
                                <li><a href="<?php echo DOMAIN; ?>/bedroom-designing">Bedroom<span></span></a></li>
                                <li><a href="<?php echo DOMAIN; ?>/wardrobe-designing">Wardrobe<span></span></a></li>
                                <li><a href="<?php echo DOMAIN; ?>/washroom-designing">Washroom<span></span></a></li>
                                <li><a href="<?php echo DOMAIN; ?>/furniture-desinging">Furniture<span></span></a></li>
                                <li><a href="<?php echo DOMAIN; ?>/living-room-designing">Livingroom<span></span></a></li>
                                <li><a href="<?php echo DOMAIN; ?>/contact-us">Contact Us<span></span></a></li>
                            </ul>
                        </nav>
                        <!-- mainmenu close -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header close -->