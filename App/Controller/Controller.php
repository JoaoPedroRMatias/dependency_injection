<?php

namespace Controller;

use DI\Attribute\Inject;
use Service\Service;

class Controller
{
    #[Inject]
    public Service $service;
}