 <!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prayer Times</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="container">
        <h1>Prayer Times</h1>
        
        <!-- Location Input Section -->
        <div class="location-section">
            <p id="location-message">Fetching your location...</p>
            <button id="detect-location" class="btn">Detect Location</button>
            <form id="manual-location-form" style="display:none;">
                <input type="text" id="city" name="city" placeholder="Enter your city">
                <button type="submit" class="btn">Get Times</button>
            </form>
        </div>

        <!-- Prayer Times Section -->
        <div class="prayer-times" id="prayer-times">
            <div class="time-box">
                <span class="prayer-name">Fajr</span>
                <span class="prayer-time">05:23</span>
            </div>
            <div class="time-box">
                <span class="prayer-name">Sunrise</span>
                <span class="prayer-time">06:25</span>
            </div>
            <div class="time-box">
                <span class="prayer-name">Dhuhr</span>
                <span class="prayer-time">12:20</span>
            </div>
            <div class="time-box">
                <span class="prayer-name">Asr</span>
                <span class="prayer-time">15:43</span>
            </div>
            <div class="time-box">
                <span class="prayer-name">Maghrib</span>
                <span class="prayer-time">18:14</span>
            </div>
            <div class="time-box">
                <span class="prayer-name">Isha</span>
                <span class="prayer-time">19:17</span>
            </div>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>