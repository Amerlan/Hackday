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
      Event::insert([
        'title' => $title,
        'description' => $description,
        'when' => Carbon::create($when),
        'location' => $location,
        'orgtype' => $orgtype,
        'orgId' => $orgid,
    ]);
      return $this->index();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
