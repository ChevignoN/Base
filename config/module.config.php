<?php

return array(
    'base' => array(
        'events' => array(
            'error.handler' => array(
                'type' => 'dispatch.error',
                'factory' => '\Chevignon\Base\Service\Event\ErrorHandler',
                'priority' => null,
            ),
        ),
    ),
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