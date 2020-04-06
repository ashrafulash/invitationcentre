<?php
/**
 * Template Name: Blog Post Template
 */
?>

<?php 
$args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
);
$arr_posts = new WP_Query( $args );
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
        <?php if(have_posts()) : the_post();?>

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
        <?php endif; ?>
    <div class="blog_content">


        <?php if ( $arr_posts->have_posts() ) : ?> 
                
                <div class="row mx-0">

                <?php
                while ( $arr_posts->have_posts() ) :
                    $arr_posts->the_post();
                    ?>
                        <div class="col-lg-4 mb-5 col-md-6">
                            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                            <div class="blog_post_image">
                                <?php
                                if ( has_post_thumbnail() ) :
                                    the_post_thumbnail();

                                else:
                                ?>
                                    <img class="wp-post-image" src="<?php echo get_template_directory_uri() ?>/asset/src/images/default-blog-image.jpg" alt="<?php the_title() ?>">
                                
                                <?php endif; ?>
                                </div>
                                <div class="content">
                                    <header class="entry-header">
                                        <span class="entry-date"><i class="far fa-clock"></i> <?php the_date(); ?></span>
                                        <span class="entry-category">
                                            <i class="far fa-folder"></i>
                                            <?php 
                                                foreach((get_the_category()) as $category){
                                                    echo $category->name;
                                                }	
                                            ?>
                                        </span>
                                        <h1 class="entry-title"><a href="<?php the_permalink( ) ?>"><?php the_title(); ?></a></h1>
                                    </header>
                                    <?php if(! has_excerpt()): ?>
                                    <div class="entry-content">
                                        <?php the_excerpt(10); ?>
                                        <a class="read_more btn" href="<?php the_permalink(); ?>">Read More</a>
                                    </div>
                                    <?php endif; ?>
                                </div>
                            </article>

                        </div>
                    
                    
                    <?php
                endwhile;
                ?> 
                </div>
                <?php endif; ?>
    
    </div>


        <!-- inner footer -->
        <?php get_template_part('template/inner-footer'); ?>

    </div>
</div>

<?php get_footer(); ?>





