<?php

namespace App\Http\Controllers;

use App\Orders;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showAllOrders()
    {
        $orders = Orders::all();
        return $orders;
    }

    public function showByUser($id)
    {
        $orders = Orders::select('user_id','orderType','orderStatus')->where('user_id', $id)->get();
        return $orders;
    }
    public function showByTable($id)
    {
        $orders = Orders::select('table_id','orderType','orderStatus')->where('table_id', $id)->get();
        return $orders;
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
//        //
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
     * @param  \App\Orders  $orders
     * @return \Illuminate\Http\Response
     */
    public function show(Orders $orders)
    {
       //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Orders  $orders
     * @return \Illuminate\Http\Response
     */
    public function edit(Orders $orders)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Orders  $orders
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Orders $orders)
    {
        //
    }

    public function cancel($id)
    {
        $order = Orders::find($id);
        if ($order->status == 'Queued') {
            $order->status = 'Canceled';
        } else {
            dd('Error');
        }
        $order->save();
        return back()->with('status', 'Success!');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Orders  $orders
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        Orders::find($id)->delete();
        return redirect('order')->with('status', 'Deleted!');
    }
}
