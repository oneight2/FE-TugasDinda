<?php
session_start();
?>
<!doctype html>

<?php
include "includes/configg.php";
$queryterapis = mysqli_query($connection, "SELECT terapis_id, terapis_nama, usia_terapis, deskripsi_terapis, foto_terapis FROM terapis")
?>


<html lang="en">

<!-- PANGGIL HEADER -->
<?php include_once "modules/header.php"; ?>

<body style="background-image: linear-gradient(to right, #fbc2eb, #a6c1ee);">

  <!-- PANGGIL NAVBAR -->
  <?php include_once "modules/navbar.php"; ?>

  <p STYLE="text-align:center;font-size:30px; color:#0F0F0F; margin-top:20px"> LAYANAN HIPNOTERAPIS BI HYPE THERAPY </p>

  <!--awal nama terapis-->
  <div class="container-fluid py-5">
    <div class="container">
      <h3>Pilihan Terapis</h3>

      <div class="row mt-5">
        <?php while ($data = mysqli_fetch_array($queryterapis)) { ?>
          <div class="col-md-4 mb-3">
            <div class="card h-100">

              <div class="image-box" style="height:300px;">
                <img src="gambar/<?php echo $data['foto_terapis']; ?>" class="card-img-top" alt="..." style="height: 100%; width: 100%; object-fit:hover; object-position:center;">
              </div>

              <div class="card-body">
                <h5 class="card-title"><?php echo $data['terapis_nama']; ?></h5>
                <p class="card-text"><?php echo $data['usia_terapis']; ?></p>
                <p class="card-text"><?php echo $data['deskripsi_terapis']; ?></p>
                <a href="pemesananhipno.php" class="btn btn-primary">Lakukan Pemesanan Hipnoterapi</a>
              </div>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>
  </div>
  <!--akhir nama terapis-->

  <!-- PANGGIL FOOTER -->
  <?php include_once "modules/footer.php"; ?>



</body>

</html>