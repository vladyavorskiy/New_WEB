<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Economy;
use App\Models\Event;
use Illuminate\Http\Request;

class EconomyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('economies',[
            //'events' => Event::all()
            'economies' => Economy::with('country')->get()->all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('economy_create',[
            'countries' => Country::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated=$request->validate([
            'country_id' => 'integer',
            'year' => 'required|integer|between:1800,2099',
            'GDP' => 'required|integer',
            'GDP_person' => 'required|integer'
        ]);
        $economy=new Economy($validated);
        $economy->save();
        return redirect('/economy')->withErrors([
            'success' => 'Данные экономики успешно созданы']);
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
        return view('economy_edit',[
            'economy' => Economy::all()->where('id',$id)->first(),
            'countries' => Country::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated=$request->validate([
            'country_id' => 'integer',
            'year' => 'required|integer|between:1800,2099',
            'GDP' => 'required|integer',
            'GDP_person' => 'required|integer'
        ]);
        $economy = Economy::all()->where('id',$id)->first();
        $economy->country_id = $validated['country_id'];
        $economy->year = $validated['year'];
        $economy->GDP = $validated['GDP'];
        $economy->GDP_person = $validated['GDP_person'];
        $economy->save();
        return redirect('/economy')->withInput()->withErrors([
            'success' => 'Данные экономики ' .$id .' успешно изменены']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Economy::destroy($id);
        //return redirect('/economy');
        return redirect('/economy')->withErrors([
            'success' => 'Данные экономики ' .$id .' успешно удалены']);
    }
}
