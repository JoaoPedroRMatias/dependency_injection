<?php

namespace Controller;

use DI\Attribute\Inject;
use Traits\JsonTraits;

class Controller
{
    use JsonTraits;

    #[Inject]
    public \Service\Service $service;
}