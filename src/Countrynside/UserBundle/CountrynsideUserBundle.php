<?php

namespace Countrynside\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class CountrynsideUserBundle extends Bundle
{
    public function getParent() {
        return 'FOSUserBundle';
    }
}
