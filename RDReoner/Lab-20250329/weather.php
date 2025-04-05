<?php
$apiKey = "af560758ddffe4509002382c630b2dcc";
$location = "Manila";
$apiUrl = "http://api.weatherstack.com/current?access_key={$apiKey}&query={$location}";

// Initialize cURL session
$ch = curl_init();

// Set cURL options
curl_setopt($ch, CURLOPT_URL, $apiUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

// Execute cURL session and store the response
$response = curl_exec($ch);

// Check for cURL errors
if ($response === false) {
    die("Error fetching weather data: " . curl_error($ch));
}

// Close cURL session
curl_close($ch);

// Decode the JSON response
$weatherData = json_decode($response, true);

// Check if the weather data is valid and contains the required keys
if (isset($weatherData['location']) && isset($weatherData['current'])) {
    $locationName = $weatherData['location']['name'];
    $locationCountry = $weatherData['location']['country'];
    $localtime = $weatherData['location']['localtime'];
    $temperature = $weatherData['current']['temperature'];
    $feelslike = $weatherData['current']['feelslike'];
    $humidity = $weatherData['current']['humidity'];
    $windSpeed = $weatherData['current']['wind_speed'];
    $windDir = $weatherData['current']['wind_dir'];
    $weatherIcon = $weatherData['current']['weather_icons'][0];
    $weatherDescription = $weatherData['current']['weather_descriptions'][0];
} else {
    die("Error: Invalid data from the weather API.");
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
  <h2 id="location">
    <?php echo $locationName . ", " . $locationCountry; ?>
  </h2>

  <p id="localtime">
    Local Time: <?php echo $localtime; ?>
  </p>

  <img id="weather-icon" class="weather-icon" 
       src="<?php echo $weatherIcon; ?>" 
       alt="Weather Icon">
  
  <p id="weather-description">
    <?php echo $weatherDescription; ?>
  </p>

  <strong>Temperature:</strong>
  <span id="temperature"><?php echo $temperature; ?></span>°C

  <strong>Feels Like:</strong>
  <span id="feelslike"><?php echo $feelslike; ?></span>°C

  <strong>Humidity:</strong>
  <span id="humidity"><?php echo $humidity; ?></span>%

  <strong>Wind:</strong>
  <span id="wind"><?php echo $windSpeed; ?></span> km/h
  ( <span id="wind-dir"><?php echo $windDir; ?></span> )
</div>

</body>
</html>
