@extends('layout')
@section('title', "Продукт \"$product->name\"")
@section('back', route('products.index'))
@section('buttons')
    <a class="btn" href="{{ route('products.edit', $product->id) }}">Редактировать</a>
@endsection

@section('content')
    <div class="flex-col gap-6">
        <div class="card line-height-1 flex-col gap-6">
            <h2>Основная информация</h2>

            <p class="text-lg">id: <span class="text-xl">{{ $product->id }}</span></p>

            <div>
                <p class="text-lg">Название</p>
                <p class="text-xl">{{ $product->name }}</p>
            </div>

            <div>
                <p class="text-lg">Тип</p>
                <p class="text-xl">{{ $product->productType->name }}</p>
            </div>

            <div>
                <p class="text-lg">Артикул</p>
                <p class="text-xl">{{ $product->article }}</p>
            </div>

            <div>
                <p class="text-lg">Минимальная стоимость</p>
                <p class="text-xl">{{ number_format($product->minPrice, 2, ',', ' ') }} (р.)</p>
            </div>

            <div>
                <p class="text-lg">Ширина</p>
                <p class="text-xl">{{ $product->width }} (м)</p>
            </div>
        </div>

        <div class="card">
            <h2>Используемые материалы</h2>
            <table class="line-height-1">
                <thead>
                <tr style="background-color: #BBD9B2;">
                    <th>ID</th>
                    <th>Название</th>
                    <th>Количество</th>
                    <th>Цена</th>
                </tr>
                </thead>
                <tbody>
                @forelse($product->productMaterials as $productMaterial)
                    <tr>
                        <td>{{ $productMaterial->material->id }}</td>
                        <td>{{ $productMaterial->material->name }}</td>
                        <td>{{ $productMaterial->quantity }} {{ $productMaterial->material->unit->name ?? 'ед' }}.</td>
                        <td class="min-w-fit">{{ number_format($productMaterial->material->price * $productMaterial->quantity, 2, ',', ' ') }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" style="text-align: center;">Материалы не найдены</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
