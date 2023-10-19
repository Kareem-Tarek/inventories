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
    public function index()
    {
        $namesPrices = NamePrice::latest()->paginate();
        return view('dashboard.pages.names-prices.index', compact('namesPrices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create()
    {
        return view('dashboard.pages.names-prices.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param NamePriceRequest $request
     * @return RedirectResponse
     */
    public function store(NamePriceRequest $request) : RedirectResponse
    {
        try {
            NamePrice::create($request->validated());
            //DB::table('names_prices')->insert([$request->validate()]);
            return redirect()->route('names-prices.index')->with('successfully', __('Created successfully'));
        } catch (\Exception $exception){
            return redirect()->route('names-prices.index')->with('failed', __('Something went wrong'));
        }

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param NamePrice $namePrice
     * @return View
     */
    public function edit(NamePrice $namePrice)
    {
        $NamePrice_model = $namePrice;
        return view('dashboard.pages.names-prices.edit', compact('NamePrice_model'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param NamePriceRequest $request
     * @param NamePrice        $namePrice
     * @return RedirectResponse
     */
    public function update(NamePriceRequest $request, NamePrice $namePrice)
    {
        try {
            $namePrice->update($request->validated());
            return to_route('names-prices.index')->with('successfully', __('Updated successfully'));
        } catch (\Exception $exception) {
            return to_route('names-prices.index')->with('failed', __('Something went wrong'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param NamePrice $namePrice
     * @return RedirectResponse
     */
    public function destroy(NamePrice $namePrice)
    {
        try {
            $namePrice->delete();
            return redirect()->route('names-prices.index')->with('successfully', __('Deleted successfully'));
        } catch (\Exception $exception) {
            return to_route('names-prices.index')->with('failed', __('Something went wrong'));
        }
    }

    // public function destroy($id)
    // {
    //     try {
    //         $namePrice = NamePrice::findOrFail($id);
    //         $namePrice->delete();
    //         return redirect()->route('names-prices.index')->with('successfully', __('Deleted successfully'));
    //     } catch (\Exception $exception) {
    //         return to_route('names-prices.index')->with('failed', __('Something went wrong'));
    //     }
    // }
}
