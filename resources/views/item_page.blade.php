@extends('layouts.base')

@section('content')

<div class="item-page">

    <h1>
        <div class="container">
            {{ $item->name }}
        </div>
    </h1>


    <div class="container">

@include('includes.url_line')

        <div class="item-page_info-block">

            <div class="item-page_img-block">

                <div class="item-page_img-block_big-image">

                    @foreach($item->images as $key => $image)

                    <a href="https://alfastok.by/storage/{{ $image->path_image }}"
                        data-fancybox='images'
                        data-caption="Изображение {{ $key + 1 }}"
                        id="js-big-{{ $key }}"
                        style="@if($key == 0){!! 'display: block;' !!}@else{!! 'display: none;' !!}@endif">

                        <img src="https://alfastok.by/storage/{{ $image->path_image }}"
                            title="Полноэкранный просмотр изображений">

                    </a>

                    @endforeach

                </div>

                <div class="item-page_img-block_small-images">

                    @foreach($item->images as $key => $image)

                    <img src="https://alfastok.by/storage/{{ $image->path_image }}"
                        class="js-view-pic"
                        data-num_pic="{{ $key }}"
                        data-count_pic="{{ $item->images->count() }}"
                        id="js-small-{{ $key }}"
                        style="@if($key == 0){!! 'background-color: #9b8450;' !!}@endif">

                    @endforeach

                </div>

            </div>

            <div class="item-page_text-block">

                @if($item->more_about)

                <div class="item-page_description">
                    {{ $item->more_about }}
                </div>
                
                @endif

                @if($item->equipment)

                <div class="item-page_equipment">
                    <strong>Комплектация:</strong><br>
                    {{ $item->equipment }}
                </div>

                @endif

                @if($item->content)

                <div class="item-page_advantages">
                    <strong>Преимущества:</strong>
                    {{ $item->content }}
                </div>

                @endif

                @if($item->charValues->count())

                <div class="item-page_equipment">

                    @foreach($item->charValues as $charValues)

                        @if($charValues->characteristic)

                    <p><strong>{{$charValues->characteristic->name}}:</strong> {{$charValues->value}} {{$charValues->characteristic->unit}}</p>

                        @endif

                    @endforeach

                </div>

                @endif

                @if($item->brand)

                <div class="item-page_more">

                    <p><strong>Производитель:</strong> {{ $item->brand }}</p>

                    @if( $item->apply)

                    <p><strong>Назначение:</strong> {{ $item->apply }}</p>

                    @endif

                    @if($item->shelf_life)

                    <p><strong>Срок годности:</strong> {{ $item->shelf_life }}</p>

                    @endif

                    @if($item->country)

                    <p><strong>Страна изготовления:</strong> {{ $item->country }}</p>

                    @endif

                    @if($item->importer)

                    <p><strong>Импортер:</strong> {{ $item->importer }}</p>

                    @endif

                    @if($item->barcode)

                    <p><strong>Штрих-код:</strong> {{ $item->barcode }}</p>

                    @endif

                    @if($item->certificate)

                    <p><strong>Сертификат:</strong> {{ $item->certificate }}</p>

                    @endif

                    @if ($item->depth && $item->width && $item->height)

                    <p><strong>Габариты упаковки:</strong> {{ $item->depth }}х{{ $item->width }}х{{ $item->height }} мм.</p>

                    @endif

                    @if($item->weight)

                    <p><strong>Вес с упаковкой:</strong> {{ $item->weight }}</p>

                    @endif

                    @if($item->guarantee_period )

                    <p><strong>Гарантийный срок:</strong> {{ $item->guarantee_period }}</p>

                    @endif

                </div>

                @endif

                @if($item->youtube)

                <div class="item-page_youtube">

                    <p>
                        <strong>Видеообзор:</strong>
                        <a href="{{ $item->youtube }}" target="_blank">Смотреть</a>
                    </p>

                </div>

                @endif

                @if($item->guide_file)

                <div class="item-page_guide">

                    <p>
                        <strong>Инструкция:</strong>
                        <a href="https://alfastok.by/storage/item-images/manuals/{{ $item->guide_file }}" target="_blank">Скачать</a>
                    </p>

                </div>

                @endif

            </div>
            
        </div>

    </div>

</div>


@endsection

@section('css')
    @parent

    <link href="{{ asset('css/jquery.fancybox.css') }}" rel="stylesheet" type="text/css">

@endsection

@section('scripts')
    @parent

    <script type="text/javascript" src="{{ asset('js/jquery.fancybox.js') }}"></script>
    <script>
        $(function() {
            $("[data-fancybox]").fancybox({loop:true});
        });
    </script>

    <script type="text/javascript" src="{{ asset('js/pic_view.js') }}"></script>

@endsection