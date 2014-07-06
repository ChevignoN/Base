<?php

namespace Chevignon\Base\Service;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class ConfigFactory implements FactoryInterface
{
   public function createService(ServiceLocatorInterface $serviceLocator)
   {
       $config = $serviceLocator->get('Config');
       return isset($config['base']) ? $config['base'] : array();
   }
}