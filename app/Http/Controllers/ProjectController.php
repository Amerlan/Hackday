<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProjectIdea;
class ProjectController extends Controller
{

    protected $headers = [ 'Content-Type' => 'application/json; charset=utf-8' ];

    public function index()
    {
        $data = ProjectIdea::all();
        return response()->json($data, 200, $this->headers, JSON_UNESCAPED_UNICODE);
    }


    public function create($name, $subject, $description)
    {
      ProjectIdea::insert([
        'name' => $name,
        'subject' => $subject,
        'description' => $description,
      ]);
    }

    
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
