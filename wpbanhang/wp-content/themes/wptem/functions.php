<?php
function my_custom_wc_theme_support() {

    add_theme_support( 'woocommerce' );

    add_theme_support( 'wc-product-gallery-lightbox' );

    add_theme_support( 'wc-product-gallery-slider' ); 
}

add_action( 'after_setup_theme', 'my_custom_wc_theme_support' );

function initTheme(){
    //doi trinh soan thao
    add_filter('use_block_editor_for_post', '__return_false');
    //chuyen widget về giao diện cũ
    add_filter( 'gutenberg_use_widgets_block_editor', '__return_false' );
    add_filter( 'use_widgets_block_editor', '__return_false' );

    //dang ky menu cho website
    register_nav_menu('header-top',__( 'Menu top' ));
    register_nav_menu('header-main',__( 'Menu chính' ));
    register_nav_menu('footer-menu',__( 'Menu footer' ));

    //dang ky sidebar cho website

    if (function_exists('register_sidebar')){
        register_sidebar(array(
        'name'=> 'Cột bên',
        'id' => 'sidebar',
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3><i class="fa fa-bars"></i>',
        'after_title'   => '</h3>',
    ));
    }

    function setpostview($postID){
        $count_key ='views';
        $count = get_post_meta($postID, $count_key, true);
        if($count == ''){
            $count = 0;
            delete_post_meta($postID, $count_key);
            add_post_meta($postID, $count_key, '0');
        } else {
            $count++;
            update_post_meta($postID, $count_key, $count);
        }
    }
    function getpostviews($postID){
        $count_key ='views';
        $count = get_post_meta($postID, $count_key, true);
        if($count == ''){
            delete_post_meta($postID, $count_key);
            add_post_meta($postID, $count_key, '0');
            return "0";
        }
        return $count;
    }
}

add_action('init', 'initTheme');

function slider_post_type(){
 
    $label = array(
        'name' => 'Ảnh slider', //Tên post type dạng số nhiều
        'singular_name' => 'Ảnh slider' //Tên post type dạng số ít
    );
    $args = array(
        'labels' => $label, //Gọi các label trong biến $label ở trên
        'description' => 'Ảnh slider', //Mô tả của post type
        'supports' => array(
            'title',
            'thumbnail'
        ), //Các tính năng được hỗ trợ trong post type
        'hierarchical' => false, //Cho phép phân cấp, nếu là false thì post type này giống như Post, true thì giống như Page
        'public' => true, //Kích hoạt post type
        'show_ui' => true, //Hiển thị khung quản trị như Post/Page
        'show_in_menu' => true, //Hiển thị trên Admin Menu (tay trái)
        'show_in_nav_menus' => true, //Hiển thị trong Appearance -> Menus
        'show_in_admin_bar' => true, //Hiển thị trên thanh Admin bar màu đen.
        'menu_position' => 5, //Thứ tự vị trí hiển thị trong menu (tay trái)
        'menu_icon' => '', //Đường dẫn tới icon sẽ hiển thị
        'can_export' => true, //Có thể export nội dung bằng Tools -> Export
        'has_archive' => true, //Cho phép lưu trữ (month, date, year)
        'exclude_from_search' => false, //Loại bỏ khỏi kết quả tìm kiếm
        'publicly_queryable' => true, //Hiển thị các tham số trong query, phải đặt true
        'capability_type' => 'post' //
    );
 
    register_post_type('slider', $args); //Tạo post type với slug tên là sanpham và các tham số trong biến $args ở trên
 
}
add_action('init', 'slider_post_type');

function percentSale($price, $price_sale){
    $sale = ($price_sale*100)/$price;
    $percent = 100 - $sale;
    return number_format($percent);
}