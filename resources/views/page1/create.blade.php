@extends('layout')
{{--@section('title', "Создание")--}}
@section('back', route('products.index'))
@section('content')
{{--    <form class="product column gap6 block"--}}
{{--          action="{{ route('products.store') }}"--}}
{{--          method="post"--}}
{{--          enctype="application/x-www-form-urlencoded">--}}
{{--        @csrf--}}
{{--        <div class="label-group">--}}
{{--            <label>Название</label>--}}
{{--            <input name="name">--}}
{{--            @error('name') <p class="error">{{ $message }}</p> @enderror--}}
{{--        </div>--}}
{{--        <div class="label-group">--}}
{{--            <label>Тип</label>--}}
{{--            <select name="type_id">--}}
{{--                @foreach($types as $type)--}}
{{--                    <option value="{{ $type->id }}">{{ $type->name }}</option>--}}
{{--                @endforeach--}}
{{--            </select>--}}
{{--            @error('type_id') <p class="error">{{ $message }}</p> @enderror--}}
{{--        </div>--}}
{{--        <div class="label-group">--}}
{{--            <label>Артикул</label>--}}
{{--            <input name="article">--}}
{{--            @error('article') <p class="error">{{ $message }}</p> @enderror--}}
{{--        </div>--}}
{{--        <div class="label-group">--}}
{{--            <label>Цена</label>--}}
{{--            <input name="price">--}}
{{--            @error('price') <p class="error">{{ $message }}</p> @enderror--}}
{{--        </div>--}}
{{--        <button type="submit" class="btn">Сохранить</button>--}}
{{--    </form>--}}
@endsection
