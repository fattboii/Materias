<?php

namespace App\Http\Controllers;

use App\Models\Registros;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class RegistrosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['materias'] = Registros::paginate(5);
        return view('materias.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('materias.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $matData = request()->except('_token');
        Registros::insert($matData);
        return Redirect('materias');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Registros  $registros
     * @return \Illuminate\Http\Response
     */
    public function show(Registros $registros)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Registros  $registros
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $materia = Registros::findOrFail($id);
        return view('materias.edit', compact('materia'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Registros  $registros
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $matData = request()->except(['_token','_method']);
        Registros::where('id','=',$id)->update($matData);
        $mareria = Registros::findOrFail($id);
        return view('materias.edit', compact('materia'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Registros  $registros
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Registros::destroy($id);
        return redirect('/materias');
    }
}
