<?php 

namespace Shahadat\UniqueSlug\Facades;

use Illuminate\Support\Facades\Facade;

class UniqueSlug extends Facade {

    protected static function getFacadeAccessor()
    {
        return 'unique-slug';
    }
}