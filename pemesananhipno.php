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


  <div class="container" style="display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            grid-gap: 20px;">

    <div class="row">
      <div class="col-sm-1"></div>
      <div class="col-sm-10">

        <div class="container">
          <h1 class="display-5">ISI FORM PEMESANAN SESI HIPNOTERAPI</h1>
        </div>

        <?php
        include "includes/configg.php";

        if (isset($_POST['simpan'])) {





          $tgl = $_POST['inputtgl'];
          $waktu = $_POST['inputwkt'];
          $umur = $_POST['inputumur'];
          $durasi = $_POST['inputdurasi'];
          $lokasi = $_POST['inputlokasi'];
          $catatan = $_POST['inputctt'];


          mysqli_query($connection, "insert into pesanan_hipnoterapi values ('','','$tgl','$waktu',
    '$umur','$durasi','$lokasi','$catatan')");

          header("location:pemesananhipno.php");
        }


        ?>


        <form method="POST" enctype="multipart/form-data">





          <div class="form-group row">
            <label for="tglsesi" class="col-sm-2 col-form-label">Pilih Tanggal Sesi</label>
            <div class="col-sm-10">
              <input type="date" class="form-control" name="inputtgl" id="tglsesi" placeholder="Tanggal Sesi ♡">
            </div>
          </div>

          <div class="form-group row">
            <label for="wktsesi" class="col-sm-2 col-form-label">Pilih Waktu Sesi</label>
            <div class="col-sm-10">
              <select type="text" class="form-control" name="inputwkt" id="wktsesi" placeholder="Waktu Sesi ♡">
                <option value="08:00">08:00 AM</option>
                <option value="09:00">09:00 AM</option>
                <option value="10:00">10:00 AM</option>
                <option value="11:00">11:00 AM</option>
              </select>
            </div>
          </div>

          <div class="form-group row">
            <label for="plgumur" class="col-sm-2 col-form-label">Masukkan Umur</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="inputumur" id="plgumur" placeholder="Umur ♡">
            </div>
          </div>

          <div class="form-group row">
            <label for="durasisesi" class="col-sm-2 col-form-label">Masukkan Durasi</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="inputdurasi" id="durasisesi" placeholder="Durasi Sesi ♡">
            </div>
          </div>

          <div class="form-group row">
            <label for="lokasisesi" class="col-sm-2 col-form-label">Masukkan Lokasi</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="inputlokasi" id="lokasisesi" placeholder="Lokasi Sesi ♡">
            </div>
          </div>

          <div class="form-group row">
            <label for="cttsesi" class="col-sm-2 col-form-label">Berikan Catatan</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="inputctt" id="cttsesi" placeholder="Catatan Sesi Hipnoterapi ♡">
            </div>
          </div>

          <div class="form-group row">
            <div class="col-sm-2">
            </div>
            <div class="col-sm-10">
              <input type="submit" name="simpan" class="btn btn-success" value="Pesan Sesi">
              <input type="submit" name="Batal" class="btn btn-dark" value="Batalkan">
            </div>
          </div>
        </form>
      </div>
      <div class="col-sm-1"></div>
    </div>
  </div>

  <!-- PANGGIL FOOTER -->
  <?php include_once "modules/footer.php"; ?>
  <script>
    $(function() {
      $("#inputtgl").datepicker({
        dateFormat: "yy-mm-dd"
      });
    });
  </script>
</body>

</html>