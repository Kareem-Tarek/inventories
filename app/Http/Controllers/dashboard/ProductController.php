<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\{Factory, View};
use Illuminate\Http\{RedirectResponse, Request};
use App\Models\{Category, Company, Product, SubCategory, Type, Unit};

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index()
    {
        $products = Product::with('prices')->latest()->paginate();
        return view('dashboard.products.index', compact('products'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function productsSearchResult(Request $request)
    {
        $search_text_input     = $request->search_query;
        $products_result       = Product::where('title','LIKE',"%$search_text_input%")->get();
        $products_result_count = $products_result->count();

        return view('dashboard.products.search-result.search-result', compact('search_text_input', 'products_result', 'products_result_count'))
            ->with('i' , ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create()
    {
        $units         = Unit::all();
        $categories    = Category::all();
        $subCategories = SubCategory::all();
        $types         = Type::all();
        $companies     = Company::all();
        return view('dashboard.products.create',
                    compact('units', 'categories', 'subCategories', 'types', 'companies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param ProductRequest $request
     * @return RedirectResponse
     */
    public function store(ProductRequest $request)
    {
        $product = Product::create($request->validated());
        foreach ($request->price as $item) {
            $product->prices()->create([
                'price' => $item,
                'name_price_id'=>  1,
            ]);
        }
        return to_route('products.index')
            ->with('successfully', __('Created successfully'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Application|Factory|View
     */
    public function edit(int $id)
    {
        $Product_model = Product::findOrFail($id);
        $units         = Unit::all();
        $categories    = Category::all();
        $subCategories = SubCategory::all();
        $types         = Type::all();
        $companies     = Company::all();
        return view('dashboard.products.edit',
                    compact('Product_model', 'units', 'categories', 'subCategories', 'types', 'companies'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param ProductRequest $request
     * @param int            $id
     * @return RedirectResponse
     */
    public function update(ProductRequest $request, int $id)
    {
        $product = Product::find($id);
        $product->update($request->validated());
        return to_route('products.index')
            ->with('successfully', __('Updated successfully'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return RedirectResponse
     */
    public function destroy(int $id)
    {
        Product::findOrFail($id)->delete();
        return to_route('products.index')
            ->with('successfully', __('Deleted successfully'));
    }
}
