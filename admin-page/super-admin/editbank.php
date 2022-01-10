<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Dashboard &mdash; T-Bank</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- CSS Libraries -->

  <!-- Template CSS -->
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="stylesheet" href="../assets/css/components.css">
</head>

<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
          </ul>
        </form>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
              <img alt="image" src="../assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
              <div class="d-sm-none d-lg-inline-block">Hi, Ujang Maman</div>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
              <div class="dropdown-title">Logged in 5 min ago</div>
              <a href="features-profile.html" class="dropdown-item has-icon">
                <i class="far fa-user"></i> Profile
              </a>
              <a href="features-activities.html" class="dropdown-item has-icon">
                <i class="fas fa-bolt"></i> Activities
              </a>
              <a href="features-settings.html" class="dropdown-item has-icon">
                <i class="fas fa-cog"></i> Settings
              </a>
              <div class="dropdown-divider"></div>
              <a href="LogOut.php" class="dropdown-item has-icon text-danger" onclick="return confirm('Yakin ingin logout?')">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>

      <!-- Side Navigation Bar Area -->
      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.php">T-Bank</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.php">TB</a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="nav-item dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="index-0.html">General Dashboard</a></li>
                <li><a class="nav-link" href="index.php">Ecommerce Dashboard</a></li>
              </ul>
            </li>
            <li class="menu-header">Starter</li>
            <li class="active">
            <li class="nav-item dropdown">
              <a href="index.php" class="nav-link has-dropdown"><i class="far fa-square"></i><span>Data</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="customer.php">Customer</a></li>
                <li><a class="nav-link" href="courier.php">Kurir</a></li>
                <li><a class="nav-link" href="waste-bank.php">Bank Sampah</a></li>
                <li><a class="nav-link" href="waste.php">Waste</a></li>
                <li><a class="nav-link" href="transaction.php">Transaksi</a></li>
              </ul>
            </li>
          </ul>

          <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
              <i class="fas fa-rocket"></i> Documentation
            </a>
          </div>
        </aside>
      </div>
      <!-- Side Navigation Banr End -->

      <!-- Main Content Area -->
      <div class="main-content">
        <section class="section">
          <div class="section-body">
            <section class="section">
              <div class="section-header">
                <h1>Edit Waste bank</h1>
              </div>

              <?php
              $id = $_GET['WasteBankId'];
              include 'koneksi.php';
              $autoincreament = 1;
              $wastebank = mysqli_query($conn, "SELECT * FROM wastebank " . $id);
              $content = mysqli_fetch_array($wastebank);
              ?>
              <form method="POST" action="submitwastebank.php">
                <input type="hidden" name="WasteBankId" value="<?= $content['WasteBankId']; ?>">
                <div class="card-body">
                  <div class="form-group">
                    <label>Nama</label>
                    <input type="text" class="form-control" name="WasteBankName" value="<?= $content['WasteBankName']; ?>">
                  </div>
                  <div class="form-group">
                    <label>Lokasi</label>
                    <input type="text" class="form-control" name="WasteBankLocation" value="<?= $content['WasteBankLocation']; ?>">
                  </div>
                  <div class="form-group">
                    <label>Kontak</label>
                    <input type="text" class="form-control" name="WasteBankContact" value="<?= $content['WasteBankContact']; ?>">
                  </div>
                  <div class="form-group">
                    <label>Deskripsi</label>
                    <input type="text" class="form-control" name="WasteBankDesc" value="<?= $content['WasteBankDesc']; ?>">
                  </div>
                  <div class="form-group">
                    <label>Latitude</label>
                    <input type="text" class="form-control" name="maplat" value="<?= $content['maplat']; ?>">
                  </div>
                  <div class="form-group">
                    <label>Longitude</label>
                    <input type="text" class="form-control" name="maplon" value="<?= $content['maplon']; ?>">
                  </div>
                  <div class="text-right">
                    <button class="btn btn-primary mr-1" type="submit" name="updatebank">Submit</button>
                  </div>
                </div>
              </form>

            </section>
          </div>
          <footer class="main-footer">
            <div class="footer-left">
              Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="https://nauval.in/">Muhamad Nauval Azhar</a>
            </div>
            <div class="footer-right">
              2.3.0
            </div>
          </footer>
      </div>
    </div>

    <!-- General JS Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="../assets/js/stisla.js"></script>

    <!-- JS Libraies -->

    <!-- Template JS File -->
    <script src="../assets/js/scripts.js"></script>
    <script src="../assets/js/custom.js"></script>

    <!-- Page Specific JS File -->
</body>

</html>