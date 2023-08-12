<?php
session_start();
include_once "koneksi.php";
if ($_SESSION['log'] != "login") {
  header('location:login.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="icon" type="image/x-icon" href="assets/img/favicon/logo-labti.png" />
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

  <!-- AOS -->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

  <!-- CSS -->
  <link rel="stylesheet" href="assets/css/gaya.css">

  <title>CinemaLabTi21</title>

</head>

<body id="home">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#home">
        <img src="img/logo.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
        CinemaLabTi21
      </a>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#testimoni">Film</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#faq">FAQ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pesantiket.php">Pesan Tiket</a>
          </li>
          <li class="nav-item">
            <a class="navbar-brand" href="#" data-bs-toggle="modal" data-bs-target="#modalLogout">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-person-circle" viewBox="0 0 16 16">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                <path fill-rule="evenodd"
                  d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
              </svg> logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Akhir Navbar -->

  <!-- Logout -->
  <div class="modal fade" id="modalLogout" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Logout</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p>Apakah anda yakin untuk keluar?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <a href="logout.php" class="btn btn-primary">
            <span>logout</span> </a>
        </div>
      </div>
    </div>
  </div>
  <!-- Akhir Logout -->

  <!-- Jumbotron -->
  <section class="jumbotron text-center">
    <div class="container">
      <div class="row text-center mb-3"></div>

      <div class="row justify-content-between fs-5">
        <div class="col-md-7 align-self-start">
          <br>
          <br>
          <br>
          <h1 data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000" class="display-3">Find the right solution
            for buying cinema tickets</h1>
          <p data-aos="fade-up" data-aos-delay="500" data-aos-duration="1000" class="lead">"Pembelian tiket bioskop
            paling aman nyaman dan tentram, banyak pilihan film terbaru"</p>
          <a href="pesantiket.php" class="btn btn-primary" data-aos="fade-up" data-aos-delay="800"
            data-aos-duration="1000">
            <span>Pesan Tiket</span> </a>
        </div>
        <div class="col-md-5" data-aos="fade-left" data-aos-delay="650" data-aos-duration="1000">
          <img src="img/4.png" alt="logo" width="550">
        </div>
      </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#ffffff" fill-opacity="1"
        d="M0,256L48,224C96,192,192,128,288,122.7C384,117,480,171,576,165.3C672,160,768,96,864,101.3C960,107,1056,181,1152,202.7C1248,224,1344,192,1392,176L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
      </path>
    </svg>
  </section>
  <!-- Akhir Jumbotron -->

  <!-- About -->
  <section id="about">
    <div class="container" data-aos="fade-in">
      <div class="row text-center">
        <h2 data-aos="fade-down" data-aos-delay="200" data-aos-duration="1000" class="display-3 fw-bold">Tentang
          CinemaLabTi21</h2>
        <div class="heading-line mb-1"></div>
      </div>

      <div class="row justify-content-center fs-5 text-center">
        <div class="col-md-6" data-aos="fade-right" data-aos-delay="500" data-aos-duration="1000">
          CinemLabTi21 adalah sebuah jaringan bioskop di Indonesia, dan pelopor jaringan cineplex di Indonesia. Jaringan
          bioskop ini tersebar di beberapa kota besar di seluruh Indonesia dan sebagian besar di antaranya terletak di
          dalam pusat perbelanjaan, dengan film-film Hollywood dan Indonesia sebagai menu utama, dan didukung oleh
          teknologi tata suara Dolby Digital, THX dan yang terbaru Dolby Atmos.
        </div>
        <div class="col-md-6" data-aos="fade-left" data-aos-delay="500" data-aos-duration="1000">
          Group ini didirikan oleh Dimas Fauzian As'aryanda dan bekerjasama dengan Sandia Solahudin Uno. Seiring dengan
          tuntutan perkembangan zaman, CinemaLabTi21 Group telah melakukan sejumlah pembenahan dan pembaharuan, di
          antaranya adalah dengan membentuk jaringan bioskopnya menjadi 4 merek terpisah, yakni Cinema XXI, The
          Premiere, Cinema 21, dan IMAX untuk target pasar berbeda.
        </div>
      </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#e2edff" fill-opacity="1"
        d="M0,192L48,165.3C96,139,192,85,288,101.3C384,117,480,203,576,208C672,213,768,139,864,117.3C960,96,1056,128,1152,122.7C1248,117,1344,75,1392,53.3L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
      </path>
    </svg>
  </section>
  <!-- Akhir About -->

  <!-- Film -->
  <section id="testimoni">
    <div class="container">
      <div class="row text-center mb-3">
        <div class="col">
          <h2 data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000" class="display-3 fw-bold">Film Terlaris
            2023</h2>
          <div class="heading-line mb-1"></div>
        </div>
      </div>

      <div class="row justify-content-center">

        <div class="col-md-3 mb-3" data-aos="fade-up" data-aos-delay="500" data-aos-duration="1000">
          <div class="card">
            <img src="img/projects/1.jpg" class="card-img-top" alt="gambar1" href="pesantiket.php" />
            <div class="card-body">
              <p class="card-text text-center fw-bold">Meg 2: The Trench</p>
            </div>
          </div>
        </div>

        <div class="col-md-3 mb-3" data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000">
          <div class="card">
            <img src="img/projects/2.jpg" class="card-img-top" alt="gambar1" />
            <div class="card-body">
              <p class="card-text text-center fw-bold">Dear Jo: Almost is Never Enough</p>
            </div>
          </div>
        </div>

        <div class="col-md-3 mb-3" data-aos="fade-up" data-aos-delay="700" data-aos-duration="1000">
          <div class="card">
            <img src="img/projects/3.jpg" class="card-img-top" alt="gambar1" />
            <div class="card-body">
              <p class="card-text text-center fw-bold">Black Demon</p>
            </div>
          </div>
        </div>

        <div class="col-md-3 mb-3" data-aos="fade-up" data-aos-delay="800" data-aos-duration="1000">
          <div class="card">
            <img src="img/projects/4.jpg" class="card-img-top" alt="gambar1" />
            <div class="card-body">
              <p class="card-text text-center fw-bold">Suzzanna Malam Jumat Kliwon</p>
            </div>
          </div>
        </div>

        <div class="col-md-3 mb-3" data-aos="fade-up" data-aos-delay="500" data-aos-duration="1000">
          <div class="card">
            <img src="img/projects/5.jpg" class="card-img-top" alt="gambar1" />
            <div class="card-body">
              <p class="card-text text-center fw-bold">The Moon</p>
            </div>
          </div>
        </div>

        <div class="col-md-3 mb-3" data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000">
          <div class="card">
            <img src="img/projects/6.jpg" class="card-img-top" alt="gambar1" />
            <div class="card-body">
              <p class="card-text text-center fw-bold">Teenage Mutant Ninja Turtles: Mutant Mayhem</p>
            </div>
          </div>
        </div>

        <div class="col-md-3 mb-3" data-aos="fade-up" data-aos-delay="700" data-aos-duration="1000">
          <div class="card">
            <img src="img/projects/7.jpg" class="card-img-top" alt="gambar1" />
            <div class="card-body">
              <p class="card-text text-center fw-bold">Cobweb</p>
            </div>
          </div>
        </div>

        <div class="col-md-3 mb-3" data-aos="fade-up" data-aos-delay="800" data-aos-duration="1000">
          <div class="card">
            <img src="img/projects/8.jpg" class="card-img-top" alt="gambar1" />
            <div class="card-body">
              <p class="card-text text-center fw-bold">Detective Conan The Movie: Black Iron Submarine</p>
            </div>
          </div>
        </div>

        <div class="col-md-3 mb-3" data-aos="fade-up" data-aos-delay="500" data-aos-duration="1000">
          <div class="card">
            <img src="img/projects/9.jpg" class="card-img-top" alt="gambar1" />
            <div class="card-body">
              <p class="card-text text-center fw-bold">Oppenheimer (IMAX 2D)</p>
            </div>
          </div>
        </div>

        <div class="col-md-3 mb-3" data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000">
          <div class="card">
            <img src="img/projects/10.jpg" class="card-img-top" alt="gambar1" />
            <div class="card-body">
              <p class="card-text text-center fw-bold">Oppenheimer</p>
            </div>
          </div>
        </div>

        <div class="col-md-3 mb-3" data-aos="fade-up" data-aos-delay="700" data-aos-duration="1000">
          <div class="card">
            <img src="img/projects/11.jpg" class="card-img-top" alt="gambar1" />
            <div class="card-body">
              <p class="card-text text-center fw-bold">Primbon</p>
            </div>
          </div>
        </div>

        <div class="col-md-3 mb-3" data-aos="fade-up" data-aos-delay="800" data-aos-duration="1000">
          <div class="card">
            <img src="img/projects/12.jpg" class="card-img-top" alt="gambar1" />
            <div class="card-body">
              <p class="card-text text-center fw-bold">Ketika Berhenti di Sini</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#ffffff" fill-opacity="1"
        d="M0,192L48,165.3C96,139,192,85,288,101.3C384,117,480,203,576,208C672,213,768,139,864,117.3C960,96,1056,128,1152,122.7C1248,117,1344,75,1392,53.3L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
      </path>
    </svg>
  </section>
  <!-- Akhir Film -->

  <!-- faq -->

  <section id="faq" class="faq">
    <div class="container">
      <div class="row text-center">
        <h1 data-aos="fade-up" data-aos-delay="500" data-aos-duration="1000" class="display-3 fw-bold text-uppercase">
          faq</h1>
        <div class="heading-line"></div>
      </div>
      <div class="row mt-5">
        <div class="col-md-12">
          <div class="accordion" id="accordionExample">
            <div class="accordion-item shadow mb-3">
              <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  Fasilitas apa saja yang di sediakan oleh CinemaLabTi21?
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  CinemaLabTi21 menyediakan Lorem ipsum dolor sit amet consectetur, adipisicing elit. Hic necessitatibus
                  omnis corporis illo nostrum odit eius neque officia reprehenderit fugit, adipisci pariatur, nisi
                  accusantium qui
                  placeat reiciendis voluptate soluta excepturi.
                </div>
              </div>
            </div>
            <div class="accordion-item shadow mb-3">
              <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Apakah mahal
                  berlangganan di CinemaLabTi21?</button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  Oh tentu saja Lorem, ipsum dolor sit amet consectetur adipisicing elit. Natus atque, dolores magni
                  nobis tempora ad repudiandae fugiat explicabo praesentium? Eius illum labore dolores magni quo sed
                  enim optio eos nulla.
                </div>
              </div>
            </div>
            <div class="accordion-item shadow mb-3">
              <h2 class="accordion-header" id="headingFour">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                  Apakah CinemaLabTi21 menyediakan banyak Film anime?
                </button>
              </h2>
              <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  Di CinemaLabTi21 tidak hanya menyediakan film berdurasi panjang tetapi menyediakan juga
                  tempat Teater Bioskop. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod quidem libero
                  aspernatur expedita
                  nam. Voluptatem itaque, odio eius officia corporis omnis vero officiis, a asperiores magni culpa ut
                  quaerat repudiandae?
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#0d6efd" fill-opacity="1"
        d="M0,192L48,192C96,192,192,192,288,176C384,160,480,128,576,117.3C672,107,768,117,864,133.3C960,149,1056,171,1152,165.3C1248,160,1344,128,1392,112L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
      </path>
    </svg>
  </section>
  <!-- akhir faq -->

  <!-- footer -->
  <footer class="bg-primary text-white text-center pb-5">
    <p>&COPY; Copyright 2023 | <a href="https://www.instagram.com/dimasfauziann/"
        class="text-white fw-bold">CinemaLabTi21</a> All Right Reserved.</p>
  </footer>
  <!-- akhir footer -->

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