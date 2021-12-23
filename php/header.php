<!-- inicio navvar -->
    <Header>
    <nav class="navbar navbar-expand-lg navbar-light col-sm-12">
    <div class="container-fluid">
        <a class="navbar-brand" id="linkHome" href="../pages/TechTalksBA.php"><img id="logo" src="../img/Techtalkonline_logo.png" alt="Logo corporativo"> TECH TALKS BSAS</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="d-flex">
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <!-- <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="../pages/TechTalksBA.php">La conferencia</a>
            </li> -->
            <li class="nav-item">
                <a class="nav-link top" href="../pages/TechTalksBA.php#Oradores">Los oradores</a>
            </li>
            <li class="nav-item">
                <a class="nav-link top" href="../pages/TechTalksBA.php#Lugar">Lugar y fecha</a>
            </li>
            <li class="nav-item">
                <a class="nav-link top" href="../pages/TechTalksBA.php#formorador">Conviértete en sponsor</a>
            </li>
            <li class="nav-item">
                <a class="nav-link top" href="../pages/listado.php">Listado de Sponsors</a>
            </li>
            <li class="nav-item">
                <?php 
                    if(!isset($_SESSION['loggedIN'])){
                        $login = '../pages/login.php';
                        $sesion = 'Iniciar';
                    } else{
                        $login = '../php/logout.php';
                        $sesion = 'Cerrar';
                    }
                 ?>
                <a class="nav-link top" href="<?= $login?>"><?= $sesion?> Sesión</a>
            </li>
            <li class="nav-item">
                <a class="nav-link top"href="../pages/formEmail.php">Contacto</a>
            </li>
            <li class="nav-item">
                <a class="nav-link compra"href="../pages/tickets.php">Comprar entradas</a>
            </li>
            </ul>
        </div>
    </div>
    </div>
    </nav>
</header>
<!-- fin navvar -->