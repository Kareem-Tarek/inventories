<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\{RedirectResponse};
use App\Http\Requests\CategoryRequest;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index() : View
    {
        $categories = Category::latest()->paginate();
        return view('dashboard.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create()
    {
        return view('dashboard.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CategoryRequest $request
     * @return RedirectResponse
     */
    public function store(CategoryRequest $request) : RedirectResponse
    {
        try {
            Category::create($request->validated());
            return redirect()->route('categories.index')->with('successfully', __('Created successfully'));
        } catch (\Exception $exception){
            return redirect()->route('categories.index')->with('failed', 'Something went wrong');
        }

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param Category $category
     * @return View
     */
    public function edit(Category $category)
    {
        $Category_model = $category;
        return view('dashboard.categories.edit', compact('Category_model'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param CategoryRequest $request
     * @param Category        $category
     * @return RedirectResponse
     */
    public function update(CategoryRequest $request, Category $category)
    {
        try {
            $category->update($request->validated());
            return to_route('categories.index')->with('successfully', __('Updated successfully'));
        } catch (\Exception $exception) {
            return to_route('categories.index')->with('failed', __('Something went wrong'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Category $category
     * @return RedirectResponse
     */
    public function destroy(Category $category)
    {
        try {
            $category->delete();
            return redirect()->route('categories.index')->with('successfully', __('Deleted successfully'));
        } catch (\Exception $exception) {
            return to_route('categories.index')->with('failed', __('Something went wrong'));
        }
    }
}
