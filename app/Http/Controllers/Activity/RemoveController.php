<?php

declare(strict_types=1);

namespace App\Http\Controllers\Activity;

use App\Http\Controllers\Controller;
use App\Models\Activity;
use Illuminate\Http\RedirectResponse;

class RemoveController extends Controller
{
    public function index(Activity $item): RedirectResponse
    {
        try {
            $item->delete();
        } catch (\Exception $e) {
            abort(500);
        }

        session()->flash('status', 'Item Removed');

        return redirect()->route('admin.activities');
    }
}
