<?php
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

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="assets/img/favicon/logo-labti.png" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <title>Pesan Tiket CinemaLabTi21</title>
</head>

<body>
    <section>
        <div class="container pt-5">
            <div class="col-12 bg-white shadow p-3">
                <div class="form w-100 pb-2 text-center">
                    <h4 data-aos="fade-down" data-aos-delay="50" data-aos-duration="1000"><b>Pemesanan Tiket
                            CinemaLabTi21</b></h4>
                    <hr>
                </div>
                <div class="form w-100 pb-2">
                    <!-- form input tiket -->
                    <form action="prosestiket.php" class="row" method="POST">

                        <!-- input nama pembeli -->
                        <div data-aos="fade-up" data-aos-delay="700" data-aos-duration="1000">
                            <div class="form-group">
                                <label for="nama"><b>Masukkan Nama Lengkap</b></label>
                                <input type="text" class="form-control" id="nama" name="nama_lengkap" required
                                    placeholder="Masukkan Nama Lengkap">
                            </div>
                        </div>
                        <!-- akhir nama pembeli -->

                        <!-- input nama film -->
                        <div data-aos="fade-up" data-aos-delay="750" data-aos-duration="1000">
                            <label for="" class="form-label">
                                <b>Nama Film</b>
                            </label>
                            <select class="form-select" aria-label="Default select example" name="nama_film">
                                <option selected>--pilih--</option>
                                <option>Meg 2: The Trench</option>
                                <option>Dear Jo: Almost is Never Enough</option>
                                <option>Black Demon</option>
                                <option>Suzzanna Malam Jumat Kliwon</option>
                                <option>The Moon</option>
                                <option>Teenage Mutant Ninja Turtles: Mutant Mayhem</option>
                                <option>Cobwe</option>
                                <option>Detective Conan The Movie: Black Iron Submarine</option>
                                <option>Oppenheimer (IMAX 2D)</option>
                                <option>Primbon</option>
                                <option>Oppenheimer</option>
                                <option>Ketika Berhenti di Sini</option>
                            </select>
                        </div>
                        <!-- akhir input nama film -->

                        <!-- input tanggal, bulan, tahun pemesanan tiket -->
                        <div data-aos="fade-up" data-aos-delay="800" data-aos-duration="1000">
                            <div class="form-group">
                                <label for="tanggal"><b>Tanggal:</b></label>
                                <input type="date" class="form-control" id="tanggal" name="tanggal" required>
                            </div>
                        </div>
                        <!-- akhir input tanggal, bulan, tahun pemesanan tiket -->

                        <!-- input waktu pemesanan tiket -->
                        <div data-aos="fade-up" data-aos-delay="850" data-aos-duration="1000">
                            <label for="nama" class="form-label">
                                <b>Waktu Pemesanan</b>
                            </label>
                            <select class="form-select" name="wkt_pesan">
                                <option>--pilih--</option>
                                <option>13.00 WIB</option>
                                <option>14.15 WIB </option>
                                <option>14.45 WIB </option>
                                <option>15.50 WIB</option>
                                <option>17.15 WIB</option>
                                <option>19.30 WIB</option>
                                <option>21.00 WIB</option>
                            </select>
                        </div>
                        <!-- akhir input waktu pemesanan tiket -->

                        <!-- input jumlah pemesanan tiket -->
                        <div data-aos="fade-up" data-aos-delay="900" data-aos-duration="1000">
                            <label for="" class="form-label">
                                <b>Jumlah Beli</b>
                            </label>
                            <input type="text" class="form-control" name="jml_beli" placeholder="Masukkan Jumlah Tiket"
                                required>
                        </div>
                        <!-- akhir input jumlah pemesanan tiket -->

                        <!-- Button submit, reset dan kembali -->
                        <div class="mt-1" data-aos="fade-up" data-aos-delay="950" data-aos-duration="1000">
                            <!-- button simpan data pemesanan tiket -->
                            <button type="submit" name="simpan" class="btn btn-success">Simpan</button>
                            <!-- button reset data pemesanan tiket -->
                            <button type="reset" class="btn btn-danger">Reset</button>
                            <a href="index.php" class="btn btn-primary">
                                <span>kembali</span> </a>
                        </div>
                        <!-- Button submit, reset dan kembali -->
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <!-- AOS -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

</body>

</html>