<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Data Pegawai</title>
</head>
<body>
    <div class="container mt-5">
        <h1 class="alert alert-dark">Data Pegawai</h1>
        <div class="tombol mt-3 mb-5">
            <a href="<?=base_url().'crud/create' ?>" class="btn btn-success">Tambah Data</a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>NAMA LENGKAP</th>
                    <th>ALAMAT</th>
                    <th>PEKERJAAN</th>
                    <th>AKSI</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $no = 1;
                    foreach($pegawai as $p) : ?>
                <tr>
                    <td><?=$no; ?></td>
                    <td><?=$p->nama; ?></td>
                    <td><?=$p->alamat; ?></td>
                    <td><?=$p->pekerjaan; ?></td>
                    <td>
                        <?php echo anchor ('crud/edit/'.$p->id, 'Ubah'); ?>
                        <?php echo anchor ('crud/delete/'.$p->id, 'Hapus'); ?>
                    </td>
                </tr>
                <?php
                    $no++;
                 endforeach 
                 ?>
            </tbody>
        </table>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>