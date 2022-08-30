<!-- Navbar -->
<nav class="cek" style="display:flex; color:white; justify-content:center; align-items:center; background-color: #f9f9f9; padding: 0 2.5rem;">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <h4 style="color: black;">RCI</h4>
    </li>
  </ul>

  <!-- SEARCH FORM -->
 <!--  <form class="form-inline ml-3">
    <div class="input-group input-group-sm">
      <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
      <div class="input-group-append">
        <button class="btn btn-navbar" type="submit">
          <i class="fas fa-search"></i>
        </button>
      </div>
    </div>
  </form> -->

  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">
    <!-- Messages Dropdown Menu -->
    <li class="nav-item dropdown">
      <a class="nav-link" data-toggle="dropdown" href="#">
        <i class="far fa-user" style="color: black;"></i>
      </a>
      <div class="dropdown-menu dropdown-menu-right">
        <a href="<?= base_url('pelapor/profile'); ?>" class="dropdown-item">
          <i class="far fa-fw fa-user"></i> Profil
        </a>
        <a href="<?= base_url('landing/logout'); ?>" class="dropdown-item">
          <i class="fas fa-fw fa-sign-out-alt"></i> Keluar
        </a>
      </div>
    </li>
  </ul>
</nav>
<!-- /.navbar -->