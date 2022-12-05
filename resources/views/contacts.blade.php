@extends ('layout.master')
@section('content')

    <div class="col-md-8 blog-main">
        <h2 class="pb-3 mb-4 font-italic border-bottom">
            {{ $title }}
        </h2>

        <div class="blog-post">
            <h4 class="blog-post-title">Форма обратной связи.</h4>

            @include('layout.errors')

            <form method="post" action="/admin">

                @csrf

                <div class="mb-3">
                    <label for="inputEmail" class="form-label">E-mail: </label>
                    <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Введите ваш e-mail">
                </div>
                <div class="mb-3">
                    <label for="inputBody" class="form-label">Сообщение: </label>
                    <textarea class="form-control" id="inputBody" name="body" aria-label="Введите текст статьи" placeholder="Введите ваше сообщение."></textarea>
                </div>
                <br>

                <button type="submit" class="btn btn-primary">Отправить</button>
            </form>
        </div><!-- /.blog-post -->

    </div><!-- /.blog-main -->
@endsection
