@extends('layout')
@section('title', 'Продукты')
@section('back', route('home'))
@section('buttons')
    <a class="btn" href="{{ route('products.create') }}">Создать</a>
@endsection
@section('content')
    <div class="flex-col gap-6">
        @foreach($products as $product)
            {{--            <a class="border" href="{{ route('products.show', $product->id) }}">--}}
            <div>
                <a class="card flex-row between gap-6" href="{{ route('products.edit', $product->id) }}">
                    <div class="flex-col gap line-height-1">
                        <h3 class="text-xl">{{$product->productType->name}} | {{$product->name}}</h3>
                        <p class="text-lg">Артикул: <span class="fw">{{$product->article}}</span></p>
                        <p class="text-lg">Минимальная стоимость для партнёра: <span class="fw">{{number_format($product->minPrice, 2, ',', ' ')}} (р)</span></p>
                        <p class="text-lg">Ширина: <span class="fw">{{$product->width}} (м)</span></p>
                    </div>
                    <p class="text-lg min-w-fit fw">{{number_format($product->total_cost, 2, ', ', ' ')}} (р)</p>
                </a>
                <div class="flex justify-end">
                    <a class="mt-2 link text-lg" href="{{ route('products.show', $product->id) }}">подробнее -> </a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
