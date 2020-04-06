<?php get_header(); ?>
<?php get_template_part('template/preloder'); ?>
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
                            <p>
                            We, Invitation Centre ,are working in development of education of Bangladesh. We basically are woking with English language . we are providing the modern facilities to the students.
                            </p>
                            <p>
                            With progress of the world we are updating our system . We believe in change ,and so we take potential initiative to adapt with the modern world . We hope withing 2025 ,we will have a school, a library ,a restaurant and Avoron (Online shop) etc. We have a plan to start a tour business and so  we will take necessary step when we feel to start.
                            </p>
                            <p>
                            The Invitaion sports Centre that has good will in arranging games program is dreaming to arrange well organized sports program and social  activities.
                            </p>
                            <a class="btn about-us" href="<?php echo get_site_url(); ?>/about?active=about"><span>About Us</span><i>&rarr;</i></a>
                        </div>
                    </div>
                </div>
                
                <!-- service boxes -->
                <?php get_template_part('template/home/service-box'); ?>

     
            </div>

        </div>

        <!-- inner footer -->
        <?php get_template_part('template/inner-footer'); ?>

    </div>
</div>

<?php get_footer() ?>