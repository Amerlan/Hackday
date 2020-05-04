<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Startup;
class StartupController extends Controller
{

    protected $headers = [ 'Content-Type' => 'application/json; charset=utf-8' ];

    public function index()
    {
      $data = Startup::all();
      return response()->json($data, 200, $this->headers, JSON_UNESCAPED_UNICODE);
    }


    public function create($name, $description, $members, $founder, $subject, $capitalization)
    {
        $startup = new Startup;
        $startup->name = $name;
        $startup->description = $description;
        $startup->members = $members;
        $startup->founder = $founder;
        $startup->subject = $subject;
        $startup->capitalization = $capitalization;
        $startup->save();
      return $this->index();
    }

    public function home()
    {
      $data = Startup::paginate(2);

      return view('startups', compact('data'));
    }

    public function show_detail($id)
    {
        return Startup::where('id', $id)->get();
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
