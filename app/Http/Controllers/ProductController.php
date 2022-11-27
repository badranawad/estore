<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Admin\Product;

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
        $categories = Category::all();
        return view('admin.products.index', compact('products', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|min:5',
            'price' => 'required',
            'quantity' => 'required'
        ], [
            'name.required' => 'اسم المنتج مطلوب',
            'price.required' => 'ادخل السعر',
            'quantity.required' => 'ادخل الكمية',
            'min' => 'يجب الا يقل الحقل عن 5 احرف '
        ]);

        $product = new Product;

        $product->name = $request->name;
        $product->quantity = $request->quantity;
        $product->price     =   $request->price;
        $product->category_id = $request->category;
        $product->description = $request->description;

        $product->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        $categories = Category::all();
        return view('admin.products.edit', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|min:5',
            'price' => 'required',
            'quantity' => 'required'
        ], [
            'name.required' => 'اسم المنتج مطلوب',
            'price.required' => 'ادخل السعر',
            'quantity.required' => 'ادخل الكمية',
            'min' => 'يجب الا يقل الحقل عن 5 احرف '
        ]);
        
        $product = Product::find($id);

        $product->name = $request->name;
        $product->quantity = $request->quantity;
        $product->price     =   $request->price;
        $product->category_id = $request->category;
        $product->description = $request->description;

        $product->save();

        return redirect('admin/products');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::find($id)->delete();

        return redirect()->back();
    }
}
