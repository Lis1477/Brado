<div class="header_main-menu">
    <nav class="main-menu_navigation">
        <ul>
            <li>
                <a href="{{ asset('/') }}">
                    <div class="main-menu_name">Главная</div>
                    <div class="main-menu_line"></div>
                </a>
            </li>

            <li>
                <a href="{{ asset('/o-kompanii') }}">
                    <div class="main-menu_name">О компании</div>
                    <div class="main-menu_line"></div>
                </a>
            </li>

            <li class="header_main-menu_cat">
                <a href="{{ asset('produktsiya') }}">
                    <div class="main-menu_name">Продукция</div>
                    <div class="main-menu_line"></div>
                </a>

                <ul class="header_main-menu_subcat">

                    @foreach($cats as $cat)

                    <li>
                        <a href="{{ asset('produktsiya/'.$cat->{'1c_id'}.'/'.$cat->slug) }}" title="{{ $cat->name }}">
                            <img src="{{ $cat->url }}" class="header_main-menu_subcat-img">
                            <div class="header_main-menu_subcat-name">
                                {{ $cat->name }}
                            </div>
                        </a>
                    </li>

                    @endforeach

                </ul>
            </li>

            <li>
                <a href="{{ asset('/service') }}">
                    <div class="main-menu_name">Сервис</div>
                    <div class="main-menu_line"></div>
                </a>
            </li>

            <li>
                <a href="{{ asset('/stat-partniorom') }}">
                    <div class="main-menu_name">Стать партнером</div>
                    <div class="main-menu_line"></div>
                </a>
            </li>

            <li>
                <a href="{{ asset('/kontakty') }}">
                    <div class="main-menu_name">Контакты</div>
                    <div class="main-menu_line"></div>
                </a>
            </li>
        </ul>
    </nav>

    <div class="main-menu_burger" id="js-burger">
        <hr class="hr-1">
        <hr class="hr-2">
        <hr class="hr-3">
    </div>

</div>
