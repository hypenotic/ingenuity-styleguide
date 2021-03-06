<?php //Connect CPT
$args = array(
    'has_archive' => true,
    'menu_icon' => 'dashicons-list-view', //http://melchoyce.github.io/dashicons/
    'supports'  => array( 'title', 'editor' )
    );
$guide = register_cuztom_post_type('Overview', $args);
$guide->add_meta_box(
    'overview',
    'header', 
    array(
        array(
                'name'          => 'name_text',
                'label'         => 'Overview Intro',
                'description'   => 'Insert Overview intro here',
                'type'          => 'text',
        ),
        array(
            'name'          => 'name_textarea',
            'label'         => 'Overview Text',
            'description'   => 'Insert Overview text content here.',
            'type'          => 'textarea',
        )
    )
);
?>