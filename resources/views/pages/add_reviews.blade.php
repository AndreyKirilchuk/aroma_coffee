@extends('layouts.index')

@section('content')
    <form class="review_form container" action="/reviews/add" method="post" enctype="multipart/form-data">
        @csrf
        <h2>Оставьте отзыв о нас:</h2>
        <p>Оцените качество продукта (от 1 до 5)</p>
        <fieldset class="rating" name="grade">
            <input type="radio" id="star5" name="grade" value="5" />
            <label for="star5" title="Отлично">★</label>
            <input type="radio" id="star4" name="grade" value="4" />
            <label for="star4" title="Хорошо">★</label>
            <input type="radio" id="star3" name="grade" value="3" />
            <label for="star3" title="Средне">★</label>
            <input type="radio" id="star2" name="grade" value="2" />
            <label for="star2" title="Плоховато">★</label>
            <input type="radio" id="star1" name="grade" value="1" />
            <label for="star1" title="Очень плохо">★</label>
        </fieldset>
        @error('grade') <span class="text_error"> {{$message}}</span> @enderror
        <div class="image-upload">
            <div class="upload-placeholder">
                Нажмите для загрузки изображения<br>
                <small>Рекомендуемый размер: 500x500px</small>
            </div>
            <div id="imagePreview"></div>
            <input type="file" id="productImage" accept="image/*" style="display: none;" name="img">
            @error('img') <span class="text_error"> {{$message}} </span> @enderror
        </div>
        <br><br><br>
        <textarea placeholder="Ваш отзыв..." rows="4" cols="50" required name="text">{{old('text')}}</textarea>
        @error('text') <span class="text_error"> {{$message}}</span> @enderror
        <br />
        <button type="submit">Отправить отзыв</button>
    </form>

@endsection
