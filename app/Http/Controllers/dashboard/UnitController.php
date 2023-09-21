<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Unit;

class UnitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $units = Unit::all();
        return view('dashboard.pages.units.index', compact('units'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.pages.units.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validate Unit
        $request->validate([
            'title'       => 'required|unique:units,title|max:255',
        ]);

        //create a new object (row) for the Unit
        $unit              = new Unit();
        $unit->title       = $request->title;
        $unit->updated_at  = null;
        $unit->save();

        return redirect()->route('units.index')
            ->with('created_unit_successfully', "تم إنشاء الوحدة ($unit->title) بنجاح.");
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
        $Unit_model = Unit::findOrFail($id);
        return view('dashboard.pages.units.edit', compact('Unit_model'));
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
        //Validate Unit
        $request->validate([
            'title'       => 'required|max:255',
        ]);

        //updating an existing object (row) from the Unit
        $unit_old          = Unit::find($id);
        $unit              = Unit::find($id);
        if($unit->title == $request->title){
            $unit->title = $unit->title;
        }
        else{
            $unit->title = $request->title;
        }
        $unit->save();

        return redirect()->route('units.edit', $unit->id)
            ->with('updated_unit_successfully', "تم تحديث الوحدة ($unit_old->title) بنجاح.");
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $unit = Unit::findOrFail($id);
        $unit->delete();

        return redirect()->route('units.index')
            ->with('deleted_unit_successfully', "تم حذف الوحدة ($unit->title) بنجاح.");
    }
}
