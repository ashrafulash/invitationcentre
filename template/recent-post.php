<div class="recent-post">
                    <h3 class="recent-post__title">Related Post</h3>
                    <?php 
                        Global $currentID;
                        foreach((get_the_category()) as $category){
                            $currentID =  get_cat_ID($category->name);
                        }

                        $cat_id = new WP_query([
                            'cat' => $currentID,
                            'posts_per_page' => 5,
                            'post_status' => 'publish',
                            'orderby' => 'publish_date',
                            'order' => 'ASC',
                            ]);

                        while($cat_id->have_posts()):
                            $cat_id->the_post();
                        ?>

                        <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
                            <div class="image">
                                <?php
                                if ( has_post_thumbnail() ) :
                                    the_post_thumbnail();

                                else:
                                ?>
                                    <img class="w-100 wp-post-image" src="<?php echo get_template_directory_uri() ?>/asset/src/images/default-blog-image.jpg" alt="<?php the_title() ?>">
                                
                                <?php endif; ?>
                            </div>

                            <div class="recent-content">
                                <span class="entry-date">
                                    <i class="far fa-clock"></i> <?php the_date(); ?>
                                </span>
                                <span class="entry-category">
                                    <i class="far fa-folder"></i>
                                    <?php 
                                        foreach((get_the_category()) as $category){
                                            echo $category->name;
                                        }	
                                    ?>
                                </span>
                                <h2><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
                            </div>
                        </article>
        
                        <?php endwhile;?>
                </div>