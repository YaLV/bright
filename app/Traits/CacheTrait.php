<?php

declare(strict_types=1);

namespace App\Traits;

use Illuminate\Support\Facades\Cache;

trait CacheTrait
{
    /**
     * @return mixed|null
     */
    public function cached(string $name)
    {
        if (Cache::has($name)) {
            return Cache::get($name);
        }

        return null;
    }

    /**
     * @param int $timeout
     */
    public function setCache(string $name, string $content, $timeout = 60): string
    {
        $expire = (new \DateTime())->modify('+'.$timeout.' minutes');
        Cache::add($name, $content, $expire);

        return $content;
    }
}
