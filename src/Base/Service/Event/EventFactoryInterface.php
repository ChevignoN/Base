<?php

namespace Chevignon\Base\Service\Event;

use Zend\Mvc\MvcEvent;

interface EventFactoryInterface
{
    public function createEvent(MvcEvent $event);
}