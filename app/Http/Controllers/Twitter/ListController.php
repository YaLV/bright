<?php

declare(strict_types=1);

namespace App\Http\Controllers\Twitter;

use App\Http\Controllers\Controller;
use App\Models\Twitter;
use Illuminate\Contracts\View\View;

class ListController extends Controller
{
    public function index(): View
    {
        return view('admin.table', ['items' => Twitter::paginate(20), 'model' => new Twitter()]);
    }
}
