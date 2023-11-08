<?php
session_start();
?>
<!doctype html>
<html lang="en">

<!-- PANGGIL HEADER -->
<?php include_once "modules/header.php"; ?>

<body style="background-color: #FAF3F0;">

    <!-- PANGGIL NAVBAR -->
    <?php include_once "modules/navbar.php"; ?>


    <!--AWAL FAQ-->
    <p STYLE="text-align:center;font-size:50px; margin-top:25px; color:#04364A"> Frequently Asked Questions </p>
    <br></br>
    <div class="container">
        <div class="row" style="margin-left:60px">

            <div class="col-sm-6" style="margin-top: 50px;">
                <div class="faq-question" onclick="toggleAnswer(1)" style="cursor: pointer; font-size:17px; ">
                    Question 1: Apakah sebelum sesi terapi aku harus menceritakan seluruh masalahku dengan detail dan lengkap?
                    <span id="icon1" class="toggle-icon">[+]</span>
                </div>
                <div id="answer1" style="display: none; margin-top: 16px; font-family:sans-serif">
                    Tidak perlu juga bisa. Yang terpenting kamu jujur dan memberitahukan inti masalah utamamu kepada terapismu. Ingat, keterbukaan pada terapis akan mempermudah proses terapimu.
                </div>
                <hr style="border: 1px solid #D6D46D;">
                <br></br>

                <div class="faq-question" onclick="toggleAnswer(2)" style="cursor: pointer; font-size:17px;">
                    Question 2: Apakah ketika terapi aku akan menangis?
                    <span id="icon2" class="toggle-icon">[+]</span>
                </div>
                <div id="answer2" style="display: none; margin-top: 16px; font-family:sans-serif">
                    Bisa iya, bisa tidak. Emosi atau reaksi yang akan muncul tergantung pada apa masalah yang kamu hadapi. Setiap orang bisa mengeluarkan reaksi yang berbeda dari setiap masalah yang ingin diselesaikan.
                </div>
                <hr style="border: 1px solid #D6D46D;">
                <br></br>

                <div class="faq-question" onclick="toggleAnswer(3)" style="cursor: pointer; font-size:17px;">
                    Question 3: Apakah semua perintah hipnoterapis otomatis akan kulakukan?
                    <span id="icon3" class="toggle-icon">[+]</span>
                </div>
                <div id="answer3" style="display: none; margin-top: 16px; font-family:sans-serif">
                    Yang mengontrol dirimu, ucapanmu, emosimu, adalah kamu. Jika dirimu tidak suka atau tidak setuju, maka hipnoterapis tidak bisa memaksakan sugesti atau perintah apapun padamu.
                </div>
                <hr style="border: 1px solid #D6D46D;">
                <br></br>

                <div class="faq-question" onclick="toggleAnswer(4)" style="cursor: pointer; font-size:17px;">
                    Question 4: Saat hipnoterapi, apakah aku akan mengeluarkan semua rahasiaku?
                    <span id="icon4" class="toggle-icon">[+]</span>
                </div>
                <div id="answer4" style="display: none; margin-top: 16px;font-family:sans-serif">
                    Tidak, saat hipnoterapi, kamu masih bisa mengendalikan apa yang ingin kamu kendalikan. Hal-hal yang kamu bicarakan atau keluarkan hanya hal-hal yang memang ingin kamu sampaikan.
                </div>
                <hr style="border: 1px solid #D6D46D;">
                <br></br>

                <div class="faq-question" onclick="toggleAnswer(5)" style="cursor: pointer; font-size:17px;">
                    Question 5: Kenapa saat hipnoterapi harus direkam? Aku malu.
                    <span id="icon5" class="toggle-icon">[+]</span>
                </div>
                <div id="answer5" style="display: none; margin-top: 16px;font-family:sans-serif">
                    Untuk menghindari adanya tindakan atau tuduhan atas pelecehan seksual. Selain itu rekaman juga digunakan sebagai bukti proses terapi dilakukan sesuai prosedur. Tenang saja, semua rekaman bersifat rahasia antara kamu dan terapismu.
                </div>
                <hr style="border: 1px solid #D6D46D;">
                <br></br>

                <div class="faq-question" onclick="toggleAnswer(6)" style="cursor: pointer; font-size:17px;">
                    Question 6: Setelah sesi terapi, apa yang harus aku lakukan?
                    <span id="icon6" class="toggle-icon">[+]</span>
                </div>
                <div id="answer6" style="display: none; margin-top: 16px;font-family:sans-serif">
                    Terapismu akan memberikan informasi padamu apa yang harus kamu lakukan. Karena semua tergantung pada sesi yang dilakukan. Beda orang, beda masalah, beda reaksi, beda juga apa yang harus dilakukan ya.
                </div>
                <hr style="border: 1px solid #D6D46D;">
                <br></br>
            </div>

            <div class="col-sm-6">
                <div class="kolsatu">
                    <img src="gambar/C.png" style="width: 400px; height: 400px; margin-top: 30px">
                </div>
            </div>

        </div>
    </div>
    <!--AKHIR FAQ-->






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