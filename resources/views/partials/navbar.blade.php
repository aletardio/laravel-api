<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-dark sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                {{ Route::currentRouteName() }}
                <a class="nav-link text-white {{ Route::currentRouteName() == 'admin.dashboard' ? 'bg-secondary' : '' }}"
                    href="{{ route('admin.dashboard') }}">
                    <i class="fa-solid fa-tachometer-alt fa-lg fa-fw"></i> Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ Route::currentRouteName() == 'admin.projects.index' ? 'bg-secondary' : '' }}"
                    href="{{ route('admin.projects.index') }}">
                    <i class="fa-solid fa-newspaper fa-lg fa-fw"></i> Projects
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ Route::currentRouteName() == 'admin.types.index' ? 'bg-secondary' : '' }}"
                    href="{{ route('admin.types.index') }}">
                    <i class="fa-solid fa-folder fa-lg fa-fw"></i> Types
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ Route::currentRouteName() == 'admin.technologies.index' ? 'bg-secondary' : '' }}"
                    href="{{ route('admin.technologies.index') }}">
                    <i class="fa-solid fa-code fa-lg fa-fw"></i> Technologies
                </a>
            </li>
        </ul>
    </div>
</nav>
