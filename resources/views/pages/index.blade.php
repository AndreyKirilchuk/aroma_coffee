@extends('layouts.index')

@section('content')

    @php
        $user = auth()->user();
    @endphp



    <div class="container" id="about">
        <section class="history-block">
            <div class="history-text">
                <h2>История<br>нашего <br> шоколада</h2>
                <div class="polosa"></div>
                <p class="text_block_text">
                    Мы с удовольствием создаём сладости, которые наполняют жизнь яркими
                    вкусами и радостью. Мы очень тщательно подбираем лучшие ингредиенты,
                    используя проверенные рецепты и добавляя свою любовь к каждому изделию.
                    В результате рождаются уникальные сладости, которые заставляют улыбаться
                    и наслаждаться моментом.
                </p>
            </div>
            <div class="kakao_block">
                <img src="{{asset('assets/img/block-kakao.png')}}" alt="">
            </div>
        </section>
    </div>

    <section class="galerea_block" id="gallery">
        <div class="container">

            <h2 class="zagolovok_text_block">Посмотрите нашу галерею</h2>
            <p class="text_galegea">Насладитесь великолепными фотографиями. Обратите внимание на текстуру, цвет <br>
                и
                форму
                наших уникальных шоколадных изделий.
            </p>
            <div class="gaaaaaaalereeeeeaaa">
                <div class="photo_block_dva">
                    <img src="{{asset('assets/img/galerea1.png')}}" alt="">
                    <img src="{{asset('assets/img/galerea2.png')}}" alt="">
                </div>
                <div class="photo_block_dva">
                    <img src="{{asset('assets/img/galerea3.png')}}" alt="">
                    <img src="{{asset('assets/img/galerea4.png')}}" alt="">
                </div>
            </div>
        </div>

    </section>

    <div class="container">
        <section class="sladosti_block">
            <h2 class="sladosti_text">Наши сладости</h2>
            <div class="products">
                @foreach($products as $product)
                    <div class="product">
                        <div class="photo"><img class="photo_cftflog" src="{{asset($product->img)}}"
                                                alt="{{$product->name}}"></div>
                        <br>
                        <p>{{$product->name}} <br>{{$product->price}} р.</p><br>
                        @if(!$user)
                            <a href="/login">
                                <button class="izbrannoe">В избранное</button>
                            </a>
                        @else
                            @if($user->favoriteProducts()->where('product_id', $product->id)->exists())
                                <form action="/products/{{$product->id}}/favorites/delete" method="post">
                                    @csrf
                                    <button class="izbrannoe">Удалить из избранного</button>
                                </form>
                            @else
                                <form action="/products/{{$product->id}}/favorites/add" method="post">
                                    @csrf
                                    <button class="izbrannoe">В избранное</button>
                                </form>
                            @endif
                        @endif
                    </div>
                @endforeach

                @if($products->count() === 0)
                    Товаров не найдено
                @endif
            </div>
        </section>
    </div>


    <section class="container" id="cause">
        <div class="sladosti_block">

            <h2 class="pri_block">6 причин выбрать нас</h2>
            <div class="column">
                <div class="advantages">
                    <div class="adv">
                        <div class="text_adv">Качество</div>
                        <div class="adv_text">Собственное производство позволяет
                            держать
                            качество на высоте
                        </div>
                    </div>
                    <div class="adv">
                        <div class="text_adv">Вкус</div>
                        <div class="adv_text">Яркий и неповторимый вкус нашего шоколада удовлетворит даже самых
                            взысканных
                            потребителей
                        </div>
                    </div>
                    <div class="adv">
                        <div class="text_adv">Индивидуальность</div>
                        <div class="adv_text">Каждое изделие изготовлено с любовью</div>
                    </div>
                    <div class="adv">
                        <div class="text_adv">Наборы</div>
                        <div class="adv_text">Специально для вас мы совместим позиции для более ярких эмоций</div>
                    </div>
                    <div class="adv">
                        <div class="text_adv">Натуральный состав</div>
                        <div class="adv_text">Мы не используем в наших изделиях искусственные красители, ароматизаторы и
                            добавки
                        </div>
                    </div>
                    <div class="adv">
                        <div class="text_adv">Свежесть</div>
                        <div class="adv_text">Все ваши заказы изготавливаются только после согласования</div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="container " id="contacts">
        <div class="contacts">

            <h2 class="sladosti_text">Свяжитесь с нами</h2>
            <br> <br>
            <div class="info_cont">
                <div class="info">
                    <div class="text_info">
                        <p>Адрес: г.Казань, ул. Примерная</p>
                        <p>Тел: 8-966-xxx-xx-xx</p>
                        <p>Email: test@mail.ru</p>

                        <p>* Не забудьте добавить понравившиеся позиции в избранное, чтобы при заказе легко найти всё
                            необходимое.
                        </p>
                    </div>
                </div>
                <div class="map">
                    <iframe class="map"
                            src="https://yandex.ru/map-widget/v1/?um=constructor%3Aed3f98ddaf1a983da8cdcc2acb5b7f8e4f4e9a3544f390690931c61361285d47&amp;source=constructor"
                            width="590" height="250" frameborder=""></iframe>
                </div>
            </div>
        </div>
    </section>

    <section class="reviews">
        <h2 class="review_text">Отзывы наших клиентов</h2>
        <div class="container slider">
            @foreach($reviews as $item)
                <div class="slide">
                    <img src="{{asset($item->img)}}" alt="{{$item->name}}">
                    <div class="stars">
                        @for($i = 0; $i < 5; $i++)
                            <span class="star {{$item->grade > $i ? 'active' : ''}}">★</span>
                        @endfor
                    </div>
                    <p>{{$item->text}}</p>
                </div>
            @endforeach
        </div>

        @if($reviews->count() === 0)
            <div class="review_text">
                Отзывов не найдено
            </div>
        @endif

        <div class="container flex center p-4">
            <a
                href="{{!$user ? '/login' : '/reviews/add'}}">
                <button class="izbrannoe">
                    Оставить отзыв
                </button>
            </a>
        </div>
    </section>
@endsection
