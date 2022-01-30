        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <div class="sidebar">
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="info">
                        <a href="{{ route('admin.index') }}" class="d-block text-uppercase">{{ auth()->user()->name }}</a>
                    </div>
                </div>

                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item">
                            <a href="{{ route('admin.user') }}" class="nav-link">
                                <i class="fas fa-user mr-1"></i>
                                <p> Ulanyjylar </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.history_action') }}" class="nav-link">
                                <i class="fas fa-file-alt mr-1"></i>
                                <p> Geçirilen çäreler </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.home') }}" class="nav-link">
                                <i class="fas fa-home mr-1"></i>
                                <p> Baş sahypa </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.about') }}" class="nav-link">
                                <i class="fas fa-users-cog mr-1"></i>
                                <p> Biz barada </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.gallery') }}" class="nav-link">
                                <i class="fas fa-images mr-1"></i>
                                <p> Galereýa </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.foreign') }}" class="nav-link">
                                <i class="fas fa-atlas mr-1"></i>
                                <p> Dünýädäki täzelikler </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.our_country') }}" class="nav-link">
                                <i class="fas fa-book mr-1"></i>
                                <p> Ýurdymyzdaky täzelikler </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.contact') }}" class="nav-link">
                                <i class="fas fa-envelope"></i>
                                <p> Teswirler </p>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>