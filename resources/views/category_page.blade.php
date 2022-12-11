@extends('layouts.base')

@section('content')

<div class="category-page">

    <h1>{{ $ur_2['name'] }}</h1>

    <div class="container">

@include('includes.url_line')

        @foreach($items as $item)

        <a 
            href="{{ asset($ur_2['slug'].'/'.$item->{'1c_id'}.'/'.$item->slug) }}" 
            class="category-page_item-element"
            title="Смотреть подробнее {{ $item->name }}"
        >

            <div class="category-page_img-block">

                @if($item->images->count())

                <img src="http://alfastok.by/storage/{{ $item->images[0]->path_image }}">

                @else

                <img src="{{ asset('img/brado_trumb.png') }}">

                @endif

            </div>

            <div class="category-page_info-block">

                <h2>
                    {{ $item->name }}
                </h2>

                @if($item->more_about)

                <div class="category-page_description">
                    {{ $item->more_about }}
                </div>

                @endif

                @if($item->charValues->count())

                <div class="category-page_characteristics">

                @foreach($item->charValues as $charValues)

                    @if($charValues->characteristic)

                    <p><strong>{{$charValues->characteristic->name}}:</strong> {{$charValues->value}} {{$charValues->characteristic->unit}}</p>

                    @endif

                @endforeach

                </div>

                @endif

                <div class="category-page_more-button">
                    Подробнее
                </div>

            </div>

        </a>

        @endforeach
            
    </div>
</div>


@endsection

