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
      $proj = new ProjectIdea;
        $proj->name = $name;
        $proj->subject = $subject;
        $proj->description = $description;
        $proj->save();
      return $this->index();
    }

    public function home()
    {
      $data = ProjectIdea::paginate(2);
      return view('ideas', compact('data'));
    }

    public function show_detail($id)
    {
        return ProjectIdea::where('id', $id)->get();
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
