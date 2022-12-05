@extends ('layout.master')
@section('content')

    <div class="col-md-8 blog-main">
        <h3 class="pb-3 mb-4 font-italic border-bottom">
            Статья
        </h3>
        <div class="blog-post">
            <h2 class="blog-post-title">{{ $article->title }}</h2>
            <p class="blog-post-meta">Создана: {{ $article->created_at }}</p>
            <p><strong>Текст: </strong><em>{{$article->body}}</em></p>
            <hr>
            <a href="/">Вернуться к списку статей</a>
        </div><!-- /.blog-post -->
    </div><!-- /.blog-main -->
@endsection
