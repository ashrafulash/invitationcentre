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
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum minus amet provident? Rerum, nam
                repellendus ab dolore dolorem pariatur asperiores! Eum, qui dolorum saepe dicta sunt dolorem
                ducimus illo illum recusandae sapiente voluptatem,</p>

            <a class="btn contact-btn" href="<?php echo get_site_url(); ?>/contact?active=contact"><span>Contact Now</span> <i>&rarr;</i></a>
        </div>
    </div>
</div>