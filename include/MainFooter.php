<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <img src="<?php echo LOGOS['MAIN_LOGO']; ?>" class="logo-small" alt="<?php echo LOGOS['LOGO_ALT']; ?>" title="<?php echo LOGOS['LOGO_TITLE']; ?>"><br>
                ECOTECH Homes: Where affordability meets sustainable luxury in Gurgaon's interior design scene, redefining elegance with eco-conscious solutions.
                <hr class="mb-3 mt-3">
                <h6 class="text-white">LIKE, Share & Follow</h6>
                <div class="social-icons">
                    <?php foreach (SOCIAL_MEDIA_ACCOUNTS as $Icon => $ProfileUrl) { ?>
                        <a href="<?php echo $ProfileUrl; ?>"><i class="fa fa-<?php echo $Icon; ?> fa-lg"></i></a>
                    <?php  } ?>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="widget widget_recent_post">
                    <h3>Latest News</h3>
                    <ul>
                        <li><a href="#">The Essentials Interior Design Tips</a></li>
                        <li><a href="#">Functional Wall-to-Wall Shelves</a></li>
                        <li><a href="#">9 Unique Ways to Display Your TV</a></li>
                        <li><a href="#">The 5 Secrets to Minimal Design</a></li>
                        <li><a href="#">Make a Huge Impact With Multiples</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3">
                <h3>Contact Us</h3>
                <div class="widget widget-address">
                    <address>
                        <span>
                            <b><?php echo PRIMARY_INFO['INCORPORATION']; ?></b><br>
                            <?php echo ADDRESS['HEAD_OFFICE']; ?>
                        </span>
                        <span><strong>Phone:</strong>+91-<?php echo PHONE_NUMBERS['PRIMARY']; ?></span>
                        <span><strong>Email:</strong><a href="mailto:<?php echo EMAILS_IDS['PRIMARY']; ?>"><?php echo EMAILS_IDS['PRIMARY']; ?></a></span>
                        <span><strong>Web:</strong><a href="<?php echo HOST; ?>"><?php echo HOST; ?></a></span>
                    </address>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="widget widget_recent_post">
                    <h3>Our Services</h3>
                    <ul>
                        <li><a href="<?php echo DOMAIN; ?>/modular-kitchen">Modular Kitchen<span></span></a></li>
                        <li><a href="<?php echo DOMAIN; ?>/bedroom-designing">Bedroom Interior Design<span></span></a></li>
                        <li><a href="<?php echo DOMAIN; ?>/wardrobe-designing">Wardrobe Designing<span></span></a></li>
                        <li><a href="<?php echo DOMAIN; ?>/washroom-designing">Washroom Interior Design<span></span></a></li>
                        <li><a href="<?php echo DOMAIN; ?>/furniture-desinging">Furniture Designs<span></span></a></li>
                        <li><a href="<?php echo DOMAIN; ?>/living-room-designing">Livingroom Designs<span></span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="subfooter">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    &copy; Copyright <?php echo DATE("Y"); ?> - <?php echo PRIMARY_INFO['NAME']; ?>
                </div>
            </div>
        </div>
    </div>
    <a href="#" id="back-to-top"></a>
</footer>

<section class="instant-btns">
    <ul>
        <li>
            <a href="tel:<?php echo PHONE_NUMBERS['PRIMARY']; ?>"><i class="fa fa-phone"></i></a>
        </li>
        <li>
            <a href="whatsapp://send?phone=91<?php echo PHONE_NUMBERS['PRIMARY']; ?>&text=Hey <?php echo PRIMARY_INFO['NAME']; ?>"><i class='fa fa-whatsapp'></i></a>
        </li>
        <li>
            <a href="<?php echo DOMAIN; ?>/enquiry" class="no-border-no-shadow">
                <img src="<?php echo STORAGE_URL; ?>/enquiry.gif" alt="<?php echo PRIMARY_INFO['NAME']; ?>" title='<?php echo PRIMARY_INFO['NAME']; ?>'>
            </a>
        </li>
    </ul>
</section>