@extends('layouts.index')

@section('content')
    <!-- Основная часть -->
    <main class="container main">
        <header class="header">

            <div class="flex between">
                <h1>Каталог</h1>

                <nav class="gap-4">
                    <a href="/admin/products/create"><button class="add-btn">+ Добавить товар</button></a>
                    <form action="/logout" method="post">
                        @csrf
                        <button type="submit" class="add-btn">Выйти из аккаунта</button>
                    </form>
                </nav>
            </div>
        </header>

        <!-- Секция каталога -->
        <section class="catalog-section">
            <h2>Сезонные</h2>
            <table class="catalog-table">
                <thead>
                <tr>
                    <th>Фото</th>
                    <th>Название</th>
                    <th>Цена</th>
                    <th>Редактировать</th>
                    <th>Удалить</th>
                </tr>
                </thead>
                <tbody>
                @foreach($products_seasonal as $item)
                    <tr>
                        <td><img src="{{asset($item->img)}}" alt="{{$item->name}}"></td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->price}} ₽</td>
                        <td>
                            <div class="flex gap-4">
                                <a href="/admin/products/{{$item->id}}/update">
                                    <button class="izm_block">Редактировать</button>
                                </a>
                            </div>
                        </td>
                        <td>
                            <div class="flex gap-4">
                                <form method="post" action="/admin/products/{{$item->id}}/delete">
                                    @csrf
                                    <button class="izm_block">Удалить</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach

                @if($products_seasonal->count() === 0)
                    Сезонных продуктов не найдено
                @endif
                </tbody>
            </table>
        </section>

        <section class="catalog-section">
            <h2>Популярные</h2>
            <table class="catalog-table">
                <thead>
                <tr>
                    <th>Фото</th>
                    <th>Название</th>
                    <th>Цена</th>
                    <th>Редактировать</th>
                    <th>Удалить</th>
                </tr>
                </thead>
                <tbody>
                @foreach($products_popular as $item)
                    <tr>
                        <td><img src="{{asset($item->img)}}" alt="{{$item->name}}"></td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->price}} ₽</td>
                        <td>
                            <div class="flex gap-4">
                                <a href="/admin/products/{{$item->id}}/update">
                                    <button class="izm_block">Редактировать</button>
                                </a>
                            </div>
                        </td>
                        <td>
                            <div class="flex gap-4">
                                <form method="post" action="/admin/products/{{$item->id}}/delete">
                                    @csrf
                                    <button class="izm_block">Удалить</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach

                @if($products_popular->count() === 0)
                    Популярных продуктов не найдено
                @endif
                </tbody>
            </table>
        </section>
    </main>
@endsection
