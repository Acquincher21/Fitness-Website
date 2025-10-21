<!DOCTYPE html>

<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

  <title> My Shipments </title>

  <link rel = "stylesheet" href = "assets/css/myshipments.css"/>
</head>

<body>

<div class = "top_bar3">
    <div class = "top_bar_logo3">
        <a href = "index.php"> <img src = "images/logo.png"> </a>
    </div>
  <div class = "myShipment">
    <h1> My </h1>
    <h1> Shipments </h1>
  </div>
</div>

<br>

<div class = "track">
  <div class = "grid-container">
    <div class = "gap">
      <div class = "details">
          <input type = "textbox" placeholder = "Search...">
          <h3 class = "shipmentID"> Shipment ID </h3>
          <div class = "area">
            <div class = "details1">
              <p> Shipment No. 19382104512 </p>
              <p> Acc No. 2837824924 </p>
            </div>

            <div>
              <img src = "images/dot.png">
            </div>

          </div>
      </div>

    </div>

    <br>
    <br>

    <div class = "gap">
      <div class = "details">
          <div class = "area">
            <div class = "details1">
              <p> Shipment No. 19382104513 </p>
              <p> Acc No. 2837824924 </p>
            </div>

            <div>
              <img src = "images/dot.png">
            </div>

          </div>
      </div>

    </div>

    <br>
    <br>

    <div class = "gap">
      <div class = "details">
          <div class = "area">
            <div class = "details1">
              <p> Shipment No. 19382104514 </p>
              <p> Acc No. 2837824924 </p>
            </div>

            <div>
              <img src = "images/dot.png">
            </div>

          </div>
      </div>

    </div>
    

  </div>

    <div class="shipmentDetails">

      <div class="map header-row">
        <h3>Details</h3>
        <h3>Tracking</h3>
      </div>

      <div class="row">
        <p class = "des">Defective Phone</p>
        <p class = "ongoing">En route</p>
      </div>

      <div class="row">
        <p class = "des">Defective TV</p>
        <p class = "ongoing">En route</p>
      </div>

      <div class="row">
        <p class = "des">Defective Monitor</p>
        <p class = "ongoing">En route</p>
      </div>
      
    </div>
    
</div>


<?php require "views/footer.php" ?>

<script src="assest/js/myshipments.js"></script>
</body>

</html>