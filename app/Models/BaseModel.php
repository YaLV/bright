<?php

declare(strict_types=1);

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class BaseModel extends Model
{
    public const BOOLEAN = [
        'boolean' => [0 => 'No', 1 => 'Yes'],
    ];

    /**
     * @return mixed|string
     */
    public function getFieldValue(string $fieldName, string $type = 'string')
    {
        $item = '';
        if (\array_key_exists($fieldName, $this->getOriginal())) {
            $item = $this->__get($fieldName);
        }
        switch ($type) {
            case 'boolean':
                $item = self::BOOLEAN[$item];
                break;

            case 'datetime':
                $item = $item instanceof Carbon ? $item : new Carbon($item);

                $item = $item->format(config('app.date_format'));
                break;

            default:
                $item = (string) $item;
                break;
        }

        return $item;
    }
}
