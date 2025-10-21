<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title> Schedule a Pickup </title>
    <link rel="stylesheet" href="assets/css/schedule.css" />
</head>

<body>

<div class="top_bar5">
    <div class="top_bar_logo5">
        <a href="index.php"> <img src="images/logo.png" alt="Logo"> </a>
    </div>
    <div class="myShipment5">
        <h1> Schedule </h1>
        <h1> Pickup </h1>
    </div>
</div>

<div class="track6">
    <div class="shipmentDetails6">
        <div class="h2-container6">
            <a href="schedule2.php"> <h1> Scheduled Pickup </h1> </a>
            <a href="schedule.php"> <h1> Schedule a Pickup </h1> </a>
        </div>

        <form id="schedule-form" class="scheduling-form-container">
            <div class="column-container">
                <div class="input-field-group">
                    <span class="field-icon">📍</span>
                    <select name="pickup-location">
                        <option value="" disabled selected>From</option>
                        <option value="iloilo-city">Iloilo City</option>
                        <option value="manila">Manila</option>
                        <option value="cebu">Cebu</option>
                        <option value="davao">Davao</option>
                    </select>
                </div>
                <div class="input-field-group">
                    <span class="field-icon">🚩</span>
                    <select name="destination">
                        <option value="" disabled selected>To</option>
                        <option value="iloilo-city">Iloilo City</option>
                        <option value="manila">Manila</option>
                        <option value="cebu">Cebu</option>
                        <option value="davao">Davao</option>
                    </select>
                </div>
                <div class="input-field-group">
                    <span class="field-icon">📦</span>
                    <input type="text" name="package-details" placeholder="Package Details">
                </div>
            </div>

            <div class="column-container">
                <div class="input-field-group">
                    <span class="field-icon">📅</span>
                    <input type="date" name="pickup-date" placeholder="Pickup Date">
                </div>
                <div class="input-field-group">
                    <span class="field-icon">🕒</span>
                    <input type="time" name="pickup-time" placeholder="Pickup Time">
                </div>
            </div>
        </form>

        <div class="button-container">
            <a href="schedule2.php"><button type="button" class="green">Schedule</button></a>
            <button type="button" id="reset-button" class="red">Reset</button>
        </div>
    </div>
</div>

<?php require "views/footer.php"; ?>

<script src="assets/js/schedule.js"></script>
</body>
</html>