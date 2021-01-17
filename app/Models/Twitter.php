<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Twitter extends BaseModel
{
    use HasFactory;

    public const FORM_FIELDS = [
        ['type' => 'string', 'required', 'title' => 'Handle', 'name' => 'handle'],
    ];

    public const LIST = [
        ['type' => 'integer', 'title' => 'ID', 'name' => 'id'],
        ['type' => 'string', 'title' => 'Handle', 'name' => 'handle'],
        ['type' => 'buttons'],
    ];

    /**
     * @var string
     */
    public $table = 'twitter';

    /**
     * @var array
     */
    public $fillable = [
        'handle',
    ];
}
