<?php //Connect CPT
$args = array(
    'has_archive' => true,
    'menu_icon' => 'dashicons-editor-textcolor', //http://melchoyce.github.io/dashicons/
    'supports'  => array( 'title', 'editor' )
    );
$type = register_cuztom_post_type('Typography', $args);
$type->add_meta_box(
    'typescript',
    'scripts', 
    array(
        array(
            'name'          => 'fontscript',
            'label'         => 'Font Script',
            'description'   => 'Enter the script to load your fonts.',
            'type'          => 'textarea',
        )
    )
);
$type->add_meta_box(
    'type',
    'Custom Type', 
    array(
        'bundle',    
            array( 
                array(
                    'name'          => 'fontname',
                    'label'         => 'Font Name',
                    'description'   => 'Enter the font family here.',
                    'type'          => 'text',          
                ),
                array(
                    'name'          => 'extext',
                    'label'         => 'Example Text',
                    'description'   => 'Example: h1. Main Title',
                    'type'          => 'text',          
                ),
                array(
                    'name'          => 'fsize',
                    'label'         => 'Font Size',
                    'description'   => 'Format - XXpx (ex. 52px).',
                    'type'          => 'text',          
                ),
                array(
                    'name'          => 'lineheight',
                    'label'         => 'Line Height',
                    'description'   => 'Format - XXpx (ex. 52px).',
                    'type'          => 'text',          
                ),
                array(
                    'name'          => 'fweight',
                    'label'         => 'Font Weight',
                    'description'   => 'Possible values are dependent on your font script (ex. 100, 200, 300, 600).',
                    'type'          => 'text'
                ),
                array(
                    'name'          => 'fstyle',
                    'label'         => 'Font Style',
                    'description'   => 'Possible values: normal, italic.',
                    'type'          => 'text'
                ),
                array(
                    'name'          => 'case',
                    'label'         => 'Uppercase?',
                    'description'   => 'Possible values: lowercase, uppercase.',
                    'type'          => 'text'
                ),
                array(
                    'name'          => 'spacing',
                    'label'         => 'Letter Spacing',
                    'description'   => '',
                    'type'          => 'text'
                )
            )
        )
); 
$type->add_meta_box(
    'introtext',
    'Intro Text', 
    array(
        array(
            'name'          => 'introfont',
            'label'         => 'Intro Font',
            'description'   => 'Enter the font family here.',
            'type'          => 'text',
        ),
        array(
            'name'          => 'introexample',
            'label'         => 'Intro Text',
            'description'   => 'Enter the intro font example here.',
            'type'          => 'textarea',
        ),
        array(
            'name'          => 'fsize',
            'label'         => 'Font Size',
            'description'   => 'Format - XXpx (ex. 52px).',
            'type'          => 'text',          
        ),
        array(
            'name'          => 'fweight',
            'label'         => 'Font Weight',
            'description'   => 'Possible values are dependent on your font script (ex. 100, 200, 300, 600).',
            'type'          => 'text'
        ),
        array(
            'name'          => 'fstyle',
            'label'         => 'Font Style',
            'description'   => 'Possible values: normal, italic.',
            'type'          => 'text'
        ),
        array(
            'name'          => 'case',
            'label'         => 'Uppercase?',
            'description'   => 'Possible values: lowercase, uppercase.',
            'type'          => 'text'
        )
    )
);
$type->add_meta_box(
    'bodyfont',
    'Body Copy', 
    array(
        array(
            'name'          => 'bodyfont',
            'label'         => 'Body Font',
            'description'   => 'Enter the font family here.',
            'type'          => 'text',
        ),
        array(
            'name'          => 'bodyexample',
            'label'         => 'Body Text',
            'description'   => 'Enter the body font example here.',
            'type'          => 'textarea',
        ),
        array(
            'name'          => 'fsize',
            'label'         => 'Font Size',
            'description'   => 'Format - XXpx (ex. 52px).',
            'type'          => 'text',          
        ),
        array(
            'name'          => 'fweight',
            'label'         => 'Font Weight',
            'description'   => 'Possible values are dependent on your font script (ex. 100, 200, 300, 600).',
            'type'          => 'text'
        ),
        array(
            'name'          => 'fstyle',
            'label'         => 'Font Style',
            'description'   => 'Possible values: normal, italic.',
            'type'          => 'text'
        ),
        array(
            'name'          => 'case',
            'label'         => 'Uppercase?',
            'description'   => 'Possible values: lowercase, uppercase.',
            'type'          => 'text'
        )
    )
); 
$type->add_meta_box(
    'quotetext',
    'Quotation Text', 
    array(
        array(
            'name'          => 'quotefont',
            'label'         => 'Quotation Font',
            'description'   => 'Enter the font family here.',
            'type'          => 'text',
        ),
        array(
            'name'          => 'quoteexample',
            'label'         => 'Quotation Text',
            'description'   => 'Enter the quotation font example here.',
            'type'          => 'textarea',
        ),
        array(
            'name'          => 'fsize',
            'label'         => 'Font Size',
            'description'   => 'Format - XXpx (ex. 52px).',
            'type'          => 'text',          
        ),
        array(
            'name'          => 'fweight',
            'label'         => 'Font Weight',
            'description'   => 'Possible values are dependent on your font script (ex. 100, 200, 300, 600).',
            'type'          => 'text'
        ),
        array(
            'name'          => 'fstyle',
            'label'         => 'Font Style',
            'description'   => 'Possible values: normal, italic.',
            'type'          => 'text'
        ),
        array(
            'name'          => 'case',
            'label'         => 'Uppercase?',
            'description'   => 'Possible values: lowercase, uppercase.',
            'type'          => 'text'
        ),
        array(
            'name'          => 'srcfont',
            'label'         => 'Source Font',
            'description'   => 'Enter the font family here.',
            'type'          => 'text',
        ),
        array(
            'name'          => 'srcex',
            'label'         => 'Source Text',
            'description'   => 'Enter the quotation source here.',
            'type'          => 'textarea',
        ),
        array(
            'name'          => 'fsize_2',
            'label'         => 'Font Size',
            'description'   => 'Format - XXpx (ex. 52px).',
            'type'          => 'text',          
        ),
        array(
            'name'          => 'fweight_2',
            'label'         => 'Font Weight',
            'description'   => 'Possible values are dependent on your font script (ex. 100, 200, 300, 600).',
            'type'          => 'text'
        ),
        array(
            'name'          => 'fstyle_2',
            'label'         => 'Font Style',
            'description'   => 'Possible values: normal, italic.',
            'type'          => 'text'
        ),
        array(
            'name'          => 'case_2',
            'label'         => 'Uppercase?',
            'description'   => 'Possible values: lowercase, uppercase.',
            'type'          => 'text'
        )
    )
);  
?>