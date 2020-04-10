<?php get_header(); ?>
<div class="row m-0 no-gutters">
    <div class="col-lg-3" style="max-width:300px" id="sidebar-container">
        <?php get_template_part('template/sidebar'); ?>
    </div>
    <div class="col-lg-9 mx-auto maincontent page-default" id="mx-100">
        <?php if(have_posts()) : the_post(); setPostViews(get_the_ID());?>
        <div class="single-page">
            <div class="single-page__banner">
                <?php the_title('<h1 class="entry-title">', '</h1>'); ?>

                <div class="single-page__banner__details">
                    <span class="entry-date">
                        <i class="far fa-clock"></i> <?php echo get_the_date(); ?>
                    </span>
                    <span class="entry-category">
                        <i class="far fa-folder"></i>
                        <?php 
                            foreach((get_the_category()) as $category){
                                echo $category->name;
                            }	
                        ?>
                    </span>
                    <span class="entry-author"><i class="far fa-user-circle"></i> <?php the_author() ?></span>

                    <span><i class="far fa-eye"></i> <?php echo getPostViews(get_the_ID());?></span>

                </div>

                <div class="single-page__banner__thumbnail">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="img">
                                <?php
                                if ( has_post_thumbnail() ) :
                                    the_post_thumbnail();

                                else:
                                ?>
                                    <img class="w-100 wp-post-image" src="<?php echo get_template_directory_uri() ?>/asset/src/images/default-blog-image.jpg" alt="<?php the_title() ?>">
                                
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="excerpt">
                                <?php 
                                    the_excerpt('<p>','</p>');
                                ?>
                                <?php 
                                    echo do_shortcode( ' [xs_social_share] ' );
                                ?>
                                
                            </div>
                        </div>
                    </div>
                </div>
            
            </div>
        
        
        <div class="row">
            <div class="col-lg-8 col-md-7">
                <?php the_content('<div>', '</div>'); ?>

                <?php if(!post_password_required()) :?>

                    <div class="comment-template">
                        <?php comments_template(); ?>
                    </div>

                <?php endif; ?>

            </div>
            <div class="col-lg-4 col-md-5 rcent-l-border pl-0">
                <?php get_template_part('template/recent', 'post') ?>
            </div>
        </div>

        <?php else : ?>
            <h1>no post found</h1>
        </div>
        <?php endif; ?>
        <!-- inner footer -->
        <?php get_template_part('template/inner-footer'); ?>

    </div>
</div>

<?php get_footer(); ?>
