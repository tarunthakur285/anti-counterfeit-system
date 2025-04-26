<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'brand' => 'required',
            'code' => 'required|unique:products,code'
        ]);

        $product = new Product();
        $product->name = $request->name;
        $product->brand = $request->brand;
        $product->description = $request->description;
        $product->code = $request->code;
        $product->save();

        return redirect()->route('products.index')->with('success', 'Product added successfully!');
    }

    public function showForm()
    {
        return view('products.verify-form');
    }

    public function verify(Request $request)
    {
        $code = $request->input('code');
        $product = Product::where('code', $code)->first();
        $isGenuine = $product !== null;
        return view('products.verify', compact('product', 'isGenuine'));
    }

    public function generateQRCode($code)
    {
        return QrCode::size(200)->generate(route('products.verify', ['code' => $code]));
    }

    // 🔥 These should be inside the class too:
    
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'brand' => 'required',
            'code' => 'required|unique:products,code,' . $id
        ]);

        $product = Product::findOrFail($id);
        $product->name = $request->name;
        $product->brand = $request->brand;
        $product->description = $request->description;
        $product->code = $request->code;
        $product->save();

        return redirect()->route('products.index')->with('success', 'Product updated successfully!');
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('products.index')->with('success', 'Product deleted successfully!');
    }
}
