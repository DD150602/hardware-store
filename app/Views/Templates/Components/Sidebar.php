  <!-- Sidebar -->
  <aside class="col-md-3 col-lg-2 bg-light p-4 shadow-sm">
    <div class="d-flex align-items-center mb-4">
      <span class="fw-bold h5">B.T.S</span>
    </div>

    <nav class="nav flex-column">
      <!-- Products -->
      <a href="<?= base_url('Products') ?>" class="nav-link text-dark py-2">Products</a>

      <!-- Users -->
      <?php if (session('login_info')['user_role'] != 'Employee') : ?>
        <a href="<?= base_url('Users') ?>" class="nav-link text-dark py-2">Users</a>
      <?php endif; ?>

      <!-- Sales -->
      <a href="<?= base_url('Sales') ?>" class="nav-link text-dark py-2">Sales</a>

      <!-- Clients -->
      <a href="<?= base_url('Clients') ?>" class="nav-link text-dark py-2">Clients</a>

      <!-- Purchases -->
      <a href="<?= base_url('Purchases') ?>" class="nav-link text-dark py-2">Purchases</a>

      <!-- Suppliers -->
      <a href="<?= base_url('Suppliers') ?>" class="nav-link text-dark py-2">Suppliers</a>

      <!-- Settings -->
      <a href="" class="nav-link text-dark py-2">Settings</a>

      <!-- Logout -->
      <hr class="my-3"> <!-- Divider -->
      <a href="<?php echo base_url('logout'); ?>" class="nav-link text-danger py-2">
        <i class="fas fa-sign-out-alt"></i> Logout
      </a>
    </nav>
  </aside>