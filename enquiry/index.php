<?php
require __DIR__ . "/../acm/FilesAutoLoader.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<link rel="icon" href="images/icon.png" type="image/gif" sizes="16x16">
	<title>Renovation - <?PHP echo PRIMARY_INFO['NAME']; ?> - <?php echo PRIMARY_INFO['TAGLINE']; ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php echo PRIMARY_INFO['SHORT_DESC']; ?>">
	<meta name="keywords" content="<?php echo PRIMARY_INFO['KEYWORDS']; ?>">
	<meta name="author" content="<?php echo PRIMARY_INFO['AUTHOR']; ?>">

	<?php include __DIR__ . "/../include/HeaderFilesAndStyleSheets.php"; ?>
</head>

<body class="page-contact">

	<div id="wrapper">
		<?php include __DIR__ . "/../include/MainHeader.php"; ?>

		<!-- subheader -->
		<section id="subheader" style="background-image: url('<?php echo STORAGE_URL; ?>/background/subheader-6.jpg');" data-speed="8" data-type="background">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1>Renovation Budgeting</h1>
						<ul class="crumb">
							<li><a href="<?php echo DOMAIN; ?>">Home</a></li>
							<li class="sep">/</li>
							<li>Contact</li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<!-- subheader close -->

		<!-- content begin -->
		<div id="content">

			<div class="container">
				<div class="row">

					<div class="col-md-8 offset-md-2">
						<form name="contactForm contact_form" id='contact_form' action="<?php echo DOMAIN; ?>/handler/EnquiryHandler.php" method="POST">
							<div id="step-1" class="row">
								<div class="col-md-12 mb30">
									<h4><i class="fa fa-home id-color"></i>What is your property type?</h4>

									<div class="de_form de_radio">
										<div class="radio-img">
											<input id="radio-1a" name="ENQUIRY_FOR" type="radio" value="Residential" checked="checked">
											<label for="radio-1a"><img src="<?php echo STORAGE_URL; ?>/select-form/1.jpg">
												<span>Residential</span>
											</label>
										</div>

										<div class="radio-img">
											<input id="radio-1b" name="ENQUIRY_FOR" type="radio" value="Office">
											<label for="radio-1b"><img src="<?php echo STORAGE_URL; ?>/select-form/2.jpg">
												<span>Office</span>
											</label>
										</div>

										<div class="radio-img">
											<input id="radio-1c" name="ENQUIRY_FOR" type="radio" value="Commercial">
											<label for="radio-1c"><img src="<?php echo STORAGE_URL; ?>/select-form/3.jpg">
												<span>Commercial</span>
											</label>
										</div>

										<div class="radio-img">
											<input id="radio-1d" name="ENQUIRY_FOR" type="radio" value="Retail">
											<label for="radio-1d"><img src="<?php echo STORAGE_URL; ?>/select-form/4.jpg">
												<span>Retail</span>
											</label>
										</div>

										<div class="radio-img">
											<input id="radio-1e" name="ENQUIRY_FOR" type="radio" value="Other">
											<label for="radio-1e"><img src="<?php echo STORAGE_URL; ?>/select-form/5.jpg">
												<span>Other</span>
											</label>
										</div>
									</div>
								</div>

								<div class="col-md-6 mb10">
									<h4><i class="fa fa-arrows-alt id-color"></i>Total area size you want to renovate</h4>
									<div class="row">
										<div class="col-md-6">
											<input type='text' name='PROPERTY_AREA' class="form-control" placeholder="Area Size" required>
										</div>

										<div class="col-md-6">
											<select name="PROPERTY_SIZE" id="unit_size" value="" class="form-control">
												<option value="sqft">Square Feet(sqft)</option>
												<option value="m">meter(m)</option>
												<option value="ft">Feet(ft)</option>
											</select>
										</div>
									</div>
								</div>

								<div class="col-md-6 mb10">
									<h4><i class="fa fa-tag id-color"></i>Select a renovation budget</h4>
									<div class="row">
										<div class="col-md-12">
											<select name="APPROX_BUDGET_TYPE" value="" class="form-control">
												<option value="Budget Friendly">Budget Friendly</option>
												<option value="Mid Range">Mid Range</option>
												<option value="High End">High End</option>
											</select>
										</div>
									</div>

								</div>

							</div>

							<div id="step-2" class="row">
								<h4 class="mt-3"><i class="fa fa-user id-color"></i>Enter your details</h4>

								<div class="col-md-6">
									<div id='name_error' class='error'>Please enter your name.</div>
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
								<div class="col-md-6">
									<div class="mt-1">
										<textarea name='MESSAGE' class="form-control" rows="5" placeholder="Your Message"></textarea>
									</div>
								</div>

								<div class="col-md-12 mt-3">
									<button type="submit" name='SEND_ENQUIRY' class="btn btn-line btn-md p-3">SUBMIT DETAILS</button>
								</div>
							</div>
						</form>

					</div>

				</div>
			</div>
		</div>

		<?php include __DIR__ . "/../include/MainFooter.php"; ?>

	</div>
	<?php include __DIR__ . "/../include/FooterFilesAndScripts.php"; ?>

</body>

</html>