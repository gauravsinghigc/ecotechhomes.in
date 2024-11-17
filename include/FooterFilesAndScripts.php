<script src="<?php echo ASSETS_URL; ?>/js/plugins.js"></script>
<script src="<?php echo ASSETS_URL; ?>/js/designesia.js"></script>

<!-- SLIDER REVOLUTION SCRIPTS  -->
<script src="<?php echo ASSETS_URL; ?>/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
<script src="<?php echo ASSETS_URL; ?>/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

<!-- COOKIES PLUGIN  -->
<script>
    $(document).ready(function() {
        $.cookit({
            backgroundColor: '#1c1c1c',
            messageColor: '#fff',
            linkColor: '#fad04c',
            buttonColor: '#fad04c',
            messageText: "This website uses <b>cookies</b> to ensure you get the best experience on our website.",
            linkText: "Learn more",
            linkUrl: "<?php echo DOMAIN; ?>",
            buttonText: "I accept",
        });
    });
</script>

<script src='www.google.com/recaptcha/api.js' async defer></script>
<script src="<?php echo DOMAIN; ?>/form.js"></script>