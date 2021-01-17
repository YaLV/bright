<?php

declare(strict_types=1);

namespace App\Http\Controllers\Twitter;

use App\Http\Requests\Twitter as TwitterRequest;
use App\Models\Twitter;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Route;

trait TwitterCommon
{
    /**
     * Saves Twitter Data.
     */
    public function save(TwitterRequest $calendar): RedirectResponse
    {
        /** @var Route $route */
        $route = $calendar->route();

        $itemId = $route->parameter('item');
        $validatedInput = $calendar->validated();

        $item = Twitter::find($itemId) ?? new Twitter();

        $item->fill($validatedInput);
        $item->save();

        session()->flash('status', 'Item Saved');

        return redirect()->route('admin.twitter');
    }
}
