<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\{RedirectResponse};
use App\Http\Requests\NamePriceRequest;
use App\Models\NamePrice;

class NamePriceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index() : View
    {
        $namesPrices = NamePrice::latest()->paginate();
        return view('dashboard.names-prices.index', compact('namesPrices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create() : View
    {
        return view('dashboard.names-prices.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param NamePriceRequest $request
     * @return RedirectResponse
     */
    public function store(NamePriceRequest $request) : RedirectResponse
    {
          NamePrice::create($request->validated());
          return to_route('names-prices.index')
              ->with('successfully', __('Created successfully'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return View
     */
    public function edit(int $id) : View
    {
        $NamePrice_model = NamePrice::findOrFail($id);
        return view('dashboard.names-prices.edit', compact('NamePrice_model'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param NamePriceRequest $request
     * @param int              $id
     * @return RedirectResponse
     */
    public function update(NamePriceRequest $request, int $id)
    {
        $namePrice = NamePrice::findOrFail($id);
        $namePrice->update($request->validated());
        return to_route('names-prices.index')->with('successfully', __('Updated successfully'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return RedirectResponse
     */
    public function destroy(int $id)
    {
        NamePrice::findOrFail($id)->delete();
        return redirect()->route('names-prices.index')->with('successfully', __('Deleted successfully'));
    }
}
