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
    </div>
@endsection
