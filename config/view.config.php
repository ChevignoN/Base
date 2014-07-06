<?php

return array(
   'controllers' => array(
       'invokables' => array(
           'Base\Controller\Index' => 'Chevignon\Base\Controller\IndexController',
       ),
   ),
   'view_manager' => array(
       'display_not_found_reason' => true,
       'display_exceptions'       => true,
       'doctype'                  => 'HTML5',
       'not_found_template'       => 'error/404',
       'exception_template'       => 'error/index',
       'template_map' => array(
           'chevignon/base/index/home' => __DIR__ . '/../view/chevignon/base/index/home.phtml',
           'error/404'             => __DIR__ . '/../view/error/404.phtml',
           'error/index'           => __DIR__ . '/../view/error/index.phtml',
           'layout/layout'         => __DIR__ . '/../view/layout/layout.phtml',
           'partial/breadcrumbs'   => __DIR__ . '/../view/layout/partial/breadcrumbs.phtml',
           'partial/footer'        => __DIR__ . '/../view/layout/partial/footer.phtml',
           'partial/header'        => __DIR__ . '/../view/layout/partial/header.phtml',
           'partial/menu'          => __DIR__ . '/../view/layout/partial/menu.phtml',
           'partial/message'       => __DIR__ . '/../view/layout/partial/message.phtml',
       ),
       'controller_map' => array(
           'Chevignon\Base' => true,
       ),
       'template_path_stack' => array(
           __DIR__ . '/../view',
       ),
   ),
);