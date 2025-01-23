<?php

use Src\Router;
use App\Controller;

Router::getMethod("/", [Controller::class, "home"]);

Router::getMethod("/user", [Controller::class, "user"]);

Router::getMethod("/products", [Controller::class, "products"]);