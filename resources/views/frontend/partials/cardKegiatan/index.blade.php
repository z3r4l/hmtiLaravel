<div class="container">
    <div class="row row-card">
        @foreach ($posts as $p)
        <div class="col-lg-4 col-12">
            <a href="/posts/{{ $p->slug }}" class="text-decoration-none text-dark">
                <div class="card-box p-4">
                    <img src="/img/hero-image.jpeg" class="card-img-top card-img" alt="...">
                    <h5 class="">{{ Str::limit($p->title,40) }}</h5>
                    <p class="card-text"><i class="bi bi-calendar"></i> <small>{{
                            $p->created_at->diffForHumans()
                            }}</small>
                    </p>
                    <p class="">{!!Str::limit( $p->body , 80)!!}</p>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>