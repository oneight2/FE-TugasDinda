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

  <!--awal selamat dtg-->
  <div class="jumbotron jumbotron-fluid" style="background-color:#F5F7F8">
    <div class="container">
      <h1 class="display-4">Selamat, datang!</h1>
      <p class="lead">Ini merupakan website dari Bi Hype Therapy.</p>
    </div>
  </div>
  <!--akhir slmt dtg-->

  <!--awal tentang kami-->
  <div class="container" style="display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            grid-gap: 20px;">
    <div class="column" style="padding: 20px;">
      <img src="gambar/logoo.png" style="width: 480px; height: 480px">
    </div>
    <div class="column" style="margin-top:20px;">
      <h2>BI HYPE THERAPY</h2>
      <p>Bi Hype Therapy adalah sebuah usaha layanan hipnoterapi dan private class yang menawarkan berbagai layanan
        untuk membantu anda dalam mencapai perubahan positif melalui hipnoterapi dan private class.</p>
      <p>Bi Hype Therapy adalah sebuah usaha layanan hipnoterapi dan private class yang menawarkan berbagai layanan
        untuk membantu anda dalam mencapai perubahan positif melalui hipnoterapi dan private class. Pada Bi Hype Therapy terdapat kelas writing dan public speaking yang dapat anda pilih.</p>
      <p><b> • Bi Hype Therapy memiliki Hipnoterapi Profesional</b> : Bi Hype Therapy menawarkan sesi hipnoterapi yang dipandu oleh terapis berlisensi dan berpengalaman.
        Terapis ini memiliki pengetahuan dan keterampilan yang mendalam sehingga klien untuk merespons positif
        terhadap perubahan perilaku mereka.</p>
      <p><b> • Sesi Private Class</b>: Bi Hype Therapy juga menyediakan kelas-kelas pribadi yang dirancang untuk membantu anda mencapai tujuan pribadi anda. Kelas ini mencakup writing dan public speaking yang dapat
        anda jadikan sebagai media pembelajaran untuk pengembangan diri dan meningkatkan kepercayaan diri.</p>
    </div>
  </div>
  <!--akhir tentang kami-->

  <br></br>
  <!--awal apa itu hipno-->
  <div class="container" style="display: grid;
            grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            grid-gap: 20px;">
    <div class="column" style="padding: 20px;">
      <h2>Apa itu Hipnoterapi?</h2>
      <p><em>Hipnoterapi adalah bentuk terapi psikologis yang menggunakan hipnosis untuk mencapai perubahan pikiran, perilaku,
          atau kondisi emosional dalam individu. Dalam hipnoterapi, seseorang masuk ke dalam keadaan relaksasi dalam fokus yang mendalam, yang memungkinkan terapis
          untuk bekerja dengan pikiran bawah sadar individu guna mencapai tujuan terapi,
          seperti mengatasi fobia, mengurangi stres, atau mengubah kebiasaan buruk.</em></p>
    </div>
    <div class="column" style="margin-top:20px">
      <h2>Apa Saja Keuntungan Hipnoterapi?</h2>
      <p style="font-size: 17px;"><em>1. Dengan kita berbicara dengan seseorang yang profesional, mampu membuat beban kamu berkurang lho!
          karena kamu akan merasa didengar dan dimengerti untuk menghilangkan pikiran dan emosi negatifmu.</em></p>
      <p style="font-size: 17px;"><em>2. Berbicara dengan seseorang yang profesional dapat memberikan kamu lasa lebih lega, karena rasa takut itu tidak hanya tersimpan dalam diri.
          pada hipnoterapi ini kamu akan dibantu untuk mengeluarkan rasa takut tersebut hingga kamu merasa lebih lega.</em></p>
      <p style="font-size: 17px;"><em>3. Jika kamu berhubungan baik dengan terapis maka kamu akan pergi untuk menemui terapis dengan nyaman.
          Terapis kami akan membimbing kamu untuk menyembuhkan luka batinmu.</em></p>
      <p style="font-size: 17px;"><em>4. Jalannya terapi tidak linier dan memungkinkan kamu untuk mengenal diri lebih dalam dan memberikan kesadaran
          pada emosi yang selama ini tersimpan namun memiliki pengaruh besar dalam keputusan dihidupmu.</em></p>
    </div>
  </div>
  <!--akhir apa itu hipno-->

  <br></br>
  <!--awal apa itu hipno-->
  <div class="container" style="display: grid;
            grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            grid-gap: 20px;">
    <div class="column" style="padding: 30px;">
      <p STYLE="text-align:center;font-size:40px; margin-top:20px; color:#04364A; margin-bottom:22px"> <b>Frequently Asked Questions</b> </p>
      <div class="faq-question" onclick="toggleAnswer(1)" style="cursor: pointer; font-size:17px;"><b>
          Question 1: Apakah sebelum sesi terapi aku harus menceritakan seluruh masalahku dengan detail dan lengkap?
          <span id="icon1" class="toggle-icon">[+]</span></b>
      </div>
      <div id="answer1" style="display: none; margin-top: 16px; font-family:sans-serif">
        Tidak perlu juga bisa. Yang terpenting kamu jujur dan memberitahukan inti masalah utamamu kepada terapismu. Ingat, keterbukaan pada terapis akan mempermudah proses terapimu.
      </div>
      <br></br>

      <div class="faq-question" onclick="toggleAnswer(2)" style="cursor: pointer; font-size:17px;"><b>
          Question 2: Apakah ketika terapi aku akan menangis?
          <span id="icon2" class="toggle-icon">[+]</span></b>
      </div>
      <div id="answer2" style="display: none; margin-top: 16px; font-family:sans-serif">
        Bisa iya, bisa tidak. Emosi atau reaksi yang akan muncul tergantung pada apa masalah yang kamu hadapi. Setiap orang bisa mengeluarkan reaksi yang berbeda dari setiap masalah yang ingin diselesaikan.
      </div>
      <br></br>

      <div class="faq-question" onclick="toggleAnswer(3)" style="cursor: pointer; font-size:17px;"><b>
          Question 3: Apakah semua perintah hipnoterapis otomatis akan kulakukan?
          <span id="icon3" class="toggle-icon">[+]</span></b>
      </div>
      <div id="answer3" style="display: none; margin-top: 16px; font-family:sans-serif">
        Yang mengontrol dirimu, ucapanmu, emosimu, adalah kamu. Jika dirimu tidak suka atau tidak setuju, maka hipnoterapis tidak bisa memaksakan sugesti atau perintah apapun padamu.
      </div>
      <br></br>

      <div class="faq-question" onclick="toggleAnswer(4)" style="cursor: pointer; font-size:17px;"><b>
          Question 4: Saat hipnoterapi, apakah aku akan mengeluarkan semua rahasiaku?
          <span id="icon4" class="toggle-icon">[+]</span></b>
      </div>
      <div id="answer4" style="display: none; margin-top: 16px;font-family:sans-serif">
        Tidak, saat hipnoterapi, kamu masih bisa mengendalikan apa yang ingin kamu kendalikan. Hal-hal yang kamu bicarakan atau keluarkan hanya hal-hal yang memang ingin kamu sampaikan.
      </div>
      <br></br>

      <div class="faq-question" onclick="toggleAnswer(5)" style="cursor: pointer; font-size:17px;"><b>
          Question 5: Kenapa saat hipnoterapi harus direkam? Aku malu.
          <span id="icon5" class="toggle-icon">[+]</span></b>
      </div>
      <div id="answer5" style="display: none; margin-top: 16px;font-family:sans-serif">
        Untuk menghindari adanya tindakan atau tuduhan atas pelecehan seksual. Selain itu rekaman juga digunakan sebagai bukti proses terapi dilakukan sesuai prosedur. Tenang saja, semua rekaman bersifat rahasia antara kamu dan terapismu.
      </div>
      <br></br>

      <div class="faq-question" onclick="toggleAnswer(6)" style="cursor: pointer; font-size:17px;"><b>
          Question 6: Setelah sesi terapi, apa yang harus aku lakukan?
          <span id="icon6" class="toggle-icon">[+]</span></b>
      </div>
      <div id="answer6" style="display: none; margin-top: 16px;font-family:sans-serif">
        Terapismu akan memberikan informasi padamu apa yang harus kamu lakukan. Karena semua tergantung pada sesi yang dilakukan. Beda orang, beda masalah, beda reaksi, beda juga apa yang harus dilakukan ya.
      </div>
      <br></br>
    </div>

    <div class="column" style="margin-top:20px">
      <img src="gambar/C.png" style="width: 580px; height: 580px;">
    </div>
  </div>
  <!--akhir apa itu hipno-->






  <!-- PANGGIL FOOTER -->
  <?php include_once "modules/footer.php"; ?>
  <script>
    function toggleAnswer(questionNumber) {
      var answerId = "answer" + questionNumber;
      var answer = document.getElementById(answerId);
      var iconId = "icon" + questionNumber;
      var icon = document.getElementById(iconId);

      if (answer.style.display === "none") {
        answer.style.display = "block";
        icon.textContent = "[-]";
      } else {
        answer.style.display = "none";
        icon.textContent = "[+]";
      }
    }
  </script>


</body>

</html>