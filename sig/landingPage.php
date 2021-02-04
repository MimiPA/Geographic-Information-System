<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Landing Page</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="styleLanding.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

        <style>
            body{
              cursor: url(img/Chanyeol.cur), default;
            }
          </style>
    </head>

    <body>
        <nav class="navbar navbar-expand-md navbar-light">
            <div class="container">
                <a class="navbar-brand" href="http://www.uajm.ac.id/" target="_blank">Sistem Informasi Geografis</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="menu">
                    <div class="navbar-nav ml-auto">
                        <a class="nav-item nav-link active" href="#home">Home<span class="sr-only">(current)</span></a>
                        <a class="nav-item nav-link" href="#" data-toggle="modal" data-target="#myModal"><i class='fas fa-lock'></i> Sign-in</a>
                    </div>
                </div>
            </div>
        </nav>

        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="">Cari lokasi mahasiswa <span>UAJM ?</span><br> pakai <span>Sistem Informasi Geografis</span> saja</h1>
                <a href="#" class="btn btn-danger tombol" data-toggle="modal" data-target="#myModal">SIGN-IN</a>
            </div>
        </div>

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-10 info-panel">
                    <div class="row">
                        <div class="col-lg">
                            <img src="img/mahasiswa.png" alt="Mahasiswi" class="float-left">
                            <h4>Mahasiswa/i</h4>
                            <p>Tersedia lokasi mahasiswa/i FTI UAJM</p>
                        </div>

                        <div class="col-lg">
                            <img src="img/pin.png" alt="Lokasi" class="float-left">
                            <h4>Lokasi</h4>
                            <p>Dapat melihat lokasi tempat tinggal mahasiswa/i FTI UAJM</p>
                        </div>

                        <div class="col-lg">
                            <img src="img/informasi.png" alt="Informasi" class="float-left rounded-circle">
                            <h4>Informasi</h4>
                            <p>Tersedia informasi mengenai mahasiswa/i FTI UAJM</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <?php 
        if(isset($_GET['pesan'])){
            if($_GET['pesan'] == "gagal"){
                echo "<script>alert('Login gagal! username dan password salah!');</script>";
            }
            else if($_GET['pesan'] == "logout"){
                echo "<script>alert('Anda telah berhasil logout');</script>";
            }
            else if($_GET['pesan'] == "belum_login"){
                echo "<script>alert('Anda harus login untuk mengakses halaman admin');</script>";
            }
        }
        ?>

        <!-- Modal -->
        <div id="myModal" class="modal fade">
            <div class="modal-dialog modal-sm">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Login</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    
                    <div class="modal-body">
                        <form method="post" action="login.php">
                            <!--Nama-->
                            <div class="form-group">
                                <label class="font-weight-bold"><i class='fas fa-user'></i> Username :</label>
                                <input type="text" name="username" class="form-control" placeholder="Masukkan username" required/>
                            </div>

                            <!--Password-->
                            <div class="form-group">
                                <label class="font-weight-bold"><i class='fas fa-cog'></i> Password :</label>
                                <input type="password" name="password" class="form-control" placeholder="Masukkan password" required/>
                            </div>
                    </div>

                        <div class="modal-footer">
                            <button type="submit" name="login" class="btn btn-primary btn-success">LOGIN</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!--End of Modal-->

        <!--Deskripsi-->
        <div class="container deskripsi">
            <div class="row">
                <div class="col-lg">
                    <img src="img/worldMap.jpg" class="float-right">
                </div>
                <div class="col-lg">
                    <h3>Anda diberikan banyak informasi mengenai lokasi <b>Mahasiswa UAJM</b></h3>
                    <p>Banyaknya informasi lokasi yang diberikan menjadikan website Sistem Informasi Geografis mempunyai di kunjungi banyak mahasiswa</p>
                    <a href="#" class="btn btn-danger tombol" data-toggle="modal" data-target="#myModal">SIGN-IN</a>
                </div>
            </div>
        </div>
        <!--End of Deskripsi-->
        

        <!--Footer-->
        <footer class="bg-primary text-light text-left">
            <div class="text-center p-3 text-dark" style="background-color: rgb(248, 244, 185)">
                &copy; 2020 Copyright :
                <a class="text-dark" href="#">Paramita Aditung</a>
            </div>
        </footer>

    </body>

</html>