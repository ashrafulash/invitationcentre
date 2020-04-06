<?php get_header(); ?>
<?php get_template_part('template/breadcrumb'); ?>
<?php
    $active = 'home';
    if(isset($_GET['active'])){
        $active = $_GET['active'];
    }
?>
<div class="row m-0 no-gutters">

    <div class="col-lg-3 sidebar-<?php echo $active ?>" style="max-width:300px" id="sidebar-container">
        <?php get_template_part('template/sidebar'); ?>

    </div>
    <div class="col-lg-9 mx-auto maincontent page-default" id="mx-100">

        <?php if(have_posts()) :  while(have_posts()) :  the_post();?>

        <?php
            $innerBg = get_template_directory_uri() . '/asset/src/images/breadcrumb-bg.jpg';
            if(has_post_thumbnail()){
                $innerBg = get_the_post_thumbnail_url();
            }
            
        ?>

        <div class="page-default__banner" style="background-image:url(<?php echo $innerBg; ?>)">
            <?php
                the_title('<h1 class="page-default__banner__title">', '<h1/>');
                the_breadcrumb();     
            ?>
        </div>
            <?php the_content('<div>', '</div>'); ?>

        <?php endwhile; else : ?>
            <h1>no post found</h1>
        <?php endif; ?>
        <!-- inner footer -->
        <?php get_template_part('template/inner-footer'); ?>

    </div>
</div>

<?php get_footer(); ?>
