<!DOCTYPE html>
<html>
    <head>
        <link
            rel="stylesheet"
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
            crossorigin="anonymous">
        <title>MediStore</title>
        <style>       

            #section2 {
                padding-top: 5%;
                width: 98%;
            }

            #section2 .col-md-2 {
                margin-top: 1%;
            }

            #tittle-section2 {
                font-family: Calibri;
                font-style: normal;
                font-weight: bold;
                font-size: 17px;
                line-height: 19px;
                color: #000000;
                margin-left: 2%;
            }

            h6 {
                padding-top: 8%;
                margin-left: 7%;
            }

            .card input {
                position: center;
                width: 80%;
                border: 1px solid #E7EAEC;
                box-sizing: border-box;
                border-radius: 5px;
                font-size: 14px;
            }

            .card {
                width: 100%;
            }

            #min {
                margin-left: 3%;
                margin-right: 0;
            }

            #label-section-3:hover{
                color: black;
                text-decoration: none;
            }

            #section2 button {
                width: 90%;
                margin-left: 5%;
                margin-top: 5%;
                border: 1px solid #E7EAEC !important;
                border-radius: 15px !important;
                font-family: Calibri;
                font-style: normal;
                font-weight: normal;
                font-size: 14px;
                line-height: 16px;
                color: #ABABAB !important;
            }

            #section2 button {
                color: white !important;
            }

            #section3{
                margin-left: 31;
            }

            #submit {
                margin-bottom: 5%;
                margin-top: 0;
                font-color:#00000;
            }

            #pricerange {
                width: 100%;
                margin-bottom: 5%;
                margin-left: 5%;

            }

            #header {
                margin-bottom: 3%;
                padding-bottom: 1%;
                border-bottom: 1px solid #C4C4C4;

            }

            #Tittle {
                font-family: Calibri;
                font-style: normal;
                font-weight: normal;
                font-size: 22px;
                line-height: 33px;
                letter-spacing: 0.02em;
                color: #000000;
            }

            .card {
                border-radius: 5px;
            }

            #col-section-3 {
                margin-bottom: 5%;
            }

            .card-block {
                margin: 10%;
            }

            .card-title {
                font-family: Calibri;
                font-style: normal;
                font-weight: normal;
                font-size: 14px;
                line-height: 19px;
                letter-spacing: 0.02em;
                color: #000000;
            }
            
            .img-fluid {
                border-radius: 10px 10px 0 0;
            }

          #carouselExampleIndicators{
                margin-top: 59px;
                margin-right:0px;
                margin-left: 0px;
                margin-bottom: 10px
            }

            .form-control{
                margin-left: 20px;
                margin-bottom: 5px;
            }

            .halah{
                margin-bottom:10;
            }
            
            .disp{
                margin-top: 10px;

            }
            
        </style>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    </head>
    <body>

        <div class="container-fluid" id="section1">
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
                                        <img src="assets/biru.jpeg" class="d-block w-100">
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="col-img">
                                        <img src="assets/alatmedis.jpeg" class="d-block w-100">
                                    </div>
                                </div>
                                <div class="carousel-item " >
                                    <div class="col-img">
                                        <img src="assets/baroe.jpeg" class="d-block w-100">
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
              </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                    <div class="card dispC">
                        <h5 align="center">Keranjang Anda!</h5>
                          <div align="right">
                              <button type="button" class="clear btn btn-warning"> Clear All</button>
                          </div>
                            <table class="table table-stripped">
                                <thead>
                                    <tr>
                                        <th>Produk</th>
                                        <th>Harga</th>
                                        <th>Jumlah</th>
                                        <th>Subtotal</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody id="cart"></tbody>
                            </table>
                    </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid" id="section3">
                <div class="row"><div class="col-md-2"></div></div>
                <div class="row">
                        <?php foreach ($dataproduct as $d ) {?>
                        <div class="col-md-3">
                            <div class="card disp">
                                <div class="thumbnail">
                                    <img
                                        src="<?= base_url("assets/") . $d->gambar ?>"
                                        alt=""
                                        class="mx-auto d-block"
                                        height="100px"
                                        width="90px">
                                    <div class="card-block">
                                        <div class="card-title">
                                            <h5>
                                                <a id="label-section-3" href="<?= base_url('') ?>"><?php echo($d->product_name) ?></a>
                                            </h5>
                                        </div>
                                        <div class="card-text">
                                            <div class="harga"><?php echo 'Rp '.number_format($d->harga); ?></div>
                                            <input
                                                type="number"
                                                name="jumlah"
                                                id="<?php echo $d->id_product;?>"
                                                value="1"
                                                class="jumlah form-control">
                                            <button
                                                class="tambah_cart  btn btn-success btn-block"
                                                data-idproduk="<?php echo $d->id_product;?>"
                                                data-namaproduk="<?php echo $d->product_name;?>"
                                                data-harga="<?php echo $d->harga;?>">Add To Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php } ?>
                    </div>
            </div>
             <script type="text/javascript" src="<?php echo base_url().'assets/js/jquery-2.2.3.min.js'?>"></script>
            <script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>
            <script type="text/javascript">
                $(document).ready(function () {

                    $('.tambah_cart').click(function () {
                        var produk_id = $(this).data("idproduk");
                        var produk_nama = $(this).data("namaproduk");
                        var produk_harga = $(this).data("harga");
                        var jumlah = $('#' + produk_id).val();
                        $.ajax({
                            url: "<?php echo base_url();?>catalog/tambahkan_cart",
                            method: "POST",
                            data: {
                                produk_id: produk_id,
                                produk_nama: produk_nama,
                                produk_harga: produk_harga,
                                jumlah: jumlah
                            },
                            success: function (data) {
                                $('#cart').html(data);
                            }
                        });
                    });


                    $('#cart').load("<?php echo base_url();?>index.php/cart/load_cart");

                    $(document).on('click', '.hapus_cart', function () {
                        
                        var row_id = $(this).attr("id"); 
                        $.ajax({
                            url: "<?php echo base_url();?>catalog/hapus_cart",
                            method: "POST",
                            data: {
                                row_id: row_id
                            },
                            success: function (data) {
                                $('#cart').html(data);
                            }
                        });
                    });

                    $(document).on('click', '.clear', function () {

                        var row_id = $(this).attr("id"); 
                        $.ajax({
                            url: "<?php echo base_url();?>catalog/clear",
                            method: "POST",
                            data: {
                                row_id: row_id
                            },
                            success: function (data) {
                                $('#cart').html(data);
                            }
                        });
                    });
                    
                });
            </script>
    </body>
</html>