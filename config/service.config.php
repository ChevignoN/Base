<?php

return array (
    'service_manager' => array(
        'aliases' => array(
            'HeaderNavigation'  => 'Base\Navigation\Header',
            'Log'               => 'Base\Log',
            'Navigation'        => 'Base\Navigation',            
        ),
        'factories' => array(
            'Base\Config'               => 'Chevignon\Base\Service\ConfigFactory',
            'Base\Log'                  => 'Zend\Log\LoggerServiceFactory',
            'Base\Navigation'           => 'Zend\Navigation\Service\DefaultNavigationFactory',
            'Base\Navigation\Header'    => 'Chevignon\Base\Service\HeaderNavigationFactory',
        ),
    ),
);