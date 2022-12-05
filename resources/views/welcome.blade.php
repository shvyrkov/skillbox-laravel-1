@extends ('layout.master')
@section('content')

<div class="col-md-8 blog-main">
    <h2 class="pb-3 mb-4 font-italic border-bottom">
        {{ $title }} - список статей
    </h2>

    @foreach($articles as $article)
        @include('layout.item')
    @endforeach

    <nav class="blog-pagination">
        <a class="btn btn-outline-primary" href="#">Older</a>
        <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
    </nav>

</div><!-- /.blog-main -->

@endsection
