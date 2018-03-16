<?php //Connect CPT
$args = array(
    'has_archive' => true,
    'menu_icon' => 'dashicons-admin-appearance', //http://melchoyce.github.io/dashicons/
    'supports'  => array( 'title', 'editor' )
    );
$colors = register_cuztom_post_type('Colours', $args);

$colors->add_meta_box(
    'color',
    'Colour Samples', 
    array(
        'bundle',    
            array( 
                array(
                    'name'          => 'hex',
                    'label'         => 'Color',
                    'description'   => 'Choose color.',
                    'type'          => 'color',          
                ),
                array(
                    'name'          => 'pms',
                    'label'         => 'PMS Value',
                    'description'   => 'Enter the PMS value (just the number).',
                    'type'          => 'text',          
                ),
                array(
                    'name'          => 'cyan',
                    'label'         => 'Cyan CMYK Value',
                    'description'   => 'Enter the cyan (C) value.',
                    'type'          => 'text',          
                ),
                array(
                    'name'          => 'magenta',
                    'label'         => 'Magenta CMYK Value',
                    'description'   => 'Enter the magenta (M) value.',
                    'type'          => 'text'
                ),
                array(
                    'name'          => 'yellow',
                    'label'         => 'Yellow CMYK Value',
                    'description'   => 'Enter the yellow (Y) value.',
                    'type'          => 'text'
                ),
                array(
                    'name'          => 'black',
                    'label'         => 'Black/Key CMYK Value',
                    'description'   => 'Enter the key/black (K) value.',
                    'type'          => 'text',
                )
            )
        )
);  
$colors->add_meta_box(
    'secondary',
    'Secondary Color Samples', 
    array(
        'bundle',    
            array( 
                array(
                    'name'          => 'hex',
                    'label'         => 'Color',
                    'description'   => 'Choose color.',
                    'type'          => 'color',          
                ),
                array(
                    'name'          => 'pms',
                    'label'         => 'PMS Value',
                    'description'   => 'Enter the PMS value (just the number).',
                    'type'          => 'text',          
                ),
                array(
                    'name'          => 'cmyk',
                    'label'         => 'CMYK Value',
                    'description'   => 'Enter CMYK Value',
                    'type'          => 'text',          
                )
            )
        )
); 
?>