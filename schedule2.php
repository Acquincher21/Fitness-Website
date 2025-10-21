<!DOCTYPE html>

<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

  <title> My Shipments </title>


  <link rel = "stylesheet" href = "assets/css/schedule2.css"/>
</head>

<body>

<div class = "top_bar2">
    <div class = "top_bar_logo2">
        <a href = "index.php"> <img src = "images/logo.png"> </a>
    </div>
  <div class = "myShipment">
    <h1> Schedule </h1>
    <h1> Pickup </h1>
  </div>
</div>

<div class="track7">
  <div class="shipmentDetails7">
    <div class="pickup7">
      <div class="h2-container7">
        <a href = "schedule2.php"> <h1> Scheduled Pickup </h1> </a>
        <a href = "schedule.php"> <h1> Schedule a Pickup </h1> </a>
      </div>
    </div>
  </div>
</div>

<div class = "track">

    <div class ="shipmentDetails">
      <div class = "sched">
        <div>
        <h1> SCHEDULED PICKUP </h1>
        </div>
        <div class ="map">
            <div>
              <h4> History: </h4>
            </div>
            <div class = info2>
              <h4> Details: </h4>
              <h4> Date: </h4>
              <h4> Time: </h4>
              <h4> Date Scheduled: </h4>
            </div>
        </div>
      </div>

      <div class = "status2">
        <div class = "info">
            <div class ="map2">
              <div>
                <p> Package 1 </p>
              </div>
              <div class = info3>
                <p> Smartphone </p>
                <p> 08/04/2025 </p>
                <p> 09:32 am  </p>
                <p> 08/7/2025  </p>
              </div>
          </div>

        </div>
      </div>

       <div class = "status2">
        <div class = "info">
            <div class ="map2">
              <div>
                <p> Package 2 </p>
              </div>
              <div class = info3>
                <p> Defective UPS        </p>
                <p> 07/20/2025 </p>
                <p> 02:32 pm  </p>
                <p> 07/25/2025  </p>
              </div>
          </div>
          
        </div>
      </div>

       <div class = "status2">
        <div class = "info">
            <div class ="map2">
              <div>
                <p> Package 3 </p>
              </div>
              <div class = info3>
                <p> Broken Monitor </p>
                <p> 07/08/2025 </p>
                <p> 10:32 am  </p>
                <p> 07//12/25  </p>
              </div>
          </div>
          
        </div>
      </div>

       <div class = "status2">
        <div class = "info">
            <div class ="map2">
              <div>
                <p> Package 4 </p>
              </div>
              <div class = info3>
                <p> Faulty LED TV </p>
                <p> 06/18/2025 </p>
                <p> 04:25 pm  </p>
                <p> 06/22/2025  </p>
              </div>
          </div>
          
        </div>
      </div>

    </div>

</div>

<?php require "views/footer.php"; ?>


<script src = "schedule.js"> </script>
</body>


</html>