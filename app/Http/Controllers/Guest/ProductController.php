<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // dd($request->all());
        $formData = $request->all();
        //METODO 1
        // $newProduct = new Product();
        // $newProduct->title = $formData['title'];
        // $newProduct->description = $formData['description'];
        // $newProduct->type = $formData['type'];
        // $newProduct->src = 'https://www.lamolisana.it/wp-content/uploads/2021/09/4-spaghetto-quadrato-bucato.jpg';
        // $newProduct->src_h = 'https://www.lamolisana.it/wp-content/uploads/2021/09/4-spaghetto-quadrato-bucato.jpg';
        // $newProduct->src_p = 'https://www.lamolisana.it/wp-content/uploads/2021/09/4-spaghetto-quadrato-bucato.jpg';
        // $newProduct->cooking_time = $formData['cooking_time'];
        // $newProduct->weight = $formData['weight'];

        //METODO 2
        $newProduct = new Product();
        $newProduct->fill($formData);
        $newProduct->src = 'https://www.lamolisana.it/wp-content/uploads/2021/09/4-spaghetto-quadrato-bucato.jpg';
        $newProduct->src_h = 'https://www.lamolisana.it/wp-content/uploads/2021/09/4-spaghetto-quadrato-bucato.jpg';
        $newProduct->src_p = 'https://www.lamolisana.it/wp-content/uploads/2021/09/4-spaghetto-quadrato-bucato.jpg';
        $newProduct->save();

        //METODO 3
        // $newProduct = Product::create($formData);

        return redirect()->route('products.show', ['product'=> $newProduct->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        // $product = Product::findOrFail($id); ////nel caso in cui non passo l'oggetto al metodo
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     */
    public function update(Request $request, $id)
    {
        $formData = $request->all();
        $product = Product::findOrFail($id);
        $product->title = $formData['title'];
        $product->description = $formData['description'];
        $product->type = $formData['type'];
        $product->src = 'https://www.lamolisana.it/wp-content/uploads/2021/09/4-spaghetto-quadrato-bucato.jpg';
        $product->src_h = 'https://www.lamolisana.it/wp-content/uploads/2021/09/4-spaghetto-quadrato-bucato.jpg';
        $product->src_p = 'https://www.lamolisana.it/wp-content/uploads/2021/09/4-spaghetto-quadrato-bucato.jpg';
        $product->cooking_time = $formData['cooking_time'];
        $product->weight = $formData['weight'];
        $product->update();
        return redirect()->route('products.show', $product->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index');
    }
}