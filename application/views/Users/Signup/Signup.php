<!DOCTYPE html>
<html>
    <head>
        <link href="https://fonts.googleapis.com/css?family=Calibri" rel="stylesheet">
        <title>Sign Up</title>
        <style>

            * {
                box-sizing: border-box;
            }

            h1 {
                font-weight: bold;
                font-size: 35px;
                margin: 10%;
            }

            p {
                font-size: 14px;
                font-weight: 100;
                line-height: 20px;
                letter-spacing: 0.5px;
                margin: 20px 0 30px;
            }

            a {
                color: #333;
                font-size: 14px;
                text-decoration: none;
            }

            .button1 {
                border-radius: 5px;
                border: 1px solid #80CF31;
                background-color: #80CF31;
                color: #FFFFFF;
                font-size: 14px;
                font-weight: normal;
                padding: 12px 30px;
                letter-spacing: 1px;
                transition: transform 80ms ease-in;
            }

            .form1 {
                background-color: #FFFFFF;
                display: flex;
                align-items: center;
                justify-content: center;
                flex-direction: column;
                padding: 0 50px;
                height: 100%;
                text-align: center;
            }

            .input1 {
                background-color: #eee;
                border: none;
                padding: 12px 15px;
                margin: 8px 0;
                width: 100%;
            }

            .container1 {
                background-color: #fff;
                border-radius: 10px;
                box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
                position: relative;
                overflow: hidden;
                width: 100%;
                max-width: 100%;
                height: 100%;
                min-height: 480px;
            }

            .form-container {
                position: absolute;
                top: 10px;
                height: 100%;
            }

            .sign-up-container {
                background-color: #fff;
                border-radius: 10px;
                box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
                left: 0;
                width: 50%;
                z-index: 2;
            }

            .overlay-container {
                position: absolute;
                top: 5px;
                left: 50%;
                width: 50%;
                height: 100%;
            }

            .overlay {
                color: #FFFFFF;
                position: relative;
                left: -100%;
                height: 100%;
                width: 200%;
            }

            .overlay-panel {
                position: absolute;
                display: flex;
                align-items: center;
                justify-content: center;
                flex-direction: column;
                padding: 0 40px;
                text-align: center;
                top: 0;
                height: 100%;
                width: 50%;
            }

            .bground {
                background: url("<?php echo base_url();?>assets/foto.png");
                background-color: #FFFFFF;
                position: absolute;
                background-size: 105% 98%;
                right: 100%;
                height: 100%;
            }

            button:hover {
                opacity: 0.8;
            }

            .overlay-right {
                right: 0;
            }

            .social-container {
                margin: 50px 0;
            }

            .social-container a {
                border: 1px solid #DDDDDD;
                border-radius: 50%;
                display: inline-flex;
                justify-content: center;
                align-items: center;
                margin: 0 5px;
                height: 40px;
                width: 40px;
            }
        </style>
    </head>
    <body>
        <div class="container1" id="container">
            <div class="form-container sign-up-container">
                <form action="#" class="form1">
                    <h1>Masukkan Identitas Anda</h1>
                    <input class="input1" type="email" placeholder="Email"/>
                    <input class="input1" type="password" placeholder="Password"/>
                    <input class="input1" type="date" id="birthday" name="birthday">
                    <select class="input1" name="Gender">
                        <option value="volvo" selected>Jenis Kelamin</option>
                        <option value="saab">Pria</option>
                        <option value="fiat">Wanita</option>
                    </select><br>
                    <button class="button1">Sign Up</button>
                </form>
            </div>
            <div class="form-container log-in-container bground overlay-container overlay-right"></div>
        </div>
    </body>
</html>