<?php

declare(strict_types=1);

namespace App\Http\Controllers\Absence;

use App\Http\Controllers\Controller;
use App\Models\Calendar;

class EditController extends Controller
{
    use CalendarCommon;

    /**
     * Shows Form with filled Calendar Event.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(Calendar $item)
    {
        return view('admin.form', [
            'item' => $item,
        ]);
    }
}
