<?php

namespace App\Http\Controllers;

use App\Models\products;
use App\Models\order;
use Illuminate\Http\Request;

class ordersController extends Controller
{

    public function index()
    {
        $product = products::all();
        return view('order',['product' => $product]);
    }

    public function create($id)
    {
        $product = products::find($id);
        return view('detailorder',['product' => $product]);
    }

    public function store(Request $request)
    {
        //
    }

    public function show(order $order)
    {
        //
    }

    public function edit(order $order)
    {
        //
    }

    public function update(Request $request, order $order)
    {
        //
    }

    public function destroy(order $order)
    {
        //
    }
}
