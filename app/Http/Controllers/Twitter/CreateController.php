<?php

declare(strict_types=1);

namespace App\Http\Controllers\Twitter;

use App\Http\Controllers\Controller;
use App\Models\Twitter;

class CreateController extends Controller
{
    use TwitterCommon;

    /**
     * Shows empty form, for Twitter event creation.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('admin.form', [
            'item' => new Twitter(),
        ]);
    }
}
