<?php

declare(strict_types=1);

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class TwitterConnect extends Facade
{
    public static function getFacadeAccessor()
    {
        return \App\Services\TwitterConnect::class;
    }
}
