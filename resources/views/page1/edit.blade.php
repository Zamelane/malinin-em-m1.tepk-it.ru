@extends('layout')
{{--@section('title', "Редактирование \"$product->name\"")--}}
{{--@section('back', route('products.show', $product))--}}
@section('content')
{{--    <form class="product column gap6 block"--}}
{{--          action="{{ route('products.update', $product) }}"--}}
{{--          method="post"--}}
{{--          enctype="application/x-www-form-urlencoded">--}}
{{--        @csrf--}}
{{--        @method('PATCH')--}}
{{--        <div class="label-group">--}}
{{--            <label>Тип</label>--}}
{{--            <select name="type_id">--}}
{{--                @foreach($types as $type)--}}
{{--                    <option--}}
{{--                        value="{{ $type->id }}"--}}
{{--                        @if($type->id === $product->type_id)--}}
{{--                            selected--}}
{{--                        @endif--}}
{{--                    >--}}
{{--                        {{ $type->name }}--}}
{{--                    </option>--}}
{{--                @endforeach--}}
{{--            </select>--}}
{{--            @error('type_id') <p class="error">{{ $message }}</p> @enderror--}}
{{--        </div>--}}
{{--        <div class="label-group">--}}
{{--            <label>Название</label>--}}
{{--            <input name="name" value="{{ $product->name }}">--}}
{{--            @error('name') <p class="error">{{ $message }}</p> @enderror--}}
{{--        </div>--}}
{{--        <div class="label-group">--}}
{{--            <label>Артикул</label>--}}
{{--            <input name="article" value="{{ $product->article }}">--}}
{{--            @error('article') <p class="error">{{ $message }}</p> @enderror--}}
{{--        </div>--}}
{{--        <div class="label-group">--}}
{{--            <label>Цена</label>--}}
{{--            <input name="price" value="{{ $product->price }}">--}}
{{--            @error('price') <p class="error">{{ $message }}</p> @enderror--}}
{{--        </div>--}}
{{--        <button type="submit" class="btn">Сохранить</button>--}}
{{--    </form>--}}
@endsection
