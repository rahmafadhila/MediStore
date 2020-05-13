<?php
$this->load->view('Admin/header');
?>
<html>
    <html>

        <head>
            <title>MediStore | Admin Product</title>
            <style>

                @media screen and (max-width: 767px) {
                    thead {
                        display: none;
                    }

                    td {
                        display: flex;
                    }

                    .btn-primary {
                        margin: 0;
                    }

                    .btn-danger {
                        margin-left: 3%;

                    }

                    .btn-danger,
                    .btn-warning {
                        margin-bottom: 3%;
                    }

                }

                .my-custom-scrollbar {
                    position: relative;
                    height: 550px;
                    overflow: scroll;
                }
                
                #section1 {
                    margin-top: 8%;
                    margin-bottom: 5%;
                    background: #FFFFFF;
                    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.25);
                    border-radius: 5px;
                    padding: 2em;
                    width: 50%;
                }

                #product {
                    font-family: Calibri;
                    font-style: normal;
                    font-weight: normal;
                    font-size: 18px;
                    line-height: 25px;
                }

                #search {
                    border: none;
                    font-family: Calibri;
                    font-style: normal;
                    font-weight: normal;
                    font-size: 14px;
                    line-height: 25px;
                    border-bottom: 1px solid rgba(0, 0, 0, 0.5);
                }

                #icon {
                    border: none;
                    color: black;
                }

                #section1 .btn-primary {
                    margin-left: 55%;
                    font-family: Calibri;
                    font-style: normal;
                    font-weight: bold;
                    font-size: 12px;
                    line-height: 20px;
                    color: #FFFFFF;
                }

                #NewProduct .btn-primary,
                .btn-outline-danger {
                    width: 65%;
                    margin-bottom: 3%;
                }

                img {
                    width: 15vh;
                }

                td {
                    font-style: normal;
                    font-weight: normal;
                    font-size: 15px;
                    color: rgba(0, 0, 0, 0.8);
                }

                #margin {
                    transform: translate(0%, 10%);
                }

                #tittle {
                    font-family: Calibri;
                    font-style: normal;
                    font-weight: normal;
                    font-size: 18px;
                    line-height: 25px;
                    text-align: center;
                    color: rgba(0, 0, 0, 0.5);
                    border-bottom: 1px solid rgba(0, 0, 0, 0.35);
                    padding-top: 3%;
                    padding-bottom: 3%;
                }

                #image {
                    width: 80px;
                    height: 90px;
                }
                
                #addImage {
                    width: 160px;
                    height: 190px;
                    margin-left: 10%;
                    margin-top: 3%;
                }

                .form-control {
                    width: 80%;
                }

                #masukan {
                    margin-top: 5%;
                }

                textarea {
                    margin-bottom: 5%;
                }

            </style>
        </head>

        <body>
            <div class="container-fluid-0">
                <div class="container-fluid" id="section0"></div>
                <div class="container-fluid" id="section1">
                    <span id="product">Produk</span>
                    <form action="" class="navbar-form">
                        <div class="form-group input-group">
                            <input
                                id="search"
                                type="text"
                                class="form-control col-md-3"
                                placeholder="Search">
                            <div class="input-group-btn">
                                <button type="button" id="icon" class="btn btn-outline-info">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </button>
                            </div>
                            <a
                                href="<?= base_url("") ?>"
                                type="button"
                                class="btn btn-primary"
                                data-toggle="modal"
                                data-target="#addProduct">Tambah Produk</a>
                        </div>
                    </form>
                    <table class="table table-wrapper-scroll-y my-custom-scrollbar">
                        <thead>
                            <tr>
                                <th scope="col">Gambar</th>
                                <th scope="col">Nama Produk</th>
                                <th scope="col">Harga</th>
                                <th scope="col"></th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no=1; foreach ($dataproduct as $d ) {?>
                            <tr>
                                <td>
                                    <img id="image" src="<?= base_url("assets/") . $d->gambar ?>" alt="">
                                </td>
                                <td id="margin"><?php echo $d->product_name?></td>
                                <td id="margin"><?php echo $d->harga ?></td>
                                <td id="margin"></td>
                                <td id="margin">
                                    <button
                                        type="button"
                                        class="btn btn-warning"
                                        data-toggle="modal"
                                        data-target="#edit<?php echo $d->id_product ?>">
                                        Update
                                    </button>
                                    <a
                                        type="button"
                                        class="btn btn-danger"
                                        href="<?php echo base_url(); ?>Admin/hapusproduct/<?php echo $d->id_product ?>"
                                        onclick="return confirm('Apakah Anda Yakin untuk Menghapusnya?')">Delete</a>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>

                <div class="container" id="NewProduct">
                    <div class="row justify-content-center">
                        <div class="modal fade justify-content-center" id="addProduct" role="dialog">
                            <div class="modal-dialog bg-modal">
                                <div class="modal-content">
                                    <h5 id="tittle">Tambah Produk</h5>
                                    <form
                                        class="row"
                                        action="<?= base_url();?>Admin/Create_Product/"
                                        method="POST"
                                        enctype="multipart/form-data">
                                        <div class="col-md-1"></div>
                                        <div class="col-md-4">
                                            <img
                                                id="addImage"
                                                src="<?= base_url('assets/upload.png') ?>"
                                                class="roundedcircle d-block"/>
                                        </div>
                                        <div class="col-md-7" id="masukan">
                                            <div class="topic-title">Nama Produk</div>
                                            <input type="text" name="product_name" class="form-control">
                                            <div class="topic-title">Harga</div>
                                            <input type="text" class="form-control" name="harga"><br>
                                            <input type="file" name="uploadImage" class="form-control"/>
                                        </div>

                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary" value="upload">Tambah Produk</button>
                                            <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cancel</button>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="container" id="NewProduct">
                    <div class="row justify-content-center">
                    <?php $no=1; foreach ($dataproduct as $d ) {?>
                        <div class="modal fade justify-content-center" id="edit<?php echo $d->id_product ?>" role="dialog">
                            <div class="modal-dialog bg-modal">
                                <div class="modal-content">
                                    <h5 id="tittle">Update Produk</h5>
                                    <form
                                        class="row"
                                        action="<?= base_url();?>Admin/editproduct/"
                                        method="POST"
                                        enctype="multipart/form-data">
                                        <div class="col-md-1"></div>
                                        <div class="col-md-4">
                                            <img
                                                id="addImage"
                                                src="<?= base_url('assets/upload.png') ?>"
                                                class="roundedcircle d-block"/>
                                        </div>
                                        <div class="col-md-7" id="inputan">
                                            <div class="topic-title">Nama Produk</div>
                                            <input type="hidden" name="id" class="form-control" name="id_product" value="<?php echo $d->id_product ?>"  required>
                                            <input type="text" name="product_name" class="form-control" value="<?php echo $d->product_name?>">
                                            <div class="topic-title">Harga</div>
                                            <input type="text" class="form-control" name="harga" value="<?php echo $d->harga ?>"><br>
                                            <input type="file" name="uploadImage" class="form-control" value="<?=$d->gambar ?>"><?= $d->gambar ?></input>
                                        </div>

                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary" value="upload">Update</button>
                                            <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cancel</button>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>

            </div>

        </div>

    </body>

</html>