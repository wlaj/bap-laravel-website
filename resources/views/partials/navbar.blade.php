<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="{{ route('homepage') }}">Browser</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="{{ route('contact') }}">Gallery</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('post.posts') }}">Posts</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Browsers
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{ route('show-name', ['name' => 'Google']) }}">Google</a>
          <a class="dropdown-item" href="{{ route('show-name', ['name' => 'Google']) }}">Firefox</a>
          <a class="dropdown-item" href="{{ route('show-name', ['name' => 'Google']) }}">Safari</a>
          <a class="dropdown-item" href="{{ route('show-name', ['name' => 'Google']) }}">Brave</a>
        </div>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <a href="{{ route('post.posts') }}" class="btn btn-outline-primary my-2 my-sm-0" type="submit">Fotos uploaden</a>
    </form>
  </div>
</nav>
