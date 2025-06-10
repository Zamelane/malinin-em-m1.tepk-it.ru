@extends('layout')
@section('title', 'Заголовок')
{{--@section('back', route('home'))--}}
@section('buttons')
{{--    <a class="btn" href="{{ route('products.create') }}">Создать</a>--}}
@endsection
@section('content')
{{--    <div class="products list">--}}
{{--        @foreach($products as $product)--}}
{{--            <a class="border" href="{{ route('products.show', $product->id) }}">--}}
{{--                <div class="top between">--}}
{{--                    <h3>{{$product->name}}</h3>--}}
{{--                    <p class="small">{{$product->article}}</p>--}}
{{--                </div>--}}
{{--                <p>{{$product->price}} ₽</p>--}}
{{--            </a>--}}
{{--        @endforeach--}}
{{--    </div>--}}
@endsection
