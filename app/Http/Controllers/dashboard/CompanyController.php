<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\CompanyRequest;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use App\Models\Company;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index() : View
    {
        $companies = Company::latest()->paginate();
        return view('dashboard.companies.index', compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create() : View
    {
        return view('dashboard.companies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CompanyRequest $request
     * @return RedirectResponse
     */
    public function store(CompanyRequest $request)
    {
        Company::create($request->validated());
        return to_route('companies.index')
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
        $Company_model = Company::findOrFail($id);
        return view('dashboard.companies.edit', compact('Company_model'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param CompanyRequest $request
     * @param int            $id
     * @return RedirectResponse
     */
    public function update(CompanyRequest $request, int $id) : RedirectResponse
    {
        $company = Company::findOrFail($id);
        $company->update($request->validated());

        return to_route('companies.index')
            ->with('successfully', __('Updated successfully'));
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return RedirectResponse
     */
    public function destroy(int $id)
    {
        Company::findOrFail($id)->delete();

        return to_route('companies.index')
            ->with('successfully', __('Deleted successfully'));
    }
}
