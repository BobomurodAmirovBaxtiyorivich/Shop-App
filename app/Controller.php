<?php

namespace App;

class Controller
{
    public function home(): void
    {
        views('home');
    }

    public function user(): void
    {
        views('userInfo');
    }
}