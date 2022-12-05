@extends ('layout.master')
@section('content')

    <div class="col-md-8 blog-main">
        <h2 class="pb-3 mb-4 font-italic border-bottom">
            {{ $title }} - форма для создания.
        </h2>

        <div class="blog-post">
            @include('layout.errors')

            <form method="post" action="/">

                @csrf

                <div class="mb-3">
                    <label for="inputSlug" class="form-label">Уникальный символьный код статьи для URL: </label>
                    <input type="text" class="form-control" id="inputSlug" name="slug" placeholder="должен состоять только из латинских символов, цифр, символов тире и подчеркивания">
                </div>
                <div class="mb-3">
                    <label for="inputTitle" class="form-label">Название статьи: </label>
                    <input type="text" class="form-control" id="inputTitle" name="title" placeholder="Введите название статьи от 5 до 100 символов">
                </div>
                <div class="mb-3">
                    <label for="inputBrief" class="form-label">Краткое описание статьи: </label>
                    <input type="text" class="form-control" id="inputBrief" name="brief" placeholder="Введите краткое описание статьи не более 255 символов">
                </div>
                <div class="mb-3">
                    <label for="inputBody" class="form-label">Полный текст статьи</label>
                    <textarea class="form-control" id="inputBody" name="body" aria-label="Введите текст статьи" placeholder="Введите текст статьи"></textarea>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="inputPublished" name="published" value="1" >
                    <label class="form-check-label" for="inputPublished">
                        Опубликовать?
                    </label>
                </div>
                <br>

                <button type="submit" class="btn btn-primary">Создать статью</button>
            </form>
        </div><!-- /.blog-post -->

    </div><!-- /.blog-main -->
@endsection
