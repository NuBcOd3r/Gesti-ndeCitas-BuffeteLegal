<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Sistema Legal</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <link rel="stylesheet" href="../css/estilosInterno.css">
</head>

<body>

    <div class="sidebar d-flex flex-column flex-shrink-0 p-3 text-white bg-dark">
        <a href="Home.php"
            class="d-flex justify-content-center align-items-center mb-3 mb-md-0 text-white text-decoration-none">
            <i class="fa-solid fa-scale-balanced" style="color:#0d6efd; font-size: 5rem;"></i>
        </a>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
                <a href="#" class="nav-link active" aria-current="page">
                    <i class="fa-solid fa-house me-2"></i>
                    Home
                </a>
            </li>
            <li>
                <a href="#" class="nav-link text-white">
                    <i class="fa-solid fa-gauge me-2"></i>
                    Dashboard
                </a>
            </li>
            <li>
                <a href="#" class="nav-link text-white">
                    <i class="fa-solid fa-table me-2"></i>
                    Orders
                </a>
            </li>
            <li>
                <a href="#" class="nav-link text-white">
                    <i class="fa-solid fa-box me-2"></i>
                    Products
                </a>
            </li>
            <li>
                <a href="#" class="nav-link text-white">
                    <i class="fa-solid fa-users me-2"></i>
                    Customers
                </a>
            </li>
        </ul>
        <hr>
        <div class="dropdown">
            <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
                id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
                <strong>mdo</strong>
            </a>
            <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                <li><a class="dropdown-item" href="#">New project...</a></li>
                <li><a class="dropdown-item" href="#">Settings</a></li>
                <li><a class="dropdown-item" href="#">Profile</a></li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Sign out</a></li>
            </ul>
        </div>
    </div>

    <div class="content-section">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark top-navbar">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                    <a class="navbar-brand d-flex align-items-center" href="Home.php">
                        <button class="btn btn-link p-0 border-0 d-flex align-items-center">
                            <i class="fa-regular fa-square-minus me-3" style="color:white; font-size:1.5rem;"></i>
                        </button>
                        <i class="fa-solid fa-scale-balanced" style="color:#0d6efd"></i>
                    </a>
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Contenido principal -->
        <div class="main-content">
            <h1>Contenido Principal</h1>
            <p>Aquí va el contenido de tu aplicación. Este contenido está completamente fuera de los containers de
                navegación.</p>
            <p>La sidebar ocupa el 100% de altura mientras que el navbar superior solo ocupa su altura natural.</p>

            <!-- Aquí puedes agregar todo tu contenido -->
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Card ejemplo</h5>
                            <p class="card-text">Contenido de ejemplo</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="../js/Sidebar.js"></script>
</body>

</html>