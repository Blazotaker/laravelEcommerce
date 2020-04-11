<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\view;
use App\Http\Resources\ProductsCollection;

use App\Product;

class ProductsController extends Controller
{
    public function __construct(){
        $this->middleware('auth',['except' =>['index','show']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $products = Product::paginate(15);
        if($request->wantsJson()){
            return new ProductsCollection($products);
        }
        return view('products.index',['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $product = new Product;
        return view('products.create', ["product" => $product]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
           if( Product::create($request->all())){
            return redirect('/');
       }else{
            return view('products.create');
       }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         return view('products.show', ['product' => Product::find($id) ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Product = Product::find($id);
        if($Product != null){
           return view('products.edit',['product' => $Product]);
        }else{
            return view('/');
        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::find($id);  
        if($product != null){
            $product->title = $request->title;
            $product->description = $request->description;
            $product->price = $request->price;
            $product->save();
            return redirect('/');
        }else{
            return view('products.edit',['product' => $Product,'shopping_cart_id'=>$shopping_cart_id]);
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        if($product != null){
            Product::destroy($id);
            return redirect('/productos');
        }else{
            
        }
    }
}
