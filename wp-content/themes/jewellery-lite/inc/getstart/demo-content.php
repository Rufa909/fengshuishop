<div class="theme-offer">
	<?php
        // Check if the demo import has been completed
        $jewellery_lite_demo_import_completed = get_option('jewellery_lite_demo_import_completed', false);

        // If the demo import is completed, display the "View Site" button
        if ($jewellery_lite_demo_import_completed) {
        echo '<p class="notice-text">' . esc_html__('Your demo import has been completed successfully.', 'jewellery-lite') . '</p>';
        echo '<span><a href="' . esc_url(home_url()) . '" class="button button-primary site-btn" target="_blank">' . esc_html__('View Site', 'jewellery-lite') . '</a></span>';
        }

		//POST and update the customizer and other related data
        if (isset($_POST['submit'])) {

             // Check if woocommerce is installed and activated
            if (!is_plugin_active('woocommerce/woocommerce.php')) {
                // Install the plugin if it doesn't exist
                $jewellery_lite_plugin_slug = 'woocommerce';
                $jewellery_lite_plugin_file = 'woocommerce/woocommerce.php';
    
                // Check if plugin is installed
                $jewellery_lite_installed_plugins = get_plugins();
                if (!isset($jewellery_lite_installed_plugins[$jewellery_lite_plugin_file])) {
                    include_once(ABSPATH . 'wp-admin/includes/plugin-install.php');
                    include_once(ABSPATH . 'wp-admin/includes/file.php');
                    include_once(ABSPATH . 'wp-admin/includes/misc.php');
                    include_once(ABSPATH . 'wp-admin/includes/class-wp-upgrader.php');
    
                    // Install the plugin
                    $jewellery_lite_upgrader = new Plugin_Upgrader();
                    $jewellery_lite_upgrader->install('https://downloads.wordpress.org/plugin/woocommerce.latest-stable.zip');
                }
                // Activate the plugin
                activate_plugin($jewellery_lite_plugin_file);
            }

            // Check if ibtana visual editor is installed and activated
            if (!is_plugin_active('ibtana-visual-editor/plugin.php')) {
              // Install the plugin if it doesn't exist
              $jewellery_lite_plugin_slug = 'ibtana-visual-editor';
              $jewellery_lite_plugin_file = 'ibtana-visual-editor/plugin.php';

              // Check if plugin is installed
              $jewellery_lite_installed_plugins = get_plugins();
              if (!isset($jewellery_lite_installed_plugins[$jewellery_lite_plugin_file])) {
                  include_once(ABSPATH . 'wp-admin/includes/plugin-install.php');
                  include_once(ABSPATH . 'wp-admin/includes/file.php');
                  include_once(ABSPATH . 'wp-admin/includes/misc.php');
                  include_once(ABSPATH . 'wp-admin/includes/class-wp-upgrader.php');

                  // Install the plugin
                  $jewellery_lite_upgrader = new Plugin_Upgrader();
                  $jewellery_lite_upgrader->install('https://downloads.wordpress.org/plugin/ibtana-visual-editor.latest-stable.zip');
              }
              // Activate the plugin
              activate_plugin($jewellery_lite_plugin_file);
            }


            // ------- Create Nav Menu --------
            $jewellery_lite_menuname = 'Main Menus';
            $jewellery_lite_bpmenulocation = 'primary';
            $jewellery_lite_menu_exists = wp_get_nav_menu_object($jewellery_lite_menuname);

            if (!$jewellery_lite_menu_exists) {
                $jewellery_lite_menu_id = wp_create_nav_menu($jewellery_lite_menuname);

                // Create Home Page
                $jewellery_lite_home_title = 'Home';
                $productpage_shortcode = '<h2>FRATURED PRODUCTS</h2>[products limit="3" columns="3"]';
                $jewellery_lite_home = array(
                    'post_type' => 'page',
                    'post_title' => $jewellery_lite_home_title,
                    'post_content' =>  $productpage_shortcode,
                    'post_status' => 'publish',
                    'post_author' => 1,
                    'post_slug' => 'home'
                );
                $jewellery_lite_home_id = wp_insert_post($jewellery_lite_home);
                // Assign Home Page Template
                add_post_meta($jewellery_lite_home_id, '_wp_page_template', 'page-template/custom-home-page.php');
                // Update options to set Home Page as the front page
                update_option('page_on_front', $jewellery_lite_home_id);
                update_option('show_on_front', 'page');
                // Add Home Page to Menu
                wp_update_nav_menu_item($jewellery_lite_menu_id, 0, array(
                    'menu-item-title' => __('Home', 'jewellery-lite'),
                    'menu-item-classes' => 'home',
                    'menu-item-url' => home_url('/'),
                    'menu-item-status' => 'publish',
                    'menu-item-object-id' => $jewellery_lite_home_id,
                    'menu-item-object' => 'page',
                    'menu-item-type' => 'post_type'
                ));
                
                // Create About Us Page with Dummy Content
                $jewellery_lite_about_title = 'About Us';
                $jewellery_lite_about_content = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...<br>

                         Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960 with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br>

                            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which dont look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isnt anything embarrassing hidden in the middle of text.<br>

                            All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.';
                $jewellery_lite_about = array(
                    'post_type' => 'page',
                    'post_title' => $jewellery_lite_about_title,
                    'post_content' => $jewellery_lite_about_content,
                    'post_status' => 'publish',
                    'post_author' => 1,
                    'post_slug' => 'about-us'
                );
                $jewellery_lite_about_id = wp_insert_post($jewellery_lite_about);
                // Add About Us Page to Menu
                wp_update_nav_menu_item($jewellery_lite_menu_id, 0, array(
                    'menu-item-title' => __('About Us', 'jewellery-lite'),
                    'menu-item-classes' => 'about-us',
                    'menu-item-url' => home_url('/about-us/'),
                    'menu-item-status' => 'publish',
                    'menu-item-object-id' => $jewellery_lite_about_id,
                    'menu-item-object' => 'page',
                    'menu-item-type' => 'post_type'
                ));

                // Create Shop Page with Dummy Content
                $jewellery_lite_about_title = 'Shop';
                $jewellery_lite_about_content = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...<br>

                         Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960 with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br>

                            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which dont look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isnt anything embarrassing hidden in the middle of text.<br>

                            All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.';
                $jewellery_lite_about = array(
                    'post_type' => 'page',
                    'post_title' => $jewellery_lite_about_title,
                    'post_content' => $jewellery_lite_about_content,
                    'post_status' => 'publish',
                    'post_author' => 1,
                    'post_slug' => 'about-us'
                );
                $jewellery_lite_about_id = wp_insert_post($jewellery_lite_about);
                // Add Shop Page to Menu
                wp_update_nav_menu_item($jewellery_lite_menu_id, 0, array(
                    'menu-item-title' => __('Shop', 'jewellery-lite'),
                    'menu-item-classes' => 'about-us',
                    'menu-item-url' => home_url('/about-us/'),
                    'menu-item-status' => 'publish',
                    'menu-item-object-id' => $jewellery_lite_about_id,
                    'menu-item-object' => 'page',
                    'menu-item-type' => 'post_type'
                ));

                // Create Pages Page with Dummy Content
                $jewellery_lite_pages_title = 'Pages';
                $jewellery_lite_pages_content = '
                <p>Explore all the pages we have on our website. Find information about our services, company, and more.</p>

                 Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960 with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br>

                  All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.';
                $jewellery_lite_pages = array(
                    'post_type' => 'page',
                    'post_title' => $jewellery_lite_pages_title,
                    'post_content' => $jewellery_lite_pages_content,
                    'post_status' => 'publish',
                    'post_author' => 1,
                    'post_slug' => 'pages'
                );
                $jewellery_lite_pages_id = wp_insert_post($jewellery_lite_pages);
                // Add Pages Page to Menu
                wp_update_nav_menu_item($jewellery_lite_menu_id, 0, array(
                    'menu-item-title' => __('Pages', 'jewellery-lite'),
                    'menu-item-classes' => 'pages',
                    'menu-item-url' => home_url('/pages/'),
                    'menu-item-status' => 'publish',
                    'menu-item-object-id' => $jewellery_lite_pages_id,
                    'menu-item-object' => 'page',
                    'menu-item-type' => 'post_type'
                ));

                // Create Blog Page 
                $jewellery_lite_blog_page_title = 'Blog';

                $jewellery_lite_blog_page_query = new WP_Query(array(
                    'post_type'      => 'page',
                    'name'           => sanitize_title($jewellery_lite_blog_page_title),
                    'post_status'    => 'publish',
                    'posts_per_page' => 1
                ));
                if (!$jewellery_lite_blog_page_query->have_posts()) {
                    $jewellery_lite_blog_page = array(
                        'post_type'   => 'page',
                        'post_title'  => $jewellery_lite_blog_page_title,
                        'post_status' => 'publish',
                        'post_author' => 1,
                    );
                    $jewellery_lite_blog_page_id = wp_insert_post($jewellery_lite_blog_page);
                    update_option('page_for_posts', $jewellery_lite_blog_page_id);

                    wp_update_nav_menu_item($jewellery_lite_menu_id, 0, array(
                        'menu-item-title'      => __('Blog', 'jewellery-lite'),
                        'menu-item-url'        => get_permalink($jewellery_lite_blog_page_id),
                        'menu-item-status'     => 'publish',
                        'menu-item-object-id'  => $jewellery_lite_blog_page_id,
                        'menu-item-object'     => 'page',
                        'menu-item-type'       => 'post_type',
                    ));
                }

                // Create Contact Us Page with Dummy Content
                $jewellery_lite_about_title = 'Contact Us';
                $jewellery_lite_about_content = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...<br>

                         Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960 with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br>

                            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which dont look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isnt anything embarrassing hidden in the middle of text.<br>

                            All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.';
                $jewellery_lite_about = array(
                    'post_type' => 'page',
                    'post_title' => $jewellery_lite_about_title,
                    'post_content' => $jewellery_lite_about_content,
                    'post_status' => 'publish',
                    'post_author' => 1,
                    'post_slug' => 'about-us'
                );
                $jewellery_lite_about_id = wp_insert_post($jewellery_lite_about);
                // Add Contact Us Page to Menu
                wp_update_nav_menu_item($jewellery_lite_menu_id, 0, array(
                    'menu-item-title' => __('Contact Us', 'jewellery-lite'),
                    'menu-item-classes' => 'about-us',
                    'menu-item-url' => home_url('/about-us/'),
                    'menu-item-status' => 'publish',
                    'menu-item-object-id' => $jewellery_lite_about_id,
                    'menu-item-object' => 'page',
                    'menu-item-type' => 'post_type'
                ));


                // Set the menu location if it's not already set
                if (!has_nav_menu($jewellery_lite_bpmenulocation)) {
                    $locations = get_theme_mod('nav_menu_locations'); // Use 'nav_menu_locations' to get locations array
                    if (empty($locations)) {
                        $locations = array();
                    }
                    $locations[$jewellery_lite_bpmenulocation] = $jewellery_lite_menu_id;
                    set_theme_mod('nav_menu_locations', $locations);
                }

            }


            // Set the demo import completion flag
    		update_option('jewellery_lite_demo_import_completed', true);
    		// Display success message and "View Site" button
    		echo '<p class="notice-text">' . esc_html__('Your demo import has been completed successfully.', 'jewellery-lite') . '</p>';
    		echo '<span><a href="' . esc_url(home_url()) . '" class="button button-primary site-btn" target="_blank">' . esc_html__('View Site', 'jewellery-lite') . '</a></span>';
            //end


            // Top Bar //
          
            set_theme_mod( 'jewellery_lite_phone_number', '+00 1236 123 456' );
            set_theme_mod( 'jewellery_lite_location_icon', 'fas fa-map-marker-alt' );
            set_theme_mod( 'jewellery_lite_location', '123 Dunmmy street lorem ipsum, USA' );
            set_theme_mod( 'jewellery_lite_order_tracking_icon', 'fas fa-truck' );
            set_theme_mod( 'jewellery_lite_my_account_icon', 'fas fa-sign-in-alt' );

            set_theme_mod( 'jewellery_lite_cart_icon', 'fas fa-shopping-cart' );

          
            // slider section start //
            set_theme_mod( 'jewellery_lite_slider_button_text', 'SHOP NOW' );
            set_theme_mod( 'jewellery_lite_slider_button_link', '#' );
            set_theme_mod( 'jewellery_lite_slider_small_title', 'LOREM IPSUM DOLOR SIT AMET ' );

            for($jewellery_lite_i=1;$jewellery_lite_i<=4;$jewellery_lite_i++){
               $jewellery_lite_slider_title = 'TE OBTUNUIT UT ADEPTO';
               $jewellery_lite_slider_content = 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry.';
                  // Create post object
               $my_post = array(
               'post_title'    => wp_strip_all_tags( $jewellery_lite_slider_title ),
               'post_content'  => $jewellery_lite_slider_content,
               'post_status'   => 'publish',
               'post_type'     => 'page',
               );

               // Insert the post into the database
               $jewellery_lite_post_id = wp_insert_post( $my_post );

               if ($jewellery_lite_post_id) {
                 // Set the theme mod for the slider page
                set_theme_mod('jewellery_lite_slider_page' . $jewellery_lite_i, $jewellery_lite_post_id);

                $jewellery_lite_image_url = get_template_directory_uri().'/assets/images/slider'.$jewellery_lite_i.'.png';

                $jewellery_lite_image_id = media_sideload_image($jewellery_lite_image_url, $jewellery_lite_post_id, null, 'id');

                    if (!is_wp_error($jewellery_lite_image_id)) {
                        // Set the downloaded image as the post's featured image
                        set_post_thumbnail($jewellery_lite_post_id, $jewellery_lite_image_id);
                    }
                }
            }


            // products //

            $jewellery_lite_title_array = array(
                array("PRODUCT TITLE 1",
                      "PRODUCT TITLE 2",
                      "PRODUCT TITLE 3")
                );

            foreach ($jewellery_lite_title_array as $jewellery_lite_titles) {
                // Loop to create only 3 products
                for ($jewellery_lite_i = 0; $jewellery_lite_i < 3; $jewellery_lite_i++) {
                    // Create product content
                    $jewellery_lite_title = $jewellery_lite_titles[$jewellery_lite_i];
                    $jewellery_lite_content = 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.';

                    // Create product post object
                    $jewellery_lite_my_post = array(
                        'post_title'    => wp_strip_all_tags($jewellery_lite_title),
                        'post_content'  => $jewellery_lite_content,
                        'post_status'   => 'publish',
                        'post_type'     => 'product',
                    );
                    
                    // Insert the product into the database
                    $jewellery_lite_post_id = wp_insert_post($jewellery_lite_my_post);

                    if (is_wp_error($jewellery_lite_post_id)) {
                        error_log('Error creating product: ' . $jewellery_lite_post_id->get_error_message());
                        continue; // Skip to the next product if creation fails
                    }

                    // Add product meta (price, etc.)
                    update_post_meta($jewellery_lite_post_id, '_regular_price', '15.98'); // Regular price
                    update_post_meta($jewellery_lite_post_id, '_sale_price', '12.98'); // Sale price
                    update_post_meta($jewellery_lite_post_id, '_price', '12.98'); // Active price

                    // Handle the featured image using media_sideload_image
                    $jewellery_lite_image_url = get_template_directory_uri() . '/assets/images/product' . ($jewellery_lite_i + 1) . '.png';
                    $jewellery_lite_image_id = media_sideload_image($jewellery_lite_image_url, $jewellery_lite_post_id, null, 'id');

                    if (is_wp_error($jewellery_lite_image_id)) {
                        error_log('Error downloading image: ' . $jewellery_lite_image_id->get_error_message());
                        continue; // Skip to the next product if image download fails
                    }

                    // Assign featured image
                    set_post_thumbnail($jewellery_lite_post_id, $jewellery_lite_image_id);

                    update_option('page_on_front', $jewellery_lite_home_id);
                    update_option('show_on_front', 'page');
                    
                }
            }       

        }
    ?>

	<p><?php esc_html_e('Please back up your website if it’s already live with data. This importer will overwrite your existing settings with the new customizer values for Jewellery Lite', 'jewellery-lite'); ?></p>
    <form action="<?php echo esc_url(home_url()); ?>/wp-admin/themes.php?page=jewellery_lite_guide" method="POST" onsubmit="return validate(this);">
        <?php if (!get_option('jewellery_lite_demo_import_completed')) : ?>
            <input class="run-import" type="submit" name="submit" value="<?php esc_attr_e('Run Importer', 'jewellery-lite'); ?>" class="button button-primary button-large">
        <?php endif; ?>
        <div id="spinner" style="display:none;">         
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/spinner.png" alt="" />
        </div>
    </form>
    <script type="text/javascript">
        function validate(form) {
            if (confirm("Do you really want to import the theme demo content?")) {
                // Show the spinner
                document.getElementById('spinner').style.display = 'block';
                // Allow the form to be submitted
                return true;
            } 
            else {
                return false;
            }
        }
    </script>
</div>
