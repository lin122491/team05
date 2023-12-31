<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mes;
class MesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $mes = Mes::all();
        return view('mes.index')->with('mes',$mes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('mes.create');
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
        $region = $request->input('region');
        $url = $request->input('url');

        Mes::create([
            'region' => $region,
            'url' => $url,

        ]);

        return redirect('mes');
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

        $mes=Mes::findOrFail($id);
        $schools = $mes->schools;
        return view('mes.show',['mes'=>$mes,'schools'=>$schools]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $mes = Mes::findOrFail($id);
        return view('mes.edit', ['mes'=>$mes]);
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
        //
        $mes = Mes::findOrFail($id);

        $mes->name = $request->input('region');
        $mes->city = $request->input('url');
        $mes->save();

        return redirect('mes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $mes = Mes::findOrFail($id);
        $mes->delete();
        return redirect('mes');
    }
}
