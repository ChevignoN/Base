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
       $this->loadServices($e);       
       $eventManager = $e->getApplication()->getEventManager();
       $moduleRouteListener = new ModuleRouteListener();
       $moduleRouteListener->attach($eventManager);
   }
   
   protected function loadServices(MvcEvent $e)
   {
        $config = $e->getApplication()->getServiceManager()->get('base.config');
        $events = isset ($config['events']) ? $config['events'] : array();
        
        foreach($events as $event)
        {
            if (!isset($event['type']))     { throw new \Exception("Event type must be specified."); }
            if (!isset($event['factory']))  { throw new \Exception("Event factory must be specified."); }
            if (!isset($event['priority'])) { $event['priority'] = null; }
            
            $instance = new $event['factory']();
            $e->getApplication()->getEventManager()->attach($event['type'], array($instance, 'createEvent'), $event['priority']);
        }
   }
}