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
    
            $input1 = new InputField(
                'input1', 
                'Input 1',
                'input1_n',
                'text',
                [
                    'show_label' => true,
                    'label_class' => 'Label-class',
                    'field_class' => 'field-class',
                    'place_holder' => "First Name",
                    //'read_only' => true
                ]
            );

            $btn1 = new InputField(
                'btn1', 
                'Btn 1',
                'Btn_1',
                'number',
                [
                    'show_label' => false,
                    'label_class' => 'Label-class',
                    'field_class' => 'field-class',
                    //'read_only' => true
                ]
            );
            $this->add_field( $input1 )->add_field( $btn1 );
       }

    

    public function render()
    {
        echo '<h1>Salam!</h1>';
        $this->render_fields();

    }
}