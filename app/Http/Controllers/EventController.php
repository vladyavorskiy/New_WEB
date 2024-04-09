<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Country;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('events',[
            //'events' => Event::all()
            'events' => Event::with('country')->get()->all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('event_create',[
            'countries' => Country::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

//        if (!Auth::check()) {
//            return redirect()->back()->withErrors([
//                'error' => 'Для добавления события вам необходимо авторизоваться.',
//            ]);
//        }

        $validated=$request->validate([
            'country_id' => 'integer',
            'description' => 'required|unique:events|max:255',
            'date' => 'required|date'
        ]);
        $event=new Event($validated);
        $event->save();
        return redirect('/event')->withErrors([
            'success' => 'Событие успешно создано']);
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
        return view('event_edit',[
            'event' => Event::all()->where('id',$id)->first(),
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
            'description' => 'required|max:255',
            'date' => 'required|date'
        ]);
        $event = Event::all()->where('id',$id)->first();
        $event->description = $validated['description'];
        $event->date = $validated['date'];
        $event->country_id = $validated['country_id'];
        $event->save();
        return redirect('/event')->withInput()->withErrors([
            'success' => 'Событие ' .$id .' успешно изменено']);
    }

    /**
     * Remove the specified resource from storage.
     */
//    public function destroy(string $id)
//    {
//        Event::destroy($id);
//        return redirect('/event');
//    }

    public function destroy(string $id)
    {
        Event::destroy($id);
        return redirect('/event')->withErrors([
            'success' => 'Событие ' .$id .' успешно удалено']);
    }
}
