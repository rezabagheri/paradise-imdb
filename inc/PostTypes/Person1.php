<?php
/**
 * @package ParadiseIMDB
 */

namespace Inc\PostTypes;

use Inc\Core\PostTypes\PostType;

class Person1 extends PostType
{
    public function __construct()
    {
        $this->apply_labels([
            'name'                  => _x( 'Persons1', 'Post Type General Name', 'text_domain' ),
		    'singular_name'         => _x( 'Person1', 'Post Type Singular Name', 'text_domain' ),
		    'menu_name'             => __( 'Persons1', 'text_domain' ),
            'name_admin_bar'        => __( 'Person1', 'text_domain' ),
        ]
        );
        $this->apply_args([
            'label'                 => __( 'Person1', 'text_domain' ),
            'description'           => __( 'Person1 Description', 'text_domain' ),
        ]);

    $this->args['supports'] = $this->supports;
    $this->args['taxonomies'] = $this->taxonomies;
    $this->name = "person1";
    }
}