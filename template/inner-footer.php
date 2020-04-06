
<div class="inner-footer">
    <div class="inner-footer__top">
        <div class="row mx-0 no-gutters">
            <div class="col-lg-6 col-md-8">
                    <div class="one">
                        <?php
                        if( is_active_sidebar('inner-footer_widget_area_1')){
                            dynamic_sidebar( 'inner-footer_widget_area_1' );
                        }
                    ?>
                    </div>
            </div>
            <div class="col-lg-6 col-md-4">
                <?php
                    if( is_active_sidebar('inner-footer_widget_area_2')){
                        dynamic_sidebar( 'inner-footer_widget_area_2' );
                    }
                ?>
            </div>
        </div>
    </div>
    <div class="inner-footer__bottom">
        <div class="row mx-0">
            <div class="col-lg-2 col-md-4 col-sm-4 col-6">
                <?php
                    if( is_active_sidebar('inner-footer_widget_area_3')){
                        dynamic_sidebar( 'inner-footer_widget_area_3' );
                    }
                ?>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-4 col-6">
                <?php
                    if( is_active_sidebar('inner-footer_widget_area_4')){
                        dynamic_sidebar( 'inner-footer_widget_area_4' );
                    }
                ?>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-4 col-12">
                <?php
                    if( is_active_sidebar('inner-footer_widget_area_5')){
                        dynamic_sidebar( 'inner-footer_widget_area_5' );
                    }
                ?>
            </div>
            <div class="col-lg-4 col-md-10 mt-md-4 col-sm-12 mt-sm-5">
                <?php
                    if( is_active_sidebar('inner-footer_widget_area_6')){
                        dynamic_sidebar( 'inner-footer_widget_area_6' );
                    }
                ?>
            </div>
        </div>
    </div>

    <div class="copyright">
        <p> &copy;copyright <span><?php echo date("Y") ?></span> contained by <span><?php bloginfo('name') ?></span>.</p>
    </div>

</div>