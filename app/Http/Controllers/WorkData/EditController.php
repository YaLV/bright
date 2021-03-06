<?php

declare(strict_types=1);

namespace App\Http\Controllers\WorkData;

use App\Http\Controllers\Controller;
use App\Models\WorkData;

class EditController extends Controller
{
    use WorkDataCommon;

    /**
     * Shows empty form, for WorkData event creation.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(WorkData $item)
    {
        return view('admin.form', [
            'item' => $item,
        ]);
    }
}
