@extends('layout')
@section('title', "Создание продукта")
@section('back', route('products.index'))

@section('content')
    <form
        action="{{ route('products.store') }}"
        method="post"
        enctype="application/x-www-form-urlencoded">
        @csrf

        <x-form.input
            name="name"
            label="Наименование"
            required
        />

        <x-form.select
            name="product_type_id"
            :options="$types"
            label="Тип"
            required
        />

        <x-form.input
            name="article"
            label="артикул"
            required
        />

        <x-form.input
            name="minPrice"
            type="number"
            label="Минимальная стоимость (руб.)"
            min="0"
            max="9999999999999999.99"
            step="0.01"
            required
        />

        <x-form.input
            name="width"
            type="number"
            label="Ширина (м)"
            min="0.01"
            max="9999999999999999.99"
            step="0.01"
            required
        />

        <button type="submit" class="btn">Добавить</button>
    </form>
@endsection
