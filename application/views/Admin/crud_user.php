<?php
$this->load->view('Admin/header');
?>
<html>
    <html>

        <head>
            <title>MediStore | Admin Users</title>
            <style>

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
                    width: 80%;
                }

                #product {
                    font-family: Calibri;
                    font-style: normal;
                    font-weight: normal;
                    font-size: 18px;
                    line-height: 25px;
                }

                .roundedcircle {
                    width: 45px;
                    height: 45px;
                    cursor: pointer;
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

                .detail {
                    width: 40px;
                    height: 40px;
                    border-radius: 50px;
                    background: #FFFFFF;
                    box-shadow: 0 2px 15px rgba(0, 0, 0, 0.25);
                }

                #detail {
                    width: 15%;
                    margin-top: 45%;
                    margin-left: 40%;
                    transform: translate(0%, -5%);
                }

                /* add new product */

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

                #inputan {
                    margin-top: 5%;
                }

                .desc,
                textarea {
                    margin-left: 10%;
                }

                textarea {
                    margin-bottom: 5%;
                }

                #NewProduct .btn-primary,
                .btn-outline-danger {
                    width: 70%;
                    margin-bottom: 3%;
                }

                /* media screen */

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

                    #detail {
                        margin: 0 0 0 40%;
                    }

                    .btn-danger {
                        margin-left: 3%;

                    }

                    .btn-danger,
                    .btn-warning {
                        margin-bottom: 3%;
                    }

                }
            </style>
        </head>

        <body>
            <div class="container-fluid-0">
                <div class="container-fluid" id="section0"></div>
                <!-- section1 -->
                <div class="container-fluid" id="section1">
                    <span id="product">Data Users</span>
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

                        </div>
                    </form>
                    <table class="table table-wrapper-scroll-y my-custom-scrollbar">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Username</th>
                                <th scope="col">Password</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i=1 ?>
                            <?php $no=1; foreach ($datauser as $d ) {?>
                            <tr>
                                <td id="margin"><?php echo $i?></td>
                                <td id="margin"><?php echo $d->nama?></td>
                                <td id="margin"><?php echo $d->username ?></td>
                                <td id="margin"><?php echo $d->password ?></td>
                                <td id="margin"><?php echo $d->status ?></td>
                                <td id="margin">
                                    <button
                                        type="button"
                                        class="btn btn-warning"
                                        data-toggle="modal"
                                        data-target="#edit<?php echo $d->id_users ?>">
                                        Update
                                    </button>
                                    <a
                                        type="button"
                                        class="btn btn-danger"
                                        href="<?php echo base_url(); ?>welcome/hapususers/<?php echo $d->id_users ?>"
                                        onclick="return confirm('Apakah Anda Yakin untuk Menghapusnya?')">Delete</a>
                                </td>
                            </tr>
                            <?php $i = $i+1 ?>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>


                <!-- Update Users -->
                <div class="container" id="NewProduct">
                    <div class="row justify-content-center">
                    <?php $no=1; foreach ($datauser as $d ) {?>
                        <div class="modal fade justify-content-center" id="edit<?php echo $d->id_users ?>" role="dialog">
                            <div class="modal-dialog bg-modal">
                                <div class="modal-content">
                                    <h5 id="tittle">Update Data Users</h5>
                                    <form
                                        class="row"
                                        action="<?= base_url();?>welcome/edit_Users/"
                                        method="POST"
                                        enctype="multipart/form-data">
                                        <div class="col-md-1"></div>

                                        <div class="col-md-7" id="inputan">
                                            <div class="topic-title">Nama</div>
                                            <input type="hidden" name="id" class="form-control" name="id_users" value="<?php echo $d->id_users ?>" required>
                                            <input type="text" name="nama" class="form-control" value="<?php echo $d->nama?>"><br>
                                            <div class="topic-title">Username</div>
                                            <input type="text" class="form-control" name="username" value="<?php echo $d->username ?>"><br>
                                            <div class="topic-title">Username</div>
                                            <input type="text" class="form-control" name="password" value="<?php echo $d->password ?>">
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