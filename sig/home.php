<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styleJam.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="styleAbout.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<style>
    body{
      position: relative;
      cursor: url(img/Chanyeol.cur), default;
    }
</style>

<body data-spy="scroll" data-target=".navbar" data-offset="50">

    <!-- Navbar (sit on top)-->
    <nav class="navbar navbar-expand-lg navbar-light bg-navbar fixed-top">
        <!--Logo Website-->
        <a class="navbar-brand" href="http://www.uajm.ac.id/" target="_blank">
            <img src="img/logo.png">
        </a>

        <!--Button Navbar Collapse-->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!--Collapse Navbar-->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!--Navbar List-->
            <ul class="navbar-nav mr-auto font-weight-bold">
                <li class="nav-item">
                    <a class="nav-link" href="#demo">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#maps">Maps</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#listMhs">List Mahasiswa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#artikel">Article</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#aboutUs">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contactUs.php">Contact Us</a>
                </li>
            </ul>

            <a class="nav-link" href="" data-toggle="modal" data-target="#faq"><i class='far fa-question-circle' style='font-size:32px'></i></a>

            <!--Logout / Profil-->
            <a class="navbar-brand" href="logout.php" target="_top">
                <img src="img/profil.png" href="" class="profil"> Logout
            </a>
        </div>
    </nav>
    <!--End of Navbar-->

    <!--Carousel-->
    <div id="demo" class="carousel slide jarak" data-ride="carousel">
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
        </ul>
        
        <!--Carousel 3 Item-->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/ftiCarousel.png" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                    <h3>Fakultas Teknologi Informasi</h3>
                    <p>We really look forward to it</p>
                </div>
            </div>
            
            <div class="carousel-item">
                <img src="img/ang18Carousel.png" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                    <h3>FTI Angkatan 18</h3>
                    <p>We had such a great time in FTI</p>
                </div>
            </div>

            <div class="carousel-item">
                <img src="img/lcbCarousel.png" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                    <h3>Lokakarya Character Building</h3>
                    <p>We had such a great time at Bira for LCB</p>
                </div>
            </div>
        </div>
        
        <!--Control Carousel-->
        <a class="carousel-control-prev" href="#demo" data-slide="prev" role="button">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        
        <a class="carousel-control-next" href="#demo" data-slide="next" role="button">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!--End of Carousel-->

    <!--Tampilkan Maps-->
    <div id="maps" class="container-fluid bg-light jarak">
        <script src="http://maps.googleapis.com/maps/api/js"></script>
        <script>
            var marker;
            function initialize(){
                //Variabel info window yang menyimpan lokasi
                var infoWindow = new google.maps.InfoWindow;

                //Variabel untuk properti peta
                var propertiPeta = {
                    center:new google.maps.LatLng(-5.1512980, 119.4319264),
                    zoom:13.5,
                    mapTypeId:google.maps.MapTypeId.ROADMAP
                }

                //Variabel membuat Peta
                var peta = new google.maps.Map(document.getElementById("googleMap"), propertiPeta);

                //Mengambil data dari database untuk menampilkan banyak marker
                <?php
                include "proses.php";
                ?>

                //Membuat Marker
                function addMarker(lat, lng, info){
                    var lokasi = new google.maps.LatLng(lat, lng);
                    var marker = new google.maps.Marker({
                        map: peta,
                        position: lokasi,
                        icon: 'img/tree.png'
                    });
                    bindInfoWindow(marker, peta, infoWindow, info);
                }

                //Menampilkan informasi saat marker di klik
                function bindInfoWindow(marker, peta, infoWindow, html){
                    google.maps.event.addListener(marker, 'click', function(){
                        for(var i=1; i<=9; i++){
                            if(html == ("Fetriani Agatha")){
                                var contentString=
                                '<br><a href="" data-toggle="modal" data-target="#agatha">Info Detail</a>';
                            }
                            else if(html == ("Leady Novita Lande")){
                                var contentString=
                                '<br><a href="" data-toggle="modal" data-target="#leady">Info Detail</a>';
                            }
                            else if(html == ("Maria Yustina Tuga")){
                                var contentString=
                                '<br><a href="" data-toggle="modal" data-target="#maria">Info Detail</a>';
                            }
                            else if(html == ("Meilanie Irene Lumme Turandan")){
                                var contentString=
                                '<br><a href="" data-toggle="modal" data-target="#meilanie">Info Detail</a>';
                            }
                            else if(html == ("Paramita Aditung")){
                                var contentString=
                                '<br><a href="" data-toggle="modal" data-target="#paramita">Info Detail</a>';
                            }
                            else if(html == ("Reny Erna Malioy")){
                                var contentString=
                                '<br><a href="" data-toggle="modal" data-target="#reny">Info Detail</a>';
                            }
                            else if(html == ("Shereen Beatrix Adhiwidjaja")){
                                var contentString=
                                '<br><a href="" data-toggle="modal" data-target="#shereen">Info Detail</a>';
                            }
                            else if(html == ("Theresia Elsa Lengari")){
                                var contentString=
                                '<br><a href="" data-toggle="modal" data-target="#elsa">Info Detail</a>';
                            }
                            else if(html == ("Yulen Anse Pariury")){
                                var contentString=
                                '<br><a href="" data-toggle="modal" data-target="#anse">Info Detail</a>';
                            }
                            infoWindow.setContent(html + contentString);
                        }
                 
                        //infoWindow.setContent(html + contentString);
                        infoWindow.open(peta, marker);
                    });
                }
            }
            google.maps.event.addDomListener(window, 'load', initialize);
        </script>
        <div id="googleMap" style="width:100%;height:700px;"></div>
    </div>
    <!--End of Maps-->
    <hr>

    <!-- Modal Paramita-->
    <div id="paramita" class="modal fade">
        <div class="modal-dialog modalku">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header bg-warning">
                <?php
                include "koneksiList.php";
                $data = mysqli_query($koneksi,"select * from tabel_mhs where id=5");
		            while($d = mysqli_fetch_array($data)){
			    ?>
                        <h4 class="modal-title"><?php echo $d['nama']; ?></h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                
                <div class="modal-body">
                    <img src="foto/paramita.png" class="float-left">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><?php echo $d['tempat_tanggal_lahir']; ?></li>
                        <li class="list-group-item"><?php echo $d['alamat']; ?></li>
                        <li class="list-group-item"><?php echo $d['telepon']; ?></li>
                        <li class="list-group-item"><?php echo $d['email']; ?></li>
                    </ul>
                </div>
                <?php
                    }
                ?>
                
                <div class="modal-footer">
                    <button type="submit" name="rute" class="btn btn-success">Rute</button>
                </div>
            </div>
        </div>
    </div>
    <!--End of Modal Paramita-->

    <!-- Modal Reny-->
    <div id="reny" class="modal fade">
        <div class="modal-dialog modalku">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header bg-warning">
                <?php
                include "koneksiList.php";
                $data = mysqli_query($koneksi,"select * from tabel_mhs where id=6");
		            while($d = mysqli_fetch_array($data)){
			    ?>
                        <h4 class="modal-title"><?php echo $d['nama']; ?></h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                
                <div class="modal-body">
                    <img src="foto/reny.png" class="float-left">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><?php echo $d['tempat_tanggal_lahir']; ?></li>
                        <li class="list-group-item"><?php echo $d['alamat']; ?></li>
                        <li class="list-group-item"><?php echo $d['telepon']; ?></li>
                        <li class="list-group-item"><?php echo $d['email']; ?></li>
                    </ul>
                </div>
                <?php
                    }
                ?>
                
                <div class="modal-footer">
                    <button type="submit" name="rute" class="btn btn-success">Rute</button>
                </div>
            </div>
        </div>
    </div>
    <!--End of Modal Reny-->

    <!-- Modal Shereen-->
    <div id="shereen" class="modal fade">
        <div class="modal-dialog modalku">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header bg-warning">
                <?php
                include "koneksiList.php";
                $data = mysqli_query($koneksi,"select * from tabel_mhs where id=7");
		            while($d = mysqli_fetch_array($data)){
			    ?>
                        <h4 class="modal-title"><?php echo $d['nama']; ?></h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                
                <div class="modal-body">
                    <img src="foto/shereen.png" class="float-left">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><?php echo $d['tempat_tanggal_lahir']; ?></li>
                        <li class="list-group-item"><?php echo $d['alamat']; ?></li>
                        <li class="list-group-item"><?php echo $d['telepon']; ?></li>
                        <li class="list-group-item"><?php echo $d['email']; ?></li>
                    </ul>
                </div>
                <?php
                    }
                ?>
                
                <div class="modal-footer">
                    <button type="submit" name="rute" class="btn btn-success">Rute</button>
                </div>
            </div>
        </div>
    </div>
    <!--End of Modal Shereen-->

    <!--Container Fluid Pemisah 1-->
    <div id="listMhs" class="container-fluid">
        <div class="row bg-primary text-center text-light" style="padding: 15px; padding-right:100px; padding-left:100px;">
            <div class="col-lg">
                <h3 class="font-weight-bold">6</h3>
                <p>Fakultas</p>
            </div>
            <div class="col-lg">
                <h3 class="font-weight-bold">5</h3>
                <p>Lembaga</p>
            </div>
            <div class="col-lg">
                <h3 class="font-weight-bold">4</h3>
                <p>Kemahasiswaan</p>
            </div>
            <div class="col-lg">
                <h3 class="font-weight-bold">1.000+</h3>
                <p>Mahasiswa/i</p>
            </div>
        </div>
    </div>
    <!--End of Container Fluid Pemisah 1-->
    <hr>

    <!--Tabel List Mahasiswa-->
    <div class="container-fluid">
        <table class="table table-bordered table-hover">
            <thead class="thead-light">
                <tr>
                    <th><h5>No.</h5></th>
                    <th><h5>Nama</h5></th>
                    <th><h5>Tempat/Tanggal Lahir</h5></th>
                    <th><h5>Alamat</h5></th>
                    <th><h5>Telepon</h5></th>
                    <th><h5>E-mail</h5></th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "koneksiList.php";
                $data = mysqli_query($koneksi,"select * from tabel_mhs");
		            while($d = mysqli_fetch_array($data)){
			    ?>
                <tr>
                    <td><?php echo $d['id']; ?></td>
                    <td><?php echo $d['nama']; ?></td>
                    <td><?php echo $d['tempat_tanggal_lahir']; ?></td>
                    <td><?php echo $d['alamat']; ?></td>
                    <td><?php echo $d['telepon']; ?></td>
                    <td><?php echo $d['email']; ?></td>
                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
        <div class="row text-center">
            <div class="col-lg">
                <button class="btn-warning" style='font-size:24px'>Selengkapnya <i class='fas fa-angle-double-right'></i></button>
            </div>
        </div>
    </div>
    <!--End of List Mhs-->

    <!--Container Fluid Pemisah 2-->
    <div id="artikel" class="container-fluid atas">
        <div class="row bg-primary text-center text-light" style="padding: 15px;">
            <div class="col-lg">
                <h3 class="font-weight-bold">Berita Terbaru</h3>
            </div>
        </div>
    </div>
    <!--End of Container Fluid Pemisah 2-->

    <!--Artikel-->
    <div class="container">
        <!--Artikel Pertama-->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <a href="">
                            <h3 class="text-dark">Website Sistem Informasi Geografis Hadirkan Fitur Baru Agar Pengguna Tiba di Lokasi Tujuan Tepat Waktu</h3>
                        </a>
                        <div class="info-meta">
                            <ul class="list-inline">
                                <li class="list-inline-item"><i class="fas fa-clock"></i> Jan 2, 2021</li>
                                <li class="list-inline-item"><i class="fas fa-eye"></i> 11k</li>
                                <li class="list-inline-item"><i class="fas fa-heart"></i> 777</li>
                                <li class="list-inline-item"><i class="fas fa-user"></i> Posting by SIG</li>
                                <li class="list-inline-item fa-pull-right">Category : Berita</li>
                            </ul>
                        </div>
                        <hr>

                        <div class="media">
                            <a class="fa-pull-left" href="#">
                                <img src="img/fiturBaru.jpg" class="align-self-center artikel">
                            </a>
                            <div class="media-body">
                                <p>Fitur tambahan terbaru di Webite Sistem Informasi Geografis ini sedikit banyak mirip dengan yang ada di Waze dan 
                                    Google Maps. Fitur baru ini berguna bagi pengguna nya agar dapat tiba di lokasi tujuan berikutnya secara tepat waktu.
                                </p>
                                <p>Berikut cara menggunakan fitur tepat waktu dari Website Sistem Informasi Geografis ini : <br>
                                    1. Pertama pengguna harus menentukan tujuan alamat yang akan dituju dengan memilih mode mobil.<br>
                                    2. Selanjutnya cari icon titik tiga yang ada di pojok kanan atas aplikasi, lalu klik .....
                                </p>
                                <p style="text-align: right;">
                                    <a href="artikel_fiturBaru.html">
                                        Read More
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!--Artikel kedua-->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <a href="">
                            <h3 class="text-dark">Beberapa Mahasiswa Universitas Atmajaya Makassar di Kabarkan Pindah Rumah</h3>
                        </a>
                        <div class="info-meta">
                            <ul class="list-inline">
                                <li class="list-inline-item"><i class="fas fa-clock"></i> Jan 11, 2021</li>
                                <li class="list-inline-item"><i class="fas fa-eye"></i> 115k</li>
                                <li class="list-inline-item"><i class="fas fa-heart"></i> 11</li>
                                <li class="list-inline-item"><i class="fas fa-user"></i> Posting by Mimi</li>
                                <li class="list-inline-item fa-pull-right">Category : Berita</li>
                            </ul>
                        </div>
                        <hr>

                        <div class="media">
                            <a class="fa-pull-left" href="#">
                                <img src="img/pindahRumah.jpg" class="align-self-center artikel">
                            </a>
                            <div class="media-body">
                                <p>Lokasi terbaru dan tampilan rumah beberapa mahasiswa ini sedikit banyak mirip dengan yang ada di Amerika Serikat dan 
                                    Yunani. Rumah baru ini berguna bagi penggunanya agar dapat nyaman tinggal di dalamnya dan memiliki fasilitas yang lengkap.
                                </p>
                                <p>Berikut adalah daftar nama mahasiswa Universitas Atmajaya Makassar yang pindah ke lokasi baru, yaitu : <br>
                                    1. Reny Erna Malioy -- Jalan Petitenget Gang Sunyi No. 1, Seminyak, Kuta, Bali, Indonesia 80361.<br>
                                    2. Theresia Elsa Malioy -- Pantai Waecicu, Labuan Bajo, Manggarai Barat, Nusa Tenggara Timur, Indonesia, 86754. .....
                                </p>
                                <p style="text-align: right;">
                                    <a href="artikel_pindahRumah.html">
                                        Read More
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-lg">
                <button class="btn-warning" style='font-size:24px'>Selengkapnya <i class='fas fa-angle-double-right'></i></button>
            </div>
        </div>
    </div>
    <!--End of Artikel-->

    <!--Container Fluid Pemisah 3-->
    <div id="aboutUs" class="container-fluid atas">
        <div class="row bg-primary text-center text-light" style="padding: 10px;">
            <div class="col-lg">
                <h3 class="font-weight-bold">Our Services</h3>
            </div>
        </div>

        <div class="row bg-primary text-center">
            <div class="col-lg-2 judul-icon">
                <a href="https://uajm.ac.id/kalenderakademik/">
                    <i class='fas fa-calendar-alt' style="font-size: 50px; color: yellow;"></i>
                    <h4 class="judul-icon text-light">Kalender</h4>
                </a>
            </div>
            <div class="col-lg-2 judul-icon">
                <a href="http://www.pendaftaran.uajm.ac.id/">
                    <i class='fas fa-university' style="font-size: 50px; color: yellow;"></i>
                    <h4 class="judul-icon text-light">Pendaftaran</h4>
                </a>
            </div>
            <div class="col-lg-2 judul-icon">
                <a href="http://www.fti.uajm.ac.id/alumni-2015.html">
                    <i class='fas fa-user-graduate' style="font-size: 50px; color: yellow;"></i>
                    <h4 class="judul-icon text-light">Alumni</h4>
                </a>
            </div>
            <div class="col-lg-2 judul-icon">
                <a href="http://mahasiswa.uajm.ac.id/elearning/">
                    <i class='fas fa-chalkboard-teacher' style="font-size: 50px; color:yellow;"></i>
                    <h4 class="judul-icon text-light">E-Learning</h4>
                </a>
            </div>
            <div class="col-lg-2 judul-icon">
                <a href="http://mahasiswa.uajm.ac.id/krs/">
                    <i class='fas fa-book-reader' style="font-size: 50px; color:yellow;"></i>
                    <h4 class="judul-icon text-light">KRS</h4>
                </a>
            </div>
            <div class="col-lg-2 judul-icon">
                <a href="http://mahasiswa.uajm.ac.id/khs/">
                    <i class='fas fa-award' style="font-size: 50px; color:yellow;"></i>
                    <h4 class="judul-icon text-light">KHS</h4>
                </a>
            </div>
        </div>
    </div>
    <!--End of Container Fluid Pemisah 3-->

    <!--About Us-->
    <div class="container atas">
        <div class="row text-center">
            <div class="col-lg-6">
            <h3 class="garis text-center">About Us</h3>
                <p>PT. Mimi telah berdiri sejak tanggal 1 Januari 2021. Pada tanggal 14 Januari 2021, 
                    Website Sistem Informasi Geografis resmi diluncurkan sebagai website SIG nasional bagi Universitas AtmaJaya Makassar.
                    Cita- Cita awal PT. Mimi adalah menciptakan website yang menyediakan lokasi-lokasi bagi mahasiswa yang berkuliah di Universitas Atmajaya Makassar, 
                    yang memiliki kualitas dan user friendly, yang memungkinkan masyarakat UAJM memilih mencari dan melihat lokasi-lokasi yang di sajikan PT. Mimi pada Website Sistem Informasi Geografis.
                </p>
            </div>
            <!--Our Visi and Misi-->
            <div class="col-lg-6">
                <h3 class="garis text-center">Visi Misi</h3>
                <p>PT. Mimi berusaha menciptakan website berkualitas dengan kerja keras, upaya bersama, kesungguhan, dan mimpi bersama. 
                    Agar PT. Mimi dapat menyajikan website dengan lokasi-lokasi yang akurat, menarik, dan bermutu untuk mempermudah dalam pencarian lokasi dan informasi mahasiswa di Universitas AtmaJaya Makassar.
                </p>
            </div>
        </div>
        <br>
        <br>
    </div>

    <!--About Us-->
    <div class="container">
        <!--Our Team-->
        <h3 class="text-center garis">Our Teams</h3>
        <div class="row">
            <div class="col-lg-3">
                <div class="card">
                    <img src="img/avatar1.png" class="card-img-top team">
                    <div class="card-body">
                        <h5 class="text-center">Arnold Nasir</h5>
                        <p class="card-text text-center">Dosen RSM <br><a href="mailto:arnold_nasir@lecturer.uajm.ac.id">arnold_nasir@lecturer.uajm.ac.id</a></p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="card">
                    <img src="img/avatar2.png" class="card-img-top team">
                    <div class="card-body">
                        <h5 class="text-center">Paramita Aditung</h5>
                        <p class="card-text text-center">Mahasiswi RSM<br><a href="mailto:paramita_aditung@student.uajm.ac.id">paramita_aditung@student.uajm.ac.id</a></p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="card">
                    <img src="img/avatar1.png" class="card-img-top team">
                    <div class="card-body">
                        <h5 class="text-center">Avatar 1</h5>
                        <p class="card-text text-center">Mahasiswa RSM<br><a href="mailto:paramita_aditung@student.uajm.ac.id">mahasiswa_avatar@student.uajm.ac.id</a></p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="card">
                    <img src="img/avatar2.png" class="card-img-top team">
                    <div class="card-body">
                        <h5 class="text-center">Avatar 2</h5>
                        <p class="card-text text-center">Mahasiswi RSM<br><a href="mailto:paramita_aditung@student.uajm.ac.id">mahasiswi_avatar@student.uajm.ac.id</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End of About Us-->
    <hr>

    <!--Our Contact-->
    <div id="contactUs" class="container-fluid atas">
        <div class="row">
            <div class="col-lg info-panel" style="background-color:rgb(248, 244, 185);">
                <h3 class="text-center font-weight-bold">-Contact-</h3>
                <div class="row">
                    <!--Lokasi-->
                    <div class="col-lg">
                        <img src="img/love.png" class="float-left">
                        <h6 class="contactH6">Lokasi</h6>
                        <p>Jl. Buru No. 30 <br>Kota Makassar <br>Sulawesi Selatan</p>
                    </div>
                    
                    <!--Jam Operasional-->
                    <div class="col-lg">
                        <div class="jam_analog float-left">
                            <div class="xxx">
                                <div class="jarum jarum_detik"></div>
                                <div class="jarum jarum_menit"></div>
                                <div class="jarum jarum_jam"></div>
                                <div class="lingkaran_tengah"></div>
                            </div>
                            <script src="jam.js"></script>
                        </div>
                        <h6 class="contactH6">Operasional</h6>
                        <p>&nbsp;&nbsp;Senin - Jumat, <br>&nbsp;&nbsp;08.20 - 16.00</p>
                    </div>

                    <!--Telepon-->
                    <div class="col-lg">
                        <img src="img/telepon.png" class="float-left">
                        <h6 class="contactH6">Contact</h6>
                        <p>WA: 0852-5699-3110 <br>Fax: (0411) 870294</p>
                    </div>

                    <!--Email-->
                    <div class="col-lg">
                        <img src="img/mail.png" class="float-left">
                        <h6 class="contactH6">Mail</h6>
                        <p><a href="mailto:paramitaaditung@yahoo.com">paramitaaditung@<br>yahoo.com</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End of Our Contact-->

    <!--COntact Us-->
    <div class="container" style="padding: 25px;">
        <div class="row">
            <div class="col-lg-12 info-panel">
                <div class="col">
                    <h3 class="text-center">~~ Send Us a Message ~~</h3>
                    <!--Form-->
                    <form method="POST" action="prosesPesan.php">
                        <div class="row">
                            <!--Nama-->
                            <div class="col-lg">
                                <div class="form-group">
                                    <label class="font-weight-bold">Nama :</label>
                                    <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" required/>
                                </div>
                            </div>

                            <!--Email-->
                            <div class="col-lg">
                                <div class="form-group">
                                    <label class="font-weight-bold">E-mail :</label>
                                    <div class="input-group-append">
                                        <input type="email" class="form-control" name="email" placeholder="Masukkan Email" required/>
                                        <span class="input-group-text">@example.com</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg">
                                <!--Telepon-->
                                <div class="form-group">
                                    <label class="font-weight-bold">Telepon :</label>
                                    <input type="tel" name="telepon" pattern="^\d{4}-\d{4}-\d{4}$" class="form-control" placeholder="xxxx-xxxx-xxxx"/>
                                </div>
                            </div>

                            <div class="col-lg">
                                <!--Subject-->
                                <div class="form-group">
                                    <label class="font-weight-bold">Subject :</label>
                                    <select class="form-control" name="judul">
                                        <option value="Keluhan">Keluhan</option>
                                        <option value="Request">Request</option>
                                        <option value="Saran">Saran</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!--Pesan-->
                        <div class="form-group">
                            <label class="font-weight-bold">Pesan :</label>
                            <textarea class="form-control" name="pesan" rows="5" placeholder="Pesan ku" required></textarea>
                        </div>

                        <!--Button-->
                        <div class="float-right">
                            <button type="reset" class="btn btn-danger">Reset</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <!--End of Send us a Message-->

    <!-- Modal -->
    <div id="faq" class="modal fade">
        <div class="modal-dialog modal-lg">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Question n Answer</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                    
                <div class="modal-body">
                    <div id="accordion">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Dimana Lokasi Universitas Atma Jaya Makassar ?</button>
                                </h5>
                            </div>
                                
                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                    Jl. Tanjung Alang No. 23, Makassar, Sulawesi Selatan, 90134, Indonesia
                                </div>
                            </div>
                        </div>
                            
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Bagaimana cara menghubungi Universitas Atma Jaya Makassar ?</button>
                                </h5>
                            </div>
                                
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                <div class="card-body text-justify">
                                    Telp : 0411-871038 <br>
                                    Fax: 0411-870294 <br>
                                    WA: +6281355049802 <br>
                                    Email : uajm@uajm.ac.id
                                </div>
                            </div>
                        </div>
                        
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Terdapat Fakultas Apa Saja di Universitas Atma Jaya Makassar ?</button>
                                    </h5>
                            </div>
                                
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                <div class="card-body text-justify">
                                    Fakultas Ekonomi dan Bisnis :
                                    <ol>
                                        <li>Program Studi Akuntansi</li>
                                        <li>Program Studi Manajemen</li>
                                        <li>Magister (S2) Akuntansi</li>
                                    </ol>
                                    Fakultas Hukum :
                                    <ol>
                                        <li>Program Studi Ilmu Hukum</li>
                                    </ol>
                                    Fakultas Teknik
                                    <ol>
                                        <li>Program Studi Teknik Elektro</li>
                                        <li>Program Studi Teknik Mesin</li>
                                        <li>Program Studi Teknik Sipil</li>
                                    </ol>
                                    Fakultas Teknologi Informasi
                                    <ol>
                                        <li>Program Studi Teknik Informatika</li>
                                        <li>Program Studi Sistem Informasi</li>
                                    </ol>
                                    Fakultas Psikologi
                                    <ol>
                                        <li>Program Studi Psikologi</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary btn-success">Lihat Lebih Banyak</button>
                </div>
            </div>
        </div>
    </div>
    <!--End of Modal-->

    <!--Footer-->
    <footer class="bg-primary text-light text-left">
        <div class="container-fluid p-4">
            <div class="row">
                <!--Footer Website SIG-->
                <div class="col-lg-6">
                    <h5>PT. Mimi</h5>
                    <p>
                        PT. Mimi resmi menciptakan website Sistem Informasi Geografis sebagai website online
                        bagi Universitas Atmajaya Makassar pada tanggal 1 Januari 2021. PT. Mimi akan terus mengembangkan website-nya, 
                        baik dari sisi tampilan website User Interface, sisi interaksi user, dan sisi kelengkapannya. 
                        Hal ini dilakukan agar PT. Mimi dapat semakin baik dan dicintai oleh pengguna website kami.
                    </p>
                </div>

                <!--Footer Menus-->
                <div class="col-lg-3">
                    <h5>Menus</h5>
                    <ul class="list-unstyled">
                        <li>
                            <a href="#demo" class="text-white">Home</a>
                        </li>
                        <li>
                            <a href="#maps" class="text-white">Maps</a>
                        </li>
                        <li>
                            <a href="#listMhs" class="text-white">List Mahasiswa</a>
                        </li>
                        <li>
                            <a href="#artikel" class="text-white">Artikel</a>
                        </li>
                        <li>
                            <a href="#aboutUs" class="text-white">About Us</a>
                        </li>
                        <li>
                            <a href="#contactUs" class="text-white">Contact Us</a>
                        </li>
                    </ul>
                </div>

                <!--Footer Contact Us-->
                <div class="col-lg-3">
                    <h5>Contact Us</h5>
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <a href="https://www.facebook.com/profile.php?id=100004940116469" target="_blank">
                                <img src="img/facebook.png" class="rounded-circle contact-footer">
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://instagram.com/mimi_p.a?igshid=1nh9b6dljfs7l" target="_blank">
                                <img src="img/instagram.png" class="rounded-circle contact-footer">
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://www.youtube.com/channel/UChmYyd5lCnK9oiW2evFvV8g" target="_blank">
                                <img src="img/youtube.png" class="rounded-circle contact-footer">
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://api.whatsapp.com/send?phone=6281355049802" target="_blank">
                                <img src="img/whatsapp.png" class="rounded-circle contact-footer">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="text-center p-3 text-dark" style="background-color: rgb(248, 244, 185)">
            &copy; 2021 Copyright :
            <a class="text-dark" href="#">Paramita Aditung</a>
        </div>
    </footer>
    <!--End of Footer-->
</body>

</html>