<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Event;
use App\Models\Tiket;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ReactController extends Controller
{
    // Define the master image URL as a constant
    private const MASTER_IMG_URL = 'http://127.0.0.1:8000/img/';

    public function home() {
        $events = Event::latest()->get();
        // Iterate through events and update image URLs
        foreach ($events as $event) {
            $event->img = self::MASTER_IMG_URL . $event->img;
        }
        // Pass the updated events data to the Inertia view
        return Inertia::render('Home', ['events' => $events]); 
    }

    public function eventID($id){
        // Find the event by ID
        $event = Event::findOrFail($id);
        // Check if the event is found
        if (!$event) {
            // If no event found, return a response with a 404 status
            return response()->json(['message' => 'Event not found'], 404);
        }
        // Update the image URL
        $event->img = self::MASTER_IMG_URL . $event->img;
        // Pass the updated event data to the Inertia view
        return Inertia::render('EventDetail', ['event_details' => $event]);
    }

    
    public function event_choise($id){
      $event = Event::findOrFail($id);
      if (!$event) {
          return response()->json(['message' => 'Event not found'], 404);
      }
      $event->img = self::MASTER_IMG_URL . $event->img;

      return Inertia::render('EventChoise', ['eventChoise'=>$event, ]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'max:50'],
            'wa' => ['required', 'max:50'],
            'email' => ['required', 'max:50', 'email'],
            'event_id' => [
                'required',
                function ($attribute, $value, $fail) {
                    // Cek apakah event_id ada dalam database
                    $event = Event::find($value);
                    if (!$event) {
                        $fail('The selected event is invalid.');
                    }
                },
            ],
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
    
        Tiket::create($validator->validated());
    
        // Redirect atau lakukan tindakan lainnya setelah pembuatan tiket berhasil
    
  


    // $validator = Validator::make($request->all(), 
    //   [
    //     'name' => 'required',
    //     'wa' => 'required|numeric', // Use 'numeric' instead of 'number'
    //     'email' => 'required|email', // Add 'email' validation rule to validate email format
    //   ]);

    //   if ($validator->fails()) {
    //       return back()->withErrors($validator)->withInput();
    //   }      
      $qr_code = Str::random(20);
      while (Tiket::where('qr_code', $qr_code)->exists()) {
          $qr_code = Str::random(20);
      }
      $tiket = new Tiket();
      $tiket->event_id->$request->event_id;
      $tiket->name = $request->name;
      $tiket->wa = $request->wa;
      $tiket->email = $request->email;
      $tiket->qr_code = $qr_code;
      $tiket->user_id = '0';
      $tiket->save();
      
      $qr = $tiket->qr_code; 
    }
}
