<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use Carbon\Carbon;

class EventController extends Controller
{
    protected $headers = [ 'Content-Type' => 'application/json; charset=utf-8' ];

    public function index()
    {
      $data = Event::all();
      return response()->json($data, 200, $this->headers, JSON_UNESCAPED_UNICODE);
    }

# SNIPPET
# where('when','>',date("Y-m-d"))->get()

    public function create($title, $description, $when, $location, $orgtype, $orgid)
    {
      $event = new Event;
        $event->title = $title;
        $event->description = $description;
        $event->when = Carbon::create($when);
        $event->location = $location;
        $event->orgtype = $orgtype;
        $event->orgId = $orgid;
        $event->save();
      return $this->index();
    }


    public function home()
    {
      $data = Event::where('when','>',date("Y-m-d"))->orderBy('when','asc')->paginate(5);

      return view('home', compact('data'));
    }


    public function show_detail($id)
    {
        $data = Event::where('id', $id)->get();
        return response()->json($data, 200, $this->headers, JSON_UNESCAPED_UNICODE);
    }

    public function last($amount)
    {
        $data = Event::orderBy('when', 'desc')->take($amount)->get();
        return response()->json($data, 200, $this->headers, JSON_UNESCAPED_UNICODE);
    }


    public function search_all($orgtype, $id)
    {
        $data = Event::where([['orgtype', '=', $orgtype],['orgid', '=', $id]])->get();
        return response()->json($data, 200, $this->headers, JSON_UNESCAPED_UNICODE);
    }


    public function search($orgtype)
    {
        $data = Event::where('orgtype', $orgtype)->get();
        return response()->json($data, 200, $this->headers, JSON_UNESCAPED_UNICODE);
    }
}
