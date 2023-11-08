<?php
session_start();
?>
<!doctype html>

<?php
include "includes/configg.php";
$querypengajar = mysqli_query($connection, "SELECT pengajar_id, pengajar_nama, usia_pengajar, deskripsi_pengajar, foto_pengajar FROM pengajar")
?>

<html lang="en">

<!-- PANGGIL HEADER -->
<?php include_once "modules/header.php"; ?>

<body style="background-image: linear-gradient(to right, #fbc2eb, #a6c1ee);">

  <!-- PANGGIL NAVBAR -->
  <?php include_once "modules/navbar.php"; ?>




  <p STYLE="text-align:center;font-size:30px; color:#0F0F0F; margin-top:20px"> LAYANAN PRIVATE CLASS BI HYPE THERAPY </p>

  <!--awal nama terapis-->
  <div class="container-fluid py-5">
    <div class="container">
      <h3>Pilihan Pengajar</h3>

      <div class="row mt-5">
        <?php while ($data = mysqli_fetch_array($querypengajar)) { ?>
          <div class="col-md-4 mb-3">
            <div class="card h-100">

              <div class="image-box" style="height:300px;">
                <img src="gambar/<?php echo $data['foto_pengajar']; ?>" class="card-img-top" alt="..." style="height: 100%; width: 100%; object-fit:hover; object-position:center;">
              </div>

              <div class="card-body">
                <h5 class="card-title"><?php echo $data['pengajar_nama']; ?></h5>
                <p class="card-text"><?php echo $data['usia_pengajar']; ?></p>
                <p class="card-text"><?php echo $data['deskripsi_pengajar']; ?></p>
                <a href="pemesananclass.php" class="btn btn-primary">Lakukan Pemesanan Private Class</a>
              </div>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>
  </div>

  <!--akhir nama terapis-->





  <!-- PANGGIL FOOTER -->
  <?php include_once "modules/FOOTER.php"; ?>
</body>

</html>