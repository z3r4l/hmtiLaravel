<nav class="navbar navbar-expand-lg navbar-warning bg-with">
  <div class="container">
    <img src="/img/hmti.jpeg" width="40" height="36" alt="LOGO HMTI">
    <a class="navbar-brand .navbar-font fw-bold ms-2" href="{{ url('/') }}">HMTI UIS</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
      aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav .navbar-font ms-auto fs-6 fw-bold">
        <a class="nav-link {{ Request::is('/*') ? 'active' : '' }}" href="{{ url('/') }}">Beranda</a>
        <a class="nav-link {{ Request::is('kegiatan') ? 'active' : '' }}" href="{{ url('/kegiatan') }}">Kegiatan</a>
        <a class="nav-link {{ Request::is('struktur') ? 'active' : '' }}" href="{{ url('/struktur') }}">Struktur</a>
        <a class="nav-link {{ Request::is('tentang') ? 'active' : '' }}" href="{{ url('/tentang') }}">Tentang</a>
        <ul class="navbar-nav .navbar-font">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle {{ Request::is('divisi*') ? 'active' : '' }}" href="#" role="button"
              data-bs-toggle="dropdown" aria-expanded="false">
              Divisi
            </a>
            <ul class="dropdown-menu dropdown-menu-end">
              <li><a class="dropdown-item bg-white {{ Request::is('divisi/litbang') ? 'active' : '' }}"
                  href="/divisi/litbang">Divisi
                  Litbang</a></li>
              <li><a class="dropdown-item bg-white {{ Request::is('divisi/program') ? 'active' : '' }}"
                  href="/divisi/program">Divisi Program</a></li>
              <li><a class="dropdown-item bg-white {{ Request::is('divisi/humas') ? 'active' : '' }}"
                  href="/divisi/humas">Divisi Humas</a></li>
              <li><a class="dropdown-item bg-white {{ Request::is('divisi/media') ? 'active' : '' }}"
                  href="/divisi/media">Divisi Media</a></li>
            </ul>
          </li>
        </ul>


      </div>
    </div>
  </div>
</nav>