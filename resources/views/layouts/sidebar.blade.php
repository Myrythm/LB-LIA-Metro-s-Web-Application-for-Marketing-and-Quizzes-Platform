
<header id="header" class="header fixed-top d-flex align-items-center">
    <div class="d-flex align-items-center justify-content-between">
      <a href="" class="logo d-flex align-items-center">
        <img src="" alt="">
        <span class="d-none d-lg-block">LB LIA Metro Dashboard</span>
        <i class="bi bi-list toggle-sidebar-btn"></i>
      </a>
    </div><!-- End Logo -->
</header><!-- End Header -->

<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed " href="/dashboard">
          <i class="bi bi-layout-text-window-reverse">
            </i><span>Quiz</span></i>
        </a>
      </li><!-- End Tables Nav -->
      @can('admin')
      <li class="nav-item">
        <form action="/users">
            @csrf
            <button type="submit" class="nav-link collapsed">
                <i class="bi bi-layout-text-window-reverse"></i>
                Users
            </button>
        </form>
      </li>
      @endcan
      <li class="nav-item">
        <a class="nav-link collapsed " href="">
          <i class="bi bi-layout-text-window-reverse">
            </i><span>Profile</span></i>
        </a>
      </li><!-- End Tables Nav -->
      <li class="nav-item">
        <form action="/logout" method="post">
            @csrf
            <button type="submit" class="nav-link collapsed">
                <i class="bi bi-box-arrow-in-right"></i>
                Logout
            </button>
        </form>
      </li>
    </ul>
</aside><!-- End Sidebar-->