<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Event;
use App\Models\Turnover;
use Illuminate\Http\Request;

class TurnoverController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('turnovers',[
            'turnovers' => Turnover::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('turnover_create',[
            'countries' => Country::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated=$request->validate([
            'country1_id' => 'integer',
            'country2_id' => 'integer',
            'year' => 'required|integer|between:1800,2099',
            'export_from1_to2' => 'required|integer',
            'export_from2_to1' => 'required|integer'
        ]);
        $turnover=new Turnover($validated);
        $turnover->save();
        return redirect('/turnover')->withErrors([
            'success' => 'Товарооборот успешно создан']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('turnover_edit',[
            'turnover' => Turnover::all()->where('id',$id)->first(),
            'countries' => Country::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated=$request->validate([
            'country1_id' => 'integer',
            'country2_id' => 'integer',
            'year' => 'required|integer|between:1800,2099',
            'export_from1_to2' => 'required|integer',
            'export_from2_to1' => 'required|integer'
        ]);
        $turnover = Turnover::all()->where('id',$id)->first();
        $turnover->country1_id = $validated['country1_id'];
        $turnover->country2_id = $validated['country2_id'];
        $turnover->year = $validated['year'];
        $turnover->export_from1_to2 = $validated['export_from1_to2'];
        $turnover->export_from2_to1 = $validated['export_from2_to1'];
        $turnover->save();
        return redirect('/turnover')->withInput()->withErrors([
            'success' => 'Товарооборот ' .$id .' успешно изменен']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Turnover::destroy($id);
        //return redirect('/turnover');
        return redirect('/turnover')->withErrors([
            'success' => 'Товарооборот ' .$id .' успешно удален']);
    }
}
