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

    
    public function event_choise($id, Request $request){

      // dd($request);

      $event = Event::findOrFail($id);
      if (!$event) {
          return response()->json(['message' => 'Event not found'], 404);
      }
      $event->img = self::MASTER_IMG_URL . $event->img;

      return Inertia::render('EventChoise', ['eventChoise'=>$event, ]);
    }

    public function success($id){
      $tiket = Tiket::findOrFail($id);
      return Inertia::render('RegisterSuceess', ['tiket'=>$tiket]);
  }
  
    
}
