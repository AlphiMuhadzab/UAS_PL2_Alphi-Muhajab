<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>

    <body class="bg-warning">
    <div class="container">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-9 mt-5 shadow-lg bg-body rounded">
                    <h3 class="mt-5 p-3">Selamat Datang di Menu <span class="text-dark">Petugas Perpustakaan.</h3>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item mt-5"><a href ="index.php?id=<?php ?>" class="text-primary">Buku Perpustakaan</a></li>
                        <li class="list-group-item"><a href ="daftarTamu.php?id=<?php ?>" class="text-primary">Daftar Tamu</a></li>
                        <li class="list-group-item mb-5"><a href ="daftarPeminjam.php?id=<?php ?>" class="text-primary">Daftar Peminjam Buku</a></li>
                    </ul>

                </div>
                <div class="col-md-9 ml-5 mt-5 ">
                <button type="button" class="btn btn-primary mb-2"><a class="text-white" href="inputdaftarPeminjam.php?id=<?php ?>">Tambah Data Peminjaman</a></button>
                    <table class="table table-hover shadow-lg bg-body rounded">
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Tanggal</th>
                            <th>ID Buku</th>
                            <th>Judul Buku</th>
                            <th>Tahun Terbit</th>
                            <th>Aksi</th>
                        </tr>
                        <?php
                            include 'koneksi.php';
                            $data = mysqli_query ($koneksi,"SELECT * FROM tb_inputan_anggota");
                            while($d=mysqli_fetch_array($data)){
                        ?>
                            <tr>
                                <td><?php echo $d['id']; ?></td>
                                <td><?php echo $d['nama']; ?></td>
                                <td><?php echo $d['tanggal']; ?></td>
                                <td><?php echo $d['id_buku']; ?></td>
                                <td><?php echo $d['judul_buku']; ?></td>
                                <td><?php echo $d['tahun_terbit']; ?></td>
                                <td>
                                    <button type="button" class="btn btn-success"><a class="text-white" href="updateDaftarPeminjam.php?id=<?php echo $d['id']?>">Update</a></button>
                                    <button type="button" class="btn btn-danger"><a class="text-white" href="deleteDaftarPeminjam.php?id=<?php echo $d['id']?>">Delete</a></button>
                                </td>     
                            </tr>
                        <?php
                            }
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    </body>
</html>

