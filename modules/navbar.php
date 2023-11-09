<!--BUAT MENU-->
<?php

if (isset($_POST['logout'])) {
    setcookie('namaplg', '', time() + (86400 * 30), "/");
    setcookie('idplg', '', time() + (86400 * 30), "/");
    setcookie('emailplg', '', time() + (86400 * 30), "/");
    header("Location: home.php");
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
                        <li><a class="dropdown-item" href="#">Profile</a></li>
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