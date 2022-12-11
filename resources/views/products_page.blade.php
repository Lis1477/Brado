@extends('layouts.base')

@section('content')

<div class="products-page">

    <h1>Продукция BRADO</h1>

    <div class="container">

{{-- @include('includes.url_line') --}}

{{--         <div class="products-page_pic">
            <img src="{{ asset('img/products_pic.jpg') }}">
        </div>
 --}}
        <div class="products-page_categories">
            @foreach($cats as $cat)

            <a href="{{ asset('produktsiya/'.$cat->{'1c_id'}.'/'.$cat->slug) }}"
                class="products-page_category-element"
                title="Жми, чтобы смотреть все {{ $cat->name }}">

                <div class="products-page_img-block">
                    <img src="{{ $cat->url }}">
                </div>

                <div class="products-page_title">
                    {{ $cat->name }}
                </div>
            </a>

            @endforeach
            
        </div>
    </div>
</div>


@endsection

