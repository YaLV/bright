<?php

declare(strict_types=1);

namespace App\Http\Controllers\Activity;

use App\Http\Controllers\Controller;
use App\Models\Activity;
use Illuminate\Contracts\View\View;

class ListController extends Controller
{
    public function index(): View
    {
        return view('admin.table', ['items' => Activity::paginate(20), 'model' => new Activity()]);
    }
}
