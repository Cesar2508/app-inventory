<?php

namespace App\Http\Controllers;

use App\MaterialFamily;
use App\MaterialSubFamily;
use Illuminate\Http\Request;

class MaterialSubFamilyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // return 'Lista de materiales';
        $materialsSubFamilies = MaterialSubFamily::paginate();
        return view('materialssubfamilies.index',compact('materialsSubFamilies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $materialsFamilies = MaterialFamily::pluck('name','id');
        // return $materialsFamilies;
        return view('materialssubfamilies.create',compact('materialsFamilies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // return $request;

        $request->only('materialfamily','name');

        $materialSubFamily = MaterialSubFamily::create([
          'material_family_id' => $request->materialfamily,
          'name' => $request->name
        ]);

        return redirect()->route('materialssubfamilies.edit', $materialSubFamily->id)
            ->with('info','La sub familia de materiales se ha guardado con exito');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\MaterialSubFamily  $materialSubFamily
     * @return \Illuminate\Http\Response
     */
    public function show(MaterialSubFamily $materialSubFamily)
    {
        //
        return view('materialssubfamilies.show',compact('materialSubFamily'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MaterialSubFamily  $materialSubFamily
     * @return \Illuminate\Http\Response
     */
    public function edit(MaterialSubFamily $materialSubFamily)
    {
        //
        $materialsFamilies = MaterialFamily::pluck('name','id');

        return view('materialssubfamilies.edit',compact('materialSubFamily','materialsFamilies'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MaterialSubFamily  $materialSubFamily
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MaterialSubFamily $materialSubFamily)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MaterialSubFamily  $materialSubFamily
     * @return \Illuminate\Http\Response
     */
    public function destroy(MaterialSubFamily $materialSubFamily)
    {
        //
        $materialSubFamily ->delete();

        return back()->with('info','La familia se ha eliminado con exito');

    }
}
