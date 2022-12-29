<nav class="navbar navbar-expand-md navbar-light bg-white">
    <a class="navbar-brand" href="{{ url('/') }}">
        <img src="{{ asset('assets/images/logo-white.svg') }}" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Left Side Of Navbar -->
        <ul class="navbar-nav me-auto">

        </ul>

        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav ms-auto">
            <!-- Authentication Links -->
            <li class="nav-item">
                <a href="" class="nav-link">
                    Dr. Dilber ile tanışın
                </a>
            </li>
            <li class="nav-item dd">
                <a class="nav-link" href="#" role="button">
                    Operasyonlar
                </a>
                <div class="dropdown-content">
                    <div class="dd-upper">
                        <a class="menu-item active" data-menu-target="1" href="">Burun Estetiği</a>
                        <a class="menu-item" data-menu-target="2" href="">Burun Estetiği</a>
                        <a class="menu-item" data-menu-target="3" href="">Yüz Estetiği</a>
                        <a class="menu-item" data-menu-target="4" href="">Meme Estetiği</a>
                    </div>
                    <div class="dd-content">
                        <div data-menu="1" class="menu-content active">
                            <a class="menu-item" href="">Revizyon Burun Estetiği</a>
                            <a class="menu-item" href="">Revizyon Burun Estetiği</a>
                            <a class="menu-item" href="">Burun Deviasyon Ameliyatı</a>
                            <a class="menu-item" href="">Burun Estetiği</a>
                            <a class="menu-item" href="">Burun Estetiği</a>
                            <a class="menu-item" href="">Burun Estetiği</a>
                            <a class="menu-item" href="">Burun Estetiği</a>
                            <a class="menu-item" href="">Burun Estetiği</a>
                        </div>
                        <div data-menu="2" class="menu-content">
                            <a class="menu-item" href="">Revizyon Burun Estetiği</a>
                            <a class="menu-item" href="">Burun Deviasyon Ameliyatı</a>
                            <a class="menu-item" href="">Burun Estetiği</a>
                        </div>
                        <div data-menu="3" class="menu-content">
                            <a class="menu-item" href="">Revizyon Burun Estetiği</a>
                            <a class="menu-item" href="">Burun Deviasyon Ameliyatı</a>
                            <a class="menu-item" href="">Burun Estetiği</a>
                        </div>
                        <div data-menu="4" class="menu-content">
                            <a class="menu-item" href="">Revizyon Burun Estetiği</a>
                            <a class="menu-item" href="">Burun Deviasyon Ameliyatı</a>
                            <a class="menu-item" href="">Burun Estetiği</a>
                        </div>


                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link">
                    Galeri
                </a>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link">
                    Hasta kılavuzu
                </a>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link">
                    Sorular
                </a>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link">
                    Blog
                </a>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link">
                    İletişim
                </a>
            </li>
            <li class="nav-item dd">
                <a class="nav-link" href="#" role="button">
                    TR
                </a>

                <div class="dropdown-content">
                    <div class="dd-upper">
                        <a class="menu-item disabled" href="">Dil Seçimi</a>
                    </div>
                    <div class="dd-content">
                        <div class="menu-content active">
                            <a class="menu-item" href="">Türkçe <img class="lang-flag"
                                    src="{{ asset('/assets/lang_flags/tr.png') }}" alt=""></a>
                            <a class="menu-item" href="">English <img class="lang-flag"
                                    src="{{ asset('/assets/lang_flags/en.png') }}" alt=""></a>
                            <a class="menu-item" href="">Deutsch <img class="lang-flag"
                                    src="{{ asset('/assets/lang_flags/de.png') }}" alt=""></a>
                        </div>

                    </div>
                </div>
            </li>
        </ul>
    </div>
</nav>
