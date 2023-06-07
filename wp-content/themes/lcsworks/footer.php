<div id="main-footer" class="footer">
<?php wp_footer(); ?>

<script>
    $('document').ready(function() {
        MainApp.base_url = '<?php echo site_url(); ?>';
        let root = document.documentElement;
        root.style.setProperty(
            '--parent-theme-uri',
            '<?php echo get_template_directory_uri(); ?>'
        );
    });
</script>