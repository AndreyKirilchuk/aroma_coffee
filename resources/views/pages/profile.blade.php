@extends('layouts.index')

@section('content')
    <div class="profile_container">
        <div class="header">
            <h1>Личный кабинет</h1>
        </div>

        <!-- Сообщения об успехе -->
        @if(session('success'))
            <div class="success-message">
                {{ session('success') }}
            </div>
        @endif

        <form class="content" method="post" action="/user/update">
            @csrf
            <div class="profile">
                <!-- Имя -->
                <div class="field">
                    <span class="text_mini">Имя</span>
                    <span class="text_block_im">
                        <input type="text" name="firstname" value="{{ old('firstname', $user->firstname) }}">
                    </span>
                    @error('firstname')
                    <div class="error-message">
                        {{ $message }}
                    </div>
                    @enderror
                    <div class="polosa_lc"></div>
                </div>

                <!-- Фамилия -->
                <div class="field">
                    <span class="text_mini">Фамилия</span>
                    <span class="text_block_im">
                        <input type="text" name="lastname" value="{{ old('lastname', $user->lastname) }}">
                    </span>
                    @error('lastname')
                    <div class="error-message">
                        {{ $message }}
                    </div>
                    @enderror
                    <div class="polosa_lc"></div>
                </div>

                <!-- Дата рождения -->
                <div class="field">
                    <span class="text_mini">Дата рождения</span>
                    <span class="text_block_im">
                        <input type="date" name="birthday" value="{{ old('birthday', $user->birthday) }}">
                    </span>
                    @error('birthday')
                    <div class="error-message">
                        {{ $message }}
                    </div>
                    @enderror
                    <div class="polosa_lc"></div>
                </div>
            </div>
            <br>
            <button type="submit" class="edit-button">Изменить</button>
        </form>
        <form action="/logout" method="post">
            @csrf
            <button type="submit" class="edit-button">Выйти из аккаунта</button>
        </form>
    </div>

    <div class="container">
        <section class="sladosti_block">
            <h2 class="sladosti_text">Избранные товары</h2>
            <div class="products">
                @foreach($products as $product)
                    <div class="product">
                        <div class="photo"><img class="photo_cftflog" src="{{asset($product->img)}}"
                                                alt="{{$product->name}}"></div>
                        <br>
                        <p>{{$product->name}} <br>{{$product->price}} р.</p><br>
                        <form action="/products/{{$product->id}}/favorites/delete" method="post">
                            @csrf
                            <button class="izbrannoe">Удалить из избранного</button>
                        </form>
                    </div>
                @endforeach

                @if($products->count() === 0)
                    Товаров не найдено
                @endif
            </div>
        </section>

        <section class="reviews">
            <h2 class="review_text">Мои отзывы</h2>
            <div class="container slider">
                @foreach($reviews as $item)
                    <div class="slide">
                        <img src="{{asset($item->img)}}" alt="{{$item->name}}">
                        <div class="slide_name">
                            {{$item->user->firstname}}
                        </div>
                        <div class="stars">
                            @for($i = 0; $i < 5; $i++)
                                <span class="star {{$item->grade > $i ? 'active' : ''}}">★</span>
                            @endfor
                        </div>
                        <p>{{$item->text}}</p>

                        <form action="/reviews/{{$item->id}}/delete" method="post">
                            @csrf
                            <button>Удалить</button>
                        </form>
                    </div>
                @endforeach
            </div>

            @if($reviews->count() === 0)
                <div class="review_text">
                    Отзывов не найдено
                </div>
            @endif
        </section>
    </div>
@endsection
