<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

        <title>Hello, world!</title>
        <style>
            ul {
                list-style-type: none;
                margin: 0;
                padding: 10px;
            }

            li {
                display: inline;
            }

            .striped tr:nth-child(odd){
                background-color: #b0faf1;
            }
                
            .striped tr:nth-child(even){
                background-color: #e0ffff;
            }

            .logo {
                width: 100px;
            }

            .thumbnail {
                width: 300px;
            }

            .thumbnail-big {
                width: 900px;
                align-content: center;
            }
        </style>
    </head>
    <body>
        <table width=90% border=1 align="center">
        <tr>
            <td style="text-align: center">
                <h1>My Blog</h1>
                <img src="<?php echo base_url("image/cemeng_logo.jpg"); ?>" alt="logo" class="logo">
            </td>
        </tr>
        <tr>
            <td>
                <ul>
                    <!-- <li><a href="/v_home">Home</a></li>
                    <li><a href="/v_berita">Berita</a></li>
                    <li><a href="/">Mahasiswa</a></li> -->
                    <?php 
                    if(session()->get('role')=="admin"){
                    ?>
                        <li><a href="/v_logout">Keluar</a></li>
                    <?php
                    }else{
                    ?>
                        <li><a href="/v_login">Login</a></li>
                    <?php
                    }
                    ?>
                </ul>
            </td>
        </tr>
        <tr>
            <td height="300px">
                <?= $this->renderSection('content') ?>
            </td>
        </tr>
        <tr>
            <td style="text-align: center">
                <h3>Footer</h3>
            </td>
        </tr>
        </table>

        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

        <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
        -->
    </body>
</html>
