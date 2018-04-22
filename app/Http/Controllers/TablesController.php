<?php

namespace App\Http\Controllers;

use App\Restaurants;
use App\Tables;
use Illuminate\Http\Request;

class TablesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function resTables($id)
    {
        $resTables = Tables::where('res_id',$id)->get();
        return $resTables ;
       // return Response::json($allTables)->withCallback($request->input('allTables'));
        // return Response:json($allTables);
    }

    public function tableInfo($id)
    {
        $tableInfo = Tables::select('tableName')->where('tableId',$id)->get();
        return $tableInfo;
        //return Response::json($reserved);
    }

    public function reservedTables($id)
    {
        $reservedTables = Tables::where('res_id',$id)
                            ->where('isReserved', '=', '1')->get();
        return $reservedTables;
        //return Response::json($reserved);
    }
    public function unreservedTables($id)
    {
        $unreservedTables = Tables::where('res_id',$id)
            ->where('isReserved', '=', '0')->get();
        return $unreservedTables;
        //return Response::json($Not_reserved);
    }

    /*public function tableByID($id)
    {
        $table = Tables::where('res_id', $id);
        $isReserved = $table->isReserved;
        return $isReserved;
        //return Response::json($isReserved);
    }*/

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
     * @param  \App\Tables  $tables
     * @return \Illuminate\Http\Response
     */
    public function show(Tables $tables)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tables  $tables
     * @return \Illuminate\Http\Response
     */
    public function edit(Tables $tables)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tables  $tables
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tables $tables)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tables  $tables
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tables $tables)
    {
        //
    }
}
