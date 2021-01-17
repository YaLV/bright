<?php

declare(strict_types=1);

namespace App\Http\Controllers\Absence;

use App\Http\Controllers\Controller;
use App\Models\Calendar;
use Illuminate\Http\RedirectResponse;

class RemoveController extends Controller
{
    public function index(Calendar $item): RedirectResponse
    {
        try {
            $item->delete();
        } catch (\Exception $e) {
            abort(500);
        }

        session()->flash('status', 'Item Removed');

        return redirect()->route('admin.absence');
    }
}
