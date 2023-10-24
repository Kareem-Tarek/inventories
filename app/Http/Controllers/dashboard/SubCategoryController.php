<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\SubCategoryRequest;
use App\Models\{Category, SubCategory};
use Illuminate\Contracts\View\View;
use Illuminate\Http\{RedirectResponse};

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index() : View
    {
        $subCategories = SubCategory::latest()->paginate();
        return view('dashboard.sub-categories.index', compact('subCategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create() : View
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
    public function edit(int $id) : View
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
    public function update(SubCategoryRequest $request, int $id) : RedirectResponse
    {
        $subCategory = SubCategory::findOrFail($id);
        $subCategory->update($request->validated());
        return to_route('subcategories.index')
            ->with('successfully', __('Updated successfully'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     * @return RedirectResponse
     */
    public function destroy($id) : RedirectResponse
    {
        SubCategory::find($id)->delete();
        return to_route('subcategories.index')
            ->with('successfully', __('Deleted successfully'));
    }
}
