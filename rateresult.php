<?php

$shippingRates = [
    'Bacolod' => ['Bacolod' => 120, 'Manila' => 80, 'Cebu' => 120],
    'Manila' => ['Bacolod' => 80, 'Manila' => 120, 'Cebu' => 120],
    'Cebu' => ['Bacolod' => 100, 'Manila' => 80, 'Cebu' => 120],
];


$fromCountry = 'Philippines';
$toCountry = 'Philippines';

$fromCity = $_POST['fromCity'] ?? '';
$toCity = $_POST['toCity'] ?? '';
$product = htmlspecialchars($_POST['product'] ?? '');
$weight = floatval($_POST['weight'] ?? 0); 
$pieces = intval($_POST['pieces'] ?? 0);
$types = $_POST['type'] ?? [];

$errors = [];
if (!$fromCity || !array_key_exists($fromCity, $shippingRates)) {
    $errors[] = "Invalid FROM city selected.";
}
if (!$toCity || !array_key_exists($toCity, $shippingRates)) {
    $errors[] = "Invalid TO city selected.";
}

// *** CHANGE 1: Update validation to check pieces, not weight ***
if ($pieces <= 0) { 
    $errors[] = "Piece count must be a positive integer.";
}

if (empty($product)) {
    $errors[] = "Product name is required.";
}

$fee = null;
$totalRate = 0;
if (empty($errors)) {
    $fee = $shippingRates[$fromCity][$toCity] ?? null;
    if ($fee === null) {
        $errors[] = "Shipping fee not available for selected cities.";
    } else {
        
        // *** CHANGE 2: Calculate rate using $pieces instead of $weight ***
        $totalRate = $fee * $pieces; 
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Shipping Rate Result</title>
    <link rel="stylesheet" href="assets/css/rateresult.css" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
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

        <main class="container">
        <?php if (!empty($errors)) : ?>
            <div class="card error-card">
                <h2>Calculation Error</h2>
                <div class="error-list">
                    <ul>
                        <?php foreach ($errors as $err) : ?>
                            <li><?= htmlspecialchars($err) ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <p><a href="rate.php" class="back-link">← Go back to Rate Calculator</a></p>
            </div>
        <?php else: ?>
            <div class="card result-card">
                <h1 class = "ratetitle"> Rate Calculation </h1>

                <div class="section-heading">Shipment Details</div>
                <div class="detail-group">
                    <div class="detail-row">
                        <span class="label">From:</span>
                        <span class="value"><?= htmlspecialchars($fromCity) ?>, <?= htmlspecialchars($fromCountry) ?></span>
                    </div>
                    <div class="detail-row">
                        <span class="label">To:</span>
                        <span class="value"><?= htmlspecialchars($toCity) ?>, <?= htmlspecialchars($toCountry) ?></span>
                    </div>
                </div>

                <div class="section-heading">Package Details</div>
                <div class="detail-group">
                    <div class="detail-row">
                        <span class="label">Product(s):</span>
                        <span class="value"><?= $product ?></span>
                    </div>
                    <div class="detail-row">
                        <span class="label">Weight:</span>
                        <span class="value"><?= number_format($weight, 2) ?> kg</span>
                    </div>
                    <div class="detail-row">
                        <span class="label">Pieces (Used for Rate):</span>
                        <span class="value"><?= $pieces ?></span>
                    </div>
                    <div class="detail-row">
                        <span class="label">Type(s):</span>
                        <span class="value type-tags"><?= !empty($types) ? htmlspecialchars(implode(', ', $types)) : 'None' ?></span>
                    </div>
                </div>

                <div class="rate-summary">
                    <hr class="divider"/>
                    <div class="rate-summary-row total-rate">
                        <span class="label"> Total Rate: </span>
                        <span class="value-highlight">₱<?= number_format($totalRate, 2) ?></span>
                    </div>
                </div>

                <button class="button primary-button" onclick="window.location.href='rate.php'">Go Back to Calculator</button>
            </div>
        <?php endif; ?>
    </main>
    
    </div>

    <?php require "views/footer.php"; ?>

</body>

</html>