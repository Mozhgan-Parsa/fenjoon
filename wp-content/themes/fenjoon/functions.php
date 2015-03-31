<?php
//******************************************
// Basic Setup
//******************************************
function fenjoon_setup(){
	// Make fenjoon available for translation.
	load_theme_textdomain('fenjoon', get_template_directory().'/lang');
	// Add support for thumbnails
	add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'fenjoon_setup' );

//******************************************
// Add Custom JS to Admin Post Edit Panel
//******************************************
function add_fenjoon_admin_js() {
	wp_enqueue_script( 'fenjoon_admin_js', admin_url() . 'js/fenjoon_admin.js', array(), '1.0', true );
}
add_filter('admin_head', 'add_fenjoon_admin_js');

//******************************************
// CPT - Site Type
//******************************************
function cpt_sitetype(){
	$labels = array(
		'name'                => _x( 'Sitetypes', 'fenjoon' ),
		'singular_name'       => _x( 'Sitetype', 'fenjoon' ),
		'menu_name'           => __( 'Sitetypes', 'fenjoon' ),
		'parent_item_colon'   => __( 'Parent Sitetype', 'fenjoon' ),
		'all_items'           => __( 'All Sitetypes', 'fenjoon' ),
		'view_item'           => __( 'View Sitetypes', 'fenjoon' ),
		'add_new_item'        => __( 'Add New Sitetype', 'fenjoon' ),
		'add_new'             => __( 'Add New', 'fenjoon' ),
		'edit_item'           => __( 'Edit Sitetype', 'fenjoon' ),
		'update_item'         => __( 'Update Sitetype', 'fenjoon' ),
		'search_items'        => __( 'Search Sitetype', 'fenjoon' ),
		'not_found'           => __( 'Not found', 'fenjoon' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'fenjoon' ),
	);
	$args = array(
		'label'               => __( 'sitetypes', 'fenjoon' ),
		'description'         => __( 'Different site types, our team may design and develop', 'fenjoon' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'excerpt', 'editor', 'thumbnail' ),
		'taxonomies'          => array( 'post_tag' ),
		'hierarchical'        => false,
		'public'              => false,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'menu_icon'			  => 'dashicons-welcome-widgets-menus',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
	);
	register_post_type( 'sitetypes', $args );
}
// Hook into the 'init' action
add_action( 'init', 'cpt_sitetype', 0 );

//******************************************
// CPT - Attributes
//******************************************
function cpt_attributes(){
	$labels = array(
		'name'                => _x( 'Attributes', 'fenjoon' ),
		'singular_name'       => _x( 'Attributes', 'fenjoon' ),
		'menu_name'           => __( 'Attributes', 'fenjoon' ),
		'parent_item_colon'   => __( 'Parent Attribute', 'fenjoon' ),
		'all_items'           => __( 'All Attributes', 'fenjoon' ),
		'view_item'           => __( 'View Attributes', 'fenjoon' ),
		'add_new_item'        => __( 'Add New Attribute', 'fenjoon' ),
		'add_new'             => __( 'Add New', 'fenjoon' ),
		'edit_item'           => __( 'Edit Attribute', 'fenjoon' ),
		'update_item'         => __( 'Update Attributes', 'fenjoon' ),
		'search_items'        => __( 'Search Attributes', 'fenjoon' ),
		'not_found'           => __( 'Not found', 'fenjoon' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'fenjoon' ),
	);
	$args = array(
		'label'               => __( 'Attributes', 'fenjoon' ),
		'description'         => __( 'Different Attributes, our team may design and develop', 'fenjoon' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'excerpt', 'editor', 'thumbnail','page-attributes' ),
		'taxonomies'          => array( 'post_tag' ),
		'hierarchical'        => true,
		'public'              => false,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'menu_icon'			  => 'dashicons-welcome-widgets-menus',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
	);
	register_post_type( 'attributes', $args );
}
// Hook into the 'init' action
add_action( 'init', 'cpt_attributes', 0 );

//******************************************
// CPT - Features
//******************************************
function cpt_features(){
	$labels = array(
		'name'                => _x( 'Features', 'fenjoon' ),
		'singular_name'       => _x( 'Features', 'fenjoon' ),
		'menu_name'           => __( 'Features', 'fenjoon' ),
		'parent_item_colon'   => __( 'Parent Feature', 'fenjoon' ),
		'all_items'           => __( 'All Features', 'fenjoon' ),
		'view_item'           => __( 'View Features', 'fenjoon' ),
		'add_new_item'        => __( 'Add New Feature', 'fenjoon' ),
		'add_new'             => __( 'Add New', 'fenjoon' ),
		'edit_item'           => __( 'Edit Feature', 'fenjoon' ),
		'update_item'         => __( 'Update Feature', 'fenjoon' ),
		'search_items'        => __( 'Search Feature', 'fenjoon' ),
		'not_found'           => __( 'Not found', 'fenjoon' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'fenjoon' ),
	);
	$args = array(
		'label'               => __( 'Features', 'fenjoon' ),
		'description'         => __( 'Different Features, our team may design and develop', 'fenjoon' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'excerpt', 'editor', 'thumbnail' ,'page-attributes'),
		'taxonomies'          => array( 'post_tag' ),
		'hierarchical'        => true,
		'public'              => false,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'menu_icon'			  => 'dashicons-welcome-widgets-menus',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
	);
	register_post_type( 'features', $args );
}
// Hook into the 'init' action
add_action( 'init', 'cpt_features', 0 );

//******************************************
// CPT - Modules
//******************************************
function cpt_modules(){
	$labels = array(
		'name'                => _x( 'Modules', 'fenjoon' ),
		'singular_name'       => _x( 'Module', 'fenjoon' ),
		'menu_name'           => __( 'Modules', 'fenjoon' ),
		'parent_item_colon'   => __( 'Parent Module', 'fenjoon' ),
		'all_items'           => __( 'All Modules', 'fenjoon' ),
		'view_item'           => __( 'View Modules', 'fenjoon' ),
		'add_new_item'        => __( 'Add New Module', 'fenjoon' ),
		'add_new'             => __( 'Add New', 'fenjoon' ),
		'edit_item'           => __( 'Edit Module', 'fenjoon' ),
		'update_item'         => __( 'Update Module', 'fenjoon' ),
		'search_items'        => __( 'Search Module', 'fenjoon' ),
		'not_found'           => __( 'Not found', 'fenjoon' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'fenjoon' ),
	);
	$args = array(
		'label'               => __( 'Modules', 'fenjoon' ),
		'description'         => __( 'Different Modules, our team may design and develop', 'fenjoon' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'excerpt', 'editor', 'thumbnail' ,'page-attributes'),
		'taxonomies'          => array( 'post_tag' ),
		'hierarchical'        => true,
		'public'              => false,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'menu_icon'			  => 'dashicons-welcome-widgets-menus',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
	);
	register_post_type( 'modules', $args );
}
// Hook into the 'init' action
add_action( 'init', 'cpt_modules', 0 );

//******************************************
// Children co-selection metabox
//******************************************
function add_children_metabox(){
	if( is_admin() ){
		global $pagenow;
		if( 'post.php' == $pagenow ){
			global $post;
			if(empty($post->post_parent)){
				$post_type = get_post_type_object( get_post_type( $post ) );
				add_meta_box( 
						'coselected_children',
						 __('Select child '.$post_type->label.' to be auto-selected by selecting this '.$post_type->labels->singular_name ),
						 'children_list',
						 $post->post_type,'advanced','core'
				);	
			}
		}
	}
}

function children_list($post) {
	wp_nonce_field( basename( __FILE__ ), 'coselected_children' );
	$coselected_children_string = get_post_meta( $post->ID, 'coselected_children', 1 );
	$coselected_children = !empty( $coselected_children ) ? $coselected_children : '';
	$coselected_children_array = explode( '-', $coselected_children_string );
	$children = get_children( array( 'post_type' => $post->post_type, 'post_parent' => $post->ID ) );
	foreach( $children as $child){ ?>
		<input class="checkbox" type="checkbox" name="child-<?php echo $child->ID;?>" value="<?php echo $child->ID;?>" <?php echo (in_array( $child->ID, $coselected_children_array ) ? 'checked' : ''); ?> /><?php echo $child->post_title;?><br/>
<?php	} ?>
	<input type="hidden" name="coselected_children_string">
	<div id="coselected_children_string" style="visibility:hidden;"></div>
<?php
}

function save_coselected_children() {
	global $post;
	$post_id = $post->ID;
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
	if ( !wp_verify_nonce( $_POST['coselected_children'], basename( __FILE__ ) ) ) return;
	if ( 'page' == $_POST['post_type'] ) {
		if ( !current_user_can( 'edit_page', $post_id ) ) return;
	}else{
		if ( !current_user_can( 'edit_post', $post_id ) )
		return;
	}
	$coselected_children_string = $_POST['coselected_children_string'];
	if($coselected_children_string) update_post_meta($post_id, 'coselected_children', $coselected_children_string);
}
add_action( 'add_meta_boxes','add_children_metabox',0 );
add_action( 'save_post', 'save_coselected_children' );
?>