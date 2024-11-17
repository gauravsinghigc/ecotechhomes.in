<?php
require __DIR__ . "/../acm/FilesAutoLoader.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="icon" href="<?php echo STORAGE_URL; ?>/icon.png" type="image/gif" sizes="16x16">
    <title>Modular Kitchen Designing - <?PHP echo PRIMARY_INFO['NAME']; ?> - <?php echo PRIMARY_INFO['TAGLINE']; ?></title>
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
                        <h1>Modular Kitchen Designing</h1>
                        <ul class="crumb">
                            <li><a href="<?php echo DOMAIN; ?>">Home</a></li>
                            <li class="sep">/</li>
                            <li>Modular Kitchen Designing</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- subheader close -->

        <!-- content begin -->
        <div id="content-sidebar" class="nopadding">
            <!-- section begin -->
            <div class="container-fluid">
                <div class="spacer-single"></div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="p-3">
                            "Discover the epitome of luxury and functionality with ECOTECH Homes' modular kitchen designs in Gurgaon. Our premium interior solutions seamlessly blend elegance and affordability, ensuring your kitchen reflects your style without compromising on quality. With a focus on sustainability and innovation, we craft bespoke designs that elevate your living space to new heights. Experience the perfect fusion of premium design and affordability with ECOTECH Homes' modular kitchens, setting the standard for exquisite interiors in Gurgaon."
                        </div>
                    </div>
                </div>
                <div class="spacer-single"></div>
            </div>

            <div class="row">
                <div class="col-md-8">
                    <div class="container mb-5" style="display: contents;">
                        <div class="row">
                            <?php if ($handle = opendir(__DIR__ . "/../storage/projects/modular-kitchens")) {

                                while (false !== ($entry = readdir($handle))) {
                                    if ($entry != "." && $entry != "..") {
                                        if (!str_contains($entry, "map")) {
                            ?>
                                            <div class="col-md-4 col-sm-6 col-6">
                                                <div class="p-2 project-images2">
                                                    <img src="<?php echo STORAGE_URL; ?>/projects/modular-kitchens/<?php echo $entry; ?>" class="img-fluid ratio-1x1">
                                                </div>
                                            </div>
                            <?php
                                        }
                                    }
                                }
                                closedir($handle);
                            }
                            ?>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="p-1">
                        <h2>More Services</h2>
                        <ul class="page-menu">
                            <li><a href="<?php echo DOMAIN; ?>/modular-kitchen">Modular Kitchen Designing<span></span></a></li>
                            <li><a href="<?php echo DOMAIN; ?>/bedroom-designing">Bedroom Designing<span></span></a></li>
                            <li><a href="<?php echo DOMAIN; ?>/wardrobe-designing">Wardrobe Designing<span></span></a></li>
                            <li><a href="<?php echo DOMAIN; ?>/washroom-designing">Washroom Designing<span></span></a></li>
                            <li><a href="<?php echo DOMAIN; ?>/furniture-desinging">Furniture Designing<span></span></a></li>
                            <li><a href="<?php echo DOMAIN; ?>/living-room-designing">Livingroom Designing<span></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>



            <!-- section close -->


            <br> <!-- section begin -->
            <section id="call-to-action" class="call-to-action bg-color dark text-center" data-speed="5" data-type="background" aria-label="call-to-action">
                <a href="<?php echo DOMAIN; ?>/enquiry" class="btn btn-line black btn-big">Get Quotation</a>
            </section>
            <!-- logo carousel section close -->



        </div>


        <?php include __DIR__ . "/../include/MainFooter.php"; ?>

    </div>
    <?php include __DIR__ . "/../include/FooterFilesAndScripts.php"; ?>




</body>



</html>