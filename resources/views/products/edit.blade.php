@extends('layout')
@section('title', "Изменение продукта \"$product->name\"")
@section('back', route('products.index'))

@section('content')
    <form
        action="{{ route('products.update', $product) }}"
        method="post"
        enctype="application/x-www-form-urlencoded">
        @csrf
        @method('PATCH')

        <x-form.input
            name="name"
            :value="$product->name"
            label="Наименование"
            required
        />

        <x-form.select
            name="product_type_id"
            :options="$types"
            :selected="$product->product_type_id"
            label="Тип"
            required
        />

        <x-form.input
            name="article"
            :value="$product->article"
            label="артикул"
            required
        />

        <x-form.input
            name="minPrice"
            type="number"
            :value="$product->minPrice"
            label="Минимальная стоимость (руб.)"
            min="0"
            max="99999"
            step="0.01"
            required
        />

        <x-form.input
            name="width"
            type="number"
            :value="$product->width"
            label="Ширина (м)"
            min="0.01"
            max="99999"
            step="0.01"
            required
        />

        <button type="submit" class="btn">Сохранить</button>
    </form>
@endsection
