<?php

namespace App\Http\Controllers;

use App\Http\Requests\GardenRequest;
use App\Models\Garden;
use Illuminate\Http\RedirectResponse;

class GardenController extends Controller
{
    public function update(GardenRequest $request, int $id): RedirectResponse
    {
        $garden = Garden::findOrFail($id);

        $garden->update($request->validated());
        $garden->features()->sync($request->validated('features'));

        return back();
    }
}
