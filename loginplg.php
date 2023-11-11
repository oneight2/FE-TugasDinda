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

  <?php
  include "includes/configg.php";
  ob_start();

  if (isset($_POST['submitlogin'])) {
    $nameplg = $_POST["name"];
    $passplg = $_POST["pass"];
    $sql_login = mysqli_query($connection, "SELECT * FROM pelanggan
        WHERE pelanggan_nama = '$nameplg' and password = '$passplg'");

    if (mysqli_num_rows($sql_login) > 0) {
      $row_admin = mysqli_fetch_array($sql_login);
      // print_r($row_admin);
      if (isset($row_admin)) {
        setcookie('namaplg', $row_admin['pelanggan_nama'], time() + (86400 * 30), "/");
        setcookie('idplg', $row_admin['pelanggan_id'], time() + (86400 * 30), "/");
        setcookie('emailplg', $row_admin['email'], time() + (86400 * 30), "/");
        setcookie('teleponplg', $row_admin['telepon'], time() + (86400 * 30), "/");
        setcookie('usiaplg', $row_admin['usia'], time() + (86400 * 30), "/");
        setcookie('alamatplg', $row_admin['alamat'], time() + (86400 * 30), "/");
        header("location:hipnoterapi.php");
      }
      exit();
    } else {
      echo "<div class='alert alert-danger' role='alert'>Username atau Password Salah!</div>";
    }
  }


  ?>


  <div class="container" style="display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            grid-gap: 20px;">
    <div class="row">

      <img src="gambar/logobihype.jpeg" style="width: 400px; height: 400px; margin-top:80px; margin-left:40px">
      <div class="col-lg-6">
        <div class="p-5">
          <div class="text-center">
            <h1 class="h4 text-gray-900 mb-4">Welcome !</h1>
          </div>
          <form method="POST" class="user">
            <div class="form-group">

              <input type="text" name="name" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Your Name...">
            </div>
            <div class="form-group">
              <input type="password" name="pass" class="form-control form-control-user" id="exampleInputPassword" placeholder="Enter Password">
            </div>

            <!--        <a href="index.html" class="btn btn-primary btn-user btn-block"
                                        value="Login">    
                                        </a> -->

            <input type="submit" name="submitlogin" class="btn btn-primary btn-user btn-block" value="Login">

            <hr>

        </div>
      </div>
    </div>
  </div>

  <!-- PANGGIL FOOTER -->
  <?php include_once "modules/footer.php"; ?>

</body>

<?php
mysqli_close($connection);
ob_end_flush();
?>

</html>