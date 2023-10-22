<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\TypeRequest;
use App\Models\Type;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index()
    {
        $types = Type::latest()->paginate();
        return view('dashboard.types.index', compact('types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create()
    {
        return view('dashboard.types.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param TypeRequest $request
     * @return RedirectResponse
     */
    public function store(TypeRequest $request)
    {
        Type::create($request->validated());
        return to_route('types.index')
            ->with('successfully', __('Created successfully'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Type $type
     * @return View
     */
    public function edit(Type $type)
    {
        $Type_model = $type;
        return view('dashboard.types.edit', compact('Type_model'));
    }

    /**
     * @param TypeRequest $request
     * @param Type $type
     * @return RedirectResponse
     */
    public function update(TypeRequest $request, Type $type)
    {
        $type->update($request->validated());
        return to_route('types.index')
            ->with('successfully', __('Updated successfully'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Type $type
     * @return RedirectResponse
     */
    public function destroy(Type $type)
    {
        $type->delete();
        return to_route('types.index')
            ->with('successfully', __('Deleted successfully'));
    }
}
