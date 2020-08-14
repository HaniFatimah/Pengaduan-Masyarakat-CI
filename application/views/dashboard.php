<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>

    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">

    <style>
        
    .jumbotron{
        background: url('../assets/img/hh.jpg'); 
        background-size: auto;
        height: 820px;
        text-align: center;
    }

    .jumbotron p{
        font-style: oblique;
        font-size: 30px;
    }
 
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" id="mainNav">
        <div class="container">
        <a class="navbar-brand font-weight-bold" href="#">PENGADUAN MASYARAKAT</a>
        
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">


                <li class="nav-item dropdown">

                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           LOGIN  <i class="fas fa-users"></i>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Admin</a>
                            <a class="dropdown-item" href="#">Petugas</a>
                            <a class="dropdown-item" href="#">Masyarakat</a>
                        </div>
                    </div>
                </li>
                
                </ul>

            </div>
            </div>
            </div>
        </nav>

        
        <div class="jumbotron ">
            <div class="container">
                <br><br><br><br><br><br><br><br><br><br>
                <b>
                <h1 class="display-4">Layanan Pengelola Pengaduan Masyarakat</h1>
                <hr class="my-4">
                <p>Pengaduan Bisa Dilakukan 24 Jam</p>
                </b>
            </div>
        </div>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</html>