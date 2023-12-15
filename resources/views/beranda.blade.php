
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pemilihan Wisma</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Facebook Opengraph integration: https://developers.facebook.com/docs/sharing/opengraph -->
  <meta property="og:title" content="">
  <meta property="og:image" content="">
  <meta property="og:url" content="">
  <meta property="og:site_name" content="">
  <meta property="og:description" content="">

  <!-- Twitter Cards integration: https://dev.twitter.com/cards/  -->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="">
  <meta name="twitter:title" content="">
  <meta name="twitter:description" content="">
  <meta name="twitter:image" content="">

  <!-- Favicons -->
  <link href="assets2/img/favicon.png" rel="icon">
  <link href="assets2/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,700|Roboto:400,900" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets2/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets2/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets2/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets2/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Bell
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/bell-free-bootstrap-4-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero">
    <div class="container text-center">
      <div class="row">
        <div class="col-md-12">
          <a class="hero-brand" href="index.html" title="Home"><img alt="Bell Logo" src="assets2/img/unipi.png"></a>
        </div>
      </div>

      <div class="col-md-12">
        <h1>
          Kelompok1 SI-5A Malam
        </h1>

        <p class="tagline">
         Ini Adalah APlikasi Sederhana Pemilihan Wisma<br> Dengan Menggunakan Metode AHP dan Framework Laravel
        </p>

        <a href="{{ route('login') }}" class="btn btn-full scrollto">Get Started Now</a>
      </div>
    </div>

  </section><!-- End Hero -->


  <main id="main">

<!-- ======= About Section ======= -->
<section class="about" id="about">

    <div class="container text-center">
      <h2>
        Tentang AHP
      </h2>

      <p>
        AHP (Analytical Hierarchy Process) adalah sebuah metode pengambilan keputusan multi-kriteria yang dikembangkan oleh matematikawan Thomas L. Saaty pada tahun 1970-an. Metode ini digunakan untuk membantu dalam mengambil keputusan yang kompleks dengan mempertimbangkan berbagai kriteria dan sub-kriteria yang relevan.
      </p>

      <p>
        Dalam AHP, keputusan dibagi menjadi beberapa kriteria dan sub-kriteria. Setiap kriteria memiliki bobot relatif terhadap tujuan akhir. Metode ini melibatkan pembuatan matriks perbandingan berpasangan (pairwise comparison matrix) untuk menentukan bobot relatif antar kriteria. Hasil perhitungan matriks ini digunakan untuk menghitung skor akhir dan memilih alternatif terbaik.
      </p>

      <p>
        Cara menghitung AHP melibatkan langkah-langkah sebagai berikut:
      </p>

      <ol class="text-start">
        <li>Tentukan tujuan utama keputusan.</li>
        <li>Identifikasi kriteria yang relevan terkait dengan tujuan tersebut.</li>
        <li>Buat matriks perbandingan berpasangan (pairwise comparison matrix) untuk menilai hubungan relatif antar kriteria.</li>
        <li>Hitung vektor eigen dan nilai eigen terkait dengan matriks perbandingan berpasangan.</li>
        <li>Hitung rasio konsistensi untuk memastikan konsistensi nilai yang dihasilkan.</li>
        <li>Hitung skor akhir untuk setiap alternatif dan pilih alternatif dengan skor tertinggi sebagai solusi terbaik.</li>
      </ol>

      <p>
        AHP telah diterapkan dalam berbagai bidang, termasuk perencanaan, manajemen proyek, pemilihan supplier, dan pengambilan keputusan bisnis lainnya.
      </p>

    </div>

  </section>
  <!-- End About Section -->




  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer class="site-footer">
    <div class="bottom">
      <div class="container">
        <div class="row">

          <div class="col-lg-6 col-xs-12 text-lg-start text-center">
            <p class="copyright-text">
              &copy; Copyright <strong>Kelompok 1 5A-Malam</strong>. All Rights Reserved
            </p>
            <div class="credits">
              <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Bell
            -->
              Designed by <a href="">Kelompok 1</a>
            </div>
          </div>

          <div class="col-lg-6 col-xs-12 text-lg-right text-center">
            <ul class="list-inline">
              <li class="list-inline-item">
                <a href="index.html">Home</a>
              </li>

              <li class="list-inline-item">
                <a href="#about">About Us</a>
              </li>

              <li class="list-inline-item">
                <a href="#features">Features</a>
              </li>

              <li class="list-inline-item">
                <a href="#portfolio">Portfolio</a>
              </li>

              <li class="list-inline-item">
                <a href="#team">Team</a>
              </li>

              <li class="list-inline-item">
                <a href="#contact">Contact</a>
              </li>
            </ul>
          </div>

        </div>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets2/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets2/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets2/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets2/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets2/js/main.js"></script>

</body>

</html>
