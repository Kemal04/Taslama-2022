<!-- Nav Bar Start -->
<div class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid">
        <a href="{{ route('index') }}" class="navbar-brand text-white mr-0 w-15">
            <img src="{{ asset('img/logo/logo.svg') }}" class="img-fluid">
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <div class="navbar-nav ml-auto ">
                <a href="{{ route('index') }}" class="nav-item nav-link">BAŞ SAHYPA</a>
                <a href="{{ route('about.index') }}" class="nav-item nav-link">BIZ BARADA</a>
                <a href="{{ route('gallery.index') }}" class="nav-item nav-link">GALLERY</a>
                <a href="{{ route('history_action.index') }}" class="nav-item nav-link">ÇÄRELER</a>
                <a href="{{ route('contact.index') }}" class="nav-item nav-link">HABARLAŞMAK</a>
            </div>
            @guest
            <a class="btn btn-green ml-5" style="border-radius: 30px;" href="{{ route('login') }}">
                HASAP AÇ
            </a>
            @else
            <div class="dropdown d-block">
                <a class="btn btn-green ml-5 dropdown-toggle" style="border-radius: 30px;" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ auth()->user()->name }}</a>
                <div class="dropdown-menu border-0 rounded-0" aria-labelledby="dropdown01" style="right: 0;">
                    @if(auth()->user()->is_admin)
                    <a class="dropdown-item" href="{{ route('admin.index') }}">
                        <i class="fas fa-user mr-1"></i> Admin
                    </a>
                    @endif
                    <a class="dropdown-item" href="{{ route('profil.index') }}">
                        <i class="fas fa-user mr-1"></i> Profil
                    </a>
                    <a class="dropdown-item" href="#logout" onclick="document.getElementById('logout').submit();">
                        <i class="fas fa-sign-out-alt mr-1"></i> Ulgamdan çyk
                        <form action="{{ route('logout') }}" method="post" class="d-none" id="logout">
                            @csrf
                        </form>
                    </a>
                </div>
            </div>
            @endguest
        </div>
    </div>
</div>
<!-- Nav Bar End -->
