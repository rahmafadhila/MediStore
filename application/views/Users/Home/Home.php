<html>
    <head>
        <link
            rel="stylesheet"
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
            crossorigin="anonymous">
        <script
            src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
        <script
            src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link
            href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@700&display=swap"
            rel="stylesheet">
        <link
            href="https://fonts.googleapis.com/css2?family=Quattrocento:wght@700&display=swap"
            rel="stylesheet">
        <script type="ops.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <style type="text/css">
            body {
                width: auto;
                height: 100%;
                bottom: 0;
                position: relative;
            }

             #sambutan {
                text-align: center;
                position: relative;
            }
            /* For mobile phones: */
            [class*="col-"] {
                width: 100%;
            }
            
            ::-webkit-scrollbar {
                display: none;
            }
            .carousel-item{
                background: url("<?php echo base_url('assets/wow.png');?>");
                background: url("<?php echo base_url('assets/x-ray.jpg');?>");
                background: url("<?php echo base_url('assets/hoo.jpg');?>");
            }  

            .col-img{
                width: 100%;
                display: block;
                height: 590px;
                overflow: hidden;
                object-fit: cover;
            }
            #stetoskop #tongkat #termometer{
                width: 50px;
                height: 50px;
            }
            /*.col-img1{
                width: 100%;
                display: block;
                height: auto;
                overflow: hidden;
                object-fit: cover; 
            }
            .btn .btn-primary {
                 position: absolute;
            }
        </style>
    </head>
    <body>
    <!-- CAROUSEL -->
    <section class="mb-5">
         <div class="bd-example">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <div>
                    <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  </ol>
                  <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="col-img">
                                <img src="assets/wow.png" class="d-block w-100">
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-img">
                                <img src="assets/x-ray.jpg" class="d-block w-100">
                            </div>
                        </div>
                        <div class="carousel-item " >
                            <div class="col-img">
                                <img src="assets/hoo.jpg" class="d-block w-100">
                            </div>
                        </div>
                   </div>
                      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                      </a>
                      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                      </a>
                </div>
              </div>
            </div>
        </section>
        <!-- END CAROUSEL -->

        <!-- CONTAINER -->
        <section>
            <div class="container mb-5">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card w-100">
                          <div class="col-img1 col-card">
                              <img src="assets/tens.png" class="card-img-top" alt="...">
                          </div>
                          <div class="card-body">
                            <h5 class="card-title">OMRON Automatic Blood Pressure Monitor [HEM-8712]</h5>
                            <h6>Rp 445.000</h6>
                            <p class="card-text">Omron HEM 8712 Tensimeter Digital merupakan alat pengukur tekanan darah otomatis dan digital yang dapat memberikan pembacaan yang sangat akurat di kelasnya </p>
                            <a href="#" class="btn btn-primary">Beli Sekarang</a>
                          </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card w-100">
                          <div class="col-img1 col-card">
                              <img src="assets/kursi roda.png" class="card-img-top" alt="...">
                          </div>
                          <div class="card-body">
                            <h5 class="card-title">Kursi Roda Standar SELLA Ky 809-46</h5>
                            <h6>Rp 875.000</h6>
                            <p class="card-text">KURSI RODA Standar Rumah Sakit,ban padat atau mati,berat kotor: 19,3kg,dimensi: 91.5 x 21 x 87 cm ( terlipat),KEMENKES RI AKL, ISO SO Frame: Chromed, Footrest: Aluminium</p>
                            <a href="#" class="btn btn-primary">Beli Sekarang</a>
                          </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card w-100">
                          <div class="col-img1 col-card">
                              <img src="assets/timbangan.png" class="card-img-top" alt="...">
                          </div>
                          <div class="card-body">
                            <h5 class="card-title">Timbangan Badan Manual Camry BR 9015B</h5>
                            <h6>Rp 85.000</h6>
                            <p class="card-text">Timbangan badan manual, capacity : 120kg, Mechanical Personal Scale, Easy to Read,Fashionable Style. Kuau digunakan dan mudah dibaca.Harga terjangkau, Kualitas terpercaya</p>
                            <a href="#" class="btn btn-primary">Beli Sekarang</a>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card w-100">
                          <div class="col-img1 col-card" id="stetoskop">
                              <img src="assets/stetoskop.png" class="card-img-top" alt="...">
                          </div>
                          <div class="card-body">
                            <h5 class="card-title">Stethoscope ABN Majestic</h5>
                            <h6>Rp 185.000</h6>
                            <p class="card-text">Stetoskop ABN Majestic dari ABN merupakan stetoskop yang cocok untuk digunakan oleh tenaga medis seperti dokter dan perawat, karena memiliki kualitas yang baik</p>
                            <a href="#" class="btn btn-primary">Beli Sekarang</a>
                          </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card w-100">
                          <div class="col-img1 col-card" id="termometer">
                              <img src="assets/termo.png" class="card-img-top" alt="...">
                          </div>
                          <div class="card-body">
                            <h5 class="card-title">Digital Thermometer LCD Bunyi</h5>
                            <h6>Rp 30.000</h6>
                            <p class="card-text">Thermometer digital faktanya lebih aman untuk digunakan dibandingkan thermometer manual. Alasannya, pada thermometer digital tidak terdapat air raksa. Jika thermometer manual jatuh lalu pecah</p>
                            <a href="#" class="btn btn-primary">Beli Sekarang</a>
                          </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card w-100">
                          <div class="col-img1 col-card" id="tongkat">
                              <img src="assets/tongkat.png" class="card-img-top" alt="...">
                          </div>
                          <div class="card-body">
                            <h5 class="card-title">Tongkat Jalan Alat Bantu Jalan Dengan Kaki 3</h5>
                            <h6>Rp 98.000</h6>
                            <p class="card-text">Spesifikasi :bahan stain lees stail,tinggi min 75 cm,tinggi maks 100 cm</p>
                            <a href="#" class="btn btn-primary">Beli Sekarang</a>
                          </div>
                        </div>
                    </div>
                </div>
              </div>
        </section>
                
    </body>
</html>