<?php

namespace Planck\Extension;


use Planck\Application\Application;
use Planck\Application\Extension;

class Bootstrap extends Extension
{


    public function __construct(Application $application)
    {
        parent::__construct($application, 'Planck\Extension\Bootstrap', __DIR__.'/../..');
    }


}
