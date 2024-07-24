<head>
  <!-- Other head elements -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-light" style='background: linear-gradient(to top,#00497d,#0279C8); transition: background 0.5s;'>
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars" style="color: white"></i></a>
    </li>
  </ul>

  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">
    <!-- Navbar Search -->
    <li class="nav-item">
      <a class="nav-link" data-widget="navbar-search" href="#" role="button" style="color: white">
        <i class="fas fa-search"></i>
      </a>
      <div class="navbar-search-block">
        <form class="form-inline">
          <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-navbar" type="submit">
                <i class="fas fa-search"></i>
              </button>
              <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
        </form>
      </div>
    </li>

    <script src="../function/search.js"></script>

    <li class="nav-item">
      <a class="nav-link" href="#" id="darkModeToggle" role="button" title='Dark Mode' style="color: white">
        <i class="fa fa-moon" aria-hidden="true"></i>
      </a>
    </li>
    <li class="nav-item">
      <a href="function/logout.php" class="nav-link" role="button" title='Logout' style="color: white">
        <i class="fa fa-sign-out-alt"></i>
      </a>
    </li>
  </ul>
</nav>
<!-- /.navbar -->

<!-- Include Font Awesome CSS for icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<!-- Dark Mode Toggle Script -->
<script>
  document.addEventListener('DOMContentLoaded', function() {
    const darkModeToggle = document.getElementById('darkModeToggle');
    const navbar = document.querySelector('.main-header.navbar');
    const sidebar = document.querySelector('.main-sidebar');
    const icon = darkModeToggle.querySelector('i');

    function updateDarkMode() {
      if (document.body.classList.contains('dark-mode')) {
        navbar.classList.remove('navbar-light');
        navbar.classList.add('navbar-dark');
        sidebar.classList.remove('sidebar-light-primary');
        sidebar.classList.add('sidebar-dark-primary');
        icon.classList.remove('fa-moon');
        icon.classList.add('fa-sun');
        icon.classList.add('rotate');
        setTimeout(() => icon.classList.remove('rotate'), 800);
        darkModeToggle.setAttribute('title', 'Light Mode'); 
        navbar.removeAttribute('style'); 
        sidebar.querySelector('.brand-link').removeAttribute('style');
      } else {
        navbar.classList.remove('navbar-dark');
        navbar.classList.add('navbar-light');
        sidebar.classList.remove('sidebar-dark-primary');
        sidebar.classList.add('sidebar-light-primary');
        icon.classList.remove('fa-sun');
        icon.classList.add('fa-moon');
        icon.classList.add('rotate');
        setTimeout(() => icon.classList.remove('rotate'), 800);
        darkModeToggle.setAttribute('title', 'Dark Mode'); 
        navbar.setAttribute('style', 'background: linear-gradient(to top,#00497d,#0279C8); transition: background 0.5s;'); 
        sidebar.querySelector('.brand-link').setAttribute('style', 'background: linear-gradient(to top,#00497d,#0279C8); transition: background 0.5s;'); // Add the linear gradient style back
      }
    }

    if (localStorage.getItem('darkMode') === 'enabled') {
      document.body.classList.add('dark-mode');
      updateDarkMode();
    }

    darkModeToggle.addEventListener('click', function() {
      document.body.classList.toggle('dark-mode');
      updateDarkMode();

      if (document.body.classList.contains('dark-mode')) {
        localStorage.setItem('darkMode', 'enabled');
      } else {
        localStorage.setItem('darkMode', 'disabled');
      }
    });
  });
</script>

<!-- Dark Mode CSS -->
<style>
  .dark-mode {
    background-color: #121212;
    color: #ffffff;
    transition: background-color 1s, color 1s;
  }

  .dark-mode .navbar {
    background: linear-gradient(to top, #2c2c2c, #1e1e1e);
    transition: background 1s;
  }

  .dark-mode .brand-link {
    background: linear-gradient(to top, #2c2c2c, #1e1e1e);
    transition: background 1s;
  }

  .dark-mode .nav-link {
    color: white !important;
    transition: color 1s;
  }

  .dark-mode .input-group-sm .form-control-navbar {
    background-color: #2c2c2c;
    color: white;
    border: none;
    transition: background-color 1s, color 1s;
  }

  .dark-mode .input-group-sm .btn-navbar {
    background-color: #2c2c2c;
    color: white;
    border: none;
    transition: background-color 1s, color 1s;
  }
  .main-header.navbar {
    transition: background-color 1s, color 1s;
  }

  .brand-link {
    transition: background-color 1s, color 1s;
  }

  .rotate {
    animation: rotateIcon 0.5s;
  }

  @keyframes rotateIcon {
    from {
      transform: rotate(0deg);
    }
    to {
      transform: rotate(360deg);
    }
  }
</style>
