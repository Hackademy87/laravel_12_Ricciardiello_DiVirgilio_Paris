<?php

namespace App\Http\Controllers;

use App\Models\Gender;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{



    public function welcome(){

        return view('welcome');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view ('product.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        $genders = Gender::all();
        return view ('product.create',compact('categories','genders'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Product::create(
            [
                'name' => $request->input('name'),
                'price' => $request->input('price'),
                'category_id'=>$request->input('category_id'),
                'gender_id'=> $request->input('gender_id'),
                'img' => $request->file('img')->store('public/ImgProduct')
            ]
            );

            return redirect()->route('product.create')->with('message', 'Prodotto inserito con successo..(Lorenzo NON)');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }


    public function indexByCategory(Category $category){
        
        $products = $category->products;

     return view('product.categorie',compact('products'));
    }




public function filterBygender(Gender $gender ,Category $category){
$products = $category->products->where('gender_id',$gender->id); 
return view('product.generi',compact('products'));
}





}
