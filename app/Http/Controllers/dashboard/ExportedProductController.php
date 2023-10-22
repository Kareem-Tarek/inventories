<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\ExportedProductRequest;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use App\Models\ExportedProduct;

class ExportedProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index() : View
    {
        $exportedProducts = ExportedProduct::latest()->paginate();
        return view('dashboard.exported-products.index', compact('exportedProducts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create() : View
    {
        return view('dashboard.exported-products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param ExportedProductRequest $request
     * @return RedirectResponse
     */
    public function store(ExportedProductRequest $request) : RedirectResponse
    {
        ExportedProduct::create($request->validated());
        return to_route('exported-products.index')
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
        $ExportedProduct_model = ExportedProduct::findOrFail($id);
        return view('dashboard.exported-products.edit', compact('ExportedProduct_model'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param ExportedProductRequest $request
     * @param int                    $id
     * @return RedirectResponse
     */
    public function update(ExportedProductRequest $request, int $id)
    {
        $exportedProduct = ExportedProduct::find($id);
        $exportedProduct->update($request->validated());

        return redirect()->route('exported-products.edit', $exportedProduct->id)
            ->with('successfully', __('Updated successfully'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return RedirectResponse
     */
    public function destroy(int $id)
    {
        ExportedProduct::findOrFail($id)->delete();

        return to_route('exported-products.index')
            ->with('successfully', __('Deleted successfully'));
    }
}
