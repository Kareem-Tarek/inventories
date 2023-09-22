<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('dashboard.pages.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.pages.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validate Category
        $request->validate([
            'title'       => 'required|unique:categories,title|max:255',
            'description' => 'nullable|max:1020',
        ]);

        //create a new object (row) for the Category
        $category              = new Category();
        $category->title       = $request->title;
        $category->description = $request->description;
        $category->updated_at  = null;
        $category->save();

        return redirect()->route('categories.index')
            ->with('created_category_successfully', "تم إنشاء الفئة ($category->title) بنجاح.");
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
        $Category_model = Category::findOrFail($id);
        return view('dashboard.pages.categories.edit', compact('Category_model'));
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
        //Validate Category
        $request->validate([
            'title'       => 'required|max:255',
            'description' => 'nullable|max:1020',
        ]);

        //updating an existing object (row) from the Category
        $category_old          = Category::find($id);
        $category              = Category::find($id);
        if($category->title == $request->title){
            $category->title = $category->title;
        }
        else{
            $category->title = $request->title;
        }
        $category->description = $request->description;
        $category->save();

        return redirect()->route('categories.edit', $category->id)
            ->with('updated_category_successfully', "تم تحديث الفئة ($category_old->title) بنجاح.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        return redirect()->route('categories.index')
            ->with('deleted_category_successfully', "تم حذف الفئة ($category->title) بنجاح.");
    }
}
