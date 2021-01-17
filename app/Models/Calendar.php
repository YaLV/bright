<?php

declare(strict_types=1);

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Calendar extends BaseModel
{
    use HasFactory;

    public const FORM_FIELDS = [
        ['type' => 'string', 'required', 'title' => 'Person', 'name' => 'title'],
        ['type' => 'text', 'title' => 'Description', 'name' => 'description'],
        ['type' => 'datetime', 'required', 'title' => 'Absence Date', 'name' => 'date', 'classes' => 'datepicker'],
        ['type' => 'string', 'required', 'title' => 'Absence From', 'name' => 'timeFrom', 'classes' => 'timeMask'],
        ['type' => 'string', 'required', 'title' => 'Absence To', 'name' => 'timeTo', 'classes' => 'timeMask'],
    ];

    public const LIST = [
        ['type' => 'integer', 'title' => 'ID', 'name' => 'id'],
        ['type' => 'string', 'title' => 'Person', 'name' => 'title'],
        ['type' => 'text', 'title' => 'Description', 'name' => 'description'],
        ['type' => 'datetime', 'title' => 'Absence Date', 'name' => 'date'],
        ['type' => 'string', 'title' => 'Absence From', 'name' => 'timeFrom'],
        ['type' => 'string', 'title' => 'Absence To', 'name' => 'timeTo'],
        ['type' => 'buttons'],
    ];

    /**
     * @var string
     */
    public $table = 'calendar';

    /**
     * @var array
     */
    public $fillable = [
        'title',
        'description',
        'allDay',
        'date',
        'timeFrom',
        'timeTo',
    ];

    protected $dates = [
        'date',
    ];

    public function scopeToday(Builder $query): Builder
    {
        return $query->where('date', '=', Carbon::today())->orderBy('date');
    }

    public function getMissingFor(): string
    {
        $timeFrom = \explode(':', $this->timeFrom);
        $minutesFrom = ((int) $timeFrom[0] * 60) + (int) $timeFrom[1];

        $timeTo = \explode(':', $this->timeTo);
        $minutesTo = ((int) $timeTo[0] * 60) + (int) $timeTo[1];

        $totalDiff = $minutesTo - $minutesFrom;
        $hoursDiff = \floor($totalDiff / 60);
        $minutesDiff = $totalDiff % 60;

        if ($hoursDiff >= 8) {
            return 'All Day';
        }

        return \sprintf('%d hr(-s) %d min(-s)', $hoursDiff, $minutesDiff);
    }
}
