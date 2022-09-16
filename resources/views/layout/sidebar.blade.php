<nav class="sidebar">
    <div class="sidebar-header">
        <a href="#" class="sidebar-brand">
            BAMBUAPUS
        </a>
        <div class="sidebar-toggler not-active">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <div class="sidebar-body">
        <ul class="nav">
            <li class="nav-item nav-category">Main</li>
            <li class="nav-item {{ active_class(['dashboard']) }}">
                <a href="{{ route('dashboard') }}" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">Dashboard</span>
                </a>
            </li>
            <li class="nav-item nav-category">Laporan</li>
            @can(['laporan-index'])
                <li class="nav-item {{ active_class(['user_report.*']) }}">
                    <a href="{{ route('user_report.index') }}" class="nav-link">
                        <i class="link-icon" data-feather="message-square"></i>
                        <span class="link-title">Laporan</span>
                    </a>
                </li>
            @endcan
            @can(['status_laporan-index'])
                <li class="nav-item {{ active_class(['status.*']) }}">
                    <a href="{{ route('status.index') }}" class="nav-link">
                        <i class="link-icon" data-feather="message-square"></i>
                        <span class="link-title">Status Laporan</span>
                    </a>
                </li>
            @endcan()
            <li class="nav-item nav-category">Website</li>
            <li class="nav-item {{ active_class(['about.*']) }}">
                <a href="{{ route('about.index') }}" class="nav-link">
                    <i class="link-icon" data-feather="message-square"></i>
                    <span class="link-title">Tentang</span>
                </a>
            </li>
            <li class="nav-item {{ active_class(['slider.*']) }}">
                <a href="{{ route('slider.index') }}" class="nav-link">
                    <i class="link-icon" data-feather="message-square"></i>
                    <span class="link-title">Slider</span>
                </a>
            </li>
            <li class="nav-item {{ active_class(['socialMedia.*']) }}">
                <a href="{{ route('socialMedia.index') }}" class="nav-link">
                    <i class="link-icon" data-feather="message-square"></i>
                    <span class="link-title">Sosial Media</span>
                </a>
            </li>
            <li class="nav-item {{ active_class(['link.*']) }}">
                <a href="{{ route('link.index') }}" class="nav-link">
                    <i class="link-icon" data-feather="message-square"></i>
                    <span class="link-title">Link</span>
                </a>
            </li>
            @role('SUPERADMIN')
                <li class="nav-item nav-category">Manajemen User</li>
                <li class="nav-item {{ active_class(['user.*']) }}">
                    <a href="{{ route('user.index') }}" class="nav-link">
                        <i class="link-icon" data-feather="user"></i>
                        <span class="link-title">User</span>
                    </a>
                </li>
                <li class="nav-item {{ active_class(['admin.*']) }}">
                    <a href="{{ route('admin.index') }}" class="nav-link">
                        <i class="link-icon" data-feather="user"></i>
                        <span class="link-title">Admin</span>
                    </a>
                </li>
                <li class="nav-item {{ active_class(['role.*']) }}">
                    <a href="{{ route('role.index') }}" class="nav-link">
                        <i class="link-icon" data-feather="users"></i>
                        <span class="link-title">Role</span>
                    </a>
                </li>
                <li class="nav-item {{ active_class(['permission.*']) }}">
                    <a href="{{ route('permission.index') }}" class="nav-link">
                        <i class="link-icon" data-feather="user-check"></i>
                        <span class="link-title">Permission</span>
                    </a>
                </li>
            @endrole
        </ul>
    </div>
</nav>
