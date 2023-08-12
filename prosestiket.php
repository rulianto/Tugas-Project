<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="assets/img/favicon/logo-labti.png" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <title>Invoice</title>
</head>

<body>
    <div class="container p-5 m-5 border rounded mx-auto d-block shadow p-3 mb-5 bg-body rounded"
        style="max-width: 25rem;">
        <h5 class="text-center">STRUK PEMBAYARAN</h5>
        <h5 class="text-center">CinemaLabTi21</h5>
        <hr width="100%">
        <pre>
            <?php
            $nama_lengkap = $_POST['nama_lengkap'];
            $nama_film = $_POST['nama_film'];
            $tanggal = $_POST['tanggal'];
            $wkt_pesan = $_POST['wkt_pesan'];
            $jml_beli = $_POST['jml_beli'];

            if ($tanggal == "Minggu") {
                $harga = 60000;
            } elseif ($tanggal == "Sabtu") {
                $harga = 60000;
            } elseif ($tanggal == "Jum'at") {
                $harga = 50000;
            } else {
                $harga = 40000;
            }
            ;

            $jb = $jml_beli * $harga;

            echo "<br>";
            echo "Nama Lengkap      : " . $nama_lengkap . "<br>";
            echo "Nama Film         : " . $nama_film . "<br>";
            echo "Tanggal Pemesanan : " . $tanggal . "<br>";
            echo "Waktu Pemesanan   : " . $wkt_pesan . "<br>";
            echo "Jumlah Tiket      : " . $jml_beli . "<br>";
            echo "Total Pembayaran  : " . $jb . "<br>";

            $koneksi = mysqli_connect("localhost", "root", "", "mahasiswa");
            if (isset($_POST['simpan'])) {
                $nama_lengkap = mysqli_real_escape_string($koneksi, $_POST['nama_lengkap']);
                $nama_film = mysqli_real_escape_string($koneksi, $_POST['nama_film']);
                $tanggal = mysqli_real_escape_string($koneksi, $_POST['tanggal']);
                $wkt_pesan = mysqli_real_escape_string($koneksi, $_POST['wkt_pesan']);
                $jml_beli = mysqli_real_escape_string($koneksi, $_POST['jml_beli']);
                $simpan = mysqli_query($koneksi, "INSERT INTO pesan_tiket VALUES('$nama_lengkap','$nama_film','$tanggal','$wkt_pesan','$jml_beli')");

                if ($simpan) {
                    echo "<script>window.alert('Data Mahasiswa berhasil disimpan')windows.location='pesantiket.php'</script>";
                } else {
                    echo "<script>window.alert('Data Mahasiswa gagal disimpan')windows.location='pesantiket.php'</script>";
                }
            }
            ?>
            <p class="text-center">***** TERIMA KASIH *****</p>
            <hr width="100%">
            <a class="btn btn-outline-success" href="index.php">Kembali Ke Beranda</a>
        </pre>
    </div>
</body>

</html>