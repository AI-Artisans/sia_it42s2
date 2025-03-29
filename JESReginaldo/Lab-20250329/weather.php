<?php
$apiKey = "70538de7124aab94325fa83433d1af2f"; // Replace this with your actual API key
$location = "Japan";
$apiUrl = "http://api.weatherstack.com/current?access_key={$apiKey}&query={$location}";

// Initialize cURL session
$ch = curl_init();
// Set cURL options
curl_setopt($ch, CURLOPT_URL, $apiUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

// Execute cURL session and store the response
$response = curl_exec($ch);

// Check if the request was successful
if (curl_errno($ch)) {
    echo "Error: " . curl_error($ch);
    exit;
}

// Close cURL session
curl_close($ch);

// Decode the JSON response
$weatherData = json_decode($response, true);

// Check if the response is valid and contains expected data
if (isset($weatherData['location']) && isset($weatherData['current'])) {
    $locationName = $weatherData['location']['name'];
    $country = $weatherData['location']['country'];
    $localtime = $weatherData['location']['localtime'];
    $weatherIcon = $weatherData['current']['weather_icons'][0];
    $weatherDescription = $weatherData['current']['weather_descriptions'][0];
    $temperature = $weatherData['current']['temperature'];
    $feelsLike = $weatherData['current']['feelslike'];
    $humidity = $weatherData['current']['humidity'];
    $windSpeed = $weatherData['current']['wind_speed'];
    $windDir = $weatherData['current']['wind_dir'];
} else {
    echo "Unable to retrieve weather data.";
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Weather Dashboard</title>
<style>
body {
    font-family: Arial, sans-serif;
    background: linear-gradient(135deg, #6dd5ed, #2193b0);
    text-align: center;
    padding: 20px;
    animation: fadeIn 2s ease-in-out;
}
.weather-container {
    background: rgba(255, 255, 255, 0.9);
    padding: 20px;
    border-radius: 15px;
    box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.2);
    display: inline-block;
    animation: bounceIn 1s ease-in-out;
    transition: transform 0.3s ease;
}
.weather-container:hover {
    transform: scale(1.05);
}
.weather-icon {
    width: 80px;
    height: 80px;
}
h2, p {
    color: #333;
}
@keyframes fadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
}
@keyframes bounceIn {
    0% { transform: scale(0.5); opacity: 0; }
    100% { transform: scale(1); opacity: 1; }
}
</style>
</head>
<body>
<div class="weather-container">
    <h2 id="location"><?php echo $locationName . ", " . $country; ?></h2>
    <p id="localtime">Local Time: <?php echo $localtime; ?></p>
    <img id="weather-icon" class="weather-icon" src="<?php echo $weatherIcon; ?>" alt="Weather Icon">
    <p id="weather-description"><?php echo $weatherDescription; ?></p>
    <p><strong>Temperature:</strong> <span id="temperature"><?php echo $temperature; ?></span>°C</p>
    <p><strong>Feels Like:</strong> <span id="feelslike"><?php echo $feelsLike; ?></span>°C</p>
    <p><strong>Humidity:</strong> <span id="humidity"><?php echo $humidity; ?></span>%</p>
    <p><strong>Wind:</strong> <span id="wind"><?php echo $windSpeed; ?></span> km/h (<span id="wind-dir"><?php echo $windDir; ?></span>)</p>
</div>
</body>
</html>
