<?php get_header(); ?>

<div class="row m-0 no-gutters">
    <div class="col-lg-3 sidebar-home" style="max-width:300px" id="sidebar-container">
        <?php get_template_part('template/sidebar') ?>

    </div>
    <div class="col-lg-9 mx-auto mb-5 maincontent" id="mx-100">
        <!-- banner part -->
        <?php get_template_part('template/home/banner'); ?>

        <!-- service section -->
        <div class="home-service">
            <?php echo main_heading('Services', 'Stay Happy', 'Our Services');?>

            <div class="home-service__container">
                <div class="row mx-0 no-gutters">
                    <div class="col-lg-6 col-md-6">
                        <div class="d-flex align-items-center h-100">
                            <img class="w-100" src="<?php echo get_template_directory_uri()?>'/asset/src/images/service-invitation.png'" alt="invitation centre service">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="home-service__container__text">
                            <h2>Our Mission & Vission</h2>
                            <p>Click Insert and then choose the elements you want from the different galleries. Themes and styles also help keep your </p>
                            <p>match your new theme. When you apply styles, your headings change to match the new theme. Save time in Word with new buttons that show up where you need them. To change the way a picture fits in your document, click it and a button for layout </p>
                            <a class="btn about-us" href="#"><span>About Us</span><i>&rarr;</i></a>
                        </div>
                    </div>
                </div>
                
                <!-- service boxes -->
                <?php get_template_part('template/home/service-box'); ?>
                
            </div>

        </div>

    </div>
</div>

<?php get_footer() ?>