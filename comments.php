<div class="comment-part">
    <?php 
        _e('<p class="dis-area">Discussion Area</p>', 'invitationcentre');
        
        $total_cn = get_comments_number();
        if($total_cn == 1){
            _e('<span class="cmnt-n">1 Comment</span>', 'invitationcentre');
        }
        else{
            _e('<span class="cmnt-n">'. $total_cn .' Comments</span>','invitationcentre');
        }
?>
    <div class="comment-list">
        <?php  wp_list_comments([
            'avatar_size' => 50,
            'max_depth' => 2,
        ]); ?>
    </div>
    <div class="comment-pagination">
        <?php  the_comments_pagination([
            'screen_reader_text' => ' ',
            'prev_text' => '<i class="fas fa-angle-left"></i>',
            'next_text' => '<i class="fas fa-angle-right"></i>',
        ]) ?>
    </div>
<?php

    if(!comments_open()){
        _e('<p class="comment-closed">comments closed</p>','invitationcentre');
    }
    else{
        comment_form();
    }
    
?>
</div>