<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Violinist;

class ViolinistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Violinist::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'slug' => 'required',
            'violinist_name' => 'required',
            'violinist_nationality' => 'required',
            'violinist_born' => 'required'
        ]);

        return Violinist::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Violinist::find($id);
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
        $violinists = Violinist::find($id);
        $violinists -> update($request->all());
        return $violinists;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Violinist::destroy($id);
    }

    /**
     * Search the specified resource from storage.
     *
     * @param  str  $violinist_name
     * @return \Illuminate\Http\Response
     */
    public function search($violinist_name)
    {
        return Violinist::where('violinist_name', 'like', '%'.$violinist_name.'$') -> get();
    }
}
