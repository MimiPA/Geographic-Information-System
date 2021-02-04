<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Contact Us</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styleJam.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="styleAbout.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<style>
    body{
      position: relative;
      cursor: url(img/Chanyeol.cur), default;
      background-image: url("img/worldMap.jpg");
      
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
                    <a class="nav-link" href="home.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="home.php">Maps</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="home.php">List Mahasiswa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="home.php">Article</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="home.php">About Us</a>
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

    <!--2 Baris Contact dan Send Message-->
    <div id="contactUs" class="container-fluid jarak">
        <!--Contact Us-->
        <div class="row">
            <div class="col-lg-3 info-panel mb-auto jarakPanel">
                <div class="col">
                    <h3 class="text-center">~~ Contact Us ~~</h3>
                    <!--Lokasi-->
                    <div class="row">
                        <div class="col-lg">
                            <img src="img/love.png" class="float-left">
                            <h6 class="contactH6">Lokasi</h6>
                            <p>Jl. Buru No. 30 Kota Makassar Sulawesi Selatan</p>
                        </div>
                    </div>
                    <hr>

                    <!--Jam Operasional-->
                    <div class="row">
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
                    </div>
                    <hr>

                    <!--Telepon-->
                    <div class="row">
                        <div class="col-lg">
                            <img src="img/telepon.png" class="float-left">
                            <h6 class="contactH6">Contact</h6>
                            <p>WA : 0852-5699-3110 <br>Fax : (0411) 870294</p>
                        </div>
                    </div>
                    <hr>

                    <!--Email-->
                    <div class="row">
                        <div class="col-lg">
                            <img src="img/mail.png" class="float-left">
                            <h6 class="contactH6">Mail</h6>
                            <p><a href="mailto:paramitaaditung@gmail.com">paramitaaditung@gmail.com</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <!--End of Contact Us-->

            <!--Send Us Message-->
            <div class="col-lg-8 info-panel jarakPanel">
                <div class="col">
                    <h3 class="text-center">~~ Send Us Your Biodata ~~</h3>
                    <!--Form-->
                    <form method="POST" action="prosesBiodata.php">
                        <!--Nama-->
                        <div class="form-group">
                            <label class="font-weight-bold">Nama :</label>
                            <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" required/>
                        </div>

                        <!--Tempat Tanggal Lhair-->
                        <div class="form-group">
                            <label class="font-weight-bold">Tempat Tanggal Lahir :</label>
                            <input type="text" name="ttl" class="form-control" placeholder="Makassar, 1 januari 2001" required/>
                        </div>

                        <!--Alamat-->
                        <div class="form-group">
                            <label class="font-weight-bold">Alamat :</label>
                            <input type="text" name="alamat" class="form-control" placeholder="Jalanan" required/>
                        </div>

                        <!--Telepon-->
                        <div class="form-group">
                            <label class="font-weight-bold">Telepon :</label>
                            <input type="tel" name="telepon" pattern="^\d{4}-\d{4}-\d{4}$" class="form-control col-lg-3" placeholder="xxxx-xxxx-xxxx" required/>
                        </div>

                        <!--Email-->
                        <div class="form-group">
                            <label class="font-weight-bold">E-mail :</label>
                            <div class="input-group-append">
                                <input type="email" class="form-control" name="email" placeholder="Masukkan Email" required/>
                                <span class="input-group-text">@example.com</span>
                            </div>
                        </div>

                        <!--Pendidikan-->
                        <div class="form-group">
                            <label class="font-weight-bold">Pendidikan :</label>
                            <select class="form-control col-lg-1" name="pendidikan">
                                <option value="S1">S1</option>
                                <option value="S2">S2</option>
                                <option value="S3">S3</option>
                            </select>
                        </div>

                        <!--Lat-->
                        <div class="form-group">
                            <label class="font-weight-bold">Latitude :</label>
                            <input type="text" name="lat" class="form-control" placeholder="-5.1719764" required/>
                        </div>

                        <!--Lng-->
                        <div class="form-group">
                            <label class="font-weight-bold">Longitude :</label>
                            <input type="text" name="lng" class="form-control" placeholder="119.4030439" required/>
                        </div>

                        <!--Button-->
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="reset" class="btn btn-danger">Reset</button>
                    </form>
                </div>
            </div>
            <!--End of Send Us Message-->
        </div>
    </div>
    <!--End of 2 Baris Contact dan Send Message-->

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
                            <a href="home.php" class="text-white">Home</a>
                        </li>
                        <li>
                            <a href="listMhs.php" class="text-white">List Mahasiswa</a>
                        </li>
                        <li>
                            <a href="artikel.html" class="text-white">Artikel</a>
                        </li>
                        <li>
                            <a href="aboutUs.php" class="text-white">About Us</a>
                        </li>
                        <li>
                            <a href="faq.html" class="text-white">FaQ</a>
                        </li>
                        <li>
                            <a href="contactUs.php" class="text-white">Contact Us</a>
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
            &copy; 2020 Copyright :
            <a class="text-dark" href="#">Paramita Aditung</a>
        </div>
    </footer>
    <!--End of Footer-->
</body>

</html>