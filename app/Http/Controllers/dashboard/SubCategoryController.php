<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\{RedirectResponse};
use App\Http\Requests\SubSubCategoryRequest;
use App\Models\SubCategory;
// use App\Models\Category; //

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index()
    {
        $subCategories = SubCategory::latest()->paginate();
        return view('dashboard.pages.sub-categories.index', compact('subCategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create()
    {
        return view('dashboard.pages.sub-categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param SubCategoryRequest $request
     * @return RedirectResponse
     */
    public function store(SubCategoryRequest $request) : RedirectResponse
    {
        try {
            SubCategory::create($request->validated());
            // DB::table('categories')->insert([$request->validate()]);
            return redirect()->route('subcategories.index')->with('successfully', __('Created successfully'));
        } catch (\Exception $exception){
            return redirect()->route('subcategories.index')->with('failed', 'Something went wrong');
        }
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param Category $subCategory
     * @return View
     */
    public function edit(SubCategory $subCategory)
    {
        $SubCategory_model = $subCategory;
        return view('dashboard.pages.sub-categories.edit', compact('SubCategory_model'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param SubCategoryRequest $request
     * @param Category        $subCategory
     * @return RedirectResponse
     */
    public function update(SubCategoryRequest $request, SubCategory $subCategory)
    {
        try {
            $subCategory->update($request->validated());
            return to_route('subcategories.index')->with('successfully', __('Updated successfully'));
        } catch (\Exception $exception) {
            return to_route('subcategories.index')->with('failed', __('Something went wrong'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param SubCategory $subCategory
     * @return RedirectResponse
     */
    public function destroy(SubCategory $subCategory)
    {
        try {
            $subCategory->delete();
            return redirect()->route('subcategories.index')->with('successfully', __('Deleted successfully'));
        } catch (\Exception $exception) {
            return to_route('subcategories.index')->with('failed', __('Something went wrong'));
        }
    }
}
