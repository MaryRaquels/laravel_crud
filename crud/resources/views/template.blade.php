<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CrudLaravel</title>
    <!--Boostrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!--Font'<s-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins" rel="stylesheet">
</head>
<body>
    <header>
    <nav class="navbar navbar-expand bg-dark navbar-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">Raqs</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="/livros">Livros</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

</header>
        @yield('content')
        <footer>CrudRaqs&copy2024</footer>
</body>
</html>