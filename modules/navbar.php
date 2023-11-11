<!--BUAT MENU-->
<?php
if (isset($_POST['logout'])) {
    setcookie('namaplg', '', time() + (86400 * 30), "/");
    setcookie('idplg', '', time() + (86400 * 30), "/");
    setcookie('emailplg', '', time() + (86400 * 30), "/");
    setcookie('teleponplg', '', time() + (86400 * 30), "/");
    setcookie('usiaplg', '', time() + (86400 * 30), "/");
    setcookie('alamatplg', '', time() + (86400 * 30), "/");
    // header("location:home.php");
}


?>
<nav class="navbar navbar-expand-lg navbar-light bg-#C8E3D4" style="background-color:#FFF6F6; box-shadow: 0 .5rem 1rem rgba(0,0,0,.3)">
    <img src="gambar/logoo.png" style="width:150px; height:120px; margin-left: 30px; margin-right: 500px; border-radius: 50%;">
    <a class="navbar-brand" href="#" style="font-family:cursive;"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active" style="padding:5px">
                <a class="nav-link" href="home.php" style="font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif; font-size:15px">HOME
                    <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active" style="padding:5px">
                <a class="nav-link" href="sertifikasi.php" style="font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif; font-size:15px">SERTIFIKASI</a>
            </li>
            <li class="nav-item active" style="padding:5px">
                <a class="nav-link" href="hipnoterapi.php" style="font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif; font-size:15px">HIPNOTERAPI</a>
            </li>
            <li class="nav-item active" style="padding:5px">
                <a class="nav-link" href="class.php" style="font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif; font-size:15px">CLASS</a>
            </li>
            <li class="nav-item active" style="padding:5px">
                <a class="nav-link" href="#" style="font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif; font-size:15px">PEMBAYARAN</a>
            </li>
            <li class="nav-item active" style="padding:5px">
                <a class="nav-link" href="#" style="font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif; font-size:15px">REGISTRASI</a>
            </li>
            <?php if (!isset($_COOKIE['namaplg'])) : ?>
                <li class="nav-item active" style="padding:5px">
                    <a class="nav-link" href="loginplg.php" style="font-family:' Trebuchet MS', 'Lucida Sans Unicode' , 'Lucida Grande' , 'Lucida Sans' , Arial, sans-serif; font-size:15px">LOGIN</a>
                </li>
            <?php else : ?>
                <li class="nav-item active dropdown mt-1">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <?php echo ($_COOKIE['namaplg']) ?>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#" data-toggle="modal" data-target="#profileModal">Profile</a></li>
                        <li>
                            <form method="post">
                                <input type="submit" name="logout" value="Logout" class="dropdown-item text-red">
                            </form>
                        </li>
                    </ul>
                </li>
            <?php endif ?>
        </ul>
    </div>
</nav>
<?php if (isset($_COOKIE['namaplg'])) : ?>
    <div class="modal fade" id="profileModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">PROFILE</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div>
                        <p class="mb-0">Nama</p>
                        <p class="font-weight-bold"><?= $_COOKIE['namaplg'] ?></p>
                    </div>
                    <div>
                        <p class="mb-0">Usia</p>
                        <p class="font-weight-bold"><?= $_COOKIE['usiaplg'] ?></p>
                    </div>
                    <div>
                        <p class="mb-0">Email</p>
                        <p class="font-weight-bold"><?= $_COOKIE['emailplg'] ?></p>
                    </div>
                    <div>
                        <p class="mb-0">Telepon</p>
                        <p class="font-weight-bold"><?= $_COOKIE['teleponplg'] ?></p>
                    </div>
                    <div>
                        <p class="mb-0">Alamat</p>
                        <p class="font-weight-bold"><?= $_COOKIE['alamatplg'] ?></p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
<?php endif ?>