<nav class="navbar navbar-light fixed-top">
    <div class="container">
        <a class="navbar-brand" href="/newsfeed">
            <img src="/img/socialme2.svg" alt="SocialMe Logo" width="100">
        </a>
      <form class="d-flex search">
      <i class="bi bi-search"></i>
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <div class="box arrow-top">
        <a href=""><img src="/img/avatar.png" alt="profile picture">mohammad elnayef</a>
        <a href=""><img src="/img/avatar.png" alt="profile picture">alex vasile</a>
        <a href=""><img src="/img/avatar.png" alt="profile picture">mihai costel</a>
        <a href=""><img src="/img/avatar.png" alt="profile picture">Laurentiu Dan</a>
        <a href=""><img src="/img/avatar.png" alt="profile picture">Petru Ion</a>
        </div>
      </form>
      <div class="account">
          <a href="/newsfeed"><i class="bi bi-house-door-fill"></i>Newsfeed</a>
          <a href="/profile"><img src="/img/avatar.png" alt="profile picture">{{ Auth::user()->name }}</a>
          <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="bi bi-door-open-fill"></i>Sign Out</a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST">
          @csrf
          </form>
          
      </div>
    </div>
</nav>