<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $perpage = $request->perpage ?? 2;
        return view('countries',[
            //'countries' => Country::all()
            //'countries' => Country::paginate(5)
            'countries' => Country::paginate($perpage)->withQueryString()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('country_create',[
            'countries' => Country::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated=$request->validate([
            'name' => 'required|unique:countries|max:255',
            'capital' => 'required|unique:countries|max:255',
            'population' => 'required|integer',
            'area' => 'required|integer'
        ]);
        $country=new Country($validated);
        $country->save();
        return redirect('/country')->withErrors([
            'success' => 'Страна ' .$country->name .' успешно создана']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('country',[
            'country' => Country::all()->where('id',$id)->first()
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('country_edit',[
            'country' => Country::all()->where('id',$id)->first()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated=$request->validate([
            'name' => 'required|max:255',
            'capital' => 'required|max:255',
            'population' => 'required|integer',
            'area' => 'required|integer'
        ]);
        $country = Country::all()->where('id',$id)->first();
        $country->name = $validated['name'];
        $country->capital = $validated['capital'];
        $country->population = $validated['population'];
        $country->area = $validated['area'];
        $country->save();
        return redirect('/country')->withInput()->withErrors([
            'success' => 'Страна ' .$id .' успешно изменена']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if (! Gate::allows('destroy-country', Country::all()->where('id',$id)->first())){
            return redirect('/error')->with('message',
                'У вас нет разрешения на удаление страны номер ' . $id);
        }
        Country::destroy($id);
        //return redirect('/country');
        return redirect('/country')->withErrors([
            'success' => 'Страна ' .$id .' успешно удалена']);
    }
}




