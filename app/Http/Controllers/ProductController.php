<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    // Menampilkan semua data yang ada di tabel
    public function index() {
        $data = product::all();

        return view('users.product.index', [
            'product' => $data,
        ]);
    }

    // Melakukan penyimpanan/pembuatan data baru ke data tabel
    public function store(Request $request) {
        $request->validate([
            'name' => ['required'],
            'category' => ['required'],
            'thumbnail_image' => ['required'],
        ]);

        $product = new Product();

        $product->name = $request->name;
        $product->category = $request->category;
        $product->thumbnail_image = $request->thumbnail_image ?? 'image.jpg';
        $product->merchant_id = $request->merchant_id ?? 1;

        $product->save();

        return response($product, 200);
    }

    // Mengarahkan ke halaman create
    public function create() {
        return view("users.product.create");
    }

    // Melakukan pembaharuan data
    public function update(Request $request, $id) {
        $request->validate([
            'name' => ['required'],
            'category' => ['required'],
            'thumbnail_image' => ['required'],
        ]);

        $product = Product::findorFail($id);

        $product->name = $request->name;
        $product->category = $request->category;
        $product->thumbnail_image = $request->thumbnail_image ?? 'image.jpg';

        $products->save();

        return response()->back();
    }

    // Mengarahkan ke halaman edit
    public function edit(Product $product) {
        return view('user.product.edit', [
            'product' => $product,
        ]);
    }

    // Menampilkan salah satu data di dalam tabel
    public function show($id) {
        $product = Product::findOrFail($id);

        return response($product, 200);
    }

    //Melakukan penghapusan salah satu data di dalam tabel
    public function destroy($id) {
        $product = Product::findOrFail($id);

        $product->delete();

        return response()->back();
    }
}
