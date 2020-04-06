<?php
/*
    Template Name: blog Template
*/
?>
<?php get_header(); ?>
<?php get_template_part('template/breadcrumb'); ?>
<?php
    $active = 'blog';
    if(isset($_GET['active'])){
        $active = $_GET['active'];
    }
?>
<div class="row m-0 no-gutters">

    <div class="col-lg-3 sidebar-<?php echo $active ?>" style="max-width:300px" id="sidebar-container">
        <?php get_template_part('template/sidebar'); ?>

    </div>
    <div class="col-lg-9 mx-auto maincontent page-default" id="mx-100">
        <div class="blog_content">
        
        
        </div>

        <!-- inner footer -->
        <?php get_template_part('template/inner-footer'); ?>

    </div>
</div>

<?php get_footer(); ?>
