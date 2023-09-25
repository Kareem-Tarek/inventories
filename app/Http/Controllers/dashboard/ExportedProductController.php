<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ExportedProduct;

class ExportedProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $exportedProducts = ExportedProduct::all();
        return view('dashboard.pages.exported-products.index', compact('exportedProducts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.pages.exported-products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validate Exported Product
        $request->validate([
            'title'       => 'required|max:255',
            'description' => 'nullable|max:1020',
            'amount'      => 'required|numeric|max:1020',
        ]);

        //create a new object (row) for the Exported Product
        ExportedProduct::create([
            "title"       => $request->title,
            "description" => $request->description,
            "amount"      => $request->amount,
            "updated_at"  => null,
        ]);

        return redirect()->route('exported-products.index')
            ->with('created_exportedProduct_successfully', "تم إنشاء منصرف المخزن ($request->title) بنجاح.");
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
        $ExportedProduct_model = ExportedProduct::findOrFail($id);
        return view('dashboard.pages.exported-products.edit', compact('ExportedProduct_model'));
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
        //Validate Exported Product
        $request->validate([
            'title'       => 'required|max:255',
            'description' => 'nullable|max:1020',
            'amount'      => 'required|numeric|max:1020',
        ]);

        //updating an existing object (row) from the Exported Product
        $exportedProduct_old          = ExportedProduct::find($id);
        $exportedProduct              = ExportedProduct::find($id);
        if($exportedProduct->title == $request->title){
            $exportedProduct->title = $exportedProduct->title;
        }
        else{
            $exportedProduct->title = $request->title;
        }
        $exportedProduct->description = $request->description;
        $exportedProduct->amount      = $request->amount;
        $exportedProduct->save();

        return redirect()->route('exported-products.edit', $exportedProduct->id)
            ->with('updated_exportedProduct_successfully', "تم تحديث منصرف المخزن ($exportedProduct_old->title) بنجاح.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $exportedProduct = ExportedProduct::findOrFail($id);
        $exportedProduct->delete();

        return redirect()->route('exported-products.index')
            ->with('deleted_exportedProduct_successfully', "تم حذف منصرف المخزن ($exportedProduct->title) بنجاح.");
    }
}
