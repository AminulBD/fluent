<?php
/**
 * Fluent_Url_Field
 *
 * @package Fluent
 * @since 1.0.0
 * @version 1.0.0
 */

add_action('fluent/options/field/url/render', array('Fluent_Url_Field', 'render'), 1, 2);

/**
 * Fluent_Url_Field simple text field.
 */
class Fluent_Url_Field extends Fluent_Field{
    
    /**
     * Returns the default field data.
     *
     * @since 1.0.0
     *
     * @return array default field data
     */
    public static function field_data(){
        return array(
            'classes' => array(
                'large-text'
            ),
            'placeholder' => ''
        );
    }
    
    /**
     * Render the field HTML based on the data provided.
     *
     * @since 1.0.0
     *
     * @param array $data field data.
     *
     * @param object $object Fluent_Options instance allowing you to alter anything if required.
     */
    public static function render($data = array(), $object){
        
        $data = self::data_setup($data);
        
        echo '<input type="url" name="'.$data['option_name'].'['.$data['name'].']" id="'.$data['id'].'" value="'.$data['value'].'" class="'.implode(' ', $data['classes']).'" placeholder="'.$data['placeholder'].'" />';   
    }
    
}