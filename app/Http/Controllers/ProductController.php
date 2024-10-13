<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Storage;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function index()
     {
        $products=Product::all();
         return view('backend.page.product.index',compact('products') );
     }
   

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.page.product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $products= new Product();
        $products->name = $request->name; 
        $products->category = $request->category;
        $products->description = $request->description;
        $products->price = $request->price;
        if(!empty($request->image)){
            $file_name = 'products/'.time().'.' .$request->image->getClientOriginalExtension();
            Storage::disk('public')->put($file_name, file_get_contents($request->image));
            $products->image = $file_name;
        }
        $products->save();
        return redirect()->route('products.index');
    
    }



    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $products=Product::find($id);
        return view('backend.page.product.edit',compact('products') );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $products=Product::find($id);
        $products->name = $request->name; 
        $products->category = $request->category;
        $products->description = $request->description;
        $products->price = $request->price;
        if(!empty($request->image)){
            $file_name = 'products/'.time().'.' .$request->image->getClientOriginalExtension();
            Storage::disk('public')->put($file_name, file_get_contents($request->image));
            $products->image = $file_name;
        }
        $products->save();
        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $products=Product::find($id);
        $products->delete();
        return redirect()->route('products.index');
    }
    


}
