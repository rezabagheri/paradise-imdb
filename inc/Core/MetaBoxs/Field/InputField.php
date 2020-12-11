<?php
/**
 * @package ParadiseIMDB
 */

namespace Inc\Core\MetaBoxs\Field;

use Inc\Core\MetaBoxs\Field\Field;

class InputField extends Field
{
    public $type = 'text';
    // public $options = [

    // ];

    public function __construct( $id, $label, $name, $type='text',$options ) 
    {
        $this->type = $type;
        parent::__construct( $id, $label, $name, $options );
    }

    public function render_label()
    {
        
        if( isset( $this->options['show_label'] )) {
            //echo 'render_label';
            $labelClass = "col-sm-2 col-form-label ";
            if( $this->options['show_label'] == true) {
                $labelClass .= isset( $this->options['label_class']) ? 
                         $this->options['label_class'] : 
                        "";
                echo "<label for='$this->id' class= '$labelClass'>$this->label</label>";
            }
        }

    }

    public function render_field()
    {
        $readOnly = "";
        if( isset( $this->options['read_only'] ) ){
            $readOnly = ($this->options['read_only'] == true) ? "readonly" : "" ;
        }
        
        $field_class = "form-control ";
        $place_hoder = "";

        $value = $this->get_value();

        if( isset( $this->options['field_class'] ) ){
            $field_class .= $this->options['field_class'];
        }
        if( isset( $this->options['place_holder'] ) ){
            $place_hoder = "placeholder ='".$this->options['place_holder']."'";
        }

        
        echo "<input type = '$this->type' id='$this->id' name='$this->name' class ='$field_class' $place_hoder $readOnly value='$value'/>";
        
       
    }

    public function render()
    {
        echo '<div class="row mb-3">';
            $this->render_label();
            echo '<div class="col-sm-10">';
                $this->render_field();
            echo '</div>';
        echo '</div>';
       
    }

    public function save_field( $post_id )
    {
        if ( isset( $_POST[ $this->id ] ) ) {
            //$sanitized = sanitize_email( $_POST[ $this->id ] );
            update_post_meta( $post_id, $this->id, $_POST[ $this->id ] );
            }
    }
}