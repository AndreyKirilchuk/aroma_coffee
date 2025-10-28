@extends('layouts.index')

@section('content')

    <div class="container">
        <!-- Основная часть -->
        <main class="main">
            <header class="header">
                <h1 class="add_block_text">Редактировать товар</h1>
            </header>

            <!-- Форма добавления товара -->
            <form class="add-form" method="post" action="/admin/products/{{$product->id}}/update"
                  enctype="multipart/form-data">
                @csrf
                <!-- Основная информация -->
                <div class="form-section">
                    <h2>Основная информация</h2>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="productName">Название товара *</label>
                            <input type="text" id="productName" class="form-control" placeholder="Введите название"
                                   required name="name" value="{{$product->name}}">
                            @error('name') <span class="text_error">{{$message}}</span> @enderror
                        </div>
                        <div class="form-group">
                            <label for="productPrice">Цена *</label>
                            <input type="number" id="productPrice" class="form-control" placeholder="₽"
                                   min="0" step="any" required name="price" value="{{ $product->price }}">
                            @error('price') <span class="text_error">{{$message}}</span> @enderror
                        </div>
                    </div>

                    <!-- Изображение товара -->
                    <div class="image-upload">
                        <div class="upload-placeholder">
                            Нажмите для загрузки изображения<br>
                            <small>Рекомендуемый размер: 500x500px</small>
                        </div>
                        <div id="imagePreview"></div>
                        <input type="file" id="productImage" accept="image/*" style="display: none;" name="img">
                        @error('img') <span class="text_error"> {{$message}} </span> @enderror
                    </div>

                    <div class="form-section">
                        <h2>Категория</h2>
                        <div class="form-group">
                            <label for="productDescription">Категория товара</label>
                            <select name="category_name" class="form-control">
                                <option
                                    value="popular" {{ $product->category_name === 'popular' ? 'selected="selected"' : '' }}>
                                    Популярное
                                </option>
                                <option
                                    value="seasonal" {{ $product->category_name === 'seasonal' ? 'selected="selected"' : '' }}>
                                    Сезонное
                                </option>
                            </select>
                            @error('category_name') <span class="text_error"> {{$message}} </span> @enderror
                        </div>
                    </div>

                    <!-- Описание -->
                    <div class="form-section">
                        <h2>Описание</h2>
                        <div class="form-group">
                            <label for="productDescription">Описание товара</label>
                            <textarea id="productDescription" class="form-control"
                                      placeholder="Подробное описание товара..."
                                      name="description">{{$product->description}}</textarea>
                            @error('description') <span class="text_error">{{$message}}</span> @enderror
                        </div>
                    </div>

                    <!-- Кнопки действий -->
                    <div class="form-actions">
                        <a href="/admin"><button type="button" class="btn btn-secondary">Отмена</button></a>
                        <button type="submit" class="btn btn-primary">Редактировать товар</button>
                    </div>
                </div>
            </form>
        </main>
    </div>

@endsection
