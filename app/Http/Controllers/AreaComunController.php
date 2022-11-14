<?php

namespace App\Http\Controllers;

use App\Models\AreaComun;
use Illuminate\Http\Request;

/**
 * Class AreaComunController
 * @package App\Http\Controllers
 */
class AreaComunController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $areaComuns = AreaComun::paginate();

        return view('area-comun.index', compact('areaComuns'))
            ->with('i', (request()->input('page', 1) - 1) * $areaComuns->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $areaComun = new AreaComun();
        return view('area-comun.create', compact('areaComun'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(AreaComun::$rules);

        $areaComun = AreaComun::create($request->all());

        return redirect()->route('area-comuns.index')
            ->with('success', 'AreaComun created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $areaComun = AreaComun::find($id);

        return view('area-comun.show', compact('areaComun'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $areaComun = AreaComun::find($id);

        return view('area-comun.edit', compact('areaComun'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  AreaComun $areaComun
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AreaComun $areaComun)
    {
        request()->validate(AreaComun::$rules);

        $areaComun->update($request->all());

        return redirect()->route('area-comuns.index')
            ->with('success', 'AreaComun updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $areaComun = AreaComun::find($id)->delete();

        return redirect()->route('area-comuns.index')
            ->with('success', 'AreaComun deleted successfully');
    }
}
