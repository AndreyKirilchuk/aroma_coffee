@extends('layouts.index')

@section('content')
    <main class="container">
        <section class="welcome">
            <div class="welcome-left">
                <div class="welcome-text">
                    <h2>Добро пожаловать!</h2>
                    <p>Если вы еще не зарегистрированы, пожалуйста, <br> пройдите <a href="/register"
                                                                                     class="span">регистрацию</a></p>
                </div>
            </div>
            <div class="welcome-right">
                <h3 class="nazv">Авторизация</h3>
                <form class="register-form" action="/login" method="post">
                    @csrf
                    <input type="email" placeholder="Введите свою почту" name="email">
                    @error('email') <span class="text_error"> {{$message }}</span> @enderror
                    <input type="password" placeholder="Введите свой пароль" name="password">
                    @error('password') <span class="text_error"> {{$message }}</span> @enderror
                    <button type="submit">Войти</button>
                    @error('message') <span class="text_error"> {{$message }}</span> @enderror
                </form>
            </div>
        </section>
    </main>
@endsection
