<?php

declare(strict_types=1);

namespace App\Http\Controllers\Absence;

use App\Http\Controllers\Controller;
use App\Models\Calendar;

class CreateController extends Controller
{
    use CalendarCommon;

    /**
     * Shows empty form, for calendar event creation.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('admin.form', [
            'item' => new Calendar(),
        ]);
    }
}
