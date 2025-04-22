<?php

$tarikhlast="June 27, 2025 8:00:00";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SUDUT MAYA</title>
    <link rel="stylesheet" href="stylesheet.css">
</head>
<body>

  <div class="container">
    <div class="box">
        <div class="slider">
            <img src="img/img1.png">
            <img src="img/img2.jpg">
            <img src="img/img3.jpg">
        </div>

        <br>

        <footer>
            <marquee class="announcement">Real happiness is when your code runs without errors </marquee>
        </footer>
    </div>  

    <!-- Sidebar Kanan -->
    <div class="sidebar">
      <div class="side-card">
          <div class="side-card-header">
              <h3 class="side-card-title">Berita Terkini</h3>
          </div>
          <div class="side-card-content" id="news-container">
              <div class="news-box">Berita 1: Update terkini...</div>
              <div class="news-box">Berita 2: Acara akan datang...</div>
              <div class="news-box">Berita 3: Pengumuman penting...</div>
          </div>
      </div>
  </div>
</div>

    <!-- Flexbox -->
    <div class="flexbox">
        <div class="kotak1">AKTIVITI</div>
        <div class="kotak2">ZON</div>
        <div class="kotak3">3</div>  
    </div>

    <!-- Countdown -->
        <div class="timer">
            <div class="sub_timer">
                <h1 id="day" class="digit">00</h1>
                <p class="digit_name">Days</p>
            </div>
            <div class="sub_timer">
                <h1 id="hour" class="digit">00</h1>
                <p class="digit_name">Hours</p>
            </div>
            <div class="sub_timer">
                <h1 id="min" class="digit">00</h1>
                <p class="digit_name">Minutes</p>
            </div>
            <div class="sub_timer">
                <h1 id="sec" class="digit">00</h1>
                <p class="digit_name">Seconds</p>
            </div>
        </div>
    </div>




    <!-- javascript  -->
    <script>
        var target_mili_sec = new Date("June 27, 2025 8:00:00").getTime();
        function timer() {
            var now_mili_sec = new Date().getTime();
            var remaining_sec = Math.floor((target_mili_sec - now_mili_sec) / 1000);
    
            var day = Math.floor(remaining_sec / (3600 * 24));
            var hour = Math.floor((remaining_sec % (3600 * 24)) / 3600);
            var min = Math.floor((remaining_sec % 3600) / 60);
            var sec = Math.floor(remaining_sec % 60);
    
            document.querySelector("#day").innerHTML = day;
            document.querySelector("#hour").innerHTML = hour;
            document.querySelector("#min").innerHTML = min;
            document.querySelector("#sec").innerHTML = sec;
        }
    
        setInterval(timer, 1000); // 1000 means 1 sec
    </script>
    

    <script src="script.js"></script>
</body>
</html>
