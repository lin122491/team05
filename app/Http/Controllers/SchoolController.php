<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\School;
use App\Models\Mes;
class SchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $school = School::all();
        return view('school.index')->with('school', $school);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $mes = Mes::orderBy('mes.id', 'asc')->pluck('mes.region', 'mes.id');
        return view('school.create', ['mes' =>$mes, 'mesSelected' => null]);
    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $school = $request->input('school');
        $mid = $request->input('mid');
        $academic_system = $request->input('academic_system');
        $mid = $request->input('mid');
        $public_and_private = $request->input('public_and_private');
        $address = $request->input('address');
        $phone = $request->input('phone');

        $School = School::create([
            'school'=>$school,
            'mid'=>$mid,
            'academic_system'=>$position,
            'mid'=>$height,
            'public'=>$weight,
            'address'=>$year,
            'phone'=>$nationality]);
        return redirect('schools');
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
        $school=School::findOrFail($id);
        return view('school.show')->with('school',$school);

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
        return School::findOrFail($id)->toArray();
    
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
        $school = School::findOrFail($id);

        $school->name = $request->input('school');
        $school->city = $request->input('mid');
        $school->home = $request->input('academic_system');
        $school->zone = $request->input('mid');
        $school->zone = $request->input('public_and_private');
        $school->zone = $request->input('address');
        $school->zone = $request->input('phone');
        $school->save();

        return redirect('school');
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
        $school = School::findOrFail($id);
        $school->delete();
        return redirect('school');
    }
}
