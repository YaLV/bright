<?php

declare(strict_types=1);

namespace App\Http\Controllers\Activity;

use App\Http\Controllers\Controller;
use App\Models\Activity;

class EditController extends Controller
{
    use ActivityCommon;

    /**
     * Shows Form with filled Calendar Event.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(Activity $item)
    {
        return view('admin.form', [
            'item' => $item,
        ]);
    }
}
