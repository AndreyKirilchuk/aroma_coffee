@php
    $user = auth()->user();
@endphp

@if(request()->is('/'))
    <div class="banner-foto">
        <div class="header_banner">
            <div class="container">
                <nav class="header">
                    <header>
                        <nav>
                            <ul class="menu">
                                <li><a href="#about">О нас</a></li>
                                <li><a href="#gallery">Галерея</a></li>
                                <li><a href="#contacts">Контакты</a></li>
                            </ul>
                            <a href="/">
                                <h1 class="logo">Aroma Coffee</h1>
                            </a>
                            @if($user)
                                @if($user->role !== 'admin')
                                    <nav>
                                        <a href="/profile">
                                            <button class="login-btn">Профиль</button>
                                        </a>
                                    </nav>
                                @else
                                    <nav>
                                        <a href="/admin">
                                            <button class="login-btn">Админ панель</button>
                                        </a>
                                    </nav>
                                @endif
                            @else
                                <a href="/login">
                                    <button class="login-btn">Вход</button>
                                </a>
                            @endif
                        </nav>
                    </header>
                </nav>
            </div>
        </div>
        <div class="hero">
            <h1>Мы используем только <br> натуральные ингредиенты</h1>
        </div>
    </div>
@else
    <div class="container">
        <nav class="header">
            <header>
                <nav>
                    <ul class="menu">
                        <li><a href="/#about">О нас</a></li>
                        <li><a href="/#gallery">Галерея</a></li>
                        <li><a href="/#contacts">Контакты</a></li>
                    </ul>
                    <a href="/">
                        <h1 class="logo">Aroma Coffee</h1>
                    </a>
                    @if($user)
                        @if($user->role !== 'admin')
                            <nav>
                                <a href="/profile">
                                    <button class="login-btn">Профиль</button>
                                </a>
                            </nav>
                        @else
                            <nav>
                                <a href="/admin">
                                    <button class="login-btn">Админ панель</button>
                                </a>
                            </nav>
                        @endif
                    @else
                        <a href="/login">
                            <button class="login-btn">Вход</button>
                        </a>
                    @endif
                </nav>
            </header>
    </div>
@endif
