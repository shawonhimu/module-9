<section class="navbarBG sticky-top">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container-fluid">
                <button class="navbar-toggler nav-light" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="#"><img src={{ asset('img/logo.png') }} alt="" /></a>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                    <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link {{ '/' == request()->path() ? 'active' : '' }}" aria-current="page"
                                href={{ url('/') }}>Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ 'about' == request()->path() ? 'active' : '' }}"
                                href={{ url('about') }}>About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ 'service' == request()->path() ? 'active' : '' }}"
                                href={{ url('service') }}>Sevices</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ 'portfolio' == request()->path() ? 'active' : '' }}"
                                href={{ url('portfolio') }}>Portfolio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ 'contact' == request()->path() ? 'active' : '' }}"
                                href={{ url('contact') }}>Contact</a>
                        </li>
                    </ul>
                    <div>
                        <a href='files/Shawon Himu Resume .pdf' class="btn myBtn" target="_blank">Download
                            CV</a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</section>
