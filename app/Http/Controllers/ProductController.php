<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function quickView($id)
    {
        $product = Product::findOrFail($id);
        $product->getProductDetails();
        // dd($product);
        return response()->json($product, 200);
    }

    public function shop(Request $request)
    {
        //CREATION OF REQUEST
        $products = Product::filterProduct($request);
        $categories = Category::get(['id', 'name']);

        // $request->show ? $products->paginate($request->show) : $products->paginate($show[0]);
        // dd($products);
        foreach ($products as $key => $product) {
            $product->getProductDetails();
            // TODO to calculate best sale, we should have an orders table
            // where we get best sales product in the month by doing
            // count of id of the product
            $product['best_sale'] = $key % 2 == 0;
        }
        // dd(csrf_token());
        // var_dump($products);

        return view('products.shop', [
            'products' => $products,
            'categories' => $categories,
            'sort' => Product::$sort,
            'show' => Product::$show,
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view('products.index');
    }

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
        $product->getProductDetails();

        $ids_categories = $product->categories()->pluck('categories.id');

        $related_products = Product::with('categories:id,name', 'images')
            ->whereHas('categories', function ($query) use ($ids_categories) {
                $query->whereIn('categories.id', $ids_categories);
            })
            ->limit(5)
            ->get();

        foreach ($related_products as $key => $related_product) {
            $related_product->getProductDetails();
            // TODO to calculate best sale, we should have an orders table
            // where we get best sales product in the month by doing
            // count of id of the product
            $related_product['best_sale'] = $key % 2 == 0;
        }

        return view('products.show', compact('product', 'related_products'));
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
