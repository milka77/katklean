<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

use function Flasher\Toastr\Prime\toastr;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('components.admin.products.index', compact('products'));
    }

    public function create()
    {
        return view('components.admin.products.create');
    }

    public function store()
    {
        // Validation
        $validatedData = request()->validate([
            'name' => ['required', 'string', 'max:255'],
            'description' => ['required','string'],
        ]);

        // Create Product
        $product = new Product();
        $product->name = Str::title($validatedData['name']);
        $product->slug = Str::slug($validatedData['name']);
        $product->is_extra = request()->has('is_extra') ? 1 : 0;
        $product->description = $validatedData['description'];
        $product->save();

        // Flash Message
        flash()->success('Product created successfully!');

        return redirect()->back();
    }

    public function edit(Product $product)
    {
        return view('components.admin.products.update', compact('product'));
    }

    public function update(Product $product)
    {
        // Validation
        $validatedData = request()->validate([
            'name' => ['required', 'string', 'max:255'],
            'description' => ['required','string'],
        ]);

        try {
            // Update Product
            $product->name = Str::title($validatedData['name']);
            $product->slug = Str::slug($validatedData['name']);
            $product->is_extra = request()->has('is_extra') ? 1 : 0;
            $product->description = $validatedData['description'];
            $product->save();
    
            // Flash Message
            flash()->success('Product updated successfully!');
        } catch (\Exception $e) {
            flash()->error('An error occurred while updating the product: ' . $e->getMessage());
            return redirect()->back()->withInput();
        }

        return redirect()->route('admin.products.index');
    }

    public function destroy(Product $product)
    {
        try {
            $product->delete();
            flash()->success('Product deleted successfully!');
        } catch (\Exception $e) {
            flash()->error('An error occurred while deleting the product: ' . $e->getMessage());
        }
        return redirect()->back();
    }
}
