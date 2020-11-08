<header>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-white">
    <div class="container-fluid">
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarExample01"
        aria-controls="navbarExample01"
        aria-expanded="false"
        aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarExample01">
        <div class="navbar-brand">
            <a>FactoryManager</a>
        </div>
        <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
            <li class="nav-item active">
                <a class="nav-link" aria-current="page" href="indexMenager.php">Strona Główna</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Zakłady</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Nowe zamówienia</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="indexmenager.php?page=zamowienie">Dodaj zamówienie</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Archiwum</a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link">Witaj <?php echo $_SESSION['name']." ".$_SESSION['surname']; ?>!</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./scripts/php/logout.php">Wyloguj się</a>
            </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Navbar -->

</header>