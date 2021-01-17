<?php

declare(strict_types=1);

namespace App\Http\Requests;

use App\Rules\TwitterValidator;
use Illuminate\Foundation\Http\FormRequest;

class Twitter extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'handle' => [
                'required',
                'string',
                new TwitterValidator(),
            ],
        ];
    }
}
