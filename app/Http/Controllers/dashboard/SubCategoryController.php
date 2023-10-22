<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\SubCategoryRequest;
use App\Models\Category;
use Illuminate\Contracts\View\View;
use Illuminate\Http\{RedirectResponse};
use App\Models\SubCategory;

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
        return view('dashboard.sub-categories.index', compact('subCategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create()
    {
        $categories = Category::all();
        return view('dashboard.sub-categories.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param SubCategoryRequest $request
     * @return RedirectResponse
     */
    public function store(SubCategoryRequest $request) : RedirectResponse
    {
        SubCategory::create($request->validated());
        return to_route('subcategories.index')
            ->with('successfully', __('Created successfully'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return View
     */
    public function edit(int $id)
    {
        $subCategory_model = SubCategory::findOrFail($id);
        $categories = Category::all();
        return view('dashboard.sub-categories.edit', compact('subCategory_model', 'categories'));
    }

    /**
     * @param SubCategoryRequest $request
     * @param int                $id
     * @return RedirectResponse
     */
    public function update(SubCategoryRequest $request, int $id)
    {
        $subCategory = SubCategory::findOrFail($id);
        $subCategory->update($request->validated());
        return to_route('subcategories.index')
            ->with('successfully', __('Updated successfully'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param SubCategory $subCategory
     * @return RedirectResponse
     */
    public function destroy(SubCategory $subCategory)
    {
        $subCategory->delete();
        return to_route('subcategories.index')
            ->with('successfully', __('Deleted successfully'));
    }
}
