<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\PriceRequest;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use App\Models\{NamePrice, Price, Product};

class PriceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index() : View
    {
        $prices = Price::latest()->paginate();
        return view('dashboard.prices.index', compact('prices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create() : View
    {
        $products    = Product::all();
        $name_prices = NamePrice::all();
        return view('dashboard.prices.create', compact('products', 'name_prices'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param PriceRequest $request
     * @return RedirectResponse
     */
    public function store(PriceRequest $request) : RedirectResponse
    {
        Price::create($request->validated());
        return to_route('prices.index')
            ->with('successfully', __('Created successfully'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return View
     */
    public function edit(int $id) : View
    {
        $Price_model = Price::findOrFail($id);
        $products    = Product::all();
        $name_prices = NamePrice::all();
        return view('dashboard.prices.edit', compact('Price_model', 'products','name_prices'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param PriceRequest $request
     * @param int          $id
     * @return RedirectResponse
     */
    public function update(PriceRequest $request, int $id) : RedirectResponse
    {
        $price = Price::findOrFail($id);
        $price->update($request->validated());
        return to_route('prices.index')
            ->with('successfully', __('Updated successfully'));
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return RedirectResponse
     */
    public function destroy(int $id) : RedirectResponse
    {
        Price::findOrFail($id)->delete();
        return to_route('prices.index')
            ->with('successfully', __('Deleted successfully'));
    }
}
