<?php
/**
 * @package ParadiseIMDB
 */

namespace Inc\Core\MetaBoxs;

class MetaBox
{  
    public $config = [
        "id"            => "",
        "title"         => '',
        "description"   => '',
        "prefix"        => '',
        "domain"        => '',
        "class_name"    => '',
        "post_types"    => [],
        "context"       => '',
        "priority"      => '',
    ];

    public $fields;

    public function set_config( $config ) 
    {
        $this->config["id"] = $config["id"];
        $this->config["title"] = $config["title"];
        $this->config["description"]   = $config["description"];
        $this->config["prefix"]        = $config["prefix"];
        $this->config["domain"]        = $config["domain"];    
        $this->config["class_name"]    = $config["class_name"];
        $this->config["post_types"]    = $config["post_types"];
        $this->config["context"]       = $config["context"];   
        $this->config["priority"]      = $config["priority"];  
    }

    public function register()
    {
        add_action( 'add_meta_boxes', [ $this, 'add_meta_boxes' ]);
    }

    public function add_meta_boxes()
    {
      
        foreach ( $this->config['post_types'] as $post_type ) {
            
			add_meta_box(
				$this->config['id'],
				$this->config['title'],
				[ $this, 'render' ],
				$post_type,
				$this->config['context'],
                $this->config['priority'],
			);
		}
    }

    public function add_field( $field )
    {
        $this->fields[] = $field;
        return $this;
    }
    
    public function render_fields()
    {
        //echo '<table>';
        foreach( $this->fields as $field){
            if( method_exists( $field, 'render'))
          //      echo '<tr>';
                $field->render();
          //      echo '</tr>';
        }
        //echo '</table>';
    }
    public function render()
    {
        echo 'callback';
        //die();
        echo '<div class="rwp-description">' . $this->config['description'] . '</div>';
        $this->render_fields();
    }
}