<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- font awesome -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/font/css/all.min.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <!--  CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css">
    <!-- Logo -->
    <link rel="shortcut icon" href="<?php echo base_url() ?>assets/img/musong3.PNG">




    <title>MUSONG STORE</title>

<body>
    <!-- HEADER -->

    <nav class="navbar navbar-expand-lg navbar-light  bg-light fixed-top">
        <div class=" container">
            <img src="<?php echo base_url() ?>assets/img/musong1.PNG" style="width: 180px; height: 70px" class="mr-1">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link font-weight-bold" href="#">Beranda <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('welcome/tentang') ?>">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Hubungi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Bantuan</a>
                    </li>
                </ul>

                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Cari</button>
                </form>
                <div class="icon mt-1">
                    <i class="fas fa-cart-plus ml-3 mr-3"></i>
                    <i class="fas fa-envelope mr-3"></i>
                    <i class="fas fa-bell mr-3"></i>

                </div>

            </div>
        </div>
    </nav>



    <div class="row mt-3 no-gutters">
        <!-- Side Bar
        <div class="col-md-2  p-5 pt-2 mt-4 >
            <ul class=" list-group list-group-flush">
            <li class="list-group-item  pt-1" style="background-color: #FF8C00;">
                KATEGORI PRODUK
            </li>
            <li class="list-group-item"><i class="fab fa-forumbee"></i>&nbsp; MUSONG 1 KG</li>
            <li class="list-group-item"><i class="fab fa-forumbee"></i>&nbsp; MUSONG 500 GR</li>
            <li class="list-group-item"><i class="fab fa-forumbee"></i>&nbsp; MUSONG 250 GR</li>
            <li class="list-group-item"><i class="fab fa-forumbee"></i>&nbsp; MUSONG 150 GR</li>
            <li class="list-group-item"><i class="fab fa-forumbee"></i>&nbsp; MUSONG 95 GR</li>
            </ul>
        </div>
                    -->

        <br><br>
        <br>
        <div class="col-md-12 col-md-12 p-2 mt-4">
            <div id="carouselExampleIndicators" class="carousel slide carousel-fade col-xxl-12 mt-5" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner shadow-sm rounded">
                    <div class="carousel-item active">
                        <img class="d-block w-100 " src="<?php echo base_url() ?>assets/img/a.jpg" alt="First slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Mountains, Nature Collection</h5>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?php echo base_url() ?>assets/img/c.jpg" alt="Second slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Freedom, Sea Collection</h5>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?php echo base_url() ?>assets/img/b.jpg" alt="Third slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Living the Dream, Lost Island</h5>
                        </div>
                    </div>
                </div>
            </div>

            <br>
            <br>


            <div class="container">
                <center>
                    <form action="">

                        <!-- Example split danger button -->
                        <div class="btn-group mr-3">
                            <button type="button" class="btn" style="background-color: #ff9800;"> Promo</button>
                        </div>
                        <div class=" btn-group mr-3">
                            <button type="button" class="btn"> Gratis Ongkir</button>
                        </div>
                        <div class="btn-group mr-3">
                            <button type="button" class="btn">Madu</button>
                        </div>
                        <div class="btn-group mr-3">
                            <button type="button" class="btn"> Flash Sale</button>
                        </div>

                    </form>

                    <br><br>
                    <br>
                    <h4 class="font-weight-bold mb-1 bg-warning p-2 col-md-10 mr-4">MUSONG FLASH SALE</h4>

                </center>

                <div class=" row ml-5 p-4 ">
                    <!-- Produk 1-->
                    <div class="card p-1 ml-4 mt-4" style="width: 13rem; height: 31rem">
                        <img src="<?php echo base_url() ?>assets/produk/madu1.jpg" class="card-img-top">
                        <div class="card-body bg-light">
                            <h5 class="card-title">Musong 500 GR</h5>
                            <i class="fas fa-star " style="color: #ff9800;"></i>
                            <i class="fas fa-star" style="color: #ff9800;"></i>
                            <i class="fas fa-star" style="color: #ff9800;"></i>
                            <i class="fas fa-star" style="color: #ff9800;"></i>
                            <i class="fas fa-star-half-alt" style="color: #ff9800;"></i>
                            <p class="card-text">Madu Langka Hutan Liar Bangka Jenis Madu Perpat Laut</p>
                            <a href="#" class="btn btn-info btn-sm" data-toggle="modal" data-target="#produk1">Detail</a>
                            <a href="#" class="btn btn-danger btn-sm">Rp. 250.000</a>
                        </div>
                    </div>
                    <!-- Produk 2-->
                    <div class="card p-1 ml-4 mt-4" style="width: 13rem; height: 31rem">
                        <img src="<?php echo base_url() ?>assets/produk/madu1.jpg" class="card-img-top">
                        <div class="card-body bg-light">
                            <h5 class="card-title">Musong 500 GR</h5>
                            <i class="fas fa-star " style="color: #ff9800;"></i>
                            <i class="fas fa-star" style="color: #ff9800;"></i>
                            <i class="fas fa-star" style="color: #ff9800;"></i>
                            <i class="fas fa-star" style="color: #ff9800;"></i>
                            <i class="fas fa-star-half-alt" style="color: #ff9800;"></i>
                            <p class="card-text">Madu Langka Hutan Liar Bangka Jenis Madu Perpat Laut</p>
                            <a href="#" class="btn btn-info btn-sm">Detail</a>
                            <a href="#" class="btn btn-danger btn-sm">Rp. 250.000</a>
                        </div>
                    </div>
                    <!-- Produk 3-->
                    <div class="card p-1 ml-4 mt-4" style="width: 13rem; height: 31rem">
                        <img src="<?php echo base_url() ?>assets/produk/madu1.jpg" class="card-img-top">
                        <div class="card-body bg-light">
                            <h5 class="card-title">Musong 500 GR</h5>
                            <i class="fas fa-star " style="color: #ff9800;"></i>
                            <i class="fas fa-star" style="color: #ff9800;"></i>
                            <i class="fas fa-star" style="color: #ff9800;"></i>
                            <i class="fas fa-star" style="color: #ff9800;"></i>
                            <i class="fas fa-star-half-alt" style="color: #ff9800;"></i>
                            <p class="card-text">Madu Langka Hutan Liar Bangka Jenis Madu Perpat Laut</p>
                            <a href="#" class="btn btn-info btn-sm">Detail</a>
                            <a href="#" class="btn btn-danger btn-sm">Rp. 250.000</a>
                        </div>
                    </div>
                    <!-- Produk 4-->
                    <div class="card p-1 ml-4 mt-4" style="width: 13rem; height: 31rem">
                        <img src="<?php echo base_url() ?>assets/produk/madu1.jpg" class="card-img-top">
                        <div class="card-body bg-light">
                            <h5 class="card-title">Musong 500 GR</h5>
                            <i class="fas fa-star " style="color: #ff9800;"></i>
                            <i class="fas fa-star" style="color: #ff9800;"></i>
                            <i class="fas fa-star" style="color: #ff9800;"></i>
                            <i class="fas fa-star" style="color: #ff9800;"></i>
                            <i class="fas fa-star-half-alt" style="color: #ff9800;"></i>
                            <p class="card-text">Madu Langka Hutan Liar Bangka Jenis Madu Perpat Laut</p>
                            <a href="#" class="btn btn-info btn-sm">Detail</a>
                            <a href="#" class="btn btn-danger btn-sm">Rp. 250.000</a>
                        </div>
                    </div>


                    <div id="carouselExampleDark" class="carousel carousel-dark slide mt-3 col-md-11" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="10000">
                                <img src="<?php echo base_url() ?>assets/produk/madu2.jpg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 style="color:white">PROMO</h5>
                                    <p style="color:white">Some representative placeholder content for the first slide.</p>
                                </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="2000">
                                <img src="<?php echo base_url() ?>assets/produk/madu2.jpg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 style="color:white">PROMO</h5>
                                    <p style="color:white">Some representative placeholder content for the first slide.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo base_url() ?>assets/produk/madu2.jpg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 style="color:white">PROMO</h5>
                                    <p style="color:white">Some representative placeholder content for the first slide.</p>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>

                    <center class="mt-4 mb-3 p-2 mr-5 col-md-11 bg-warning">
                        <h4 class="font-weight-bold mr-5">NEW PRODUCT</h4>
                    </center>


                    <!-- Produk 5-->
                    <div class="card p-1 ml-4 mt-4" style="width: 13rem; height: 31rem">
                        <img src="<?php echo base_url() ?>assets/produk/madu1.jpg" class="card-img-top">
                        <div class="card-body bg-light">
                            <h5 class="card-title">Musong 500 GR</h5>
                            <i class="fas fa-star " style="color: #ff9800;"></i>
                            <i class="fas fa-star" style="color: #ff9800;"></i>
                            <i class="fas fa-star" style="color: #ff9800;"></i>
                            <i class="fas fa-star" style="color: #ff9800;"></i>
                            <i class="fas fa-star-half-alt" style="color: #ff9800;"></i>
                            <p class="card-text">Madu Langka Hutan Liar Bangka Jenis Madu Perpat Laut</p>
                            <a href="#" class="btn btn-info btn-sm">Detail</a>
                            <a href="#" class="btn btn-danger btn-sm">Rp. 250.000</a>
                        </div>
                    </div>
                    <!-- Produk 6-->
                    <div class="card p-1 ml-4 mt-4" style="width: 13rem; height:  31rem ">
                        <img src="<?php echo base_url() ?>assets/produk/madu1.jpg" class="card-img-top">
                        <div class="card-body bg-light">
                            <h5 class="card-title">Musong 500 GR</h5>
                            <i class="fas fa-star " style="color: #ff9800;"></i>
                            <i class="fas fa-star" style="color: #ff9800;"></i>
                            <i class="fas fa-star" style="color: #ff9800;"></i>
                            <i class="fas fa-star" style="color: #ff9800;"></i>
                            <i class="fas fa-star-half-alt" style="color: #ff9800;"></i>
                            <p class="card-text">Madu Langka Hutan Liar Bangka Jenis Madu Perpat Laut</p>
                            <a href="#" class="btn btn-info btn-sm">Detail</a>
                            <a href="#" class="btn btn-danger btn-sm">Rp. 250.000</a>
                        </div>
                    </div>
                    <!-- Produk 7-->
                    <div class="card p-1 ml-4 mt-4" style="width: 13rem; height: 31rem ">
                        <img src="<?php echo base_url() ?>assets/produk/madu1.jpg" class="card-img-top">
                        <div class="card-body bg-light">
                            <h5 class="card-title">Musong 500 GR</h5>
                            <i class="fas fa-star " style="color: #ff9800;"></i>
                            <i class="fas fa-star" style="color: #ff9800;"></i>
                            <i class="fas fa-star" style="color: #ff9800;"></i>
                            <i class="fas fa-star" style="color: #ff9800;"></i>
                            <i class="fas fa-star-half-alt" style="color: #ff9800;"></i>
                            <p class="card-text">Madu Langka Hutan Liar Bangka Jenis Madu Perpat Laut</p>
                            <a href="#" class="btn btn-info btn-sm">Detail</a>
                            <a href="#" class="btn btn-danger btn-sm">Rp. 250.000</a>
                        </div>
                    </div>
                    <!-- Produk 8-->
                    <div class="card p-1 ml-4 mt-4" style="width: 13rem; height: 31rem ">
                        <img src="<?php echo base_url() ?>assets/produk/madu1.jpg" class="card-img-top">
                        <div class="card-body bg-light">
                            <h5 class="card-title">Musong 500 GR</h5>
                            <i class="fas fa-star " style="color: #ff9800;"></i>
                            <i class="fas fa-star" style="color: #ff9800;"></i>
                            <i class="fas fa-star" style="color: #ff9800;"></i>
                            <i class="fas fa-star" style="color: #ff9800;"></i>
                            <i class="fas fa-star-half-alt" style="color: #ff9800;"></i>
                            <p class="card-text">Madu Langka Hutan Liar Bangka Jenis Madu Perpat Laut</p>
                            <a href="#" class="btn btn-info btn-sm">Detail</a>
                            <a href="#" class="btn btn-danger btn-sm">Rp. 250.000</a>
                        </div>
                    </div>
                    <div class="card p-1 ml-4 mt-4" style="width: 13rem; height: 31rem">
                        <img src="<?php echo base_url() ?>assets/produk/madu1.jpg" class="card-img-top">
                        <div class="card-body bg-light">
                            <h5 class="card-title">Musong 500 GR</h5>
                            <i class="fas fa-star " style="color: #ff9800;"></i>
                            <i class="fas fa-star" style="color: #ff9800;"></i>
                            <i class="fas fa-star" style="color: #ff9800;"></i>
                            <i class="fas fa-star" style="color: #ff9800;"></i>
                            <i class="fas fa-star-half-alt" style="color: #ff9800;"></i>
                            <p class="card-text">Madu Langka Hutan Liar Bangka Jenis Madu Perpat Laut</p>
                            <a href="#" class="btn btn-info btn-sm">Detail</a>
                            <a href="#" class="btn btn-danger btn-sm">Rp. 250.000</a>
                        </div>
                    </div>
                    <!-- Produk 9-->
                    <div class="card p-1 ml-4 mt-4" style="width: 13rem; height:  31rem ">
                        <img src="<?php echo base_url() ?>assets/produk/madu1.jpg" class="card-img-top">
                        <div class="card-body bg-light">
                            <h5 class="card-title">Musong 500 GR</h5>
                            <i class="fas fa-star " style="color: #ff9800;"></i>
                            <i class="fas fa-star" style="color: #ff9800;"></i>
                            <i class="fas fa-star" style="color: #ff9800;"></i>
                            <i class="fas fa-star" style="color: #ff9800;"></i>
                            <i class="fas fa-star-half-alt" style="color: #ff9800;"></i>
                            <p class="card-text">Madu Langka Hutan Liar Bangka Jenis Madu Perpat Laut</p>
                            <a href="#" class="btn btn-info btn-sm">Detail</a>
                            <a href="#" class="btn btn-danger btn-sm">Rp. 250.000</a>
                        </div>
                    </div>
                    <!-- Produk 10-->
                    <div class="card p-1 ml-4 mt-4" style="width: 13rem; height: 31rem ">
                        <img src="<?php echo base_url() ?>assets/produk/madu1.jpg" class="card-img-top">
                        <div class="card-body bg-light">
                            <h5 class="card-title">Musong 500 GR</h5>
                            <i class="fas fa-star " style="color: #ff9800;"></i>
                            <i class="fas fa-star" style="color: #ff9800;"></i>
                            <i class="fas fa-star" style="color: #ff9800;"></i>
                            <i class="fas fa-star" style="color: #ff9800;"></i>
                            <i class="fas fa-star-half-alt" style="color: #ff9800;"></i>
                            <p class="card-text">Madu Langka Hutan Liar Bangka Jenis Madu Perpat Laut</p>
                            <a href="#" class="btn btn-info btn-sm">Detail</a>
                            <a href="#" class="btn btn-danger btn-sm">Rp. 250.000</a>
                        </div>
                    </div>

                    <!-- Produk 11-->
                    <div class="card p-1 ml-4 mt-4" style="width: 13rem; height: 31rem">
                        <img src="<?php echo base_url() ?>assets/produk/madu1.jpg" class="card-img-top">
                        <div class="card-body bg-light">
                            <h5 class="card-title">Musong 500 GR</h5>
                            <i class="fas fa-star " style="color: #ff9800;"></i>
                            <i class="fas fa-star" style="color: #ff9800;"></i>
                            <i class="fas fa-star" style="color: #ff9800;"></i>
                            <i class="fas fa-star" style="color: #ff9800;"></i>
                            <i class="fas fa-star-half-alt" style="color: #ff9800;"></i>
                            <p class="card-text">Madu Langka Hutan Liar Bangka Jenis Madu Perpat Laut</p>
                            <a href="#" class="btn btn-info btn-sm">Detail</a>
                            <a href="#" class="btn btn-danger btn-sm">Rp. 250.000</a>
                        </div>
                    </div>

                    <div class="card p-1 mt-3 ml-3" style="width: 28rem;">
                        <img src="<?php echo base_url() ?>assets/produk/madu2.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-warning">Detail</a>
                        </div>
                    </div>
                    <div class="card p-1 mt-3 ml-3" style="width: 28rem;">
                        <img src="<?php echo base_url() ?>assets/produk/madu2.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-warning">Detail</a>
                        </div>
                    </div>
                    <!-- Produk 8-->
                    <div class="card p-1 ml-4 mt-4" style="width: 13rem; height: 31rem ">
                        <img src="<?php echo base_url() ?>assets/produk/madu1.jpg" class="card-img-top">
                        <div class="card-body bg-light">
                            <h5 class="card-title">Musong 500 GR</h5>
                            <i class="fas fa-star " style="color: #ff9800;"></i>
                            <i class="fas fa-star" style="color: #ff9800;"></i>
                            <i class="fas fa-star" style="color: #ff9800;"></i>
                            <i class="fas fa-star" style="color: #ff9800;"></i>
                            <i class="fas fa-star-half-alt" style="color: #ff9800;"></i>
                            <p class="card-text">Madu Langka Hutan Liar Bangka Jenis Madu Perpat Laut</p>
                            <a href="#" class="btn btn-info btn-sm">Detail</a>
                            <a href="#" class="btn btn-danger btn-sm">Rp. 250.000</a>
                        </div>
                    </div>
                    <div class="card p-1 ml-4 mt-4" style="width: 13rem; height: 31rem">
                        <img src="<?php echo base_url() ?>assets/produk/madu1.jpg" class="card-img-top">
                        <div class="card-body bg-light">
                            <h5 class="card-title">Musong 500 GR</h5>
                            <i class="fas fa-star " style="color: #ff9800;"></i>
                            <i class="fas fa-star" style="color: #ff9800;"></i>
                            <i class="fas fa-star" style="color: #ff9800;"></i>
                            <i class="fas fa-star" style="color: #ff9800;"></i>
                            <i class="fas fa-star-half-alt" style="color: #ff9800;"></i>
                            <p class="card-text">Madu Langka Hutan Liar Bangka Jenis Madu Perpat Laut</p>
                            <a href="#" class="btn btn-info btn-sm">Detail</a>
                            <a href="#" class="btn btn-danger btn-sm">Rp. 250.000</a>
                        </div>
                    </div>
                    <!-- Produk 9-->
                    <div class="card p-1 ml-4 mt-4" style="width: 13rem; height:  31rem ">
                        <img src="<?php echo base_url() ?>assets/produk/madu1.jpg" class="card-img-top">
                        <div class="card-body bg-light">
                            <h5 class="card-title">Musong 500 GR</h5>
                            <i class="fas fa-star " style="color: #ff9800;"></i>
                            <i class="fas fa-star" style="color: #ff9800;"></i>
                            <i class="fas fa-star" style="color: #ff9800;"></i>
                            <i class="fas fa-star" style="color: #ff9800;"></i>
                            <i class="fas fa-star-half-alt" style="color: #ff9800;"></i>
                            <p class="card-text">Madu Langka Hutan Liar Bangka Jenis Madu Perpat Laut</p>
                            <a href="#" class="btn btn-info btn-sm">Detail</a>
                            <a href="#" class="btn btn-danger btn-sm">Rp. 250.000</a>
                        </div>
                    </div>
                    <!-- Produk 10-->
                    <div class="card p-1 ml-4 mt-4" style="width: 13rem; height: 31rem ">
                        <img src="<?php echo base_url() ?>assets/produk/madu1.jpg" class="card-img-top">
                        <div class="card-body bg-light">
                            <h5 class="card-title">Musong 500 GR</h5>
                            <i class="fas fa-star " style="color: #ff9800;"></i>
                            <i class="fas fa-star" style="color: #ff9800;"></i>
                            <i class="fas fa-star" style="color: #ff9800;"></i>
                            <i class="fas fa-star" style="color: #ff9800;"></i>
                            <i class="fas fa-star-half-alt" style="color: #ff9800;"></i>
                            <p class="card-text">Madu Langka Hutan Liar Bangka Jenis Madu Perpat Laut</p>
                            <a href="#" class="btn btn-info btn-sm">Detail</a>
                            <a href="#" class="btn btn-danger btn-sm">Rp. 250.000</a>
                        </div>
                    </div>
                    <center class="mt-5 mb-3 p-2 mr-5 col-md-11 bg-warning">
                        <h4 class="font-weight-bold mr-5">SOSIAL MEDIA</h4>
                    </center>
                    <div id="carouselExampleControls" class="carousel slide col-md-11 col-sm-11  p-4 ml-1" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <iframe width="890" height="515" src="https://www.youtube.com/embed/qrvqIvqSeDw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <div class="carousel-item">
                                <iframe width="890" height="515" src="https://www.youtube.com/embed/QRtL40HBAq0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <div class="carousel-item">
                                <iframe width="890" height="515" src="https://www.youtube.com/embed/A-_AfwoQd4M" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>

                            <div class="carousel-item">

                                <div class="row mr-4">
                                    <div class="col mr-4 ">
                                        <blockquote style="width:400" class="instagram-media" data-instgrm-captioned data-instgrm-permalink="https://www.instagram.com/tv/CNmOByUjOJR/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="13" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);">
                                        </blockquote>
                                    </div>
                                    <div class="col">

                                        <blockquote style="width:400" class="instagram-media mr-4" data-instgrm-captioned data-instgrm-permalink="https://www.instagram.com/p/COpQTXWB2z1/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="13" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);">
                                        </blockquote>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>

                </div>

                <!-- Modal -->
                <div class="modal fade" id="produk1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Detail Produk</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col md-6">
                                        <img src="<?php echo base_url() ?>assets/produk/madu1.jpg" width="300" height="400">
                                    </div>
                                    <div class="col md-6">
                                        <table class="table table-borderless">
                                            <tr>
                                                <th>Nama Produk</th>
                                                <td>Musong 500 Gr</td>
                                            </tr>
                                            <tr>
                                                <th>jenis </th>
                                                <td>Hutan Liar Perpat Laut</td>
                                            </tr>
                                            <tr>
                                                <th>Biaya Ongkir </th>
                                                <td>Rp. 120.000</td>
                                            </tr>
                                            <tr>
                                                <th>Rating Produk</th>
                                                <td> <i class="fas fa-star " style="color: #ff9800;"></i>
                                                    <i class="fas fa-star" style="color: #ff9800;"></i>
                                                    <i class="fas fa-star" style="color: #ff9800;"></i>
                                                    <i class="fas fa-star" style="color: #ff9800;"></i>
                                                    <i class="fas fa-star-half-alt" style="color: #ff9800;"></i>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                                <button type="button" class="btn btn-primary">Beli</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Modal -->

            </div>

        </div>



        <script async src="//www.instagram.com/embed.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>


</body>

</html>