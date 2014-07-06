<?php

namespace Chevignon\Base\Service;

use Zend\Navigation\Service\AbstractNavigationFactory;

class HeaderNavigationFactory extends AbstractNavigationFactory
{
    public function getName()
    {
        return 'header';
    }
}