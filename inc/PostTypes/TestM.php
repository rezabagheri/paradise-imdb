<?php
/**
 * @package ParadiseIMDB
 */

namespace Inc\PostTypes;

use Inc\Core\PostTypes\PostType;

class TestM extends PostType
{
    public function __construct()
    {
        $this->apply_labels([
            'name'                  => _x( 'Movies1', 'Post Type General Name', 'text_domain' ),
		    'singular_name'         => _x( 'Movie1', 'Post Type Singular Name', 'text_domain' ),
		    'menu_name'             => __( 'Movies1', 'text_domain' ),
            'name_admin_bar'        => __( 'Movie1', 'text_domain' ),
        ]
        );
        $this->apply_args([
            'label'                 => __( 'Movie1', 'text_domain' ),
            'description'           => __( 'Movie1 Description', 'text_domain' ),
        ]);

    $this->args['supports'] = $this->supports;
    $this->args['taxonomies'] = $this->taxonomies;
    $this->name = "movie1";
    }
}