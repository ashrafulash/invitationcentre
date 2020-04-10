<div class="post-pagination">
    <?php 

    Global $totalPosts; 
    $count_posts = wp_count_posts();
        if ( $count_posts ) {
            $totalPosts = $count_posts->publish;
        }
    
    $nextPost = get_next_posts_page_link();
    $prevPost = get_previous_posts_page_link();
    $postPerPage = get_option( 'posts_per_page');
        
    Global $current_page;
        if ( get_query_var('paged') ) {

            $current_page = get_query_var('paged');

        } elseif ( get_query_var('page') ) {
        // 'page' is used instead of 'paged' on Static Front Page
        $current_page = get_query_var('page');

        } else {

            $current_page = 1;
        }

    
    Global $area_disable;
    Global $disable;


    if($current_page != 1){
        $area_disable = 'false';
        $disable = 'enable';
    }
    else{
        $area_disable = 'true';
        $disable = 'disabled';
    }


    $needPage = ceil($totalPosts / $postPerPage);

    Global $disable_next;

    if($needPage == $current_page){
        $disable_next = 'disabled';
    }else{
        $disable_next = 'enable';
    }

    ?>
    
<nav aria-label="Page navigation example">
    <ul class="pagination justify-content-center">
        <li class="page-item <?php echo $disable ?>">
            <a class="page-link" href="<?php echo $prevPost ?>" tabindex="-1" aria-disabled="<?php $area_disable ?>"><i class="fas fa-arrow-left"></i></a>
        </li>
            <li class="page-item active"><a class="page-link" href="#"><?php echo $current_page ?></a></li>

    <li class="page-item <?php echo $disable_next ?>">
      <a class="page-link" href="<?php echo $nextPost; ?>"><i class="fas fa-arrow-right"></i></a>
    </li>
  </ul>
</nav>


</div>