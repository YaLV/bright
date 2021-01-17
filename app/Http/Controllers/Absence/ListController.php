<?php

declare(strict_types=1);

namespace App\Http\Controllers\Absence;

use App\Http\Controllers\Controller;
use App\Models\Calendar;
use Illuminate\Contracts\View\View;

class ListController extends Controller
{
    public function index(): View
    {
        return view('admin.table', ['items' => Calendar::paginate(20), 'model' => new Calendar()]);
    }
}
