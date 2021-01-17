<?php

declare(strict_types=1);

namespace App\Http\Controllers\WorkData;

use App\Http\Controllers\Controller;
use App\Models\WorkData;
use Illuminate\Contracts\View\View;

class ListController extends Controller
{
    public function index(): View
    {
        return view('admin.table', ['items' => WorkData::paginate(20), 'model' => new WorkData()]);
    }
}
