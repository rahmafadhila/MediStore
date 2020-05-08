<?php
$this->load->view('Users/Template/header');
?>
<html>
    <html>

        <head>
            <title>Info Kelompok</title>
            <style>

                .my-custom-scrollbar {
                    position: relative;
                    height: 550px;
                    overflow: scroll;
                }
                .table-wrapper-scroll-y {
                    display: block;
                    width: 100%;
                }
                #section1 {
                    margin-top: 8%;
                    margin-bottom: 5%;
                    background: #FFFFFF;
                    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.25);
                    border-radius: 5px;
                    padding: 2em;
                    width: 90%;
                }

                #product {
                    font-family: Nunito Sans;
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
                    font-family: Nunito Sans;
                    font-style: normal;
                    font-weight: normal;
                    font-size: 14px;
                    line-height: 19px;
                    border-bottom: 1px solid rgba(0, 0, 0, 0.5);
                }

                #icon {
                    border: none;
                    color: black;
                }

                #section1 .btn-primary {
                    margin-left: 55%;
                    font-family: Nunito Sans;
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
                    font-size: 12px;
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
                    font-family: Nunito Sans;
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
                    width: 65%;
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
            <div class="container">
                <div class="container" id="section0"></div>
                <!-- section1 -->
                <div class="container" id="section1">
                    <table class="table table-wrapper">
                        <thead>
                            <h6>Anggota Kelompok</h6>
                            <tr>
                                <th scope="col">NIM</th>
                                <th scope="col">Nama</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($infodata as $value) {?>
                            <tr>
                                <td id=""><?php echo $value->NIM;?></td>
                                <td id=""><?php echo $value->nama;?></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>

            </div>

        </body>

    </html>