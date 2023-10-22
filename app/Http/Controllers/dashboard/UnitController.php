<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\UnitRequest;
use App\Models\Unit;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class UnitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */

    public function index() : View
    {
        $units = Unit::latest()->paginate();
        return view('dashboard.units.index', compact('units'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create() : View
    {
        return view('dashboard.units.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param UnitRequest $request
     * @return RedirectResponse
     */
    public function store(UnitRequest $request) : RedirectResponse
    {
        Unit::create($request->validated());
        return to_route('units.index')
            ->with('successfully', __('Created successfully'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Unit $unit
     * @return View
     */
    public function edit(Unit $unit) : View
    {
        $Unit_model = $unit;
        return view('dashboard.units.edit', compact('Unit_model'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UnitRequest $request
     * @param Unit $unit
     * @return RedirectResponse
     */
    public function update(UnitRequest $request, Unit $unit) : RedirectResponse
    {
        $unit->update($request->validated());
        return to_route('units.index')
            ->with('successfully', __('Updated successfully'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Unit $unit
     * @return RedirectResponse
     */
    public function destroy(Unit $unit) : RedirectResponse
    {
        $unit->delete();
        return to_route('units.index')
            ->with('successfully', __('Deleted successfully'));
    }
}
