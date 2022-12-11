@extends('layouts.base')

@section('content')

<div class="main-page_block-1" style="height: auto">

    <div class="main-page_block-1_left"></div>

    <div class="main-page_block-1_center">
        <div class="main-page_block-1_center-pic">
            <img src="{{ asset('img/main_page_pic_2.jpg') }}">
        </div>
        <div class="main-page_block-1_center-text">
            <p>РАЗРАБОТАНО В ЕВРОПЕ</p>
            <p>СОВРЕМЕННЫЕ И ЭФФЕКТИВНЫЕ<br>ПРОИЗВОДСТВЕННЫЕ МОЩНОСТИ</p>
            <p>ГАРАНТИЯ НАДЕЖНОСТИ</p>
            <p>ВЫСОКАЯ ПРОИЗВОДИТЕЛЬНОСТЬ</p>
            <p>ТОЛЬКО ЛУЧШИЕ КОМПЛЕКТУЮЩИЕ</p>
            <p>ПРОСТОТА И БЕЗОПАСНОСТЬ</p>
        </div>
    </div>

    <div class="main-page_block-1_right"></div>

</div>

<div class="main-page_block-2">
    <div class="container">

        <div>
            <div class="main-page_block-2_elem-header">
                <img src="{{ asset('img/main_page_b2_house.png') }}">
                <span>10 000 м2</span>
            </div>
            <div class="main-page_block-2_elem-text">
                СУММАРНАЯ<br>ТЕРРИТОРИЯ СКЛАДОВ
            </div>
        </div>

        <div>
            <div class="main-page_block-2_elem-header">
                <img src="{{ asset('img/main_page_b2_social.png') }}">
                <span>> 100</span>
            </div>
            <div class="main-page_block-2_elem-text">
                КВАЛИФИЦИРОВАННЫХ<br>СОТРУДНИКОВ В ШТАТЕ
            </div>
        </div>

        <div>
            <div class="main-page_block-2_elem-header">
                <img src="{{ asset('img/main_page_b2_service.png') }}">
                <span>7</span>
            </div>
            <div class="main-page_block-2_elem-text">
                СЕРВИСНЫХ ЦЕНТРОВ<br>В ОБЛАСТНЫХ ГОРОДАХ
            </div>
        </div>

        <div>
            <div class="main-page_block-2_elem-header">
                <img src="{{ asset('img/main_page_b2_line.png') }}">
                <span>> 19 лет</span>
            </div>
            <div class="main-page_block-2_elem-text">
                УСПЕШНО РАБОТАЕМ<br>НА РЫНКЕ
            </div>
        </div>

    </div>
</div>

<div class="main-page_block-3">
    <div class="container">

        <div class="main-page_block-3_text-block">
            <h2>ТОРГОВАЯ МАРКА BRADO</h2>

            <p>История бренда BRADO берет свое начало в 2008 году.</p>
            <p>На базе университета Триеста в совместном проекте с Международным центром теоретической физики были созданы первые прототипы компрессорного оборудования.</p>
            <p>Молодого ученого во главе группы звали Brando Spigola, но друзья прозвали его Brado.</p>
            <p>Обрудование получило его прозвище.</p>
            <p>Прототипы обрудования были представлены на выставке в Китае, где были заключены первые контракты на массовое производство. Размещение производства в Шанхае позволило уменьшить издержки и тем самым производить оборудование на более выгодных условиях, чем во многом объясняется ценовая конкурентоспособность оборудования и аксессуаров BRADO.</p>
            <p>Главный офис BRADO по сей день находится в небольшом итальянском городке Триест.</p>
            <p>Эксклюзивные представители компании имеются также в Словении, Хорватиии и Словакии.</p>
            <p>Торговая марка BRADO известна в Европе как производитель высококачественного оборудования.</p>

{{--             <p>Хорошо известна в Европе как производитель высококачественного инструмента</p>
            <p>Главный офис ее находится в небольшом итальянском городке Триест</p>
            <p>Эксклюзивные представители компании имеются также в Словении, Хорватиии и Словакии</p>
            <p>Размещение производства в Шанхае позволило уменьшить издержки производства и тем самым производить оборудование на более выгодных условиях, чем во многом объясняется ценовая конкурентоспособность оборудования и аксессуаров BRADO</p>
            <p>Компания BRADO постоянно совершенствует свои технологии и внедряет инновации на производство, поэтому полностью уверена в качестве своего оборудование</p> --}}
        </div>
        <div class="main-page_block-3_map">
            <img src="{{ asset('img/main_page_b3_karta.png') }}">
        </div>

    </div>
</div>

<div class="main-page_block-4">
    <div class="container">

        <div class="main-page_block-4_element">
            <div class="main-page_block-4_elem-header ship">
                <img src="{{ asset('img/main_page_b4_ship.png') }}">
            </div>
            <div class="main-page_block-4_elem-text">
                ОТДЕЛ ДОКУМЕНТАЦИИ<br>И ЛОГИСТИКИ
            </div>
        </div>

        <div class="main-page_block-4_element">
            <div class="main-page_block-4_elem-header hands">
                <img src="{{ asset('img/main_page_b4_hands.png') }}">
            </div>
            <div class="main-page_block-4_elem-text">
                ОТДЕЛ ОПТОВЫХ<br>ПРОДАЖ
            </div>
        </div>

        <div class="main-page_block-4_element">
            <div class="main-page_block-4_elem-header rupor">
                <img src="{{ asset('img/main_page_b4_rupor.png') }}">
            </div>
            <div class="main-page_block-4_elem-text">
                ОТДЕЛ МАРКЕТИНГА<br>И ПРОДВИЖЕНИЯ
            </div>
        </div>

        <div class="main-page_block-4_element">
            <div class="main-page_block-4_elem-header wrench">
                <img src="{{ asset('img/main_page_b4_wrench.png') }}">
            </div>
            <div class="main-page_block-4_elem-text">
                ОТДЕЛ СЕРВИСНОГО<br>ОБСЛУЖИВАНИЯ
            </div>
        </div>

    </div>
</div>

<div class="main-page_block-5">
    <div class="container">

        <div class="main-page_block-5_info-block">

            <div class="main-page_block-5_info-element element-1">

                <div class="main-page_block-5_info-hidden">
                    Выполняются следующие функции: заказ, приобретение, доставка, информационное сопровождение, испытание соответствия безопасности и качеству нормам Таможенного Союза
                </div>

                <div class="main-page_block-5_info-pic">
                    <img src="{{ asset('img/main_page_b4_pic1.jpg') }}">
                </div>

                <div class="main-page_block-5_info-text">
                    Основной задачей отдела документации и логистики является обеспечение поставки оборудования и инструмента производства BRADO со всеми сопроводительными документами
                </div>

            </div>

            <div class="main-page_block-5_info-element element-2">

                <div class="main-page_block-5_info-hidden">
                    Благодаря тому, что мы являемся первым импортером оборудования BRADO, своим объемам продаж – мы имеем лучшие цены и предложения, которые готовы предложить Вам
                </div>

                <div class="main-page_block-5_info-pic">
                    <img src="{{ asset('img/main_page_b4_pic2.jpg') }}">
                </div>

                <div class="main-page_block-5_info-text">
                    Менеджеры отдела оптовых продаж готовы предложить своим клиентам особые условия сотрудничества и индивидуальный подход к каждому заказу
                </div>

            </div>

            <div class="main-page_block-5_info-element element-3">

                <div class="main-page_block-5_info-hidden">
                    Цель отдела маркетинга и продвижения заключается в том, чтобы увеличить общий спрос на оборудование BRADO. Для этого используется целый арсенал маркетинговых мероприятий
                </div>

                <div class="main-page_block-5_info-pic">
                    <img src="{{ asset('img/main_page_b4_pic3.jpg') }}">
                </div>

                <div class="main-page_block-5_info-text">
                    Отдел маркетинга и продвижения выполняет роль буфера между рынком и компанией. Благодаря нашим специалистам по рекламе мы больше работаем над удержанием клиента и удовлетворением его потребностей
                </div>

            </div>

            <div class="main-page_block-5_info-element element-4">

                <div class="main-page_block-5_info-hidden">
                    Мы очень внимательно и ответственно подходим к вопросу обслуживания, проданного нашей компанией оборудования и уже более 19 лет, предоставляем услуги по сервису и ремонту
                </div>

                <div class="main-page_block-5_info-pic">
                    <img src="{{ asset('img/main_page_b4_pic4.jpg') }}">
                </div>

                <div class="main-page_block-5_info-text">
                    Высококвалифицированные сотрудники отдела сервисного обслуживания всегда проконсультируют по интересующему оборудованию и запчастям, сделают все возможное для быстрого и качественного ремонта
                </div>

            </div>

        </div>
    </div>
</div>

<div class="main-page_feedback-form">

    <div class="container">

        <h2>Напишите нам</h2>

        <form method="post" action="{{ asset('/feedback') }}">

            {{ csrf_field() }}

            <div class="input-block">
                <input type="text" name="name" placeholder="Ваше имя *" required>
                <input type="email" name="email" placeholder="Ваше email *" required>
                <input type="text" name="theme" placeholder="Тема *" required>
            </div>

            <textarea name="text" placeholder="Ваше сообщение *" required></textarea>

            <div class="main-page_feedback-button">
                <button type="subscribe">Отправить</button>
            </div>

        </form>
        
    </div>
        
</div>

<div class="main-page_map-block">

    <div class="main-page_map" id="map">
        <iframe  style="pointer-events: none;" src="https://yandex.ru/map-widget/v1/?um=constructor%3A8-bZi6ddmti9v5LpgeoxwoOj456qIdLH&amp;source=constructor" width="100%" height="550" frameborder="0"></iframe>
    </div>

</div>

@endsection

@section('scripts')
@parent

<script type="text/javascript" src="{{ asset('js/main_pic_animation.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/map_activation.js') }}"></script>

@endsection