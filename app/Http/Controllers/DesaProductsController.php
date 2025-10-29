<?php


namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class DesaProductsController extends Controller
{
    public function index()
    {
        $products = Product::query()->with('products:id')
            ->take(150)
            ->orderBy('id','desc')
            ->get(['id','code','name','full_name','description','price_unit_id']);
        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    public function save(Product $product, Request $request)
    {
        $request->validate([
            'code' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'full_name' => 'required',
            'description' => 'required',
            'price_unit_id' => 'required|integer',
        ]);

        $product->code = $request->input('code');
        $product->setTranslation('name', App::getLocale(), $request->input('name'));

        if ($product->exists) {
            $product->updated_at = now();
        } else {
        }

        $product->save();

        return redirect()->route('products.index')->with('success', $product->wasRecentlyCreated ? 'Producto creado correctamente.' : null);
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->route('products.index');
    }
}
