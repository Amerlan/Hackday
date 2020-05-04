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
        $club = new Club;
        $club->name = $name;
        $club->description = $descr;
        $club->members = $members;
        $club->leader = $lead;
        $club->subleader = $sublead;
        $club->save();

    return $this->index();
    }


    public function show_detail($id)
    {

     return Club::where('id', $id)->get();
    }


    public function all()
    {
        $data = Club::paginate(2);

        return view('organizations', compact('data'));
    }





    public function destroy($id)
    {
        //
    }
}
