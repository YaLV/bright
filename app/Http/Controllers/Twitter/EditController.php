<?php

declare(strict_types=1);

namespace App\Http\Controllers\Twitter;

use App\Http\Controllers\Controller;
use App\Http\Requests\Twitter;

class EditController extends Controller
{
    use TwitterCommon;

    /**
     * Shows Form with filled Twitter Event.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(Twitter $item)
    {
        return view('admin.form', [
            'item' => $item,
        ]);
    }
}
