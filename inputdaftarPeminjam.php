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
                <div class="col-md-12"></div>
                <div class="col-md-5 mt-5">
                    <h1 class="text-white">Masukan Data</h1>
                    <?php
                        include 'koneksi.php';  
                        if(isset($_POST['proses']))
                            {
                                $data=mysqli_query($koneksi,"INSERT INTO tb_inputan_anggota VALUES(
                                    '".$_POST['id']."',
                                    '".$_POST['nama']."',
                                    '".$_POST['tanggal']."',
                                    '".$_POST['id_buku']."',
                                    '".$_POST['judul_buku']."',
                                    '".$_POST['tahun_terbit']."')");
                                header('location:daftarPeminjam.php');
                            }
                    ?>

                    <form action="" method="POST" class="mt-5">
                    <div>
                        <label class="form-label">Input Id</label>
                        <input type="text" name="id" class="form-control" placeholder="Masukan Id">
                    </div>
                    <div>
                        <label class="form-label">Input Nama</label>
                        <input type="text" name="nama" class="form-control" placeholder="Masukan Nama">
                    </div>
                    <div>
                        <label class="form-label">Input Tanggal Pinjam</label>
                        <input type="text" name="tanggal" class="form-control" placeholder="Masukan Tanggal Peminjaman">
                    </div>
                    <div>
                        <label class="form-label">Input Id Buku</label>
                        <input type="text" name="id_buku" class="form-control" placeholder="Masukan id Buku">
                    </div>
                    <div>
                        <label class="form-label">Input Nama Buku</label>
                        <input type="text" name="judul_buku" class="form-control" placeholder="Masukan Judul Buku">
                    </div>
                    <div>
                        <label class="form-label">Input Tahun Terbit</label>
                        <input type="text" name="tahun_terbit" class="form-control" placeholder="Masukan Tahun Terbit Buku">
                    </div>
                    <button type="submit" name="proses" class="btn btn-success mb-2 mt-5">Simpan</button>
                    </form>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
    </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    </body>
</html>