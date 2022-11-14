<?php

namespace App\Http\Controllers;

use App\Models\administrativo;
use Illuminate\Http\Request;

class AdministrativoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['administrativos'] = administrativo::paginate(5);
        return view('Administrativo.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Administrativo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $campos=[
            'CI'=>'required|string|max:9',
            'Nombres'=>'required|string|max:25',
            'ApellidoPaterno'=>'required|string|max:25',
            'ApellidoMaterno'=>'required|string|max:25',
            'Sexo'=>'required|string|max:15',
            'Telefono'=>'required|string|max:9',
            'Email'=>'required|email',
            'Direccion'=>'required|string|max:90',
        ];
        $mensaje=[
            'required'=>'El :attribute es requerido',
            'Direccion.required'=>'La direccion es requerida'
        ];

        $this->validate($request, $campos, $mensaje);
        //$datosAdministrativos = request()->all();
        $datosAdministrativos = request()->except('_token');
        administrativo::insert($datosAdministrativos);
        return redirect('administrativo')->with('mensaje','Administrativo registrado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\administrativo  $administrativo
     * @return \Illuminate\Http\Response
     */
    public function show(administrativo $administrativo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\administrativo  $administrativo
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $administrativo = administrativo::findOrFail($id);
        return view('Administrativo.edit', compact('administrativo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\administrativo  $administrativo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $campos=[
            'CI'=>'required|string|max:9',
            'Nombres'=>'required|string|max:25',
            'ApellidoPaterno'=>'required|string|max:25',
            'ApellidoMaterno'=>'required|string|max:25',
            'Sexo'=>'required|string|max:15',
            'Telefono'=>'required|string|max:9',
            'Email'=>'required|email',
            'Direccion'=>'required|string|max:90',
        ];
        $mensaje=[
            'required'=>'El :attribute es requerido',
            'Direccion.required'=>'La direccion es requerida'
        ];

        $this->validate($request, $campos, $mensaje);
        $datosAdministrativos = request()->except(['_token','_method']);
        administrativo::where('id', '=', $id)->update($datosAdministrativos);
        $administrativo = administrativo::findOrFail($id);
        //return view('administrativo.edit', compact('administrativo'));
        return redirect('administrativo')->with('mensaje','Administrativo modificado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\administrativo  $administrativo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        administrativo::destroy($id);
        return redirect('administrativo')->with('mensaje','Administrativo eliminado con exito');
    }
}
