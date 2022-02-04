
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
	<a href="<?= $this->request->getAttribute('webroot') ?>dashboard" class="brand-link">
      <img src="<?= $this->request->getAttribute('webroot') ?>dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light"><?= __('Logejo Control Panel') ?></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= $this->request->getAttribute('webroot') ?>dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php
	if (isset($currentUser))
	{
	    echo $currentUser;
	}
  ?>
	<span class="right badge badge-danger"><?php echo $currentUserRole; ?></span>
  </a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="<?= $this->request->getAttribute('webroot') ?>dashboard" class="nav-link <?= ($selectedPage == "dashboard") ? 'active' : ''; ?>">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                <?= __('Dashboard') ?>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= $this->request->getAttribute('webroot') ?>users" class="nav-link <?= ($selectedPage == "users") ? 'active' : ''; ?>">
              <i class="nav-icon fas fa-user-friends"></i>
              <p>
                <?= __('Users') ?>
                <span class="right badge badge-danger">BETA</span>
              </p>
            </a>
          </li>         
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
