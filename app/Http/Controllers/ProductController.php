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
        $genders = DB::select("SELECT category, genre FROM products WHERE category ='LIBROS' GROUP BY genre ORDER BY RAND() LIMIT 4 ");
        // categorias
        //$categories = DB::select("SELECT category, COUNT(genre) conteo FROM products GROUP BY category");
        // productos ralacionados
        //$relatedproducts = DB::select(" SELECT * FROM products WHERE category ='LIBROS' AND stock > 0 ORDER BY updated_at LIMIT 4 ");

        //dd($news);
        // view
        return view('products.index',compact('news','sellers','genders')); 

    } // index

    /**
     * productos detalle
     *
     * @return \Illuminate\Http\Response
     */
    public function productSingle(Request $request)
    {
        $id = !empty($request->id) ? (int)$request->id : false;
        // query row product
        $product = Product::where('id', $id)->first();
        // query productos relacionados
        $related = Product::inRandomOrder()->where('genre', $product->genre)->limit(4)->get();

        // vista producto detalle
        return view('products.product-single',compact('product','related'));
    }

    /**
     * productos por categoria
     *
     * @return \Illuminate\Http\Response
     */
    public function productGrid(Request $request)
    {
        $category = !empty($request->category) ? trim($request->category) : false;
        $genre = !empty($request->genre) ? trim($request->genre) : false;

        // listado todos los generos
        $genders = DB::select("SELECT genre, COUNT(genre) count
        FROM products
        WHERE category ='$category' AND genre LIKE '%$genre%'
        GROUP BY genre");

        // listado de productos
        $products = Product::where('category', $category)
            ->where('genre', 'like', '%'.$genre.'%')
            ->orderBy('title')
            ->Paginate(20);

        // vista producto detalle
        return view('products.product-grid',compact('genders','products','category','genre'));
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
     * modulo de contacto
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function contact( )
    {
        // view
        return view('contact.index'); 
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
