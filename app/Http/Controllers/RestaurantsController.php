<?php


namespace App\Http\Controllers;

use App\Restaurants;
use Illuminate\Http\Request;

class RestaurantsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function About($id)
    {
        $restaurant = Restaurants::all()->where(id,$id)->get();
        return $restaurant;
        //return Response::json($restaurant);
    }
       public function resNames()
    {
        $restaurantNames = Restaurants::all('resName');
        return $restaurantNames;
       // return Response::json($restaurant);
    }

    public function resTables($id)
    {
        $res = Restaurants::where('resId',$id)->get()->first();
        $resTables = $res->ResTables()->get();
        return $resTables;
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
     * @param  \App\Restaurants  $restaurants
     * @return \Illuminate\Http\Response
     */
    public function show(Restaurants $restaurants)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Restaurants  $restaurants
     * @return \Illuminate\Http\Response
     */
    public function edit(Restaurants $restaurants)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Restaurants  $restaurants
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Restaurants $restaurants)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Restaurants  $restaurants
     * @return \Illuminate\Http\Response
     */
    public function destroy(Restaurants $restaurants)
    {
        //
    }
}
