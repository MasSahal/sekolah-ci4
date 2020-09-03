<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ini Halaman <?= $nama ?></title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Caveat:wght@700&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap');

        body {
            background-color: darkslategray;
        }

        .container {
            margin: 0 auto;
        }

        .content {
            padding-top: 5px;
        }

        h2 {
            text-align: center;
            font-size: 65px;
            font-family: 'Caveat', cursive;
            color: honeydew;
        }

        .box {
            margin: 20px;
            padding: 20px;
            border: 3px floralwhite double;
            height: auto;
        }

        h3 {
            text-align: center;
            font-size: 25px;
            font-family: 'Ubuntu', sans-serif;
            color: honeydew;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="content">
            <h2>Hai Selamat datang di halaman pertama CI4</h2>
            <div class="box">
                <h3>
                    Nama : Sahl<br>
                    Kelas : XII <br>
                    Jurusan : Rekayasa Perangkat Lunak
                </h3>

            </div>
        </div>
    </div>
</body>

</html> -->

<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url("/public/bootstrap/css/bootstrap.min.css") ?>">

    <title>My First Web</title>
</head>

<body class="bg-dark">

    <div class="container bg-secondary">
        <div class="jumbotron bg-secondary mt-5 text-white">
            <h1 class="display-4">Hello, everyone!</h1>
            <p class="lead">Selamat datang di web pertama saya dengan menggunakan Framework Bootstrap 4</p>
            <hr class="my-4">
            <p>Nama Saya adalah <b><?= $nama ?></b>, Saya adalah siswa kelas <?= $kelas ?> dari jurusan <?= $jurusan ?></P>
            <a class="btn btn-primary btn-lg" href="#" role="button">Selengkapnya...</a>
        </div>

    </div>
    <div class="footer mt-5">
        <h6 class="text-small text-center text-secondary">Halaman ini di buat dengan bootstrap 4 | Copyright 2020 All rights reserved</h6>
    </div>
    <script src="<?= base_url("/public/jquery/jquery-3.5.1.min.js") ?>"></script>
    <script src="<?= base_url("/public/popper/popper.js") ?>"></script>
    <script src="<?= base_url("/public/bootstrap/js/bootstrap.js") ?>"></script>
</body>

</html> -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url("/public/bootstrap/css/bootstrap.min.css") ?>">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">


    <title>My First Web</title>
</head>

<body class="bg-dark">

    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light mb-5">
            <a class="navbar-brand" href="#">Ms Tech</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url("/") ?>">
                            <i class="fa fa-home fa-fw"></i>Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url("/category") ?>">
                            Category
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url("/post") ?>">
                            Article</a>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- Bootstrap grid -->
        <div class="row my-5">
            <div class="col-md-9">
                <div class="container text-white">
                    <h2><?= $this->renderSection("title") ?></h2>
                    <?= $this->renderSection("content") ?>
                </div>
            </div>
            <div class="col col-md-3">
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action bg-secondary text-white">
                        <i class="fa fa-list fa-fw float-right"></i> Sidebar
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">Popular</a>
                    <a href="#" class="list-group-item list-group-item-action">Contact Us</a>
                    <a href="#" class="list-group-item list-group-item-action">About Us</a>
                </div>
            </div>
        </div>

        <div class="container bg-secondary">

        </div>

    </div>
    <div class="footer mt-5">
        <h6 class="text-small text-center text-secondary">Halaman ini di buat dengan bootstrap 4 | Copyright 2020 All rights reserved</h6>
    </div>
    <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
    <script src="<?= base_url("/public/jquery/jquery-3.5.1.min.js") ?>"></script>
    <script src="<?= base_url("/public/popper/popper.js") ?>"></script>
    <script src="<?= base_url("/public/bootstrap/js/bootstrap.js") ?>"></script>
</body>

</html>