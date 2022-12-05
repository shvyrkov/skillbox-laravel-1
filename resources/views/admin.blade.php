@extends ('layout.master')
@section('content')
    <div class="col-md-8 blog-main">
        <h2 class="pb-3 mb-4 font-italic border-bottom">
            {{ $title }}
        </h2>

        <table class="table table-bordered table-hover table-responsive">
            <thead class="thead-light ">
                <tr>
                    <th scope="col" class="text-center">E-mail</th>
                    <th scope="col" class="text-center">Сообщение</th>
                    <th scope="col" class="text-center">Дата получения</th>
                </tr>
            </thead>
            <tbody>
                @foreach($post as $message)
                    @include('layout.message')
                @endforeach
            </tbody>
        </table>

        <nav class="blog-pagination">
            <a class="btn btn-outline-primary" href="#">Older</a>
            <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
        </nav>

    </div><!-- /.blog-main -->
@endsection
