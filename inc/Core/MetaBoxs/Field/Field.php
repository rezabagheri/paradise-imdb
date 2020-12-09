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

    
}