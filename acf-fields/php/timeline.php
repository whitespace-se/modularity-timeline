<?php 

if (function_exists('acf_add_local_field_group')) {
    acf_add_local_field_group(array(
    'key' => 'group_59ede2f88a7b5',
    'title' => __('Timeline', 'modularity-timeline'),
    'fields' => array(
        0 => array(
            'key' => 'field_5d5416b7f92ed',
            'label' => __('format', 'modularity-timeline'),
            'name' => 'timeline_format',
            'type' => 'true_false',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'message' => __('Show time instead of date', 'modularity-timeline'),
            'default_value' => 0,
            'ui' => 0,
            'ui_on_text' => __('Date format', 'modularity-timeline'),
            'ui_off_text' => __('Timestamp format', 'modularity-timeline'),
        ),
        1 => array(
            'key' => 'field_59ede644f0d68',
            'label' => __('Date format', 'modularity-timeline'),
            'name' => 'timeline_date_format',
            'type' => 'radio',
            'instructions' => '',
            'required' => 1,
            'conditional_logic' => array(
                0 => array(
                    0 => array(
                        'field' => 'field_5d5416b7f92ed',
                        'operator' => '!=',
                        'value' => '1',
                    ),
                ),
            ),
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'choices' => array(
                'dmy' => __('Day Month Year', 'modularity-timeline'),
                'dm' => __('Day Month', 'modularity-timeline'),
                'my' => __('Month Year', 'modularity-timeline'),
                'y' => __('Year', 'modularity-timeline'),
                'm' => __('Month', 'modularity-timeline'),
                'd' => __('Day', 'modularity-timeline'),
            ),
            'allow_null' => 0,
            'other_choice' => 0,
            'save_other_choice' => 0,
            'default_value' => 'dmy:Day-Month-Year',
            'layout' => 'vertical',
            'return_format' => 'value',
        ),
        2 => array(
            'key' => 'field_5d5417466c393',
            'label' => __('Timestamp format', 'modularity-timeline'),
            'name' => 'timeline_timestamp_format',
            'type' => 'radio',
            'instructions' => '',
            'required' => 1,
            'conditional_logic' => array(
                0 => array(
                    0 => array(
                        'field' => 'field_5d5416b7f92ed',
                        'operator' => '==',
                        'value' => '1',
                    ),
                ),
            ),
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'choices' => array(
                'Hi' => __('Hour minutes', 'modularity-timeline'),
            ),
            'allow_null' => 0,
            'other_choice' => 0,
            'save_other_choice' => 0,
            'default_value' => 'Hi:Hour-minutes',
            'layout' => 'vertical',
            'return_format' => 'value',
        ),
        3 => array(
            'key' => 'field_59ede30ef0d63',
            'label' => __('Tidslinjehändelser', 'modularity-timeline'),
            'name' => 'timeline_events',
            'type' => 'repeater',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'collapsed' => '',
            'min' => 0,
            'max' => 0,
            'layout' => 'block',
            'button_label' => '',
            'sub_fields' => array(
                0 => array(
                    'key' => 'field_59ede46ef0d64',
                    'label' => __('Title', 'modularity-timeline'),
                    'name' => 'title',
                    'type' => 'text',
                    'instructions' => '',
                    'required' => 1,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => '',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                ),
                1 => array(
                    'key' => 'field_59ede485f0d65',
                    'label' => __('Content', 'modularity-timeline'),
                    'name' => 'content',
                    'type' => 'textarea',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => '',
                    'placeholder' => '',
                    'maxlength' => '',
                    'rows' => 4,
                    'new_lines' => 'wpautop',
                ),
                2 => array(
                    'key' => 'field_5a44b698607e2',
                    'label' => __('Link', 'modularity-timeline'),
                    'name' => 'link',
                    'type' => 'text',
                    'instructions' => __('Add a link to this event', 'modularity-timeline'),
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => '',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                ),
                3 => array(
                    'key' => 'field_59ede49df0d66',
                    'label' => __('Date', 'modularity-timeline'),
                    'name' => 'date',
                    'type' => 'date_picker',
                    'instructions' => '',
                    'required' => 1,
                    'conditional_logic' => array(
                        0 => array(
                            0 => array(
                                'field' => 'field_5d5416b7f92ed',
                                'operator' => '!=',
                                'value' => '1',
                            ),
                        ),
                    ),
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'display_format' => 'Y-m-d',
                    'return_format' => 'Y-m-d',
                    'first_day' => 1,
                ),
                4 => array(
                    'key' => 'field_5d5414c0677aa',
                    'label' => __('Timestamp', 'modularity-timeline'),
                    'name' => 'timestamp',
                    'type' => 'time_picker',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => array(
                        0 => array(
                            0 => array(
                                'field' => 'field_5d5416b7f92ed',
                                'operator' => '==',
                                'value' => '1',
                            ),
                        ),
                    ),
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'display_format' => 'H:i:s',
                    'return_format' => 'H:i:s',
                ),
                5 => array(
                    'key' => 'field_59ede561f0d67',
                    'label' => __('Image', 'modularity-timeline'),
                    'name' => 'image',
                    'type' => 'file',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '50',
                        'class' => '',
                        'id' => '',
                    ),
                    'return_format' => 'array',
                    'library' => 'all',
                    'min_size' => '',
                    'max_size' => '',
                    'mime_types' => '',
                ),
                6 => array(
                    'key' => 'field_59f06fc81c692',
                    'label' => __('Image position', 'modularity-timeline'),
                    'name' => 'image_position',
                    'type' => 'radio',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '50',
                        'class' => '',
                        'id' => '',
                    ),
                    'choices' => array(
                        'top' => __('Top', 'modularity-timeline'),
                        'side' => __('Side', 'modularity-timeline'),
                    ),
                    'allow_null' => 0,
                    'other_choice' => 0,
                    'save_other_choice' => 0,
                    'default_value' => 'top : Top',
                    'layout' => 'vertical',
                    'return_format' => 'value',
                ),
            ),
        ),
    ),
    'location' => array(
        0 => array(
            0 => array(
                'param' => 'post_type',
                'operator' => '==',
                'value' => 'mod-timeline',
            ),
        ),
    ),
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => '',
    'active' => 1,
    'description' => '',
));
}