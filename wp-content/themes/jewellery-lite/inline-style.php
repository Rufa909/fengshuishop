<?php

	$jewellery_lite_first_color = get_theme_mod('jewellery_lite_first_color');

	$jewellery_lite_custom_css = "";
	
	if($jewellery_lite_first_color != false){
		$jewellery_lite_custom_css .='.top-bar,span.cart-value,.more-btn a,.woocommerce span.onsale,input[type="submit"],#sidebar .tagcloud a:hover,#footer-2,#comments input[type="submit"],.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt,#sidebar .custom-social-icons i, #footer .custom-social-icons i,.pagination .current,.pagination a:hover,nav.woocommerce-MyAccount-navigation ul li,#footer .tagcloud a:hover, .scrollup i, #comments a.comment-reply-link, .toggle-nav i , #footer .widget_price_filter .ui-slider .ui-slider-range, #footer .widget_price_filter .ui-slider .ui-slider-handle, #footer .woocommerce-product-search button, #sidebar .woocommerce-product-search button, #sidebar .widget_price_filter .ui-slider .ui-slider-range, #sidebar .widget_price_filter .ui-slider .ui-slider-handle, #footer a.custom_read_more, #sidebar a.custom_read_more, .woocommerce nav.woocommerce-pagination ul li a:hover, .woocommerce nav.woocommerce-pagination ul li span.current, .nav-previous a:hover, .nav-next a:hover, .wp-block-button__link, #preloader, #footer .wp-block-search .wp-block-search__button, #sidebar .wp-block-search .wp-block-search__button, .bradcrumbs a:hover, .bradcrumbs span,#sidebar h3, #sidebar .wp-block-search .wp-block-search__label, #sidebar .wp-block-heading,.wp-block-tag-cloud a:hover,.post-categories li a,.post-categories li a:hover,.bradcrumbs a, .wp-block-woocommerce-cart .wc-block-components-product-badge, .wc-block-grid__product-onsale, header.woocommerce-Address-title.title a,.woocommerce-cart .wc-block-grid .wc-block-grid__product-onsale, .woocommerce-cart .wc-block-grid__product:hover a.wp-block-button__link.add_to_cart_button, .wc-block-components-checkout-return-to-cart-button{';
			$jewellery_lite_custom_css .='background-color: '.esc_attr($jewellery_lite_first_color).';';
		$jewellery_lite_custom_css .='}';
	}
	if($jewellery_lite_first_color != false){
		$jewellery_lite_custom_css .='.wp-block-woocommerce-cart .wc-block-cart__submit-button, .wc-block-components-checkout-place-order-button, .wc-block-components-totals-coupon__button,.wp-block-woocommerce-cart .wc-block-cart__submit-button, .wc-block-components-checkout-place-order-button, .wc-block-components-totals-coupon__button,.wc-block-components-order-summary-item__quantity{';
			$jewellery_lite_custom_css .='background-color: '.esc_attr($jewellery_lite_first_color).'!important;';
		$jewellery_lite_custom_css .='}';
	}
	if($jewellery_lite_first_color != false){
		$jewellery_lite_custom_css .='a,.products li:hover h2,#sidebar ul li a:hover,.post-main-box:hover h2,#footer .custom-social-icons i:hover,.post-navigation a:hover .post-title, .post-navigation a:focus .post-title,#footer li a:hover, .post-main-box:hover h2 a, .post-main-box:hover .post-info a, .single-post .post-info:hover a, .main-navigation a:hover, .main-navigation ul.sub-menu a:hover, .entry-content a, #sidebar .textwidget p a, .textwidget p a, #comments p a, .slider .inner_carousel p a, #footer a.custom_read_more:hover, .logo .site-title a:hover, .account a:hover, span.cart_no a:hover, #slider .inner_carousel h1 a:hover,#footer .wp-block-button.aligncenter, .wp-block-calendar a, #footer .wp-block-button.aligncenter, .wp-block-calendar a:hover,.wp-block-button.is-style-outline a{';
			$jewellery_lite_custom_css .='color: '.esc_attr($jewellery_lite_first_color).';';
		$jewellery_lite_custom_css .='}';
	}
	if($jewellery_lite_first_color != false){
		$jewellery_lite_custom_css .='.main-navigation ul ul{';
			$jewellery_lite_custom_css .='border-top-color: '.esc_attr($jewellery_lite_first_color).';';
		$jewellery_lite_custom_css .='}';
	}
	if($jewellery_lite_first_color != false){
		$jewellery_lite_custom_css .='.main-navigation ul ul, .header-fixed{';
			$jewellery_lite_custom_css .='border-bottom-color: '.esc_attr($jewellery_lite_first_color).';';
		$jewellery_lite_custom_css .='}';
	}
	if($jewellery_lite_first_color != false){
		$jewellery_lite_custom_css .='.toggle a{';
			$jewellery_lite_custom_css .='background: url(assets/images/responsive_menu.png) no-repeat right center '.esc_attr($jewellery_lite_first_color).';';
		$jewellery_lite_custom_css .='}';
	}
	if($jewellery_lite_first_color != false){
		$jewellery_lite_custom_css .='.wp-block-button.is-style-outline .wp-block-button__link,.main-navigation li.current_page_item{';
			$jewellery_lite_custom_css .='border-color: '.esc_attr($jewellery_lite_first_color).'!important;';
		$jewellery_lite_custom_css .='}';
	}
	/*---------------------------Width Layout -------------------*/

	$jewellery_lite_theme_lay = get_theme_mod( 'jewellery_lite_width_option','Full Width');
    if($jewellery_lite_theme_lay == 'Boxed'){
		$jewellery_lite_custom_css .='body{';
			$jewellery_lite_custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$jewellery_lite_custom_css .='}';
		$jewellery_lite_custom_css .='.scrollup i{';
			$jewellery_lite_custom_css .='right: 100px;';
		$jewellery_lite_custom_css .='}';
		$jewellery_lite_custom_css .='.scrollup.left i{';
			$jewellery_lite_custom_css .='left: 100px;';
		$jewellery_lite_custom_css .='}';
	}else if($jewellery_lite_theme_lay == 'Wide Width'){
		$jewellery_lite_custom_css .='body{';
			$jewellery_lite_custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$jewellery_lite_custom_css .='}';
		$jewellery_lite_custom_css .='.scrollup i{';
			$jewellery_lite_custom_css .='right: 30px;';
		$jewellery_lite_custom_css .='}';
		$jewellery_lite_custom_css .='.scrollup.left i{';
			$jewellery_lite_custom_css .='left: 30px;';
		$jewellery_lite_custom_css .='}';
	}else if($jewellery_lite_theme_lay == 'Full Width'){
		$jewellery_lite_custom_css .='body{';
			$jewellery_lite_custom_css .='max-width: 100%;';
		$jewellery_lite_custom_css .='}';
	}

	/*-------------------- Slider Opacity -------------------*/

	$jewellery_lite_theme_lay = get_theme_mod( 'jewellery_lite_slider_opacity_color','0.8');
	if($jewellery_lite_theme_lay == '0'){
		$jewellery_lite_custom_css .='#slider img{';
			$jewellery_lite_custom_css .='opacity:0';
		$jewellery_lite_custom_css .='}';
		}else if($jewellery_lite_theme_lay == '0.1'){
		$jewellery_lite_custom_css .='#slider img{';
			$jewellery_lite_custom_css .='opacity:0.1';
		$jewellery_lite_custom_css .='}';
		}else if($jewellery_lite_theme_lay == '0.2'){
		$jewellery_lite_custom_css .='#slider img{';
			$jewellery_lite_custom_css .='opacity:0.2';
		$jewellery_lite_custom_css .='}';
		}else if($jewellery_lite_theme_lay == '0.3'){
		$jewellery_lite_custom_css .='#slider img{';
			$jewellery_lite_custom_css .='opacity:0.3';
		$jewellery_lite_custom_css .='}';
		}else if($jewellery_lite_theme_lay == '0.4'){
		$jewellery_lite_custom_css .='#slider img{';
			$jewellery_lite_custom_css .='opacity:0.4';
		$jewellery_lite_custom_css .='}';
		}else if($jewellery_lite_theme_lay == '0.5'){
		$jewellery_lite_custom_css .='#slider img{';
			$jewellery_lite_custom_css .='opacity:0.5';
		$jewellery_lite_custom_css .='}';
		}else if($jewellery_lite_theme_lay == '0.6'){
		$jewellery_lite_custom_css .='#slider img{';
			$jewellery_lite_custom_css .='opacity:0.6';
		$jewellery_lite_custom_css .='}';
		}else if($jewellery_lite_theme_lay == '0.7'){
		$jewellery_lite_custom_css .='#slider img{';
			$jewellery_lite_custom_css .='opacity:0.7';
		$jewellery_lite_custom_css .='}';
		}else if($jewellery_lite_theme_lay == '0.8'){
		$jewellery_lite_custom_css .='#slider img{';
			$jewellery_lite_custom_css .='opacity:0.8';
		$jewellery_lite_custom_css .='}';
		}else if($jewellery_lite_theme_lay == '0.9'){
		$jewellery_lite_custom_css .='#slider img{';
			$jewellery_lite_custom_css .='opacity:0.9';
		$jewellery_lite_custom_css .='}';
	}

	/*---------------------- Slider Image Overlay ------------------------*/

	$jewellery_lite_slider_image_overlay = get_theme_mod('jewellery_lite_slider_image_overlay', true);
	if($jewellery_lite_slider_image_overlay == false){
		$jewellery_lite_custom_css .='#slider img{';
			$jewellery_lite_custom_css .='opacity:1;';
		$jewellery_lite_custom_css .='}';
	}

	$jewellery_lite_slider_image_overlay_color = get_theme_mod('jewellery_lite_slider_image_overlay_color', true);
	if($jewellery_lite_slider_image_overlay_color != false){
		$jewellery_lite_custom_css .='#slider{';
			$jewellery_lite_custom_css .='background-color: '.esc_attr($jewellery_lite_slider_image_overlay_color).';';
		$jewellery_lite_custom_css .='}';
	}

	/*----------------Slider Content Layout -------------------*/

	$jewellery_lite_theme_lay = get_theme_mod( 'jewellery_lite_slider_content_option','Left');
    if($jewellery_lite_theme_lay == 'Left'){
		$jewellery_lite_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1{';
			$jewellery_lite_custom_css .='text-align:left; left:20%; right:45%;';
		$jewellery_lite_custom_css .='}';
	}else if($jewellery_lite_theme_lay == 'Center'){
		$jewellery_lite_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1{';
			$jewellery_lite_custom_css .='text-align:center; left:20%; right:20%;';
		$jewellery_lite_custom_css .='}';
	}else if($jewellery_lite_theme_lay == 'Right'){
		$jewellery_lite_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1{';
			$jewellery_lite_custom_css .='text-align:right; left:45%; right:20%;';
		$jewellery_lite_custom_css .='}';
	}

	/*------------- Slider Content Padding Settings ------------------*/

	$jewellery_lite_slider_content_padding_top_bottom = get_theme_mod('jewellery_lite_slider_content_padding_top_bottom');
	$jewellery_lite_slider_content_padding_left_right = get_theme_mod('jewellery_lite_slider_content_padding_left_right');
	if($jewellery_lite_slider_content_padding_top_bottom != false || $jewellery_lite_slider_content_padding_left_right != false){
		$jewellery_lite_custom_css .='#slider .carousel-caption{';
			$jewellery_lite_custom_css .='top: '.esc_attr($jewellery_lite_slider_content_padding_top_bottom).'; bottom: '.esc_attr($jewellery_lite_slider_content_padding_top_bottom).';left: '.esc_attr($jewellery_lite_slider_content_padding_left_right).';right: '.esc_attr($jewellery_lite_slider_content_padding_left_right).';';
		$jewellery_lite_custom_css .='}';
	}

	/*---------------------------Slider Height ------------*/

	$jewellery_lite_slider_height = get_theme_mod('jewellery_lite_slider_height');
	if($jewellery_lite_slider_height != false){
		$jewellery_lite_custom_css .='#slider img{';
			$jewellery_lite_custom_css .='height: '.esc_attr($jewellery_lite_slider_height).';';
		$jewellery_lite_custom_css .='}';
	}

	/*---------------------------Blog Layout -------------------*/

	$jewellery_lite_theme_lay = get_theme_mod( 'jewellery_lite_blog_layout_option','Default');
    if($jewellery_lite_theme_lay == 'Default'){
		$jewellery_lite_custom_css .='.post-main-box{';
			$jewellery_lite_custom_css .='';
		$jewellery_lite_custom_css .='}';
	}else if($jewellery_lite_theme_lay == 'Center'){
		$jewellery_lite_custom_css .='.post-main-box, .post-main-box h2, .post-info, .new-text p, .content-bttn{';
			$jewellery_lite_custom_css .='text-align:center;';
		$jewellery_lite_custom_css .='}';
		$jewellery_lite_custom_css .='.post-info, .content-bttn{';
			$jewellery_lite_custom_css .='margin-top:10px;';
		$jewellery_lite_custom_css .='}';
		$jewellery_lite_custom_css .='.post-info hr{';
			$jewellery_lite_custom_css .='margin:10px auto;';
		$jewellery_lite_custom_css .='}';
	}else if($jewellery_lite_theme_lay == 'Left'){
		$jewellery_lite_custom_css .='.post-main-box, .post-main-box h2, .post-info, .new-text p, .content-bttn, #our-services p{';
			$jewellery_lite_custom_css .='text-align:Left;';
		$jewellery_lite_custom_css .='}';
		$jewellery_lite_custom_css .='.content-bttn{';
			$jewellery_lite_custom_css .='margin:20px 0;';
		$jewellery_lite_custom_css .='}';
		$jewellery_lite_custom_css .='.post-info hr{';
			$jewellery_lite_custom_css .='margin-bottom:10px;';
		$jewellery_lite_custom_css .='}';
		$jewellery_lite_custom_css .='.post-main-box h2{';
			$jewellery_lite_custom_css .='margin-top:10px;';
		$jewellery_lite_custom_css .='}';
	}

	$jewellery_lite_header_cart = get_theme_mod( 'jewellery_lite_my_account_hide_show',true);
    if($jewellery_lite_header_cart == true){	
		$jewellery_lite_custom_css .='span.cart-value{';
			$jewellery_lite_custom_css .='right: -20px;';
		$jewellery_lite_custom_css .='}';
	}else if($jewellery_lite_header_cart == false){
		$jewellery_lite_custom_css .='span.cart-value{';
			$jewellery_lite_custom_css .='right: -20px;';
		$jewellery_lite_custom_css .='}';
	}

	/*--------------------- Blog Page Posts -------------------*/

	$jewellery_lite_blog_page_posts_settings = get_theme_mod( 'jewellery_lite_blog_page_posts_settings','Into Blocks');
		if($jewellery_lite_blog_page_posts_settings == 'Without Blocks'){
		$jewellery_lite_custom_css .='.post-main-box{';
			$jewellery_lite_custom_css .='box-shadow: none; border: none; margin:30px 0;background:none;';
		$jewellery_lite_custom_css .='}';
	}

	$jewellery_lite_related_image_box_shadow = get_theme_mod('jewellery_lite_related_image_box_shadow',0);
	if($jewellery_lite_related_image_box_shadow != false){
		$jewellery_lite_custom_css .='.related-post .box-image img{';
			$jewellery_lite_custom_css .='box-shadow: '.esc_attr($jewellery_lite_related_image_box_shadow).'px '.esc_attr($jewellery_lite_related_image_box_shadow).'px '.esc_attr($jewellery_lite_related_image_box_shadow).'px #cccccc;';
		$jewellery_lite_custom_css .='}';
	}


	/*-------------------Responsive Media -----------------------*/

	$jewellery_lite_resp_topbar = get_theme_mod( 'jewellery_lite_resp_topbar_hide_show',true);
	if($jewellery_lite_resp_topbar == true && get_theme_mod( 'jewellery_lite_topbar_hide_show', true) == false){
    	$jewellery_lite_custom_css .='.top-bar{';
			$jewellery_lite_custom_css .='display:none;';
		$jewellery_lite_custom_css .='} ';
	}
    if($jewellery_lite_resp_topbar == true){
    	$jewellery_lite_custom_css .='@media screen and (max-width:575px) {';
		$jewellery_lite_custom_css .='.top-bar{';
			$jewellery_lite_custom_css .='display:block;';
		$jewellery_lite_custom_css .='} }';
	}else if($jewellery_lite_resp_topbar == false){
		$jewellery_lite_custom_css .='@media screen and (max-width:575px) {';
		$jewellery_lite_custom_css .='.top-bar{';
			$jewellery_lite_custom_css .='display:none;';
		$jewellery_lite_custom_css .='} }';
	}

	$jewellery_lite_resp_stickyheader = get_theme_mod( 'jewellery_lite_stickyheader_hide_show',false);
	if($jewellery_lite_resp_stickyheader == true && get_theme_mod( 'jewellery_lite_sticky_header',false) != true){
    	$jewellery_lite_custom_css .='.header-fixed{';
			$jewellery_lite_custom_css .='position:static;';
		$jewellery_lite_custom_css .='} ';
	}
    if($jewellery_lite_resp_stickyheader == true){
    	$jewellery_lite_custom_css .='@media screen and (max-width:575px) {';
		$jewellery_lite_custom_css .='.header-fixed{';
			$jewellery_lite_custom_css .='position:fixed;';
		$jewellery_lite_custom_css .='} }';
	}else if($jewellery_lite_resp_stickyheader == false){
		$jewellery_lite_custom_css .='@media screen and (max-width:575px){';
		$jewellery_lite_custom_css .='.header-fixed{';
			$jewellery_lite_custom_css .='position:static;';
		$jewellery_lite_custom_css .='} }';
	}

	$jewellery_lite_resp_slider = get_theme_mod( 'jewellery_lite_resp_slider_hide_show',true);
	if($jewellery_lite_resp_slider == true && get_theme_mod( 'jewellery_lite_slider_hide_show', true) == false){
    	$jewellery_lite_custom_css .='#slider{';
			$jewellery_lite_custom_css .='display:none;';
		$jewellery_lite_custom_css .='} ';
	}
    if($jewellery_lite_resp_slider == true){
    	$jewellery_lite_custom_css .='@media screen and (max-width:575px) {';
		$jewellery_lite_custom_css .='#slider{';
			$jewellery_lite_custom_css .='display:block;';
		$jewellery_lite_custom_css .='} }';
	}else if($jewellery_lite_resp_slider == false){
		$jewellery_lite_custom_css .='@media screen and (max-width:575px) {';
		$jewellery_lite_custom_css .='#slider{';
			$jewellery_lite_custom_css .='display:none;';
		$jewellery_lite_custom_css .='} }';
	}

	$jewellery_lite_resp_sidebar = get_theme_mod( 'jewellery_lite_sidebar_hide_show',true);
    if($jewellery_lite_resp_sidebar == true){
    	$jewellery_lite_custom_css .='@media screen and (max-width:575px) {';
		$jewellery_lite_custom_css .='#sidebar{';
			$jewellery_lite_custom_css .='display:block;';
		$jewellery_lite_custom_css .='} }';
	}else if($jewellery_lite_resp_sidebar == false){
		$jewellery_lite_custom_css .='@media screen and (max-width:575px) {';
		$jewellery_lite_custom_css .='#sidebar{';
			$jewellery_lite_custom_css .='display:none;';
		$jewellery_lite_custom_css .='} }';
	}

	$jewellery_lite_resp_scroll_top = get_theme_mod( 'jewellery_lite_resp_scroll_top_hide_show',true);
	if($jewellery_lite_resp_scroll_top == true && get_theme_mod( 'jewellery_lite_hide_show_scroll',true) != true){
    	$jewellery_lite_custom_css .='.scrollup i{';
			$jewellery_lite_custom_css .='visibility:hidden !important;';
		$jewellery_lite_custom_css .='} ';
	}
    if($jewellery_lite_resp_scroll_top == true){
    	$jewellery_lite_custom_css .='@media screen and (max-width:575px) {';
		$jewellery_lite_custom_css .='.scrollup i{';
			$jewellery_lite_custom_css .='visibility:visible !important;';
		$jewellery_lite_custom_css .='} }';
	}else if($jewellery_lite_resp_scroll_top == false){
		$jewellery_lite_custom_css .='@media screen and (max-width:575px){';
		$jewellery_lite_custom_css .='.scrollup i{';
			$jewellery_lite_custom_css .='visibility:hidden !important;';
		$jewellery_lite_custom_css .='} }';
	}

	$jewellery_lite_resp_menu_toggle_btn_bg_color = get_theme_mod('jewellery_lite_resp_menu_toggle_btn_bg_color');
	if($jewellery_lite_resp_menu_toggle_btn_bg_color != false){
		$jewellery_lite_custom_css .='.toggle-nav i,.sidenav .closebtn{';
			$jewellery_lite_custom_css .='background: '.esc_attr($jewellery_lite_resp_menu_toggle_btn_bg_color).';';
		$jewellery_lite_custom_css .='}';
	}

	/*------------- Top Bar Settings ------------------*/

	$jewellery_lite_topbar_padding_top_bottom = get_theme_mod('jewellery_lite_topbar_padding_top_bottom');
	if($jewellery_lite_topbar_padding_top_bottom != false){
		$jewellery_lite_custom_css .='.top-bar{';
			$jewellery_lite_custom_css .='padding-top: '.esc_attr($jewellery_lite_topbar_padding_top_bottom).'; padding-bottom: '.esc_attr($jewellery_lite_topbar_padding_top_bottom).';';
		$jewellery_lite_custom_css .='}';
	}

	$jewellery_lite_navigation_menu_font_size = get_theme_mod('jewellery_lite_navigation_menu_font_size');
	if($jewellery_lite_navigation_menu_font_size != false){
		$jewellery_lite_custom_css .='.main-navigation a{';
			$jewellery_lite_custom_css .='font-size: '.esc_attr($jewellery_lite_navigation_menu_font_size).';';
		$jewellery_lite_custom_css .='}';
	}

	$jewellery_lite_navigation_menu_font_weight = get_theme_mod('jewellery_lite_navigation_menu_font_weight','500');
	if($jewellery_lite_navigation_menu_font_weight != false){
		$jewellery_lite_custom_css .='.main-navigation a{';
			$jewellery_lite_custom_css .='font-weight: '.esc_attr($jewellery_lite_navigation_menu_font_weight).';';
		$jewellery_lite_custom_css .='}';
	}

	$jewellery_lite_theme_lay = get_theme_mod( 'jewellery_lite_menu_text_transform','Uppercase');
	if($jewellery_lite_theme_lay == 'Capitalize'){
		$jewellery_lite_custom_css .='.main-navigation a{';
			$jewellery_lite_custom_css .='text-transform:Capitalize;';
		$jewellery_lite_custom_css .='}';
	}
	if($jewellery_lite_theme_lay == 'Lowercase'){
		$jewellery_lite_custom_css .='.main-navigation a{';
			$jewellery_lite_custom_css .='text-transform:Lowercase;';
		$jewellery_lite_custom_css .='}';
	}
	if($jewellery_lite_theme_lay == 'Uppercase'){
		$jewellery_lite_custom_css .='.main-navigation a{';
			$jewellery_lite_custom_css .='text-transform:Uppercase;';
		$jewellery_lite_custom_css .='}';
	}

	$jewellery_lite_header_menus_color = get_theme_mod('jewellery_lite_header_menus_color');
	if($jewellery_lite_header_menus_color != false){
		$jewellery_lite_custom_css .='.main-navigation a{';
			$jewellery_lite_custom_css .='color: '.esc_attr($jewellery_lite_header_menus_color).';';
		$jewellery_lite_custom_css .='}';
	}

	$jewellery_lite_header_menus_hover_color = get_theme_mod('jewellery_lite_header_menus_hover_color');
	if($jewellery_lite_header_menus_hover_color != false){
		$jewellery_lite_custom_css .='.main-navigation a:hover{';
			$jewellery_lite_custom_css .='color: '.esc_attr($jewellery_lite_header_menus_hover_color).';';
		$jewellery_lite_custom_css .='}';
	}

	$jewellery_lite_header_submenus_color = get_theme_mod('jewellery_lite_header_submenus_color');
	if($jewellery_lite_header_submenus_color != false){
		$jewellery_lite_custom_css .='.main-navigation ul ul a{';
			$jewellery_lite_custom_css .='color: '.esc_attr($jewellery_lite_header_submenus_color).';';
		$jewellery_lite_custom_css .='}';
	}

	$jewellery_lite_header_submenus_hover_color = get_theme_mod('jewellery_lite_header_submenus_hover_color');
	if($jewellery_lite_header_submenus_hover_color != false){
		$jewellery_lite_custom_css .='.main-navigation ul.sub-menu a:hover{';
			$jewellery_lite_custom_css .='color: '.esc_attr($jewellery_lite_header_submenus_hover_color).';';
		$jewellery_lite_custom_css .='}';
	}

	$jewellery_lite_menus_item = get_theme_mod( 'jewellery_lite_menus_item_style','None');
    if($jewellery_lite_menus_item == 'None'){
		$jewellery_lite_custom_css .='.main-navigation a{';
			$jewellery_lite_custom_css .='';
		$jewellery_lite_custom_css .='}';
	}else if($jewellery_lite_menus_item == 'Zoom In'){
		$jewellery_lite_custom_css .='.main-navigation a:hover{';
			$jewellery_lite_custom_css .='transition: all 0.3s ease-in-out !important; transform: scale(1.2) !important; color: #f8ae57;';
		$jewellery_lite_custom_css .='}';
	}

	/*-------------- Sticky Header Padding ----------------*/

	$jewellery_lite_sticky_header_padding = get_theme_mod('jewellery_lite_sticky_header_padding');
	if($jewellery_lite_sticky_header_padding != false){
		$jewellery_lite_custom_css .='.header-fixed{';
			$jewellery_lite_custom_css .='padding: '.esc_attr($jewellery_lite_sticky_header_padding).';';
		$jewellery_lite_custom_css .='}';
	}

	/*---------------- Button Settings ------------------*/

	$jewellery_lite_button_padding_top_bottom = get_theme_mod('jewellery_lite_button_padding_top_bottom');
	$jewellery_lite_button_padding_left_right = get_theme_mod('jewellery_lite_button_padding_left_right');
	if($jewellery_lite_button_padding_top_bottom != false || $jewellery_lite_button_padding_left_right != false){
		$jewellery_lite_custom_css .='.post-main-box .more-btn a{';
			$jewellery_lite_custom_css .='padding-top: '.esc_attr($jewellery_lite_button_padding_top_bottom).'; padding-bottom: '.esc_attr($jewellery_lite_button_padding_top_bottom).';padding-left: '.esc_attr($jewellery_lite_button_padding_left_right).';padding-right: '.esc_attr($jewellery_lite_button_padding_left_right).';';
		$jewellery_lite_custom_css .='}';
	}

	$jewellery_lite_button_border_radius = get_theme_mod('jewellery_lite_button_border_radius');
	if($jewellery_lite_button_border_radius != false){
		$jewellery_lite_custom_css .='.post-main-box .more-btn a{';
			$jewellery_lite_custom_css .='border-radius: '.esc_attr($jewellery_lite_button_border_radius).'px;';
		$jewellery_lite_custom_css .='}';
	}

	$jewellery_lite_button_font_size = get_theme_mod('jewellery_lite_button_font_size',14);
	$jewellery_lite_custom_css .='.post-main-box .more-btn a{';
		$jewellery_lite_custom_css .='font-size: '.esc_attr($jewellery_lite_button_font_size).';';
	$jewellery_lite_custom_css .='}';

	$jewellery_lite_theme_lay = get_theme_mod( 'jewellery_lite_button_text_transform','Uppercase');
	if($jewellery_lite_theme_lay == 'Capitalize'){
		$jewellery_lite_custom_css .='.post-main-box .more-btn a{';
			$jewellery_lite_custom_css .='text-transform:Capitalize;';
		$jewellery_lite_custom_css .='}';
	}
	if($jewellery_lite_theme_lay == 'Lowercase'){
		$jewellery_lite_custom_css .='.post-main-box .more-btn a{';
			$jewellery_lite_custom_css .='text-transform:Lowercase;';
		$jewellery_lite_custom_css .='}';
	}
	if($jewellery_lite_theme_lay == 'Uppercase'){ 
		$jewellery_lite_custom_css .='.post-main-box .more-btn a{';
			$jewellery_lite_custom_css .='text-transform:Uppercase;';
		$jewellery_lite_custom_css .='}';
	}

	$jewellery_lite_button_letter_spacing = get_theme_mod('jewellery_lite_button_letter_spacing');
	$jewellery_lite_custom_css .='.post-main-box .more-btn a{';
		$jewellery_lite_custom_css .='letter-spacing: '.esc_attr($jewellery_lite_button_letter_spacing).';';
	$jewellery_lite_custom_css .='}';

	/*------------- Single Blog Page------------------*/

	$jewellery_lite_featured_image_border_radius = get_theme_mod('jewellery_lite_featured_image_border_radius', 0);
	if($jewellery_lite_featured_image_border_radius != false){
		$jewellery_lite_custom_css .='.box-image img, .feature-box img{';
			$jewellery_lite_custom_css .='border-radius: '.esc_attr($jewellery_lite_featured_image_border_radius).'px;';
		$jewellery_lite_custom_css .='}';
	}

	$jewellery_lite_featured_image_box_shadow = get_theme_mod('jewellery_lite_featured_image_box_shadow',0);
	if($jewellery_lite_featured_image_box_shadow != false){
		$jewellery_lite_custom_css .='.box-image img, #content-vw img{';
			$jewellery_lite_custom_css .='box-shadow: '.esc_attr($jewellery_lite_featured_image_box_shadow).'px '.esc_attr($jewellery_lite_featured_image_box_shadow).'px '.esc_attr($jewellery_lite_featured_image_box_shadow).'px #cccccc;';
		$jewellery_lite_custom_css .='}';
	}

	$jewellery_lite_singlepost_image_box_shadow = get_theme_mod('jewellery_lite_singlepost_image_box_shadow',0);
	if($jewellery_lite_singlepost_image_box_shadow != false){
		$jewellery_lite_custom_css .='.feature-box img{';
			$jewellery_lite_custom_css .='box-shadow: '.esc_attr($jewellery_lite_singlepost_image_box_shadow).'px '.esc_attr($jewellery_lite_singlepost_image_box_shadow).'px '.esc_attr($jewellery_lite_singlepost_image_box_shadow).'px #cccccc;';
		$jewellery_lite_custom_css .='}';
	}

	$jewellery_lite_single_blog_post_navigation_show_hide = get_theme_mod('jewellery_lite_single_blog_post_navigation_show_hide',true);
	if($jewellery_lite_single_blog_post_navigation_show_hide != true){
		$jewellery_lite_custom_css .='.post-navigation{';
			$jewellery_lite_custom_css .='display: none;';
		$jewellery_lite_custom_css .='}';
	}

	$jewellery_lite_single_blog_comment_title = get_theme_mod('jewellery_lite_single_blog_comment_title', 'Leave a Reply');
	if($jewellery_lite_single_blog_comment_title == ''){
		$jewellery_lite_custom_css .='#comments h2#reply-title {';
			$jewellery_lite_custom_css .='display: none;';
		$jewellery_lite_custom_css .='}';
	}

	$jewellery_lite_single_blog_comment_button_text = get_theme_mod('jewellery_lite_single_blog_comment_button_text', 'Post Comment');
	if($jewellery_lite_single_blog_comment_button_text == ''){
		$jewellery_lite_custom_css .='#comments p.form-submit {';
			$jewellery_lite_custom_css .='display: none;';
		$jewellery_lite_custom_css .='}';
	}

	$jewellery_lite_comment_width = get_theme_mod('jewellery_lite_single_blog_comment_width');
	if($jewellery_lite_comment_width != false){
		$jewellery_lite_custom_css .='#comments textarea{';
			$jewellery_lite_custom_css .='width: '.esc_attr($jewellery_lite_comment_width).';';
		$jewellery_lite_custom_css .='}';
	}

	// featured image dimention
	$jewellery_lite_blog_post_featured_image_dimension = get_theme_mod('jewellery_lite_blog_post_featured_image_dimension', 'default');
	$jewellery_lite_blog_post_featured_image_custom_width = get_theme_mod('jewellery_lite_blog_post_featured_image_custom_width',250);
	$jewellery_lite_blog_post_featured_image_custom_height = get_theme_mod('jewellery_lite_blog_post_featured_image_custom_height',250);
	if($jewellery_lite_blog_post_featured_image_dimension == 'custom'){
		$jewellery_lite_custom_css .='.box-image img{';
			$jewellery_lite_custom_css .='width: '.esc_attr($jewellery_lite_blog_post_featured_image_custom_width).'; height: '.esc_attr($jewellery_lite_blog_post_featured_image_custom_height).';';
		$jewellery_lite_custom_css .='}';
	}

	/*-------------- Copyright Alignment ----------------*/
	
	$jewellery_lite_copyright_background_color = get_theme_mod('jewellery_lite_copyright_background_color');
	if($jewellery_lite_copyright_background_color != false){
		$jewellery_lite_custom_css .='#footer-2{';
			$jewellery_lite_custom_css .='background-color: '.esc_attr($jewellery_lite_copyright_background_color).';';
		$jewellery_lite_custom_css .='}';
	}

	$jewellery_lite_footer_background_color = get_theme_mod('jewellery_lite_footer_background_color');
	if($jewellery_lite_footer_background_color != false){
		$jewellery_lite_custom_css .='#footer{';
			$jewellery_lite_custom_css .='background-color: '.esc_attr($jewellery_lite_footer_background_color).';';
		$jewellery_lite_custom_css .='}';
	}

	$jewellery_lite_footer_widgets_heading = get_theme_mod( 'jewellery_lite_footer_widgets_heading','Left');
    if($jewellery_lite_footer_widgets_heading == 'Left'){
		$jewellery_lite_custom_css .='#footer h3, #footer .wp-block-search .wp-block-search__label{';
		$jewellery_lite_custom_css .='text-align: left;';
		$jewellery_lite_custom_css .='}';
	}else if($jewellery_lite_footer_widgets_heading == 'Center'){
		$jewellery_lite_custom_css .='#footer h3, #footer .wp-block-search .wp-block-search__label{';
			$jewellery_lite_custom_css .='text-align: center; position:relative;';
		$jewellery_lite_custom_css .='}';
		$jewellery_lite_custom_css .='#footer h3:after, #footer .wp-block-search .wp-block-search__label:after{';
			$jewellery_lite_custom_css .='margin: 0 auto;';
		$jewellery_lite_custom_css .='}';
	}else if($jewellery_lite_footer_widgets_heading == 'Right'){
		$jewellery_lite_custom_css .='#footer h3, #footer .wp-block-search .wp-block-search__label{';
			$jewellery_lite_custom_css .='text-align: right; position:relative;';
		$jewellery_lite_custom_css .='}';
		$jewellery_lite_custom_css .='#footer h3:after, #footer .wp-block-search .wp-block-search__label:after{';
			$jewellery_lite_custom_css .='margin-left: auto;';
		$jewellery_lite_custom_css .='}';
	}

	$jewellery_lite_footer_widgets_content = get_theme_mod( 'jewellery_lite_footer_widgets_content','Left');
    if($jewellery_lite_footer_widgets_content == 'Left'){
		$jewellery_lite_custom_css .='#footer .widget{';
		$jewellery_lite_custom_css .='text-align: left;';
		$jewellery_lite_custom_css .='}';
	}else if($jewellery_lite_footer_widgets_content == 'Center'){
		$jewellery_lite_custom_css .='#footer .widget{';
			$jewellery_lite_custom_css .='text-align: center;';
		$jewellery_lite_custom_css .='}';
	}else if($jewellery_lite_footer_widgets_content == 'Right'){
		$jewellery_lite_custom_css .='#footer .widget{';
			$jewellery_lite_custom_css .='text-align: right;';
		$jewellery_lite_custom_css .='}';
	}

	$jewellery_lite_copyright_font_size = get_theme_mod('jewellery_lite_copyright_font_size');
	if($jewellery_lite_copyright_font_size != false){
		$jewellery_lite_custom_css .='.copyright p{';
			$jewellery_lite_custom_css .='font-size: '.esc_attr($jewellery_lite_copyright_font_size).';';
		$jewellery_lite_custom_css .='}';
	}

	$jewellery_lite_copyright_padding_top_bottom = get_theme_mod('jewellery_lite_copyright_padding_top_bottom');
	if($jewellery_lite_copyright_padding_top_bottom != false){
		$jewellery_lite_custom_css .='#footer-2{';
			$jewellery_lite_custom_css .='padding-top: '.esc_attr($jewellery_lite_copyright_padding_top_bottom).'; padding-bottom: '.esc_attr($jewellery_lite_copyright_padding_top_bottom).';';
		$jewellery_lite_custom_css .='}';
	}

	$jewellery_lite_resp_stickycopyright = get_theme_mod( 'jewellery_lite_stickycopyright_hide_show',false);
	if($jewellery_lite_resp_stickycopyright == true && get_theme_mod( 'jewellery_lite_copyright_sticky',false) != true){
    	$jewellery_lite_custom_css .='.copyright-sticky{';
			$jewellery_lite_custom_css .='position:static;';
		$jewellery_lite_custom_css .='} ';
	}

	$jewellery_lite_footer_social_icons_font_size = get_theme_mod('jewellery_lite_footer_social_icons_font_size','16');
	$jewellery_lite_custom_css .='.copyright .widget i{';
		$jewellery_lite_custom_css .='font-size: '.esc_attr($jewellery_lite_footer_social_icons_font_size).'px;';
	$jewellery_lite_custom_css .='}';

	$jewellery_lite_copyright_alingment = get_theme_mod('jewellery_lite_copyright_alingment');
	if($jewellery_lite_copyright_alingment != false){
		$jewellery_lite_custom_css .='.copyright p,#footer-2 p{';
			$jewellery_lite_custom_css .='text-align: '.esc_attr($jewellery_lite_copyright_alingment).';';
		$jewellery_lite_custom_css .='}';
		$jewellery_lite_custom_css .='
		@media screen and (max-width:720px) {
			.copyright p,#footer-2 p{';
			$jewellery_lite_custom_css .='text-align: center;} }';
	}

	$jewellery_lite_align_footer_social_icon = get_theme_mod('jewellery_lite_align_footer_social_icon');
	if($jewellery_lite_align_footer_social_icon != false){
		$jewellery_lite_custom_css .='.copyright .widget{';
			$jewellery_lite_custom_css .='text-align: '.esc_attr($jewellery_lite_align_footer_social_icon).';';
		$jewellery_lite_custom_css .='}';
		$jewellery_lite_custom_css .='
		@media screen and (max-width:720px) {
			.copyright .widget{';
			$jewellery_lite_custom_css .='text-align: center;} }';
	}

	$jewellery_lite_footer_padding = get_theme_mod('jewellery_lite_footer_padding');
	if($jewellery_lite_footer_padding != false){
		$jewellery_lite_custom_css .='#footer{';
			$jewellery_lite_custom_css .='padding: '.esc_attr($jewellery_lite_footer_padding).' 0;';
		$jewellery_lite_custom_css .='}';
	}

	$jewellery_lite_footer_background_image = get_theme_mod('jewellery_lite_footer_background_image');
	if($jewellery_lite_footer_background_image != false){
		$jewellery_lite_custom_css .='#footer{';
			$jewellery_lite_custom_css .='background: url('.esc_attr($jewellery_lite_footer_background_image).'); background-size: cover;';
		$jewellery_lite_custom_css .='}';
	}

	$jewellery_lite_theme_lay = get_theme_mod( 'jewellery_lite_img_footer','scroll');
	if($jewellery_lite_theme_lay == 'fixed'){
		$jewellery_lite_custom_css .='#footer{';
			$jewellery_lite_custom_css .='background-attachment: fixed !important;';
		$jewellery_lite_custom_css .='}';
	}elseif ($jewellery_lite_theme_lay == 'scroll'){
		$jewellery_lite_custom_css .='#footer{';
			$jewellery_lite_custom_css .='background-attachment: scroll !important;';
		$jewellery_lite_custom_css .='}';
	}

	$jewellery_lite_footer_img_position = get_theme_mod('jewellery_lite_footer_img_position','center center');
	if($jewellery_lite_footer_img_position != false){
		$jewellery_lite_custom_css .='#footer{';
			$jewellery_lite_custom_css .='background-position: '.esc_attr($jewellery_lite_footer_img_position).'!important;';
		$jewellery_lite_custom_css .='}';
	} 

	/*----------------Sroll to top Settings ------------------*/

	$jewellery_lite_scroll_to_top_font_size = get_theme_mod('jewellery_lite_scroll_to_top_font_size');
	if($jewellery_lite_scroll_to_top_font_size != false){
		$jewellery_lite_custom_css .='.scrollup i{';
			$jewellery_lite_custom_css .='font-size: '.esc_attr($jewellery_lite_scroll_to_top_font_size).';';
		$jewellery_lite_custom_css .='}';
	}

	$jewellery_lite_scroll_to_top_padding = get_theme_mod('jewellery_lite_scroll_to_top_padding');
	$jewellery_lite_scroll_to_top_padding = get_theme_mod('jewellery_lite_scroll_to_top_padding');
	if($jewellery_lite_scroll_to_top_padding != false){
		$jewellery_lite_custom_css .='.scrollup i{';
			$jewellery_lite_custom_css .='padding-top: '.esc_attr($jewellery_lite_scroll_to_top_padding).';padding-bottom: '.esc_attr($jewellery_lite_scroll_to_top_padding).';';
		$jewellery_lite_custom_css .='}';
	}

	$jewellery_lite_scroll_to_top_width = get_theme_mod('jewellery_lite_scroll_to_top_width');
	if($jewellery_lite_scroll_to_top_width != false){
		$jewellery_lite_custom_css .='.scrollup i{';
			$jewellery_lite_custom_css .='width: '.esc_attr($jewellery_lite_scroll_to_top_width).';';
		$jewellery_lite_custom_css .='}';
	}

	$jewellery_lite_scroll_to_top_height = get_theme_mod('jewellery_lite_scroll_to_top_height');
	if($jewellery_lite_scroll_to_top_height != false){
		$jewellery_lite_custom_css .='.scrollup i{';
			$jewellery_lite_custom_css .='height: '.esc_attr($jewellery_lite_scroll_to_top_height).';';
		$jewellery_lite_custom_css .='}';
	}

	$jewellery_lite_scroll_to_top_border_radius = get_theme_mod('jewellery_lite_scroll_to_top_border_radius');
	if($jewellery_lite_scroll_to_top_border_radius != false){
		$jewellery_lite_custom_css .='.scrollup i{';
			$jewellery_lite_custom_css .='border-radius: '.esc_attr($jewellery_lite_scroll_to_top_border_radius).'px;';
		$jewellery_lite_custom_css .='}';
	}

	/*----------------Social Icons Settings ------------------*/

	$jewellery_lite_social_icon_font_size = get_theme_mod('jewellery_lite_social_icon_font_size');
	if($jewellery_lite_social_icon_font_size != false){
		$jewellery_lite_custom_css .='#sidebar .custom-social-icons i, #footer .custom-social-icons i{';
			$jewellery_lite_custom_css .='font-size: '.esc_attr($jewellery_lite_social_icon_font_size).';';
		$jewellery_lite_custom_css .='}';
	}

	$jewellery_lite_social_icon_padding = get_theme_mod('jewellery_lite_social_icon_padding');
	if($jewellery_lite_social_icon_padding != false){
		$jewellery_lite_custom_css .='#sidebar .custom-social-icons i, #footer .custom-social-icons i{';
			$jewellery_lite_custom_css .='padding: '.esc_attr($jewellery_lite_social_icon_padding).';';
		$jewellery_lite_custom_css .='}';
	}

	$jewellery_lite_social_icon_width = get_theme_mod('jewellery_lite_social_icon_width');
	if($jewellery_lite_social_icon_width != false){
		$jewellery_lite_custom_css .='#sidebar .custom-social-icons i, #footer .custom-social-icons i{';
			$jewellery_lite_custom_css .='width: '.esc_attr($jewellery_lite_social_icon_width).';';
		$jewellery_lite_custom_css .='}';
	}

	$jewellery_lite_social_icon_height = get_theme_mod('jewellery_lite_social_icon_height');
	if($jewellery_lite_social_icon_height != false){
		$jewellery_lite_custom_css .='#sidebar .custom-social-icons i, #footer .custom-social-icons i{';
			$jewellery_lite_custom_css .='height: '.esc_attr($jewellery_lite_social_icon_height).';';
		$jewellery_lite_custom_css .='}';
	}

	$jewellery_lite_social_icon_border_radius = get_theme_mod('jewellery_lite_social_icon_border_radius');
	if($jewellery_lite_social_icon_border_radius != false){
		$jewellery_lite_custom_css .='#sidebar .custom-social-icons i, #footer .custom-social-icons i{';
			$jewellery_lite_custom_css .='border-radius: '.esc_attr($jewellery_lite_social_icon_border_radius).'px;';
		$jewellery_lite_custom_css .='}';
	}

	/*----------------Woocommerce Products Settings ------------------*/

	$jewellery_lite_related_product_show_hide = get_theme_mod('jewellery_lite_related_product_show_hide',true);
	if($jewellery_lite_related_product_show_hide != true){
		$jewellery_lite_custom_css .='.related.products{';
			$jewellery_lite_custom_css .='display: none;';
		$jewellery_lite_custom_css .='}';
	}

	$jewellery_lite_products_padding_top_bottom = get_theme_mod('jewellery_lite_products_padding_top_bottom');
	if($jewellery_lite_products_padding_top_bottom != false){
		$jewellery_lite_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$jewellery_lite_custom_css .='padding-top: '.esc_attr($jewellery_lite_products_padding_top_bottom).'!important; padding-bottom: '.esc_attr($jewellery_lite_products_padding_top_bottom).'!important;';
		$jewellery_lite_custom_css .='}';
	}

	$jewellery_lite_products_padding_left_right = get_theme_mod('jewellery_lite_products_padding_left_right');
	if($jewellery_lite_products_padding_left_right != false){
		$jewellery_lite_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$jewellery_lite_custom_css .='padding-left: '.esc_attr($jewellery_lite_products_padding_left_right).'!important; padding-right: '.esc_attr($jewellery_lite_products_padding_left_right).'!important;';
		$jewellery_lite_custom_css .='}';
	}

	$jewellery_lite_products_box_shadow = get_theme_mod('jewellery_lite_products_box_shadow');
	if($jewellery_lite_products_box_shadow != false){
		$jewellery_lite_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
				$jewellery_lite_custom_css .='box-shadow: '.esc_attr($jewellery_lite_products_box_shadow).'px '.esc_attr($jewellery_lite_products_box_shadow).'px '.esc_attr($jewellery_lite_products_box_shadow).'px #ddd;';
		$jewellery_lite_custom_css .='}';
	}

	$jewellery_lite_products_border_radius = get_theme_mod('jewellery_lite_products_border_radius');
	if($jewellery_lite_products_border_radius != false){
		$jewellery_lite_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$jewellery_lite_custom_css .='border-radius: '.esc_attr($jewellery_lite_products_border_radius).'px;';
		$jewellery_lite_custom_css .='}';
	}

	$jewellery_lite_woocommerce_sale_position = get_theme_mod( 'jewellery_lite_woocommerce_sale_position','left');
    if($jewellery_lite_woocommerce_sale_position == 'left'){
		$jewellery_lite_custom_css .='.woocommerce ul.products li.product .onsale{';
			$jewellery_lite_custom_css .='left: -10px; right: auto;';
		$jewellery_lite_custom_css .='}';
	}else if($jewellery_lite_woocommerce_sale_position == 'right'){
		$jewellery_lite_custom_css .='.woocommerce ul.products li.product .onsale{';
			$jewellery_lite_custom_css .='left: auto !important; right: 0 !important;';
		$jewellery_lite_custom_css .='}';
	}

	$jewellery_lite_woocommerce_sale_font_size = get_theme_mod('jewellery_lite_woocommerce_sale_font_size');
	if($jewellery_lite_woocommerce_sale_font_size != false){
		$jewellery_lite_custom_css .='.woocommerce span.onsale{';
			$jewellery_lite_custom_css .='font-size: '.esc_attr($jewellery_lite_woocommerce_sale_font_size).';';
		$jewellery_lite_custom_css .='}';
	}

	/*------------------ Logo  -------------------*/

	$jewellery_lite_logo_padding = get_theme_mod('jewellery_lite_logo_padding');
	if($jewellery_lite_logo_padding != false){
		$jewellery_lite_custom_css .='.middle-header .logo{';
			$jewellery_lite_custom_css .='padding: '.esc_attr($jewellery_lite_logo_padding).';';
		$jewellery_lite_custom_css .='}';
	}

	$jewellery_lite_logo_margin = get_theme_mod('jewellery_lite_logo_margin');
	if($jewellery_lite_logo_margin != false){
		$jewellery_lite_custom_css .='.middle-header .logo{';
			$jewellery_lite_custom_css .='margin: '.esc_attr($jewellery_lite_logo_margin).';';
		$jewellery_lite_custom_css .='}';
	}

	// Site title Font Size
	$jewellery_lite_site_title_font_size = get_theme_mod('jewellery_lite_site_title_font_size');
	if($jewellery_lite_site_title_font_size != false){
		$jewellery_lite_custom_css .='.logo h1, .logo p.site-title{';
			$jewellery_lite_custom_css .='font-size: '.esc_attr($jewellery_lite_site_title_font_size).';';
		$jewellery_lite_custom_css .='}';
	}

	// Site tagline Font Size
	$jewellery_lite_site_tagline_font_size = get_theme_mod('jewellery_lite_site_tagline_font_size');
	if($jewellery_lite_site_tagline_font_size != false){
		$jewellery_lite_custom_css .='.logo p.site-description{';
			$jewellery_lite_custom_css .='font-size: '.esc_attr($jewellery_lite_site_tagline_font_size).';';
		$jewellery_lite_custom_css .='}';
	}

	$jewellery_lite_site_title_color = get_theme_mod('jewellery_lite_site_title_color');
	if($jewellery_lite_site_title_color != false){
		$jewellery_lite_custom_css .='p.site-title a{';
			$jewellery_lite_custom_css .='color: '.esc_attr($jewellery_lite_site_title_color).'!important;';
		$jewellery_lite_custom_css .='}';
	}

	$jewellery_lite_site_tagline_color = get_theme_mod('jewellery_lite_site_tagline_color');
	if($jewellery_lite_site_tagline_color != false){
		$jewellery_lite_custom_css .='.logo p.site-description{';
			$jewellery_lite_custom_css .='color: '.esc_attr($jewellery_lite_site_tagline_color).';';
		$jewellery_lite_custom_css .='}';
	}

	$jewellery_lite_logo_width = get_theme_mod('jewellery_lite_logo_width');
	if($jewellery_lite_logo_width != false){
		$jewellery_lite_custom_css .='.logo img{';
			$jewellery_lite_custom_css .='width: '.esc_attr($jewellery_lite_logo_width).';';
		$jewellery_lite_custom_css .='}';
	}

	$jewellery_lite_logo_height = get_theme_mod('jewellery_lite_logo_height');
	if($jewellery_lite_logo_height != false){
		$jewellery_lite_custom_css .='.logo img{';
			$jewellery_lite_custom_css .='height: '.esc_attr($jewellery_lite_logo_height).';';
		$jewellery_lite_custom_css .='}';
	}

	// Woocommerce img

	$jewellery_lite_shop_featured_image_border_radius = get_theme_mod('jewellery_lite_shop_featured_image_border_radius', 0);
	if($jewellery_lite_shop_featured_image_border_radius != false){
		$jewellery_lite_custom_css .='.woocommerce ul.products li.product a img{';
			$jewellery_lite_custom_css .='border-radius: '.esc_attr($jewellery_lite_shop_featured_image_border_radius).'px;';
		$jewellery_lite_custom_css .='}';
	}

	$jewellery_lite_shop_featured_image_box_shadow = get_theme_mod('jewellery_lite_shop_featured_image_box_shadow');
	if($jewellery_lite_shop_featured_image_box_shadow != false){
		$jewellery_lite_custom_css .='.woocommerce ul.products li.product a img{';
				$jewellery_lite_custom_css .='box-shadow: '.esc_attr($jewellery_lite_shop_featured_image_box_shadow).'px '.esc_attr($jewellery_lite_shop_featured_image_box_shadow).'px '.esc_attr($jewellery_lite_shop_featured_image_box_shadow).'px #ddd;';
		$jewellery_lite_custom_css .='}';
	}

	/*------------------ Preloader Background Color  -------------------*/

	$jewellery_lite_preloader_bg_color = get_theme_mod('jewellery_lite_preloader_bg_color');
	if($jewellery_lite_preloader_bg_color != false){
		$jewellery_lite_custom_css .='#preloader{';
			$jewellery_lite_custom_css .='background-color: '.esc_attr($jewellery_lite_preloader_bg_color).';';
		$jewellery_lite_custom_css .='}';
	}

	$jewellery_lite_preloader_border_color = get_theme_mod('jewellery_lite_preloader_border_color');
	if($jewellery_lite_preloader_border_color != false){
		$jewellery_lite_custom_css .='.loader-line{';
			$jewellery_lite_custom_css .='border-color: '.esc_attr($jewellery_lite_preloader_border_color).'!important;';
		$jewellery_lite_custom_css .='}';
	}

	$jewellery_lite_preloader_bg_img = get_theme_mod('jewellery_lite_preloader_bg_img');
	if($jewellery_lite_preloader_bg_img != false){
		$jewellery_lite_custom_css .='#preloader{';
			$jewellery_lite_custom_css .='background: url('.esc_attr($jewellery_lite_preloader_bg_img).');-webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;';
		$jewellery_lite_custom_css .='}';
	}

	// Header Background Color
	$jewellery_lite_header_background_color = get_theme_mod('jewellery_lite_header_background_color');
	if($jewellery_lite_header_background_color != false){
		$jewellery_lite_custom_css .='.middle-header{';
			$jewellery_lite_custom_css .='background-color: '.esc_attr($jewellery_lite_header_background_color).';';
		$jewellery_lite_custom_css .='}';
	}

	$jewellery_lite_header_img_position = get_theme_mod('jewellery_lite_header_img_position','center top');
	if($jewellery_lite_header_img_position != false){
		$jewellery_lite_custom_css .='.middle-header{';
			$jewellery_lite_custom_css .='background-position: '.esc_attr($jewellery_lite_header_img_position).'!important;';
		$jewellery_lite_custom_css .='}';
	}

	/*--------------------- Grid Posts Posts -------------------*/

	$jewellery_lite_display_grid_posts_settings = get_theme_mod( 'jewellery_lite_display_grid_posts_settings','Into Blocks');
    if($jewellery_lite_display_grid_posts_settings == 'Without Blocks'){
		$jewellery_lite_custom_css .='.grid-post-main-box{';
			$jewellery_lite_custom_css .='box-shadow: none; border: none; margin:30px 0;';
		$jewellery_lite_custom_css .='}';
	}


	$jewellery_lite_grid_featured_image_border_radius = get_theme_mod('jewellery_lite_grid_featured_image_border_radius', 0);
	if($jewellery_lite_grid_featured_image_border_radius != false){
		$jewellery_lite_custom_css .='.grid-post-main-box .box-image img, .grid-post-main-box .feature-box img{';
			$jewellery_lite_custom_css .='border-radius: '.esc_attr($jewellery_lite_grid_featured_image_border_radius).'px;';
		$jewellery_lite_custom_css .='}';
	}

	$jewellery_lite_grid_featured_image_box_shadow = get_theme_mod('jewellery_lite_grid_featured_image_box_shadow',0);
	if($jewellery_lite_grid_featured_image_box_shadow != false){
		$jewellery_lite_custom_css .='.grid-post-main-box .box-image img, .grid-post-main-box .feature-box img, #content-vw img{';
			$jewellery_lite_custom_css .='box-shadow: '.esc_attr($jewellery_lite_grid_featured_image_box_shadow).'px '.esc_attr($jewellery_lite_grid_featured_image_box_shadow).'px '.esc_attr($jewellery_lite_grid_featured_image_box_shadow).'px #cccccc;';
		$jewellery_lite_custom_css .='}';
	}

	/*---------------- Footer Settings ------------------*/

	$jewellery_lite_button_footer_heading_letter_spacing = get_theme_mod('jewellery_lite_button_footer_heading_letter_spacing',1);
	$jewellery_lite_custom_css .='#footer h3, #footer .wp-block-search .wp-block-search__label, a.rsswidget.rss-widget-title{';
		$jewellery_lite_custom_css .='letter-spacing: '.esc_attr($jewellery_lite_button_footer_heading_letter_spacing).'px;';
	$jewellery_lite_custom_css .='}';

	$jewellery_lite_button_footer_font_size = get_theme_mod('jewellery_lite_button_footer_font_size','25');
	$jewellery_lite_custom_css .='#footer h3, #footer .wp-block-search .wp-block-search__label, a.rsswidget.rss-widget-title{';
		$jewellery_lite_custom_css .='font-size: '.esc_attr($jewellery_lite_button_footer_font_size).'px;';
	$jewellery_lite_custom_css .='}';

	$jewellery_lite_theme_lay = get_theme_mod( 'jewellery_lite_button_footer_text_transform','Capitalize');
	if($jewellery_lite_theme_lay == 'Capitalize'){
		$jewellery_lite_custom_css .='#footer h3, #footer .wp-block-search .wp-block-search__label{';
			$jewellery_lite_custom_css .='text-transform:Capitalize;';
		$jewellery_lite_custom_css .='}';
	}
	if($jewellery_lite_theme_lay == 'Lowercase'){
		$jewellery_lite_custom_css .='#footer h3, #footer .wp-block-search .wp-block-search__label, a.rsswidget.rss-widget-title{';
			$jewellery_lite_custom_css .='text-transform:Lowercase;';
		$jewellery_lite_custom_css .='}';
	}
	if($jewellery_lite_theme_lay == 'Uppercase'){
		$jewellery_lite_custom_css .='#footer h3, #footer .wp-block-search .wp-block-search__label, a.rsswidget.rss-widget-title{';
			$jewellery_lite_custom_css .='text-transform:Uppercase;';
		$jewellery_lite_custom_css .='}';
	}

	$jewellery_lite_footer_heading_weight = get_theme_mod('jewellery_lite_footer_heading_weight');
	if($jewellery_lite_footer_heading_weight != false){
		$jewellery_lite_custom_css .='#footer h3, #footer .wp-block-search .wp-block-search__label, a.rsswidget.rss-widget-title{';
			$jewellery_lite_custom_css .='font-weight: '.esc_attr($jewellery_lite_footer_heading_weight).';';
		$jewellery_lite_custom_css .='}';
	}

	/*---------------------------Footer Style -------------------*/

	$jewellery_lite_theme_lay = get_theme_mod( 'jewellery_lite_footer_template','jewellery-lite-footer-one');
    if($jewellery_lite_theme_lay == 'jewellery-lite-footer-one'){
		$jewellery_lite_custom_css .='#footer{';
			$jewellery_lite_custom_css .='';
		$jewellery_lite_custom_css .='}';

	}else if($jewellery_lite_theme_lay == 'jewellery-lite-footer-two'){
		$jewellery_lite_custom_css .='#footer{';
			$jewellery_lite_custom_css .='background: linear-gradient(to right, #f9f8ff, #dedafa);';
		$jewellery_lite_custom_css .='}';
		$jewellery_lite_custom_css .='#footer p, #footer li a, #footer, #footer h3, #footer a.rsswidget, #footer #wp-calendar a, .copyright a, #footer .custom_details, #footer ins span, #footer .tagcloud a, .main-inner-box span.entry-date a, nav.woocommerce-MyAccount-navigation ul li:hover a, #footer ul li a, #footer table, #footer th, #footer td, #footer caption, #sidebar caption,#footer nav.wp-calendar-nav a,#footer .search-form .search-field{';
			$jewellery_lite_custom_css .='color:#000;';
		$jewellery_lite_custom_css .='}';
		$jewellery_lite_custom_css .='#footer ul li::before{';
			$jewellery_lite_custom_css .='background:#000;';
		$jewellery_lite_custom_css .='}';
		$jewellery_lite_custom_css .='#footer table, #footer th, #footer td,#footer .search-form .search-field,#footer .tagcloud a{';
			$jewellery_lite_custom_css .='border: 1px solid #000;';
		$jewellery_lite_custom_css .='}';

	}else if($jewellery_lite_theme_lay == 'jewellery-lite-footer-three'){
		$jewellery_lite_custom_css .='#footer{';
			$jewellery_lite_custom_css .='background: #232524;';
		$jewellery_lite_custom_css .='}';
	}
	else if($jewellery_lite_theme_lay == 'jewellery-lite-footer-four'){
		$jewellery_lite_custom_css .='#footer{';
			$jewellery_lite_custom_css .='background: #f7f7f7;';
		$jewellery_lite_custom_css .='}';
		$jewellery_lite_custom_css .='#footer p, #footer li a, #footer, #footer h3, #footer a.rsswidget, #footer #wp-calendar a, .copyright a, #footer .custom_details, #footer ins span, #footer .tagcloud a, .main-inner-box span.entry-date a, nav.woocommerce-MyAccount-navigation ul li:hover a, #footer ul li a, #footer table, #footer th, #footer td, #footer caption, #sidebar caption,#footer nav.wp-calendar-nav a,#footer .search-form .search-field{';
			$jewellery_lite_custom_css .='color:#000;';
		$jewellery_lite_custom_css .='}';
		$jewellery_lite_custom_css .='#footer ul li::before{';
			$jewellery_lite_custom_css .='background:#000;';
		$jewellery_lite_custom_css .='}';
		$jewellery_lite_custom_css .='#footer table, #footer th, #footer td,#footer .search-form .search-field,#footer .tagcloud a{';
			$jewellery_lite_custom_css .='border: 1px solid #000;';
		$jewellery_lite_custom_css .='}';
	}
	else if($jewellery_lite_theme_lay == 'jewellery-lite-footer-five'){
		$jewellery_lite_custom_css .='#footer{';
			$jewellery_lite_custom_css .='background: linear-gradient(to right, #01093a, #2d0b00);';
		$jewellery_lite_custom_css .='}';
	}

	$jewellery_lite_responsive_preloader_hide = get_theme_mod('jewellery_lite_responsive_preloader_hide',false);
	if($jewellery_lite_responsive_preloader_hide == true && get_theme_mod('jewellery_lite_loader_enable',false) == false){
		$jewellery_lite_custom_css .='@media screen and (min-width:575px){
			#preloader{';
			$jewellery_lite_custom_css .='display:none !important;';
		$jewellery_lite_custom_css .='} }';
	}

	if($jewellery_lite_responsive_preloader_hide == false){
		$jewellery_lite_custom_css .='@media screen and (max-width:575px){
			#preloader{';
			$jewellery_lite_custom_css .='display:none !important;';
		$jewellery_lite_custom_css .='} }';
	}

	$jewellery_lite_bradcrumbs_alignment = get_theme_mod( 'jewellery_lite_bradcrumbs_alignment','Left');
    if($jewellery_lite_bradcrumbs_alignment == 'Left'){
    	$jewellery_lite_custom_css .='@media screen and (min-width:768px) {';
		$jewellery_lite_custom_css .='.bradcrumbs{';
			$jewellery_lite_custom_css .='text-align:start;';
		$jewellery_lite_custom_css .='}}';
	}else if($jewellery_lite_bradcrumbs_alignment == 'Center'){
		$jewellery_lite_custom_css .='@media screen and (min-width:768px) {';
		$jewellery_lite_custom_css .='.bradcrumbs{';
			$jewellery_lite_custom_css .='text-align:center;';
		$jewellery_lite_custom_css .='}}';
	}else if($jewellery_lite_bradcrumbs_alignment == 'Right'){
		$jewellery_lite_custom_css .='@media screen and (min-width:768px) {';
		$jewellery_lite_custom_css .='.bradcrumbs{';
			$jewellery_lite_custom_css .='text-align:end;';
		$jewellery_lite_custom_css .='}}';
	}

	// sticky sidebar
		$jewellery_lite_resp_stickysidebar = get_theme_mod( 'jewellery_lite_stickysidebar_hide_show',false);
	if($jewellery_lite_resp_stickysidebar == true && get_theme_mod( 'jewellery_lite_sticky_sidebar',false) != true){
		$jewellery_lite_custom_css .= '@media (min-width: 768px) {';
    	$jewellery_lite_custom_css .='#sidebar{';
			$jewellery_lite_custom_css .='position:static;';
		$jewellery_lite_custom_css .='} ';
		$jewellery_lite_custom_css .= '}';
	}
    // First Letter Capital
	$jewellery_lite_show_first_caps = get_theme_mod('jewellery_lite_show_first_caps', false);
	if ($jewellery_lite_show_first_caps ) {
	    $jewellery_lite_custom_css .= '.post-main-box .new-text p:nth-of-type(1)::first-letter {';
	    $jewellery_lite_custom_css .=' font-size: 55px;font-weight: 600;margin-right: 5px;';
	    $jewellery_lite_custom_css .='}';
	} else {
		$jewellery_lite_custom_css .= '.post-main-box .new-text p:nth-of-type(1)::first-letter {';
	    $jewellery_lite_custom_css .= 'display: none;';
	    $jewellery_lite_custom_css .='}';
	}
	// Featured hover image effect //
	$jewellery_lite_show_featured = get_theme_mod( 'jewellery_lite_featured_image_hide_show', 1 );
	$jewellery_lite_hover_effect  = get_theme_mod( 'jewellery_lite_featured_image_hover', 'none' );

	if ( $jewellery_lite_show_featured && $jewellery_lite_hover_effect !== 'none' ) {

		$jewellery_lite_custom_css .= '
		.jewellery-lite-featured-image img{
			transition: all 0.4s ease;
		}';

		if ( $jewellery_lite_hover_effect === 'zoom-in' ) {
			$jewellery_lite_custom_css .= '
			.jewellery-lite-featured-image:hover img{
				transform: scale(1.2);
			}';
		}

		if ( $jewellery_lite_hover_effect === 'zoom-out' ) {
			$jewellery_lite_custom_css .= '
			.jewellery-lite-featured-image img{
				transform: scale(1.2);
			}
			.jewellery-lite-featured-image:hover img{
				transform: scale(1);
			}';
		}

		if ( $jewellery_lite_hover_effect === 'grayscale' ) {
			$jewellery_lite_custom_css .= '
			.jewellery-lite-featured-image img{
				filter: grayscale(100%);
			}
			.jewellery-lite-featured-image:hover img{
				filter: grayscale(0);
			}';
		}

		if ( $jewellery_lite_hover_effect === 'sepia' ) {
			$jewellery_lite_custom_css .= '
			.jewellery-lite-featured-image:hover img{
				filter: sepia(100%);
			}';
		}

		if ( $jewellery_lite_hover_effect === 'blur' ) {
			$jewellery_lite_custom_css .= '
			.jewellery-lite-featured-image:hover img{
				filter: blur(3px);
			}';
		}

		if ( $jewellery_lite_hover_effect === 'bright' ) {
			$jewellery_lite_custom_css .= '
			.jewellery-lite-featured-image:hover img{
				filter: brightness(1.3);
			}';
		}

		if ( $jewellery_lite_hover_effect === 'translate' ) {
			$jewellery_lite_custom_css .= '
			.jewellery-lite-featured-image:hover img{
				transform: translateY(-10px);
			}';
		}
	}
