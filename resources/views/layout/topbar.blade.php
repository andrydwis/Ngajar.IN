
<!-- End of Topbar -->

<!-- Favicons -->
<link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

 

<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
       
      <h1 class="logo mr-auto"><a href="index.html">NGAJAR.IN</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
        <li class="drop-down">
        </li>
          

          @guest
          <li><a href="#hero">Home</a></li>
          <li><a href="#login">Login</a></li>
          <li><a href="#register">Register</a></li>          
          <li><a href="#about">About</a></li>          
          <li><a href="#team">Team</a></li>
          @endguest
          
          @auth
          <li><a href="{{ route('dashboard') }}">Home</a></li>
          @if(Auth::user()->role == 'client')
          <li><a href="{{ route('dashboard.mentor-list') }}">Mentor List</a></li>
          <li><a href="{{ route('dashboard.order-request', ['user' => auth()->user()]) }}">Order Request</a></li>
          <li><a href="{{ route('dashboard.chat') }}">Chat</a></li>
          @endif
          @if(Auth::user()->role == 'mentor')
          <li><a href="{{ route('dashboard.schedule') }}">Schedule</a></li>
          <li><a href="{{ route('dashboard.skill') }}">Skill</a></li>
          <li><a href="{{ route('dashboard.mentor-order-request', ['user' => auth()->user()]) }}">Order Request</a>
          <li><a href="{{ route('dashboard.chat') }}">Chat</a></li>          
          <li><a href="{{ route('dashboard.user-payment') }}">User payment</a></li>
          @endif
          @if(Auth::user()->role == 'admin')
          <li><a href="{{ route('dashboard.user-unverified') }}">User Unverified</a></li>
          <li><a href="{{ route('dashboard.user-verified') }}">User Verified</a></li>
          <li><a href="{{ route('dashboard.user-skill') }}">User Skill</a></li>
          <li><a href="{{ route('dashboard.chat') }}">Chat</a>
          <li><a href="{{ route('dashboard.payment-request') }}">Payment Request</a></li>
                
          @endif
          
          <li><a href="{{ route('dashboard.profile') }}">Edit Profile</a></li>
          
          <li class="nav-item dropdown no-arrow mx-1">
          <a class="dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-bell fa-fw"></i>
              <!-- Counter - Alerts -->
              @if (auth()->user()->unreadNotifications->count() > 0)
              <span class="badge badge-danger badge-counter">{{auth()->user()->unreadNotifications->count()}}</span>
              @endif
          </a>
          <!-- Dropdown - Alerts -->
          <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
              <h6 class="dropdown-header">
                  Notification
              </h6>
              @forelse(auth()->user()->unreadNotifications->groupBy('data') as $notifications)
              @foreach($notifications->unique('data') as $notification)
              @if($notification->type == 'App\Notifications\newMessage')
              <a class="dropdown-item d-flex align-items-center" href="{{ route('dashboard.chat') }}">
                  <div class="mr-3">
                      <div class="icon-circle bg-primary">
                          <i class="fas fa-envelope text-white"></i>
                      </div>
                  </div>
                  <div>
                      <div class="small text-gray-500">{{ $notification->created_at->diffForHumans() }}</div>
                      <span class="font-weight-bold">Ada {{auth()->user()->unreadNotifications->where('data', $notification->data)->count('id')}} pesan baru dari {{ $notification->data['from']}}</span>
                  </div>
              </a>
              
              @endif
              @endforeach
              @empty
              <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                      <div class="icon-circle bg-primary">
                          <i class="fas fa-cog text-white"></i>
                      </div>
                  </div>
                  <div>
                      <div class="small text-gray-500">...</div>
                      <span class="font-weight-bold">Tidak ada notifikasi baru</span>
                  </div>
              </a>
              @endforelse
              <a class="dropdown-item text-center small text-gray-500" href="{{ route('dashboard.mark-as-read-all') }}">Mark all as read</a>
          </div>
      </li>

      
      <li><form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button class="btn btn-danger" type="submit">
                        
                        Logout
                    </button>
                </form> </li>
          
          @csrf

          @endauth

      </nav><!-- .nav-menu -->
      
    </div>
  </header>

  