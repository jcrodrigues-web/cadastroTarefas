<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function index() {

        $search = request('search');

        if($search) {

            $events = Event::where([
                ['title', 'like', '%'.$search.'%']
            ])->get();

        } else {
            $events = Event::all();

        }

        return view('welcome', ['events' => $events, 'search' => $search]);
    }

    public function create() {
        return view ('events.create');
    }

    public function store (Request $request) {
        $event = new Event;

        $event->title = $request->title;
        $event->date = $request->date;
        $event->owner = $request->owner;
        $event->description = $request->description;
        $event->status = $request->status;

        $event->save();

        return redirect ('/')->with('msg', 'Evento criado conm sucesso!');
    }

    public function show($id) {

        $event = Event::findOrFail($id);

        return view('events.show', ['event' => $event]);
    }

    public function destroy($id) {
        Event::findOrFail($id)->delete();

        return redirect('/')->with('msg', 'Tarefa excluida com sucesso!');
    }

    
}


