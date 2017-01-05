<?php

namespace Appartoo\AppBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class AppartooAppBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
