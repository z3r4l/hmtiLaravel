<nav class="navbar navbar-expand-lg navbar-warning bg-with">
  <div class="container">
    <img src="/img/hmti.jpeg" width="40" height="36" alt="LOGO HMTI">
    <a class="navbar-brand fw-bold" href="{{ url('/') }}">HMTI UIS</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
      aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav ms-auto fs-5 fw-bold">
        <a class="nav-link {{ Request::is('/*') ? 'active' : '' }}" href="{{ url('/') }}">Beranda</a>
        <a class="nav-link {{ Request::is('kegiatan') ? 'active' : '' }}" href="{{ url('/kegiatan') }}">Kegiatan</a>
        <a class="nav-link {{ Request::is('struktur') ? 'active' : '' }}" href="{{ url('/struktur') }}">Struktur</a>
        <a class="nav-link {{ Request::is('tentang') ? 'active' : '' }}" href="{{ url('/tentang') }}">Tentang</a>
        <ul class="navbar-nav">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle {{ Request::is('divisi*') ? 'active' : '' }}" href="#" role="button"
              data-bs-toggle="dropdown" aria-expanded="false">
              Divisi
            </a>
            <ul class="dropdown-menu dropdown-menu-end">
              <li><a class="dropdown-item" href="/divisi/litbang">Divisi Litbang</a></li>
              <li><a class="dropdown-item" href="/divisi/program">Divisi Program</a></li>
              <li><a class="dropdown-item" href="/divisi/humas">Divisi Humas</a></li>
              <li><a class="dropdown-item" href="/divisi/media">Divisi Media</a></li>
            </ul>
          </li>
        </ul>


      </div>
    </div>
  </div>
</nav>