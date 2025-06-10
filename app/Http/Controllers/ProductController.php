<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use App\Models\ProductType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Получаем продукты и высчитываем стоимость по материалам
        $products = Product::with('materials')
            ->addSelect([
                'total_cost' => DB::table('product_materials')
                    ->join('materials', 'materials.id', '=', 'product_materials.material_id')
                    // Считаем, округляем и по умолчанию ставим 0 (в случае отсутствия)
                    ->selectRaw('ROUND(GREATEST(COALESCE(SUM(product_materials.quantity * materials.price), 0), 0), 2)')
                    ->whereColumn('product_materials.product_id', 'products.id')
            ])
            ->get();

        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Получаем все типы продуктов, для отображения в select'е
        $types = ProductType::all();
        return view('products.create', compact('types'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        // Получаем все типы продуктов, для отображения в select'е
        $types = ProductType::all();
        return view('products.edit', compact('product', 'types'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductRequest $request, Product $product)
    {
        // Изменяем продукт полученными данными, если они прошли проверку
        $product->update($request->validated());
        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
