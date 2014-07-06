<?php

return array(
    'base' => array(),
    'translator' => array(
        'locale' => 'fr_FR',
        'translation_file_patterns' => array(
            array(
                'type'      => 'phpArray',
                'base_dir'  => __DIR__ . '/../language',
                'pattern'   => '%s.php',
            ),
        ),
    ),    
);