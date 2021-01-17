<?php

declare(strict_types=1);

namespace App\Models;

use App\Scopes\AmountSumScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class WorkData extends BaseModel
{
    use HasFactory;

    public const FORM_FIELDS = [
        ['type' => 'string', 'required', 'title' => 'Item', 'name' => 'title'],
        ['type' => 'number', 'required', 'title' => 'Item amount 1', 'name' => 'amount_1'],
        ['type' => 'number', 'required', 'title' => 'Item amount 2', 'name' => 'amount_2'],
        ['type' => 'number', 'required', 'title' => 'Item amount 3', 'name' => 'amount_3'],
    ];

    public const LIST = [
        ['type' => 'integer', 'title' => 'ID', 'name' => 'id'],
        ['type' => 'string', 'title' => 'Item', 'name' => 'title'],
        ['type' => 'integer', 'title' => 'Item amount 1', 'name' => 'amount_1'],
        ['type' => 'integer', 'title' => 'Item amount 2', 'name' => 'amount_2'],
        ['type' => 'integer', 'title' => 'Item amount 3', 'name' => 'amount_3'],
        ['type' => 'buttons'],
    ];

    /**
     * @var string
     */
    public $table = 'workdata';

    /**
     * @var array
     */
    public $fillable = [
        'title',
        'amount_1',
        'amount_2',
        'amount_3',
    ];

    public static function booted()
    {
        static::addGlobalScope(new AmountSumScope());
    }
}
