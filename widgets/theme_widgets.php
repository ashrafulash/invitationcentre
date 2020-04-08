<?php 
function invitation_widgets_init(){
    // add widgets for 404 page
    $args_sidebar_error = [
        'name'          => esc_html__('404 Widget Area', 'invitationcentre'),
        'description'   => esc_html__('Add widgets for error 404 page', 'invitation centre'),
        'id'            => 'error_widget_area',
        'before_widget' => '<div class="error-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="error-widget__title">',
        'after_title'   => '</h2>',
    ];

    register_sidebar($args_sidebar_error);

    // add widgets for innter footer
    $args_inner_footer_1 = [
        'name'          => esc_html__('Inner Footer Area Top Left', 'invitationcentre'),
        'description'   => esc_html__('Add widgets for Inner Footer', 'invitation centre'),
        'id'            => 'inner-footer_widget_area_1',
        'before_widget' => '<div class="inner-footer-1">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="inner-footer-widget__title">',
        'after_title'   => '</h2>',
    ];

    register_sidebar($args_inner_footer_1);

    $args_inner_footer_2 = [
        'name'          => esc_html__('Inner Footer Area Right Top', 'invitationcentre'),
        'description'   => esc_html__('add widgets for inner Footer', 'invitationcentre'),
        'id'            => 'inner-footer_widget_area_2',
        'before_widget' => '<div class="inner-footer-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="inner-footer-widget__title">',
        'after_title'   => '</h2>',
    ];

    register_sidebar($args_inner_footer_2);

    $args_inner_footer_3 = [
        'name'          => esc_html__('Inner Footer Nav One', 'invitationcentre'),
        'description'   => esc_html__('add widgets for inner Footer', 'invitationcentre'),
        'id'            => 'inner-footer_widget_area_3',
        'before_widget' => '<div class="inner-footer-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="inner-footer-widget__title">',
        'after_title'   => '</h2>',
    ];

    register_sidebar($args_inner_footer_3);

    $args_inner_footer_4 = [
        'name'          => esc_html__('Inner Footer Nav Two', 'invitationcentre'),
        'description'   => esc_html__('add widgets for inner Footer', 'invitationcentre'),
        'id'            => 'inner-footer_widget_area_4',
        'before_widget' => '<div class="inner-footer-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="inner-footer-widget__title">',
        'after_title'   => '</h2>',
    ];

    register_sidebar($args_inner_footer_4);

     $args_inner_footer_5 = [
        'name'          => esc_html__('Inner Footer Nav Three', 'invitationcentre'),
        'description'   => esc_html__('add widgets for inner Footer', 'invitationcentre'),
        'id'            => 'inner-footer_widget_area_5',
        'before_widget' => '<div class="inner-footer-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="inner-footer-widget__title">',
        'after_title'   => '</h2>',
    ];

    register_sidebar($args_inner_footer_5);


    $args_inner_footer_6 = [
        'name'          => esc_html__('Inner Footer Gallery', 'invitationcentre'),
        'description'   => esc_html__('add widgets for inner Footer', 'invitationcentre'),
        'id'            => 'inner-footer_widget_area_6',
        'before_widget' => '<div class="inner-footer-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="inner-footer-widget__title">',
        'after_title'   => '</h2>',
    ];

    register_sidebar($args_inner_footer_6);


}

add_action( 'widgets_init', 'invitation_widgets_init' );