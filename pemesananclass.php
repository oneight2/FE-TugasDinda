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
          <h1 class="display-5">ISI FORM PEMESANAN PRIVATE CLASS</h1>
        </div>


        <form method="POST" enctype="multipart/form-data">

          <div class="form-group row">
            <label for="jenis" class="col-sm-2 col-form-label">Jenis Kelas</label>
            <div class="col-sm-10">
              <select type="text" class="form-control" name="inputjenis" id="jenis" placeholder="Jenis Kelas">
                <option value="Writing">Writing</option>
                <option value="Public Speaking">Public Speaking</option>
              </select>
            </div>
          </div>

          <div class="form-group row">
            <label for="plgumur" class="col-sm-2 col-form-label">Umur</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="inputumur" id="plgumur" placeholder="Umur">
            </div>
          </div>

          <div class="form-group row">
            <label for="tglkelas" class="col-sm-2 col-form-label">Tanggal Kelas</label>
            <div class="col-sm-10">
              <input type="date" class="form-control" name="inputtgl" id="tglkelas" placeholder="Tanggal Kelas">
            </div>
          </div>

          <div class="form-group row">
            <label for="durasikelas" class="col-sm-2 col-form-label">Durasi</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="inputdurasi" id="durasikelas" placeholder="Durasi Kelas">
            </div>
          </div>

          <div class="form-group row">
            <label for="wktkelas" class="col-sm-2 col-form-label">Waktu Kelas</label>
            <div class="col-sm-10">
              <select type="text" class="form-control" name="inputwkt" id="wktkelas" placeholder="Waktu Kelas">
                <option value="08:00">08:00 AM</option>
                <option value="09:00">09:00 AM</option>
                <option value="10:00">10:00 AM</option>
                <option value="11:00">11:00 AM</option>
              </select>
            </div>
          </div>

          <div class="form-group row">
            <label for="lokasikelas" class="col-sm-2 col-form-label">Lokasi</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="inputlokasi" id="lokasikelas" placeholder="Lokasi Kelas">
            </div>
          </div>

          <div class="form-group row">
            <label for="cttkelas" class="col-sm-2 col-form-label">Catatan</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="inputctt" id="cttkelas" placeholder="Catatan Kelas">
            </div>
          </div>

          <div class="form-group row">
            <div class="col-sm-2">
            </div>
            <div class="col-sm-10">
              <input type="submit" name="simpan" class="btn btn-success" value="Simpan">
              <input type="submit" name="Batal" class="btn btn-dark" value="Batal">
            </div>
          </div>
        </form>
      </div>
      <div class="col-sm-1"></div>
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