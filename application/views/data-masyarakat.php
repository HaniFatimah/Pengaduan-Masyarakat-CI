<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div>
    <div class="row">
    <div class="col-sm-12 mt-4">
    <div class="table-responsive mb-4">
        <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
        </thead>
            <tr>
            <td>No</td>
            <td>NIK</td>
            <td>Nama Lengkap</td>
            <td>Username</td>
            <td>Password</td>
            <td>No. Telepon</td>
            <td>Action</td>
            </tr>
            </thead>
        </table>
        <tbody>
        <?php 
        if ($c_masyarakat>0) 
        {
            foreach ($c_masyarakat as $datas)
            {
        ?>
            <tr>
                <td><?php echo $datas->nik ;?></td>
                <td><?php echo $datas->name ;?></td>
                <td><?php echo $datas->user_name ;?></td>
                <td><?php echo $datas->passwordd ;?></td>
                <td><?php echo $datas->telpon ;?></td>
                <td><img src="<?php echo base_url('assets/'.$datas->image) ?>" alt=""></td> -->
                <td>
                    <div class="col-12">
                        <button class="btn btn-success btn-sm edit_data" style="width:100%;">Edit</button>
                        <div>
                            <div class="col-12 mt-2">
                            <button class="btn btn-success btn-sm hapus_data" style="width:100%;">Delete</button>
                        </div>
                        
                    </div>
                </td> 
                <?php }
                }
                else {
                ?>  
                <tr>
                <td colspan="8"><center>Data User Kosong</center></td>
                </tr>
                
                <?php }
                ?>
                    
            </tr>
        </tbody>
    </div>
    </div>
    </div>
</div>
    
</body>
</html>