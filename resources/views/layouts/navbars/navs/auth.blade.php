<nav class="navbar navbar-expand-lg " color-on-scroll="500">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"> {{ $navName }} </a>
        <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar burger-lines"></span>
            <span class="navbar-toggler-bar burger-lines"></span>
            <span class="navbar-toggler-bar burger-lines"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <ul class="nav navbar-nav mr-auto">
                <li class="nav-item">
                    <a href="#" class="nav-link" data-toggle="dropdown">
                        <i class=""></i>
                        <span class="d-lg-none">{{ __('Dashboard') }}</span>
                    </a>
                </li>
                <li class="dropdown nav-item">
                    <a href="{{route('page.index', 'notifications')}}" class="nav-link" >
                        <i class="nc-icon nc-bell-55"></i>
                        <span class="notification" id="notification">{{$count_not}}</span>
                        <span class="d-lg-none">{{ __('Notification') }}</span>
                    </a>
                    {{-- <ul class="dropdown-menu">
                        <a class="dropdown-item" href="#">{{ __('Notification 1') }}</a>
                        <a class="dropdown-item" href="#">{{ __('Notification 2') }}</a>
                        <a class="dropdown-item" href="#">{{ __('Notification 3') }}3</a>
                        <a class="dropdown-item" href="#">{{ __('Notification 4') }}</a>
                        <a class="dropdown-item" href="#">{{ __('Another notification') }}</a>
                    </ul> --}}
                </li>
               <li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('loanreqdashboard')}}">
                        <i class="bi bi-envelope-plus position-relative"></i>
                        <span class="notification" id="lonreq">{{$count_req}}</span>
                        <span class="d-lg-none">{{ __("LOAN REQUESTS") }}</span>
                    </a>
                </li>
               </li>

                {{-- <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nc-icon nc-zoom-split"></i>
                        <span class="d-lg-block">&nbsp;{{ __('Search') }}</span>
                    </a>
                </li> --}}
            </ul>
            <ul class="navbar-nav   d-flex align-items-center">
                <li class="nav-item">
                   
                    <a href="#"></a>
                        
                    
              
                        
                </li>
                {{-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="no-icon">{{ __('Dropdown') }}</span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">{{ __('Action') }}</a>
                        <a class="dropdown-item" href="#">{{ __('Another action') }}</a>
                        <a class="dropdown-item" href="#">{{ __('Something') }}</a>
                        <a class="dropdown-item" href="#">{{ __('Something else here') }}</a>
                        <div class="divider"></div>
                        <a class="dropdown-item" href="#">{{ __('Separated link') }}</a>
                    </div>
                </li> --}}
                <li class="nav-item">
                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                        @csrf
                        <a class="text-danger" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> {{ __('Log out') }} </a>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>
<script>
    // Get a reference to the notification element
    const notificationElement = document.getElementById('notification');

    // Initial value of {{$count_not}}
    const initialCount = {{$count_not}};

    // Function to update the notification based on the count
    function updateNotification(count) {
        if (count === 0) {
            notificationElement.style.display = 'none'; // Hide the notification
        } else {
            notificationElement.style.display = 'inline-block'; // Show the notification
        }

        notificationElement.textContent = count; // Update the content of the notification
    }

    // Initial update
    updateNotification(initialCount);
</script>
