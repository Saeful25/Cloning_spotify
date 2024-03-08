<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar bg-dark">
        <div class="container-fluid ms-5 p-2">
            <div class="navbar-brand ms-5">
                <img src="img/Spotify_Logo_RGB_White.png" alt="Bootstrap" style="width: 8rem;">
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-5">
                <div class="card mt-5">
                    <div class="card-body">
                        <div class="d-flex justify-content-center">
                            <img src="img/spotifylog.jpg" alt="" style="width: 5rem;">
                        </div>
                        <h5 class="d-flex justify-content-center mb-5"><strong> spotify</strong></h5>
                        <form action="" method="POST">
                            <label for="" class="form-label">Email or Username</label><br>
                            <input type="text" class="form-control" name="nama"> <br>
                            <label for="" class="form-label">Passsword</label><br>
                            <input type="text" class="form-control" name="pass"> <br>
                            <div class="d-grid gap-2">
                                <button class="btn mt-5 text-white" type="submit" name="kirim"
                                    style="background-color:#18d85f;">Masuk</button>
                            </div>
                        </form>
                        <?php
                        $nama = $_POST['nama'];
                        $pas = $_POST['pass'];
                        if (isset($_POST['kirim'])) {
                            if ($nama == 'asep' && $pas == 'asepkasep') {
                                header('location:dashboard.php');
                            }
                        }
                        ?>

                    </div>
                </div>
            </div>
            <div class="col-7">
                <div class="card mt-5">
                    <img src="img/photolog.jpg" alt="">
                </div>
            </div>
        </div>
    </div>






















    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>