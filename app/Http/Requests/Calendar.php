<?php

declare(strict_types=1);

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Calendar extends FormRequest
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
            'title' => 'string|required',
            'allDay' => 'boolean|default,0',
            'description' => 'string',
            'date' => 'date|required|date_format:d.m.Y',
            'timeFrom' => ['string', 'required', 'regex:/^([0-1]?[0-9]|2[0-3]):[0-5][0-9]$/'],
            'timeTo' => ['string', 'required', 'regex:/^([0-1]?[0-9]|2[0-3]):[0-5][0-9]$/'],
        ];
    }
}
