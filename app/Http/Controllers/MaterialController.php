<?php

namespace App\Http\Controllers;
use App\MaterialFamily;
use App\MaterialSubFamily;
use App\Material;

use App\Sku;
use App\MaterialSerial;

use Illuminate\Http\Request;

class MaterialController extends Controller
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
        $materials = Material::paginate();
        return view('materials.index',compact('materials'));

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
        $materialsSubFamilies = MaterialSubFamily::pluck('name','id');

        // return $materialsFamilies;
        return view('materials.create',compact('materialsFamilies','materialsSubFamilies'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

         $material = Material::create([
          'material_sub_family_id' => $request->submaterialfamily,
          'name' => $request->name,
          'units' => $request->units
        ]);

        // return $material;

        $materialFamily = $material->subFamily->family;

        // return $materialFamily;

        $serial = 2;

          if ($materialFamily->id === 1) {
          // if (false) {
            // $skus en caso que el material sea planta o suela
            while ($serial <= 31) {
              $skus [] = [
                'material_id' => $material->id,
                'serial_id' => $serial
              ];
              $serial = $serial + 1;
            }
          } else {
            // $skus en caso que el material NO sea planta o suela
            $skus = [
              'material_id' => $material->id,
              'serial_id' => 1
            ];
          }

          // return $skus;

        foreach ($skus as $sku) {
          // code...
          // return $sku;
          Sku::create([
            'material_id' => $sku["material_id"],
            'serial_id' => $sku["serial_id"],
          ]);
        }

        return $skus;

        return redirect()->route('materialssubfamilies.edit', $materialSubFamily->id)
            ->with('info','La sub familia de materiales se ha guardado con exito');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Material  $material
     * @return \Illuminate\Http\Response
     */
    public function show(Material $material)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Material  $material
     * @return \Illuminate\Http\Response
     */
    public function edit(Material $material)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Material  $material
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Material $material)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Material  $material
     * @return \Illuminate\Http\Response
     */
    public function destroy(Material $material)
    {
        //
    }
}
