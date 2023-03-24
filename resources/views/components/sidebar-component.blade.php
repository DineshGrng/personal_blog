<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="index.html"> <img alt="image" src="/assets/img/logo.png" class="header-logo" /> <span
            class="logo-name">Otika</span>
        </a>
      </div>
      <ul class="sidebar-menu">
        <li class="menu-header">Main</li>
        <li class="dropdown active">
          <a href="{{ route('dashboard') }}" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
        </li>

        <li class="dropdown ">
            <a href="{{ route('category.index') }}" class="nav-link"><i data-feather="command"></i><span>Categories</span></a>
          </li>

          <li class="dropdown ">
            <a href="{{ route('post.index') }}" class="nav-link"><i data-feather="mail"></i><span>Post</span></a>
          </li>

        </ul>
    </aside>
  </div>
