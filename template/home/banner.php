<div class="home-body">
    <div class="home-body__banner">
        <img class="bnr_img" src="<?php echo get_template_directory_uri(); ?>/asset/src/images/home-hero.jpg"
            alt="home-hero">
        <div class="home-body__banner__container">
            <?php
                if(get_header_image()){ ?>
            <img src="<?php header_image(); ?>">
            <?php
                }
            ?>
            <h1><?php bloginfo('name'); ?></h1>
            <h2><?php bloginfo('description') ?></h2>
            <p>We believe in a strong relationship between a company and customers and so we are very careful about our services and our products. Your smile that comes from your heart is our satisfaction. Stay with us and believe in change.</p>

            <a class="btn contact-btn" href="<?php echo get_site_url(); ?>/contact?active=contact"><span>Contact Now</span> <i>&rarr;</i></a>
        </div>
    </div>
</div>