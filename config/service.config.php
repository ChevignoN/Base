<?php

return array (
    'service_manager' => array(
        'aliases' => array(
            'error.handler'     => 'base.error.handler',
            'header.navigation' => 'base.navigation.header',
            'log'               => 'base.log',
            'navigation'        => 'base.navigation',            
        ),
        'factories' => array(
            'base.config'               => 'Chevignon\Base\Service\ConfigFactory',
            'base.error.handler'        => 'Chevignon\Base\Service\ErrorHandler',
            'base.log'                  => 'Zend\Log\LoggerServiceFactory',
            'base.navigation'           => 'Zend\Navigation\Service\DefaultNavigationFactory',
            'base.navigation.header'    => 'Chevignon\Base\Service\HeaderNavigationFactory',
        ),
    ),
);