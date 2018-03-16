<?php //Connect CPT
$args = array(
    'has_archive' => true,
    'menu_icon' => 'dashicons-images-alt2', //http://melchoyce.github.io/dashicons/
    'supports'  => array( 'title', 'editor' )
    );
$guide = register_cuztom_post_type('Photography', $args);
$guide->add_meta_box(
    'photography',
    'header', 
    array(
        array(
            'name'          => 'photo_one',
            'label'         => 'Photo One',
            'description'   => 'Upload first image.',
            'type'          => 'image',
        ),
        array(
            'name'          => 'photo_two',
            'label'         => 'Photo Two',
            'description'   => 'Upload second image.',
            'type'          => 'image',
        )
    )
);
?>