<?php

namespace App\Http\Controllers;

use App\Club;
use Illuminate\Http\Request;

class ClubController extends Controller
{
  protected $headers = [ 'Content-Type' => 'application/json; charset=utf-8' ];

    public function index()
    {
        $data = Club::all();
        $headers = [ 'Content-Type' => 'application/json; charset=utf-8' ];
       return response()->json($data, 200, $this->headers, JSON_UNESCAPED_UNICODE);
    }

    public function create($name,$descr,$members,$lead,$sublead)
    {
      Club::insert([
        'name' => $name,
        'description'=> $descr,
        'members' => $members,
        'leader' => $lead,
        'subleader' => $sublead,
    ]);
    return $this->index();
    }


    public function show_detail($id)
    {

     return Club::where('id', $id)->get();
      #$club =
      #return $club;
      #$headers = [ 'Content-Type' => 'application/json; charset=utf-8' ];
      #return response()->json($club, 200, $headers, JSON_UNESCAPED_UNICODE);
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
