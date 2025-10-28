@extends('layouts.index')

@section('content')
    <main class="container">
        <section class="welcome">
            <div class="welcome-left">
                <div class="welcome-text">
                    <h2>Добро пожаловать!</h2>
                    <p>Спасибо,что выбираете нас <br>
                        Хороших вам покупок </p>
                </div>
            </div>
            <div class="welcome-right">
                <h3 class="nazv">Регистрация</h3>
                <form class="register-form" action="/register" method="post">
                    @csrf
                    <input type="text" placeholder="Введите свое имя" name="firstname">
                    @error('firstname') <span class="text_error"> {{$message }}</span> @enderror
                    <input type="text" placeholder="Введите свою фамилию" name="lastname">
                    @error('lastname') <span class="text_error"> {{$message }}</span> @enderror
                    <input type="email" placeholder="Введите свою почту" name="email">
                    @error('email') <span class="text_error"> {{$message }}</span> @enderror
                    <input type="password" placeholder="Введите свой пароль" name="password">
                    @error('password') <span class="text_error"> {{$message }}</span> @enderror
                    <button type="submit">Зарегистрироваться</button>
                </form>
            </div>
        </section>
    </main>
@endsection
