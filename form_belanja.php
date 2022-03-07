<!doctype html>
<html lang="id">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Form Nilai Siswa</title>
</head>
<body>
    <h1>Form Belanja</h1><hr style="width:80%;">
    <div class="container d-flex row my-5">
        <div class="col-9">
            <form method="POST" action="form_belanja.php">
                <div class="form-group row">
                    <label for="text" class="col-4 col-form-label">Customer</label> 
                    <div class="col-8">
                    <input id="text" name="nama_customer" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-4">Pilih Produk</label> 
                    <div class="col-8">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="tv"> 
                        <label for="produk_0" class="custom-control-label">TV</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="kulkas"> 
                        <label for="produk_1" class="custom-control-label">KULKAS</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="mesin_cuci"> 
                        <label for="produk_2" class="custom-control-label">MESIN CUCI</label>
                    </div>
                    </div>
                </div> 
                <div class="form-group row">
                    <label for="text1" class="col-4 col-form-label">Jumlah Produk</label> 
                    <div class="col-8">
                    <input id="text1" name="jumlah" type="text" class="form-control">
                    </div>
                </div> 
                <div class="form-group row">
                    <div class="offset-4 col-8">
                    <input name="kirim" type="submit" value="kirim" class="btn btn-primary"></input>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-3">
            <ul class="list-group">
                <li class="list-group-item active" aria-current="true">Daftar Harga</li>
                <li class="list-group-item">TV : 4.200.000</li>
                <li class="list-group-item">Kulkas : 3.100.000</li>
                <li class="list-group-item">Mesin Cuci : 3.800.000</li>
                <li class="list-group-item active">Harga Dapat Berubah Setiap Hari</li>
            </ul>
        </div>
    </div>

    <?php
    $nama = $_POST['nama_customer'];
    $produk = $_POST['produk'];
    $jumlah = $_POST['jumlah'];

    echo 'Nama Customer : '.$nama;
    echo '<br/>Produk Pilihan : '.$produk;
    echo '<br/>Jumlah Beli : '.$jumlah;

    if ($produk == 'tv') {
        echo "<br/>Total Belanja : Rp. ".$jumlah*4200000;
    } elseif ($produk == 'kulkas') {
        echo "<br/>Total Belanja : Rp. ".$jumlah*3100000;
    } else {
        echo "<br/>Total Belanja : Rp. ".$jumlah*3800000;
    }
    ?>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>
</html>