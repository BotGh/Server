<?php

namespace App\Http\Controllers;

use App\Tables;
use Illuminate\Http\Request;

class TablesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function allTables()
    {
        $allTables = Tables::all();
        return Response::json($allTables);
    }

    public function reservedTables()
    {
        $reserved = Tables::all()->where('isReserved' ,'=' ,'1');
        return Response::json($reserved);
    }
    public function unreservedTables()
    {
        $Not_reserved = Tables::all()->where('isReserved' ,'=' ,'0');
        return Response::json($Not_reserved);
    }

    public function tableByID($id)
    {
        $table = Tables::find($id);
        $isReserved = $table->isReserved;
        return Response::json($isReserved);
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
