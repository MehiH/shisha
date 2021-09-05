<div class="navigation main-nav float-right d-none d-lg-block">
        <div class="group active" data-page-id="homepage-page">
            <ul>
                <li>
                    <a href="{{ route('home') }}">
                        HOME
                        <div class="progress-border">
                            <div class="progress-line"></div>
                        </div>
                    </a>
                </li>
                <li><a href='{{ route("reservation.list.venue","$token") }}'>VENUE RESERVATION</a></li>
                
                
                <li class="drop-down"><a href='{{ route("reservation.list","$token") }}'>RESERVATION <i class="fas fa-caret-down"></i></a>
                    <ul>
                        <li><a href='{{ route("reservation.list.pending","$token") }}'>Pending</a></li>
                        <li><a href='{{ route("reservation.list.confirmed","$token") }}'>Confirmed</a></li>
                        <li><a href='{{ route("reservation.list.canceled","$token") }}'>Canceled</a></li>
                    </ul>
                </li>
                <li><a href="{{ route('about_us') }}">REPORT</a></li>
            </ul>
        </div>
    </div>
    <a href="#/" class="logo"></a>