<?php

namespace Chevignon\Base\Service\Event;

use Zend\Mvc\MvcEvent;

class ErrorHandler implements EventFactoryInterface
{
   public function createEvent(MvcEvent $event)
   {
       $exception = $event->getResult()->exception;
       if (null !== $exception)
       {
           $this->logger = $event->getApplication()->getServiceManager()->get('log');
           $this->logException($exception);
       }
   }

   protected function logException(\Exception $exception)
   {
       $trace = $exception->getTraceAsString();
       $i = 1;
       do {
           $messages[] = $i++ . ": " . $exception->getMessage();
       } while ($excecption = $exception->getPrevious());

       $log = "Exception:\n" . implode("\n", $messages);
       $log .= "\n" . $trace;

       $this->logger->err($log);
   }
}