<?php

namespace App\Http\Controllers;

use App\ProductInShoppingCart;
use Illuminate\Http\Request;

class ProductInShoppingCartsController extends Controller
{

    public function __construct(){
        $this->middleware('shopping_cart');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $in_shopping_cart = ProductInShoppingCart::create([
            'shopping_cart_id' => $request->shopping_cart->id,
            'product_id' => $request->product_id,
         ]);

         if($in_shopping_cart){
             return redirect()->back();
         }else{
             redirect()->back()->withErrors([
                 'product' => 'No se pudo agregar el producto'
             ]);
         }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ProductInShoppingCart  $productInShoppingCart
     * @return \Illuminate\Http\Response
     */
    public function show(ProductInShoppingCart $productInShoppingCart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ProductInShoppingCart  $productInShoppingCart
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductInShoppingCart $productInShoppingCart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ProductInShoppingCart  $productInShoppingCart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductInShoppingCart $productInShoppingCart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ProductInShoppingCart  $productInShoppingCart
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductInShoppingCart $productInShoppingCart)
    {
        //
    }
}
