        <nav class="main-header navbar navbar-expand navbar-white navbar-light w-75">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="p-2 pt-3 d-flex text-dark" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="{{ route('index') }}" class="nav-link">Baş Sahypa</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="{{ route('about.index') }}" class="nav-link">Biz barada</a>
                </li>
            </ul>

            <ul class="navbar-nav ml-auto">
                @auth
                <li class="nav-item">
                    <a class="dropdown-item" href="#logout" onclick="document.getElementById('logout').submit();">
                        <i class="fas fa-sign-out-alt" title="Ulgamdan çyk"></i>
                        <form action="{{ route('logout') }}" method="post" class="d-none" id="logout">
                            @csrf
                        </form>
                    </a>
                </li>
                @endauth
            </ul>
        </nav>