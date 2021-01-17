<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Calendar;
use App\Models\WorkData;
use App\Services\NameDays;
use App\Services\RSSFeed;
use App\Services\TwitterConnect;
use App\Services\Weather;
use Carbon\Carbon;

class DashboardController extends Controller
{
    /**
     * @var Weather
     */
    private $weather;
    /**
     * @var TwitterConnect
     */
    private $twitter;
    /**
     * @var RSSFeed
     */
    private $news;

    /**
     * @var NameDays
     */
    private $nameDays;

    public function __construct(Weather $weather, TwitterConnect $twitter, RSSFeed $news, NameDays $nameDays)
    {
        $this->weather = $weather;
        $this->twitter = $twitter;
        $this->news = $news;
        $this->nameDays = $nameDays;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        /** @var Carbon $now */
        $now = Carbon::now()->locale('lv_LV');

        $dayName = $now->dayName;

        $workDataItems = WorkData::orderBy('created_at', 'asc')->get()->toArray();

        return view('dashboard',
        [
            'components' => [
                [
                    ['size' => '3', 'content' => ['text' => 'Šodienas prombūtnes'], 'template' => 'header'],
                    ['size' => '3', 'content' => $this->weather, 'template' => 'weather'],
                    ['size' => '6', 'content' => ['text' => \ucfirst($dayName).' '.$now->format('d.m.Y'), 'css' => 'float:right'], 'template' => 'header'],
                ],
                [
                    ['size' => '3', 'content' => Calendar::today()->get(), 'template' => 'absence_list'],
                    ['size' => '3', 'content' => $this->twitter, 'template' => 'tweets'],
                    ['size' => '6', 'content' => $this->news, 'template' => 'news'],
                ],
                [
                    ['size' => '3', 'content' => ['text' => 'Plānotās aktivitātes'], 'template' => 'header'],
                    ['size' => '9', 'content' => ['text' => 'Apgrozījuma plāna izpilde'], 'template' => 'header'],
                ],
                [
                    ['size' => '3', 'content' => Activity::future()->get(), 'template' => 'activities'],
                    ['size' => '9', 'content' => ['items' => $workDataItems, 'totals' => $this->countTotalWorkItems($workDataItems)], 'template' => 'work_data'],
                ],
                [
                    ['size' => '3', 'content' => $this->nameDays, 'template' => 'name_days'],
                ],
            ],
        ]);
    }

    public function countTotalWorkItems(array $items): array
    {
        return [
            'amount_1' => \array_sum(\array_column($items, 'amount_1')),
            'amount_2' => \array_sum(\array_column($items, 'amount_2')),
            'amount_3' => \array_sum(\array_column($items, 'amount_3')),
            'totalAmount' => \array_sum(\array_column($items, 'totalAmount')),
            'title' => 'Total',
        ];
    }
}
