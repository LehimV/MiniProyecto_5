<ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex flex-row align-items-center justify-content-center mt-3" href="{{ route('dashboard') }}">
    <img src="../small_logo-03-white.svg" alt="ULogo" width="82" height="82">
  </a>

  <a class="sidebar-brand d-flex flex-row align-items-center justify-content-center" href="{{ route('dashboard') }}">
    <div class="sidebar-brand-text">School Management</div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Nav Item - Dashboard -->
  <li class="nav-item">
    <a class="nav-link" href="{{ route('dashboard') }}">
      <i class="fas fa-fw fa-home"></i>
      <span class="fw-bold fs-6">Dashboard</span></a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="{{ route('users') }}">
      <i class="fas fa-fw fa-users"></i>
      <span class="fw-bold fs-6">Usuarios</span></a>
  </li>


  <li class="nav-item">
    <a class="nav-link" href="{{ route('cursos') }}">
      <i class="fas fa-fw fa-book"></i>
      <span class="fw-bold fs-6">Cursos</span></a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="{{ route('relaciones') }}">
      <i class=" fas fa-fw fa-th-list"></i>
      <span class="fw-bold fs-6">Relaciones</span></a>
  </li>


  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>
</ul>