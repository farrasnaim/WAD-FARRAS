<?php

namespace App\Http\Controllers;

use App\Models\products;
use Illuminate\Http\Request;

class productsController extends Controller
{

    public function index()
    {
        $products = products::all();
        return view('product',['products' => $products] );
    }

    public function show(products $products)
    {
        return view('/productsdetail', ['productsdetail' => $products]);
    } 

    public function create()
    {
        return view('addproducts');
    }

    public function store(Request $request)
    {
        $products = new products();
        $products->stock = $request->stock;
        $products->name = $request->name;
        $products->price = $request->price;
        $products->description = $request->description;
        $image = $request->file('image');

        if ($image != null) {
            $destination = 'products';
            $newname = time() . "_" . $image->getClientOriginalName();
            $image->move($destination, $newname);
            $products->img_path = $newname;
        }

        $products->save();
        return redirect()->route('product.index');
    }
    // {
    //     $products = new products();
    //     $products->name = $request->input('name');
    //     $products->price = $request->input('price');
    //     $products->description = $request->input('description');
    //     $products->stock = $request->input('stock');
        

    //     if($request->hasFile('img_path')){
    //         $file = $request->file('img_path');
    //         $extension = $file->getClientOriginalExtension();
    //         $filename = time() . "." . $extension;
    //         $file->move('uploads/image/',$filename);
    //         $products->img_path = $filename;
    //     } else {
    //         return $request;
    //         $products->img_path = "";
    //     }
    //     $products->save();
    //     return redirect()->route('product.index');
    // }

    public function edit(products $products, $id)
    {
        $product = products::find($id);
        return view('updateproducts',['product' => $product]);
    }

    public function update(Request $request, products $products)
    {
        //
    }

    public function destroy($id)
    {
        $products = products::find($id);
        $products->delete();
        return redirect('product');
    }
}
