<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Price;
use App\Models\Product;

class PriceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prices = Price::all();
        return view('dashboard.pages.prices.index', compact('prices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = Product::all();
        return view('dashboard.pages.prices.create', compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validate Price
        $request->validate([
            'title'      => 'required|unique:prices,title|max:255',
            'value'      => 'required|numeric',
            'discount'   => 'required|numeric',
            'product_id' => 'required|integer',
        ]);

        //create a new object (row) for the Price
        $price             = new Price();
        $price->title      = $request->title;
        $price->value      = $request->value;
        $price->discount   = $request->discount;
        $price->product_id = $request->product_id;
        $price->updated_at = null;
        $price->save();

        return redirect()->route('prices.index')
            ->with('created_price_successfully', "تم إنشاء السعر ($price->title) بنجاح.");
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
        $Price_model = Price::findOrFail($id);
        $products    = Product::all();
        return view('dashboard.pages.prices.edit', compact('Price_model', 'products'));
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
        //Validate Price
        $request->validate([
            'title'      => 'required|max:255',
            'value'      => 'required|numeric',
            'discount'   => 'required|numeric',
            'product_id' => 'required|integer',
        ]);

        //updating an existing object (row) from the Price
        $price_old          = Price::find($id);
        $price              = Price::find($id);
        if($price->title == $request->title){
            $price->title = $price->title;
        }
        else{
            $price->title = $request->title;
        }
        $price->value      = $request->value;
        $price->discount   = $request->discount;
        $price->product_id = $request->product_id;
        $price->save();

        return redirect()->route('prices.edit', $price->id)
            ->with('updated_price_successfully', "تم تحديث السعر ($price_old->title) بنجاح.");
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $price = Price::findOrFail($id);
        $price->delete();

        return redirect()->route('prices.index')
            ->with('deleted_price_successfully', "تم حذف السعر ($price->title) بنجاح.");
    }
}
