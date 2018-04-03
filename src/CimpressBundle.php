<?php

namespace Printi\CimpressBundle;

use Printi\CimpressBundle\DependencyInjection\CimpressExtension;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class CimpressBundle extends Bundle
{
    public function getContainerExtension()
    {
        return new CimpressExtension();
    }
}
