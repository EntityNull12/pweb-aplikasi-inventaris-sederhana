<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <form action="/logout" method="post">
          @csrf
          @method('post')
          <button type="submit" class="btn btn-outline-danger btn-sm">
              <i class="fas fa-sign-out-alt mr-2"></i>Log Out
          </button>
      </form>
    
    </ul>
  </nav>
