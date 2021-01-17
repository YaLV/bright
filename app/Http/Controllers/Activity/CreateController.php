<?php

declare(strict_types=1);

namespace App\Http\Controllers\Activity;

use App\Http\Controllers\Controller;
use App\Models\Activity;

class CreateController extends Controller
{
    use ActivityCommon;

    /**
     * Shows empty form, for Twitter event creation.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('admin.form', [
            'item' => new Activity(),
        ]);
    }
}
