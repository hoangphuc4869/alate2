<?php

/* Disable WordPress Admin Bar for all users */
add_filter( 'show_admin_bar', '__return_false' );

// Thêm ảnh đại diện
add_theme_support('post-thumbnails');

function m_register_menu()
{
	register_nav_menus(
		array(
			'menu-1' => __('Menu PC'),
			
		)
	);
}
add_action('init', 'm_register_menu');


// add theme option menu bar admin 
if (function_exists('acf_add_options_page')) {
    acf_add_options_page();
}



function custom_breadcrumb_separator($separator) {
    
    $custom_separator = '<span class="cus-sep"><svg xmlns="http://www.w3.org/2000/svg" width="75" height="71" viewBox="0 0 75 71" fill="none">
  <path d="M74.2451 43.7422L74.2451 27.3876L0.000121344 54.3857L0.00012207 71L74.2451 43.7422Z" fill="#FAFAFB"/>
  <path d="M74.2451 27.3876L71.7789 26.0896L0.000121974 52.1792L0.00012207 54.3857L74.2451 27.3876Z" fill="#8C6213"/>
  <path d="M66.617 26.2784L9.81242e-05 2.07679L9.80335e-05 4.9371e-06L69.3127 25.181L69.3127 25.2986L66.617 26.2784Z" fill="#E6F0FF"/>
  <path d="M46.7368 33.5752L9.4626e-05 16.6143L9.45353e-05 14.5375L49.5959 32.536L46.7368 33.5752Z" fill="#E6F0FF"/>
  <path d="M51.7403 31.7566L8.31026e-05 12.9799L8.30118e-05 10.9031L54.5994 30.7174L51.7403 31.7566Z" fill="#E6F0FF"/>
  <path d="M56.7437 29.9379L6.77644e-05 9.34546L6.76736e-05 7.26868L59.6028 28.8987L56.7437 29.9379Z" fill="#E6F0FF"/>
  <path d="M61.7471 28.1193L9.05732e-05 5.71113L9.04825e-05 3.63434L64.3804 26.9981L64.3804 27.1622L61.7471 28.1193Z" fill="#E6F0FF"/>
</svg></span>';
    return $custom_separator;
}
add_filter('wpseo_breadcrumb_separator', 'custom_breadcrumb_separator');