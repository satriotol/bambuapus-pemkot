<nav class="navbar">
    <a href="#" class="sidebar-toggler">
        <i data-feather="menu"></i>
    </a>
    <div class="navbar-content">

        <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="notificationDropdown" role="button"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i data-feather="bell"></i>
                    <div class="indicator">
                        <div class="circle"></div>
                    </div>
                </a>
                <div class="dropdown-menu p-0" aria-labelledby="notificationDropdown">
                    <div class="px-3 py-2 d-flex align-items-center justify-content-between border-bottom">
                        {{-- <p>6 New Notifications</p>
                        <a href="javascript:;" class="text-muted">Clear all</a> --}}
                    </div>
                    <div class="p-1">
                        {{-- @foreach ($notifications as $notification) --}}
                            {{-- <a href="{{ $notification->data['url'] }}"
                                class="dropdown-item d-flex align-items-center py-2">
                                <div
                                    class="wd-30 ht-30 d-flex align-items-center justify-content-center bg-primary rounded-circle me-3">
                                    <i class="icon-sm text-white" data-feather="gift"></i>
                                </div>
                                <div class="flex-grow-1 me-2">
                                    <p>{{ $notification->data['message'] }} ({{ $notification->data['name'] }})</p>
                                    <p class="tx-12 text-muted">{{ $notification->created_at }}</p>
                                </div>
                            </a> --}}
                        {{-- @endforeach --}}
                    </div>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    @if (Auth::user()->image)
                        <img class="wd-30 ht-30 rounded-circle" src="{{ asset('uploads/' . Auth::user()->image) }}"
                            alt="profile">
                    @else
                        <img class="wd-30 ht-30 rounded-circle" src="{{ url('https://via.placeholder.com/30x30') }}"
                            alt="profile">
                    @endif
                </a>
                <div class="dropdown-menu p-0" aria-labelledby="profileDropdown">
                    <div class="d-flex flex-column align-items-center border-bottom px-5 py-3">
                        <div class="mb-3">
                            @if (Auth::user()->image)
                                <img class="wd-80 ht-80 rounded-circle"
                                    src="{{ asset('uploads/' . Auth::user()->image) }}" alt="">
                            @else
                                <img class="wd-80 ht-80 rounded-circle"
                                    src="{{ url('https://via.placeholder.com/80x80') }}" alt="">
                            @endif
                        </div>
                        <div class="text-center">
                            <p class="tx-16 fw-bolder">{{ Auth::user()->name }}</p>
                            <p class="tx-12 text-muted">{{ Auth::user()->email }}</p>
                        </div>
                    </div>
                    <ul class="list-unstyled p-1">
            </li>
            <li class="dropdown-item py-2">
                <a href="{{ route('profile.edit') }}" class="text-body ms-0">
                    <i class="me-2 icon-md" data-feather="edit"></i>
                    <span>Edit Profile</span>
                </a>
            </li>
            <li class="dropdown-item py-2">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a class="text-body ms-0" style="cursor: pointer;" :href="route('logout')"
                        onclick="event.preventDefault();
                        this.closest('form').submit();">
                        <i class="me-2 icon-md" data-feather="log-out"></i>
                        <span>Log Out</span>
                    </a>
                </form>
            </li>
        </ul>
    </div>
</nav>
