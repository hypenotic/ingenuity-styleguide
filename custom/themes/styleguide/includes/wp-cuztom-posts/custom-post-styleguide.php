<?php //Connect CPT
$args = array(
    'has_archive' => true,
    'menu_icon' => 'dashicons-media-document', //http://melchoyce.github.io/dashicons/
    'supports'  => array( 'title', 'editor' )
    );
$guide = register_cuztom_post_type('styleguide', $args);
$guide->add_meta_box(
    'sgheader',
    'header', 
    array(
        array(
            'name'          => 'logo',
            'label'         => 'Header Logo',
            'description'   => 'Dimensions XXpx x XXpx',
            'type'          => 'image',
        ),
        array(
            'name'          => 'title',
            'label'         => 'Styleguide',
            'description'   => 'description',
            'type'          => 'text',
        )
    )
);
$guide->add_meta_box(
    'sgbasics',
    'basics', 
    array(
        array(
            'name'          => 'name_color',
            'label'         => 'Main Accent Color',
            'description'   => 'Color for sidebar button, and other accents.',
            'type'          => 'color',
        ),
        array(
            'name'          => 'headercol',
            'label'         => 'Header Color',
            'description'   => 'Color for header.',
            'type'          => 'color',
        ),
        array(
            'name'          => 'headerfont',
            'label'         => 'Main Title Font',
            'description'   => '',
            'type'          => 'text',
        )
    )
);
?>