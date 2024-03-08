<?php
$id = $_GET["id"];
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
    <title>detail_artist</title>
    <link rel="stylesheet" href="img/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&family=Open+Sans:wght@700&family=Poppins&family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,100;1,300&family=Sacramento&family=Work+Sans:wght@100;400;600;700&display=swap"
        rel="stylesheet">
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

    <div class="container">
        <div class="row">
            <div class="col-3">
                <div class="card mt-4 text-white" style="background-color: #121212;">
                    <div class="card-body">
                        <div class="nav d-inline-block">
                            <a href="dashboard.php" style="text-decoration: none!important;"><p class="fw-bold text-white aher" ><i class="fa-solid fa-house pe-2"></i> Home</p></a>
                            <p class="fw-bold huh"><i
                                    class="fa-solid fa-magnifying-glass pe-2 "></i> Search</p>
                        </div>
                    </div>
                </div>
                <div class="card p-2 mt-3" style="background-color: #121212; color:rgb(168, 159, 159);">
                    <div class="card-body">
                        <p class="fw-bold huh"><i class="fa-brands fa-spotify pe-2"></i> Recent Listening</p>
                        <div class="ro d-flex gap-3">
                            <img src="img/photo1.jpg" alt="" style="height: 3rem;">
                            <p class="fw-bold text-white">Yaa Hanana <br>
                                <small class="fw-medium" style="color: rgb(168, 159, 159);">Habib syech assegaf</small>
                            </p>
                        </div>
                        <div class="ro d-flex gap-3">
                            <img src="img/photo1.jpg" alt="" style="height: 3rem;">
                            <p class="fw-bold text-white"> Seberapa Pantas <br>
                                <small class="fw-medium" style="color: rgb(168, 159, 159);">Sheila on 7</small>
                            </p>
                        </div>
                        <div class="ro d-flex gap-3">
                            <img src="img/photo1.jpg" alt="" style="height: 3rem;">
                            <p class="fw-bold text-white"> Samsul Meriyang<br>
                                <small class="fw-medium" style="color: rgb(168, 159, 159);">Asep and the
                                    backbond</small>
                            </p>
                        </div>
                        <small>See more <i class="fa-solid fa-circle-arrow-right"></i></small>
                    </div>
                </div>
            </div>
            <di class="col-9">
                <?php
                foreach ($music as $mus) {
                    if ($mus["id"] == $id) {
                        ?>
                        <div class="card mt-4 text-white" style="border:none;">
                            <img src="img/photo3.jpg" class="card-img">
                            <div class="card-img-overlay" style="margin-top:12rem;">
                                <small><i class="fa-solid fa-circle-check text-info"></i> Artist verificated</small>
                                <h2 style="font-family:'Open Sans',sans-serif; font-size: 5rem;" class="fw-bold text-white">
                                    <?= $mus["artist"] ?>
                                </h2>
                                <small><i class="fa-solid fa-circle-play text-white"></i>
                                    <?= number_format($mus["listener"],0,",") ?> monthly listener
                                </small>
                                <div class="grid mt-5">
                                    <button class="btn rounded-pill text-dark fw-semibold me-2 px-3" style="background-color: #1ed660;"><i
                                            class="fa-solid fa-circle-pause"></i>
                                        Pause</button>
                                    <button class="btn btn-light rounded-pill text-dark fw-semibold px-3">Follow</button>
                                </div>
                            </div>
                        </div>
                        <?php   
                    }
                }
                ?>
                <div class="card mt-3" style="background-color:#191919;">
                            <div class="card-body">
                                <table class="table mt-3" style=" border-bottom:#191919!important;">
                                        <thead >
                                            <tr>
                                                <th scope="col" style="color:rgb(168, 159, 159);background-color:#191919!important;">#</th>
                                                <th scope="col" style="color:rgb(168, 159, 159);background-color:#191919!important;">Title</th>
                                                <th scope="col" style="color:rgb(168, 159, 159);background-color:#191919!important;">Album</th>
                                                <th scope="col" style="color:rgb(168, 159, 159);background-color:#191919!important;">Artist</th>
                                                <th scope="col" style="color:rgb(168, 159, 159);background-color:#191919!important;"><i class="fa-regular fa-clock"></i></th>
                                            </tr>
                                        </thead>
                                    <?php
$no = 1;
if($id == 1) {
                                        foreach ($music as $mus) {
                                        if($mus["album_id"] == 1){
                                    
                                        ?>
                                        <tbody>
                                            <tr>
                                                <td style="background-color:#191919!important;" class="text-white">
                                                    <?= $no++ ?>
                                                </td>
                                                <td style="background-color:#191919!important;" class="text-white"><?=$mus["judul_lagu"]?></td>
                                               <?php 
                                               foreach ($album as $al) {
                                        if ($al["id"] == $mus["album_id"]) {
                                        
                                            ?>
                                                <td style="background-color:#191919!important;" class="text-white"><?=$al["nama_album"]?></td>
                                                <?php
                                                }
                                            }?>
                                                <td style="background-color:#191919!important;" class="text-white"><?=$mus["artist"]?></td>
                                                <td style="background-color:#191919!important;" class="text-white"><?=$mus["duration"]?></td>
                                            </tr>
                                        </tbody>
                            <?php
                                        
                            }
                                        
                         }
}elseif($id == 2) {
                            foreach ($music as $mus) {
                            if($mus["album_id"] == 1){
                        
                            ?>
                            <tbody>
                                <tr>
                                    <td style="background-color:#191919!important;" class="text-white">
                                        <?= $no++ ?>
                                    </td>
                                    <td style="background-color:#191919!important;" class="text-white"><?=$mus["judul_lagu"]?></td>
                                   <?php 
                                   foreach ($album as $al) {
                            if ($al["id"] == $mus["album_id"]) {
                            
                                ?>
                                    <td style="background-color:#191919!important;" class="text-white"><?=$al["nama_album"]?></td>
                                    <?php
                                    }
                                }?>
                                    <td style="background-color:#191919!important;" class="text-white"><?=$mus["artist"]?></td>
                                    <td style="background-color:#191919!important;" class="text-white"><?=$mus["duration"]?></td>
                                </tr>

                            </tbody>
                <?php
                            
                            }
                            
             }
}elseif($id == 3) {
                foreach ($music as $mus) {
                if($mus["album_id"] == 2){
            
                ?>
                <tbody>
                    <tr>
                        <td style="background-color:#191919!important;" class="text-white">
                            <?= $no++ ?>
                        </td>
                        <td style="background-color:#191919!important;" class="text-white"><?=$mus["judul_lagu"]?></td>
                       <?php 
                       foreach ($album as $al) {
                if ($al["id"] == $mus["album_id"]) {
                
                    ?>
                        <td style="background-color:#191919!important;" class="text-white"><?=$al["nama_album"]?></td>
                        <?php
                        }
                    }?>
                        <td style="background-color:#191919!important;" class="text-white"><?=$mus["artist"]?></td>
                        <td style="background-color:#191919!important;" class="text-white"><?=$mus["duration"]?></td>
                    </tr>
                </tbody>
    <?php
                
                }
                
 }
}elseif($id == 4) {
    foreach ($music as $mus) {
    if($mus["album_id"] == 2){

    ?>
    <tbody>
        <tr>
            <td style="background-color:#191919!important;" class="text-white">
                <?= $no++ ?>
            </td>
            <td style="background-color:#191919!important;" class="text-white"><?=$mus["judul_lagu"]?></td>
           <?php 
           foreach ($album as $al) {
    if ($al["id"] == $mus["album_id"]) {
    
        ?>
            <td style="background-color:#191919!important;" class="text-white"><?=$al["nama_album"]?></td>
            <?php
            }
        }?>
            <td style="background-color:#191919!important;" class="text-white"><?=$mus["artist"]?></td>
            <td style="background-color:#191919!important;" class="text-white"><?=$mus["duration"]?></td>
        </tr>

    </tbody>
<?php
    
    }
    
}
}elseif($id == 5) {
    foreach ($music as $mus) {
    if($mus["album_id"] == 3){
    ?>
    <tbody>
        <tr>
            <td style="background-color:#191919!important;" class="text-white">
                <?= $no++ ?>
            </td>
            <td style="background-color:#191919!important;" class="text-white"><?=$mus["judul_lagu"]?></td>
           <?php 
           foreach ($album as $al) {
    if ($al["id"] == $mus["album_id"]) {
    
        ?>
            <td style="background-color:#191919!important;" class="text-white"><?=$al["nama_album"]?></td>
            <?php
            }
        }?>
            <td style="background-color:#191919!important;" class="text-white"><?=$mus["artist"]?></td>
            <td style="background-color:#191919!important;" class="text-white"><?=$mus["duration"]?></td>
        </tr>

    </tbody>
<?php
    
    }
    
}
}
?>
                         
                                 </table>
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