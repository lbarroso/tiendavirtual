<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            
        // novedades
        $news = Product::inRandomOrder()->where('news', '1')->limit(12)->get();
        // mas vendidos
        $sellers = Product::inRandomOrder()->where('sellers', '1')->limit(4)->get();
        // generos
        $genders = DB::select("SELECT genre FROM products WHERE category ='LIBROS' GROUP BY genre ORDER BY RAND() LIMIT 4 ");
        // categorias
        //$categories = DB::select("SELECT category, COUNT(genre) conteo FROM products GROUP BY category");
        // productos ralacionados
        //$relatedproducts = DB::select(" SELECT * FROM products WHERE category ='LIBROS' AND stock > 0 ORDER BY updated_at LIMIT 4 ");

        //dd($news);
        // view
        return view('products.index',compact('news','sellers','genders')); 

    } // index

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
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
