<?php wp_head(); ?>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
</head>
<body <?php body_class(); ?>>

    <div class="error-page">
    <img src="<?php echo get_template_directory_uri() ?>/asset/src/images/404.gif" alt="Invitation Centre Error" class="error-img">
    <?php

        if( is_active_sidebar('error_widget_area')){
            dynamic_sidebar( 'error_widget_area' );
        }
    ?>
</div>

</body>
<?php wp_footer(); ?>