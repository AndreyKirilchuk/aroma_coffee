@extends('layouts.index')

@section('content')



        <div class="hero">
            <h1>Мы используем только <br> натуральные ингредиенты</h1>
        </div>
    </div>

    <div class="container">
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

    <section class="galerea_block">
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
                <div class="product">
                    <div class="photo"><img class="photo_cftflog" src="{{asset('assets/img/catalog1.png')}}" alt=""></div><br>
                    <p>Ореховое сердце<br>1000 р.</p><br>
                    <button class="izbrannoe">В избранное</button>
                </div>
                <div class="product">
                    <div class="photo"><img class="photo_cftflog" src="{{asset('assets/img/catalog2.png')}}" alt=""></div><br>
                    <p>Клубника в шоколаде<br>1000 р.</p><br>
                    <button class="izbrannoe">В избранное</button>
                </div>
                <div class="product">
                    <div class="photo"><img class="photo_cftflog" src="{{asset('assets/img/catalog3.png')}}" alt=""></div> <br>
                    <p>Гранатовое сердце<br>1000 р.</p> <br>
                    <button class="izbrannoe">В избранное</button>
                </div>

                <div class="product">
                    <div class="photo"><img class="photo_cftflog" src="{{asset('assets/img/catalog4.png')}}" alt=""></div><br>
                    <p>Апельсинки<br>1000 р.</p><br>
                    <button class="izbrannoe">В избранное</button>
                </div>
                <div class="product">
                    <div class="photo"><img class="photo_cftflog" src="{{asset('assets/img/catalog5.png')}}" alt=""></div><br>
                    <p>Черешня в шоколаде<br>1000 р.</p><br>
                    <button class="izbrannoe">В избранное</button>
                </div>
                <div class="product">
                    <div class="photo"><img class="photo_cftflog" src="{{asset('assets/img/catalog6.png')}}" alt=""></div><br>
                    <p>Букет из ягод с корицей <br>1000 р.</p><br>
                    <button class="izbrannoe">В избранное</button>
                </div>

            </div>
        </section>
    </div>


    <section class="container sladosti_block">
        <h2 class="pri_block">6 причин выбрать нас</h2>
        <div class="column">
            <div class="advantages">
                <div class="adv">
                    <div class="text_adv">Качество</div>
                    <div class="adv_text">Собственное производство с использованием современных технологий позволяет
                        держать
                        качество на высоте</div>
                </div>
                <div class="adv">
                    <div class="text_adv">Вкус</div>
                    <div class="adv_text">Яркий и неповторимый вкус нашего шоколада удовлетворит даже самых
                        взысканных
                        потребителей</div>
                </div>
                <div class="adv">
                    <div class="text_adv">Индивидуальность</div>
                    <div class="adv_text">Каждое изделие изготовлено с любовью</div>
                </div>
            </div>
            <div class="advantages">
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
    </section>



    <section class="container contacts">
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
    </section>

    <section class="reviews">
        <h2 class="review_text">Отзывы наших клиентов</h2>
        <div class="slider">
            <div class="slide">
                <img src="{{asset('assets/img/clients/client1.jpg')}}" alt="Клиент 1">
                <div class="stars">
                    <span class="star">★</span>
                    <span class="star">★</span>
                    <span class="star">★</span>
                    <span class="star">★</span>
                    <span class="star">★</span>
                </div>
                <p>Шоколад был невероятно вкусный! Красивая упаковка, отлично подойдет на подарок.</p>
            </div>
            <div class="slide">
                <img src="{{asset('assets/img/clients/client2.jpg')}}" alt="Клиент 2">
                <div class="stars">
                    <span class="star">★</span>
                    <span class="star">★</span>
                    <span class="star">★</span>
                    <span class="star">★</span>
                    <span class="star">★</span>
                </div>
                <p>Шоколад был невероятно вкусный! Красивая упаковка, отлично подойдет на подарок.</p>
            </div>
            <div class="slide">
                <img src="{{asset('assets/img/clients/client3.jpg')}}" alt="Клиент 3">
                <div class="stars">
                    <span class="star">★</span>
                    <span class="star">★</span>
                    <span class="star">★</span>
                    <span class="star">★</span>
                    <span class="star">★</span>
                </div>
                <p>Шоколад был невероятно вкусный! Красивая упаковка, отлично подойдет на подарок.</p>
            </div>
        </div>
    </section>
@endsection
