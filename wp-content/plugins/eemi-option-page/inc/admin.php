<?php
if ( ! class_exists( 'WeDevs_Settings_API' ) ) {
    wp_die ( 'Main class is missing !' );
}


/**
 * Registers settings section and fields
 */
if ( !function_exists( 'eemi_opadmin_init' ) ):
    function eemi_opadmin_init() { 
        $sections = array(
            array(
                'id' => 'eemi_opbasics',
                'title' => __( 'Basic Settings', 'eemi-op' ),
                'desc' => __( 'Basic Settings description', 'eemi-op' ),
                'tab_label' => __( 'Basic', 'eemi-op' ),
            ),
            array(
                'id' => 'eemi_opadvanced',
                'title' => __( 'Advanced Settings', 'eemi-op' ),
                'desc' => __( 'Advanced Settings description', 'eemi-op' )
            ),
            array(
                'id' => 'eemi_opothers',
                'title' => __( 'Other Settings', 'wpuf' ),
                'desc' => __( 'Other Settings description', 'eemi-op' )
            )
        );

        $fields = array(
            'eemi_opbasics' => array(
                array(
                    'name' => 'text',
                    'label' => __( 'Text Input', 'eemi-op' ),
                    'desc' => __( 'Text input description', 'eemi-op' ),
                    'desc_type' => 'inline',
                    'type' => 'text',
                    'default' => 'Title'
                ),
                array(
                    'desc' => __( 'HTML description', 'eemi-op' ),
                    'type' => 'html'
                ),
                array(
                    'name' => 'textarea',
                    'label' => __( 'Textarea Input', 'eemi-op' ),
                    'desc' => __( 'Textarea description', 'eemi-op' ),
                    'type' => 'textarea'
                ),
                array(
                    'name' => 'checkbox',
                    'label' => __( 'Checkbox', 'eemi-op' ),
                    'label' => __( 'Checkbox', 'eemi-op' ),
                    'desc' => __( 'Checkbox Label', 'eemi-op' ),
                    'type' => 'checkbox'
                ),
                array(
                    'name' => 'radio',
                    'label' => __( 'Radio Button', 'eemi-op' ),
                    'desc' => __( 'A radio button', 'eemi-op' ),
                    'type' => 'radio',
                    'options' => array(
                        'yes' => 'Yes',
                        'no' => 'No'
                    )
                ),
                array(
                    'name' => 'multicheck',
                    'label' => __( 'Multile checkbox', 'eemi-op' ),
                    'desc' => __( 'Multi checkbox description', 'eemi-op' ),
                    'type' => 'multicheck',
                    'options' => array(
                        'one' => 'One',
                        'two' => 'Two',
                        'three' => 'Three',
                        'four' => 'Four'
                    )
                ),
                array(
                    'name' => 'selectbox',
                    'label' => __( 'A Dropdown', 'eemi-op' ),
                    'desc' => __( 'Dropdown description', 'eemi-op' ),
                    'type' => 'select',
                    'default' => 'no',
                    'options' => array(
                        'yes' => 'Yes',
                        'no' => 'No'
                    )
                ),
                array(
                    'name' => 'password',
                    'label' => __( 'Password', 'eemi-op' ),
                    'desc' => __( 'Password description', 'eemi-op' ),
                    'type' => 'password',
                    'default' => ''
                ),
                array(
                    'name' => 'file',
                    'label' => __( 'File', 'eemi-op' ),
                    'desc' => __( 'File description', 'eemi-op' ),
                    'type' => 'file',
                    'default' => ''
                )
            ),
            'eemi_opadvanced' => array(
                array(
                    'name' => 'text',
                    'label' => __( 'Text Input', 'eemi-op' ),
                    'desc' => __( 'Text input description', 'eemi-op' ),
                    'type' => 'text',
                    'default' => 'Title'
                ),
                array(
                    'name' => 'textarea',
                    'label' => __( 'Textarea Input', 'eemi-op' ),
                    'desc' => __( 'Textarea description', 'eemi-op' ),
                    'type' => 'textarea'
                ),
                array(
                    'name' => 'checkbox',
                    'label' => __( 'Checkbox', 'eemi-op' ),
                    'desc' => __( 'Checkbox Label', 'eemi-op' ),
                    'type' => 'checkbox'
                ),
                array(
                    'name' => 'radio',
                    'label' => __( 'Radio Button', 'eemi-op' ),
                    'desc' => __( 'A radio button', 'eemi-op' ),
                    'type' => 'radio',
                    'default' => 'no',
                    'options' => array(
                        'yes' => 'Yes',
                        'no' => 'No'
                    )
                ),
                array(
                    'name' => 'multicheck',
                    'label' => __( 'Multile checkbox', 'eemi-op' ),
                    'desc' => __( 'Multi checkbox description', 'eemi-op' ),
                    'type' => 'multicheck',
                    'default' => array( 'one' => 'one', 'four' => 'four' ),
                    'options' => array(
                        'one' => 'One',
                        'two' => 'Two',
                        'three' => 'Three',
                        'four' => 'Four'
                    )
                ),
                array(
                    'name' => 'selectbox',
                    'label' => __( 'A Dropdown', 'eemi-op' ),
                    'desc' => __( 'Dropdown description', 'eemi-op' ),
                    'type' => 'select',
                    'options' => array(
                        'yes' => 'Yes',
                        'no' => 'No'
                    )
                ),
                array(
                    'name' => 'password',
                    'label' => __( 'Password', 'eemi-op' ),
                    'desc' => __( 'Password description', 'eemi-op' ),
                    'type' => 'password',
                    'default' => ''
                ),
                array(
                    'name' => 'file',
                    'label' => __( 'File', 'eemi-op' ),
                    'desc' => __( 'File description', 'eemi-op' ),
                    'type' => 'file',
                    'default' => ''
                )
            ),
            'eemi_opothers' => array(
                array(
                    'name' => 'text',
                    'label' => __( 'Text Input', 'eemi-op' ),
                    'desc' => __( 'Text input description', 'eemi-op' ),
                    'type' => 'text',
                    'default' => 'Title'
                ),
                array(
                    'name' => 'textarea',
                    'label' => __( 'Textarea Input', 'eemi-op' ),
                    'desc' => __( 'Textarea description', 'eemi-op' ),
                    'type' => 'textarea'
                ),
                array(
                    'name' => 'checkbox',
                    'label' => __( 'Checkbox', 'eemi-op' ),
                    'desc' => __( 'Checkbox Label', 'eemi-op' ),
                    'type' => 'checkbox'
                ),
                array(
                    'name' => 'radio',
                    'label' => __( 'Radio Button', 'eemi-op' ),
                    'desc' => __( 'A radio button', 'eemi-op' ),
                    'type' => 'radio',
                    'options' => array(
                        'yes' => 'Yes',
                        'no' => 'No'
                    )
                ),
                array(
                    'name' => 'multicheck',
                    'label' => __( 'Multile checkbox', 'eemi-op' ),
                    'desc' => __( 'Multi checkbox description', 'eemi-op' ),
                    'type' => 'multicheck',
                    'options' => array(
                        'one' => 'One',
                        'two' => 'Two',
                        'three' => 'Three',
                        'four' => 'Four'
                    )
                ),
                array(
                    'name' => 'selectbox',
                    'label' => __( 'A Dropdown', 'eemi-op' ),
                    'desc' => __( 'Dropdown description', 'eemi-op' ),
                    'type' => 'select',
                    'options' => array(
                        'yes' => 'Yes',
                        'no' => 'No'
                    )
                ),
                array(
                    'name' => 'password',
                    'label' => __( 'Password', 'eemi-op' ),
                    'desc' => __( 'Password description', 'eemi-op' ),
                    'type' => 'password',
                    'default' => ''
                ),
                array(
                    'name' => 'file',
                    'label' => __( 'File', 'eemi-op' ),
                    'desc' => __( 'File description', 'eemi-op' ),
                    'type' => 'file',
                    'default' => ''
                )
            )
        );
        
        global $my_settings_api;
        $my_settings_api = new WeDevs_Settings_API;

        //set sections and fields
        $my_settings_api->set_sections( $sections );
        $my_settings_api->set_fields( $fields );

        //initialize them
        $my_settings_api->admin_init();
    }
endif;
add_action( 'admin_init', 'eemi_opadmin_init' );

if ( !function_exists( 'eemi_opadmin_menu' ) ):
    /**
     * Register the plugin page
     */
    function eemi_opadmin_menu() {
        add_options_page( __( 'Settings API', 'eemi-oop' ), __( 'Settings API', 'eemi-oop' ), 'manage_options', 'settings_api_test', 'eemi_opplugin_page' );
    }
endif;
add_action( 'admin_menu', 'eemi_opadmin_menu' );

/**
 * Display the plugin settings options page
 */
if ( !function_exists( 'eemi_opplugin_page' ) ):
    function eemi_opplugin_page() {
        global $my_settings_api;
        
        echo '<div id="icon-options-general" class="icon32"><br /></div>';
        echo '<div class="wrap">';
        settings_errors();

        $my_settings_api->show_navigation();
        $my_settings_api->show_forms();

        echo '</div>';
    }
endif;