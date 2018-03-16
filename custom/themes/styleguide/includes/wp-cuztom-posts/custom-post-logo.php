<?php //Connect CPT
$args = array(
    'has_archive' => true,
    'menu_icon' => 'dashicons-format-image', //http://melchoyce.github.io/dashicons/
    'supports'  => array( 'title', 'editor' )
    );
$guide = register_cuztom_post_type('Logo', $args);
$guide->add_meta_box(
    'logo',
    'Logo Package', 
    array(
        array(
            'name'          => 'logo_1',
            'label'         => 'Primary Logo',
            'description'   => 'Choose primary logo',
            'type'          => 'image',
    ),
        array(
            'name'          => 'logo_2',
            'label'         => 'Secondary Logo',
            'description'   => 'Choose secondary logo',
            'type'          => 'image',
        ),
        array(
            'name'          => 'upload',
            'label'         => 'Logo Download File',
            'description'   => 'Upload logo package (.zip)',
            'type'          => 'file',
        ),
        array(
            'name'          => 'label',
            'label'         => 'Label for download link',
            'description'   => ' ex. _______ Logo Package',
            'type'          => 'text',
        ),
        array(
            'name'          => 'labelc',
            'label'         => 'Color for for download link background.',
            'description'   => 'Hex code: #XXXXXX',
            'type'          => 'color',
        )
    )
);
$guide->add_meta_box(
    'logos',
    'Logo Samples', 
    array(
        'bundle',    
            array( 
                array(
                    'name'          => 'logo',
                    'label'         => 'Logo',
                    'description'   => '',
                    'type'          => 'image',
                ),
                array(
                    'name'          => 'upload',
                    'label'         => 'Logo Download File',
                    'description'   => 'Upload logo package (.zip)',
                    'type'          => 'file',
                ),
                array(
                    'name'          => 'descrip',
                    'label'         => 'Description',
                    'description'   => '',
                    'type'          => 'text',          
                )
            )
        )
);  
?>