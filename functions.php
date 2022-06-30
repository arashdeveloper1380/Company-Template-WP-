<?php
function arashSetup (){
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );

    register_nav_menus(
        array(
            'main' =>'منوی اصلی',
            'footer' =>'منوی پایینی',
        )
    );
}
add_action('after_setup_theme','arashSetup');
?>

<?php 
function arashScriptStyle(){
    // Styles
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/style.bootstrap.css' );
    wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/css/style.fontawesome.css' );
    wp_enqueue_style( 'animatecss', get_template_directory_uri() . '/css/style.fancybox.css' );
    wp_enqueue_style( 'fancyboxcss', get_template_directory_uri() . '/css/style.animate.css' );
    wp_enqueue_style( 'style', get_stylesheet_uri() );

    // Scripts
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery.js', array(), '1.0.0', true );
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/jquery.bootstrap.js', array(), '1.0.0', true );
    wp_enqueue_script( 'wow', get_template_directory_uri() . '/js/jquery.wow.js', array(), '1.0.0', true );
    wp_enqueue_script( 'fancybox', get_template_directory_uri() . '/js/jquery.fancybox.js', array(), '1.0.0', true );
    wp_enqueue_script( 'video', get_template_directory_uri() . '/js/jquery.video.js', array(), '1.0.0', true );
    wp_enqueue_script( 'index', get_template_directory_uri() . '/js/jquery.index.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'arashScriptStyle' );
?>

<?php
function create_slider() {
    register_post_type( 'slider',
    array(
        'labels' => array(
        'name' => __( 'اسلایدر' ),
        'singular_name' => __( 'اسلایدر' )
        ),
        'public' => true,
        'supports' => array(
        'title','thumbnail','editor','excerpt'
        ),
    )
    );
}
add_action( 'init', 'create_slider' );
?>

<?php
function create_portfolio() {
    register_post_type( 'portfolio',
    array(
        'labels' => array(
        'name' => __( 'نمونه کارها' ),
        'singular_name' => __( 'نمونه کارها' )
        ),
        'public' => true,
        'supports' => array(
        'title','thumbnail','editor','excerpt'
        ),
    )
    );
}
add_action( 'init', 'create_portfolio' );
?>

<?php 
function arash_widget(){
    register_sidebar(array(
        'name'=>'خبر نامه',
        'id'=>'widget_newslatter',
        'before_widget'=>'',
        'after_widget'=>'',
        'before_title'=>'',
        'after_title'=>'',
    ));
    register_sidebar(array(
        'name' => 'سایدبار سمت چپ',
        'id' => 'widget_sidebar',
        'before_widget' =>'<div class="widget shadow-around">',
        'after_widget' =>'</div>',
        'before_title' =>'<h4>',
        'after_title' =>'</h4>',
        ));
} 
add_action('widgets_init', 'arash_widget');
?>


<?php
// Register Custom Taxonomy
function custom_taxonomy() {

	$labels = array(
		'name'                       => _x( 'دسته بندی', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'دسته بندی', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'دسته بندی', 'text_domain' ),
		'all_items'                  => __( 'All Items', 'text_domain' ),
		'parent_item'                => __( 'Parent Item', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Item:', 'text_domain' ),
		'new_item_name'              => __( 'New Item Name', 'text_domain' ),
		'add_new_item'               => __( 'Add New Item', 'text_domain' ),
		'edit_item'                  => __( 'Edit Item', 'text_domain' ),
		'update_item'                => __( 'Update Item', 'text_domain' ),
		'view_item'                  => __( 'View Item', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular Items', 'text_domain' ),
		'search_items'               => __( 'Search Items', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No items', 'text_domain' ),
		'items_list'                 => __( 'Items list', 'text_domain' ),
		'items_list_navigation'      => __( 'Items list navigation', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'portfolio_cat', array( 'portfolio' ), $args );

}
add_action( 'init', 'custom_taxonomy', 0 );
?>

<?php  
require_once dirname( __FILE__ ) . '/cmb2/init.php';
require_once dirname( __FILE__ ) . '/functions/cmb2-function.php';
require_once dirname( __FILE__ ) . '/functions/cmb2-metabox.php';
?>