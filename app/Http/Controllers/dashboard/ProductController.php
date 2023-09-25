<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Unit;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Type;
use App\Models\Company;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('dashboard.pages.products.index', compact('products'));
    }

    public function productsSearchResult(Request $request)
    {
        $search_text_input     = $request->search_query;
        $products_result       = Product::where('title','LIKE',"%{$search_text_input}%")->get();
        $products_result_count = $products_result->count();

        return view('dashboard.pages.products.search-result.search-result',
        compact('search_text_input', 'products_result', 'products_result_count'))
        ->with('i' , ($request->input('page', 1) - 1) * 5);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $units         = Unit::all();
        $categories    = Category::all();
        $subCategories = SubCategory::all();
        $types         = Type::all();
        $companies     = Company::all();
        return view('dashboard.pages.products.create',
        compact('units', 'categories', 'subCategories', 'types', 'companies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validate Product
        $request->validate([
            'title'           => 'required|max:255',
            'description'     => 'nullable|max:1020',
            'price'           => 'required|numeric',
            'quantity'        => 'required|integer',
            'unit_id'         => 'nullable|integer',
            'category_id'     => 'nullable|integer',
            'sub_category_id' => 'nullable|integer',
            'type_id'         => 'nullable|integer',
            'company_id'      => 'nullable|integer',
            'warning'         => 'required|integer',
        ]);

        //create a new object (row) for the Product
        $product                  = new Product();
        $product->title           = $request->title;
        $product->description     = $request->description;
        $product->price           = $request->price;
        $product->quantity        = $request->quantity;
        $product->unit_id         = $request->unit_id;
        $product->category_id     = $request->category_id;
        $product->sub_category_id = $request->sub_category_id;
        $product->type_id         = $request->type_id;
        $product->company_id      = $request->company_id;
        $product->warning         = $request->warning;
        $product->updated_at      = null;
        $product->save();

        return redirect()->back()
            ->with('created_product_successfully', "تم إنشاء المنتج ($product->title) بنجاح.");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Product_model = Product::findOrFail($id);
        $units         = Unit::all();
        $categories    = Category::all();
        $subCategories = SubCategory::all();
        $types         = Type::all();
        $companies     = Company::all();
        return view('dashboard.pages.products.edit',
        compact('Product_model', 'units', 'categories', 'subCategories', 'types', 'companies'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Validate Product
        $request->validate([
            'title'           => 'required|max:255',
            'description'     => 'nullable|max:1020',
            'price'           => 'required|numeric',
            'quantity'        => 'required|integer',
            'unit_id'         => 'nullable|integer',
            'category_id'     => 'nullable|integer',
            'sub_category_id' => 'nullable|integer',
            'type_id'         => 'nullable|integer',
            'company_id'      => 'nullable|integer',
            'warning'         => 'required|integer',
        ]);

        //updating an existing object (row) from the Product
        $product_old              = Product::find($id);
        $product                  = Product::find($id);
        $product->title           = $request->title;
        $product->description     = $request->description;
        $product->price           = $request->price;
        $product->quantity        = $request->quantity;
        $product->unit_id         = $request->unit_id;
        $product->category_id     = $request->category_id;
        $product->sub_category_id = $request->sub_category_id;
        $product->type_id         = $request->type_id;
        $product->company_id      = $request->company_id;
        $product->warning         = $request->warning;
        $product->save();

        return redirect()->route('products.edit', $product->id)
            ->with('updated_product_successfully', "تم تحديث المنتج ($product_old->title) بنجاح.");
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->back()
            ->with('deleted_product_successfully', "تم حذف المنتج ($product->title) بنجاح.");
    }
}
