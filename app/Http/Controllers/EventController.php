<?php

namespace App\Http\Controllers;

use App\Event;
use App\Guest;
use App\EventGuest;
use Illuminate\Http\Request;


class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::orderby('date', 'asc')->get();
        return view('events.index')->with('events', $events);
    }

    
    public function latest()
    {
        
        $events = Event::orderby('date', 'asc')->take(1)->get();
        return view('welcome')->with('events', $events);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('events.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $event = Event::create($request -> except('_token'));
        return redirect('/events');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        
        // $guests = Guest::all();

        $guests = Guest::whereDoesntHave('GuestEvent', function ($query) use ($event) {
            $query->where('event_id', '=', $event->id);
        })->get();

        $events = Event::find($event);
        return view('events.show')->with('events', $events)->with('guests', $guests);

        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        //
    }

    public function inviteguest(Event $event, Guest $guest)


    {
            
        if($guest=='all'){

            $guests = Guest::whereDoesntHave('GuestEvent', function ($query) use ($event) {
                $query->where('event_id', '=', $event->id);
            })->get();

            foreach ($guests as $guest) {
                EventGuest::create(['event_id'=> $event, 'guest_id'=> $guest]);

                //fire invitation event (id);-> rsvp popultae krega aur fir mail bejdega!
            }

        }

        else{

            EventGuest::create([ 'event_id'=> $event->id, 'guest_id'=> $guest->id]);

            // $token = str_random(32);  

            // event(new Invitation($user));

            // \Mail::to($guest)->send(new SendInvitations($guest, $event, $token));   



        }
    
            return redirect("/events/$event->id");

    }


}
