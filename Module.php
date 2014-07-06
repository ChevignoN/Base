<?php

namespace Chevignon\Base;

use Zend\Mvc\ModuleRouteListener;
use Zend\Mvc\MvcEvent;

class Module
{
   public function getAutoloaderConfig()
   {
       return array(
//           'Zend\Loader\ClassMapAutoloader' => array(
//               __DIR__ . 'autoloader_classmap.php',
//           ),
           'Zend\Loader\StandardAutoloader' => array(
               'namespaces' => array(
                   __NAMESPACE__ => __DIR__ . '/src/Base',
               ),
           ),
       );
   }
   
    public function getConfig()
   {
       return array_merge_recursive(
           include __DIR__ . '/config/module.config.php',
           include __DIR__ . '/config/navigation.config.php',
           include __DIR__ . '/config/router.config.php',
           include __DIR__ . '/config/service.config.php',
           include __DIR__ . '/config/view.config.php'
       );
   }
   
    public function onBootstrap(MvcEvent $e)
   {
       $eventManager = $e->getApplication()->getEventManager();
       $moduleRouteListener = new ModuleRouteListener();
       $moduleRouteListener->attach($eventManager);
   }
}