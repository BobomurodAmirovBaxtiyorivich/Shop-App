<?php

use Src\Router;
use App\Controller;

Router::getMethod("/", [Controller::class, "home"]);

Router::getMethod("/user", [Controller::class, "user"]);

Router::getMethod("/login", [Controller::class, "login"]);