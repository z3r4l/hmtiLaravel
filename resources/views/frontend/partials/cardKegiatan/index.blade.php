<section class="container">
    <div class="row row-card  d-flex justify-content-center">

        @foreach ($posts as $p)
        <div class="col-lg-4 mt-4">
            <div class="card card-kegiatan shadow-sm h-100">
                <div class="card-image-kegiatan">
                    <div class="hover-text">
                        <img src="{{ asset('storage/'.$p->image) }}" class="card-img-top" alt="...">
                    </div>
                    <div class="image-overlay"></div>
                </div>
                <div class="card-body">

                    <h3 class="card-title">{{ Str::limit($p->title,60) }}</h3>
                    <div class="text-left my-2">
                        <div class="sub-cat text-truncate mt-2"><span
                                class="badge background-color text-uppercase">Category</span> <a
                                href="/categories/{{ $p->category->slug }}"
                                class="text-decoration-none">{{$p->category->name}}</a></div>
                    </div>
                    <p class="card-text">{!!Str::limit( $p->excerpt , 100)!!}</p>


                </div>

                <div class="card-footer py-3 background-color">
                    <div class="card-footer__info">
                        <span class="text-white"><img src="/img/icon/calendar.svg" class="me-1 calendar" alt="icon">
                            {{ $p->created_at->diffForHumans()}}</span>
                        <span class="read-more">
                            <a class="text-white text-decoration-none read-more-1 text-uppercase"
                                href="/posts/{{ $p->slug }}">Lihat
                                Selengkapnya </a>
                        </span>
                    </div>
                </div>

            </div>
        </div>
        @endforeach
    </div>
</section>