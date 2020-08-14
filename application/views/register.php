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


        .img1{
            width: 30%;
        }

        .mt-12{
            margin-top: 25px;
        }

        .link-a {
            margin-left: -6%;
        }

        .img-fluid{
            width: 100%;
            height: 55%;
            margin-top: 30%;
        }
        body{
            background: #f7f7f7;
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
                          <img src="<?php echo base_url('assets/img/reg.png') ?>" class="img1">
                        
                          </div>
                          <div class="card-body">
                            <form action="<?php echo site_url('Homeboard/simpanData') ?>" method="post" enctype="multipart/form-data">

                                <div class="form-group">
                                <label for="exampleInputPassword1">NIK</label>
                                <div class="input-group">
                                <input type="text" class="form-control" name="nike" placeholder="NIK">
                                </div>
                                </div>

                                <div class="form-group">
                                <label for="exampleInputPassword1">Nama Lengkap</label>
                                <div class="input-group">
                                    
                                <input type="text" class="form-control"  name="namae" placeholder="Nama Lengkap">
                                </div>
                                </div>

                                <div class="form-group">
                                <label for="exampleInputPassword1">Username</label>
                                <div class="input-group">
                                   
                                <input type="text" class="form-control" name="user" placeholder="Username">
                                </div>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <div class="input-group">
                                    
                                        <input type="password" class="form-control" name="pass" placeholder="Password">
                                </div>
        
        
                                <div class="form-group">
                                <label for="exampleInputPassword1">No.Telepon</label>
                                <div class="input-group">
                                
                                <input type="text"  class="form-control" name="telp" placeholder="No.Telepon">
                                </div>
                                </div>
                                </div>
                                <a class="dropdown-item link-a" href="#">Already have an account? Login</a>
                                <button type="submit" class="btn btn-primary "><a href="<?php echo site_url('Homeboard/register');?>"></a> Daftar</button>
                                <button type="reset" class="btn btn-danger ">Reset</button>
                            </form>
                          </div>
                      </div>
                   </div>
               </div>
            </div>
        </div>
    </div>
    <div>

    <br><br><br>
    <div class="row">
        <div class="col-sm-12 mt-4">
            <div class="table-responsive mb-4">
                <table id="example" class="table table-striped table-bordered" style="width: 100%">
                <thead>
                    <tr>
                        <td>Id User</td>
                        <td>NIK</td>
                        <td>Nama</td>
                        <td>Username</td>
                        <td>Password</td>
                        <td>No. Telepon</td>
                        <td>Action</td>
                    </tr>
                </thead>
                <tbody>
                <?php  
                    if ($c_masyarakatt > 0)
                    {
                        foreach ($masyarakatt as $datas)
                    {
                ?>
                    <tr>
                        <td><?php echo $datas->id_user;?></td>
                        <td><?php echo $datas->nik;?></td>
                        <td><?php echo $datas->nama;?></td>
                        <td><?php echo $datas->username;?></td>
                        <td><?php echo $datas->password;?></td>
                        <td><?php echo $datas->telpon ?></td>
                        <td>
                        <div class="col-12">
                        <?php echo anchor('Homeboard/edit/'.$datas->id_user, '<button class="btn btn-success btn-sm edit_data" style="width:100%; margin:auto;">Edit</button>'); ?>
                        </div>
                        <div class="col-12 mt-2">
                            <?php echo anchor('Homeboard/hapus/'.$datas->id_user, '<button class="btn btn-danger btn-sm hapus_data" style="width:100%; margin:auto;">Hapus</button>'); ?>
                        </div>
                        </td>
                    </tr>
                        <?php }
                        }
                        else {
                        ?>
                    <!-- <tr>
                        <td colspan="8"><center>Data user kosong!</center></td>
                        </tr> -->
                    
                        <?php
                    }
                        ?>
                </tbody>
            </table>
         </div>
    </div>
</div>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</html>