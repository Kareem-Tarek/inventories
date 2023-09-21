<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Type;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $types = Type::all();
        return view('dashboard.pages.types.index', compact('types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.pages.types.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validate Type
        $request->validate([
            'title'       => 'required|unique:types,title|max:255',
        ]);

        //create a new object (row) for the Type
        $type              = new Type();
        $type->title       = $request->title;
        $type->updated_at  = null;
        $type->save();

        return redirect()->route('types.index')
            ->with('created_type_successfully', "تم إنشاء النوع ($type->title) بنجاح.");
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
        $type_model = Type::findOrFail($id);
        return view('dashboard.pages.types.edit', compact('Type_model'));
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
        //Validate Type
        $request->validate([
            'title'       => 'required|max:255',
        ]);

        //updating an existing object (row) from the Type
        $type_old          = Type::find($id);
        $type              = Type::find($id);
        if($type->title == $request->title){
            $type->title = $type->title;
        }
        else{
            $type->title = $request->title;
        }
        $type->save();

        return redirect()->route('types.edit', $type->id)
            ->with('updated_type_successfully', "تم تحديث النوع ($type_old->title) بنجاح.");
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $type = Type::findOrFail($id);
        $type->delete();

        return redirect()->route('types.index')
            ->with('deleted_type_successfully', "تم حذف النوع ($type->title) بنجاح.");
    }
}
