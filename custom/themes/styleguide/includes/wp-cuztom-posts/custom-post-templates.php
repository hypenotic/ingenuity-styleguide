<?php //Connect CPT
$args = array(
    'has_archive' => true,
    'menu_icon' => 'dashicons-welcome-widgets-menus', //http://melchoyce.github.io/dashicons/
    'supports'  => array( 'title', 'editor' )
    );
$temp = register_cuztom_post_type('Templates', $args);
$temp->add_meta_box(
    'template',
    'Template Uploads', 
    array(
        'bundle',    
            array( 
                array(
                    'name'          => 'label',
                    'label'         => 'File Label',
                    'description'   => 'Enter template name here (ex. Brochure).',
                    'type'          => 'text',          
                ),
                array(
                    'name'          => 'upload',
                    'label'         => 'Template File',
                    'description'   => 'Upload template.',
                    'type'          => 'file',
                )
            )
        )
);  
?>