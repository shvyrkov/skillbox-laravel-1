<div class="blog-post">
    <h4 class="blog-post-title"><a href="articles/{{ $article->slug }}">{{ $article->title }}</a></h4>
    <p class="blog-post-meta">
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="published"
            @if($article->published)
                checked
            @endif
            >
            <label class="form-check-label" for="published">Опубликовано</label>
        </div>{{ $article->created_at->toFormattedDateString() }}
    </p>
    <p><strong>Краткое описание: </strong>{{ $article->brief }}</p>
    <hr>
</div><!-- /.blog-post -->
