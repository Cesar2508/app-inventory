<?php

namespace App\Http\Controllers;

use App\MaterialFamily;
use Illuminate\Http\Request;

class MaterialFamilyController extends Controller
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
        $materialsfamilies = MaterialFamily::paginate();
        return view('materialsfamilies.index',compact('materialsfamilies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('materialsfamilies.create');

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
        $materialFamily = MaterialFamily::create($request->all());

        return redirect()->route('materialsfamilies.edit', $materialFamily->id)
            ->with('info','La familia se ha guardado con exito');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\MaterialFamily  $materialFamily
     * @return \Illuminate\Http\Response
     */
    public function show(MaterialFamily $materialFamily)
    {
        //
        return view('materialsfamilies.show',compact('materialFamily'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MaterialFamily  $materialFamily
     * @return \Illuminate\Http\Response
     */
    public function edit(MaterialFamily $materialFamily)
    {
        //
        return view('materialsfamilies.edit',compact('materialFamily'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MaterialFamily  $materialFamily
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MaterialFamily $materialFamily)
    {
        //
        $materialFamily ->update($request->all());

        return redirect()->route('materialsfamilies.edit', $materialFamily->id)
            ->with('info','La familia se ha actualizado con exito');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MaterialFamily  $materialFamily
     * @return \Illuminate\Http\Response
     */
    public function destroy(MaterialFamily $materialFamily)
    {
        //
        $materialFamily ->delete();

        return back()->with('info','La familia se ha eliminado con exito');

    }
}
