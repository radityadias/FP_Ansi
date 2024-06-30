<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Warteg</title>

    <link rel="stylesheet" href="css/beranda.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.7.2/font/bootstrap-icons.min.css"
        rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

  </head>
  <body>

     @include('partial.navbar')

     <div class="container-fluid" id="con-beranda">
        <div class="row">
            {{-- Menu --}}
            <div class="col-md-6"> 
                <div class="container" id="con-menu">
                    <div class="row row-cols-2">
                        <div class="col">
                            <div class="card" style="width: 18rem;">
                                <img src="img/KentangBalado.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Kentang Balado</h5>
                                    <p class="card-text">Rp3.000</p>
                                    <div class="d-flex justify-content-between">
                                        <button class="btn btn-outline-primary"><i class="fas fa-minus"></i></button>
                                        <button class="btn btn-outline-primary"><i class="fas fa-plus"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card" style="width: 18rem;">
                                <img src="img/Kikil.png" class="card-img-top" alt="..." style="height: 198px">
                                <div class="card-body">
                                    <h5 class="card-title">Kikil</h5>
                                    <p class="card-text">Rp4.000</p>
                                    <div class="d-flex justify-content-between">
                                        <button class="btn btn-outline-primary"><i class="fas fa-minus"></i></button>
                                        <button class="btn btn-outline-primary"><i class="fas fa-plus"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row row-cols-2">
                        <div class="col">
                            <div class="card" style="width: 18rem;">
                                <img src="img/OrekTempe.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Orek Tempe</h5>
                                    <p class="card-text">3.000</p>
                                    <div class="d-flex justify-content-between">
                                        <button class="btn btn-outline-primary"><i class="fas fa-minus"></i></button>
                                        <button class="btn btn-outline-primary"><i class="fas fa-plus"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card" style="width: 18rem;">
                                <img src="img/esjeruk.png" class="card-img-top" alt="..." style="height: 178px">
                                <div class="card-body">
                                    <h5 class="card-title">Es Jeruk</h5>
                                    <p class="card-text">Rp.3000</p>
                                    <div class="d-flex justify-content-between">
                                        <button class="btn btn-outline-primary"><i class="fas fa-minus"></i></button>
                                        <button class="btn btn-outline-primary"><i class="fas fa-plus"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row row-cols-2">
                        <div class="col">
                            <div class="card" style="width: 18rem;">
                                <img src="img/Esteh.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Es Teh</h5>
                                    <p class="card-text">Rp.3000</p>
                                    <div class="d-flex justify-content-between">
                                        <button class="btn btn-outline-primary"><i class="fas fa-minus"></i></button>
                                        <button class="btn btn-outline-primary"><i class="fas fa-plus"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card" style="width: 18rem;">
                                <img src="img/KopiHitam.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Kopi Hitam</h5>
                                    <p class="card-text">Rp.4000</p>
                                    <div class="d-flex justify-content-between">
                                        <button class="btn btn-outline-primary"><i class="fas fa-minus"></i></button>
                                        <button class="btn btn-outline-primary"><i class="fas fa-plus"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Pembayaran --}}
            <div class="col-md-6">
                <div class="container" id="con-bayar">
                    <div class="wrapper-bayar">
                        <div class="row row-cols-3"> {{-- Label --}}
                            <div class="col">
                                <p>Pesanan</p>
                            </div>
                            <div class="col">
                                <p>Jumlah</p>
                            </div>
                            <div class="col">
                                <p>Harga    </p>
                            </div>
                        </div>
                        <div class="row" style="margin-top: -20px"  >
                            <div class="col">
                                <hr>
                            </div>
                        </div>
                        <div class="row row-cols-3"> {{-- Input --}}
                            <div class="col">
                                <p>Makanan</p>
                            </div>
                            <div class="col">
                                <p>1</p>
                            </div>
                            <div class="col">
                                <p>Rp25.000</p>
                            </div>
                        </div> 
                         <div class="row">
                            <div class="col">
                                <hr>
                            </div>
                        </div>
                        <div class="row row-cols-3"> {{-- Input --}}
                            <div class="col">
                                <p>Total Harga</p>
                            </div>
                            <div class="col">
                                <p> </p>
                            </div>
                            <div class="col">
                                <p>Rp25.000</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>



