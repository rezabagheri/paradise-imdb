<?php
/**
 * @package ParadiseIMDB
 */

namespace Inc\Core\MetaBoxs\Field;

class Field
{
    public $id, $name;
    public $label;
    
    public $options;
    public $default;

    
    public function __construct( $id, $label, $name, $options = [] )
    {
        $this->id       = $id;
        $this->label    = $label;
        $this->name     = $name;
        $this->options  = $options;
    }
    
    public function render_label()
    {
        
    }

    public function get_value( ) {
        global $post;
        
		if ( metadata_exists( 'post', $post->ID, $this->id ) ) {
            $value = get_post_meta( $post->ID, $this->id, true );
		} else if ( isset( $this->default ) ) {
			$value = $this->default;
		} else {
			return '';
		}
        return str_replace( '\u0027', "'", $value );
	}
}