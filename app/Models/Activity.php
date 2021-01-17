<?php

declare(strict_types=1);

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Activity extends BaseModel
{
    use HasFactory;

    public const FORM_FIELDS = [
        ['type' => 'datetime', 'required', 'title' => 'Date', 'name' => 'date', 'classes' => 'datepicker'],
        ['type' => 'string', 'required', 'title' => 'Description', 'name' => 'activity'],
    ];

    public const LIST = [
        ['type' => 'integer', 'title' => 'ID', 'name' => 'id'],
        ['type' => 'datetime', 'title' => 'Date', 'name' => 'date', 'classes' => 'datepicker'],
        ['type' => 'string', 'title' => 'Description', 'name' => 'activity'],
        ['type' => 'buttons'],
    ];

    public $table = 'activity';

    public $fillable = ['date', 'activity'];

    protected $dates = [
        'date',
    ];

    public function scopeFuture(Builder $query): Builder
    {
        return $query->where('date', '>=', Carbon::today())->orderBy('date', 'asc')->limit(20);
    }
}
