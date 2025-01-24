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

    public function products(): void
    {
        views('products');
    }

    public function addProduct(): void
    {
        views('addProduct');
    }
}