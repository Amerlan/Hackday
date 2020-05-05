<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\Club;
use App\ProjectIdea;
use App\Conference;
use App\Startup;

class SearchController extends Controller
{

  public function index()
{
    if(request()->ajax())
    {
      $data = Event::get(['id','title','when']);
      return Response::json($data);
    }

    return view('calendar');
}



    public static function create($month, $year)
    {

      function build_calendar($month, $year) {
        $data = Event::where('when','>=',date("Y-m-1"))->get(['title', 'when']);
        $data_conf = Conference::where('date','>=',date("Y-m-1"))->get(['title', 'date']);
        $daysOfWeek = array('S','M','T','W','T','F','S');
        $firstDayOfMonth = mktime(0,0,0,$month,1,$year);
        $numberDays = date('t',$firstDayOfMonth);
        $dateComponents = getdate($firstDayOfMonth);
        $monthName = $dateComponents['month'];
        $dayOfWeek = $dateComponents['wday'];
        $calendar = "<table class='calendar table table-condensed table-bordered'>";
        $calendar .= "<h4>$monthName $year</h4>";
        $calendar .= "<tr>";
        foreach($daysOfWeek as $day) {
          $calendar .= "<th class='header'>$day</th>";
        }
        $currentDay = 1;
        $calendar .= "</tr><tr>";
        if ($dayOfWeek > 0) {
          $calendar .= "<td colspan='$dayOfWeek'>&nbsp;</td>";
        }
        $month = str_pad($month, 2, "0", STR_PAD_LEFT);
        while($currentDay <= $numberDays){
          if($dayOfWeek == 7){
            $dayOfWeek = 0;
            $calendar .= "</tr><tr>";
          }
          $currentDayRel = str_pad($currentDay, 2, "0", STR_PAD_LEFT);
          $date = "$year-$month-$currentDayRel";


          // Is this today?
          if(date('Y-m-d') == $date) {
            $temp = '';
            foreach ($data as $d) {
              if ($d->when == $date){
                $temp .= "$d->title<br/>";
              }
            }
            foreach ($data_conf as $dc) {
              if ($dc->date == $date){
                $temp .= "$dc->title<br/>";
              }
            }
            if ($temp != ''){
              $calendar .= "<td class='nottaken day success ' rel='$date'> <b><a href='home'  data-html='true' data-container='body' data-toggle='popover' data-placement='top' data-content='$temp'
              data-original-title='' title='' data-trigger='hover' >$currentDay</a> </b> </td>";
            }
            else{
              $calendar .= "<td class='day success' rel='$date'> <b><span data-html='true' data-container='body' data-toggle='popover' data-placement='top' data-content='$temp'
              data-original-title='' title='' data-trigger='hover'>$currentDay</span> </b> </td>";
            }

          } else {
            $temp = '';
            foreach ($data as $d) {
              if ($d->when == $date){
                $temp .= "$d->title<br/>";
              }
            }
            foreach ($data_conf as $dc) {
              if ($dc->date == $date){
                $temp .= "$dc->title<br/>";
              }
            }
            if ($temp != ''){
              $calendar .= "<td class='day nottaken' rel='$date'><b><a style = 'color: black; background-color: #33a532;
              opacity: 0.8;' href ='home' data-html='true' data-container='body' data-toggle='popover' data-placement='top' data-content='$temp'
              data-trigger='hover'>$currentDay</a></b></td>";
            }
            else{
              $calendar .= "<td class='day' rel='$date'><span data-html='true' data-container='body' data-toggle='popover' data-placement='top' data-content='$temp'
              data-trigger='hover'>$currentDay</span></td>";
            }
          }

          $currentDay++;
          $dayOfWeek++;
        }
        if($dayOfWeek != 7){
          $remainingDays = 7 - $dayOfWeek;
          $calendar .= "<td colspan='$remainingDays'>&nbsp;</td>";
        }
        $calendar .= "</tr>";
        $calendar .= "</table>";
        return $calendar;
      }

      $calendar = build_calendar(date('m'), date('Y'));

      $calendar = '<div style="width:400px">' . $calendar . '</div>';

      $calendar .= '<style type="text/css">table tbody tr td, table tbody tr th { text-align: center; }</style>';
      return $calendar;
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
