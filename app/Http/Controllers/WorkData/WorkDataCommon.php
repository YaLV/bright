<?php

declare(strict_types=1);

namespace App\Http\Controllers\WorkData;

use App\Http\Requests\WorkData as WorkDataRequest;
use App\Models\WorkData;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Route;

trait WorkDataCommon
{
    /**
     * Saves WorkData Data.
     */
    public function save(WorkDataRequest $workData): RedirectResponse
    {
        /** @var Route $route */
        $route = $workData->route();

        $itemId = $route->parameter('item');
        $validatedInput = $workData->validated();

        $item = WorkData::find($itemId) ?? new WorkData();

        $item->fill($validatedInput);
        $item->save();

        session()->flash('status', 'Item Saved');

        return redirect()->route('admin.workdata');
    }
}
