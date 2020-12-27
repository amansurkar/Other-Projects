<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="seat_style.css" />
    <title>Bus Seat Booking</title>
  </head>
  <body>
    <div class="movie-container">
      <label>Select the Bus</label>
      <select id="movie">
        <option id="Saini" value="1800">Saini Travels AC (Rs. 1800)</option>
        <option id="Purple" value="1200">Purple Travels Non-AC (Rs. 1200)</option>
      </select>
    </div>

    <ul class="showcase">
      <li>
        <div class="seat"></div>
        <small>N/A</small>
      </li>
      <li>
        <div class="seat selected"></div>
        <small>Selected</small>
      </li>
      <li>
        <div class="seat occupied"></div>
        <small>Occupied</small>
      </li>
    </ul>

    <div class="container">

      <div class="row">
        <div id="s1" class="seat"></div>
        <div id="s2" class="seat"></div>
        <div id="s3" class="seat"></div>
        <div id="s4" class="seat"></div>
      </div>

      <div class="row">
        <div id="s5" class="seat"></div>
        <div id="s6" class="seat"></div>
        <div id="s7" class="seat occupied"></div>
        <div id="s8" class="seat occupied"></div>
      </div>

      <div class="row">
        <div id="s9" class="seat"></div>
        <div id="s10" class="seat"></div>
        <div id="s11" class="seat"></div>
        <div id="s12" class="seat"></div>
      </div>

      <div class="row">
        <div id="s13" class="seat"></div>
        <div id="s14" class="seat"></div>
        <div id="s15" class="seat"></div>
        <div id="s16" class="seat"></div>
      </div>

      <div class="row">
        <div id="s17" class="seat"></div>
        <div id="s18" class="seat"></div>
        <div id="s19" class="seat"></div>
        <div id="s20" class="seat occupied"></div>
      </div>

      <div class="row">
        <div id="s21" class="seat"></div>
        <div id="s22" class="seat"></div>
        <div id="s23" class="seat"></div>
        <div id="s24" class="seat"></div>
      </div>
    </div>

    <p class="text">
      You have selected <span id="count">0</span> seats for a price of Rs.<span
        id="price"
        >0</span
      >
    </p>

    <p class="text">
      You have selected seat no. as follow: <span id="seatid">0</span>
    </p>


    

    <button type="submit" id="button" onclick="saveseats()">Confirm</button>

    <script src="seat_script.js" type="text/javascript"></script>
  </body>
</html>
