<?php

declare(strict_types=1);

namespace App\Http\Controllers\Absence;

use App\Http\Requests\Calendar as CalendarRequest;
use App\Models\Calendar;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Route;

trait CalendarCommon
{
    /**
     * Saves Calendar Data.
     */
    public function save(CalendarRequest $calendar): RedirectResponse
    {
        /** @var Route $route */
        $route = $calendar->route();

        $itemId = $route->parameter('item');

        $validatedInput = $calendar->validated();

        $item = Calendar::find($itemId) ?? new Calendar();

        $item->fill($validatedInput);
        $item->save();

        session()->flash('status', 'Item Saved');

        return redirect()->route('admin.absence');
    }
}
