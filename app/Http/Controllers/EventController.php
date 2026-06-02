<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\File;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::latest()->paginate(10);
        return view('adminpanel.events.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminpanel.events.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'date' => 'required|date',
            'status' => 'nullable|in:upcoming,ongoing,completed,cancelled,postponed',
            'main_image' => 'nullable|image|max:4096',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                             ->withErrors($validator)
                             ->withInput();
        }

        try {
            $data = $validator->validated();

            $event = new Event();
            $event->title = $data['title'];
            $event->description = $data['description'] ?? null;
            $event->date = $data['date'];
            $event->status = $data['status'] ?? null;
            if ($request->hasFile('main_image')) {
                $Image = $request->file('main_image');
                $Image_ext = $Image->getClientOriginalExtension();
                $Image_name = time() . '_main_image.' . $Image_ext;

                $Image_path = 'events-images';
                $Image->move(public_path($Image_path), $Image_name);
                $event->main_image = $Image_path . "/" . $Image_name;
            }
            $event->save();

            return redirect()->route('events.index')->with('success', 'Event created successfully.');
        } catch (\Exception $e) {
            Log::error('Event store error: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Something went wrong. Please try again.')->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try {
            $event = Event::findOrFail($id);
            return view('adminpanel.events.edit', compact('event'));
        } catch (\Throwable $th) {
            Log::error('Event Edit Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'date' => 'required|date',
            'status' => 'nullable|in:upcoming,ongoing,completed,cancelled,postponed',
            'main_image' => 'nullable|image|max:4096',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                             ->withErrors($validator)
                             ->withInput();
        }

        try {
            $data = $validator->validated();

            $event = Event::findOrFail($id);
            $event->title = $data['title'];
            $event->description = $data['description'] ?? null;
            $event->date = $data['date'];
            $event->status = $data['status'] ?? null;
            if ($request->hasFile('main_image')) {
                if (isset($event->main_image) && File::exists(public_path($event->main_image))) {
                    File::delete(public_path($event->main_image));
                }
                $Image = $request->file('main_image');
                $Image_ext = $Image->getClientOriginalExtension();
                $Image_name = time() . '_main_image.' . $Image_ext;

                $Image_path = 'events-images';
                $Image->move(public_path($Image_path), $Image_name);
                $event->main_image = $Image_path . "/" . $Image_name;
            }
            $event->save();

            return redirect()->route('events.index')->with('success', 'Event updated successfully.');
        } catch (\Exception $e) {
            Log::error('Event update error: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Something went wrong. Please try again.')->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $event = Event::findOrFail($id);
            if (isset($event->main_image) && File::exists(public_path($event->main_image))) {
                File::delete(public_path($event->main_image));
            }
            $event->delete();
            return redirect()->route('events.index')->with('success', 'Event deleted successfully.');
        } catch (\Exception $e) {
            Log::error('Event delete error: ' . $e->getMessage());
            return redirect()->route('events.index')->with('error', 'Failed to delete event.');
        }
    }
    
    public function WebEvents()
    {
        $events = Event::latest()->paginate(10);
        return view('website.pages.events', compact('events'));
    }
    
    public function WebEventDetail($id)
    {
        $event = Event::findOrFail($id);
        return view('website.event-details', compact('event'));
    }
}
