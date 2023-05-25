<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BEM UKRIDA</title>
    <link rel="stylesheet" href="css/home.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
    <script src="js/home.js" defer></script>
  </head>
  <body>
    <?php require 'navbar.php'
    ?>
    <div class="container-home">
    <section class="wrapper">
      
      <div class="image-container">
        <div class="carousel">
          <img src="image/BPH.png" alt="" />
          <img src="image/Menlu.png" alt="" />
          <img src="image/Menda.png" alt="" />
          <img src="image/Infokom.png" alt="" />
          <img src="image/SDO.png" alt="" />
          <img src="image/Sosmas.png" alt="" />
          <img src="image/Kastrat.png" alt="" />
        </div>
       
      </div>
    </section>
    </div>

    <div class="contianer-calendar">
      <div class="calendar">
        <div class="calendar-header">
          <span class="month-picker" id="month-picker"> May </span>
          <div class="year-picker" id="year-picker">
            <span class="year-change" id="pre-year">
              <pre><</pre>
            </span>
            <span id="year">2020 </span>
            <span class="year-change" id="next-year">
              <pre>></pre>
            </span>
          </div>
        </div>
 
        <div class="calendar-body">
          <div class="calendar-week-days">
            <div>Sun</div>
            <div>Mon</div>
            <div>Tue</div>
            <div>Wed</div>
            <div>Thu</div>
            <div>Fri</div>
            <div>Sat</div>
          </div>
          <div class="calendar-days">
          </div>
        </div>
        <div class="calendar-footer">
        </div>
        <div class="date-time-formate">
          <div class="day-text-formate">TODAY</div>
          <div class="date-time-value">
            <div class="time-formate">02:51:20</div>
            <div class="date-formate">23 - july - 2022</div>
          </div>
        </div>
        <div class="month-list"></div>
      </div>
    </div>
  </body>
<?php
(include 'footer.php')
?>
</html>