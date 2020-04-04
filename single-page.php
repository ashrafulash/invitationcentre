<?php 
/*
    Template Name: Single Homepage
*/

?>
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
    <div class="col-lg-9 mx-auto mb-5 maincontent page-default" id="mx-100">

        <?php if(have_posts()) :  while(have_posts()) :  the_post();?>

        <?php the_content('<div>', '</div>'); ?>

        <?php endwhile; else : ?>
            <h1>no post found</h1>
        <?php endif; ?>
        <!-- inner footer -->
        <?php get_template_part('template/inner-footer'); ?>

    </div>
</div>

<?php get_footer(); ?>
