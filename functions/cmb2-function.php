<?php
/**
 * This snippet has been updated to reflect the official supporting of options pages by CMB2
 * in version 2.2.5.
 *
 * If you are using the old version of the options-page registration,
 * it is recommended you swtich to this method.
 */
add_action( 'cmb2_admin_init', 'myprefix_register_theme_options_metabox' );
/**
 * Hook in and register a metabox to handle a theme options page and adds a menu item.
 */
function myprefix_register_theme_options_metabox() {

	/**
	 * Registers options page menu item and form.
	 */
	$cmb = new_cmb2_box( array(
		'id'           => 'myprefix_option_metabox',
		'title'        => esc_html__( 'تنظیمات سایت',),
		'object_types' => array( 'options-page' ),

		/*
		 * The following parameters are specific to the options-page box
		 * Several of these parameters are passed along to add_menu_page()/add_submenu_page().
		 */

		'option_key'      => 'myprefix_options', // The option key and admin menu page slug.
		// 'icon_url'        => 'dashicons-palmtree', // Menu icon. Only applicable if 'parent_slug' is left empty.
		// 'menu_title'      => esc_html__( 'Options', 'myprefix' ), // Falls back to 'title' (above).
		// 'parent_slug'     => 'themes.php', // Make options page a submenu item of the themes menu.
		// 'capability'      => 'manage_options', // Cap required to view options-page.
		// 'position'        => 1, // Menu position. Only applicable if 'parent_slug' is left empty.
		// 'admin_menu_hook' => 'network_admin_menu', // 'network_admin_menu' to add network-level options page.
		// 'display_cb'      => false, // Override the options-page form output (CMB2_Hookup::options_page_output()).
		// 'save_button'     => esc_html__( 'Save Theme Options', 'myprefix' ), // The text for the options-page save button. Defaults to 'Save'.
	) );

	/*
	 * Options fields ids only need
	 * to be unique within this box.
	 * Prefix is not needed.
	 */





    $group_header = $cmb->add_field( array(
        'id'          => 'group_header',
        'type'        => 'group',
        'repeatable'  => false, 
        'options'     => array(
            'group_title'       => __('تنظیمات هدر'), // since version 1.1.4, {#} gets replaced by row number
            'closed'         => true, // true to have the groups closed by default
        ),
    ) );
    
    $cmb->add_group_field( $group_header, array(
        'name' => 'آدرس شرکت',
        'id'   => 'address',
        'type' => 'text',
    ) );
    $cmb->add_group_field( $group_header, array(
        'name' => 'شماره تلفن',
        'id'   => 'mobile',
        'type' => 'text',
    ) );





    $group_social = $cmb->add_field( array(
        'id'          => 'group_social',
        'type'        => 'group',
        'repeatable'  => true, 
        'options'     => array(
            'group_title'       => __('تنظیمات شبکه های اجتماعی'), // since version 1.1.4, {#} gets replaced by row number
            'closed'         => true, // true to have the groups closed by default
        ),
    ) );
    $cmb->add_group_field( $group_social, array(
        'name' => 'آیکون',
        'id'   => 'icon',
        'type' => 'text',
    ) );
    $cmb->add_group_field( $group_social, array(
        'name' => 'لینک',
        'id'   => 'link',
        'type' => 'text',
    ) );




    $group_logo = $cmb->add_field( array(
        'id'          => 'group_logo',
        'type'        => 'group',
        'repeatable'  => false, 
        'options'     => array(
            'group_title'       => __('تنظیمات لوگو'), // since version 1.1.4, {#} gets replaced by row number
            'closed'         => true, // true to have the groups closed by default
        ),
    ) );
    $cmb->add_group_field( $group_logo, array(
        'name' => 'لوگو',
        'id'   => 'logo',
        'type' => 'file',
    ) );





    $group_service = $cmb->add_field( array(
        'id'          => 'group_service',
        'type'        => 'group',
        'repeatable'  => false, 
        'options'     => array(
            'group_title'       => __('تنظیمات بخش سرویس'), // since version 1.1.4, {#} gets replaced by row number
            'closed'         => true, // true to have the groups closed by default
        ),
    ) );
    $cmb->add_group_field( $group_service, array(
        'name' => 'عنوان',
        'id'   => 'title',
        'type' => 'text',
    ) );
    $cmb->add_group_field( $group_service, array(
        'name' => 'توضیحات',
        'id'   => 'desc',
        'type' => 'textarea',
    ) );
    






    $group_service_item = $cmb->add_field( array(
        'id'          => 'group_service_item',
        'type'        => 'group',
        'repeatable'  => true, 
        'options'     => array(
            'group_title'       => __('تنظیمات آیتم های بخش سرویس'), // since version 1.1.4, {#} gets replaced by row number
            'closed'         => true, // true to have the groups closed by default
        ),
    ) );
    $cmb->add_group_field( $group_service_item, array(
        'name' => 'آیکون',
        'id'   => 'icon',
        'type' => 'text',
    ) );
    $cmb->add_group_field( $group_service_item, array(
        'name' => 'عنوان',
        'id'   => 'title',
        'type' => 'text',
    ) );
    $cmb->add_group_field( $group_service_item, array(
        'name' => 'توضیحات',
        'id'   => 'desc',
        'type' => 'textarea',
    ) );


    


    $group_counter_item = $cmb->add_field( array(
        'id'          => 'group_counter_item',
        'type'        => 'group',
        'repeatable'  => true, 
        'options'     => array(
            'group_title'       => __('تنظیمات آیتم های بخش شمارنده'), // since version 1.1.4, {#} gets replaced by row number
            'closed'         => true, // true to have the groups closed by default
        ),
    ) );
    $cmb->add_group_field( $group_counter_item, array(
        'name' => 'آیکون',
        'id'   => 'icon',
        'type' => 'text',
    ) );
    $cmb->add_group_field( $group_counter_item, array(
        'name' => 'شمارنده',
        'id'   => 'counter',
        'type' => 'text',
    ) );
    $cmb->add_group_field( $group_counter_item, array(
        'name' => 'عنوان',
        'id'   => 'title',
        'type' => 'text',
    ));







    $group_portfolio = $cmb->add_field( array(
        'id'          => 'group_portfolio',
        'type'        => 'group',
        'repeatable'  => false, 
        'options'     => array(
            'group_title'       => __('تنظیمات بخش نمونه کار ها'), // since version 1.1.4, {#} gets replaced by row number
            'closed'         => true, // true to have the groups closed by default
        ),
    ) );
    $cmb->add_group_field( $group_portfolio, array(
        'name' => 'عنوان',
        'id'   => 'title',
        'type' => 'text',
    ) );
    $cmb->add_group_field( $group_portfolio, array(
        'name' => 'توضیحات',
        'id'   => 'desc',
        'type' => 'textarea',
    ) );





    $group_company = $cmb->add_field( array(
        'id'          => 'group_company',
        'type'        => 'group',
        'repeatable'  => false, 
        'options'     => array(
            'group_title'       => __('تنظیمات بخش شرکت ها'), // since version 1.1.4, {#} gets replaced by row number
            'closed'         => true, // true to have the groups closed by default
        ),
    ) );
    $cmb->add_group_field( $group_company, array(
        'name' => 'عنوان',
        'id'   => 'title',
        'type' => 'text',
    ) );
    $cmb->add_group_field( $group_company, array(
        'name' => 'توضیحات',
        'id'   => 'desc',
        'type' => 'textarea',
    ) );





    $group_company_item = $cmb->add_field( array(
        'id'          => 'group_company_item',
        'type'        => 'group',
        'repeatable'  => true, 
        'options'     => array(
            'group_title'       => __('تنظیمات آیتم های بخش مشتریان'), // since version 1.1.4, {#} gets replaced by row number
            'closed'         => true, // true to have the groups closed by default
        ),
    ) );

    $cmb->add_group_field( $group_company_item, array(
        'name' => 'ایکون',
        'id'   => 'icon',
        'type' => 'file',
    ) );
    $cmb->add_group_field( $group_company_item, array(
        'name' => 'لینک',
        'id'   => 'link',
        'type' => 'text',
    ) );






}

/**
 * Wrapper function around cmb2_get_option
 * @since  0.1.0
 * @param  string $key     Options array key
 * @param  mixed  $default Optional default value
 * @return mixed           Option value
 */
function myprefix_get_option( $key = '', $default = false ) {
	if ( function_exists( 'cmb2_get_option' ) ) {
		// Use cmb2_get_option as it passes through some key filters.
		return cmb2_get_option( 'myprefix_options', $key, $default );
	}

	// Fallback to get_option if CMB2 is not loaded yet.
	$opts = get_option( 'myprefix_options', $default );

	$val = $default;

	if ( 'all' == $key ) {
		$val = $opts;
	} elseif ( is_array( $opts ) && array_key_exists( $key, $opts ) && false !== $opts[ $key ] ) {
		$val = $opts[ $key ];
	}

	return $val;
}
