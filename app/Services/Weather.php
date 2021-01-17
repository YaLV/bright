<?php

declare(strict_types=1);

namespace App\Services;

use App\Traits\CacheTrait;

class Weather
{
    use CacheTrait;
    /**
     * @var object|null
     */
    public $weatherData = null;

    /**
     * @var NetworkGather
     */
    public $network;

    public function __construct(NetworkGather $network)
    {
        $this->network = $network;
        $this->weatherData = \json_decode($this->cached('weather') ?? $this->setCache('weather', $this->getWeatherData(), 60));
    }

    private function getWeatherData(): string
    {
        $this->network->init();

        return $this->network
            ->setUrl('https://community-open-weather-map.p.rapidapi.com/weather?'.config('app.weather_location'))
            ->setHeaders([
                'x-rapidapi-key: '.config('app.weather_api_key'),
                'x-rapidapi-host: community-open-weather-map.p.rapidapi.com',
                'useQueryString: true',
            ])
            ->withTransfer()
            ->getData();
    }
}
