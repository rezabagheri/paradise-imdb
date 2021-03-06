<?php
/**
 * @package ParadiseIMDB
 */

namespace Inc\Core\PostTypes;

class PostType
{
    public $name;
    public $labels = [];
    public $args = [];
    public $taxonomies = [];
    public $supports = [];

    public function apply_labels( $labels )
    {
        $defaults = [
            'name'                  => _x( 'Post Types', 'Post Type General Name', 'text_domain' ),
		    'singular_name'         => _x( 'Post Type', 'Post Type Singular Name', 'text_domain' ),
		    'menu_name'             => __( 'Post Types', 'text_domain' ),
		    'name_admin_bar'        => __( 'Post Type', 'text_domain' ),
		    'archives'              => __( 'Item Archives', 'text_domain' ),
		    'attributes'            => __( 'Item Attributes', 'text_domain' ),
		    'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		    'all_items'             => __( 'All Items', 'text_domain' ),
		    'add_new_item'          => __( 'Add New Item', 'text_domain' ),
		    'add_new'               => __( 'Add New', 'text_domain' ),
		    'new_item'              => __( 'New Item', 'text_domain' ),
		    'edit_item'             => __( 'Edit Item', 'text_domain' ),
		    'update_item'           => __( 'Update Item', 'text_domain' ),
		    'view_item'             => __( 'View Item', 'text_domain' ),
		    'view_items'            => __( 'View Items', 'text_domain' ),
		    'search_items'          => __( 'Search Item', 'text_domain' ),
		    'not_found'             => __( 'Not found', 'text_domain' ),
		    'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		    'featured_image'        => __( 'Featured Image', 'text_domain' ),
		    'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		    'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		    'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		    'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		    'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		    'items_list'            => __( 'Items list', 'text_domain' ),
		    'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		    'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
        ];

        $this->labels = wp_parse_args( $labels, $defaults);
    }

    public function apply_args()
    {
        $defaults = [
            'label'                 => __( 'Post Type', 'text_domain' ),
            'description'           => __( 'Post Type Description', 'text_domain' ),
            //'labels'                => $labels,
            //'supports'              => array( 'title', 'editor', 'thumbnail' ),
            //'taxonomies'            => array( 'category', 'post_tag' ),
            'hierarchical'          => false,
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'menu_position'         => 5,
            'menu_icon'             => 'dashicons-screenoptions',
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,
            'can_export'            => true,
            'has_archive'           => true,
            'exclude_from_search'   => false,
            'publicly_queryable'    => true,
            'capability_type'       => 'page',
        ];

        $this->args = wp_parse_args( $defaults );
    }

    public function register()
    {
        $this->args['labels'] = $this->labels;
        $this->args['supports'] = $this->supports;
        $this->args['taxonomies'] = $this->taxonomies;
        add_action( 'init', [$this, 'activate']);
        //register_post_type( $this->name, $this->args );
    }

    public function activate() 
    {
        register_post_type( $this->name, $this->args );
    }
}