<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Rate Calculator</title>
    <link rel="stylesheet" href="assets/css/rate.css" />
</head>
<body>
    <div class="page-wrapper">
        <header class="top_bar6">
            <div class="top_bar_logo6">
                <a href="index.php"><img src="images/logo.png" alt="Company Logo" /></a>
            </div>
            <div class="myRate6">
                <h1>Rate</h1>
                <h1>Calculator</h1>
            </div>
        </header>

        <main class="main-content">
            <form action="rateresult.php" method="POST" class="form-grid">
                <div class="column-container">
                    <h2 class="section-title">From</h2>
                    <select id="fromCountry" name="fromCountry" class="input-field" disabled>
                        <option value="PH" selected>Philippines</option>
                    </select>
                    <select id="fromCity" name="fromCity" class="input-field" required>
                        <option value="" disabled selected> City </option>
                        <option value="Bacolod">Bacolod</option>
                        <option value="Manila">Manila</option>
                        <option value="Cebu">Cebu</option>
                    </select>

                    <div class="form-section">
                        <h2 class="section-title">Details</h2>
                        <div class="input-group">
                            <input type="text" name="product" placeholder="Products" class="input-field" required />
                            <input type="number" name="weight" min="0" step="0.01" placeholder="Weight in Kg" class="input-field" required />
                            <input type="number" name="pieces" min="1" placeholder="Piece Count" class="input-field" required />
                        </div>
                    </div>
                </div>

                <div class="column-container">
                    <h2 class="section-title">To</h2>
                    <select id="toCountry" name="toCountry" class="input-field" disabled>
                        <option value="PH" selected>Philippines</option>
                    </select>
                    <select id="toCity" name="toCity" class="input-field" required>
                        <option value="" disabled selected> City </option>
                        <option value="Bacolod">Bacolod</option>
                        <option value="Manila">Manila</option>
                        <option value="Cebu">Cebu</option>
                    </select>

                    <div class="form-section">
                        <h2 class="section-title">Type</h2>
                        <div class="checkbox-group">
                            <label class="checkbox-label">
                                <span>Packaging/Box</span>
                                <input type="radio" name="type[]" value="Packaging/Box" class="checkbox-input" />
                            </label>
                            <label class="checkbox-label">
                                <span>Parcel</span>
                                <input type="radio" name="type[]" value="Parcel" class="checkbox-input" />
                            </label>
                            <div class="button-group">
                                <button type="submit" class="button-calculate">Calculate</button>
                                <button type="reset" class="button-reset">Reset</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </main>
    </div>

    <?php require "views/footer.php"; ?>
</body>
</html>