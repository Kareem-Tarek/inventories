<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Company;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = Company::all();
        return view('dashboard.pages.companies.index', compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.pages.companies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validate Company
        $request->validate([
            'title'       => 'required|unique:companies,title|max:255',
            'description' => 'nullable|max:1020',
        ]);

        //create a new object (row) for the Company
        $company              = new Company();
        $company->title       = $request->title;
        $company->description = $request->description;
        $company->updated_at  = null;
        $company->save();

        return redirect()->route('companies.index')
            ->with('created_company_successfully', "تم إنشاء الشركة ($company->title) بنجاح.");
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
        $company_model = Company::findOrFail($id);
        return view('dashboard.pages.companies.edit', compact('Company_model'));
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
        //Validate Company
        $request->validate([
            'title'       => 'required|max:255',
            'description' => 'nullable|max:1020',
        ]);

        //updating an existing object (row) from the Company
        $company_old          = Company::find($id);
        $company              = Company::find($id);
        if($company->title == $request->title){
            $company->title = $company->title;
        }
        else{
            $company->title = $request->title;
        }
        $company->description = $request->description;
        $company->save();

        return redirect()->route('companies.edit', $company->id)
            ->with('updated_company_successfully', "تم تحديث الشركة ($company_old->title) بنجاح.");
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $company = Company::findOrFail($id);
        $company->delete();

        return redirect()->route('companies.index')
            ->with('deleted_company_successfully', "تم حذف الشركة ($company->title) بنجاح.");
    }
}
