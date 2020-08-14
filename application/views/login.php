<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>

    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/fontawesome/css/all.min.css') ?>">
    

    <style>
        body{
            background: #f7f7f7;
        }

        .card{
            border-radius: 0;
            border: 0;
            
        }

        .card > .card-header{
            background: transparent;
            border-bottom: 1px solid #eee;

        }

        .form-control{
            border-radius: 0;
            background-color: white;
        }

        .form-control:focus{
            box-shadow: none;

        }

        .border-box{
            box-shadow: 0 2px rgba(0, 0, 0, 0.04);
            border: 3px solid rgba(171, 169, 169, 0.06);
        }

        .icon-user{
            float: right;
            margin-top: 1px;
            right: 18px;
        }

        .img1{
            width: 25%;
        }

        .mt-12{
            margin-top: 160px;
        }

        .link-a {
            margin-left: -6%;
        }


 

    </style>
</head>
<body>
    <!-- Image and text -->
    <nav class="navbar navbar-primary bg-light">
        <a class="navbar-brand" href="#">
        <i class="fas fa-angle-double-left"></i> Back
        </a>
    </nav>
    <div class="container">
        <div class="row justify-content-md-center mt-12">
            <div class="col-sm-8 border-box">
               <div class="row">
                   <div class="col-sm-5 p-0 ">
                        <img src="<?php echo base_url('assets/img/conver.png') ?>" class="img-fluid">
                   </div>
                   <div class="col-sm-7 p-0">
                      <div class="card">
                          <div class="card-header">
                          <img src="<?php echo base_url('assets/img/log.png') ?>" class="img1">
                            <div class="icon-user">
                                    <h4 class="fas fa-user"></h4>
                            </div>
                          </div>
                          <div class="card-body">
                            <form action="<?php echo site_url('dashboard/aksi_login');?>" method="post">
                                <div class="form-group">
                                <label for="exampleInputPassword1">Username</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fas fa-user"></i></div>
                                    </div>
                                <input type="text" name="" class="form-control" placeholder="Username">
                                </div>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fas fa-unlock-alt"></i></div>
                                    </div>
                                        <input type="password" name="" class="form-control" placeholder="Password">
                                </div>
                                </div>
                                <a class="dropdown-item link-a" href="#">New around here? Sign up</a>
                                
                                <button type="reset" class="btn btn-danger ">Reset</button>
                                <button type="submit" class="btn btn-primary ">Submit <i class="fas fa-angle-double-right"></i></button>
                                

                            </form>
                          </div>
                      </div>
                   </div>
               </div>
            </div>
        </div>
    </div>


</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</html>