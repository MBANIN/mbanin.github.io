// script.js

// Function to fetch weather data
function fetchWeather() {
    const apiKey = 'YOUR_API_KEY'; // Replace with your OpenWeatherMap API key
    const city = 'Kota Bharu';
    const url = `https://api.openweathermap.org/data/2.5/weather?q=${city}&appid=${apiKey}&units=metric`;

    fetch(url)
        .then(response => response.json())
        .then(data => {
            const weather = document.getElementById('weather');
            weather.innerText = `Weather in ${city}: ${data.weather[0].description}, ${data.main.temp}°C`;
        })
        .catch(error => {
            console.error('Error fetching the weather data:', error);
        });
}

// Function to update activity
function updateActivity(activity) {
    const activityElement = document.getElementById('activity');
    activityElement.innerText = `Current Activity: ${activity}`;
}

// Update time every second
setInterval(updateTime, 1000);

// Fetch weather data when the page loads
fetchWeather();

// Example of setting an activity (this could be fetched dynamically)
updateActivity('Team Meeting');



