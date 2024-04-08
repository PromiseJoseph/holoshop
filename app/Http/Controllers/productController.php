<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Pagination\Paginator;
use App\Models\Product;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

class productController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        $this->middleware(['auth', 'verified' ]);
    }


    public function index()
    {
        
        $products = Product::paginate(15);
        
        return view('productspage',compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
        //
    }

    /**
     * Display the specified resource.
     * To be used for Js Api
     */
    public function show(string $productid)
    {
        $productsingle = product::find($productid);
        return view('productsingle',compact('productsingle'));
        
    }

     /**
     * Display the specified resources category.
     */
    public function category( $category)
    {
        $setCategory = ucwords($category);
        $categoryItems = product::where('product_category',$category)->paginate(15);
        return view('categorypage', compact('categoryItems','setCategory'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }


}
