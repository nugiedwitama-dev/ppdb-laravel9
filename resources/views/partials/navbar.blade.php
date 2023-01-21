<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
    <div class="container">
      <h1>
        <a class="navbar-brand fs-4" href="#">SMK SEMAK SEMAK</a>
      </h1>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" \
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ ($active === "home") ? 'active' : ''}}" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($active === "about") ? 'active' : ''}}" href="/pages/about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($active === "blog") ? 'active' : ''}}" href="/blog">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($active === "event") ? 'active' : ''}}" href="/event">Event</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($active === "psb") ? 'active' : ''}}" href="/psb">PSB</a>
          </li>
        </ul>

        <ul class="navbar-nav ms-auto">
             @auth
                <li class="nav-item dropdown">
                 <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" 
                    data-bs-toggle="dropdown" aria-expanded="false">
                   Wellcome back, {{ auth()->user()->name }}
                 </a>
                 <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                   <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-speedometer2"><span> Dashboard</span></i></a></li>
                   <li><hr class="dropdown-divider"></li>
                   <li>
                   <form action="/auth/logout" method="post">
                    @csrf
                      <button type="submit" class="dropdown-item">
                        <i class="bi bi-box-arrow-right"><span> Logout</span></i>
                      </button>
                   </form>
                   </li>
                 </ul>
               </li>
             @else
             <li class="nav-item">
               <h4><a href="/auth" class="nav-link {{ ($active === "auth") ? 'active' : ''}}">
                 <i class="bi bi-person-circle"> </i><small>Login</small></a></h4>
             </li>
             @endauth
           </ul>
      </div>
    </div>
  </nav>