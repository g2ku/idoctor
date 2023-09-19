<?php

namespace App\Http\Controllers;

use App\Http\Form\ProductForm;
use App\Http\Requests\ProductRequest;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View|Response
     */
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View|Response
     */
    public function create()
    {
        $products = Product::all();
        return view('products.create', compact('products'));
    }

    public function login()
    {
        $products = Product::all();
        return view('products.login' , compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param ProductRequest $request
     * @return RedirectResponse
     */
    public function store(ProductRequest $request): RedirectResponse
    {
        $product = new Product();

        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->email = $request->input('email');
        $image = $request->file('pictures');
        if ($image) {
            $image->move(public_path('pictures'), $image->getClientOriginalName());
            $product->pictures = $image->getClientOriginalName();
        }
        $product->save();

        return redirect('/products');
    }

    /**
     * Display the specified resource.
     *
     * @param Product $product
     * @return Application|Factory|View|Response
     */
    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Product $product
     * @return Application|Factory|View|Response
     */
    public function edit(Product $product): View
    {
        $products = Product::all();
        return view('products.edit', compact('product' , 'products'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param ProductRequest $request
     * @param Product $product
     * @return RedirectResponse
     */
    public function update(ProductRequest $request, Product $product): RedirectResponse
    {
        $data = $request->all();

        if ($request->hasFile('picture')) {
            $data['picture'] = $request->file('picture')->store('pictures', 'public');
        }

        $product->update($data);

        return redirect()
            ->route('products.show', ['product' => $product])
            ->with('status', "Product {$product->title} successfully updated!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Product $product
     * @return RedirectResponse
     */
    public function destroy(Product $product): RedirectResponse
    {
        $product->delete();

        return redirect()->route('home')->with('status', $product->title . ' successfully deleted!');
    }
}
