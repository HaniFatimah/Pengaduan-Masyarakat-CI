<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>

    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/fontawesome/css/all.min.css') ?>">

    <style>
        body {
            background: #f7f7f7;
        }

    </style>
        
</head>
<body>
<!-- Image and text -->


<br>
    
<div id="card-content">
            <center>
                <h3>Edit Data</h3>
            </center>
            <?php foreach ($masyarakatt as $u) { ?>
                <form action="<?php echo base_url() . 'Homeboard/update'; ?>" method="post">
                    <input type="hidden" name="id" value="<?php echo $u->id_user ?>">
                    <table style="margin:20px auto;">
                        <tr>
                            <td>NIK</td>
                            <td><input type="text" name="nike" value="<?php echo $u->nik ?>"></td>
                        </tr>
                        <tr>
                            <td>Nama</td>
                            <td>
                                <input type="text" name="namae" value="<?php echo $u->nama ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Username</td>
                            <td><input type="text" name="user" value="<?php echo $u->username ?>"></td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td><input type="text" name="pass" value="<?php echo $u->password ?>"></td>
                        </tr>
                        <tr>
                            <td>No.Telepon</td>
                            <td><input type="text" name="telp" value="<?php echo $u->telpon ?>"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="submit" value="Simpan"></td>
                        </tr>
                    </table>
                </form>
            <?php } ?>
        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</html>