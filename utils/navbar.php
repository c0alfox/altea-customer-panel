<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="/images/gruppoaltea_logo.webp" alt="Altea" id="nav-logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="inserisci.php">Inserisci nuovo registro</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="visualizza.php">Visualizza i registri</a>
                </li>
            </ul>


            <?php
                if (empty($_SESSION['Username'])) {
                    echo "Accedi";
                } else {
                    echo $_SESSION['Username'];
                }
            ?>
            <div>
                <div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <?php if (empty($_SESSION['Username'])): ?>
                        <li><a class="dropdown-item" href="signup.php">Registrati</a></li>
                        <?php else: ?>
                        <li><a class="dropdown-item" href="friends.php">Amici</a></li>
                        <li><a class="dropdown-item" href="preferences.php">Impostazioni</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="login.php">Cambia account</a></li>
                        <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>

<!--
<nav class="navbar shadow-sm">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="/images/gruppoaltea_logo.webp" alt="Altea" id="nav-logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="#"> Inserisci nuovo registro </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"> Visualizza registri </a>
                </li>
            </ul>
            <span class="navbar-text">
                Navbar text with an inline element
            </span>
        </div>
    </div>
</nav>

-->