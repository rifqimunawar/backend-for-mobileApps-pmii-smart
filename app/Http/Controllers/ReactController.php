<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Config; // Import Config facade
use Inertia\Inertia;
use App\Models\Event;
use Illuminate\Http\Request;

class ReactController extends Controller
{

  public function home() {
    $imageUrls = [
        'https://karcisnya.iconnet-operation.com/img/hero1.jpg?',
        'https://karcisnya.iconnet-operation.com/img/hero2.jpg?',
        'https://karcisnya.iconnet-operation.com/img/hero3.jpg?',
        'https://karcisnya.iconnet-operation.com/img/hero4.webp?',
        'https://karcisnya.iconnet-operation.com/img/hero5.jpg?'
    ];

    $events = Event::latest()->get();

    // Iterate through events and update image URLs
    foreach ($events as $event) {
        $event->img = config('app.MASTER_IMG_URL') . 'img/' . $event->img;
    }

    return Inertia::render('Home', ['events' => $events, 'imageUrls' => $imageUrls]); 
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
        $event->img = config('app.MASTER_IMG_URL') . 'img/' . $event->img;
        // Pass the updated event data to the Inertia view
        return Inertia::render('EventDetail', ['event_details' => $event]);
    }

    
    public function event_choise($id, Request $request){

      // dd($request);

      $event = Event::findOrFail($id);
      if (!$event) {
          return response()->json(['message' => 'Event not found'], 404);
      }
      $event->img = config('app.MASTER_IMG_URL') . 'img/' . $event->img;

      return Inertia::render('EventChoise', ['eventChoise'=>$event, ]);
    }

    public function about(){
      return inertia('About');
    }

    public function contact(){
      return inertia('Contact');
    }
}
