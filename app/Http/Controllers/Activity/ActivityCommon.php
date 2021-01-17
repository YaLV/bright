<?php

declare(strict_types=1);

namespace App\Http\Controllers\Activity;

use App\Http\Requests\Activity as ActivityRequest;
use App\Models\Activity;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Route;

trait ActivityCommon
{
    /**
     * Saves Twitter Data.
     */
    public function save(ActivityRequest $activity): RedirectResponse
    {
        /** @var Route $route */
        $route = $activity->route();
        $itemId = $route->parameter('item');

        $validatedInput = $activity->validated();

        $item = Activity::find($itemId) ?? new Activity();
        $item->fill($validatedInput);
        $item->save();

        session()->flash('status', 'Item Saved');

        return redirect()->route('admin.activities');
    }
}
