<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EventController extends Controller
{
    public function index(){
      $events = Event::latest()->paginate(10);
      return view('dashboard.event.index', compact('events'));
  }
  

    public function create()
    {
        return view('dashboard.event.create');
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'date' => 'required|date',
            'description' => 'required',
            'time' => 'required|date_format:H:i',
            'place' => 'required',
            'penyelenggara' => 'required',
            'img' => 'required|image|mimes:jpg,png|max:2048', // 2mb
            'jumlah_tiket' => 'required|numeric', // Validate jumlah tiket
            'rp' => 'required|numeric', // Validate jumlah tiket
        ]);
    
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
    
        $event = new Event();
        $event->title = $request->input('title');
        $event->date = $request->input('date');
        $event->description = $request->input('description');
        $event->time = $request->input('time');
        $event->place = $request->input('place');
        $event->penyelenggara = $request->input('penyelenggara');
        $event->jumlah_tiket = $request->input('jumlah_tiket'); // Simpan jumlah tiket
        $event->rp = $request->input('rp'); // Simpan jumlah tiket
    
        if ($request->hasFile('img')) {
            $image = $request->file('img');
            $newFileName = 'event_' . now()->timestamp . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('img/'), $newFileName);
            $event->img = $newFileName;
        }
    
        $event->save();
    
        return redirect()->route('event.index');
    }
    public function edit($id)
    {
        $event = Event::findOrFail($id);
        return view('dashboard.event.edit', compact('event'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'date' => 'required|date',
            'description' => 'required',
            'time' => 'required|date_format:H:i',
            'place' => 'required',
            'penyelenggara' => 'required',
            // 'img' => 'required|image|mimes:jpg,png|max:2048 ', // 2mb 
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $event = Event::findOrFail($id);
        $event->title = $request->input('title');
        $event->date = $request->input('date');
        $event->description = $request->input('description');
        $event->time = $request->input('time');
        $event->place = $request->input('place');
        $event->penyelenggara = $request->input('penyelenggara');

        if ($request->hasFile('img')) {
            $image = $request->file('img');
            $newFileName = 'event_' . now()->timestamp . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('img/'), $newFileName);
            $event->img = $newFileName;
        }

        $event->save();

        return redirect()->route('event.index');
    }

    public function destroy($id)
    {
        $event = Event::findOrFail($id);
        $event->delete();
        return redirect()->route('event.index')->with('success', 'Event successfully deleted!');
    }
}
