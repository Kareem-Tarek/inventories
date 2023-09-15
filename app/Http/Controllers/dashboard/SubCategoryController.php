<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SubCategory;
use App\Models\Category;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subCategories = SubCategory::all();
        return view('dashboard.sub-categories.index', compact('subCategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('dashboard.sub-categories.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validate SubCategory
        $request->validate([
            'title'       => 'required|max:255',
            'description' => 'nullable|max:1020',
            'category_id' => 'required|integer',
        ]);

        //create a new object (row) for the SubCategory
        $subCategory              = new SubCategory();
        $subCategory->title       = $request->title;
        $subCategory->description = $request->description;
        $subCategory->category_id = $request->category_id;
        $subCategory->updated_at  = null;
        $subCategory->save();

        return redirect()->route('subcategories.index')
            ->with('created_subcategory_successfully', "تم إنشاء الفئة الفرعية ($subCategory->title) بنجاح.");
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
        $subCategory_model = SubCategory::findOrFail($id);
        $categories        = Category::all();
        return view('dashboard.sub-categories.edit', compact('subCategory_model', 'categories'));
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
        //Validate SubCategory
        $request->validate([
            'title'       => 'required|max:255',
            'description' => 'nullable|max:1020',
            'category_id' => 'required|integer',
        ]);

        //updating an existing object (row) from the SubCategory
        $subCategory_old          = SubCategory::find($id);
        $subCategory              = SubCategory::find($id);
        $subCategory->title       = $request->title;
        $subCategory->description = $request->description;
        $subCategory->category_id = $request->category_id;
        $subCategory->save();

        return redirect()->route('subcategories.edit', $subCategory->id)
            ->with('updated_subcategory_successfully', "تم تحديث الفئة الفرعية ($subCategory_old->title) بنجاح.");
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subCategory = SubCategory::findOrFail($id);
        $subCategory->delete();

        return redirect()->route('subcategories.index')
            ->with('deleted_subcategory_successfully', "تم حذف الفئة الفرعية ($subCategory->title) بنجاح.");
    }
}
