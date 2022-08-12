<div class="container mt-5">
    <h3><span class="border-bottom border-2">EVENT AKAN DATANG</span></h3>
    <div class="wrapper">
        @foreach ($willpostsss as $wp)
        <a href="/willposts/{{ $wp->slug }}" class="text-decoration-none text-dark">
            <div class="item col">
                <div class="card mb-3">
                    <img src="https://source.unsplash.com/200x200?programming" width="300" height="300"
                        class="card-img-top" alt="...">
                    <div class="card-body pb-5">
                        <h5 class="card-title">{{ $wp->title }}</h5>
                        <p class="card-text"><small class="text-muted"><i class="bi bi-calendar"></i> {{
                                $wp->created_at->diffForHumans() }}</small></p>
                        <p class="card-text">{{ Str::limit($wp->excerpt,20) }}</p>
                    </div>
                </div>
            </div>
        </a>
        @endforeach
    </div>
</div>