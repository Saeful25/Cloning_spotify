<?php
$genre = [
    [
        "id" => 1,
        "nama_genre" => "Pop",
    ],
    [
        "id" => 2,
        "nama_genre" => "Klasic",
    ],
    [
        "id" => 3,
        "nama_genre" => "Rock",
    ]
];
$album = [
    [
        "id" => 1,
        "nama_album" => "Sebuah Nama, Sebuah Cerita",
    ],
    [
        "id" => 2,
        "nama_album" => "Kisah Klasik",
    ],
    [
        "id" => 3,
        "nama_album" => "Awan Kinton",
    ]
];
$music = [
    [
        "id" => 1,
        "judul_lagu" => "Numb",
        "artist" => "Linkin Park",
        "listener" => 30578980,
        "duration" => 2.59,
        "genre_id" => 3,
        "album_id" => 1,
    ],
    [
        "id" => 2,
        "judul_lagu" => "Laskar Pelangi",
        "artist" => "Nidji",
        "listener" => 10548880,
        "duration" => 3.12,
        "genre_id" => 3,
        "album_id" => 1,
    ],
    [
        "id" => 3,
        "judul_lagu" => "Selimut Hati",
        "artist" => "Dewa 19",
        "listener" => 20118980,
        "duration" => 4.05,
        "genre_id" => 2,
        "album_id" => 2,
    ],
    [
        "id" => 4,
        "judul_lagu" => "Separuh Aku",
        "artist" => "Noah",
        "listener" => 10078980,
        "duration" => 3.02,
        "genre_id" => 1,
        "album_id" => 2,
    ],
    [
        "id" => 5,
        "judul_lagu" => "Tanya Bapak",
        "artist" => "Asep Kasep",
        "listener" => 15799080,
        "duration" => 3.45,
        "genre_id" => 1,
        "album_id" => 3,
    ]
];





?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard</title>
    <link rel="stylesheet" href="img/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body style="background-color:  #000000;">
    <nav class="navbar bg-dark">
        <div class="container ms-5 p-2">
            <div class="navbar-brand ms-5">
                <img src="img/Spotify_Logo_RGB_White.png" alt="Bootstrap" style="width: 8rem;" class="ms-5">
            </div>
            <div style="margin-right: -6rem;">
                <button class="btn btn-light rounded-pill px-4"><strong> Explore premium</strong></button>
            </div>
        </div>
    </nav>
    <!--  -->
    <div class="container">
        <div class="row ">
            <div class="col-3">
                <div class="card mt-4 text-white" style="background-color: #121212;">
                    <div class="card-body">
                        <div class="nav d-inline-block">
                            <p class="fw-bold "><i class="fa-solid fa-house pe-2"></i> Home</p>
                            <p class="fw-bold huh"><i class="fa-solid fa-magnifying-glass pe-2 "></i> Search</p>
                        </div>
                    </div>
                </div>
                <div class="card p-2 mt-3" style="background-color: #121212; color:rgb(168, 159, 159);">
                    <div class="cart ">
                        <i class="fa-solid fa-plus float-end mt-2 huh"></i>
                        <p class="fw-bold ms-2 huh"><i class="fa-solid fa-cubes"></i> Your Library</p>
                    </div>
                    <div class="card text-white" style="background-color: #242424;">
                        <div class="card-body">
                            <p class="fw-bold"> Create your first playlist
                                <br><small class="fw-medium">It's easy, well help you</small>
                            </p>

                            <button class="rounded-pill  fw-bold btn btn-light px-3">Create playlist</button>
                        </div>
                    </div>
                    <div class="card text-white mt-3" style="background-color: #242424;">
                        <div class="card-body">
                            <p class="fw-bold"> Let's find some podcasts
                                <br><small class="fw-medium">We'll keep you updated</small>
                            </p>

                        </div>
                    </div>
                    <div class="ms-2 mt-5">
                        <p class="fw-bold huh"><i class="fa-solid fa-download"></i> Install App
                            <br><small class="fw-light huah">Scan this qr code to install the app</small>
                        </p>

                        <img src="img/barqod.jpg" style="width: 80%;" class="px-5 pb-3 pt-2">
                        <div class="d-flex gap-3 pb-2">
                            <small>Legal</small>
                            <small>Privasi Center</small>
                            <small>Cookies</small>
                        </div>
                        <div class="d-flex gap-3">
                            <small>About Ads</small>
                            <small>Accessibillity</small>
                            <small>Spotify Jos</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-9">
                <div class="card mt-4 text-white " style="background-color:#19181a;">
                    <div class="card-body">
                        <h5 class="fw-bold pb-3">Top music "sheila on 7" 2023</h5>
                        <div class="row">
                            <div class="col">
                                <div class="card text-white cat" style="background-color:#19181a;">
                                    <div class="card-body">
                                        <div class="card text-white cad" style="background-color:#19181a;">
                                            <img src="img/shelaon.jpg" alt="" style="width: 100%; "
                                                class="rounded-top-2">
                                            <p class="fw-bold pt-3 ps-2">Lapang Dada
                                                <br><small class="fw-medium">Sheila On 7</small>
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card text-white cat" style="background-color:#19181a;">
                                    <div class="card-body ">
                                        <div class="card text-white cad" style="background-color:#19181a;">
                                            <img src="img/shelaon.jpg" alt="" style="width: 100%;"
                                                class="rounded-top-2">
                                            <p class="fw-bold pt-3 ps-2">Film Favorite
                                                <br><small class="fw-medium">Sheila on 7</small>
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card text-white cat" style="background-color:#19181a;">
                                    <div class="card-body">
                                        <div class="card p-1 text-white cad" style="background-color:#19181a;">
                                            <img src="img/shelaon.jpg" alt="" style="width: 100%;"
                                                class="rounded-top-2">
                                            <p class="fw-bold pt-3 ps-2">Terlalu Singkat
                                                <br><small class="fw-medium">Sheila on 7</small>
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card text-white cat" style="background-color:#19181a;">
                                    <div class="card-body">
                                        <div class="card text-white cad" style="background-color:#19181a;">
                                            <img src="img/shelaon.jpg" alt="" style="width: 100%;"
                                                class="rounded-top-2">
                                            <p class="fw-bold pt-3 ps-2">Shepia
                                                <br><small class="fw-medium">Sheila on 7</small>
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card text-white cat" style="background-color:#19181a;">
                                    <div class="card-body">
                                        <div class="card text-white cad" style="background-color:#19181a;">
                                            <img src="img/shelaon.jpg" alt="" style="width: 100%;"
                                                class="rounded-top-2">
                                            <p class="fw-bold pt-3 ps-2">J.A.P
                                                <br><small class="fw-medium">Sheila on 7</small>
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card text-white mt-3" style="background-color:#19181a;">
                    <div class="card-body">
                        <p class="float-end fw-semibold mb-4 mt-2 huh" style="color:rgb(168, 159, 159);"><i
                                class="fa-solid fa-list-ul"></i> Show all</p>
                        <h5 class="fw-bold  mb-4 mt-2">Spotify Genre</h5>

                        <div class="row text-center text-dark" style="width: 100%;">
                            <div class="col me-4 ms-3 p-3 fw-bold" style="background-color: #1ed660; ">
                                <p>POP</p>
                            </div>
                            <div class="col p-3 fw-bold" style="background-color: #1ed660;">
                                <p>KLASIK</p>
                            </div>
                            <div class="col ms-4  p-3 fw-bold" style="background-color: #1ed660;">
                                <p>ROCK</p>
                            </div>
                        </div>
                        <h5 class="mt-5 fw-bold mb-4">Popular</h5>
                        <div class="row">
                            <?php
                            foreach ($music as $mus) {
                                ?>
                                <div class="col">
                                    <div class="card pb-3 shadow-sm" style="background-color:#191919;">
                                        <img src="img/photo2.jpg" alt="" style="width:100%;" class="rounded-top-2">
                                        <p class="fw-bold text-white ps-2 pt-3">
                                            <?= $mus["judul_lagu"] ?>
                                            <br><small class="fw-medium">
                                                <?= $mus["artist"] ?>
                                            </small>
                                        </p>
                                        <a href="detail_artist.php?id=<?= $mus["id"] ?>">
                                            <button class="text-dark fw-semibold rounded pt-2 pb-2"
                                                style="background-color: #fdc007; width:100%;"><i
                                                    class="fa-solid fa-circle-play"></i>
                                                Play
                                                album</button>
                                        </a>
                                    </div>
                                </div>

                                <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>










    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/c2dd979a9d.js" crossorigin="anonymous"></script>
</body>

</html>