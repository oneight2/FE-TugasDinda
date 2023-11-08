<?php
session_start();
?>
<!doctype html>
<html lang="en">

<!-- PANGGIL HEADER -->
<?php include_once "modules/header.php"; ?>

<body style="background-image: linear-gradient(to right, #fbc2eb, #a6c1ee);">

  <!-- PANGGIL NAVBAR -->
  <?php include_once "modules/navbar.php"; ?>



  <!--awal PROFILE-->
  <div class="container" style="display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            grid-gap: 20px;">
    <div class="column" style="padding: 20px;">
      <img src="gambar/k.png" style="width: 500px;">
    </div>
    <div class="column" style="margin-top:20px;">
      <h1 style="font-family:fantasy; font-size:25px;">TERAPIS BI HYPE THERAPY</h1>
      <a href="filee.pdf" download>
        <button style="cursor: pointer;">Unduh Profile PDF</button>
      </a>
    </div>
  </div>
  <!--akhir PROFILE-->


  <!--AWAL SERTI-->
  <div class="container" style="display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            grid-gap: 20px;">
    <div class="column" style="padding: 20px;">
      <img src="gambar/k.png" style="width: 500px;">
    </div>
    <div class="column" style="margin-top:20px;">
      <h1 style="font-family:fantasy; font-size:25px;">SERTIFIKASI TERAPIS BI HYPE THERAPY</h1>
      </a>
    </div>
  </div>
  <!--AKHIR SERTI-->



  <!-- PANGGIL FOOTER -->
  <?php include_once "modules/footer.php"; ?>
</body>

</html>