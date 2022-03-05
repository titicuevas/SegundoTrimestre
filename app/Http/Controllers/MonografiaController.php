<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoremonografiaRequest;
use App\Http\Requests\UpdatemonografiaRequest;
use App\Models\monografia;

class MonografiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $monografia = Monografia::all();

        return view ('monografia.index',['monografias'=>$monografia,]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('monografia.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoremonografiaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoremonografiaRequest $request)
    {
        $request->validated();
        $monografia= new Monografia();
        $monografia->titulo=$request->titulo;
        $monografia->anyo=$request->anyo;
        $monografia->save();
        return redirect()->route('monografias.index')->with('succes','monografia creada');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\monografia  $monografia
     * @return \Illuminate\Http\Response
     */
    public function show(monografia $monografia)
    {
        return view('monografia.show',[
            'monografia'=>$monografia
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\monografia  $monografia
     * @return \Illuminate\Http\Response
     */
    public function edit(monografia $monografia)
    {
        return view('monografia.edit',
        [
            'monografia'=>$monografia,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatemonografiaRequest  $request
     * @param  \App\Models\monografia  $monografia
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatemonografiaRequest $request, monografia $monografia)
    {
        $request->validated();
        $monografia->titulo=$request->titulo;
        $monografia->anyo=$request->anyo;
        $monografia->save();
        return redirect()->route('monografias.index')->with('succes','Actualizado los datos');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\monografia  $monografia
     * @return \Illuminate\Http\Response
     */
    public function destroy(monografia $monografia)
    {
        $monografia->delete();
        return redirect()->route('monografias.index')->with('success','Borrado correctamente');
    }
}
