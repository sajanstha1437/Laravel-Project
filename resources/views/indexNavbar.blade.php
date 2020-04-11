<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="{{url('/')}}">HGBS</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
      <div id="leftNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="{{url('/index')}}">HomePage <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('/about')}}">About Us</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="{{url('/facilities')}}">Facilities </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('/gallery')}}">Gallery</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="{{url('/voice')}}">Student's Voice </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('/contact')}}">Contact Us</a>
            </li>
        </ul>
    </div>
    <div id="rightNav">
        <p class="logout">Logout<p>
    </div>
  </div>
</nav>