@if(request()->is('/'))
    <div class="banner-foto">
        <div class="header_banner">
            <div class="container">
                <nav class="header">
                    <header>
                        <nav>
                            <ul class="menu">
                                <li><a href="#about">О нас</a></li>
                                <li><a href="#gallerey">Галерея</a></li>
                                <li><a href="#contacts">Контакты</a></li>
                            </ul>
                            <a href="/">
                                <h1 class="logo">Aroma Coffee</h1>
                            </a>
                            @if(auth()->user())
                                <nav>
                                    <a href="/profile">
                                        <button class="login-btn">Профиль</button>
                                    </a>
                                </nav>
                            @else
                                <a href="/login">
                                    <button class="login-btn">Вход</button>
                                </a>
                            @endif
                        </nav>
                    </header>
                </div>
            </div>
        </div>
    </div>
@else
    <div class="container">
        <nav class="header">
            <header>
                <nav>
                    <ul class="menu">
                        <li><a href="/#about">О нас</a></li>
                        <li><a href="/#gallerey">Галерея</a></li>
                        <li><a href="/#contacts">Контакты</a></li>
                    </ul>
                    <a href="/">
                        <h1 class="logo">Aroma Coffee</h1>
                    </a>
                    @if(auth()->user())
                        <nav>
                            <a href="/profile">
                                <button class="login-btn">Профиль</button>
                            </a>
                        </nav>
                    @else
                        <a href="/login">
                            <button class="login-btn">Вход</button>
                        </a>
                    @endif
                </nav>
            </header>
        </div>
@endif
