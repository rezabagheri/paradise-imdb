<?php
/**
 * @package ParadiseIMDB
 */

namespace Inc\MetaBoxs;

use Inc\Core\MetaBoxs\MetaBox;
use Inc\Core\MetaBoxs\Field\InputField;

class PersonInfo extends MetaBox
{
    
    public function __construct()
    {
        $this->set_config([
            "id"            => 'person_info',
            "title"         => 'Person Info',
            "description"   => 'Description About Person',
            "prefix"        => 'person_info_',
            "domain"        => 'paradise',
            "class_name"    => 'person-info',
            "post_types"    => ['post','person1'],
            "context"       => 'normal',
            "priority"      => 'low',
            ]);
    
            $first_name = new InputField(
                'first_name', 
                'First Name',
                'first_name',
                'text',
                [
                    'show_label' => true,
                    'label_class' => 'Label-class',
                    'field_class' => 'field-class',
                    'place_holder' => "First Name",
                    //'read_only' => true
                ]
            );
            $last_name = new InputField(
                'last_name', 
                'Last Name',
                'last_name',
                'text',
                [
                    'show_label' => true,
                    'label_class' => 'Label-class',
                    'field_class' => 'field-class',
                    'place_holder' => "Last Name",
                    //'read_only' => true
                ]
            );

            $this->add_field( $first_name );
            $this->add_field( $last_name );
       }

    

    public function render()
    {
        echo '<h1>Salam!</h1>';
        $this->render_fields();

    }
}