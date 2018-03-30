<?php

namespace App\Http\Controllers;

use App\ResWorkingHours;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ResWorkingHoursController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $currentTime = Carbon::now();
        $startTime = ResWorkingHours::select('start')->where('resId',$id)->get();
        $endTime = ResWorkingHours::select('end')->where('resId',$id)->get();
        $status = ResWorkingHours::where('open' ,'=' ,'0');
        $status1 = ResWorkingHours::where('open' ,'=' ,'1');

        if ($currentTime > $startTime || $currentTime < $endTime)
        {
            return Response::json($status);
        }
        else
        {
            return Response::json($status1);
        }
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\ResWorkingHours  $resWorkingHours
     * @return \Illuminate\Http\Response
     */
    public function show(ResWorkingHours $resWorkingHours)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ResWorkingHours  $resWorkingHours
     * @return \Illuminate\Http\Response
     */
    public function edit(ResWorkingHours $resWorkingHours)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ResWorkingHours  $resWorkingHours
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ResWorkingHours $resWorkingHours)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ResWorkingHours  $resWorkingHours
     * @return \Illuminate\Http\Response
     */
    public function destroy(ResWorkingHours $resWorkingHours)
    {
        //
    }
}
