<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Conference;
use Carbon\Carbon;

class ConferenceController extends Controller
{
  protected $headers = [ 'Content-Type' => 'application/json; charset=utf-8' ];

  public function index()
  {
    $data = Conference::all();
    return response()->json($data, 200, $this->headers, JSON_UNESCAPED_UNICODE);
  }


    public function create($title, $description, $image, $date, $location)
    {
          $conf = new Conference;
          $conf->title = $title;
          $conf->description = $description;
          $conf->image = $image;
          $conf->date = Carbon::create($date);
          $conf->location = $location;
          $conf->save();
          return $this->index();

    }


    public function home()
    {
      $data = Conference::where('date','>',date("Y-m-d"))->orderBy('date','asc')->paginate(1);

      return view('conf', compact('data'));
    }


    public function show_detail($id)
    {
        return Conference::where('id', $id)->get();
    }


    public function search($id)
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
